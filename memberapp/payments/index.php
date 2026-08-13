<?php
$pageTitle = 'Payments';
include '../includes/header.php';
?>

<div class="payments-page">

    <div class="page-heading">
        <div>
            <span class="page-label">BILLING</span>
            <h2>Payments</h2>
            <p>View your payment history and transactions.</p>
        </div>

        <a href="../invoices/dues.php" class="due-btn">
            <i class="fa-solid fa-wallet"></i>
            Pay Due
        </a>
    </div>

    <div class="payment-summary">

        <div class="summary-card">
            <div class="summary-icon blue">
                <i class="fa-solid fa-indian-rupee-sign"></i>
            </div>
            <div>
                <small>Total Paid</small>
                <strong>₹12,500</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon green">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <small>Successful</small>
                <strong>5</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon orange">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <small>Pending</small>
                <strong>₹2,500</strong>
            </div>
        </div>

    </div>

    <div class="section-header">
        <div>
            <h4>Payment History</h4>
            <p>Your recent payment transactions</p>
        </div>

        <select class="filter-select">
            <option>All Payments</option>
            <option>Successful</option>
            <option>Failed</option>
            <option>Reversed</option>
        </select>
    </div>

    <div class="payment-list">

        <a href="details.php" class="payment-card">

            <div class="payment-icon green">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="payment-info">
                <span class="receipt-no">REC-2026-0005</span>
                <h4>Premium Membership</h4>
                <small>13 August 2026 • 10:30 AM</small>
            </div>

            <div class="payment-amount">
                <strong>₹3,500</strong>
                <span class="payment-status success">Success</span>
            </div>

            <i class="fa-solid fa-chevron-right arrow-icon"></i>

        </a>

        <a href="details.php" class="payment-card">

            <div class="payment-icon green">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="payment-info">
                <span class="receipt-no">REC-2026-0004</span>
                <h4>Personal Training</h4>
                <small>01 August 2026 • 09:15 AM</small>
            </div>

            <div class="payment-amount">
                <strong>₹2,500</strong>
                <span class="payment-status success">Success</span>
            </div>

            <i class="fa-solid fa-chevron-right arrow-icon"></i>

        </a>

        <a href="details.php" class="payment-card">

            <div class="payment-icon green">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="payment-info">
                <span class="receipt-no">REC-2026-0003</span>
                <h4>Gym Membership</h4>
                <small>07 July 2026 • 08:45 AM</small>
            </div>

            <div class="payment-amount">
                <strong>₹3,000</strong>
                <span class="payment-status success">Success</span>
            </div>

            <i class="fa-solid fa-chevron-right arrow-icon"></i>

        </a>

        <a href="details.php" class="payment-card">

            <div class="payment-icon green">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="payment-info">
                <span class="receipt-no">REC-2026-0002</span>
                <h4>Membership Renewal</h4>
                <small>07 June 2026 • 07:30 AM</small>
            </div>

            <div class="payment-amount">
                <strong>₹3,500</strong>
                <span class="payment-status success">Success</span>
            </div>

            <i class="fa-solid fa-chevron-right arrow-icon"></i>

        </a>

        <a href="details.php" class="payment-card">

            <div class="payment-icon red">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <div class="payment-info">
                <span class="receipt-no">REC-2026-0001</span>
                <h4>Membership Payment</h4>
                <small>07 May 2026 • 11:20 AM</small>
            </div>

            <div class="payment-amount">
                <strong>₹2,500</strong>
                <span class="payment-status failed">Failed</span>
            </div>

            <i class="fa-solid fa-chevron-right arrow-icon"></i>

        </a>

    </div>

</div>

<style>
.payments-page{max-width:900px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.due-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#2563eb;color:#fff;padding:10px 13px;border-radius:8px;font-size:9px;font-weight:600}
.payment-summary{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
.summary-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:14px;display:flex;align-items:center;gap:10px}
.summary-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center}
.summary-icon.blue{background:#eff6ff;color:#2563eb}
.summary-icon.green{background:#ecfdf5;color:#16a34a}
.summary-icon.orange{background:#fff7ed;color:#ea580c}
.summary-card small{display:block;color:#9ca3af;font-size:8px}
.summary-card strong{display:block;font-size:15px;margin-top:4px}
.section-header{display:flex;align-items:center;justify-content:space-between;margin:24px 0 11px}
.section-header h4{font-size:15px;margin:0}
.section-header p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.filter-select{height:34px;border:1px solid #d1d5db;border-radius:7px;padding:0 10px;font-size:9px;color:#374151;background:#fff}
.payment-list{display:flex;flex-direction:column;gap:9px}
.payment-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:13px;display:flex;align-items:center;gap:11px;color:#111827}
.payment-card:hover{border-color:#dbeafe;box-shadow:0 4px 15px rgba(15,23,42,.04)}
.payment-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.payment-icon.green{background:#ecfdf5;color:#16a34a}
.payment-icon.red{background:#fef2f2;color:#dc2626}
.payment-info{flex:1;min-width:0}
.receipt-no{font-size:8px;color:#2563eb;font-weight:700}
.payment-info h4{font-size:11px;margin:3px 0}
.payment-info small{font-size:8px;color:#9ca3af}
.payment-amount{text-align:right;min-width:75px}
.payment-amount strong{display:block;font-size:11px}
.payment-status{display:inline-block;font-size:7px;margin-top:4px;padding:4px 7px;border-radius:12px}
.payment-status.success{background:#ecfdf5;color:#16a34a}
.payment-status.failed{background:#fef2f2;color:#dc2626}
.arrow-icon{color:#9ca3af;font-size:9px}
@media(max-width:600px){
.page-heading{align-items:flex-start;flex-direction:column}
.due-btn{width:100%}
.payment-summary{grid-template-columns:1fr}
.section-header{align-items:flex-start;gap:10px;flex-direction:column}
.filter-select{width:100%}
.payment-card{align-items:flex-start}
.payment-amount{margin-left:auto}
}
@media(max-width:420px){
.payment-info h4{font-size:10px}
.payment-info small{font-size:7px}
.payment-amount{min-width:65px}
.payment-amount strong{font-size:10px}
}
</style>

<?php include '../includes/footer.php'; ?>