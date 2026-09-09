
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>New Product Enquiry</title>

</head>

<body
    style="
        margin:0;
        padding:0;
        background:#f4f6f8;
        font-family:Arial, Helvetica, sans-serif;
        color:#334155;
    "
>

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
                    max-width:650px;
                    background:#ffffff;
                    border-collapse:collapse;
                "
            >

                {{-- HEADER --}}

                <tr>

                    <td
                        style="
                            background:#032B55;
                            padding:28px 32px;
                        "
                    >

                        <div
                            style="
                                color:#D7A93A;
                                font-size:11px;
                                font-weight:bold;
                                text-transform:uppercase;
                                letter-spacing:2px;
                            "
                        >
                            ASEW
                        </div>


                        <h1
                            style="
                                margin:8px 0 0;
                                color:#ffffff;
                                font-size:24px;
                            "
                        >
                            New Product Enquiry
                        </h1>

                    </td>

                </tr>



                {{-- INTRO --}}

                <tr>

                    <td style="padding:30px 32px 15px;">

                        <p
                            style="
                                margin:0;
                                font-size:14px;
                                line-height:24px;
                            "
                        >
                            A new product enquiry has been
                            submitted through the ASEW website.
                        </p>

                    </td>

                </tr>



                {{-- ENQUIRY NUMBER --}}

                <tr>

                    <td style="padding:10px 32px;">

                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            style="
                                background:#f8fafc;
                                border:1px solid #e2e8f0;
                            "
                        >

                            <tr>

                                <td style="padding:18px;">

                                    <div
                                        style="
                                            font-size:10px;
                                            color:#94a3b8;
                                            text-transform:uppercase;
                                            font-weight:bold;
                                        "
                                    >
                                        Enquiry Number
                                    </div>

                                    <div
                                        style="
                                            margin-top:6px;
                                            color:#073B66;
                                            font-size:18px;
                                            font-weight:bold;
                                        "
                                    >
                                        #{{ str_pad(
                                            $enquiry->id,
                                            5,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}
                                    </div>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>



                {{-- PRODUCT --}}

                <tr>

                    <td style="padding:20px 32px 5px;">

                        <div
                            style="
                                color:#D71920;
                                font-size:10px;
                                font-weight:bold;
                                text-transform:uppercase;
                                letter-spacing:1px;
                            "
                        >
                            Requested Product
                        </div>

                        <h2
                            style="
                                margin:8px 0 4px;
                                color:#073B66;
                                font-size:19px;
                            "
                        >
                            {{ $enquiry->product_name
                                ?? 'General Product Enquiry' }}
                        </h2>

                        @if($enquiry->product_code)

                            <p
                                style="
                                    margin:0;
                                    color:#D71920;
                                    font-size:12px;
                                    font-weight:bold;
                                "
                            >
                                {{ $enquiry->product_code }}
                            </p>

                        @endif

                    </td>

                </tr>



                {{-- CUSTOMER DETAILS --}}

                <tr>

                    <td style="padding:25px 32px;">

                        <div
                            style="
                                margin-bottom:14px;
                                color:#D71920;
                                font-size:10px;
                                font-weight:bold;
                                text-transform:uppercase;
                                letter-spacing:1px;
                            "
                        >
                            Customer Information
                        </div>


                        <table
                            width="100%"
                            cellpadding="8"
                            cellspacing="0"
                            style="
                                border-collapse:collapse;
                                font-size:13px;
                            "
                        >

                            <tr>
                                <td
                                    width="35%"
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        color:#64748b;
                                    "
                                >
                                    Name
                                </td>

                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $enquiry->name }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        color:#64748b;
                                    "
                                >
                                    Company
                                </td>

                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $enquiry->company ?: '—' }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        color:#64748b;
                                    "
                                >
                                    Email
                                </td>

                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $enquiry->email }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        color:#64748b;
                                    "
                                >
                                    Phone
                                </td>

                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $enquiry->phone }}
                                </td>
                            </tr>


                            <tr>
                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                        color:#64748b;
                                    "
                                >
                                    City
                                </td>

                                <td
                                    style="
                                        border-bottom:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $enquiry->city ?: '—' }}
                                </td>
                            </tr>


                            <tr>
                                <td style="color:#64748b;">
                                    Quantity
                                </td>

                                <td style="font-weight:bold;">
                                    {{ $enquiry->quantity }}
                                </td>
                            </tr>

                        </table>

                    </td>

                </tr>



                {{-- MESSAGE --}}

                @if($enquiry->message)

                    <tr>

                        <td style="padding:0 32px 25px;">

                            <div
                                style="
                                    color:#D71920;
                                    font-size:10px;
                                    font-weight:bold;
                                    text-transform:uppercase;
                                    letter-spacing:1px;
                                "
                            >
                                Customer Message
                            </div>


                            <div
                                style="
                                    margin-top:10px;
                                    padding:18px;
                                    background:#f8fafc;
                                    border-left:3px solid #073B66;
                                    font-size:13px;
                                    line-height:22px;
                                "
                            >
                                {!! nl2br(e($enquiry->message)) !!}
                            </div>

                        </td>

                    </tr>

                @endif



                {{-- ADMIN CTA --}}

                <tr>

                    <td
                        align="center"
                        style="padding:5px 32px 30px;"
                    >

                        <a
                            href="{{ route(
                                'admin.enquiries.show',
                                $enquiry
                            ) }}"
                            style="
                                display:inline-block;
                                padding:14px 24px;
                                background:#D71920;
                                color:#ffffff;
                                text-decoration:none;
                                font-size:11px;
                                font-weight:bold;
                                text-transform:uppercase;
                                letter-spacing:1px;
                            "
                        >
                            View Enquiry
                        </a>

                    </td>

                </tr>



                {{-- FOOTER --}}

                <tr>

                    <td
                        style="
                            background:#032B55;
                            padding:20px 32px;
                            text-align:center;
                            color:rgba(255,255,255,.6);
                            font-size:10px;
                            line-height:18px;
                        "
                    >
                        Associated Scientific & Engineering Works
                        <br>
                        ASEW Admin Notification
                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>
</html>


