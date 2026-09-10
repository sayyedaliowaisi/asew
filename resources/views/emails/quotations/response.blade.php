<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Quotation Response
    </title>

</head>

<body style="
    margin:0;
    padding:0;
    background:#f1f5f9;
    font-family:Arial, Helvetica, sans-serif;
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
                    max-width:650px;
                    background:#ffffff;
                    border-radius:14px;
                    overflow:hidden;
                    box-shadow:0 5px 20px rgba(15,23,42,.08);
                "
            >

                {{-- HEADER --}}
                <tr>

                    <td
                        style="
                            background:#032B55;
                            padding:25px 30px;
                            text-align:center;
                        "
                    >

                        <h1
                            style="
                                margin:0;
                                color:#ffffff;
                                font-size:24px;
                            "
                        >
                            ASEW
                        </h1>

                        <p
                            style="
                                margin:7px 0 0;
                                color:#cbd5e1;
                                font-size:13px;
                            "
                        >
                            Associated Scientific & Engineering Works
                        </p>

                    </td>

                </tr>


                {{-- CONTENT --}}
                <tr>

                    <td style="padding:32px;">

                        @if($quotation->status === 'accepted')

                            <div
                                style="
                                    background:#dcfce7;
                                    border:1px solid #bbf7d0;
                                    color:#166534;
                                    border-radius:10px;
                                    padding:18px;
                                    text-align:center;
                                    margin-bottom:25px;
                                "
                            >

                                <div
                                    style="
                                        font-size:28px;
                                        font-weight:bold;
                                        margin-bottom:6px;
                                    "
                                >
                                    ✓
                                </div>

                                <div
                                    style="
                                        font-size:20px;
                                        font-weight:bold;
                                    "
                                >
                                    Quotation Accepted
                                </div>

                            </div>

                        @else

                            <div
                                style="
                                    background:#fee2e2;
                                    border:1px solid #fecaca;
                                    color:#991b1b;
                                    border-radius:10px;
                                    padding:18px;
                                    text-align:center;
                                    margin-bottom:25px;
                                "
                            >

                                <div
                                    style="
                                        font-size:28px;
                                        font-weight:bold;
                                        margin-bottom:6px;
                                    "
                                >
                                    ✕
                                </div>

                                <div
                                    style="
                                        font-size:20px;
                                        font-weight:bold;
                                    "
                                >
                                    Quotation Rejected
                                </div>

                            </div>

                        @endif


                        <p
                            style="
                                font-size:16px;
                                line-height:1.7;
                                margin-bottom:25px;
                            "
                        >
                            Customer
                            <strong>
                                {{ $quotation->customer_name }}
                            </strong>

                            has

                            <strong>
                                {{ strtoupper($quotation->status) }}
                            </strong>

                            quotation

                            <strong>
                                {{ $quotation->quotation_number }}
                            </strong>.
                        </p>


                        {{-- CUSTOMER DETAILS --}}

                        <table
                            width="100%"
                            cellpadding="10"
                            cellspacing="0"
                            style="
                                border-collapse:collapse;
                                margin-bottom:25px;
                            "
                        >

                            <tr>

                                <td
                                    colspan="2"
                                    style="
                                        background:#f8fafc;
                                        color:#032B55;
                                        font-size:16px;
                                        font-weight:bold;
                                        border:1px solid #e2e8f0;
                                    "
                                >
                                    Customer Information
                                </td>

                            </tr>


                            <tr>

                                <td
                                    width="38%"
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    Customer
                                </td>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $quotation->customer_name }}
                                </td>

                            </tr>


                            @if($quotation->company)

                                <tr>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                            font-weight:bold;
                                        "
                                    >
                                        Company
                                    </td>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                        "
                                    >
                                        {{ $quotation->company }}
                                    </td>

                                </tr>

                            @endif


                            <tr>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    Email
                                </td>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $quotation->email }}
                                </td>

                            </tr>


                            @if($quotation->phone)

                                <tr>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                            font-weight:bold;
                                        "
                                    >
                                        Phone
                                    </td>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                        "
                                    >
                                        {{ $quotation->phone }}
                                    </td>

                                </tr>

                            @endif


                            @if($quotation->city)

                                <tr>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                            font-weight:bold;
                                        "
                                    >
                                        City
                                    </td>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                        "
                                    >
                                        {{ $quotation->city }}
                                    </td>

                                </tr>

                            @endif

                        </table>


                        {{-- QUOTATION DETAILS --}}

                        <table
                            width="100%"
                            cellpadding="10"
                            cellspacing="0"
                            style="
                                border-collapse:collapse;
                                margin-bottom:28px;
                            "
                        >

                            <tr>

                                <td
                                    colspan="2"
                                    style="
                                        background:#f8fafc;
                                        color:#032B55;
                                        font-size:16px;
                                        font-weight:bold;
                                        border:1px solid #e2e8f0;
                                    "
                                >
                                    Quotation Details
                                </td>

                            </tr>


                            <tr>

                                <td
                                    width="38%"
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    Quotation No.
                                </td>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                    "
                                >
                                    {{ $quotation->quotation_number }}
                                </td>

                            </tr>


                            <tr>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    Amount
                                </td>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                        color:#032B55;
                                    "
                                >
                                    ₹{{ number_format($quotation->grand_total, 2) }}
                                </td>

                            </tr>


                            <tr>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                        font-weight:bold;
                                    "
                                >
                                    Status
                                </td>

                                <td
                                    style="
                                        border:1px solid #e2e8f0;
                                        text-transform:capitalize;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $quotation->status }}
                                </td>

                            </tr>


                            @if($quotation->responded_at)

                                <tr>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                            font-weight:bold;
                                        "
                                    >
                                        Responded At
                                    </td>

                                    <td
                                        style="
                                            border:1px solid #e2e8f0;
                                        "
                                    >
                                        {{ $quotation->responded_at->format('d M Y, h:i A') }}
                                    </td>

                                </tr>

                            @endif

                        </table>


                        {{-- ADMIN BUTTON --}}

                        <div style="text-align:center;">

                            <a
                                href="{{ route('admin.quotations.show', $quotation) }}"
                                style="
                                    display:inline-block;
                                    background:#D71920;
                                    color:#ffffff;
                                    padding:13px 25px;
                                    border-radius:8px;
                                    text-decoration:none;
                                    font-weight:bold;
                                    font-size:14px;
                                "
                            >
                                View Quotation in Admin Panel
                            </a>

                        </div>

                    </td>

                </tr>


                {{-- FOOTER --}}

                <tr>

                    <td
                        style="
                            background:#f8fafc;
                            padding:20px 30px;
                            text-align:center;
                            border-top:1px solid #e2e8f0;
                        "
                    >

                        <p
                            style="
                                margin:0;
                                color:#64748b;
                                font-size:12px;
                                line-height:1.6;
                            "
                        >
                            This is an automatic notification generated
                            by the ASEW quotation management system.
                        </p>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>
</html>