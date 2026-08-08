<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .main-card {
            border: 0;
            border-radius: 12px;
        }

        .amount-box {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px;
            height: 100%;
        }
    </style>
</head>

<body>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="mb-1">Invoice Details</h4>
            <small class="text-muted">Complete billing information</small>
        </div>

        <div>
            <a href="invoices.php"
               class="btn btn-outline-secondary">
                Back
            </a>

            <a href="receive-payment.php"
               class="btn btn-success">
                Receive Payment
            </a>
        </div>

    </div>

    <div class="card main-card shadow-sm mb-4">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-start mb-4">

                <div>
                    <small class="text-muted">Invoice Number</small>
                    <h3 class="mb-0">INV-000001</h3>
                </div>

                <span class="badge bg-warning text-dark fs-6">
                    Partial
                </span>

            </div>

            <div class="row g-3">

                <div class="col-md-3">
                    <small class="text-muted">Member</small>
                    <div class="fw-semibold">
                        Arjun Rathore
                    </div>
                </div>

                <div class="col-md-3">
                    <small class="text-muted">Subscription</small>
                    <div class="fw-semibold">
                        SUB-000010
                    </div>
                </div>

                <div class="col-md-3">
                    <small class="text-muted">Invoice Date</small>
                    <div class="fw-semibold">
                        05 Aug 2026
                    </div>
                </div>

                <div class="col-md-3">
                    <small class="text-muted">Due Date</small>
                    <div class="fw-semibold">
                        05 Sep 2026
                    </div>
                </div>

            </div>

            <hr>

            <div class="row g-3">

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Total</small>
                        <h5>₹12,000</h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Discount</small>
                        <h5>₹1,000</h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Tax</small>
                        <h5>₹0</h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Net Amount</small>
                        <h5>₹11,000</h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Paid</small>
                        <h5 class="text-success">
                            ₹4,000
                        </h5>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="amount-box">
                        <small class="text-muted">Due</small>
                        <h5 class="text-danger">
                            ₹7,000
                        </h5>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Payment History -->

    <div class="card main-card shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="mb-0">
                Payment & Receipt History
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                    <tr>
                        <th>Receipt No.</th>
                        <th>Payment Date</th>
                        <th>Payment Mode</th>
                        <th>Transaction Reference</th>
                        <th>Received By</th>
                        <th>Notes</th>
                        <th class="text-end">Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>
                            <strong>RCP-000001</strong>
                        </td>

                        <td>05 Aug 2026</td>

                        <td>
                            <span class="badge bg-light text-dark">
                                UPI
                            </span>
                        </td>

                        <td>UPI123456789</td>

                        <td>Admin User</td>

                        <td>First partial payment</td>

                        <td class="text-end">
                            ₹4,000.00
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Success
                            </span>
                        </td>

                        <td>
                            <a href="payment-receipt.php"
                               class="btn btn-sm btn-outline-primary">
                                Receipt
                            </a>
                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>