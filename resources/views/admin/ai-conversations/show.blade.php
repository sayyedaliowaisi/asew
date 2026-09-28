@extends('layouts.admin')

@section('title', 'AI Conversation')

@section('content')

@php
    $visitorName = $conversation->visitor_name ?: 'Website Visitor';
    $visitorInitial = strtoupper(mb_substr($visitorName, 0, 1));

    $currentAdminId = auth('admin')->id();

    $isAiMode = $conversation->mode === 'ai';
    $isHumanMode = $conversation->mode === 'human';
    $isClosed = $conversation->mode === 'closed';

    $isAssignedToCurrentAdmin =
        $isHumanMode
        && $conversation->admin_id !== null
        && $currentAdminId !== null
        && (int) $conversation->admin_id === (int) $currentAdminId;

    $isAssignedToAnotherAdmin =
        $isHumanMode
        && $conversation->admin_id !== null
        && $currentAdminId !== null
        && (int) $conversation->admin_id !== (int) $currentAdminId;

    $lastMessageId = (int) ($messages->max('id') ?? 0);
@endphp


<div
    x-data="asewAdminLiveChat()"
    x-init="start()"
    class="mx-auto max-w-6xl space-y-5"
>

    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <section class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

            <div class="min-w-0">

                <a
                    href="{{ route('admin.ai-conversations.index') }}"
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-[#073B66] hover:text-[#E31E24]"
                >
                    <span>←</span>
                    <span>Back to Live Chats</span>
                </a>


                <div class="mt-4 flex items-center gap-3">

                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#032B55] text-sm font-extrabold text-white"
                    >
                        {{ $visitorInitial }}
                    </div>


                    <div class="min-w-0">

                        <h1 class="truncate text-xl font-extrabold text-[#032B55]">
                            {{ $visitorName }}
                        </h1>

                        <div class="mt-1 flex flex-wrap gap-2 text-[11px] font-semibold text-slate-400">

                            <span>
                                Chat #{{ $conversation->id }}
                            </span>

                            <span>•</span>

                            <span>
                                {{ $messages->count() }} messages
                            </span>

                            @if($conversation->visitor_email)

                                <span>•</span>

                                <span>
                                    {{ $conversation->visitor_email }}
                                </span>

                            @endif

                            @if($conversation->visitor_phone)

                                <span>•</span>

                                <span>
                                    {{ $conversation->visitor_phone }}
                                </span>

                            @endif

                        </div>

                    </div>

                </div>

            </div>


            {{-- ACTIONS --}}

            <div class="flex flex-wrap items-center gap-2">

                @if($isAiMode)

                    <form
                        method="POST"
                        action="{{ route('admin.ai-conversations.join', $conversation) }}"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-xs font-extrabold text-white hover:bg-emerald-700"
                        >
                            <span class="h-2 w-2 rounded-full bg-white"></span>

                            Join Conversation
                        </button>

                    </form>

                @endif


                @if($isAssignedToCurrentAdmin)

                    <form
                        method="POST"
                        action="{{ route('admin.ai-conversations.return-to-ai', $conversation) }}"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="rounded-xl bg-[#073B66] px-4 py-2.5 text-xs font-extrabold text-white hover:bg-[#032B55]"
                        >
                            Return to AI
                        </button>

                    </form>

                @endif


                @if(!$isClosed)

                    <form
                        method="POST"
                        action="{{ route('admin.ai-conversations.close', $conversation) }}"
                        onsubmit="return confirm('Close this conversation?')"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="rounded-xl border border-red-200 bg-red-50 px-4 py-2.5 text-xs font-extrabold text-red-600 hover:bg-red-100"
                        >
                            Close
                        </button>

                    </form>

                @endif

            </div>

        </div>


        @if($isAssignedToCurrentAdmin)

            <div class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-xs font-bold text-emerald-700">
                ● You are handling this conversation.
            </div>

        @elseif($isAssignedToAnotherAdmin)

            <div class="mt-4 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-xs font-bold text-amber-700">
                Another ASEW staff member is handling this conversation.
            </div>

        @endif

    </section>


    {{-- SUCCESS --}}

    @if(session('success'))

        <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700">
            {{ session('success') }}
        </div>

    @endif


    {{-- ERROR --}}

    <div
        x-show="error"
        x-cloak
        class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700"
    >
        <span x-text="error"></span>
    </div>


    {{-- =====================================================
        CHAT
    ====================================================== --}}

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- STATUS --}}

        <div class="flex items-center justify-between border-b border-slate-200 bg-slate-50 px-5 py-3">

            <div class="text-xs font-extrabold">

                <span
                    x-show="mode === 'ai'"
                    class="text-blue-700"
                >
                    ● AI is handling this conversation
                </span>


                <span
                    x-show="mode === 'human'"
                    class="text-emerald-700"
                >
                    ● Human staff is handling this conversation
                </span>


                <span
                    x-show="mode === 'closed'"
                    class="text-slate-500"
                >
                    ● Conversation closed
                </span>

            </div>


            <div class="flex items-center gap-2 text-[10px] font-semibold text-slate-400">

                <span
                    class="h-2 w-2 rounded-full"
                    :class="polling ? 'bg-emerald-500' : 'bg-slate-300'"
                ></span>

                <span
                    x-text="polling ? 'Live connected' : 'Connecting...'"
                ></span>

            </div>

        </div>


        {{-- =====================================================
            MESSAGES
        ====================================================== --}}

        <div
            x-ref="chatMessages"
            class="min-h-[500px] max-h-[650px] space-y-5 overflow-y-auto bg-[#F7F9FC] p-5"
        >

            @forelse($messages as $message)

                {{-- CUSTOMER --}}

                @if($message->sender_type === 'user')

                    <div class="flex justify-end">

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tr-md bg-[#073B66] px-4 py-3 text-white shadow-sm">

                                <p class="whitespace-pre-wrap break-words text-sm leading-6">{{ $message->message }}</p>

                            </div>

                            <p class="mt-1 text-right text-[10px] font-semibold text-slate-400">
                                Customer · {{ $message->created_at->format('h:i A') }}
                            </p>

                        </div>

                    </div>


                {{-- AI --}}

                @elseif($message->sender_type === 'assistant')

                    <div class="flex justify-start">

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tl-md border border-slate-200 bg-white px-4 py-3 shadow-sm">

                                <p class="whitespace-pre-wrap break-words text-sm leading-6 text-slate-700">{{ $message->message }}</p>

                            </div>

                            <p class="mt-1 text-[10px] font-semibold text-slate-400">
                                ASEW AI · {{ $message->created_at->format('h:i A') }}
                            </p>

                        </div>

                    </div>


                {{-- ADMIN --}}

                @elseif($message->sender_type === 'admin')

                    <div class="flex justify-start">

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tl-md bg-emerald-600 px-4 py-3 text-white shadow-sm">

                                <p class="whitespace-pre-wrap break-words text-sm leading-6">{{ $message->message }}</p>

                            </div>

                            <p class="mt-1 text-[10px] font-semibold text-emerald-700">

                                {{ $message->admin?->name ?: 'ASEW Staff' }}
                                ·
                                {{ $message->created_at->format('h:i A') }}

                            </p>

                        </div>

                    </div>

                @endif

            @empty

                <div
                    x-show="liveMessages.length === 0"
                    class="py-20 text-center text-sm text-slate-400"
                >
                    No messages in this conversation.
                </div>

            @endforelse


            {{-- LIVE MESSAGES --}}

            <template
                x-for="item in liveMessages"
                :key="item.id"
            >

                <div>

                    {{-- CUSTOMER --}}

                    <div
                        x-show="item.sender_type === 'user'"
                        class="flex justify-end"
                    >

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tr-md bg-[#073B66] px-4 py-3 text-white">

                                <p
                                    class="whitespace-pre-wrap break-words text-sm leading-6"
                                    x-text="item.content"
                                ></p>

                            </div>

                            <p class="mt-1 text-right text-[10px] font-semibold text-slate-400">

                                Customer ·
                                <span x-text="formatTime(item.created_at)"></span>

                            </p>

                        </div>

                    </div>


                    {{-- AI --}}

                    <div
                        x-show="item.sender_type === 'assistant'"
                        class="flex justify-start"
                    >

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tl-md border border-slate-200 bg-white px-4 py-3">

                                <p
                                    class="whitespace-pre-wrap break-words text-sm leading-6 text-slate-700"
                                    x-text="item.content"
                                ></p>

                            </div>

                            <p class="mt-1 text-[10px] font-semibold text-slate-400">

                                ASEW AI ·
                                <span x-text="formatTime(item.created_at)"></span>

                            </p>

                        </div>

                    </div>


                    {{-- ADMIN --}}

                    <div
                        x-show="item.sender_type === 'admin'"
                        class="flex justify-start"
                    >

                        <div class="max-w-[85%] sm:max-w-[75%]">

                            <div class="rounded-2xl rounded-tl-md bg-emerald-600 px-4 py-3 text-white">

                                <p
                                    class="whitespace-pre-wrap break-words text-sm leading-6"
                                    x-text="item.content"
                                ></p>

                            </div>

                            <p class="mt-1 text-[10px] font-semibold text-emerald-700">

                                <span x-text="item.sender_name || 'ASEW Staff'"></span>

                                ·

                                <span x-text="formatTime(item.created_at)"></span>

                            </p>

                        </div>

                    </div>

                </div>

            </template>

        </div>


        {{-- =====================================================
            STAFF REPLY
        ====================================================== --}}

        @if($isAssignedToCurrentAdmin)

            <div class="border-t border-slate-200 bg-white p-4">

                <div class="mb-3 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-2.5 text-xs font-bold text-emerald-700">
                    ● You are replying as ASEW Staff
                </div>


                <form
                    @submit.prevent="sendMessage()"
                    class="flex items-end gap-2"
                >

                    <textarea
                        x-model="input"
                        rows="2"
                        maxlength="2000"
                        placeholder="Reply as ASEW Staff..."
                        class="min-h-[54px] flex-1 resize-none rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10"
                        @keydown.enter="
                            if (!$event.shiftKey) {
                                $event.preventDefault();
                                sendMessage();
                            }
                        "
                    ></textarea>


                    <button
                        type="submit"
                        class="inline-flex min-h-[54px] min-w-[110px] cursor-pointer items-center justify-center gap-2 rounded-xl bg-emerald-600 px-5 py-3 text-sm font-extrabold text-white shadow-sm transition hover:bg-emerald-700"
                    >

                        <span x-show="!sending">
                            Send
                        </span>


                        <svg
                            x-show="!sending"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                            <path d="M22 2 11 13"></path>
                        </svg>


                        <span x-show="sending">
                            Sending...
                        </span>

                    </button>

                </form>


                <div class="mt-2 flex justify-between gap-3">

                    <p class="text-[10px] font-medium text-slate-400">
                        Enter to send · Shift + Enter for new line
                    </p>

                    <p
                        class="text-[10px] font-semibold text-slate-400"
                        x-text="input.length + '/2000'"
                    ></p>

                </div>

            </div>

        @endif


        @if($isAiMode)

            <div class="border-t border-blue-100 bg-blue-50 px-5 py-4 text-center text-xs font-semibold text-blue-700">
                AI is currently handling this conversation.
                Click <strong>Join Conversation</strong> to reply manually.
            </div>

        @endif


        @if($isAssignedToAnotherAdmin)

            <div class="border-t border-amber-200 bg-amber-50 px-5 py-4 text-center text-xs font-semibold text-amber-700">
                Another ASEW staff member is handling this conversation.
            </div>

        @endif


        @if($isClosed)

            <div class="border-t border-slate-200 bg-slate-50 px-5 py-4 text-center text-xs font-semibold text-slate-500">
                This conversation has been closed.
            </div>

        @endif

    </section>

</div>


{{-- =========================================================
    LIVE CHAT JAVASCRIPT

    IMPORTANT:
    We define a normal global function instead of waiting for
    "alpine:init". This prevents script-order problems.
========================================================= --}}

<script>

window.asewAdminLiveChat = function () {

    return {

        input: '',

        sending: false,

        error: '',

        liveMessages: [],

        mode: @js($conversation->mode),

        adminId: @js(
            $conversation->admin_id !== null
                ? (int) $conversation->admin_id
                : null
        ),

        currentAdminId: @js(
            $currentAdminId !== null
                ? (int) $currentAdminId
                : null
        ),

        lastMessageId: @js($lastMessageId),

        pollTimer: null,

        pollBusy: false,

        polling: false,


        /*
        |--------------------------------------------------------------------------
        | START
        |--------------------------------------------------------------------------
        */

        start() {

            this.$nextTick(() => {
                this.scrollToBottom();
            });

            this.fetchMessages();

            this.pollTimer = window.setInterval(
                () => this.fetchMessages(),
                3000
            );

        },


        /*
        |--------------------------------------------------------------------------
        | POLLING
        |--------------------------------------------------------------------------
        */

        async fetchMessages() {

            if (this.pollBusy) {
                return;
            }

            this.pollBusy = true;


            try {

                const baseUrl =
                    @js(
                        route(
                            'admin.ai-conversations.messages.index',
                            $conversation
                        )
                    );


                const url =
                    baseUrl
                    + '?after_id='
                    + encodeURIComponent(
                        this.lastMessageId
                    );


                const response = await fetch(
                    url,
                    {
                        method: 'GET',

                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },

                        credentials: 'same-origin',

                        cache: 'no-store',
                    }
                );


                if (
                    response.status === 401
                    || response.status === 419
                ) {

                    this.error =
                        'Your admin session has expired. Please sign in again.';

                    this.polling = false;

                    return;
                }


                if (response.status === 404) {

                    this.error =
                        'This conversation is no longer available.';

                    this.polling = false;

                    return;
                }


                if (!response.ok) {

                    this.polling = false;

                    return;
                }


                const data = await response.json();


                if (!data.success) {

                    this.polling = false;

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | SYNC MODE
                |--------------------------------------------------------------------------
                */

                if (typeof data.mode === 'string') {
                    this.mode = data.mode;
                }


                if (
                    data.admin_id === null
                    || typeof data.admin_id === 'undefined'
                ) {

                    this.adminId = null;

                } else {

                    this.adminId =
                        Number(data.admin_id);

                }


                /*
                |--------------------------------------------------------------------------
                | NEW MESSAGES
                |--------------------------------------------------------------------------
                */

                const messages =
                    Array.isArray(data.messages)
                        ? data.messages
                        : [];


                let added = false;


                messages.forEach(message => {

                    const id =
                        Number(message.id);


                    if (!Number.isFinite(id)) {
                        return;
                    }


                    const exists =
                        this.liveMessages.some(
                            item =>
                                Number(item.id) === id
                        );


                    if (!exists) {

                        this.liveMessages.push(
                            message
                        );

                        added = true;
                    }

                });


                /*
                |--------------------------------------------------------------------------
                | CURSOR
                |--------------------------------------------------------------------------
                */

                const cursor =
                    Number(
                        data.last_message_id
                        ?? this.lastMessageId
                    );


                if (Number.isFinite(cursor)) {

                    this.lastMessageId =
                        Math.max(
                            this.lastMessageId,
                            cursor
                        );

                }


                this.polling = true;


                if (added) {

                    this.$nextTick(() => {
                        this.scrollToBottom();
                    });

                }


            } catch (error) {

                console.error(
                    'ASEW live polling error:',
                    error
                );

                this.polling = false;

            } finally {

                this.pollBusy = false;

            }

        },


        /*
        |--------------------------------------------------------------------------
        | SEND MESSAGE
        |--------------------------------------------------------------------------
        */

        async sendMessage() {

            const message =
                this.input.trim();


            if (!message || this.sending) {
                return;
            }


            /*
             * Browser state can become stale.
             * Backend remains the final authority.
             */

            if (
                this.mode !== 'human'
                || Number(this.adminId)
                    !== Number(this.currentAdminId)
            ) {

                this.error =
                    'You no longer control this conversation.';

                await this.fetchMessages();

                return;
            }


            this.error = '';

            this.sending = true;


            try {

                const response = await fetch(

                    @js(
                        route(
                            'admin.ai-conversations.messages.store',
                            $conversation
                        )
                    ),

                    {
                        method: 'POST',

                        headers: {

                            'Content-Type':
                                'application/json',

                            'Accept':
                                'application/json',

                            'X-Requested-With':
                                'XMLHttpRequest',

                            'X-CSRF-TOKEN':
                                @js(csrf_token()),

                        },

                        credentials:
                            'same-origin',

                        body:
                            JSON.stringify({
                                message: message,
                            }),
                    }

                );


                const data =
                    await response
                        .json()
                        .catch(() => ({}));


                /*
                |--------------------------------------------------------------------------
                | SESSION
                |--------------------------------------------------------------------------
                */

                if (
                    response.status === 401
                    || response.status === 419
                ) {

                    this.error =
                        'Your admin session has expired. Please sign in again.';

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | OWNERSHIP / MODE
                |--------------------------------------------------------------------------
                */

                if (
                    response.status === 403
                    || response.status === 409
                ) {

                    this.error =
                        data.message
                        || 'You can no longer reply to this conversation.';

                    await this.fetchMessages();

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | FAILURE
                |--------------------------------------------------------------------------
                */

                if (
                    !response.ok
                    || !data.success
                ) {

                    throw new Error(
                        data.message
                        || 'Message could not be sent.'
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | SUCCESS
                |--------------------------------------------------------------------------
                */

                this.input = '';


                if (data.message) {

                    const id =
                        Number(data.message.id);


                    const exists =
                        this.liveMessages.some(
                            item =>
                                Number(item.id) === id
                        );


                    if (!exists) {

                        this.liveMessages.push(
                            data.message
                        );

                    }


                    if (Number.isFinite(id)) {

                        this.lastMessageId =
                            Math.max(
                                this.lastMessageId,
                                id
                            );

                    }

                }


                this.$nextTick(() => {
                    this.scrollToBottom();
                });


            } catch (error) {

                console.error(
                    'ASEW send message error:',
                    error
                );

                this.error =
                    error.message
                    || 'Message could not be sent.';

            } finally {

                this.sending = false;

            }

        },


        /*
        |--------------------------------------------------------------------------
        | TIME
        |--------------------------------------------------------------------------
        */

        formatTime(value) {

            if (!value) {
                return '';
            }


            const date =
                new Date(value);


            if (
                Number.isNaN(
                    date.getTime()
                )
            ) {
                return '';
            }


            return date.toLocaleTimeString(
                [],
                {
                    hour: '2-digit',
                    minute: '2-digit',
                }
            );

        },


        /*
        |--------------------------------------------------------------------------
        | SCROLL
        |--------------------------------------------------------------------------
        */

        scrollToBottom() {

            this.$nextTick(() => {

                const box =
                    this.$refs.chatMessages;


                if (!box) {
                    return;
                }


                box.scrollTop =
                    box.scrollHeight;

            });

        },

    };

};

</script>

@endsection