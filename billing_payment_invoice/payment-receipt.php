<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payment Receipt</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            background: #f5f7fb;
        }

        .receipt {
            max-width: 850px;
            margin: auto;
            background: #fff;
            padding: 35px;
            border-radius: 12px;
        }

        @media print {

            body {
                background: #fff;
            }

            .receipt {
                max-width: 100%;
                box-shadow: none !important;
            }

            .no-print {
                display: none;
            }

        }

    </style>

</head>

<body>

<div class="container py-4">

    <div class="receipt shadow-sm">

        <!-- Header -->

        <div class="text-center border-bottom pb-4 mb-4">

            <h3 class="mb-1">
                POWER FITNESS GYM
            </h3>

            <div>
                Raipur, Chhattisgarh
            </div>

            <div class="text-muted">
                Member Payment Receipt
            </div>

        </div>

        <!-- Receipt -->

        <div class="row mb-4">

            <div class="col-6">

                <small class="text-muted">
                    Receipt No.
                </small>

                <h5>
                    RCP-000002
                </h5>

            </div>

            <div class="col-6 text-end">

                <small class="text-muted">
                    Payment Date
                </small>

                <h5>
                    05 Aug 2026
                </h5>

            </div>

        </div>

        <!-- Member -->

        <div class="row mb-4">

            <div class="col-md-6">

                <small class="text-muted">
                    Member Name
                </small>

                <div class="fw-bold">
                    Arjun Rathore
                </div>

            </div>

            <div class="col-md-6">

                <small class="text-muted">
                    Invoice No.
                </small>

                <div class="fw-bold">
                    INV-000001
                </div>

            </div>

        </div>

        <table class="table table-bordered">

            <tbody>

            <tr>
                <th width="50%">Amount Received</th>
                <td class="text-end">
                    <strong>₹3,000.00</strong>
                </td>
            </tr>

            <tr>
                <th>Payment Mode</th>
                <td class="text-end">
                    UPI
                </td>
            </tr>

            <tr>
                <th>Transaction Reference</th>
                <td class="text-end">
                    UPI987654321
                </td>
            </tr>

            <tr>
                <th>Payment Status</th>
                <td class="text-end">
                    <span class="badge bg-success">
                        Success
                    </span>
                </td>
            </tr>

            <tr>
                <th>Received By</th>
                <td class="text-end">
                    Rajesh Kumar - Admin
                </td>
            </tr>

            <tr>
                <th>Notes</th>
                <td class="text-end">
                    Second partial membership payment
                </td>
            </tr>

            </tbody>

        </table>

        <!-- Balance -->

        <div class="row g-3 mt-3">

            <div class="col-md-4">

                <div class="border rounded p-3">

                    <small class="text-muted">
                        Invoice Amount
                    </small>

                    <h5 class="mb-0">
                        ₹11,000.00
                    </h5>

                </div>

            </div>

            <div class="col-md-4">

                <div class="border rounded p-3">

                    <small class="text-muted">
                        Total Paid
                    </small>

                    <h5 class="text-success mb-0">
                        ₹7,000.00
                    </h5>

                </div>

            </div>

            <div class="col-md-4">

                <div class="border rounded p-3">

                    <small class="text-muted">
                        Remaining Due
                    </small>

                    <h5 class="text-danger mb-0">
                        ₹4,000.00
                    </h5>

                </div>

            </div>

        </div>

        <div class="text-center mt-4 no-print">

            <button type="button"
                    onclick="window.print()"
                    class="btn btn-primary">

                Print Receipt

            </button>

            <a href="invoice-details.php"
               class="btn btn-outline-secondary">

                Back to Invoice

            </a>

        </div>

    </div>

</div>

</body>
</html>