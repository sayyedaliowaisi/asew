<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>New ASEW Website Chat</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f6f8;
    font-family:Arial,Helvetica,sans-serif;
    color:#334155;
">

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="background:#f4f6f8;padding:30px 15px;"
>
    <tr>
        <td align="center">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    max-width:620px;
                    background:#ffffff;
                    border:1px solid #e2e8f0;
                "
            >

                {{-- HEADER --}}
                <tr>
                    <td
                        style="
                            padding:24px 30px;
                            background:#032B55;
                            color:#ffffff;
                        "
                    >
                        <div
                            style="
                                font-size:11px;
                                letter-spacing:1.5px;
                                text-transform:uppercase;
                                opacity:.75;
                                margin-bottom:7px;
                            "
                        >
                            ASEW Website
                        </div>

                        <div
                            style="
                                font-size:22px;
                                font-weight:700;
                            "
                        >
                            New AI Chat
                        </div>
                    </td>
                </tr>


                {{-- CONTENT --}}
                <tr>
                    <td style="padding:30px;">

                        <p
                            style="
                                margin:0 0 20px;
                                font-size:15px;
                                line-height:1.7;
                            "
                        >
                            A visitor has started a new conversation
                            with the ASEW website assistant.
                        </p>


                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            style="
                                border-collapse:collapse;
                                margin-bottom:24px;
                            "
                        >

                            <tr>
                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                        color:#64748b;
                                        width:130px;
                                    "
                                >
                                    Conversation
                                </td>

                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                        font-weight:700;
                                        color:#032B55;
                                    "
                                >
                                    #{{ $conversation->id }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                        color:#64748b;
                                    "
                                >
                                    Mode
                                </td>

                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                        font-weight:700;
                                    "
                                >
                                    {{ strtoupper($conversation->mode) }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                        color:#64748b;
                                    "
                                >
                                    Time
                                </td>

                                <td
                                    style="
                                        padding:10px 0;
                                        border-bottom:1px solid #e2e8f0;
                                        font-size:13px;
                                    "
                                >
                                    {{ $customerMessage->created_at?->format('d M Y, h:i A') }}
                                </td>
                            </tr>

                        </table>


                        <div
                            style="
                                font-size:11px;
                                font-weight:700;
                                text-transform:uppercase;
                                letter-spacing:1px;
                                color:#64748b;
                                margin-bottom:8px;
                            "
                        >
                            Customer Message
                        </div>


                        <div
                            style="
                                padding:18px;
                                background:#f8fafc;
                                border-left:4px solid #D71920;
                                font-size:14px;
                                line-height:1.7;
                                color:#334155;
                                margin-bottom:28px;
                            "
                        >
                            {{ $customerMessage->message }}
                        </div>


                        <a
                            href="{{ route(
                                'admin.ai-conversations.show',
                                $conversation
                            ) }}"
                            style="
                                display:inline-block;
                                padding:13px 22px;
                                background:#D71920;
                                color:#ffffff;
                                text-decoration:none;
                                font-size:12px;
                                font-weight:700;
                                text-transform:uppercase;
                                letter-spacing:.6px;
                            "
                        >
                            Open Conversation
                        </a>

                    </td>
                </tr>


                {{-- FOOTER --}}
                <tr>
                    <td
                        style="
                            padding:18px 30px;
                            background:#f8fafc;
                            border-top:1px solid #e2e8f0;
                            font-size:11px;
                            line-height:1.6;
                            color:#94a3b8;
                        "
                    >
                        This notification was generated automatically
                        by the ASEW website AI assistant.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>