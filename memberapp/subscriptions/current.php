<?php
$pageTitle = 'Current Subscription';
include '../includes/header.php';
?>

<div class="subscription-page">

    <div class="page-heading">
        <div>
            <span class="page-label">MEMBERSHIP</span>
            <h2>Current Subscription</h2>
            <p>View your active gym membership.</p>
        </div>

        <a href="history.php" class="history-btn">
            <i class="fa-solid fa-clock-rotate-left"></i>
            History
        </a>
    </div>

    <div class="active-plan-card">

        <div class="plan-top">
            <div class="plan-icon">
                <i class="fa-solid fa-crown"></i>
            </div>

            <div>
                <span>ACTIVE MEMBERSHIP</span>
                <h3>Premium Plan</h3>
            </div>

            <div class="active-badge">
                <i class="fa-solid fa-circle"></i>
                Active
            </div>
        </div>

        <div class="plan-price">
            <strong>₹3,500</strong>
            <span>/ 1 Month</span>
        </div>

        <div class="expiry-info">
            <div>
                <span>Started On</span>
                <strong>07 August 2026</strong>
            </div>

            <div>
                <span>Expiry Date</span>
                <strong>06 September 2026</strong>
            </div>
        </div>

    </div>

    <div class="remaining-card">

        <div class="remaining-icon">
            <i class="fa-solid fa-calendar-days"></i>
        </div>

        <div class="remaining-content">
            <span>MEMBERSHIP REMAINING</span>
            <strong>24 Days</strong>
            <small>Your membership is currently active.</small>
        </div>

        <div class="progress-circle">
            <strong>80%</strong>
        </div>

    </div>

    <div class="section-heading">
        <h4>Subscription Details</h4>
        <p>Information about your current plan</p>
    </div>

    <div class="details-card">

        <div class="detail-row">
            <div class="detail-icon blue">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <div>
                <span>Plan Name</span>
                <strong>Premium Plan</strong>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-icon green">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <span>Start Date</span>
                <strong>07 August 2026</strong>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-icon orange">
                <i class="fa-solid fa-calendar-xmark"></i>
            </div>
            <div>
                <span>End Date</span>
                <strong>06 September 2026</strong>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-icon purple">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div>
                <span>Trainer</span>
                <strong>Rahul Trainer</strong>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-icon teal">
                <i class="fa-solid fa-building"></i>
            </div>
            <div>
                <span>Branch</span>
                <strong>Raipur Main Branch</strong>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-icon red">
                <i class="fa-solid fa-indian-rupee-sign"></i>
            </div>
            <div>
                <span>Amount Paid</span>
                <strong>₹3,500</strong>
            </div>
        </div>

    </div>

    <div class="plan-features">

        <div class="section-heading">
            <h4>Plan Benefits</h4>
            <p>Features included in your membership</p>
        </div>

        <div class="features-grid">

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Gym Access</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Cardio Area</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Weight Training</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Personal Trainer</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Workout Plans</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-check"></i>
                <span>Progress Tracking</span>
            </div>

        </div>

    </div>

    <div class="subscription-actions">

        <a href="../invoices/dues.php" class="renew-btn">
            <i class="fa-solid fa-rotate"></i>
            Renew Membership
        </a>

        <a href="details.php" class="details-btn">
            <i class="fa-solid fa-circle-info"></i>
            View Full Details
        </a>

    </div>

</div>

<style>
.subscription-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.history-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#fff;border:1px solid #e5e7eb;color:#374151;padding:10px 13px;border-radius:8px;font-size:9px;font-weight:600}
.active-plan-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:18px;padding:20px;margin-bottom:10px}
.plan-top{display:flex;align-items:center;gap:11px}
.plan-icon{width:45px;height:45px;border-radius:11px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:18px}
.plan-top>div:nth-child(2){flex:1}
.plan-top span{font-size:7px;opacity:.7;letter-spacing:.8px}
.plan-top h3{font-size:16px;margin:3px 0 0}
.active-badge{background:rgba(255,255,255,.15);border-radius:15px;padding:6px 9px;font-size:8px}
.active-badge i{font-size:6px;color:#bbf7d0;margin-right:4px}
.plan-price{margin:19px 0}
.plan-price strong{font-size:26px}
.plan-price span{font-size:8px;opacity:.7}
.expiry-info{display:grid;grid-template-columns:1fr 1fr;border-top:1px solid rgba(255,255,255,.15);padding-top:14px}
.expiry-info span{display:block;font-size:7px;opacity:.65}
.expiry-info strong{display:block;font-size:10px;margin-top:4px}
.remaining-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:14px;display:flex;align-items:center;gap:11px}
.remaining-icon{width:43px;height:43px;background:#eff6ff;color:#2563eb;border-radius:10px;display:flex;align-items:center;justify-content:center}
.remaining-content{flex:1}
.remaining-content span{display:block;color:#9ca3af;font-size:7px;letter-spacing:.7px}
.remaining-content strong{display:block;font-size:17px;margin:4px 0}
.remaining-content small{display:block;color:#9ca3af;font-size:8px}
.progress-circle{width:45px;height:45px;border-radius:50%;border:4px solid #dbeafe;color:#2563eb;display:flex;align-items:center;justify-content:center}
.progress-circle strong{font-size:9px}
.section-heading{margin:22px 0 10px}
.section-heading h4{font-size:15px;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.details-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:5px 15px}
.detail-row{display:flex;align-items:center;gap:10px;padding:11px 0;border-bottom:1px solid #f3f4f6}
.detail-row:last-child{border-bottom:0}
.detail-icon{width:35px;height:35px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:10px;flex-shrink:0}
.detail-icon.blue{background:#eff6ff;color:#2563eb}
.detail-icon.green{background:#ecfdf5;color:#16a34a}
.detail-icon.orange{background:#fff7ed;color:#ea580c}
.detail-icon.purple{background:#f5f3ff;color:#7c3aed}
.detail-icon.teal{background:#f0fdfa;color:#0f766e}
.detail-icon.red{background:#fef2f2;color:#dc2626}
.detail-row span{display:block;color:#9ca3af;font-size:8px}
.detail-row strong{display:block;font-size:10px;margin-top:3px}
.features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px}
.feature{background:#fff;border:1px solid #eef0f4;border-radius:10px;padding:11px;display:flex;align-items:center;gap:7px}
.feature i{width:20px;height:20px;border-radius:50%;background:#ecfdf5;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:7px}
.feature span{font-size:8px}
.subscription-actions{display:flex;gap:8px;margin:20px 0}
.renew-btn,.details-btn{height:42px;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600;flex:1}
.renew-btn{background:#2563eb;color:#fff}
.details-btn{background:#fff;border:1px solid #e5e7eb;color:#374151}
@media(max-width:600px){
.page-heading{align-items:flex-start;flex-direction:column}
.history-btn{width:100%}
.features-grid{grid-template-columns:repeat(2,1fr)}
.subscription-actions{flex-direction:column}
}
@media(max-width:420px){
.features-grid{grid-template-columns:1fr}
.expiry-info{grid-template-columns:1fr;gap:10px}
}
</style>

<?php include '../includes/footer.php'; ?>