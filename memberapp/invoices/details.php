<?php
$pageTitle = 'Invoice Details';
include '../includes/header.php';
?>

<div class="invoice-details">

    <div class="details-heading">
        <a href="index.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div>
            <span class="page-label">BILLING</span>
            <h2>Invoice Details</h2>
        </div>
    </div>

    <div class="invoice-header-card">

        <div class="invoice-title-row">
            <div class="invoice-big-icon">
                <i class="fa-solid fa-file-invoice"></i>
            </div>

            <div>
                <span>INVOICE</span>
                <h3>INV-2026-0006</h3>
                <small>07 August 2026</small>
            </div>

            <span class="status paid">Paid</span>
        </div>

        <div class="invoice-meta">
            <div>
                <small>Invoice Date</small>
                <strong>07 Aug 2026</strong>
            </div>

            <div>
                <small>Due Date</small>
                <strong>07 Aug 2026</strong>
            </div>

            <div>
                <small>Payment Status</small>
                <strong class="green-text">Paid</strong>
            </div>
        </div>

    </div>

    <div class="invoice-card">

        <div class="card-title">
            <i class="fa-solid fa-user"></i>
            Member Information
        </div>

        <div class="member-info">
            <div class="member-avatar">R</div>

            <div>
                <strong>Rohan Active Member</strong>
                <span>Member ID: GYM-101</span>
                <small>Mobile: 9876543210</small>
            </div>
        </div>

    </div>

    <div class="invoice-card">

        <div class="card-title">
            <i class="fa-solid fa-list"></i>
            Invoice Items
        </div>

        <div class="item-row">
            <div>
                <strong>Premium Membership</strong>
                <span>30 Days Membership</span>
            </div>
            <strong>₹3,000</strong>
        </div>

        <div class="item-row">
            <div>
                <strong>Personal Training</strong>
                <span>Trainer Package</span>
            </div>
            <strong>₹1,000</strong>
        </div>

        <div class="item-row">
            <div>
                <strong>Discount</strong>
                <span>Membership Discount</span>
            </div>
            <strong class="discount">- ₹500</strong>
        </div>

    </div>

    <div class="invoice-card">

        <div class="card-title">
            <i class="fa-solid fa-calculator"></i>
            Payment Summary
        </div>

        <div class="amount-row">
            <span>Total Amount</span>
            <strong>₹3,500</strong>
        </div>

        <div class="amount-row">
            <span>Discount</span>
            <strong>- ₹500</strong>
        </div>

        <div class="amount-row">
            <span>Tax</span>
            <strong>₹0</strong>
        </div>

        <div class="amount-row total">
            <span>Net Amount</span>
            <strong>₹3,000</strong>
        </div>

        <div class="amount-row paid-row">
            <span>Paid Amount</span>
            <strong>₹3,000</strong>
        </div>

        <div class="amount-row due-row">
            <span>Due Amount</span>
            <strong>₹0</strong>
        </div>

    </div>

    <div class="payment-success">
        <i class="fa-solid fa-circle-check"></i>

        <div>
            <strong>Payment Completed</strong>
            <span>Thank you! Your invoice has been fully paid.</span>
        </div>
    </div>

    <button type="button" class="download-btn">
        <i class="fa-solid fa-download"></i>
        Download Invoice
    </button>

</div>

<style>
.invoice-details{max-width:800px;margin:auto}
.details-heading{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.back-btn{width:38px;height:38px;border:1px solid #e5e7eb;background:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.details-heading h2{font-size:21px;margin:3px 0 0}
.invoice-header-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:17px;padding:20px;margin-bottom:12px}
.invoice-title-row{display:flex;align-items:center;gap:11px}
.invoice-big-icon{width:45px;height:45px;background:rgba(255,255,255,.15);border-radius:11px;display:flex;align-items:center;justify-content:center}
.invoice-title-row>div:nth-child(2){flex:1}
.invoice-title-row span:first-child{font-size:8px;opacity:.7}
.invoice-title-row h3{font-size:17px;margin:3px 0}
.invoice-title-row small{font-size:8px;opacity:.7}
.invoice-header-card .status{background:#fff;color:#16a34a}
.invoice-meta{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.2);margin-top:18px;padding-top:15px;gap:10px}
.invoice-meta small{display:block;font-size:8px;opacity:.65}
.invoice-meta strong{display:block;font-size:10px;margin-top:4px}
.green-text{color:#bbf7d0}
.invoice-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:12px}
.card-title{font-size:12px;font-weight:700;display:flex;align-items:center;gap:8px;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:14px}
.card-title i{color:#2563eb}
.member-info{display:flex;align-items:center;gap:11px}
.member-avatar{width:43px;height:43px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700}
.member-info strong{display:block;font-size:12px}
.member-info span{display:block;font-size:8px;color:#6b7280;margin-top:3px}
.member-info small{display:block;font-size:8px;color:#9ca3af;margin-top:3px}
.item-row{display:flex;justify-content:space-between;align-items:center;padding:11px 0;border-bottom:1px solid #f3f4f6}
.item-row:last-child{border-bottom:0;padding-bottom:0}
.item-row strong{font-size:10px}
.item-row span{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.discount{color:#dc2626}
.amount-row{display:flex;justify-content:space-between;padding:8px 0;font-size:10px;color:#6b7280}
.amount-row strong{color:#111827}
.amount-row.total{border-top:1px solid #e5e7eb;margin-top:5px;padding-top:13px;font-size:12px;font-weight:700}
.amount-row.paid-row strong{color:#16a34a}
.amount-row.due-row{background:#fef2f2;color:#dc2626;padding:10px;border-radius:7px;margin-top:5px}
.amount-row.due-row strong{color:#dc2626}
.payment-success{display:flex;align-items:center;gap:10px;background:#ecfdf5;border-radius:12px;padding:13px;margin-bottom:12px;color:#15803d}
.payment-success>i{font-size:20px}
.payment-success strong{display:block;font-size:10px}
.payment-success span{display:block;font-size:8px;margin-top:3px}
.download-btn{width:100%;height:43px;border:0;border-radius:9px;background:#2563eb;color:#fff;font-size:10px;font-weight:600}
.download-btn i{margin-right:6px}
@media(max-width:500px){
.invoice-meta{grid-template-columns:1fr 1fr}
.invoice-meta div:last-child{grid-column:1/-1}
}
</style>

<?php include '../includes/footer.php'; ?>