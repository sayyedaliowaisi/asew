<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>
        Order Confirmation
    </title>

</head>

<body style="
    margin:0;
    padding:0;
    background:#f1f5f9;
    font-family:Arial,Helvetica,sans-serif;
    color:#334155;
">

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="background:#f1f5f9;padding:30px 15px;"
>

    <tr>

        <td align="center">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    max-width:700px;
                    background:#ffffff;
                    border-radius:10px;
                    overflow:hidden;
                "
            >

                {{-- TOP --}}
                <tr>

                    <td
                        style="
                            background:#032B55;
                            padding:25px 30px;
                            color:#ffffff;
                        "
                    >

                        <div
                            style="
                                font-size:22px;
                                font-weight:700;
                            "
                        >
                            ASEW
                        </div>

                        <div
                            style="
                                margin-top:4px;
                                font-size:12px;
                                color:#cbd5e1;
                            "
                        >
                            Associated Scientific & Engineering Works
                        </div>

                    </td>

                </tr>


                {{-- BODY --}}
                <tr>

                    <td style="padding:35px 30px;">

                        <h2
                            style="
                                color:#032B55;
                                margin:0 0 15px;
                                font-size:23px;
                            "
                        >
                            Your Order Has Been Confirmed
                        </h2>


                        <p
                            style="
                                margin:0 0 18px;
                                line-height:1.7;
                            "
                        >
                            Dear {{ $salesOrder->customer_name }},
                        </p>


                        <p
                            style="
                                margin:0 0 25px;
                                line-height:1.7;
                            "
                        >
                            Thank you for choosing Associated Scientific &
                            Engineering Works. We have successfully created
                            your sales order based on your accepted quotation.
                        </p>


                        {{-- ORDER SUMMARY --}}
                        <table
                            width="100%"
                            cellpadding="10"
                            cellspacing="0"
                            style="
                                background:#f8fafc;
                                border:1px solid #e2e8f0;
                                margin-bottom:28px;
                            "
                        >

                            <tr>

                                <td style="color:#64748b;">
                                    Order Number
                                </td>

                                <td
                                    align="right"
                                    style="
                                        color:#032B55;
                                        font-weight:700;
                                    "
                                >
                                    {{ $salesOrder->order_number }}
                                </td>

                            </tr>


                            <tr>

                                <td style="color:#64748b;">
                                    Order Date
                                </td>

                                <td
                                    align="right"
                                    style="font-weight:700;"
                                >
                                    {{ $salesOrder->order_date?->format('d M Y') }}
                                </td>

                            </tr>


                            @if($salesOrder->quotation)

                                <tr>

                                    <td style="color:#64748b;">
                                        Quotation Number
                                    </td>

                                    <td
                                        align="right"
                                        style="font-weight:700;"
                                    >
                                        {{ $salesOrder->quotation->quotation_number }}
                                    </td>

                                </tr>

                            @endif


                            <tr>

                                <td style="color:#64748b;">
                                    Order Status
                                </td>

                                <td
                                    align="right"
                                    style="font-weight:700;"
                                >
                                    {{ ucfirst($salesOrder->order_status) }}
                                </td>

                            </tr>


                            <tr>

                                <td style="color:#64748b;">
                                    Payment Status
                                </td>

                                <td
                                    align="right"
                                    style="font-weight:700;"
                                >
                                    {{ ucfirst($salesOrder->payment_status) }}
                                </td>

                            </tr>


                            <tr>

                                <td style="color:#64748b;">
                                    Expected Delivery
                                </td>

                                <td
                                    align="right"
                                    style="font-weight:700;"
                                >

                                    {{ $salesOrder->expected_delivery_date
                                        ? $salesOrder->expected_delivery_date->format('d M Y')
                                        : 'To Be Confirmed' }}

                                </td>

                            </tr>

                        </table>


                        {{-- PRODUCTS --}}
                        <h3
                            style="
                                color:#032B55;
                                margin:0 0 12px;
                            "
                        >
                            Order Items
                        </h3>


                        <table
                            width="100%"
                            cellpadding="10"
                            cellspacing="0"
                            style="
                                border-collapse:collapse;
                                margin-bottom:25px;
                            "
                        >

                            <thead>

                            <tr style="background:#032B55;color:#ffffff;">

                                <th align="left">
                                    Product
                                </th>

                                <th align="center">
                                    Qty
                                </th>

                                <th align="right">
                                    Amount
                                </th>

                            </tr>

                            </thead>

                            <tbody>

                            @foreach($salesOrder->items as $item)

                                <tr>

                                    <td
                                        style="
                                            border-bottom:1px solid #e2e8f0;
                                        "
                                    >

                                        <strong>
                                            {{ $item->product_name }}
                                        </strong>

                                        @if($item->product_code)

                                            <br>

                                            <small style="color:#64748b;">
                                                {{ $item->product_code }}
                                            </small>

                                        @endif

                                    </td>

                                    <td
                                        align="center"
                                        style="
                                            border-bottom:1px solid #e2e8f0;
                                        "
                                    >
                                        {{ $item->quantity }}
                                    </td>

                                    <td
                                        align="right"
                                        style="
                                            border-bottom:1px solid #e2e8f0;
                                        "
                                    >
                                        ₹{{ number_format((float) $item->total, 2) }}
                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>


                        {{-- TOTAL --}}
                        <table
                            width="100%"
                            cellpadding="7"
                            cellspacing="0"
                        >

                            <tr>

                                <td align="right">
                                    Subtotal:
                                </td>

                                <td
                                    width="150"
                                    align="right"
                                >
                                    ₹{{ number_format((float) $salesOrder->subtotal, 2) }}
                                </td>

                            </tr>


                            @if((float) $salesOrder->discount > 0)

                                <tr>

                                    <td align="right">
                                        Discount:
                                    </td>

                                    <td
                                        width="150"
                                        align="right"
                                    >
                                        - ₹{{ number_format((float) $salesOrder->discount, 2) }}
                                    </td>

                                </tr>

                            @endif


                            <tr>

                                <td align="right">
                                    GST:
                                </td>

                                <td
                                    width="150"
                                    align="right"
                                >
                                    ₹{{ number_format((float) $salesOrder->gst_amount, 2) }}
                                </td>

                            </tr>


                            <tr>

                                <td
                                    align="right"
                                    style="
                                        color:#032B55;
                                        font-size:18px;
                                        font-weight:700;
                                        border-top:2px solid #032B55;
                                        padding-top:13px;
                                    "
                                >
                                    Grand Total:
                                </td>

                                <td
                                    align="right"
                                    style="
                                        color:#032B55;
                                        font-size:18px;
                                        font-weight:700;
                                        border-top:2px solid #032B55;
                                        padding-top:13px;
                                    "
                                >
                                    ₹{{ number_format((float) $salesOrder->grand_total, 2) }}
                                </td>

                            </tr>

                        </table>


                        @if($salesOrder->delivery_address)

                            <div
                                style="
                                    margin-top:30px;
                                    padding:18px;
                                    background:#f8fafc;
                                    border-left:4px solid #D71920;
                                "
                            >

                                <strong style="color:#032B55;">
                                    Delivery Address
                                </strong>

                                <div
                                    style="
                                        margin-top:8px;
                                        line-height:1.6;
                                        white-space:pre-line;
                                    "
                                >{{ $salesOrder->delivery_address }}</div>

                            </div>

                        @endif


                        <p
                            style="
                                margin:30px 0 0;
                                line-height:1.7;
                            "
                        >
                            Our team will keep you informed regarding
                            processing, dispatch and delivery.
                        </p>


                        <p
                            style="
                                margin:20px 0 0;
                                line-height:1.7;
                            "
                        >
                            Regards,<br>

                            <strong style="color:#032B55;">
                                ASEW Sales Team
                            </strong><br>

                            Associated Scientific & Engineering Works
                        </p>

                    </td>

                </tr>


                {{-- FOOTER --}}
                <tr>

                    <td
                        align="center"
                        style="
                            padding:22px;
                            background:#f8fafc;
                            color:#64748b;
                            font-size:12px;
                            line-height:1.7;
                            border-top:1px solid #e2e8f0;
                        "
                    >
                        Manufacturing Scientific & Engineering Testing
                        Equipment Since 1975

                        <br>

                        sales@asew.in
                        &nbsp; | &nbsp;
                        +91 120 456 6201
                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>

</html>