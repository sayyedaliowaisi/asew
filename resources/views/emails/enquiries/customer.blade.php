
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Enquiry Confirmation</title>

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
    style="padding:30px 15px;background:#f4f6f8;"
>

    <tr>

        <td align="center">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
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
                            padding:30px 32px;
                            background:#032B55;
                            text-align:center;
                        "
                    >

                        <div
                            style="
                                color:#D7A93A;
                                font-size:12px;
                                font-weight:bold;
                                letter-spacing:2px;
                            "
                        >
                            ASEW
                        </div>


                        <h1
                            style="
                                margin:10px 0 0;
                                color:#ffffff;
                                font-size:24px;
                            "
                        >
                            Thank You for Your Enquiry
                        </h1>

                    </td>

                </tr>



                {{-- MESSAGE --}}

                <tr>

                    <td style="padding:32px;">

                        <p
                            style="
                                margin:0;
                                color:#073B66;
                                font-size:17px;
                                font-weight:bold;
                            "
                        >
                            Dear {{ $enquiry->name }},
                        </p>


                        <p
                            style="
                                margin:16px 0 0;
                                font-size:13px;
                                line-height:23px;
                                color:#64748b;
                            "
                        >
                            Thank you for contacting
                            Associated Scientific & Engineering Works.
                            We have successfully received your
                            product enquiry.
                        </p>


                        <div
                            style="
                                margin-top:25px;
                                padding:20px;
                                background:#f8fafc;
                                border:1px solid #e2e8f0;
                            "
                        >

                            <div
                                style="
                                    font-size:10px;
                                    color:#D71920;
                                    font-weight:bold;
                                    text-transform:uppercase;
                                    letter-spacing:1px;
                                "
                            >
                                Enquiry Reference
                            </div>


                            <div
                                style="
                                    margin-top:7px;
                                    color:#073B66;
                                    font-size:20px;
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

                        </div>



                        <div
                            style="
                                margin-top:25px;
                                border-top:1px solid #e2e8f0;
                                border-bottom:1px solid #e2e8f0;
                                padding:20px 0;
                            "
                        >

                            <div
                                style="
                                    font-size:10px;
                                    color:#94a3b8;
                                    font-weight:bold;
                                    text-transform:uppercase;
                                "
                            >
                                Requested Product
                            </div>


                            <div
                                style="
                                    margin-top:7px;
                                    color:#073B66;
                                    font-size:16px;
                                    font-weight:bold;
                                "
                            >
                                {{ $enquiry->product_name
                                    ?? 'General Product Enquiry' }}
                            </div>


                            @if($enquiry->product_code)

                                <div
                                    style="
                                        margin-top:5px;
                                        color:#D71920;
                                        font-size:11px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $enquiry->product_code }}
                                </div>

                            @endif


                            <div
                                style="
                                    margin-top:12px;
                                    color:#64748b;
                                    font-size:12px;
                                "
                            >
                                Quantity:
                                <strong>
                                    {{ $enquiry->quantity }}
                                </strong>
                            </div>

                        </div>



                        <p
                            style="
                                margin:22px 0 0;
                                font-size:13px;
                                line-height:23px;
                                color:#64748b;
                            "
                        >
                            Our team will review your requirement
                            and contact you regarding the next steps.
                        </p>


                        <p
                            style="
                                margin:22px 0 0;
                                color:#073B66;
                                font-size:13px;
                                line-height:22px;
                            "
                        >
                            Regards,<br>
                            <strong>ASEW Team</strong><br>
                            Associated Scientific & Engineering Works
                        </p>

                    </td>

                </tr>



                {{-- FOOTER --}}

                <tr>

                    <td
                        style="
                            padding:20px 32px;
                            background:#032B55;
                            color:rgba(255,255,255,.6);
                            text-align:center;
                            font-size:10px;
                            line-height:18px;
                        "
                    >
                        Scientific & Engineering Testing Equipment
                        <br>
                        Since 1975
                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>
</html>

