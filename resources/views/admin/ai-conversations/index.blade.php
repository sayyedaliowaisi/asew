@extends('layouts.admin')

@section('title', 'Live AI Chats')


@section('content')

<div class="space-y-6">

    {{-- =====================================================
        PAGE HEADER
    ====================================================== --}}

    <div
        class="
            flex
            flex-col
            gap-4
            lg:flex-row
            lg:items-center
            lg:justify-between
        "
    >

        <div>

            <p
                class="
                    text-xs
                    font-bold
                    uppercase
                    tracking-[0.18em]
                    text-[#E31E24]
                "
            >
                AI & Human Support
            </p>


            <h1
                class="
                    mt-1
                    text-2xl
                    font-extrabold
                    tracking-tight
                    text-[#032B55]
                    sm:text-3xl
                "
            >
                Live AI Chats
            </h1>


            <p class="mt-2 text-sm text-slate-500">
                Monitor AI conversations and take over when human assistance is required.
            </p>

        </div>


        {{-- Live indicator --}}

        <div
            class="
                inline-flex
                w-fit
                items-center
                gap-2
                rounded-full
                border
                border-emerald-200
                bg-emerald-50
                px-3
                py-2
                text-xs
                font-bold
                text-emerald-700
            "
        >

            <span class="relative flex h-2.5 w-2.5">

                <span
                    class="
                        absolute
                        inline-flex
                        h-full
                        w-full
                        animate-ping
                        rounded-full
                        bg-emerald-400
                        opacity-75
                    "
                ></span>

                <span
                    class="
                        relative
                        inline-flex
                        h-2.5
                        w-2.5
                        rounded-full
                        bg-emerald-500
                    "
                ></span>

            </span>

            Live Support

        </div>

    </div>



    {{-- =====================================================
        SUCCESS MESSAGE
    ====================================================== --}}

    @if(session('success'))

        <div
            class="
                rounded-2xl
                border
                border-emerald-200
                bg-emerald-50
                px-4
                py-3
                text-sm
                font-semibold
                text-emerald-700
            "
        >
            {{ session('success') }}
        </div>

    @endif



    {{-- =====================================================
        FILTER CARDS
    ====================================================== --}}

    @php

        $filters = [

            '' => [
                'label' => 'All Chats',
                'count' => $counts['all'],
                'description' => 'Total conversations',
            ],

            'ai' => [
                'label' => 'AI Handling',
                'count' => $counts['ai'],
                'description' => 'Handled by AI',
            ],

            'human' => [
                'label' => 'Human Handling',
                'count' => $counts['human'],
                'description' => 'Staff connected',
            ],

            'closed' => [
                'label' => 'Closed',
                'count' => $counts['closed'],
                'description' => 'Completed chats',
            ],

        ];

    @endphp


    <div
        class="
            grid
            grid-cols-2
            gap-3
            lg:grid-cols-4
        "
    >

        @foreach($filters as $filter => $item)

            @php

                $isActive =
                    $status === $filter;

            @endphp


            <a
                href="{{
                    route(
                        'admin.ai-conversations.index',
                        $filter !== ''
                            ? ['status' => $filter]
                            : []
                    )
                }}"
                class="
                    group
                    relative
                    overflow-hidden
                    rounded-2xl
                    border
                    p-4
                    transition
                    duration-200

                    {{
                        $isActive
                            ? 'border-[#073B66] bg-[#073B66] text-white shadow-lg shadow-[#073B66]/10'
                            : 'border-slate-200 bg-white text-slate-700 hover:-translate-y-0.5 hover:border-[#073B66]/30 hover:shadow-md'
                    }}
                "
            >

                <div
                    class="
                        flex
                        items-start
                        justify-between
                        gap-3
                    "
                >

                    <div>

                        <span
                            class="
                                block
                                text-2xl
                                font-extrabold
                            "
                        >
                            {{ $item['count'] }}
                        </span>


                        <span
                            class="
                                mt-1
                                block
                                text-xs
                                font-bold
                                uppercase
                                tracking-wider

                                {{
                                    $isActive
                                        ? 'text-blue-100'
                                        : 'text-slate-500'
                                }}
                            "
                        >
                            {{ $item['label'] }}
                        </span>


                        <span
                            class="
                                mt-1
                                hidden
                                text-[10px]
                                font-medium
                                sm:block

                                {{
                                    $isActive
                                        ? 'text-blue-200'
                                        : 'text-slate-400'
                                }}
                            "
                        >
                            {{ $item['description'] }}
                        </span>

                    </div>


                    <div
                        class="
                            flex
                            h-9
                            w-9
                            items-center
                            justify-center
                            rounded-xl

                            {{
                                $isActive
                                    ? 'bg-white/10'
                                    : 'bg-slate-50 group-hover:bg-[#073B66]/5'
                            }}
                        "
                    >

                        @if($filter === 'ai')

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9.75 3v1.5m4.5-1.5v1.5M5.25 9h13.5M6.75 4.5h10.5A1.5 1.5 0 0118.75 6v12a1.5 1.5 0 01-1.5 1.5H6.75A1.5 1.5 0 015.25 18V6a1.5 1.5 0 011.5-1.5z"
                                />
                            </svg>

                        @elseif($filter === 'human')

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15.75 6.75a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a7.5 7.5 0 0115 0"
                                />
                            </svg>

                        @elseif($filter === 'closed')

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12.75l2.25 2.25L15 9.75m6 2.25a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>

                        @else

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8.625 9.75h6.75m-6.75 3h4.5M21 12c0 4.556-4.03 8.25-9 8.25a9.92 9.92 0 01-3.79-.743L3 20.25l1.503-3.508A7.754 7.754 0 013 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"
                                />
                            </svg>

                        @endif

                    </div>

                </div>

            </a>

        @endforeach

    </div>



    {{-- =====================================================
        CONVERSATIONS
    ====================================================== --}}

    <div
        class="
            overflow-hidden
            rounded-2xl
            border
            border-slate-200
            bg-white
            shadow-sm
        "
    >

        {{-- List header --}}

        <div
            class="
                hidden
                border-b
                border-slate-100
                bg-slate-50/70
                px-5
                py-3
                sm:flex
                sm:items-center
                sm:justify-between
            "
        >

            <span
                class="
                    text-[10px]
                    font-extrabold
                    uppercase
                    tracking-[0.15em]
                    text-slate-400
                "
            >
                Conversations
            </span>


            <span
                class="
                    text-[10px]
                    font-bold
                    text-slate-400
                "
            >
                {{ $conversations->total() }}
                {{ $conversations->total() === 1 ? 'chat' : 'chats' }}
            </span>

        </div>



        @forelse($conversations as $conversation)

            @php

                /*
                |--------------------------------------------------------------------------
                | Latest Message
                |--------------------------------------------------------------------------
                |
                | Already eager-loaded by controller using latestMessage relation.
                |
                */

                $latestMessage =
                    $conversation->latestMessage;


                /*
                |--------------------------------------------------------------------------
                | Visitor Initial
                |--------------------------------------------------------------------------
                */

                $visitorName =
                    trim(
                        $conversation->visitor_name
                        ?: 'Website Visitor'
                    );


                $visitorInitial =
                    strtoupper(
                        mb_substr(
                            $visitorName,
                            0,
                            1
                        )
                    );


                /*
                |--------------------------------------------------------------------------
                | Unread
                |--------------------------------------------------------------------------
                */

                $unreadCount =
                    (int) $conversation->unread_count;


                /*
                |--------------------------------------------------------------------------
                | Latest Message Sender
                |--------------------------------------------------------------------------
                */

                $latestSender = null;

                if ($latestMessage) {

                    $latestSender =
                        match (
                            $latestMessage->sender_type
                        ) {

                            'user' =>
                                'Visitor',

                            'admin' =>
                                $latestMessage
                                    ->admin
                                    ?->name
                                ?? 'ASEW Staff',

                            'assistant' =>
                                'ASEW AI',

                            default =>
                                null,

                        };

                }

            @endphp



            <a
                href="{{
                    route(
                        'admin.ai-conversations.show',
                        $conversation
                    )
                }}"
                class="
                    group
                    relative
                    flex
                    gap-4
                    border-b
                    border-slate-100
                    p-4
                    transition
                    duration-200
                    last:border-b-0
                    hover:bg-slate-50
                    sm:p-5

                    {{
                        $unreadCount > 0
                            ? 'bg-red-50/20'
                            : ''
                    }}
                "
            >

                {{-- Unread left indicator --}}

                @if($unreadCount > 0)

                    <span
                        class="
                            absolute
                            bottom-0
                            left-0
                            top-0
                            w-1
                            bg-[#E31E24]
                        "
                    ></span>

                @endif



                {{-- Visitor Avatar --}}

                <div
                    class="
                        relative
                        flex
                        h-11
                        w-11
                        shrink-0
                        items-center
                        justify-center
                        rounded-2xl
                        bg-[#032B55]
                        text-sm
                        font-extrabold
                        text-white
                        shadow-sm
                    "
                >

                    {{ $visitorInitial }}


                    @if($conversation->mode === 'human')

                        <span
                            class="
                                absolute
                                -bottom-1
                                -right-1
                                h-3.5
                                w-3.5
                                rounded-full
                                border-2
                                border-white
                                bg-emerald-500
                            "
                        ></span>

                    @elseif($conversation->mode === 'ai')

                        <span
                            class="
                                absolute
                                -bottom-1
                                -right-1
                                h-3.5
                                w-3.5
                                rounded-full
                                border-2
                                border-white
                                bg-blue-500
                            "
                        ></span>

                    @else

                        <span
                            class="
                                absolute
                                -bottom-1
                                -right-1
                                h-3.5
                                w-3.5
                                rounded-full
                                border-2
                                border-white
                                bg-slate-400
                            "
                        ></span>

                    @endif

                </div>



                {{-- Conversation Content --}}

                <div class="min-w-0 flex-1">

                    <div
                        class="
                            flex
                            flex-col
                            gap-2
                            sm:flex-row
                            sm:items-start
                            sm:justify-between
                        "
                    >

                        {{-- Visitor + unread --}}

                        <div class="min-w-0">

                            <div
                                class="
                                    flex
                                    min-w-0
                                    items-center
                                    gap-2
                                "
                            >

                                <h3
                                    class="
                                        truncate
                                        text-sm
                                        font-extrabold
                                        text-[#032B55]
                                    "
                                >
                                    {{ $visitorName }}
                                </h3>


                                @if($unreadCount > 0)

                                    <span
                                        class="
                                            inline-flex
                                            h-[22px]
                                            min-w-[22px]
                                            shrink-0
                                            items-center
                                            justify-center
                                            rounded-full
                                            bg-[#E31E24]
                                            px-1.5
                                            text-[9px]
                                            font-extrabold
                                            text-white
                                            shadow-sm
                                        "
                                    >
                                        {{
                                            $unreadCount > 99
                                                ? '99+'
                                                : $unreadCount
                                        }}
                                    </span>

                                @endif

                            </div>



                            {{-- Visitor details --}}

                            @if(
                                $conversation->visitor_email
                                || $conversation->visitor_phone
                            )

                                <div
                                    class="
                                        mt-1
                                        flex
                                        flex-wrap
                                        gap-x-3
                                        gap-y-1
                                        text-[10px]
                                        font-medium
                                        text-slate-400
                                    "
                                >

                                    @if($conversation->visitor_email)

                                        <span class="truncate">
                                            {{ $conversation->visitor_email }}
                                        </span>

                                    @endif


                                    @if($conversation->visitor_phone)

                                        <span>
                                            {{ $conversation->visitor_phone }}
                                        </span>

                                    @endif

                                </div>

                            @endif

                        </div>



                        {{-- =====================================================
                            MODE BADGE
                        ====================================================== --}}

                        @if($conversation->mode === 'ai')

                            <span
                                class="
                                    inline-flex
                                    w-fit
                                    shrink-0
                                    items-center
                                    gap-1.5
                                    rounded-full
                                    bg-blue-50
                                    px-2.5
                                    py-1
                                    text-[9px]
                                    font-extrabold
                                    uppercase
                                    tracking-wider
                                    text-blue-700
                                "
                            >

                                <span
                                    class="
                                        h-1.5
                                        w-1.5
                                        rounded-full
                                        bg-blue-500
                                    "
                                ></span>

                                AI Active

                            </span>


                        @elseif($conversation->mode === 'human')

                            <span
                                class="
                                    inline-flex
                                    w-fit
                                    shrink-0
                                    items-center
                                    gap-1.5
                                    rounded-full
                                    bg-emerald-50
                                    px-2.5
                                    py-1
                                    text-[9px]
                                    font-extrabold
                                    uppercase
                                    tracking-wider
                                    text-emerald-700
                                "
                            >

                                <span class="relative flex h-1.5 w-1.5">

                                    <span
                                        class="
                                            absolute
                                            inline-flex
                                            h-full
                                            w-full
                                            animate-ping
                                            rounded-full
                                            bg-emerald-400
                                            opacity-75
                                        "
                                    ></span>

                                    <span
                                        class="
                                            relative
                                            inline-flex
                                            h-1.5
                                            w-1.5
                                            rounded-full
                                            bg-emerald-500
                                        "
                                    ></span>

                                </span>

                                Human Live

                            </span>


                        @else

                            <span
                                class="
                                    inline-flex
                                    w-fit
                                    shrink-0
                                    items-center
                                    gap-1.5
                                    rounded-full
                                    bg-slate-100
                                    px-2.5
                                    py-1
                                    text-[9px]
                                    font-extrabold
                                    uppercase
                                    tracking-wider
                                    text-slate-500
                                "
                            >

                                <span
                                    class="
                                        h-1.5
                                        w-1.5
                                        rounded-full
                                        bg-slate-400
                                    "
                                ></span>

                                Closed

                            </span>

                        @endif

                    </div>



                    {{-- =====================================================
                        LATEST MESSAGE
                    ====================================================== --}}

                    @if($latestMessage)

                        <div
                            class="
                                mt-2
                                flex
                                min-w-0
                                items-center
                                gap-1.5
                            "
                        >

                            @if($latestSender)

                                <span
                                    class="
                                        shrink-0
                                        text-xs
                                        font-bold

                                        {{
                                            $latestMessage->sender_type === 'user'
                                                ? 'text-slate-600'
                                                : (
                                                    $latestMessage->sender_type === 'admin'
                                                        ? 'text-emerald-700'
                                                        : 'text-blue-700'
                                                )
                                        }}
                                    "
                                >
                                    {{ $latestSender }}:
                                </span>

                            @endif


                            <p
                                class="
                                    min-w-0
                                    truncate
                                    text-sm
                                    text-slate-500
                                "
                            >
                                {{ $latestMessage->message }}
                            </p>

                        </div>

                    @else

                        <p class="mt-2 text-sm text-slate-400">
                            No messages yet.
                        </p>

                    @endif



                    {{-- =====================================================
                        META INFORMATION
                    ====================================================== --}}

                    <div
                        class="
                            mt-2.5
                            flex
                            flex-wrap
                            items-center
                            gap-x-4
                            gap-y-1
                            text-[10px]
                            font-semibold
                            text-slate-400
                        "
                    >

                        {{-- Conversation ID --}}

                        <span>
                            Chat #{{ $conversation->id }}
                        </span>



                        {{-- Last activity --}}

                        @if($conversation->last_message_at)

                            <span
                                title="{{
                                    $conversation
                                        ->last_message_at
                                        ->format(
                                            'd M Y, h:i A'
                                        )
                                }}"
                            >
                                {{
                                    $conversation
                                        ->last_message_at
                                        ->diffForHumans()
                                }}
                            </span>

                        @else

                            <span>
                                No activity
                            </span>

                        @endif



                        {{-- Assigned staff --}}

                        @if(
                            $conversation->mode === 'human'
                            && $conversation->admin
                        )

                            <span
                                class="
                                    inline-flex
                                    items-center
                                    gap-1
                                    text-emerald-600
                                "
                            >

                                <span
                                    class="
                                        h-1.5
                                        w-1.5
                                        rounded-full
                                        bg-emerald-500
                                    "
                                ></span>

                                Staff:
                                {{ $conversation->admin->name }}

                            </span>

                        @endif



                        {{-- Closed timestamp --}}

                        @if(
                            $conversation->mode === 'closed'
                            && $conversation->closed_at
                        )

                            <span>
                                Closed
                                {{
                                    $conversation
                                        ->closed_at
                                        ->diffForHumans()
                                }}
                            </span>

                        @endif

                    </div>

                </div>



                {{-- =====================================================
                    OPEN ARROW
                ====================================================== --}}

                <div
                    class="
                        hidden
                        shrink-0
                        items-center
                        justify-center
                        sm:flex
                    "
                >

                    <div
                        class="
                            flex
                            h-9
                            w-9
                            items-center
                            justify-center
                            rounded-xl
                            text-slate-300
                            transition
                            duration-200
                            group-hover:bg-[#073B66]
                            group-hover:text-white
                        "
                    >

                        <svg
                            class="
                                h-4
                                w-4
                                transition
                                duration-200
                                group-hover:translate-x-0.5
                            "
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>

                    </div>

                </div>

            </a>


        @empty

            {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}

            <div
                class="
                    px-6
                    py-16
                    text-center
                "
            >

                <div
                    class="
                        mx-auto
                        flex
                        h-14
                        w-14
                        items-center
                        justify-center
                        rounded-2xl
                        bg-slate-100
                        text-slate-400
                    "
                >

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M8.625 9.75h6.75m-6.75 3h4.5M21 12c0 4.556-4.03 8.25-9 8.25a9.92 9.92 0 01-3.79-.743L3 20.25l1.503-3.508A7.754 7.754 0 013 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"
                        />
                    </svg>

                </div>


                <h3
                    class="
                        mt-4
                        text-base
                        font-extrabold
                        text-[#032B55]
                    "
                >
                    No conversations found
                </h3>


                <p
                    class="
                        mx-auto
                        mt-1
                        max-w-md
                        text-sm
                        text-slate-500
                    "
                >

                    @if($status !== '')

                        There are currently no
                        {{ $status }}
                        conversations.

                    @else

                        Customer AI conversations will appear here.

                    @endif

                </p>


                @if($status !== '')

                    <a
                        href="{{
                            route(
                                'admin.ai-conversations.index'
                            )
                        }}"
                        class="
                            mt-5
                            inline-flex
                            items-center
                            justify-center
                            rounded-xl
                            bg-[#073B66]
                            px-4
                            py-2.5
                            text-xs
                            font-bold
                            text-white
                            transition
                            hover:bg-[#032B55]
                        "
                    >
                        View All Chats
                    </a>

                @endif

            </div>

        @endforelse

    </div>



    {{-- =====================================================
        PAGINATION
    ====================================================== --}}

    @if($conversations->hasPages())

        <div>
            {{ $conversations->links() }}
        </div>

    @endif

</div>

@endsection