<?php
$pageTitle = 'Invoice Details';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Invoice Details</div>
            <small class="text-muted">View complete invoice information</small>
        </div>
        <div class="admin-profile">
            <div class="admin-avatar">A</div>
            <div class="admin-info">
                <strong>Admin</strong>
                <small>Gym Administrator</small>
            </div>
        </div>
    </div>

    <div class="content-area">
        <div class="page-header">
            <div>
                <h2>Invoice #INV-001</h2>
                <p>Invoice details and payment information.</p>
            </div>
            <div class="header-buttons">
                <a href="<?= $baseUrl ?>/billing_payment_invoice/invoices.php" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back
                </a>
                <button class="btn btn-primary">
                    <i class="fa-solid fa-print me-1"></i>
                    Print Invoice
                </button>
            </div>
        </div>

        <div class="invoice-card">
            <div class="invoice-top">
                <div>
                    <div class="gym-logo">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <h3>Seba24 Fitness Club</h3>
                    <p>Raipur Main Branch</p>
                    <small>Shankar Nagar, Raipur</small>
                </div>

                <div class="invoice-meta">
                    <h2>INVOICE</h2>
                    <strong>INV-001</strong>
                    <span>Date: 07 Aug 2026</span>
                    <span>Due Date: 07 Aug 2026</span>
                    <span class="status paid">PAID</span>
                </div>
            </div>

            <div class="customer-section">
                <div>
                    <label>BILL TO</label>
                    <h5>Rohan Active Member</h5>
                    <p>Member Code: GYM-101</p>
                    <p>Phone: 9111111111</p>
                    <p>Email: rohan@gmail.com</p>
                </div>

                <div>
                    <label>SUBSCRIPTION</label>
                    <h5>Monthly Cardio + Weights</h5>
                    <p>Start Date: 07 Aug 2026</p>
                    <p>End Date: 06 Sep 2026</p>
                    <p>Trainer: Rahul Trainer</p>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table invoice-items">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <strong>Monthly Cardio + Weights</strong>
                                <small>Gym membership subscription</small>
                            </td>
                            <td>1</td>
                            <td>₹1,500.00</td>
                            <td>₹1,500.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoice-bottom">
                <div class="payment-info">
                    <h6>Payment Information</h6>
                    <p><strong>Payment Mode:</strong> Cash</p>
                    <p><strong>Receipt No:</strong> RCP-000001</p>
                    <p><strong>Payment Date:</strong> 07 Aug 2026</p>
                    <p><strong>Status:</strong> <span class="text-success">Success</span></p>
                </div>

                <div class="amount-summary">
                    <div>
                        <span>Total Amount</span>
                        <strong>₹1,500.00</strong>
                    </div>
                    <div>
                        <span>Discount</span>
                        <strong>₹0.00</strong>
                    </div>
                    <div>
                        <span>Tax</span>
                        <strong>₹0.00</strong>
                    </div>
                    <div class="total-row">
                        <span>Net Amount</span>
                        <strong>₹1,500.00</strong>
                    </div>
                    <div>
                        <span>Paid Amount</span>
                        <strong class="text-success">₹1,500.00</strong>
                    </div>
                    <div class="due-row">
                        <span>Due Amount</span>
                        <strong>₹0.00</strong>
                    </div>
                </div>
            </div>

            <div class="invoice-footer">
                <strong>Thank you for choosing Seba24 Fitness Club.</strong>
                <span>This is a computer-generated invoice.</span>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;gap:15px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.header-buttons{display:flex;gap:8px}
.invoice-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.06);padding:35px}
.invoice-top{display:flex;justify-content:space-between;padding-bottom:30px;border-bottom:1px solid #e5e7eb}
.gym-logo{width:48px;height:48px;background:#2563eb;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:10px}
.invoice-top h3{margin:0;font-size:20px}
.invoice-top p{margin:5px 0;color:#374151;font-size:13px}
.invoice-top small{color:#6b7280}
.invoice-meta{text-align:right}
.invoice-meta h2{font-size:26px;margin:0 0 5px}
.invoice-meta strong{display:block;font-size:14px}
.invoice-meta span{display:block;font-size:11px;color:#6b7280;margin-top:5px}
.invoice-meta .status{display:inline-block;margin-top:10px;background:#dcfce7;color:#15803d}
.customer-section{display:grid;grid-template-columns:1fr 1fr;gap:40px;padding:25px 0}
.customer-section label{font-size:10px;font-weight:700;color:#9ca3af}
.customer-section h5{font-size:14px;margin:7px 0}
.customer-section p{font-size:11px;color:#6b7280;margin:4px 0}
.invoice-items th{background:#f8fafc;font-size:11px;color:#6b7280}
.invoice-items td{font-size:12px}
.invoice-items td small{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.invoice-bottom{display:grid;grid-template-columns:1fr 350px;gap:40px;padding-top:30px}
.payment-info h6{font-size:13px;margin-bottom:15px}
.payment-info p{font-size:11px;color:#6b7280;margin:7px 0}
.amount-summary>div{display:flex;justify-content:space-between;padding:8px 0;font-size:12px}
.amount-summary .total-row{border-top:1px solid #e5e7eb;margin-top:5px;padding-top:12px;font-weight:700}
.amount-summary .due-row{color:#dc2626;font-weight:700}
.invoice-footer{text-align:center;border-top:1px solid #e5e7eb;margin-top:30px;padding-top:20px}
.invoice-footer strong{display:block;font-size:12px}
.invoice-footer span{display:block;font-size:10px;color:#9ca3af;margin-top:5px}
@media(max-width:768px){.page-header,.invoice-top{flex-direction:column;align-items:flex-start}.invoice-meta{text-align:left;margin-top:20px}.customer-section,.invoice-bottom{grid-template-columns:1fr}.invoice-card{padding:20px}}
@media print{.sidebar,.topbar,.page-header{display:none!important}.main-content{margin-left:0!important}.invoice-card{box-shadow:none}}
</style>

<?php include '../includes/footer.php'; ?>