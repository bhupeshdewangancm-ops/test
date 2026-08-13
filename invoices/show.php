<?php
$pageTitle = 'Invoice Details';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Invoice Details</div>
            <small class="text-muted">Complete invoice information</small>
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
                <h2>Invoice #INV-0002</h2>
                <p>View invoice, member and payment details.</p>
            </div>

            <div class="header-actions">
                <a href="<?= $baseUrl ?>/invoices/index.php" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back
                </a>

                <button class="btn btn-primary" onclick="window.print()">
                    <i class="fa-solid fa-print me-1"></i>
                    Print
                </button>
            </div>
        </div>

        <div class="invoice-container">
            <div class="invoice-header">
                <div>
                    <div class="gym-logo">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <h2>Seba24 Fitness Club</h2>
                    <p>Raipur Main Branch</p>
                    <span>Shankar Nagar, Raipur</span>
                    <span>Phone: 9800000001</span>
                </div>

                <div class="invoice-info">
                    <h1>INVOICE</h1>
                    <strong>INV-0002</strong>
                    <span>Invoice Date: 08 Aug 2026</span>
                    <span>Due Date: 15 Aug 2026</span>
                    <span class="status partial">PARTIAL</span>
                </div>
            </div>

            <div class="customer-grid">
                <div class="info-box">
                    <label>BILL TO</label>
                    <h4>Amit Sharma</h4>
                    <p>Member Code: GYM-102</p>
                    <p>Phone: 9111111112</p>
                    <p>Email: amit@gmail.com</p>
                </div>

                <div class="info-box">
                    <label>MEMBERSHIP DETAILS</label>
                    <h4>Muscle Building Plan</h4>
                    <p>Start Date: 08 Aug 2026</p>
                    <p>End Date: 07 Aug 2027</p>
                    <p>Trainer: Rahul Trainer</p>
                </div>
            </div>

            <div class="section-title">
                <h5>Invoice Items</h5>
            </div>

            <div class="table-responsive">
                <table class="table items-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Rate</th>
                            <th>Discount</th>
                            <th>Tax</th>
                            <th>Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <strong>Muscle Building Plan</strong>
                                <small>12 Months Gym Membership</small>
                            </td>
                            <td>1</td>
                            <td>₹12,000.00</td>
                            <td>₹500.00</td>
                            <td>₹0.00</td>
                            <td><strong>₹11,500.00</strong></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <strong>Personal Trainer</strong>
                                <small>Trainer package</small>
                            </td>
                            <td>1</td>
                            <td>₹1,000.00</td>
                            <td>₹500.00</td>
                            <td>₹0.00</td>
                            <td><strong>₹500.00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoice-summary">
                <div class="payment-history">
                    <h5>Payment History</h5>

                    <div class="payment-item">
                        <div class="payment-icon">
                            <i class="fa-solid fa-money-bill"></i>
                        </div>
                        <div>
                            <strong>₹2,000.00</strong>
                            <span>Cash</span>
                            <small>08 Aug 2026 · RCP-000001</small>
                        </div>
                        <span class="payment-success">Success</span>
                    </div>

                    <div class="payment-item">
                        <div class="payment-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div>
                            <strong>₹5,000.00</strong>
                            <span>UPI</span>
                            <small>13 Aug 2026 · RCP-000002</small>
                        </div>
                        <span class="payment-success">Success</span>
                    </div>

                    <a href="<?= $baseUrl ?>/billing_payment_invoice/payment-receipt.php"
                       class="btn btn-sm btn-outline-primary mt-2">
                        View Latest Receipt
                    </a>
                </div>

                <div class="amount-summary">
                    <div>
                        <span>Total Amount</span>
                        <strong>₹13,000.00</strong>
                    </div>

                    <div>
                        <span>Discount</span>
                        <strong>₹1,000.00</strong>
                    </div>

                    <div>
                        <span>Tax</span>
                        <strong>₹0.00</strong>
                    </div>

                    <div class="net-row">
                        <span>Net Amount</span>
                        <strong>₹12,000.00</strong>
                    </div>

                    <div>
                        <span>Paid Amount</span>
                        <strong class="text-success">₹7,000.00</strong>
                    </div>

                    <div class="due-row">
                        <span>Due Amount</span>
                        <strong>₹5,000.00</strong>
                    </div>
                </div>
            </div>

            <div class="invoice-note">
                <strong>Notes</strong>
                <p>Member has paid partial amount. Remaining amount should be collected before due date.</p>
            </div>

            <div class="invoice-footer">
                <strong>Thank you for choosing Seba24 Fitness Club.</strong>
                <span>This is a computer-generated invoice.</span>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.header-actions{display:flex;gap:8px}
.invoice-container{background:#fff;border-radius:12px;padding:35px;box-shadow:0 2px 12px rgba(0,0,0,.06)}
.invoice-header{display:flex;justify-content:space-between;padding-bottom:30px;border-bottom:1px solid #e5e7eb}
.gym-logo{width:48px;height:48px;border-radius:10px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:10px}
.invoice-header h2{margin:0;font-size:20px}
.invoice-header p{margin:5px 0;font-size:12px}
.invoice-header span{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.invoice-info{text-align:right}
.invoice-info h1{margin:0 0 5px;font-size:27px}
.invoice-info strong{display:block;font-size:14px}
.invoice-info .status{display:inline-block;margin-top:10px}
.status{padding:5px 10px;border-radius:20px;font-size:10px;font-weight:600}
.status.partial{background:#fef3c7;color:#b45309}
.customer-grid{display:grid;grid-template-columns:1fr 1fr;gap:30px;padding:25px 0}
.info-box{background:#f8fafc;padding:18px;border-radius:9px}
.info-box label{font-size:9px;color:#9ca3af;font-weight:700}
.info-box h4{font-size:14px;margin:7px 0}
.info-box p{font-size:11px;color:#6b7280;margin:4px 0}
.section-title{border-bottom:1px solid #e5e7eb;margin-bottom:0}
.section-title h5{font-size:14px;margin:0 0 12px}
.items-table{margin:0}
.items-table th{background:#f8fafc;font-size:10px;color:#6b7280;white-space:nowrap}
.items-table td{font-size:11px;white-space:nowrap}
.items-table td small{display:block;font-size:9px;color:#6b7280;margin-top:3px}
.invoice-summary{display:grid;grid-template-columns:1fr 350px;gap:40px;padding-top:30px}
.payment-history h5{font-size:14px;margin-bottom:15px}
.payment-item{display:flex;align-items:center;gap:10px;padding:12px 0;border-bottom:1px solid #f0f0f0}
.payment-icon{width:35px;height:35px;background:#eff6ff;color:#2563eb;border-radius:8px;display:flex;align-items:center;justify-content:center}
.payment-item div:nth-child(2){flex:1}
.payment-item strong{display:block;font-size:12px}
.payment-item span{display:block;font-size:10px;color:#6b7280}
.payment-item small{display:block;font-size:9px;color:#9ca3af;margin-top:2px}
.payment-success{background:#dcfce7;color:#15803d!important;padding:4px 7px;border-radius:15px}
.amount-summary>div{display:flex;justify-content:space-between;padding:9px 0;font-size:12px}
.amount-summary span{color:#6b7280}
.net-row{border-top:1px solid #e5e7eb;padding-top:13px!important;font-weight:700}
.due-row{border-top:1px solid #e5e7eb;color:#dc2626;font-weight:700;padding-top:13px!important}
.invoice-note{margin-top:25px;background:#f8fafc;padding:15px;border-radius:8px}
.invoice-note strong{font-size:11px}
.invoice-note p{font-size:10px;color:#6b7280;margin:5px 0 0}
.invoice-footer{text-align:center;border-top:1px dashed #d1d5db;margin-top:30px;padding-top:20px}
.invoice-footer strong{display:block;font-size:11px}
.invoice-footer span{display:block;font-size:9px;color:#9ca3af;margin-top:4px}
@media(max-width:800px){.page-header,.invoice-header{flex-direction:column;align-items:flex-start}.invoice-info{text-align:left;margin-top:20px}.customer-grid,.invoice-summary{grid-template-columns:1fr}.invoice-container{padding:20px}}
@media print{.sidebar,.topbar,.page-header{display:none!important}.main-content{margin-left:0!important}.invoice-container{box-shadow:none}}
</style>

<?php include '../includes/footer.php'; ?>