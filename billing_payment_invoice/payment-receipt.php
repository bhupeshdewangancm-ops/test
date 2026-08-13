<?php
$pageTitle = 'Payment Receipt';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Payment Receipt</div>
            <small class="text-muted">View and print payment receipt</small>
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
                <h2>Payment Receipt</h2>
                <p>Receipt for payment transaction RCP-000002.</p>
            </div>

            <div class="header-buttons">
                <a href="<?= $baseUrl ?>/billing_payment_invoice/invoices.php"
                   class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back
                </a>

                <button class="btn btn-primary" onclick="window.print()">
                    <i class="fa-solid fa-print me-1"></i>
                    Print Receipt
                </button>
            </div>
        </div>

        <div class="receipt-card">
            <div class="receipt-header">
                <div class="gym-logo">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>

                <h2>Seba24 Fitness Club</h2>
                <p>Raipur Main Branch</p>
                <span>Shankar Nagar, Raipur</span>
            </div>

            <div class="receipt-title">
                <span>PAYMENT RECEIPT</span>
                <strong>RCP-000002</strong>
            </div>

            <div class="success-box">
                <div class="success-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <strong>Payment Successful</strong>
                    <span>Payment received successfully.</span>
                </div>
            </div>

            <div class="receipt-info">
                <div>
                    <label>RECEIVED FROM</label>
                    <strong>Amit Sharma</strong>
                    <span>Member Code: GYM-102</span>
                    <span>Phone: 9111111112</span>
                </div>

                <div>
                    <label>PAYMENT DETAILS</label>
                    <span><strong>Invoice:</strong> INV-002</span>
                    <span><strong>Date:</strong> 13 Aug 2026</span>
                    <span><strong>Payment Mode:</strong> UPI</span>
                    <span><strong>Reference:</strong> UPI202608130001</span>
                </div>
            </div>

            <div class="amount-box">
                <span>Amount Received</span>
                <strong>₹5,000.00</strong>
            </div>

            <div class="balance-section">
                <div>
                    <span>Invoice Amount</span>
                    <strong>₹12,000.00</strong>
                </div>

                <div>
                    <span>Previous Paid</span>
                    <strong>₹2,000.00</strong>
                </div>

                <div>
                    <span>Payment Received</span>
                    <strong class="text-success">₹5,000.00</strong>
                </div>

                <div class="remaining-row">
                    <span>Remaining Due</span>
                    <strong>₹5,000.00</strong>
                </div>
            </div>

            <div class="receipt-note">
                <strong>Notes</strong>
                <p>Partial advance payment via UPI.</p>
            </div>

            <div class="receipt-footer">
                <strong>Thank you for your payment.</strong>
                <span>This is a computer-generated payment receipt.</span>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;gap:15px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.header-buttons{display:flex;gap:8px}
.receipt-card{background:#fff;max-width:850px;margin:0 auto;padding:35px;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.06)}
.receipt-header{text-align:center;padding-bottom:25px;border-bottom:1px dashed #d1d5db}
.gym-logo{width:50px;height:50px;background:#2563eb;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px;margin:0 auto 10px}
.receipt-header h2{margin:0;font-size:21px}
.receipt-header p{margin:5px 0;font-size:12px}
.receipt-header span{font-size:10px;color:#6b7280}
.receipt-title{display:flex;justify-content:space-between;align-items:center;padding:20px 0}
.receipt-title span{font-size:14px;font-weight:700}
.receipt-title strong{font-size:13px}
.success-box{display:flex;align-items:center;justify-content:center;gap:12px;background:#ecfdf5;padding:15px;border-radius:9px}
.success-icon{width:35px;height:35px;border-radius:50%;background:#16a34a;color:#fff;display:flex;align-items:center;justify-content:center}
.success-box strong{display:block;color:#15803d;font-size:13px}
.success-box span{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.receipt-info{display:grid;grid-template-columns:1fr 1fr;gap:40px;padding:25px 0;border-bottom:1px solid #e5e7eb}
.receipt-info label{display:block;font-size:9px;color:#9ca3af;font-weight:700;margin-bottom:8px}
.receipt-info strong{font-size:13px}
.receipt-info span{display:block;font-size:11px;color:#6b7280;margin-top:5px}
.amount-box{text-align:center;padding:25px;background:#f8fafc;margin:25px 0;border-radius:10px}
.amount-box span{display:block;font-size:11px;color:#6b7280}
.amount-box strong{display:block;font-size:30px;color:#2563eb;margin-top:5px}
.balance-section{border-top:1px solid #e5e7eb}
.balance-section>div{display:flex;justify-content:space-between;padding:11px 0;font-size:12px}
.balance-section span{color:#6b7280}
.remaining-row{border-top:1px solid #e5e7eb;font-weight:700}
.remaining-row strong{color:#dc2626}
.receipt-note{background:#f8fafc;border-radius:8px;padding:15px;margin-top:20px}
.receipt-note strong{font-size:11px}
.receipt-note p{font-size:11px;color:#6b7280;margin:5px 0 0}
.receipt-footer{text-align:center;border-top:1px dashed #d1d5db;margin-top:25px;padding-top:20px}
.receipt-footer strong{display:block;font-size:12px}
.receipt-footer span{display:block;font-size:10px;color:#9ca3af;margin-top:5px}
@media(max-width:700px){.page-header{flex-direction:column;align-items:flex-start}.receipt-card{padding:20px}.receipt-info{grid-template-columns:1fr;gap:20px}}
@media print{.sidebar,.topbar,.page-header{display:none!important}.main-content{margin-left:0!important}.receipt-card{box-shadow:none}}
</style>

<?php include '../includes/footer.php'; ?>