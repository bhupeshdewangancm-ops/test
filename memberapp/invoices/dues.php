<?php
$pageTitle = 'Pending Dues';
include '../includes/header.php';
?>

<div class="dues-page">

    <div class="page-heading">
        <div>
            <span class="page-label">BILLING</span>
            <h2>Pending Dues</h2>
            <p>View your outstanding payment amount.</p>
        </div>

        <a href="index.php" class="back-link">
            <i class="fa-solid fa-file-invoice"></i>
            All Invoices
        </a>
    </div>

    <div class="due-total-card">

        <div class="due-icon">
            <i class="fa-solid fa-wallet"></i>
        </div>

        <span>TOTAL OUTSTANDING</span>
        <h1>₹2,500</h1>
        <p>Please clear your pending amount.</p>

    </div>

    <div class="due-summary">

        <div>
            <small>Total Invoice Amount</small>
            <strong>₹5,000</strong>
        </div>

        <div>
            <small>Paid Amount</small>
            <strong class="green">₹2,500</strong>
        </div>

        <div>
            <small>Due Amount</small>
            <strong class="red">₹2,500</strong>
        </div>

    </div>

    <div class="section-heading">
        <div>
            <h4>Pending Invoices</h4>
            <p>Invoices requiring payment</p>
        </div>

        <span class="count-badge">2 Pending</span>
    </div>

    <div class="due-list">

        <div class="due-card">

            <div class="due-card-top">
                <div class="due-invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div class="due-info">
                    <span>INV-2026-0005</span>
                    <h4>Personal Training</h4>
                    <small>01 August 2026</small>
                </div>

                <span class="status partial">Partial</span>
            </div>

            <div class="due-details">

                <div>
                    <small>Total Amount</small>
                    <strong>₹2,500</strong>
                </div>

                <div>
                    <small>Paid</small>
                    <strong class="green">₹1,000</strong>
                </div>

                <div>
                    <small>Due</small>
                    <strong class="red">₹1,500</strong>
                </div>

            </div>

            <a href="details.php" class="due-action">
                <span>View Invoice</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <div class="due-card">

            <div class="due-card-top">
                <div class="due-invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div class="due-info">
                    <span>INV-2026-0002</span>
                    <h4>Gym Accessories</h4>
                    <small>25 July 2026</small>
                </div>

                <span class="status unpaid">Unpaid</span>
            </div>

            <div class="due-details">

                <div>
                    <small>Total Amount</small>
                    <strong>₹1,000</strong>
                </div>

                <div>
                    <small>Paid</small>
                    <strong class="green">₹0</strong>
                </div>

                <div>
                    <small>Due</small>
                    <strong class="red">₹1,000</strong>
                </div>

            </div>

            <a href="details.php" class="due-action">
                <span>View Invoice</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

    <div class="payment-help">

        <div class="help-icon">
            <i class="fa-solid fa-circle-info"></i>
        </div>

        <div>
            <strong>Need help with your payment?</strong>
            <p>Please contact your gym administrator for payment assistance.</p>
        </div>

    </div>

</div>

<style>
.dues-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.back-link{display:flex;align-items:center;gap:7px;color:#2563eb;font-size:10px;font-weight:600}
.due-total-card{background:linear-gradient(135deg,#dc2626,#b91c1c);color:#fff;border-radius:18px;text-align:center;padding:24px 15px;box-shadow:0 8px 25px rgba(220,38,38,.15)}
.due-icon{width:45px;height:45px;background:rgba(255,255,255,.15);border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 10px}
.due-total-card span{font-size:8px;letter-spacing:1px;opacity:.75}
.due-total-card h1{font-size:29px;margin:6px 0}
.due-total-card p{font-size:9px;opacity:.75;margin:0}
.due-summary{display:grid;grid-template-columns:repeat(3,1fr);background:#fff;border:1px solid #eef0f4;border-radius:13px;margin-top:12px;padding:14px}
.due-summary>div{text-align:center;border-right:1px solid #f0f0f0}
.due-summary>div:last-child{border:0}
.due-summary small{display:block;color:#9ca3af;font-size:8px}
.due-summary strong{display:block;font-size:13px;margin-top:5px}
.green{color:#16a34a!important}
.red{color:#dc2626!important}
.section-heading{display:flex;align-items:center;justify-content:space-between;margin:24px 0 11px}
.section-heading h4{font-size:15px;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.count-badge{font-size:8px;background:#fef2f2;color:#dc2626;padding:6px 9px;border-radius:15px}
.due-list{display:flex;flex-direction:column;gap:11px}
.due-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px}
.due-card-top{display:flex;align-items:center;gap:10px}
.due-invoice-icon{width:42px;height:42px;border-radius:10px;background:#fff7ed;color:#ea580c;display:flex;align-items:center;justify-content:center}
.due-info{flex:1}
.due-info>span{font-size:8px;color:#2563eb;font-weight:700}
.due-info h4{font-size:11px;margin:3px 0}
.due-info small{font-size:8px;color:#9ca3af}
.status{font-size:8px;padding:5px 8px;border-radius:15px}
.status.partial{background:#fff7ed;color:#ea580c}
.status.unpaid{background:#fef2f2;color:#dc2626}
.due-details{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid #f0f0f0;border-bottom:1px solid #f0f0f0;margin:14px 0;padding:12px 0}
.due-details>div{text-align:center;border-right:1px solid #f0f0f0}
.due-details>div:last-child{border:0}
.due-details small{display:block;color:#9ca3af;font-size:8px}
.due-details strong{display:block;font-size:10px;margin-top:4px}
.due-action{display:flex;align-items:center;justify-content:space-between;color:#2563eb;font-size:9px;font-weight:600}
.payment-help{display:flex;align-items:flex-start;gap:10px;background:#eff6ff;border-radius:12px;padding:14px;margin-top:18px}
.help-icon{color:#2563eb;font-size:15px}
.payment-help strong{font-size:10px;color:#1e3a8a}
.payment-help p{font-size:8px;color:#64748b;margin:4px 0 0}
@media(max-width:600px){
.page-heading{align-items:flex-start;flex-direction:column}
.back-link{width:100%;justify-content:center;background:#eff6ff;padding:9px;border-radius:8px}
.due-summary{grid-template-columns:1fr}
.due-summary>div{border-right:0;border-bottom:1px solid #f0f0f0;padding:9px}
.due-summary>div:last-child{border-bottom:0}
}
@media(max-width:450px){
.due-card-top{align-items:flex-start}
.due-details{gap:5px}
}
</style>

<?php include '../includes/footer.php'; ?>