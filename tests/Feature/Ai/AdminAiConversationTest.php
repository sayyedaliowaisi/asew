<?php

namespace Tests\Feature\Ai;

use App\Models\Admin;
use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class AdminAiConversationTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */

    private function createAdmin(
        string $email = 'admin@asew.test'
    ): Admin {

        return Admin::create([
            'name' => 'ASEW Admin',
            'email' => $email,
            'password' => 'password123',
        ]);
    }


    private function createConversation(
        string $mode = 'ai',
        ?Admin $admin = null
    ): AiConversation {

        return AiConversation::create([
            'public_token' =>
                (string) Str::uuid(),

            'mode' =>
                $mode,

            'admin_id' =>
                $admin?->id,

            'human_joined_at' =>
                $mode === 'human'
                    ? now()
                    : null,

            'closed_at' =>
                $mode === 'closed'
                    ? now()
                    : null,

            'last_message_at' =>
                now(),
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

    public function test_guest_cannot_open_live_ai_conversations(): void
    {
        $response = $this->get(
            route('admin.ai-conversations.index')
        );

        $response->assertRedirect();
    }


    /*
    |--------------------------------------------------------------------------
    | Admin Can Open Conversation
    |--------------------------------------------------------------------------
    */

    public function test_authenticated_admin_can_open_conversation(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation();


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->get(
                route(
                    'admin.ai-conversations.show',
                    $conversation
                )
            );


        $response->assertOk();
    }


    /*
    |--------------------------------------------------------------------------
    | Join Conversation
    |--------------------------------------------------------------------------
    */

    public function test_admin_can_join_ai_conversation(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation('ai');


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.join',
                    $conversation
                )
            );


        $response->assertRedirect(
            route(
                'admin.ai-conversations.show',
                $conversation
            )
        );


        $conversation->refresh();


        $this->assertSame(
            'human',
            $conversation->mode
        );


        $this->assertSame(
            $admin->id,
            $conversation->admin_id
        );


        $this->assertNotNull(
            $conversation->human_joined_at
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Existing Customer Messages Become Read
    |--------------------------------------------------------------------------
    */

    public function test_joining_conversation_marks_existing_customer_messages_read(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation('ai');


        $message = AiMessage::create([
            'ai_conversation_id' =>
                $conversation->id,

            'sender_type' =>
                'user',

            'admin_id' =>
                null,

            'message' =>
                'I need help with concrete testing.',

            'is_read' =>
                false,
        ]);


        $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.join',
                    $conversation
                )
            );


        $message->refresh();


        $this->assertTrue(
            $message->is_read
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Another Admin Cannot Take Over
    |--------------------------------------------------------------------------
    */

    public function test_another_admin_cannot_join_conversation_already_owned_by_staff(): void
    {
        $firstAdmin =
            $this->createAdmin(
                'first@asew.test'
            );

        $secondAdmin =
            $this->createAdmin(
                'second@asew.test'
            );


        $conversation =
            $this->createConversation(
                'human',
                $firstAdmin
            );


        $response = $this
            ->actingAs(
                $secondAdmin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.join',
                    $conversation
                )
            );


        $response->assertStatus(409);


        $conversation->refresh();


        $this->assertSame(
            'human',
            $conversation->mode
        );


        $this->assertSame(
            $firstAdmin->id,
            $conversation->admin_id
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Assigned Admin Can Send Message
    |--------------------------------------------------------------------------
    */

    public function test_assigned_admin_can_send_human_message(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->postJson(
                route(
                    'admin.ai-conversations.messages.store',
                    $conversation
                ),
                [
                    'message' =>
                        'Hello, this is the ASEW team.',
                ]
            );


        $response
            ->assertOk()
            ->assertJson([
                'success' => true,
            ]);


        $this->assertDatabaseHas(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'admin',

                'admin_id' =>
                    $admin->id,

                'message' =>
                    'Hello, this is the ASEW team.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Another Admin Cannot Reply
    |--------------------------------------------------------------------------
    */

    public function test_unassigned_admin_cannot_send_message(): void
    {
        $assignedAdmin =
            $this->createAdmin(
                'assigned@asew.test'
            );

        $otherAdmin =
            $this->createAdmin(
                'other@asew.test'
            );


        $conversation =
            $this->createConversation(
                'human',
                $assignedAdmin
            );


        $response = $this
            ->actingAs(
                $otherAdmin,
                'admin'
            )
            ->postJson(
                route(
                    'admin.ai-conversations.messages.store',
                    $conversation
                ),
                [
                    'message' =>
                        'Unauthorized staff reply.',
                ]
            );


        $response->assertStatus(403);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Unauthorized staff reply.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Cannot Send Admin Message In AI Mode
    |--------------------------------------------------------------------------
    */

    public function test_admin_cannot_send_human_message_before_joining(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation('ai');


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->postJson(
                route(
                    'admin.ai-conversations.messages.store',
                    $conversation
                ),
                [
                    'message' =>
                        'Human reply without joining.',
                ]
            );


        $response->assertStatus(409);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Human reply without joining.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Return To AI
    |--------------------------------------------------------------------------
    */

    public function test_assigned_admin_can_return_conversation_to_ai(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.return-to-ai',
                    $conversation
                )
            );


        $response->assertRedirect(
            route(
                'admin.ai-conversations.show',
                $conversation
            )
        );


        $conversation->refresh();


        $this->assertSame(
            'ai',
            $conversation->mode
        );


        $this->assertNull(
            $conversation->admin_id
        );


        $this->assertNull(
            $conversation->human_joined_at
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Other Admin Cannot Return Assigned Chat To AI
    |--------------------------------------------------------------------------
    */

    public function test_other_admin_cannot_return_owned_conversation_to_ai(): void
    {
        $assignedAdmin =
            $this->createAdmin(
                'assigned@asew.test'
            );

        $otherAdmin =
            $this->createAdmin(
                'other@asew.test'
            );


        $conversation =
            $this->createConversation(
                'human',
                $assignedAdmin
            );


        $response = $this
            ->actingAs(
                $otherAdmin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.return-to-ai',
                    $conversation
                )
            );


        $response->assertStatus(403);


        $conversation->refresh();


        $this->assertSame(
            'human',
            $conversation->mode
        );


        $this->assertSame(
            $assignedAdmin->id,
            $conversation->admin_id
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Close Conversation
    |--------------------------------------------------------------------------
    */

    public function test_assigned_admin_can_close_conversation(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.close',
                    $conversation
                )
            );


        $response->assertRedirect(
            route(
                'admin.ai-conversations.index'
            )
        );


        $conversation->refresh();


        $this->assertSame(
            'closed',
            $conversation->mode
        );


        $this->assertNotNull(
            $conversation->closed_at
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Closed Conversation Cannot Be Joined
    |--------------------------------------------------------------------------
    */

    public function test_closed_conversation_cannot_be_joined(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'closed'
            );


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->post(
                route(
                    'admin.ai-conversations.join',
                    $conversation
                )
            );


        $response->assertStatus(409);


        $conversation->refresh();


        $this->assertSame(
            'closed',
            $conversation->mode
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Admin Polling Cursor
    |--------------------------------------------------------------------------
    */

    public function test_admin_polling_cursor_only_advances_to_returned_messages(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        /*
         * Create more than the controller's 100-message polling limit.
         */
        for ($i = 1; $i <= 105; $i++) {

            AiMessage::create([
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'user',

                'admin_id' =>
                    null,

                'message' =>
                    'Message ' . $i,

                'is_read' =>
                    false,
            ]);
        }


        $response = $this
            ->actingAs(
                $admin,
                'admin'
            )
            ->getJson(
                route(
                    'admin.ai-conversations.messages.index',
                    $conversation
                )
                . '?after_id=0'
            );


        $response->assertOk();


        $messages = collect(
            $response->json('messages')
        );


        $this->assertCount(
            100,
            $messages
        );


        $this->assertSame(
            (int) $messages->max('id'),
            (int) $response->json(
                'last_message_id'
            )
        );


        /*
         * Five messages still exist after the returned cursor.
         */
        $remaining = AiMessage::query()
            ->where(
                'ai_conversation_id',
                $conversation->id
            )
            ->where(
                'id',
                '>',
                (int) $response->json(
                    'last_message_id'
                )
            )
            ->count();


        $this->assertSame(
            5,
            $remaining
        );
    }
}