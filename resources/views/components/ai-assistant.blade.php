{{-- ============================================================

    ASEW AI ASSISTANT

    Premium Floating AI + Human Handoff Chat

============================================================ --}}



<div
    x-data="asewAiAssistant()"
    x-cloak
    class="fixed right-0 top-1/2 -translate-y-1/2 z-[9999]"
>



    {{-- ========================================================
    CHAT WINDOW
======================================================== --}}

<div
    x-show="open"

    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-8 scale-[0.98]"
    x-transition:enter-end="opacity-100 translate-x-0 scale-100"

    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-x-0 scale-100"
    x-transition:leave-end="opacity-0 translate-x-8 scale-[0.98]"

    @click.outside="closeOnDesktop()"

    class="
        fixed

        right-3
        sm:right-5
        lg:right-6

        top-1/2
        -translate-y-1/2

        w-[calc(100vw-24px)]
        sm:w-[390px]

        h-[min(680px,calc(100dvh-24px))]
        sm:h-[620px]
        lg:h-[650px]

        max-h-[calc(100dvh-24px)]

        bg-white

        rounded-[22px]
        sm:rounded-[24px]

        overflow-hidden

        border
        border-slate-200

        shadow-[-15px_25px_80px_rgba(3,43,85,0.28)]

        flex
        flex-col

        z-[10000]
    "

    style="display: none;"


    >



        {{-- ====================================================

            HEADER

        ==================================================== --}}

        <div

            class="

                relative

                shrink-0

                overflow-hidden

                bg-[#032B55]

                text-white

                px-5

                py-4

            "

        >



            {{-- Decorative Glow --}}

            <div

                class="

                    absolute

                    -top-16

                    -right-10

                    w-40

                    h-40

                    rounded-full

                    bg-blue-400/20

                    blur-3xl

                    pointer-events-none

                "

            ></div>





            <div class="relative flex items-center justify-between gap-4">



                <div class="flex items-center gap-3 min-w-0">



                    {{-- AI Icon --}}

                    <div

                        class="

                            relative

                            w-11

                            h-11

                            shrink-0

                            rounded-2xl

                            bg-white

                            flex

                            items-center

                            justify-center

                            shadow-lg

                        "

                    >



                        <svg

                            viewBox="0 0 24 24"

                            fill="none"

                            class="w-6 h-6 text-[#073B66]"

                            aria-hidden="true"

                        >

                            <path

                                d="M12 3L13.7 8.3L19 10L13.7 11.7L12 17L10.3 11.7L5 10L10.3 8.3L12 3Z"

                                fill="currentColor"

                            />



                            <path

                                d="M18.5 15L19.3 17.2L21.5 18L19.3 18.8L18.5 21L17.7 18.8L15.5 18L17.7 17.2L18.5 15Z"

                                fill="#E31E24"

                            />

                        </svg>





                        <span

                            class="

                                absolute

                                -bottom-0.5

                                -right-0.5

                                w-3.5

                                h-3.5

                                rounded-full

                                bg-emerald-500

                                border-2

                                border-[#032B55]

                            "

                        ></span>



                    </div>





                    {{-- Header Information --}}

                    <div class="min-w-0">



                        <div class="flex items-center gap-2">



                            <h2 class="text-[15px] font-extrabold tracking-tight">

                                ASEW AI Assistant

                            </h2>



                            <span

                                x-show="chatMode === 'ai'"

                                class="

                                    hidden

                                    xs:inline-flex

                                    text-[8px]

                                    font-bold

                                    uppercase

                                    tracking-[0.12em]

                                    bg-white/10

                                    border

                                    border-white/15

                                    rounded-full

                                    px-2

                                    py-1

                                "

                            >

                                AI

                            </span>



                        </div>





                        {{-- AI Mode --}}

                        <p

                            x-show="chatMode === 'ai'"

                            class="

                                mt-0.5

                                text-[11px]

                                text-blue-100

                                flex

                                items-center

                                gap-1.5

                            "

                        >

                            <span

                                class="

                                    w-1.5

                                    h-1.5

                                    rounded-full

                                    bg-emerald-400

                                "

                            ></span>



                            Product & sales assistance

                        </p>





                        {{-- Human Mode --}}

                        <div

                            x-show="chatMode === 'human'"

                            class="

                                mt-1

                                inline-flex

                                items-center

                                gap-1.5

                                rounded-full

                                bg-emerald-500/15

                                border

                                border-emerald-400/20

                                px-2

                                py-1

                                text-[9px]

                                font-bold

                                uppercase

                                tracking-wider

                                text-emerald-200

                            "

                        >



                            <span

                                class="

                                    w-1.5

                                    h-1.5

                                    rounded-full

                                    bg-emerald-400

                                "

                            ></span>



                            ASEW Staff Joined



                        </div>





                        {{-- Closed Mode --}}

                        <p

                            x-show="chatMode === 'closed'"

                            class="

                                mt-0.5

                                text-[11px]

                                text-slate-300

                            "

                        >

                            Conversation closed

                        </p>



                    </div>



                </div>





                {{-- Close Button --}}

                <button

                    type="button"



                    @click.prevent.stop="open = false"



                    class="

                        w-9

                        h-9

                        shrink-0

                        rounded-xl

                        bg-white/10

                        hover:bg-white/20

                        flex

                        items-center

                        justify-center

                        transition

                    "



                    aria-label="Close ASEW assistant"

                >



                    <svg

                        viewBox="0 0 24 24"

                        fill="none"

                        class="w-5 h-5"

                        stroke="currentColor"

                        stroke-width="2"

                    >

                        <path

                            d="M6 6L18 18M18 6L6 18"

                            stroke-linecap="round"

                        />

                    </svg>



                </button>



            </div>



        </div>





        {{-- ====================================================

            MESSAGE AREA

        ==================================================== --}}

        <div

            x-ref="messages"



            class="

                flex-1

                min-h-0

                overflow-y-auto

                bg-[#F7F9FC]

                px-4

                py-5

                space-y-5

                scroll-smooth

            "

        >



            {{-- =================================================

                WELCOME MESSAGE

            ================================================== --}}

            <div class="flex items-start gap-2.5">



                <div

                    class="

                        w-8

                        h-8

                        shrink-0

                        rounded-xl

                        bg-[#073B66]

                        text-white

                        flex

                        items-center

                        justify-center

                        shadow-sm

                    "

                >



                    <svg

                        viewBox="0 0 24 24"

                        class="w-4 h-4"

                        fill="currentColor"

                    >

                        <path

                            d="M12 3L13.7 8.3L19 10L13.7 11.7L12 17L10.3 11.7L5 10L10.3 8.3L12 3Z"

                        />

                    </svg>



                </div>





                <div class="max-w-[82%]">



                    <div

                        class="

                            bg-white

                            border

                            border-slate-200

                            rounded-2xl

                            rounded-tl-md

                            px-4

                            py-3

                            shadow-sm

                        "

                    >



                        <p

                            class="

                                text-[13px]

                                leading-6

                                text-slate-700

                            "

                        >

                            Hello! I'm the



                            <strong class="text-[#073B66]">

                                ASEW AI Assistant

                            </strong>.



                            I can help you find testing equipment,

                            explore ASEW products and guide you with

                            quotation requirements.

                        </p>



                    </div>





                    <span

                        class="

                            block

                            mt-1.5

                            ml-1

                            text-[9px]

                            font-semibold

                            uppercase

                            tracking-wider

                            text-slate-400

                        "

                    >

                        ASEW Assistant

                    </span>



                </div>



            </div>





            {{-- =================================================

                QUICK QUESTIONS

            ================================================== --}}

            <div

                x-show="

                    messages.length === 0 &&

                    chatMode === 'ai'

                "

                class="pl-10"

            >



                <p

                    class="

                        mb-2.5

                        text-[10px]

                        font-bold

                        uppercase

                        tracking-[0.13em]

                        text-slate-400

                    "

                >

                    Quick questions

                </p>





                <div class="flex flex-wrap gap-2">



                    <button

                        type="button"



                        @click.prevent.stop="

                            sendQuickMessage(

                                'I need equipment for concrete testing.'

                            )

                        "



                        class="asew-ai-quick"

                    >

                        Concrete Testing

                    </button>





                    <button

                        type="button"



                        @click.prevent.stop="

                            sendQuickMessage(

                                'Show me equipment for soil testing.'

                            )

                        "



                        class="asew-ai-quick"

                    >

                        Soil Testing

                    </button>





                    <button

                        type="button"



                        @click.prevent.stop="

                            sendQuickMessage(

                                'Help me find the right ASEW product.'

                            )

                        "



                        class="asew-ai-quick"

                    >

                        Find a Product

                    </button>





                    <button

                        type="button"



                        @click.prevent.stop="

                            sendQuickMessage(

                                'I want to request a quotation.'

                            )

                        "



                        class="asew-ai-quick"

                    >

                        Request Quote

                    </button>



                </div>



            </div>





            {{-- =================================================

                DYNAMIC MESSAGES

            ================================================== --}}

            <template

                x-for="(item, index) in messages"

                :key="index"

            >



                <div>



                    {{-- ==========================================

                        USER MESSAGE

                    =========================================== --}}

                    <div

                        x-show="item.role === 'user'"

                        class="flex justify-end"

                    >



                        <div class="max-w-[84%]">



                            <div

                                class="

                                    bg-[#073B66]

                                    text-white

                                    rounded-2xl

                                    rounded-tr-md

                                    px-4

                                    py-3

                                    shadow-sm

                                "

                            >



                                <p

                                    class="

                                        text-[13px]

                                        leading-6

                                        whitespace-pre-wrap

                                        break-words

                                    "

                                    x-text="item.content"

                                ></p>



                            </div>





                            <span

                                class="

                                    block

                                    text-right

                                    mt-1.5

                                    mr-1

                                    text-[9px]

                                    font-semibold

                                    uppercase

                                    tracking-wider

                                    text-slate-400

                                "

                            >

                                You

                            </span>



                        </div>



                    </div>





                    {{-- ==========================================

                        AI MESSAGE

                    =========================================== --}}

                    <div

                        x-show="item.role === 'assistant'"

                        class="flex items-start gap-2.5"

                    >



                        <div

                            class="

                                w-8

                                h-8

                                shrink-0

                                rounded-xl

                                bg-[#073B66]

                                text-white

                                flex

                                items-center

                                justify-center

                            "

                        >



                            <svg

                                viewBox="0 0 24 24"

                                class="w-4 h-4"

                                fill="currentColor"

                            >

                                <path

                                    d="M12 3L13.7 8.3L19 10L13.7 11.7L12 17L10.3 11.7L5 10L10.3 8.3L12 3Z"

                                />

                            </svg>



                        </div>





                        <div class="max-w-[84%]">



                            <div

                                class="

                                    bg-white

                                    border

                                    border-slate-200

                                    rounded-2xl

                                    rounded-tl-md

                                    px-4

                                    py-3

                                    shadow-sm

                                "

                            >



                                <p

                                    class="

                                        text-[13px]

                                        leading-6

                                        text-slate-700

                                        whitespace-pre-wrap

                                        break-words

                                    "

                                    x-text="item.content"

                                ></p>



                            </div>





                            <span

                                class="

                                    block

                                    mt-1.5

                                    ml-1

                                    text-[9px]

                                    font-semibold

                                    uppercase

                                    tracking-wider

                                    text-slate-400

                                "

                            >

                                ASEW Assistant

                            </span>



                        </div>



                    </div>





                    {{-- ==========================================

                        HUMAN / ADMIN MESSAGE

                    =========================================== --}}

                    <div

                        x-show="item.role === 'admin'"

                        class="flex items-start gap-2.5"

                    >



                        <div

                            class="

                                w-8

                                h-8

                                shrink-0

                                rounded-xl

                                bg-emerald-600

                                text-white

                                flex

                                items-center

                                justify-center

                                font-extrabold

                                text-[11px]

                            "

                        >

                            A

                        </div>





                        <div class="max-w-[84%]">



                            <div

                                class="

                                    bg-emerald-50

                                    border

                                    border-emerald-200

                                    rounded-2xl

                                    rounded-tl-md

                                    px-4

                                    py-3

                                    shadow-sm

                                "

                            >



                                <p

                                    class="

                                        text-[13px]

                                        leading-6

                                        text-slate-700

                                        whitespace-pre-wrap

                                        break-words

                                    "

                                    x-text="item.content"

                                ></p>



                            </div>





                            <span

                                class="

                                    block

                                    mt-1.5

                                    ml-1

                                    text-[9px]

                                    font-semibold

                                    uppercase

                                    tracking-wider

                                    text-emerald-600

                                "

                            >

                                ASEW Staff

                            </span>



                        </div>



                    </div>



                </div>



            </template>





            {{-- =================================================

                TYPING INDICATOR

            ================================================== --}}

            <div

                x-show="loading"

                class="flex items-start gap-2.5"

            >



                <div

                    class="

                        w-8

                        h-8

                        shrink-0

                        rounded-xl

                        bg-[#073B66]

                        text-white

                        flex

                        items-center

                        justify-center

                    "

                >



                    <svg

                        viewBox="0 0 24 24"

                        class="w-4 h-4"

                        fill="currentColor"

                    >

                        <path

                            d="M12 3L13.7 8.3L19 10L13.7 11.7L12 17L10.3 11.7L5 10L10.3 8.3L12 3Z"

                        />

                    </svg>



                </div>





                <div

                    class="

                        bg-white

                        border

                        border-slate-200

                        rounded-2xl

                        rounded-tl-md

                        px-4

                        py-4

                        shadow-sm

                    "

                >



                    <div class="flex items-center gap-1.5">



                        <span class="asew-ai-dot"></span>

                        <span class="asew-ai-dot"></span>

                        <span class="asew-ai-dot"></span>



                    </div>



                </div>



            </div>





            {{-- =================================================

                HUMAN HANDOFF NOTICE

            ================================================== --}}

            <div

                x-show="chatMode === 'human'"

                class="

                    mx-auto

                    max-w-[90%]

                    rounded-xl

                    border

                    border-emerald-200

                    bg-emerald-50

                    px-3

                    py-2

                    text-center

                "

            >



                <p

                    class="

                        text-[10px]

                        font-semibold

                        leading-5

                        text-emerald-700

                    "

                >

                    An ASEW team member is handling this conversation.

                </p>



            </div>





            {{-- =================================================

                CLOSED NOTICE

            ================================================== --}}

            <div

                x-show="chatMode === 'closed'"

                class="

                    mx-auto

                    max-w-[90%]

                    rounded-xl

                    border

                    border-slate-200

                    bg-white

                    px-3

                    py-2

                    text-center

                "

            >



                <p

                    class="

                        text-[10px]

                        font-semibold

                        leading-5

                        text-slate-500

                    "

                >

                    This conversation has been closed.

                </p>



            </div>



        </div>





        {{-- ====================================================

            ERROR MESSAGE

        ==================================================== --}}

        <div

            x-show="error"

            x-text="error"



            class="

                shrink-0

                border-t

                border-red-100

                bg-red-50

                px-4

                py-2

                text-center

                text-[11px]

                font-semibold

                text-red-600

            "

        ></div>





        {{-- ====================================================

            INPUT AREA

        ==================================================== --}}

        <div

            class="

                shrink-0

                bg-white

                border-t

                border-slate-200

                px-3

                pt-3

                pb-3

            "

        >



            <form

                @submit.prevent.stop="sendMessage()"



                class="

                    flex

                    items-end

                    gap-2

                    bg-slate-50

                    border

                    border-slate-200

                    rounded-2xl

                    p-1.5



                    focus-within:border-[#073B66]/40

                    focus-within:ring-4

                    focus-within:ring-[#073B66]/5



                    transition

                "

            >



                <textarea

                    x-model="input"



                    @keydown.enter="

                        if (!$event.shiftKey) {

                            $event.preventDefault();

                            $event.stopPropagation();

                            sendMessage();

                        }

                    "



                    rows="1"



                    maxlength="2000"



                    :disabled="

                        loading ||

                        chatMode === 'closed'

                    "



                    :placeholder="

                        chatMode === 'human'

                            ? 'Message ASEW staff...'

                            : (

                                chatMode === 'closed'

                                    ? 'Conversation closed'

                                    : 'Ask about ASEW products...'

                            )

                    "



                    class="

                        asew-ai-textarea

                        flex-1

                        min-w-0

                        max-h-28

                        resize-none

                        bg-transparent

                        border-0

                        outline-none

                        ring-0

                        focus:ring-0

                        px-3

                        py-2.5

                        text-[13px]

                        leading-5

                        text-slate-700

                        placeholder:text-slate-400



                        disabled:cursor-not-allowed

                        disabled:opacity-50

                    "



                    aria-label="Message ASEW Assistant"

                ></textarea>





                {{-- Send Button --}}

                <button

                    type="button"



                    @click.prevent.stop="sendMessage()"



                    :disabled="

                        loading ||

                        !input.trim() ||

                        chatMode === 'closed'

                    "



                    class="

                        w-10

                        h-10

                        shrink-0

                        rounded-xl

                        bg-[#E31E24]

                        text-white

                        flex

                        items-center

                        justify-center

                        shadow-md



                        hover:bg-[#C9151B]



                        disabled:opacity-40

                        disabled:cursor-not-allowed



                        transition

                    "



                    aria-label="Send message"

                >



                    {{-- Send Icon --}}

                    <svg

                        x-show="!loading"

                        viewBox="0 0 24 24"

                        fill="none"

                        class="w-5 h-5"

                        stroke="currentColor"

                        stroke-width="2"

                    >



                        <path

                            d="M4 4L20 12L4 20L7 12L4 4Z"

                            stroke-linejoin="round"

                        />



                        <path

                            d="M7 12H20"

                            stroke-linecap="round"

                        />



                    </svg>





                    {{-- Loading Icon --}}

                    <svg

                        x-show="loading"

                        class="w-5 h-5 animate-spin"

                        viewBox="0 0 24 24"

                        fill="none"

                    >



                        <circle

                            cx="12"

                            cy="12"

                            r="9"

                            stroke="currentColor"

                            stroke-width="3"

                            class="opacity-25"

                        />



                        <path

                            d="M21 12a9 9 0 0 0-9-9"

                            stroke="currentColor"

                            stroke-width="3"

                            stroke-linecap="round"

                            class="opacity-90"

                        />



                    </svg>



                </button>



            </form>





            {{-- Disclaimer --}}

            <div

                class="

                    mt-2

                    flex

                    items-center

                    justify-center

                    gap-1

                    text-[9px]

                    text-slate-400

                "

            >



                <svg

                    viewBox="0 0 24 24"

                    fill="none"

                    class="w-3 h-3"

                    stroke="currentColor"

                    stroke-width="2"

                >



                    <path

                        d="M7 10V8a5 5 0 0 1 10 0v2"

                        stroke-linecap="round"

                    />



                    <rect

                        x="5"

                        y="10"

                        width="14"

                        height="10"

                        rx="2"

                    />



                </svg>





                <span x-show="chatMode === 'ai'">

                    AI responses may require confirmation for technical specifications.

                </span>





                <span x-show="chatMode === 'human'">

                    You are chatting with the ASEW team.

                </span>





                <span x-show="chatMode === 'closed'">

                    This conversation has ended.

                </span>



            </div>



        </div>



    </div>





    {{-- ========================================================
    FLOATING BUTTON
======================================================== --}}

<button
    type="button"

    @click.prevent.stop="open = !open"

    x-show="!open"

    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-5"
    x-transition:enter-end="opacity-100 translate-x-0"

    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-5"

    class="
        group

        flex
        flex-col
        items-center
        justify-center

        w-[50px]
        sm:w-[54px]

        min-h-[138px]
        sm:min-h-[150px]

        bg-[#032B55]
        text-white

        rounded-l-[18px]

        border
        border-r-0
        border-white/10

        shadow-[-10px_12px_35px_rgba(3,43,85,0.30)]

        hover:bg-[#073B66]
        hover:w-[59px]

        focus:outline-none
        focus:ring-4
        focus:ring-[#073B66]/20

        transition-all
        duration-300

        overflow-hidden
    "

    aria-label="Open ASEW AI Assistant"
>

    {{-- =====================================================
        AI ICON
    ====================================================== --}}

    <span
        class="
            relative

            w-9
            h-9

            shrink-0

            rounded-xl

            bg-white
            text-[#073B66]

            flex
            items-center
            justify-center

            shadow-sm

            transition-transform
            duration-300

            group-hover:scale-105
        "
    >

        <svg
            viewBox="0 0 24 24"
            fill="none"

            class="
                w-5
                h-5

                transition-transform
                duration-300

                group-hover:rotate-12
            "

            aria-hidden="true"
        >

            <path
                d="M12 3L13.7 8.3L19 10L13.7 11.7L12 17L10.3 11.7L5 10L10.3 8.3L12 3Z"
                fill="currentColor"
            />

            <path
                d="M18.5 15L19.3 17.2L21.5 18L19.3 18.8L18.5 21L17.7 18.8L15.5 18L17.7 17.2L18.5 15Z"
                fill="#E31E24"
            />

        </svg>


        {{-- Online Indicator --}}

        <span
            class="
                absolute
                -top-1
                -right-1

                w-3
                h-3

                rounded-full

                bg-emerald-500

                border-2
                border-white
            "
        ></span>

    </span>


    {{-- =====================================================
        VERTICAL LABEL
    ====================================================== --}}

    <span
        class="
            mt-3

            flex
            items-center
            justify-center

            text-[10px]
            sm:text-[11px]

            leading-none

            font-extrabold

            uppercase

            tracking-[0.16em]

            whitespace-nowrap

            [writing-mode:vertical-rl]

            rotate-180
        "
    >

        <span x-show="chatMode === 'ai'">
            Ask AI
        </span>

        <span x-show="chatMode === 'human'">
            Live Chat
        </span>

        <span x-show="chatMode === 'closed'">
            Chat
        </span>

    </span>


    {{-- =====================================================
        SMALL DECORATIVE DOT
    ====================================================== --}}

    <span
        class="
            mt-3

            w-1
            h-1

            rounded-full

            bg-blue-300/80
        "
    ></span>

</button>



</div>





{{-- ============================================================

    COMPONENT STYLES

============================================================ --}}

@once

    @push('styles')



        <style>



            [x-cloak] {

                display: none !important;

            }





            /*

            |--------------------------------------------------------------------------

            | Quick Question Buttons

            |--------------------------------------------------------------------------

            */



            .asew-ai-quick {



                display: inline-flex;

                align-items: center;

                justify-content: center;



                padding: 7px 10px;



                border: 1px solid #dbe3ec;

                border-radius: 999px;



                background: #ffffff;



                color: #073B66;



                font-size: 10px;

                font-weight: 700;



                transition:

                    background-color .2s ease,

                    border-color .2s ease,

                    color .2s ease,

                    transform .2s ease;



            }





            .asew-ai-quick:hover {



                background: #073B66;



                border-color: #073B66;



                color: #ffffff;



                transform: translateY(-1px);



            }





            /*

            |--------------------------------------------------------------------------

            | Typing Indicator

            |--------------------------------------------------------------------------

            */



            .asew-ai-dot {



                width: 6px;

                height: 6px;



                border-radius: 999px;



                background: #073B66;



                animation:

                    asewAiTyping

                    1.2s

                    infinite

                    ease-in-out;



            }





            .asew-ai-dot:nth-child(2) {

                animation-delay: .15s;

            }





            .asew-ai-dot:nth-child(3) {

                animation-delay: .30s;

            }





            @keyframes asewAiTyping {



                0%,

                60%,

                100% {



                    transform: translateY(0);



                    opacity: .35;



                }



                30% {



                    transform: translateY(-4px);



                    opacity: 1;



                }



            }





            /*

            |--------------------------------------------------------------------------

            | Textarea

            |--------------------------------------------------------------------------

            */



            .asew-ai-textarea {

                scrollbar-width: thin;

            }



        </style>



    @endpush

@endonce

{{-- ============================================================
    COMPONENT SCRIPT
============================================================ --}}

@once
    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {

                Alpine.data('asewAiAssistant', () => ({

                    /* =========================================================
                       STATE
                    ========================================================= */

                    open: false,
                    input: '',
                    loading: false,
                    error: '',
                    messages: [],

                    conversationToken: null,
                    chatMode: 'ai',
                    lastMessageId: 0,

                    pollTimer: null,
                    polling: false,

                    storageKey: 'asew_ai_conversation_token',


                    /* =========================================================
                       INITIALIZE
                    ========================================================= */

                    init() {

                        /*
                         * Restore existing conversation token.
                         */
                        try {

                            const savedToken =
                                sessionStorage.getItem(this.storageKey);

                            if (
                                savedToken &&
                                savedToken.trim()
                            ) {
                                this.conversationToken =
                                    savedToken.trim();
                            }

                        } catch (error) {

                            console.warn(
                                'ASEW Assistant session storage unavailable.',
                                error
                            );

                        }


                        /*
                         * Start polling only when chat window is open.
                         *
                         * This prevents unnecessary background requests
                         * while the widget is closed.
                         */
                        this.$watch('open', (isOpen) => {

                            if (
                                isOpen &&
                                this.conversationToken &&
                                this.chatMode !== 'closed'
                            ) {

                                this.startPolling();

                            } else {

                                this.stopPolling();

                            }

                        });


                        /*
                         * Stop polling before page unload.
                         */
                        window.addEventListener('beforeunload', () => {
                            this.stopPolling();
                        });

                    },


                    /* =========================================================
                       CLOSE ON DESKTOP
                    ========================================================= */

                    closeOnDesktop() {

                        if (window.innerWidth >= 640) {
                            this.open = false;
                        }

                    },


                    /* =========================================================
                       CSRF TOKEN
                    ========================================================= */

                    csrfToken() {

                        return document
                            .querySelector('meta[name="csrf-token"]')
                            ?.getAttribute('content') ?? '';

                    },


                    /* =========================================================
                       SAVE CONVERSATION TOKEN
                    ========================================================= */

                    saveConversationToken(token) {

                        if (
                            typeof token !== 'string' ||
                            !token.trim()
                        ) {
                            return;
                        }

                        const cleanToken = token.trim();


                        /*
                         * Avoid unnecessary Alpine state update.
                         */
                        if (this.conversationToken !== cleanToken) {
                            this.conversationToken = cleanToken;
                        }


                        try {

                            sessionStorage.setItem(
                                this.storageKey,
                                cleanToken
                            );

                        } catch (error) {

                            console.warn(
                                'ASEW Assistant could not persist chat token.',
                                error
                            );

                        }

                    },


                    /* =========================================================
                       SET CHAT MODE
                    ========================================================= */

                    setMode(mode) {

                        if (
                            !['ai', 'human', 'closed'].includes(mode)
                        ) {
                            return;
                        }


                        /*
                         * IMPORTANT:
                         *
                         * Polling returns the current mode every few seconds.
                         * If the mode has not changed, do NOTHING.
                         *
                         * This prevents unnecessary Alpine re-rendering
                         * and the refresh/flicker effect.
                         */
                        if (this.chatMode === mode) {
                            return;
                        }


                        this.chatMode = mode;


                        /*
                         * Closed conversation should stop polling.
                         */
                        if (mode === 'closed') {

                            this.stopPolling();

                            return;
                        }


                        /*
                         * We deliberately DO NOT call startPolling()
                         * here.
                         *
                         * Polling is controlled centrally by:
                         * - widget open watcher
                         * - send message
                         * - existing polling timer
                         *
                         * This prevents repeated polling initialization.
                         */

                    },


                    /* =========================================================
                       QUICK MESSAGE
                    ========================================================= */

                    sendQuickMessage(message) {

                        if (
                            this.loading ||
                            this.chatMode !== 'ai'
                        ) {
                            return;
                        }


                        this.input = message;

                        this.sendMessage();

                    },


                    /* =========================================================
                       SEND MESSAGE
                    ========================================================= */

                    async sendMessage() {

                        const message = this.input.trim();


                        if (
                            !message ||
                            this.loading ||
                            this.chatMode === 'closed'
                        ) {
                            return;
                        }


                        this.error = '';


                        /*
                         * Show customer's message immediately.
                         */
                        this.messages.push({
                            id: null,
                            role: 'user',
                            content: message,
                            sender_name: 'You'
                        });


                        this.input = '';
                        this.loading = true;


                        /*
                         * User intentionally sent a message,
                         * therefore smooth scrolling is fine here.
                         */
                        this.scrollToBottom(true);


                        try {

                            if (this.chatMode === 'human') {

                                await this.sendHumanMessage(message);

                            } else {

                                await this.sendAiMessage(message);

                            }

                        } catch (error) {

                            console.error(
                                'ASEW Assistant:',
                                error
                            );


                            this.error =
                                error?.message ||
                                'The assistant is temporarily unavailable. Please try again.';

                        } finally {

                            this.loading = false;

                            /*
                             * Keep widget open.
                             */
                            this.open = true;

                            this.scrollToBottom(true);

                        }

                    },


                    /* =========================================================
                       SEND MESSAGE TO AI
                    ========================================================= */

                    async sendAiMessage(message) {

                        const response = await fetch(
                            @js(route('ai.chat', [], false)),
                            {
                                method: 'POST',

                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': this.csrfToken()
                                },

                                body: JSON.stringify({
                                    message: message,
                                    conversation_token:
                                        this.conversationToken
                                })
                            }
                        );


                        const data =
                            await response
                                .json()
                                .catch(() => ({}));


                        /*
                         * Save conversation UUID returned
                         * by Laravel.
                         */
                        if (data.conversation_token) {

                            this.saveConversationToken(
                                data.conversation_token
                            );

                        }


                        /*
                         * Update current mode only when needed.
                         */
                        if (data.mode) {

                            this.setMode(data.mode);

                        }


                        /*
                         * Conversation closed.
                         */
                        if (data.mode === 'closed') {

                            throw new Error(
                                data.message ||
                                'This conversation has been closed.'
                            );

                        }


                        /*
                         * Laravel/API error.
                         */
                        if (
                            !response.ok ||
                            !data.success
                        ) {

                            throw new Error(
                                data.message ||
                                `Request failed (${response.status})`
                            );

                        }


                        /*
                         * Human staff took over while
                         * AI request was being processed.
                         */
                        if (
                            data.mode === 'human' ||
                            data.handled_by === 'human'
                        ) {

                            this.setMode('human');


                            if (data.message_id) {

                                this.lastMessageId = Math.max(
                                    this.lastMessageId,
                                    Number(data.message_id) || 0
                                );

                            }


                            this.startPolling();

                            return;

                        }


                        /*
                         * Validate AI answer.
                         */
                        if (
                            typeof data.message !== 'string' ||
                            !data.message.trim()
                        ) {

                            throw new Error(
                                'The AI returned an empty response.'
                            );

                        }


                        /*
                         * Add AI message.
                         */
                        this.messages.push({

                            id: data.message_id ?? null,

                            role: 'assistant',

                            content: data.message.trim(),

                            sender_name: 'ASEW Assistant'

                        });


                        /*
                         * Advance message cursor.
                         */
                        if (data.message_id) {

                            this.lastMessageId = Math.max(
                                this.lastMessageId,
                                Number(data.message_id) || 0
                            );

                        }


                        /*
                         * Make sure polling is active.
                         */
                        if (
                            this.conversationToken &&
                            this.open
                        ) {

                            this.startPolling();

                        }

                    },


                    /* =========================================================
                       SEND MESSAGE TO HUMAN STAFF
                    ========================================================= */

                    async sendHumanMessage(message) {

                        if (!this.conversationToken) {

                            throw new Error(
                                'Conversation session is missing. Please refresh and start a new chat.'
                            );

                        }


                        const response = await fetch(
                            @js(route('ai.human-message', [], false)),
                            {
                                method: 'POST',

                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': this.csrfToken()
                                },

                                body: JSON.stringify({
                                    message: message,
                                    conversation_token:
                                        this.conversationToken
                                })
                            }
                        );


                        const data =
                            await response
                                .json()
                                .catch(() => ({}));


                        /*
                         * Mode may have changed while
                         * customer was typing.
                         */
                        if (data.mode) {

                            this.setMode(data.mode);

                        }


                        if (
                            !response.ok ||
                            !data.success
                        ) {

                            throw new Error(
                                data.message ||
                                `Request failed (${response.status})`
                            );

                        }


                        /*
                         * Advance cursor.
                         */
                        if (data.message_id) {

                            this.lastMessageId = Math.max(
                                this.lastMessageId,
                                Number(data.message_id) || 0
                            );

                        }


                        this.startPolling();

                    },


                    /* =========================================================
                       START LIVE POLLING
                    ========================================================= */

                    startPolling() {

                        /*
                         * Poll only when:
                         *
                         * - widget is open
                         * - conversation exists
                         * - conversation is not closed
                         */
                        if (
                            !this.open ||
                            !this.conversationToken ||
                            this.chatMode === 'closed'
                        ) {
                            return;
                        }


                        /*
                         * Existing timer already running.
                         *
                         * Never create duplicate intervals.
                         */
                        if (this.pollTimer) {
                            return;
                        }


                        /*
                         * First immediate check.
                         */
                        this.fetchLiveMessages();


                        /*
                         * Background polling.
                         *
                         * 4 seconds is fast enough for chat while
                         * reducing unnecessary UI/network activity.
                         */
                        this.pollTimer = window.setInterval(() => {

                            if (
                                this.open &&
                                this.conversationToken &&
                                this.chatMode !== 'closed'
                            ) {

                                this.fetchLiveMessages();

                            }

                        }, 4000);

                    },


                    /* =========================================================
                       STOP LIVE POLLING
                    ========================================================= */

                    stopPolling() {

                        if (!this.pollTimer) {
                            return;
                        }


                        window.clearInterval(
                            this.pollTimer
                        );


                        this.pollTimer = null;

                    },


                    /* =========================================================
                       FETCH LIVE ADMIN / AI MESSAGES
                    ========================================================= */

                    async fetchLiveMessages() {

                        /*
                         * Prevent:
                         *
                         * - overlapping requests
                         * - polling while widget closed
                         * - polling without token
                         * - polling after close
                         */
                        if (
                            this.polling ||
                            !this.open ||
                            !this.conversationToken ||
                            this.chatMode === 'closed'
                        ) {
                            return;
                        }


                        this.polling = true;


                        try {

                            const url = new URL(
                                @js(route('ai.messages', [], false)),
                                window.location.origin
                            );


                            url.searchParams.set(
                                'conversation_token',
                                this.conversationToken
                            );


                            url.searchParams.set(
                                'after_id',
                                String(
                                    this.lastMessageId || 0
                                )
                            );


                            const response = await fetch(
                                url.toString(),
                                {
                                    method: 'GET',

                                    headers: {
                                        'Accept': 'application/json',
                                        'X-Requested-With':
                                            'XMLHttpRequest'
                                    },

                                    cache: 'no-store'
                                }
                            );


                            const data =
                                await response
                                    .json()
                                    .catch(() => ({}));


                            /*
                             * Invalid/expired conversation.
                             */
                            if (response.status === 404) {

                                this.resetConversation();

                                return;

                            }


                            /*
                             * Silently ignore temporary polling
                             * failures.
                             *
                             * Don't disturb the customer UI.
                             */
                            if (
                                !response.ok ||
                                !data.success
                            ) {

                                return;

                            }


                            /*
                             * IMPORTANT:
                             *
                             * setMode() itself checks whether
                             * the mode actually changed.
                             *
                             * Therefore normal polling does not
                             * cause unnecessary re-rendering.
                             */
                            if (data.mode) {

                                this.setMode(
                                    data.mode
                                );

                            }


                            const incoming =
                                Array.isArray(data.messages)
                                    ? data.messages
                                    : [];


                            /*
                             * Track whether we REALLY added
                             * something to the UI.
                             */
                            let addedNewMessage = false;


                            incoming.forEach((item) => {

                                const id =
                                    Number(item.id) || 0;


                                /*
                                 * Ignore duplicate message IDs.
                                 */
                                if (
                                    id > 0 &&
                                    this.messages.some(
                                        (existing) =>
                                            Number(existing.id) === id
                                    )
                                ) {

                                    return;

                                }


                                const role =
                                    item.sender_type === 'admin'
                                        ? 'admin'
                                        : 'assistant';


                                const content =
                                    item.content ??
                                    item.message ??
                                    '';


                                /*
                                 * Ignore blank messages.
                                 */
                                if (
                                    !String(content).trim()
                                ) {

                                    return;

                                }


                                /*
                                 * Add only genuinely new message.
                                 */
                                this.messages.push({

                                    id: id || null,

                                    role: role,

                                    content:
                                        String(content).trim(),

                                    sender_name:
                                        item.sender_name ??
                                        (
                                            role === 'admin'
                                                ? 'ASEW Staff'
                                                : 'ASEW Assistant'
                                        )

                                });


                                addedNewMessage = true;


                                /*
                                 * Advance cursor.
                                 */
                                if (id > 0) {

                                    this.lastMessageId =
                                        Math.max(
                                            this.lastMessageId,
                                            id
                                        );

                                }

                            });


                            /*
                             * Backend cursor.
                             */
                            if (data.last_message_id) {

                                this.lastMessageId =
                                    Math.max(
                                        this.lastMessageId,
                                        Number(
                                            data.last_message_id
                                        ) || 0
                                    );

                            }


                            /*
                             * IMPORTANT:
                             *
                             * Do not scroll every polling cycle.
                             *
                             * Scroll ONLY when a real new
                             * admin/AI message was added.
                             */
                            if (addedNewMessage) {

                                this.scrollToBottom(false);

                            }

                        } catch (error) {

                            /*
                             * Polling errors should not flash an
                             * error box repeatedly to customer.
                             */
                            console.warn(
                                'ASEW live-chat polling failed.',
                                error
                            );

                        } finally {

                            this.polling = false;

                        }

                    },


                    /* =========================================================
                       ADD HUMAN MESSAGE MANUALLY
                    ========================================================= */

                    addHumanMessage(message) {

                        if (
                            typeof message !== 'string' ||
                            !message.trim()
                        ) {
                            return;
                        }


                        this.setMode('human');


                        this.messages.push({

                            id: null,

                            role: 'admin',

                            content: message.trim(),

                            sender_name: 'ASEW Staff'

                        });


                        this.scrollToBottom(true);

                    },


                    /* =========================================================
                       RESET CONVERSATION
                    ========================================================= */

                    resetConversation() {

                        this.stopPolling();


                        this.conversationToken = null;

                        this.chatMode = 'ai';

                        this.lastMessageId = 0;

                        this.polling = false;


                        /*
                         * Do NOT continuously modify visible
                         * messages during polling.
                         *
                         * Existing messages can remain visible
                         * until customer starts a new session.
                         */


                        try {

                            sessionStorage.removeItem(
                                this.storageKey
                            );

                        } catch (error) {

                            console.warn(
                                'ASEW Assistant storage reset failed.',
                                error
                            );

                        }

                    },


                    /* =========================================================
                       SCROLL CHAT
                    ========================================================= */

                    scrollToBottom(smooth = true) {

                        this.$nextTick(() => {

                            const container =
                                this.$refs.messages;


                            if (!container) {
                                return;
                            }


                            /*
                             * Smooth:
                             * - customer sends message
                             * - AI directly answers
                             *
                             * Auto:
                             * - background polling receives
                             *   human/admin message
                             *
                             * This removes the repeating
                             * scroll/refresh feeling.
                             */
                            container.scrollTo({

                                top:
                                    container.scrollHeight,

                                behavior:
                                    smooth
                                        ? 'smooth'
                                        : 'auto'

                            });

                        });

                    }

                }));

            });
        </script>
    @endpush
@endonce