<?php
$pageTitle = 'My Invoices';
include '../includes/header.php';
?>

<div class="invoice-page">

    <div class="page-heading">
        <div>
            <span class="page-label">BILLING</span>
            <h2>My Invoices</h2>
            <p>View and manage your gym invoices.</p>
        </div>

        <a href="dues.php" class="dues-btn">
            <i class="fa-solid fa-wallet"></i>
            View Dues
        </a>
    </div>

    <div class="invoice-summary">

        <div class="summary-card">
            <div class="summary-icon blue">
                <i class="fa-solid fa-file-invoice"></i>
            </div>
            <div>
                <small>Total Invoices</small>
                <strong>6</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon green">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <small>Paid</small>
                <strong>4</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon orange">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <small>Pending</small>
                <strong>2</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon red">
                <i class="fa-solid fa-indian-rupee-sign"></i>
            </div>
            <div>
                <small>Total Due</small>
                <strong>₹2,500</strong>
            </div>
        </div>

    </div>

    <div class="filter-card">

        <div class="filter-header">
            <div>
                <h4>Invoice History</h4>
                <span>All your recent invoices</span>
            </div>

            <select>
                <option>All Status</option>
                <option>Paid</option>
                <option>Partial</option>
                <option>Unpaid</option>
            </select>
        </div>

    </div>

    <div class="invoice-list">

        <div class="invoice-card">

            <div class="invoice-main">
                <div class="invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div>
                    <span class="invoice-no">INV-2026-0006</span>
                    <h4>Premium Membership</h4>
                    <small>07 Aug 2026</small>
                </div>
            </div>

            <div class="invoice-amount">
                <small>Total Amount</small>
                <strong>₹3,500</strong>
            </div>

            <span class="status paid">Paid</span>

            <a href="details.php" class="view-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

        <div class="invoice-card">

            <div class="invoice-main">
                <div class="invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div>
                    <span class="invoice-no">INV-2026-0005</span>
                    <h4>Personal Training</h4>
                    <small>01 Aug 2026</small>
                </div>
            </div>

            <div class="invoice-amount">
                <small>Total Amount</small>
                <strong>₹2,500</strong>
            </div>

            <span class="status partial">Partial</span>

            <a href="details.php" class="view-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

        <div class="invoice-card">

            <div class="invoice-main">
                <div class="invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div>
                    <span class="invoice-no">INV-2026-0004</span>
                    <h4>Gym Membership</h4>
                    <small>07 Jul 2026</small>
                </div>
            </div>

            <div class="invoice-amount">
                <small>Total Amount</small>
                <strong>₹3,000</strong>
            </div>

            <span class="status paid">Paid</span>

            <a href="details.php" class="view-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

        <div class="invoice-card">

            <div class="invoice-main">
                <div class="invoice-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>

                <div>
                    <span class="invoice-no">INV-2026-0003</span>
                    <h4>Membership Renewal</h4>
                    <small>07 Jun 2026</small>
                </div>
            </div>

            <div class="invoice-amount">
                <small>Total Amount</small>
                <strong>₹3,500</strong>
            </div>

            <span class="status paid">Paid</span>

            <a href="details.php" class="view-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

    </div>

</div>

<style>
.invoice-page{max-width:1000px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.dues-btn{display:flex;align-items:center;gap:7px;background:#2563eb;color:#fff;padding:10px 13px;border-radius:8px;font-size:10px}
.invoice-summary{display:grid;grid-template-columns:repeat(4,1fr);gap:10px}
.summary-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:14px;display:flex;align-items:center;gap:10px}
.summary-icon{width:39px;height:39px;border-radius:10px;display:flex;align-items:center;justify-content:center}
.summary-icon.blue{background:#eff6ff;color:#2563eb}
.summary-icon.green{background:#ecfdf5;color:#16a34a}
.summary-icon.orange{background:#fff7ed;color:#ea580c}
.summary-icon.red{background:#fef2f2;color:#dc2626}
.summary-card small{display:block;color:#9ca3af;font-size:8px}
.summary-card strong{display:block;font-size:15px;margin-top:4px}
.filter-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px;margin-top:15px}
.filter-header{display:flex;align-items:center;justify-content:space-between}
.filter-header h4{font-size:14px;margin:0}
.filter-header span{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.filter-header select{height:35px;border:1px solid #d1d5db;border-radius:7px;padding:0 10px;font-size:10px;color:#374151}
.invoice-list{display:flex;flex-direction:column;gap:9px;margin-top:10px}
.invoice-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:13px;display:flex;align-items:center;gap:14px}
.invoice-main{display:flex;align-items:center;gap:10px;flex:1}
.invoice-icon{width:42px;height:42px;border-radius:10px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.invoice-no{font-size:8px;color:#2563eb;font-weight:700}
.invoice-main h4{font-size:11px;margin:3px 0}
.invoice-main small{font-size:8px;color:#9ca3af}
.invoice-amount{text-align:right;min-width:90px}
.invoice-amount small{display:block;color:#9ca3af;font-size:8px}
.invoice-amount strong{display:block;font-size:11px;margin-top:3px}
.status{font-size:8px;padding:5px 8px;border-radius:15px}
.status.paid{background:#ecfdf5;color:#16a34a}
.status.partial{background:#fff7ed;color:#ea580c}
.status.unpaid{background:#fef2f2;color:#dc2626}
.view-btn{color:#9ca3af;font-size:10px}
@media(max-width:750px){
.invoice-summary{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:550px){
.page-heading{align-items:flex-start;flex-direction:column}
.dues-btn{width:100%;justify-content:center}
.invoice-card{align-items:flex-start;flex-wrap:wrap}
.invoice-main{min-width:calc(100% - 50px)}
.invoice-amount{margin-left:52px;text-align:left}
}
</style>

<?php include '../includes/footer.php'; ?>