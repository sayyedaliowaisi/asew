<?php

namespace Tests\Feature\Ai;

use App\Models\Admin;
use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class AiHandoffRaceTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | HELPERS
    |--------------------------------------------------------------------------
    */

    private function createConversation(
        string $mode = 'ai',
        ?Admin $admin = null
    ): AiConversation {
        return AiConversation::create([
            'public_token' => (string) Str::uuid(),

            'mode' => $mode,

            'admin_id' =>
                $admin?->id,

            'human_joined_at' =>
                $mode === 'human'
                    ? now()
                    : null,

            'last_message_at' =>
                now(),
        ]);
    }


    private function createAdmin(): Admin
    {
        return Admin::create([
            'name' => 'ASEW Staff',

            'email' =>
                'staff-' . Str::uuid() . '@asew.test',

            'password' =>
                'password',
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | HUMAN MODE
    |--------------------------------------------------------------------------
    |
    | If an admin has already joined, customer messages must be stored but
    | the public endpoint must report that a human is handling the chat.
    |
    */

    public function test_customer_message_is_stored_when_conversation_is_human(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response =
            $this->postJson(
                route('ai.chat'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'message' =>
                        'I need more information.',
                ]
            );


        $response
            ->assertOk()

            ->assertJson([
                'success' => true,

                'message' => null,

                'conversation_token' =>
                    $conversation->public_token,

                'mode' => 'human',

                'handled_by' => 'human',
            ]);


        $this->assertDatabaseHas(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'user',

                'message' =>
                    'I need more information.',
            ]
        );


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'assistant',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CLOSED MODE
    |--------------------------------------------------------------------------
    |
    | Closed chats must reject new messages and must not create a DB row.
    |
    */

    public function test_closed_conversation_rejects_ai_chat_without_storing_message(): void
    {
        $conversation =
            $this->createConversation(
                'closed'
            );

        $conversation->update([
            'closed_at' =>
                now(),
        ]);


        $response =
            $this->postJson(
                route('ai.chat'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'message' =>
                        'Can anyone help me?',
                ]
            );


        $response
            ->assertStatus(409)

            ->assertJson([
                'success' => false,

                'conversation_token' =>
                    $conversation->public_token,

                'mode' => 'closed',

                'handled_by' => null,
            ]);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Can anyone help me?',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | HUMAN MESSAGE ENDPOINT
    |--------------------------------------------------------------------------
    */

    public function test_customer_can_send_message_to_joined_human_staff(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response =
            $this->postJson(
                route('ai.human-message'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'message' =>
                        'Please send me the details.',
                ]
            );


        $response
            ->assertOk()

            ->assertJson([
                'success' => true,

                'conversation_token' =>
                    $conversation->public_token,

                'mode' => 'human',

                'handled_by' => 'human',
            ]);


        $this->assertDatabaseHas(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'user',

                'message' =>
                    'Please send me the details.',
            ]
        );
    }


    public function test_human_message_endpoint_rejects_ai_mode(): void
    {
        $conversation =
            $this->createConversation(
                'ai'
            );


        $response =
            $this->postJson(
                route('ai.human-message'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'message' =>
                        'Hello staff',
                ]
            );


        $response
            ->assertStatus(409)

            ->assertJson([
                'success' => false,

                'conversation_token' =>
                    $conversation->public_token,

                'mode' => 'ai',

                'handled_by' => 'ai',
            ]);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Hello staff',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ADMIN JOIN
    |--------------------------------------------------------------------------
    */

    public function test_admin_can_take_over_ai_conversation(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'ai'
            );


        $response =
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


        $response->assertRedirect();


        $conversation->refresh();


        $this->assertSame(
            'human',
            $conversation->mode
        );


        $this->assertSame(
            $admin->id,
            (int) $conversation->admin_id
        );


        $this->assertNotNull(
            $conversation->human_joined_at
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ADMIN MESSAGE
    |--------------------------------------------------------------------------
    */

    public function test_joined_admin_can_send_message(): void
    {
        $admin =
            $this->createAdmin();

        $conversation =
            $this->createConversation(
                'human',
                $admin
            );


        $response =
            $this
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
                            'Hello, this is ASEW support.',
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
                    'Hello, this is ASEW support.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | OTHER ADMIN
    |--------------------------------------------------------------------------
    */

    public function test_other_admin_cannot_send_message_to_owned_conversation(): void
    {
        $owner =
            $this->createAdmin();

        $otherAdmin =
            $this->createAdmin();


        $conversation =
            $this->createConversation(
                'human',
                $owner
            );


        $response =
            $this
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
                            'I should not be able to send this.',
                    ]
                );


        $response->assertStatus(403);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'admin_id' =>
                    $otherAdmin->id,

                'message' =>
                    'I should not be able to send this.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RETURN TO AI
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


        $response =
            $this
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


        $response->assertRedirect();


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
    | PUBLIC POLLING
    |--------------------------------------------------------------------------
    |
    | Customer polling must expose only AI/admin messages.
    |
    */

    public function test_public_polling_does_not_return_customer_messages(): void
    {
        $conversation =
            $this->createConversation(
                'human'
            );


        AiMessage::create([
            'ai_conversation_id' =>
                $conversation->id,

            'sender_type' =>
                'user',

            'admin_id' =>
                null,

            'message' =>
                'Private customer message',

            'is_read' =>
                false,
        ]);


        $assistantMessage =
            AiMessage::create([
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'assistant',

                'admin_id' =>
                    null,

                'message' =>
                    'AI response',

                'is_read' =>
                    true,
            ]);


        $response =
            $this->postJson(
                route('ai.messages'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'after_id' =>
                        0,
                ]
            );


        $response
            ->assertOk()

            ->assertJson([
                'success' => true,
            ]);


        $messages =
            $response->json(
                'messages'
            );


        $this->assertCount(
            1,
            $messages
        );


        $this->assertSame(
            'assistant',
            $messages[0]['sender_type']
        );


        $this->assertSame(
            'AI response',
            $messages[0]['content']
        );


        $this->assertSame(
            $assistantMessage->id,
            $response->json(
                'last_message_id'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SAFE POLLING CURSOR
    |--------------------------------------------------------------------------
    */

    public function test_public_polling_cursor_does_not_advance_to_customer_message(): void
    {
        $conversation =
            $this->createConversation(
                'human'
            );


        $assistant =
            AiMessage::create([
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'assistant',

                'admin_id' =>
                    null,

                'message' =>
                    'Visible response',

                'is_read' =>
                    true,
            ]);


        $customer =
            AiMessage::create([
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'user',

                'admin_id' =>
                    null,

                'message' =>
                    'Hidden customer message',

                'is_read' =>
                    false,
            ]);


        $response =
            $this->postJson(
                route('ai.messages'),
                [
                    'conversation_token' =>
                        $conversation->public_token,

                    'after_id' =>
                        0,
                ]
            );


        $response->assertOk();


        $this->assertSame(
            $assistant->id,
            $response->json(
                'last_message_id'
            )
        );


        $this->assertNotSame(
            $customer->id,
            $response->json(
                'last_message_id'
            )
        );
    }
}