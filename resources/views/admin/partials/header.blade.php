@php
    $headerNewEnquiryCount =
        \App\Models\ProductEnquiry::where('status', 'new')->count();
@endphp

<header
    x-data="asewAiHeaderNotifications()"
    x-init="init()"
    class="sticky
           top-0
           z-[80]
           h-[70px]
           bg-white
           border-b
           border-slate-200"
>

    <div
        class="h-full
               px-4
               sm:px-6
               lg:px-8
               flex
               items-center
               justify-between
               gap-4"
    >

        {{-- =========================================================
             LEFT
        ========================================================== --}}

        <div
            class="flex
                   items-center
                   gap-3
                   min-w-0"
        >

            {{-- MOBILE MENU --}}

            <button
                type="button"
                @click="sidebarOpen = true"
                class="lg:hidden
                       w-[42px]
                       h-[42px]
                       flex
                       flex-col
                       items-center
                       justify-center
                       gap-[5px]
                       border
                       border-slate-200
                       bg-white"
            >

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

                <span
                    class="block
                           w-5
                           h-[2px]
                           bg-[#032B55]"
                ></span>

            </button>


            {{-- PAGE TITLE --}}

            <div class="min-w-0">

                <p
                    class="text-[9px]
                           uppercase
                           tracking-[0.16em]
                           font-bold
                           text-slate-400"
                >
                    Administration Panel
                </p>

                <h2
                    class="truncate
                           mt-0.5
                           text-[15px]
                           sm:text-[17px]
                           font-extrabold
                           text-[#073B66]"
                >
                    @yield('page-title', 'Dashboard')
                </h2>

            </div>

        </div>



        {{-- =========================================================
             RIGHT
        ========================================================== --}}

        <div
            class="flex
                   items-center
                   gap-2
                   sm:gap-3"
        >

            {{-- =====================================================
                 VIEW WEBSITE
            ====================================================== --}}

            <a
                href="{{ route('home') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="hidden
                       md:inline-flex
                       items-center
                       justify-center
                       min-h-[38px]
                       px-4
                       border
                       border-slate-200
                       text-[9px]
                       uppercase
                       tracking-wide
                       font-bold
                       text-[#073B66]
                       hover:border-[#D71920]
                       hover:text-[#D71920]
                       transition"
            >
                View Website ↗
            </a>



            {{-- =====================================================
                 EXISTING ENQUIRY NOTIFICATION
            ====================================================== --}}

            <a
                href="{{ route(
                    'admin.enquiries.index',
                    ['status' => 'new']
                ) }}"
                class="relative
                       w-10
                       h-10
                       flex
                       items-center
                       justify-center
                       border
                       border-slate-200
                       bg-white
                       text-[#073B66]
                       hover:border-[#D71920]
                       hover:text-[#D71920]
                       transition"
                title="New Enquiries"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path
                        d="M18 8A6 6 0 0 0 6 8c0 7-3 7-3 9h18c0-2-3-2-3-9"
                    />

                    <path
                        d="M13.73 21a2 2 0 0 1-3.46 0"
                    />
                </svg>


                @if($headerNewEnquiryCount > 0)

                    <span
                        class="absolute
                               -top-2
                               -right-2
                               min-w-[20px]
                               h-5
                               px-1.5
                               rounded-full
                               flex
                               items-center
                               justify-center
                               bg-[#D71920]
                               text-white
                               text-[8px]
                               font-bold
                               border-2
                               border-white"
                    >
                        {{ $headerNewEnquiryCount > 99
                            ? '99+'
                            : $headerNewEnquiryCount }}
                    </span>

                @endif

            </a>



            {{-- =====================================================
                 AI LIVE CHAT NOTIFICATION
            ====================================================== --}}

            <div
                class="relative"
                @click.outside="dropdownOpen = false"
            >

                {{-- AI CHAT BUTTON --}}

                <button
                    type="button"
                    @click="toggleDropdown()"
                    class="relative
                           w-10
                           h-10
                           flex
                           items-center
                           justify-center
                           border
                           bg-white
                           transition"
                    :class="
                        unreadCount > 0
                            ? 'border-[#D71920] text-[#D71920]'
                            : 'border-slate-200 text-[#073B66] hover:border-[#D71920] hover:text-[#D71920]'
                    "
                    title="AI Live Chats"
                    aria-label="AI Live Chat Notifications"
                >

                    {{-- CHAT ICON --}}

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="19"
                        height="19"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path
                            d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"
                        />

                        <path d="M8 9h8" />
                        <path d="M8 13h5" />
                    </svg>


                    {{-- LIVE DOT --}}

                    <span
                        x-show="unreadCount > 0"
                        x-cloak
                        class="absolute
                               bottom-[5px]
                               right-[5px]
                               w-[6px]
                               h-[6px]
                               rounded-full
                               bg-emerald-500
                               ring-2
                               ring-white"
                    ></span>


                    {{-- UNREAD BADGE --}}

                    <span
                        x-show="unreadCount > 0"
                        x-cloak
                        class="absolute
                               -top-2
                               -right-2
                               min-w-[20px]
                               h-5
                               px-1.5
                               rounded-full
                               flex
                               items-center
                               justify-center
                               bg-[#D71920]
                               text-white
                               text-[8px]
                               font-bold
                               border-2
                               border-white"
                        x-text="
                            unreadCount > 99
                                ? '99+'
                                : unreadCount
                        "
                    ></span>

                </button>



                {{-- =================================================
                     DROPDOWN
                ================================================== --}}

                <div
                    x-show="dropdownOpen"
                    x-cloak
                    x-transition.origin.top.right
                    class="absolute
                           right-0
                           mt-3
                           w-[calc(100vw-32px)]
                           sm:w-[390px]
                           bg-white
                           border
                           border-slate-200
                           shadow-[0_20px_60px_rgba(15,23,42,0.16)]
                           z-[120]"
                >

                    {{-- TOP BAR --}}

                    <div
                        class="px-4
                               py-4
                               bg-[#032B55]
                               text-white"
                    >

                        <div
                            class="flex
                                   items-start
                                   justify-between
                                   gap-4"
                        >

                            <div>

                                <p
                                    class="text-[9px]
                                           uppercase
                                           tracking-[0.16em]
                                           font-bold
                                           text-white/60"
                                >
                                    Website Assistant
                                </p>

                                <h3
                                    class="mt-1
                                           text-[15px]
                                           font-extrabold"
                                >
                                    AI Live Chats
                                </h3>

                            </div>


                            <div
                                x-show="unreadCount > 0"
                                x-cloak
                                class="px-2.5
                                       py-1
                                       bg-[#D71920]
                                       text-white
                                       text-[9px]
                                       uppercase
                                       tracking-wide
                                       font-bold"
                            >
                                <span x-text="unreadCount"></span>
                                unread
                            </div>

                        </div>

                    </div>



                    {{-- DESKTOP ALERT BUTTON --}}

                    <div
                        x-show="canUseBrowserNotifications() && notificationPermission !== 'granted'"
                        x-cloak
                        class="px-4
                               py-3
                               border-b
                               border-slate-100
                               bg-slate-50"
                    >

                        <button
                            type="button"
                            @click="enableDesktopNotifications()"
                            class="w-full
                                   min-h-[36px]
                                   flex
                                   items-center
                                   justify-center
                                   gap-2
                                   border
                                   border-slate-200
                                   bg-white
                                   text-[9px]
                                   uppercase
                                   tracking-wide
                                   font-extrabold
                                   text-[#073B66]
                                   hover:border-[#D71920]
                                   hover:text-[#D71920]
                                   transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"
                                />

                                <path
                                    d="M13.73 21a2 2 0 0 1-3.46 0"
                                />
                            </svg>

                            Enable Desktop Alerts

                        </button>

                    </div>



                    {{-- LOADING --}}

                    <div
                        x-show="loading && conversations.length === 0"
                        x-cloak
                        class="px-5
                               py-10
                               text-center"
                    >

                        <div
                            class="mx-auto
                                   w-6
                                   h-6
                                   rounded-full
                                   border-2
                                   border-slate-200
                                   border-t-[#D71920]
                                   animate-spin"
                        ></div>

                        <p
                            class="mt-3
                                   text-[10px]
                                   text-slate-400"
                        >
                            Loading live chats...
                        </p>

                    </div>



                    {{-- ERROR --}}

                    <div
                        x-show="error"
                        x-cloak
                        class="px-4
                               py-3
                               bg-red-50
                               border-b
                               border-red-100"
                    >
                        <p
                            class="text-[10px]
                                   leading-5
                                   text-red-600"
                            x-text="error"
                        ></p>
                    </div>



                    {{-- EMPTY STATE --}}

                    <div
                        x-show="
                            !loading
                            && conversations.length === 0
                        "
                        x-cloak
                        class="px-5
                               py-10
                               text-center"
                    >

                        <div
                            class="mx-auto
                                   w-11
                                   h-11
                                   rounded-full
                                   flex
                                   items-center
                                   justify-center
                                   bg-slate-100
                                   text-slate-400"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"
                                />
                            </svg>

                        </div>

                        <h4
                            class="mt-3
                                   text-[12px]
                                   font-extrabold
                                   text-[#073B66]"
                        >
                            No unread chats
                        </h4>

                        <p
                            class="mt-1
                                   text-[10px]
                                   leading-5
                                   text-slate-400"
                        >
                            New website customer messages will appear here.
                        </p>

                    </div>



                    {{-- CHAT LIST --}}

                    <div
                        x-show="conversations.length > 0"
                        x-cloak
                        class="max-h-[360px]
                               overflow-y-auto"
                    >

                        <template
                            x-for="conversation in conversations"
                            :key="conversation.id"
                        >

                            <a
                                :href="conversation.url"
                                class="block
                                       px-4
                                       py-4
                                       border-b
                                       border-slate-100
                                       hover:bg-slate-50
                                       transition"
                            >

                                <div
                                    class="flex
                                           items-start
                                           gap-3"
                                >

                                    {{-- VISITOR AVATAR --}}

                                    <div
                                        class="shrink-0
                                               w-9
                                               h-9
                                               rounded-full
                                               flex
                                               items-center
                                               justify-center
                                               bg-[#EAF1F7]
                                               text-[#073B66]
                                               text-[11px]
                                               font-extrabold"
                                    >
                                        <span
                                            x-text="
                                                (
                                                    conversation.visitor_name
                                                    || 'V'
                                                )
                                                .charAt(0)
                                                .toUpperCase()
                                            "
                                        ></span>
                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <div
                                            class="flex
                                                   items-start
                                                   justify-between
                                                   gap-3"
                                        >

                                            <p
                                                class="truncate
                                                       text-[11px]
                                                       font-extrabold
                                                       text-slate-700"
                                                x-text="conversation.visitor_name"
                                            ></p>


                                            <span
                                                class="shrink-0
                                                       text-[8px]
                                                       text-slate-400"
                                                x-text="conversation.time"
                                            ></span>

                                        </div>


                                        <p
                                            class="mt-1
                                                   text-[10px]
                                                   leading-5
                                                   text-slate-500
                                                   line-clamp-2"
                                            x-text="conversation.message"
                                        ></p>


                                        <div
                                            class="mt-2
                                                   flex
                                                   items-center
                                                   justify-between
                                                   gap-2"
                                        >

                                            <span
                                                class="inline-flex
                                                       items-center
                                                       px-2
                                                       py-1
                                                       text-[8px]
                                                       uppercase
                                                       tracking-wide
                                                       font-bold"
                                                :class="
                                                    conversation.mode === 'human'
                                                        ? 'bg-emerald-50 text-emerald-700'
                                                        : (
                                                            conversation.mode === 'closed'
                                                                ? 'bg-slate-100 text-slate-500'
                                                                : 'bg-blue-50 text-blue-700'
                                                        )
                                                "
                                                x-text="
                                                    conversation.mode === 'human'
                                                        ? 'Human Live'
                                                        : (
                                                            conversation.mode === 'closed'
                                                                ? 'Closed'
                                                                : 'AI Active'
                                                        )
                                                "
                                            ></span>


                                            <span
                                                class="text-[8px]
                                                       uppercase
                                                       tracking-wide
                                                       font-extrabold
                                                       text-[#D71920]"
                                            >
                                                View Chat →
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </a>

                        </template>

                    </div>



                    {{-- FOOTER --}}

                    <a
                        href="{{ route('admin.ai-conversations.index') }}"
                        class="min-h-[46px]
                               px-4
                               flex
                               items-center
                               justify-center
                               bg-slate-50
                               text-[9px]
                               uppercase
                               tracking-[0.12em]
                               font-extrabold
                               text-[#073B66]
                               hover:text-[#D71920]
                               transition"
                    >
                        View All AI Conversations →
                    </a>

                </div>

            </div>



            {{-- =====================================================
                 ADMIN PROFILE
            ====================================================== --}}

            <div
                class="flex
                       items-center
                       gap-3
                       pl-3
                       border-l
                       border-slate-200"
            >

                <div
                    class="w-[38px]
                           h-[38px]
                           rounded-full
                           bg-[#032B55]
                           text-white
                           flex
                           items-center
                           justify-center
                           text-[12px]
                           font-extrabold"
                >
                    {{ strtoupper(
                        substr(
                            auth('admin')->user()->name ?? 'A',
                            0,
                            1
                        )
                    ) }}
                </div>


                <div class="hidden sm:block">

                    <p
                        class="text-[11px]
                               font-bold
                               text-slate-700"
                    >
                        {{ auth('admin')->user()->name ?? 'ASEW Admin' }}
                    </p>

                    <p
                        class="mt-0.5
                               text-[9px]
                               text-slate-400"
                    >
                        Administrator
                    </p>

                </div>

            </div>

        </div>

    </div>

</header>



@push('scripts')

<script>
    /*
    |--------------------------------------------------------------------------
    | ASEW ADMIN AI CHAT NOTIFICATIONS
    |--------------------------------------------------------------------------
    */

    window.asewAiHeaderNotifications = function () {

        return {

            dropdownOpen: false,

            loading: false,

            polling: false,

            error: '',

            unreadCount: 0,

            conversations: [],

            lastMessageId: 0,

            pollTimer: null,

            initialized: false,

            notificationPermission:
                ('Notification' in window)
                    ? Notification.permission
                    : 'unsupported',


            /*
            |--------------------------------------------------------------------------
            | INIT
            |--------------------------------------------------------------------------
            */

            init() {

                if (this.initialized) {
                    return;
                }

                this.initialized = true;

                /*
                 * IMPORTANT:
                 *
                 * We intentionally do NOT restore an old server cursor here.
                 *
                 * First request establishes the current message ID baseline,
                 * so existing historical unread messages do not suddenly
                 * produce sound/desktop alerts when the admin opens a page.
                 */

                this.fetchNotifications(true);

                this.pollTimer = window.setInterval(
                    () => {
                        this.fetchNotifications(false);
                    },
                    5000
                );

            },


            /*
            |--------------------------------------------------------------------------
            | DROPDOWN
            |--------------------------------------------------------------------------
            */

            toggleDropdown() {

                this.dropdownOpen =
                    !this.dropdownOpen;

                if (this.dropdownOpen) {
                    this.fetchNotifications(false);
                }

            },


            /*
            |--------------------------------------------------------------------------
            | FETCH
            |--------------------------------------------------------------------------
            */

            async fetchNotifications(initialLoad = false) {

                if (this.polling) {
                    return;
                }

                this.polling = true;

                if (
                    initialLoad
                    && this.conversations.length === 0
                ) {
                    this.loading = true;
                }

                try {

                    const url = new URL(
                        @js(
                            route(
                                'admin.ai-chat-notifications.index'
                            )
                        ),
                        window.location.origin
                    );


                    if (this.lastMessageId > 0) {

                        url.searchParams.set(
                            'after_id',
                            String(this.lastMessageId)
                        );

                    }


                    const response = await fetch(
                        url.toString(),
                        {
                            method: 'GET',

                            headers: {
                                'Accept':
                                    'application/json',

                                'X-Requested-With':
                                    'XMLHttpRequest',
                            },

                            credentials:
                                'same-origin',

                            cache:
                                'no-store',
                        }
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Session expired
                    |--------------------------------------------------------------------------
                    */

                    if (
                        response.status === 401
                        || response.status === 419
                    ) {
                        this.stopPolling();

                        this.error =
                            'Admin session expired. Please login again.';

                        return;
                    }


                    if (!response.ok) {

                        throw new Error(
                            'Unable to load AI chat notifications.'
                        );

                    }


                    const data =
                        await response.json();


                    if (!data.success) {

                        throw new Error(
                            data.message
                            || 'Unable to load AI chat notifications.'
                        );

                    }


                    this.unreadCount =
                        Number(
                            data.unread_count
                            || 0
                        );


                    this.conversations =
                        Array.isArray(
                            data.conversations
                        )
                            ? data.conversations
                            : [];


                    const newMessages =
                        Array.isArray(
                            data.new_messages
                        )
                            ? data.new_messages
                            : [];


                    /*
                    |--------------------------------------------------------------------------
                    | First request = baseline only
                    |--------------------------------------------------------------------------
                    |
                    | Do not make noise for historical messages.
                    |
                    */

                    if (
                        !initialLoad
                        && this.lastMessageId > 0
                        && newMessages.length > 0
                    ) {

                        this.handleNewMessages(
                            newMessages
                        );

                    }


                    const serverCursor =
                        Number(
                            data.last_message_id
                            || 0
                        );


                    if (
                        serverCursor
                        > this.lastMessageId
                    ) {

                        this.lastMessageId =
                            serverCursor;

                    }


                    this.error = '';

                } catch (error) {

                    console.error(
                        'ASEW AI notification error:',
                        error
                    );

                    this.error =
                        'Could not refresh AI chat alerts.';

                } finally {

                    this.polling = false;

                    this.loading = false;

                }

            },


            /*
            |--------------------------------------------------------------------------
            | NEW CUSTOMER ACTIVITY
            |--------------------------------------------------------------------------
            */

            handleNewMessages(messages) {

                if (
                    !Array.isArray(messages)
                    || messages.length === 0
                ) {
                    return;
                }


                /*
                 * One sound is enough even when multiple messages arrived
                 * between two polling requests.
                 */

                this.playNotificationSound();


                /*
                 * Desktop notification uses latest customer message.
                 */

                const latest =
                    messages[
                        messages.length - 1
                    ];


                this.showDesktopNotification(
                    latest
                );

            },


            /*
            |--------------------------------------------------------------------------
            | SOUND
            |--------------------------------------------------------------------------
            |
            | No external MP3 file required.
            |
            | Web Audio may be blocked until the browser receives a user
            | interaction. Failure is intentionally ignored.
            |
            */

            playNotificationSound() {

                try {

                    const AudioContext =
                        window.AudioContext
                        || window.webkitAudioContext;


                    if (!AudioContext) {
                        return;
                    }


                    const context =
                        new AudioContext();


                    const oscillator =
                        context.createOscillator();


                    const gain =
                        context.createGain();


                    oscillator.connect(gain);

                    gain.connect(
                        context.destination
                    );


                    oscillator.type =
                        'sine';


                    oscillator.frequency.setValueAtTime(
                        880,
                        context.currentTime
                    );


                    oscillator.frequency.exponentialRampToValueAtTime(
                        660,
                        context.currentTime + 0.16
                    );


                    gain.gain.setValueAtTime(
                        0.0001,
                        context.currentTime
                    );


                    gain.gain.exponentialRampToValueAtTime(
                        0.12,
                        context.currentTime + 0.015
                    );


                    gain.gain.exponentialRampToValueAtTime(
                        0.0001,
                        context.currentTime + 0.22
                    );


                    oscillator.start(
                        context.currentTime
                    );


                    oscillator.stop(
                        context.currentTime + 0.23
                    );


                    window.setTimeout(
                        () => {

                            context.close()
                                .catch(() => {});

                        },
                        400
                    );

                } catch (error) {

                    /*
                     * Notification sound must never affect admin UI.
                     */

                }

            },


            /*
            |--------------------------------------------------------------------------
            | BROWSER NOTIFICATION SUPPORT
            |--------------------------------------------------------------------------
            */

            canUseBrowserNotifications() {

                return (
                    'Notification' in window
                    && window.isSecureContext
                );

            },


            /*
            |--------------------------------------------------------------------------
            | ENABLE DESKTOP ALERTS
            |--------------------------------------------------------------------------
            |
            | Browser permission is requested only after admin clicks the
            | button. We never request permission automatically.
            |
            */

            async enableDesktopNotifications() {

                if (
                    !this.canUseBrowserNotifications()
                ) {
                    return;
                }


                try {

                    const permission =
                        await Notification
                            .requestPermission();


                    this.notificationPermission =
                        permission;

                } catch (error) {

                    console.error(
                        'Desktop notification permission error:',
                        error
                    );

                }

            },


            /*
            |--------------------------------------------------------------------------
            | SHOW DESKTOP NOTIFICATION
            |--------------------------------------------------------------------------
            */

            showDesktopNotification(message) {

                if (
                    !this.canUseBrowserNotifications()
                ) {
                    return;
                }


                if (
                    Notification.permission
                    !== 'granted'
                ) {
                    return;
                }


                try {

                    const notification =
                        new Notification(
                            'New ASEW Website Chat',
                            {
                                body:
                                    message.message
                                    || 'A visitor sent a new message.',

                                tag:
                                    'asew-ai-chat-'
                                    + message.conversation_id,

                                renotify:
                                    true,
                            }
                        );


                    notification.onclick =
                        () => {

                            window.focus();

                            if (message.url) {

                                window.location.href =
                                    message.url;

                            }

                            notification.close();

                        };


                    window.setTimeout(
                        () => {

                            notification.close();

                        },
                        8000
                    );

                } catch (error) {

                    console.error(
                        'Desktop notification error:',
                        error
                    );

                }

            },


            /*
            |--------------------------------------------------------------------------
            | STOP POLLING
            |--------------------------------------------------------------------------
            */

            stopPolling() {

                if (this.pollTimer) {

                    window.clearInterval(
                        this.pollTimer
                    );

                    this.pollTimer =
                        null;

                }

            },

        };

    };
</script>

@endpush