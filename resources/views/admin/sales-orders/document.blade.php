<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $salesOrder->order_number }} | Order Confirmation
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #eef2f7;
            color: #172033;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page-wrapper {
            padding: 30px 15px 50px;
        }

        .document-actions {
            max-width: 1000px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .action-left,
        .action-right {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            padding: 11px 18px;
            border-radius: 8px;
            transition: .2s ease;
        }

        .btn-secondary {
            color: #073b66;
            background: #ffffff;
            border: 1px solid #dbe3ec;
        }

        .btn-primary {
            color: white;
            background: #073b66;
        }

        .btn-primary:hover {
            background: #032b55;
        }

        .document {
            width: 100%;
            max-width: 1000px;
            min-height: 1100px;
            margin: auto;
            background: white;
            box-shadow: 0 10px 40px rgba(2, 43, 85, .10);
        }

        .top-line {
            height: 7px;
            background: #d71920;
        }

        .document-inner {
            padding: 45px 50px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
            padding-bottom: 28px;
            border-bottom: 2px solid #e8edf3;
        }

        .company {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .logo {
            width: 78px;
            height: 78px;
            object-fit: contain;
            border-radius: 6px;
        }

        .company-name {
            color: #032b55;
            font-size: 25px;
            font-weight: 800;
            line-height: 1.2;
        }

        .company-subtitle {
            margin-top: 5px;
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
        }

        .document-title {
            text-align: right;
        }

        .document-title h1 {
            margin: 0;
            color: #032b55;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: .5px;
        }

        .document-title p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 13px;
        }

        .meta-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            margin-top: 32px;
        }

        .section-label {
            margin-bottom: 11px;
            color: #d71920;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .customer-name {
            color: #032b55;
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .text-line {
            color: #475569;
            font-size: 13px;
            line-height: 1.7;
        }

        .order-details {
            width: 100%;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 7px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 13px;
        }

        .detail-row span:first-child {
            color: #64748b;
        }

        .detail-row strong {
            color: #1e293b;
            text-align: right;
        }

        .status {
            display: inline-flex;
            padding: 4px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            text-transform: capitalize;
        }

        .status-payment {
            background: #fff7ed;
            color: #c2410c;
        }

        .status-paid {
            background: #ecfdf5;
            color: #047857;
        }

        .product-table {
            width: 100%;
            margin-top: 34px;
            border-collapse: collapse;
        }

        .product-table thead {
            background: #032b55;
            color: white;
        }

        .product-table th {
            padding: 13px 12px;
            font-size: 11px;
            text-transform: uppercase;
            text-align: left;
            letter-spacing: .5px;
        }

        .product-table td {
            padding: 14px 12px;
            border-bottom: 1px solid #e7edf3;
            font-size: 13px;
            vertical-align: top;
        }

        .product-name {
            color: #172033;
            font-weight: 700;
        }

        .product-code {
            margin-top: 4px;
            font-size: 11px;
            color: #64748b;
        }

        .text-right {
            text-align: right !important;
        }

        .summary-wrapper {
            margin-top: 25px;
            display: flex;
            justify-content: flex-end;
        }

        .summary {
            width: 360px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 7px 0;
            color: #475569;
            font-size: 13px;
        }

        .summary-row.total {
            border-top: 2px solid #032b55;
            margin-top: 8px;
            padding-top: 14px;
            color: #032b55;
            font-size: 18px;
            font-weight: 800;
        }

        .information-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-top: 40px;
        }

        .info-box {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px;
        }

        .info-box h3 {
            margin: 0 0 10px;
            color: #032b55;
            font-size: 14px;
        }

        .info-box p {
            margin: 0;
            color: #64748b;
            font-size: 12px;
            line-height: 1.7;
            white-space: pre-line;
        }

        .signature-area {
            margin-top: 70px;
            display: flex;
            justify-content: flex-end;
        }

        .signature {
            width: 220px;
            text-align: center;
        }

        .signature-line {
            border-top: 1px solid #94a3b8;
            margin-bottom: 9px;
        }

        .signature strong {
            color: #032b55;
            font-size: 13px;
        }

        .signature small {
            display: block;
            margin-top: 4px;
            color: #64748b;
        }

        .footer {
            margin-top: 45px;
            padding-top: 18px;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 11px;
            line-height: 1.7;
            color: #64748b;
        }

        .footer strong {
            color: #032b55;
        }

        @media (max-width: 700px) {

            .document-inner {
                padding: 25px 20px;
            }

            .header,
            .meta-section,
            .information-grid {
                grid-template-columns: 1fr;
                display: grid;
            }

            .document-title {
                text-align: left;
            }

            .summary {
                width: 100%;
            }

            .product-table {
                display: block;
                overflow-x: auto;
            }
        }

        @media print {

            @page {
                size: A4;
                margin: 10mm;
            }

            body {
                background: white;
            }

            .page-wrapper {
                padding: 0;
            }

            .document-actions {
                display: none !important;
            }

            .document {
                max-width: none;
                min-height: auto;
                box-shadow: none;
            }

            .document-inner {
                padding: 20px;
            }
        }

    </style>

</head>

<body>

<div class="page-wrapper">

    {{-- ACTIONS --}}
    <div class="document-actions">

        <div class="action-left">

            <a
                href="{{ route('admin.sales-orders.show', $salesOrder) }}"
                class="btn btn-secondary"
            >
                ← Back to Sales Order
            </a>

        </div>

        <div class="action-right">

            <button
                type="button"
                onclick="window.print()"
                class="btn btn-primary"
            >
                Print / Save PDF
            </button>

        </div>

    </div>


    {{-- DOCUMENT --}}
    <div class="document">

        <div class="top-line"></div>

        <div class="document-inner">

            {{-- HEADER --}}
            <div class="header">

                <div class="company">

                    <img
                        src="{{ asset('images/asew-logo.jpg') }}"
                        alt="ASEW"
                        class="logo"
                    >

                    <div>

                        <div class="company-name">
                            Associated Scientific & Engineering Works
                        </div>

                        <div class="company-subtitle">
                            Scientific & Engineering Testing Equipment<br>
                            Manufacturing Excellence Since 1975
                        </div>

                    </div>

                </div>


                <div class="document-title">

                    <h1>Order Confirmation</h1>

                    <p>
                        Sales Order
                    </p>

                </div>

            </div>


            {{-- CUSTOMER / ORDER DATA --}}
            <div class="meta-section">

                <div>

                    <div class="section-label">
                        Bill To
                    </div>

                    <div class="customer-name">
                        {{ $salesOrder->customer_name }}
                    </div>

                    @if($salesOrder->company)
                        <div class="text-line">
                            {{ $salesOrder->company }}
                        </div>
                    @endif

                    <div class="text-line">
                        {{ $salesOrder->email }}
                    </div>

                    @if($salesOrder->phone)
                        <div class="text-line">
                            {{ $salesOrder->phone }}
                        </div>
                    @endif

                    @if($salesOrder->city)
                        <div class="text-line">
                            {{ $salesOrder->city }}
                        </div>
                    @endif

                </div>


                <div>

                    <div class="section-label">
                        Order Details
                    </div>

                    <div class="order-details">

                        <div class="detail-row">

                            <span>Order Number</span>

                            <strong>
                                {{ $salesOrder->order_number }}
                            </strong>

                        </div>


                        <div class="detail-row">

                            <span>Order Date</span>

                            <strong>
                                {{ $salesOrder->order_date?->format('d M Y') }}
                            </strong>

                        </div>


                        @if($salesOrder->quotation)

                            <div class="detail-row">

                                <span>Quotation</span>

                                <strong>
                                    {{ $salesOrder->quotation->quotation_number }}
                                </strong>

                            </div>

                        @endif


                        <div class="detail-row">

                            <span>Order Status</span>

                            <strong>
                                {{ ucfirst($salesOrder->order_status) }}
                            </strong>

                        </div>


                        <div class="detail-row">

                            <span>Payment Status</span>

                            <strong>

                                <span
                                    class="status
                                    {{ $salesOrder->payment_status === 'paid'
                                        ? 'status-paid'
                                        : 'status-payment' }}"
                                >
                                    {{ ucfirst($salesOrder->payment_status) }}
                                </span>

                            </strong>

                        </div>


                        <div class="detail-row">

                            <span>Expected Delivery</span>

                            <strong>

                                {{ $salesOrder->expected_delivery_date
                                    ? $salesOrder->expected_delivery_date->format('d M Y')
                                    : 'To Be Confirmed' }}

                            </strong>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ITEMS --}}
            <table class="product-table">

                <thead>

                <tr>

                    <th style="width: 45px;">
                        #
                    </th>

                    <th>
                        Product / Description
                    </th>

                    <th class="text-right">
                        Qty
                    </th>

                    <th class="text-right">
                        Unit Price
                    </th>

                    <th class="text-right">
                        Amount
                    </th>

                </tr>

                </thead>

                <tbody>

                @foreach($salesOrder->items as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            <div class="product-name">
                                {{ $item->product_name }}
                            </div>

                            @if($item->product_code)

                                <div class="product-code">
                                    Code: {{ $item->product_code }}
                                </div>

                            @endif

                        </td>

                        <td class="text-right">
                            {{ $item->quantity }}
                        </td>

                        <td class="text-right">
                            ₹{{ number_format((float) $item->unit_price, 2) }}
                        </td>

                        <td class="text-right">
                            ₹{{ number_format((float) $item->total, 2) }}
                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>


            {{-- TOTALS --}}
            <div class="summary-wrapper">

                <div class="summary">

                    <div class="summary-row">

                        <span>Subtotal</span>

                        <strong>
                            ₹{{ number_format((float) $salesOrder->subtotal, 2) }}
                        </strong>

                    </div>


                    @if((float) $salesOrder->discount > 0)

                        <div class="summary-row">

                            <span>Discount</span>

                            <strong>
                                - ₹{{ number_format((float) $salesOrder->discount, 2) }}
                            </strong>

                        </div>

                    @endif


                    <div class="summary-row">

                        <span>GST</span>

                        <strong>
                            ₹{{ number_format((float) $salesOrder->gst_amount, 2) }}
                        </strong>

                    </div>


                    <div class="summary-row total">

                        <span>Grand Total</span>

                        <span>
                            ₹{{ number_format((float) $salesOrder->grand_total, 2) }}
                        </span>

                    </div>

                </div>

            </div>


            {{-- DELIVERY / NOTES --}}
            <div class="information-grid">

                <div class="info-box">

                    <h3>
                        Delivery Information
                    </h3>

                    <p>{{ $salesOrder->delivery_address ?: 'Delivery address / dispatch details will be confirmed separately.' }}</p>

                </div>


                <div class="info-box">

                    <h3>
                        Order Notes
                    </h3>

                    <p>{{ $salesOrder->notes ?: 'Thank you for choosing ASEW. Our team will keep you informed regarding processing and dispatch.' }}</p>

                </div>

            </div>


            {{-- SIGNATURE --}}
            <div class="signature-area">

                <div class="signature">

                    <div class="signature-line"></div>

                    <strong>
                        Authorized Signatory
                    </strong>

                    <small>
                        Associated Scientific & Engineering Works
                    </small>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="footer">

                <strong>
                    Associated Scientific & Engineering Works
                </strong>

                <br>

                Scientific & Engineering Testing Equipment

                <br>

                Email: sales@asew.in
                &nbsp; | &nbsp;
                Phone: +91 120 456 6201

                <br>

                This document is system generated from ASEW Sales Management System.

            </div>

        </div>

    </div>

</div>

</body>

</html>