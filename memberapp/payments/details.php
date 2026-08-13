<?php
$pageTitle = 'Payment Details';
include '../includes/header.php';
?>

<div class="payment-details-page">

    <div class="details-heading">
        <a href="index.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div>
            <span class="page-label">PAYMENT</span>
            <h2>Payment Details</h2>
        </div>
    </div>

    <div class="payment-success-card">

        <div class="success-icon">
            <i class="fa-solid fa-check"></i>
        </div>

        <span>PAYMENT SUCCESSFUL</span>

        <h1>₹3,500</h1>

        <p>
            Your payment has been successfully received.
        </p>

        <div class="payment-date">
            <i class="fa-regular fa-calendar"></i>
            13 August 2026 • 10:30 AM
        </div>

    </div>

    <div class="detail-card">

        <div class="card-title">
            <i class="fa-solid fa-receipt"></i>
            Transaction Information
        </div>

        <div class="detail-row">
            <span>Receipt Number</span>
            <strong>REC-2026-0005</strong>
        </div>

        <div class="detail-row">
            <span>Payment Date</span>
            <strong>13 Aug 2026</strong>
        </div>

        <div class="detail-row">
            <span>Payment Time</span>
            <strong>10:30 AM</strong>
        </div>

        <div class="detail-row">
            <span>Payment Mode</span>
            <strong>UPI</strong>
        </div>

        <div class="detail-row">
            <span>Transaction Reference</span>
            <strong>UPI20260813103045</strong>
        </div>

        <div class="detail-row">
            <span>Status</span>
            <strong class="success-text">Success</strong>
        </div>

    </div>

    <div class="detail-card">

        <div class="card-title">
            <i class="fa-solid fa-file-invoice"></i>
            Invoice Information
        </div>

        <div class="invoice-info">

            <div class="invoice-icon">
                <i class="fa-solid fa-file-invoice"></i>
            </div>

            <div>
                <span>Invoice Number</span>
                <strong>INV-2026-0006</strong>
                <small>Premium Membership</small>
            </div>

            <a href="../invoices/details.php">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

    </div>

    <div class="detail-card">

        <div class="card-title">
            <i class="fa-solid fa-user"></i>
            Member Information
        </div>

        <div class="member-info">

            <div class="member-avatar">
                R
            </div>

            <div>
                <strong>Rohan Active Member</strong>
                <span>Member ID: GYM-101</span>
                <small>Mobile: 9876543210</small>
            </div>

        </div>

    </div>

    <div class="action-buttons">

        <button type="button" class="download-btn">
            <i class="fa-solid fa-download"></i>
            Download Receipt
        </button>

        <a href="index.php" class="back-list-btn">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Payments
        </a>

    </div>

</div>

<style>
.payment-details-page{max-width:700px;margin:auto}
.details-heading{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.details-heading h2{font-size:21px;margin:3px 0 0}
.payment-success-card{background:linear-gradient(135deg,#16a34a,#15803d);color:#fff;text-align:center;border-radius:18px;padding:25px 15px;margin-bottom:12px}
.success-icon{width:52px;height:52px;border-radius:50%;background:#fff;color:#16a34a;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;font-size:20px}
.payment-success-card>span{font-size:8px;letter-spacing:1px;opacity:.8}
.payment-success-card h1{font-size:30px;margin:6px 0}
.payment-success-card p{font-size:9px;opacity:.8;margin:0}
.payment-date{font-size:8px;margin-top:12px;opacity:.8}
.payment-date i{margin-right:4px}
.detail-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:12px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:7px}
.card-title i{color:#2563eb}
.detail-row{display:flex;align-items:center;justify-content:space-between;gap:15px;padding:10px 0;border-bottom:1px solid #f3f4f6}
.detail-row:last-child{border-bottom:0}
.detail-row span{font-size:9px;color:#9ca3af}
.detail-row strong{font-size:9px;text-align:right}
.success-text{color:#16a34a!important}
.invoice-info{display:flex;align-items:center;gap:10px}
.invoice-icon{width:42px;height:42px;background:#eff6ff;color:#2563eb;border-radius:10px;display:flex;align-items:center;justify-content:center}
.invoice-info>div:nth-child(2){flex:1}
.invoice-info span{display:block;font-size:8px;color:#9ca3af}
.invoice-info strong{display:block;font-size:10px;margin-top:3px}
.invoice-info small{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.invoice-info>a{color:#9ca3af;font-size:9px}
.member-info{display:flex;align-items:center;gap:11px}
.member-avatar{width:43px;height:43px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700}
.member-info strong{display:block;font-size:11px}
.member-info span{display:block;font-size:8px;color:#6b7280;margin-top:3px}
.member-info small{display:block;font-size:8px;color:#9ca3af;margin-top:3px}
.action-buttons{display:flex;flex-direction:column;gap:8px}
.download-btn{height:43px;border:0;border-radius:9px;background:#2563eb;color:#fff;font-size:10px;font-weight:600}
.download-btn i{margin-right:6px}
.back-list-btn{height:40px;border:1px solid #e5e7eb;background:#fff;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;color:#374151;font-size:9px;font-weight:600}
@media(max-width:500px){
.payment-success-card{padding:22px 12px}
.detail-card{padding:14px}
.detail-row{align-items:flex-start;flex-direction:column;gap:4px}
.detail-row strong{text-align:left}
}
</style>

<?php include '../includes/footer.php'; ?>