<?php
$pageTitle = 'Subscription Details';
include '../includes/header.php';
?>

<div class="subscription-details-page">

    <div class="page-heading">
        <div class="heading-left">
            <a href="current.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div>
                <span class="page-label">MEMBERSHIP</span>
                <h2>Subscription Details</h2>
                <p>Complete information about your membership.</p>
            </div>
        </div>
    </div>

    <div class="status-card">

        <div class="status-icon">
            <i class="fa-solid fa-crown"></i>
        </div>

        <div class="status-info">
            <span>CURRENT PLAN</span>
            <h3>Premium Plan</h3>
            <small>Membership ID: SUB-2026-0001</small>
        </div>

        <div class="active-status">
            <i class="fa-solid fa-circle"></i>
            Active
        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-calendar"></i>
            Subscription Period
        </div>

        <div class="period-box">

            <div>
                <span>START DATE</span>
                <strong>07 Aug 2026</strong>
            </div>

            <div class="period-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>EXPIRY DATE</span>
                <strong>06 Sep 2026</strong>
            </div>

        </div>

        <div class="remaining-strip">
            <i class="fa-solid fa-hourglass-half"></i>
            <strong>24 Days Remaining</strong>
            <span>Membership is active</span>
        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-circle-info"></i>
            Plan Information
        </div>

        <div class="info-grid">

            <div class="info-item">
                <span>Plan Name</span>
                <strong>Premium Plan</strong>
            </div>

            <div class="info-item">
                <span>Duration</span>
                <strong>1 Month</strong>
            </div>

            <div class="info-item">
                <span>Plan Amount</span>
                <strong>₹3,500</strong>
            </div>

            <div class="info-item">
                <span>Discount</span>
                <strong>₹0</strong>
            </div>

            <div class="info-item">
                <span>Tax</span>
                <strong>₹0</strong>
            </div>

            <div class="info-item">
                <span>Final Amount</span>
                <strong>₹3,500</strong>
            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-user-tie"></i>
            Trainer & Branch
        </div>

        <div class="trainer-box">

            <div class="trainer-icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>

            <div>
                <span>TRAINER</span>
                <strong>Rahul Trainer</strong>
                <small>Personal Fitness Trainer</small>
            </div>

        </div>

        <div class="branch-box">

            <div class="branch-icon">
                <i class="fa-solid fa-building"></i>
            </div>

            <div>
                <span>GYM BRANCH</span>
                <strong>Raipur Main Branch</strong>
                <small>Shankar Nagar, Raipur, Chhattisgarh</small>
            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-list-check"></i>
            Included Benefits
        </div>

        <div class="benefit-list">

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Full Gym Access</span>
            </div>

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Cardio & Weight Training</span>
            </div>

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Personal Training</span>
            </div>

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Workout Plan</span>
            </div>

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Progress Tracking</span>
            </div>

            <div>
                <i class="fa-solid fa-check"></i>
                <span>Fitness Assessment</span>
            </div>

        </div>

    </div>

    <div class="action-buttons">

        <a href="../invoices/dues.php" class="renew-btn">
            <i class="fa-solid fa-rotate"></i>
            Renew Membership
        </a>

        <a href="current.php" class="back-btn-large">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Subscription
        </a>

    </div>

</div>

<style>
.subscription-details-page{max-width:750px;margin:auto}
.page-heading{margin-bottom:20px}
.heading-left{display:flex;align-items:center;gap:12px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:21px;margin:3px 0}
.page-heading p{font-size:10px;color:#6b7280;margin:0}
.status-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:16px;padding:17px;display:flex;align-items:center;gap:11px;margin-bottom:10px}
.status-icon{width:45px;height:45px;border-radius:11px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:17px}
.status-info{flex:1}
.status-info span{font-size:7px;opacity:.7;letter-spacing:.8px}
.status-info h3{font-size:15px;margin:3px 0}
.status-info small{font-size:7px;opacity:.7}
.active-status{background:rgba(255,255,255,.14);padding:6px 9px;border-radius:15px;font-size:8px}
.active-status i{font-size:6px;color:#bbf7d0;margin-right:4px}
.card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:10px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:14px}
.card-title i{color:#2563eb}
.period-box{display:flex;align-items:center;justify-content:space-between;text-align:center}
.period-box>div:not(.period-arrow){flex:1}
.period-box span{display:block;color:#9ca3af;font-size:7px}
.period-box strong{display:block;font-size:11px;margin-top:5px}
.period-arrow{width:40px;color:#2563eb;font-size:10px}
.remaining-strip{display:flex;align-items:center;gap:7px;background:#ecfdf5;color:#166534;border-radius:9px;padding:9px;margin-top:14px}
.remaining-strip i{font-size:10px}
.remaining-strip strong{font-size:9px}
.remaining-strip span{font-size:8px;margin-left:auto;color:#16a34a}
.info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.info-item span{display:block;color:#9ca3af;font-size:8px}
.info-item strong{display:block;font-size:10px;margin-top:4px}
.trainer-box,.branch-box{display:flex;align-items:center;gap:10px;padding:10px 0}
.trainer-box{border-bottom:1px solid #f3f4f6}
.trainer-icon,.branch-icon{width:39px;height:39px;border-radius:9px;display:flex;align-items:center;justify-content:center}
.trainer-icon{background:#eff6ff;color:#2563eb}
.branch-icon{background:#f5f3ff;color:#7c3aed}
.trainer-box span,.branch-box span{display:block;color:#9ca3af;font-size:7px}
.trainer-box strong,.branch-box strong{display:block;font-size:10px;margin-top:3px}
.trainer-box small,.branch-box small{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.benefit-list{display:grid;grid-template-columns:repeat(2,1fr);gap:8px}
.benefit-list>div{display:flex;align-items:center;gap:7px;background:#f8fafc;border-radius:9px;padding:10px}
.benefit-list i{width:20px;height:20px;border-radius:50%;background:#ecfdf5;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:7px}
.benefit-list span{font-size:8px}
.action-buttons{display:flex;flex-direction:column;gap:8px;margin-bottom:15px}
.renew-btn,.back-btn-large{height:42px;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600}
.renew-btn{background:#2563eb;color:#fff}
.back-btn-large{background:#fff;border:1px solid #e5e7eb;color:#374151}
@media(max-width:500px){
.info-grid,.benefit-list{grid-template-columns:1fr}
.period-box{align-items:flex-start}
.period-box strong{font-size:10px}
.remaining-strip{flex-wrap:wrap}
.remaining-strip span{width:100%;margin-left:0}
.status-card{align-items:flex-start}
.active-status{margin-left:auto}
}
</style>

<?php include '../includes/footer.php'; ?>