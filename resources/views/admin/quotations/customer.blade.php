<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $quotation->quotation_number }}
    </title>

</head>


<body
    style="
        margin:0;
        padding:0;
        background:#f3f5f7;
        font-family:Arial,Helvetica,sans-serif;
        color:#475569;
    "
>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        background:#f3f5f7;
        padding:30px 15px;
    "
>

<tr>

<td align="center">


<table
    width="650"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        width:100%;
        max-width:650px;
        background:#ffffff;
    "
>

    {{-- TOP LINE --}}

    <tr>

        <td
            height="5"
            style="background:#D71920;"
        ></td>

    </tr>



    {{-- HEADER --}}

    <tr>

        <td
            style="
                padding:30px;
                background:#032B55;
                color:#ffffff;
            "
        >

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
            >

                <tr>

                    <td>

                        <div
                            style="
                                font-size:11px;
                                letter-spacing:2px;
                                color:#D7A93A;
                                font-weight:bold;
                            "
                        >
                            ASEW • SINCE 1975
                        </div>


                        <div
                            style="
                                margin-top:8px;
                                font-size:22px;
                                line-height:30px;
                                font-weight:bold;
                            "
                        >
                            Associated Scientific &
                            Engineering Works
                        </div>


                        <div
                            style="
                                margin-top:8px;
                                font-size:12px;
                                color:#cbd5e1;
                            "
                        >
                            Scientific & Engineering Testing Equipment
                        </div>

                    </td>

                </tr>

            </table>

        </td>

    </tr>



    {{-- MESSAGE --}}

    <tr>

        <td style="padding:30px;">

            <p
                style="
                    margin:0;
                    font-size:14px;
                    color:#073B66;
                    font-weight:bold;
                "
            >
                Dear {{ $quotation->customer_name }},
            </p>


            <p
                style="
                    margin:18px 0 0;
                    font-size:13px;
                    line-height:22px;
                "
            >
                Thank you for your interest in ASEW products.
                Please find below our commercial quotation
                prepared against your enquiry.
            </p>



            {{-- QUOTATION INFO --}}

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                style="
                    margin-top:25px;
                    border:1px solid #e2e8f0;
                "
            >

                <tr>

                    <td
                        style="
                            padding:14px;
                            background:#f8fafc;
                            font-size:11px;
                            color:#64748b;
                        "
                    >
                        Quotation Number
                    </td>

                    <td
                        align="right"
                        style="
                            padding:14px;
                            background:#f8fafc;
                            font-size:12px;
                            font-weight:bold;
                            color:#073B66;
                        "
                    >
                        {{ $quotation->quotation_number }}
                    </td>

                </tr>


                <tr>

                    <td
                        style="
                            padding:14px;
                            border-top:1px solid #e2e8f0;
                            font-size:11px;
                            color:#64748b;
                        "
                    >
                        Quotation Date
                    </td>

                    <td
                        align="right"
                        style="
                            padding:14px;
                            border-top:1px solid #e2e8f0;
                            font-size:12px;
                            color:#073B66;
                        "
                    >
                        {{ $quotation->quotation_date->format('d M Y') }}
                    </td>

                </tr>


                <tr>

                    <td
                        style="
                            padding:14px;
                            border-top:1px solid #e2e8f0;
                            font-size:11px;
                            color:#64748b;
                        "
                    >
                        Valid Until
                    </td>

                    <td
                        align="right"
                        style="
                            padding:14px;
                            border-top:1px solid #e2e8f0;
                            font-size:12px;
                            color:#073B66;
                        "
                    >
                        {{ $quotation->valid_until?->format('d M Y') ?? '—' }}
                    </td>

                </tr>

            </table>



            {{-- ITEMS --}}

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                style="
                    margin-top:25px;
                    border-collapse:collapse;
                "
            >

                <thead>

                    <tr style="background:#032B55;">

                        <th
                            align="left"
                            style="
                                padding:12px;
                                color:#ffffff;
                                font-size:10px;
                            "
                        >
                            PRODUCT
                        </th>


                        <th
                            align="center"
                            style="
                                padding:12px;
                                color:#ffffff;
                                font-size:10px;
                            "
                        >
                            QTY
                        </th>


                        <th
                            align="right"
                            style="
                                padding:12px;
                                color:#ffffff;
                                font-size:10px;
                            "
                        >
                            PRICE
                        </th>


                        <th
                            align="right"
                            style="
                                padding:12px;
                                color:#ffffff;
                                font-size:10px;
                            "
                        >
                            TOTAL
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @foreach($quotation->items as $item)

                        <tr>

                            <td
                                style="
                                    padding:14px 12px;
                                    border-bottom:1px solid #e2e8f0;
                                    font-size:11px;
                                    color:#073B66;
                                    font-weight:bold;
                                "
                            >

                                {{ $item->product_name }}

                                @if($item->product_code)

                                    <div
                                        style="
                                            margin-top:4px;
                                            color:#D71920;
                                            font-size:9px;
                                        "
                                    >
                                        {{ $item->product_code }}
                                    </div>

                                @endif

                            </td>


                            <td
                                align="center"
                                style="
                                    padding:14px 12px;
                                    border-bottom:1px solid #e2e8f0;
                                    font-size:11px;
                                "
                            >
                                {{ $item->quantity }}
                            </td>


                            <td
                                align="right"
                                style="
                                    padding:14px 12px;
                                    border-bottom:1px solid #e2e8f0;
                                    font-size:11px;
                                "
                            >
                                ₹{{ number_format(
                                    (float) $item->unit_price,
                                    2
                                ) }}
                            </td>


                            <td
                                align="right"
                                style="
                                    padding:14px 12px;
                                    border-bottom:1px solid #e2e8f0;
                                    font-size:11px;
                                    font-weight:bold;
                                    color:#073B66;
                                "
                            >
                                ₹{{ number_format(
                                    (float) $item->total,
                                    2
                                ) }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>



            {{-- TOTALS --}}

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                style="margin-top:20px;"
            >

                <tr>

                    <td width="55%"></td>


                    <td>

                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                        >

                            <tr>

                                <td
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                    "
                                >
                                    Subtotal
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                        font-weight:bold;
                                    "
                                >
                                    ₹{{ number_format(
                                        (float) $quotation->subtotal,
                                        2
                                    ) }}
                                </td>

                            </tr>


                            <tr>

                                <td
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                    "
                                >
                                    Discount
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                        color:#D71920;
                                    "
                                >
                                    − ₹{{ number_format(
                                        (float) $quotation->discount,
                                        2
                                    ) }}
                                </td>

                            </tr>


                            <tr>

                                <td
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                    "
                                >
                                    GST
                                    ({{ number_format(
                                        (float) $quotation->gst_percent,
                                        2
                                    ) }}%)
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:8px;
                                        font-size:11px;
                                    "
                                >
                                    ₹{{ number_format(
                                        (float) $quotation->gst_amount,
                                        2
                                    ) }}
                                </td>

                            </tr>


                            <tr style="background:#032B55;">

                                <td
                                    style="
                                        padding:13px;
                                        color:#ffffff;
                                        font-size:11px;
                                        font-weight:bold;
                                    "
                                >
                                    GRAND TOTAL
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:13px;
                                        color:#ffffff;
                                        font-size:15px;
                                        font-weight:bold;
                                    "
                                >
                                    ₹{{ number_format(
                                        (float) $quotation->grand_total,
                                        2
                                    ) }}
                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

            </table>



            @if($quotation->notes)

                <div
                    style="
                        margin-top:25px;
                        padding:15px;
                        background:#f8fafc;
                        border-left:3px solid #073B66;
                        font-size:11px;
                        line-height:20px;
                    "
                >
                    {!! nl2br(e($quotation->notes)) !!}
                </div>

            @endif



            {{-- CTA --}}

            <div
                style="
                    margin-top:30px;
                    text-align:center;
                "
            >

                <a
                    href="{{ route(
                        'admin.quotations.show',
                        $quotation
                    ) }}"
                    style="
                        display:inline-block;
                        background:#D71920;
                        color:#ffffff;
                        padding:14px 24px;
                        text-decoration:none;
                        font-size:11px;
                        font-weight:bold;
                    "
                >
                    VIEW QUOTATION
                </a>

            </div>


            <p
                style="
                    margin:30px 0 0;
                    font-size:12px;
                    line-height:21px;
                "
            >
                For any clarification regarding this quotation,
                please reply to this email or contact our sales team.
            </p>


            <p
                style="
                    margin:20px 0 0;
                    font-size:12px;
                    line-height:20px;
                    color:#073B66;
                    font-weight:bold;
                "
            >
                Regards,<br>
                ASEW Sales Team
            </p>

        </td>

    </tr>



    {{-- FOOTER --}}

    <tr>

        <td
            style="
                padding:22px 30px;
                background:#032B55;
                text-align:center;
                color:#94a3b8;
                font-size:10px;
                line-height:18px;
            "
        >
            Associated Scientific & Engineering Works
            <br>

            sales@asew.in
            &nbsp; • &nbsp;
            +91 120 456 6201
            <br>

            Scientific & Engineering Testing Equipment
            • Since 1975
        </td>

    </tr>

</table>


</td>

</tr>

</table>

</body>

</html>