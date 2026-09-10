<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>
        Dispatch Update
    </title>
</head>

<body
    style="
        margin:0;
        padding:0;
        background:#f1f5f9;
        font-family:Arial,Helvetica,sans-serif;
        color:#334155;
    "
>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    style="background:#f1f5f9;padding:30px 15px;"
>

    <tr>

        <td align="center">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                style="
                    max-width:700px;
                    background:#ffffff;
                    border-radius:12px;
                    overflow:hidden;
                "
            >

                {{-- HEADER --}}
                <tr>

                    <td
                        style="
                            background:#032B55;
                            padding:26px 30px;
                            color:#ffffff;
                        "
                    >

                        <div
                            style="
                                font-size:24px;
                                font-weight:700;
                            "
                        >
                            ASEW
                        </div>

                        <div
                            style="
                                margin-top:5px;
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
                                margin:0 0 16px;
                                color:#032B55;
                                font-size:24px;
                            "
                        >
                            Your Order Dispatch Update
                        </h2>


                        <p style="line-height:1.7;margin-bottom:15px;">

                            Dear
                            <strong>
                                {{ $salesOrder->customer_name }}
                            </strong>,

                        </p>


                        @if($salesOrder->delivery_status === 'delivered')

                            <p
                                style="
                                    line-height:1.7;
                                    margin-bottom:25px;
                                "
                            >
                                Your ASEW order has been marked as
                                successfully delivered.
                            </p>

                        @elseif($salesOrder->delivery_status === 'in_transit')

                            <p
                                style="
                                    line-height:1.7;
                                    margin-bottom:25px;
                                "
                            >
                                Your ASEW order is currently in transit.
                                Please find the latest delivery information
                                below.
                            </p>

                        @else

                            <p
                                style="
                                    line-height:1.7;
                                    margin-bottom:25px;
                                "
                            >
                                We are pleased to inform you that your ASEW
                                order has been dispatched.
                            </p>

                        @endif


                        {{-- STATUS --}}
                        <div
                            style="
                                background:#eff6ff;
                                border-left:4px solid #073B66;
                                padding:18px;
                                margin-bottom:25px;
                            "
                        >

                            <div
                                style="
                                    font-size:12px;
                                    color:#64748b;
                                    text-transform:uppercase;
                                    font-weight:700;
                                "
                            >
                                Delivery Status
                            </div>

                            <div
                                style="
                                    margin-top:7px;
                                    color:#032B55;
                                    font-size:20px;
                                    font-weight:700;
                                "
                            >
                                {{ ucwords(str_replace('_', ' ', $salesOrder->delivery_status)) }}
                            </div>

                        </div>


                        {{-- DETAILS --}}
                        <table
                            width="100%"
                            cellpadding="11"
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


                            @if($salesOrder->courier_name)

                                <tr>

                                    <td style="color:#64748b;">
                                        Courier / Transport
                                    </td>

                                    <td
                                        align="right"
                                        style="font-weight:700;"
                                    >
                                        {{ $salesOrder->courier_name }}
                                    </td>

                                </tr>

                            @endif


                            @if($salesOrder->tracking_number)

                                <tr>

                                    <td style="color:#64748b;">
                                        Tracking Number
                                    </td>

                                    <td
                                        align="right"
                                        style="
                                            color:#073B66;
                                            font-weight:700;
                                        "
                                    >
                                        {{ $salesOrder->tracking_number }}
                                    </td>

                                </tr>

                            @endif


                            @if($salesOrder->dispatch_date)

                                <tr>

                                    <td style="color:#64748b;">
                                        Dispatch Date
                                    </td>

                                    <td
                                        align="right"
                                        style="font-weight:700;"
                                    >
                                        {{ $salesOrder->dispatch_date->format('d M Y') }}
                                    </td>

                                </tr>

                            @endif


                            @if($salesOrder->expected_delivery_date)

                                <tr>

                                    <td style="color:#64748b;">
                                        Expected Delivery
                                    </td>

                                    <td
                                        align="right"
                                        style="font-weight:700;"
                                    >
                                        {{ $salesOrder->expected_delivery_date->format('d M Y') }}
                                    </td>

                                </tr>

                            @endif

                        </table>


                        @if($salesOrder->delivery_address)

                            <div
                                style="
                                    padding:18px;
                                    border:1px solid #e2e8f0;
                                    border-radius:8px;
                                    margin-bottom:25px;
                                "
                            >

                                <strong style="color:#032B55;">
                                    Delivery Address
                                </strong>

                                <div
                                    style="
                                        margin-top:8px;
                                        line-height:1.7;
                                        white-space:pre-line;
                                    "
                                >{{ $salesOrder->delivery_address }}</div>

                            </div>

                        @endif


                        <p
                            style="
                                line-height:1.7;
                                margin:25px 0 0;
                            "
                        >
                            For any assistance regarding your order,
                            please contact our sales team.
                        </p>


                        <p style="line-height:1.7;margin-top:20px;">

                            Regards,<br>

                            <strong style="color:#032B55;">
                                ASEW Sales Team
                            </strong>

                            <br>

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