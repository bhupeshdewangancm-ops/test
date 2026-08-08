<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Invoices</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .page-card,
        .summary-card {
            border: 0;
            border-radius: 12px;
        }

        .table th {
            white-space: nowrap;
        }
    </style>
</head>

<body>

<div class="container-fluid py-4">

    <div class="mb-4">
        <h4 class="mb-1">Member Invoices</h4>
        <small class="text-muted">
            Manage membership invoices and pending dues
        </small>
    </div>

    <!-- Summary -->

    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card summary-card shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Total Invoices</small>
                    <h4 class="mb-0">4</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card summary-card shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Total Amount</small>
                    <h4 class="mb-0">₹33,000.00</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card summary-card shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Total Paid</small>
                    <h4 class="mb-0 text-success">₹19,000.00</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card summary-card shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Total Due</small>
                    <h4 class="mb-0 text-danger">₹14,000.00</h4>
                </div>
            </div>
        </div>

    </div>

    <!-- Filters -->

    <div class="card page-card shadow-sm">

        <div class="card-body">

            <div class="row g-2 mb-3">

                <div class="col-md-4">
                    <input type="text"
                           class="form-control"
                           placeholder="Search Invoice / Member">
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Status</option>
                        <option>Unpaid</option>
                        <option>Partial</option>
                        <option>Paid</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-primary w-100">
                        Search
                    </button>
                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                    <tr>
                        <th>Invoice No.</th>
                        <th>Member</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th class="text-end">Amount</th>
                        <th class="text-end">Paid</th>
                        <th class="text-end">Due</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <!-- PARTIAL -->

                    <tr>
                        <td>
                            <strong>INV-000001</strong>
                        </td>

                        <td>Arjun Rathore</td>

                        <td>05 Aug 2026</td>

                        <td>05 Sep 2026</td>

                        <td class="text-end">
                            ₹11,000.00
                        </td>

                        <td class="text-end text-success">
                            ₹4,000.00
                        </td>

                        <td class="text-end text-danger">
                            ₹7,000.00
                        </td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                Partial
                            </span>
                        </td>

                        <td>
                            <a href="invoice-details.php"
                               class="btn btn-sm btn-outline-primary">
                                View
                            </a>

                            <a href="receive-payment.php"
                               class="btn btn-sm btn-success">
                                Receive Payment
                            </a>
                        </td>
                    </tr>

                    <!-- PAID -->

                    <tr>
                        <td>
                            <strong>INV-000002</strong>
                        </td>

                        <td>Rahul Sharma</td>

                        <td>04 Aug 2026</td>

                        <td>04 Sep 2026</td>

                        <td class="text-end">
                            ₹10,000.00
                        </td>

                        <td class="text-end text-success">
                            ₹10,000.00
                        </td>

                        <td class="text-end">
                            ₹0.00
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Paid
                            </span>
                        </td>

                        <td>
                            <a href="invoice-details.php"
                               class="btn btn-sm btn-outline-primary">
                                View
                            </a>
                        </td>
                    </tr>

                    <!-- UNPAID -->

                    <tr>
                        <td>
                            <strong>INV-000003</strong>
                        </td>

                        <td>Aman Verma</td>

                        <td>03 Aug 2026</td>

                        <td>03 Sep 2026</td>

                        <td class="text-end">
                            ₹8,000.00
                        </td>

                        <td class="text-end">
                            ₹0.00
                        </td>

                        <td class="text-end text-danger">
                            ₹8,000.00
                        </td>

                        <td>
                            <span class="badge bg-danger">
                                Unpaid
                            </span>
                        </td>

                        <td>
                            <a href="invoice-details.php"
                               class="btn btn-sm btn-outline-primary">
                                View
                            </a>

                            <a href="receive-payment.php"
                               class="btn btn-sm btn-success">
                                Receive Payment
                            </a>
                        </td>
                    </tr>

                    <!-- PARTIAL -->

                    <tr>
                        <td>
                            <strong>INV-000004</strong>
                        </td>

                        <td>Vikas Sahu</td>

                        <td>01 Aug 2026</td>

                        <td>01 Sep 2026</td>

                        <td class="text-end">
                            ₹4,000.00
                        </td>

                        <td class="text-end text-success">
                            ₹5,000.00
                        </td>

                        <td class="text-end text-danger">
                            ₹-1,000.00
                        </td>

                        <td>
                            <span class="badge bg-secondary">
                                Example
                            </span>
                        </td>

                        <td>
                            <a href="invoice-details.php"
                               class="btn btn-sm btn-outline-primary">
                                View
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