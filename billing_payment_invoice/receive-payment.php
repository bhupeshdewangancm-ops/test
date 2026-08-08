<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Receive Payment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .main-card {
            border: 0;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card main-card shadow-sm">

                <div class="card-header bg-white py-3">

                    <h5 class="mb-0">
                        Receive Member Payment
                    </h5>

                </div>

                <div class="card-body">

                    <!-- Member / Invoice -->

                    <div class="alert alert-light border">

                        <div class="row g-3">

                            <div class="col-md-3">
                                <small class="text-muted">Member</small>
                                <div class="fw-bold">
                                    Arjun Rathore
                                </div>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">Invoice</small>
                                <div class="fw-bold">
                                    INV-000001
                                </div>
                            </div>

                            <div class="col-md-2">
                                <small class="text-muted">Net Amount</small>
                                <div class="fw-bold">
                                    ₹11,000
                                </div>
                            </div>

                            <div class="col-md-2">
                                <small class="text-muted">Paid</small>
                                <div class="fw-bold text-success">
                                    ₹4,000
                                </div>
                            </div>

                            <div class="col-md-2">
                                <small class="text-muted">Due</small>
                                <div class="fw-bold text-danger">
                                    ₹7,000
                                </div>
                            </div>

                        </div>

                    </div>

                    <form>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Amount Received
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                       class="form-control"
                                       value="3000"
                                       placeholder="Enter amount">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Payment Mode
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-select">

                                    <option value="cash">
                                        Cash
                                    </option>

                                    <option value="upi" selected>
                                        UPI
                                    </option>

                                    <option value="card">
                                        Card
                                    </option>

                                    <option value="bank_transfer">
                                        Bank Transfer
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Transaction Reference
                                </label>

                                <input type="text"
                                       class="form-control"
                                       value="UPI987654321"
                                       placeholder="UPI / UTR / Transaction ID">

                                <small class="text-muted">
                                    Optional for Cash
                                </small>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Payment Date
                                </label>

                                <input type="date"
                                       class="form-control"
                                       value="2026-08-05">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Payment Status
                                </label>

                                <select class="form-select">

                                    <option value="success" selected>
                                        Success
                                    </option>

                                    <option value="failed">
                                        Failed
                                    </option>

                                    <option value="reversed">
                                        Reversed
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Received By
                                </label>

                                <select class="form-select">

                                    <option value="1">
                                        Rajesh Kumar - Admin
                                    </option>

                                    <option value="2">
                                        Amit Sharma - Manager
                                    </option>

                                    <option value="3">
                                        Rohit Verma - Reception
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-12 mb-3">

                                <label class="form-label">
                                    Notes / Remark
                                </label>

                                <textarea class="form-control"
                                          rows="3"
                                          placeholder="Enter payment notes">Second partial membership payment</textarea>

                            </div>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="invoice-details.php"
                               class="btn btn-light">
                                Cancel
                            </a>

                            <button type="button"
                                    class="btn btn-success">
                                Receive Payment & Generate Receipt
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>