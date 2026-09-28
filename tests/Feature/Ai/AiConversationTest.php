<?php

namespace Tests\Feature\Ai;

use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class AiConversationTest extends TestCase
{
    use RefreshDatabase;

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */

    private function createConversation(
        string $mode = 'ai'
    ): AiConversation {

        return AiConversation::create([
            'public_token' => (string) Str::uuid(),
            'mode' => $mode,
            'last_message_at' => now(),
        ]);
    }


    private function createMessage(
        AiConversation $conversation,
        string $senderType,
        string $message
    ): AiMessage {

        return AiMessage::create([
            'ai_conversation_id' => $conversation->id,
            'sender_type' => $senderType,
            'admin_id' => null,
            'message' => $message,
            'is_read' => false,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Invalid AI Chat Token
    |--------------------------------------------------------------------------
    */

    public function test_invalid_conversation_token_returns_404(): void
    {
        $token =
            '11111111-1111-4111-8111-111111111111';


        $response = $this->postJson(
            '/ai/chat',
            [
                'message' =>
                    'Hello ASEW',

                'conversation_token' =>
                    $token,
            ]
        );


        $response->assertNotFound();
    }


    /*
    |--------------------------------------------------------------------------
    | Polling Invalid Token
    |--------------------------------------------------------------------------
    |
    | Public polling now uses POST so the conversation UUID does not need
    | to appear in the URL query string.
    |
    */

    public function test_polling_invalid_conversation_returns_404(): void
    {
        $response = $this->postJson(
            '/ai/messages',
            [
                'conversation_token' =>
                    '11111111-1111-4111-8111-111111111111',

                'after_id' => 0,
            ]
        );


        $response
            ->assertNotFound()
            ->assertJson([
                'success' => false,
                'message' =>
                    'Conversation not found.',
            ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Closed Conversation
    |--------------------------------------------------------------------------
    */

    public function test_closed_conversation_rejects_ai_chat(): void
    {
        $conversation =
            $this->createConversation(
                'closed'
            );


        $conversation->update([
            'closed_at' => now(),
        ]);


        $response = $this->postJson(
            '/ai/chat',
            [
                'message' =>
                    'Tell me about concrete testing equipment.',

                'conversation_token' =>
                    $conversation->public_token,
            ]
        );


        $response
            ->assertStatus(409)
            ->assertJson([
                'success' => false,
                'mode' => 'closed',
            ]);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Tell me about concrete testing equipment.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Closed Human Message
    |--------------------------------------------------------------------------
    */

    public function test_closed_conversation_rejects_human_message(): void
    {
        $conversation =
            $this->createConversation(
                'closed'
            );


        $conversation->update([
            'closed_at' => now(),
        ]);


        $response = $this->postJson(
            '/ai/human-message',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'message' =>
                    'Hello ASEW staff',
            ]
        );


        $response
            ->assertStatus(409)
            ->assertJson([
                'success' => false,
                'mode' => 'closed',
            ]);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'Hello ASEW staff',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Human Endpoint Requires Human Mode
    |--------------------------------------------------------------------------
    */

    public function test_human_message_requires_human_mode(): void
    {
        $conversation =
            $this->createConversation(
                'ai'
            );


        $response = $this->postJson(
            '/ai/human-message',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'message' =>
                    'I need human assistance.',
            ]
        );


        $response
            ->assertStatus(409)
            ->assertJson([
                'success' => false,
                'mode' => 'ai',
            ]);


        $this->assertDatabaseMissing(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'message' =>
                    'I need human assistance.',
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Human Mode Stores Customer Message
    |--------------------------------------------------------------------------
    */

    public function test_customer_can_send_message_in_human_mode(): void
    {
        $conversation =
            $this->createConversation(
                'human'
            );


        $response = $this->postJson(
            '/ai/human-message',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'message' =>
                    'Please explain the machine specifications.',
            ]
        );


        $response
            ->assertOk()
            ->assertJson([
                'success' => true,
                'mode' => 'human',
                'handled_by' => 'human',
            ])
            ->assertJsonStructure([
                'message_id',
                'conversation_token',
            ]);


        $this->assertDatabaseHas(
            'ai_messages',
            [
                'ai_conversation_id' =>
                    $conversation->id,

                'sender_type' =>
                    'user',

                'message' =>
                    'Please explain the machine specifications.',

                'is_read' =>
                    false,
            ]
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Public Polling
    |--------------------------------------------------------------------------
    |
    | Customer must receive only assistant/admin messages.
    |
    | Customer's own messages are already present in the widget and must not
    | be returned again by polling.
    |
    */

    public function test_public_polling_only_returns_ai_and_admin_messages(): void
    {
        $conversation =
            $this->createConversation();


        $userMessage =
            $this->createMessage(
                $conversation,
                'user',
                'Customer question'
            );


        $assistantMessage =
            $this->createMessage(
                $conversation,
                'assistant',
                'ASEW AI response'
            );


        $response = $this->postJson(
            '/ai/messages',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'after_id' => 0,
            ]
        );


        $response
            ->assertOk()
            ->assertJson([
                'success' => true,
                'mode' => 'ai',
            ]);


        $ids = collect(
            $response->json(
                'messages'
            )
        )->pluck('id');


        $this->assertFalse(
            $ids->contains(
                $userMessage->id
            )
        );


        $this->assertTrue(
            $ids->contains(
                $assistantMessage->id
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Polling Cursor Security
    |--------------------------------------------------------------------------
    |
    | A customer message may have a higher DB ID than an assistant message.
    |
    | Because public polling does not return customer messages, that customer
    | message must NOT advance the public polling cursor.
    |
    */

    public function test_public_polling_cursor_does_not_advance_to_customer_message(): void
    {
        $conversation =
            $this->createConversation();


        $assistantMessage =
            $this->createMessage(
                $conversation,
                'assistant',
                'AI response'
            );


        /*
         * Higher database ID.
         *
         * This must NOT affect the public polling cursor.
         */
        $this->createMessage(
            $conversation,
            'user',
            'Customer follow-up'
        );


        $response = $this->postJson(
            '/ai/messages',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'after_id' => 0,
            ]
        );


        $response->assertOk();


        $this->assertSame(
            $assistantMessage->id,
            (int) $response->json(
                'last_message_id'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Empty Poll
    |--------------------------------------------------------------------------
    |
    | If no new assistant/admin message exists, the server must preserve the
    | browser's existing cursor.
    |
    */

    public function test_empty_poll_keeps_existing_cursor(): void
    {
        $conversation =
            $this->createConversation();


        $response = $this->postJson(
            '/ai/messages',
            [
                'conversation_token' =>
                    $conversation->public_token,

                'after_id' => 25,
            ]
        );


        $response->assertOk();


        $this->assertSame(
            25,
            (int) $response->json(
                'last_message_id'
            )
        );


        $this->assertSame(
            [],
            $response->json(
                'messages'
            )
        );
    }
}