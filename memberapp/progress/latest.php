<?php
$pageTitle = 'Latest Progress';
include '../includes/header.php';
?>

<div class="latest-progress-page">

    <div class="page-heading">
        <div class="heading-left">
            <a href="index.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div>
                <span class="page-label">FITNESS</span>
                <h2>Latest Progress</h2>
                <p>Your most recent body measurement.</p>
            </div>
        </div>
    </div>

    <div class="latest-date-card">

        <div class="date-icon">
            <i class="fa-solid fa-calendar-check"></i>
        </div>

        <div>
            <span>LAST UPDATED</span>
            <strong>13 August 2026</strong>
            <small>Thursday • 07:30 AM</small>
        </div>

    </div>

    <div class="weight-card">

        <div class="weight-icon">
            <i class="fa-solid fa-weight-scale"></i>
        </div>

        <div class="weight-content">
            <span>CURRENT WEIGHT</span>
            <strong>72.5 <small>kg</small></strong>

            <div class="weight-change">
                <i class="fa-solid fa-arrow-down"></i>
                2.5 kg lost from starting weight
            </div>
        </div>

        <div class="goal-info">
            <span>GOAL</span>
            <strong>70 kg</strong>
            <small>2.5 kg remaining</small>
        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-ruler-combined"></i>
            Body Measurements
        </div>

        <div class="measurement-list">

            <div class="measurement-row">
                <div class="measurement-name">
                    <div class="measurement-small-icon blue">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                    </div>
                    <span>Chest</span>
                </div>
                <strong>39 in</strong>
            </div>

            <div class="measurement-row">
                <div class="measurement-name">
                    <div class="measurement-small-icon green">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                    </div>
                    <span>Waist</span>
                </div>
                <strong>32 in</strong>
            </div>

            <div class="measurement-row">
                <div class="measurement-name">
                    <div class="measurement-small-icon orange">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                    </div>
                    <span>Hip</span>
                </div>
                <strong>36 in</strong>
            </div>

            <div class="measurement-row">
                <div class="measurement-name">
                    <div class="measurement-small-icon purple">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                    </div>
                    <span>Arm</span>
                </div>
                <strong>13.5 in</strong>
            </div>

            <div class="measurement-row">
                <div class="measurement-name">
                    <div class="measurement-small-icon red">
                        <i class="fa-solid fa-ruler-horizontal"></i>
                    </div>
                    <span>Thigh</span>
                </div>
                <strong>21 in</strong>
            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-heart-pulse"></i>
            Fitness Metrics
        </div>

        <div class="metrics-grid">

            <div class="metric-box">
                <span>Height</span>
                <strong>175 cm</strong>
            </div>

            <div class="metric-box">
                <span>BMI</span>
                <strong>23.7</strong>
                <small class="normal">Normal</small>
            </div>

            <div class="metric-box">
                <span>Body Fat</span>
                <strong>17.5%</strong>
                <small class="normal">Healthy</small>
            </div>

            <div class="metric-box">
                <span>Muscle Mass</span>
                <strong>31.8 kg</strong>
            </div>

    </div>

    </div>

    <div class="progress-message">

        <div class="message-icon">
            <i class="fa-solid fa-trophy"></i>
        </div>

        <div>
            <strong>Great progress!</strong>
            <p>
                You have lost 2.5 kg from your starting weight.
                Keep following your workout and nutrition plan.
            </p>
        </div>

    </div>

    <a href="index.php" class="back-progress-btn">
        <i class="fa-solid fa-arrow-left"></i>
        Back to Progress
    </a>

</div>

<style>
.latest-progress-page{max-width:750px;margin:auto}
.page-heading{margin-bottom:20px}
.heading-left{display:flex;align-items:center;gap:12px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:21px;font-weight:700;margin:3px 0}
.page-heading p{font-size:10px;color:#6b7280;margin:0}
.latest-date-card{background:#eff6ff;border-radius:14px;padding:14px;display:flex;align-items:center;gap:11px;margin-bottom:10px}
.date-icon{width:42px;height:42px;border-radius:10px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center}
.latest-date-card span{display:block;font-size:7px;color:#2563eb;font-weight:700;letter-spacing:.7px}
.latest-date-card strong{display:block;font-size:11px;margin-top:3px}
.latest-date-card small{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.weight-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:16px;padding:19px;display:flex;align-items:center;gap:12px;margin-bottom:10px}
.weight-icon{width:47px;height:47px;border-radius:12px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:18px}
.weight-content{flex:1}
.weight-content>span,.goal-info>span{display:block;font-size:7px;letter-spacing:.8px;opacity:.75}
.weight-content>strong{display:block;font-size:25px;margin:2px 0}
.weight-content>strong small{font-size:12px}
.weight-change{display:inline-flex;align-items:center;gap:5px;font-size:7px;background:rgba(255,255,255,.12);padding:5px 7px;border-radius:10px}
.goal-info{text-align:right}
.goal-info strong{display:block;font-size:16px;margin:3px 0}
.goal-info small{display:block;font-size:7px;opacity:.75}
.card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:10px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:7px}
.card-title i{color:#2563eb}
.measurement-list{display:flex;flex-direction:column}
.measurement-row{display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid #f3f4f6}
.measurement-row:last-child{border-bottom:0}
.measurement-name{display:flex;align-items:center;gap:9px}
.measurement-name>span{font-size:9px}
.measurement-row>strong{font-size:10px}
.measurement-small-icon{width:31px;height:31px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:9px}
.measurement-small-icon.blue{background:#eff6ff;color:#2563eb}
.measurement-small-icon.green{background:#ecfdf5;color:#16a34a}
.measurement-small-icon.orange{background:#fff7ed;color:#ea580c}
.measurement-small-icon.purple{background:#f5f3ff;color:#7c3aed}
.measurement-small-icon.red{background:#fef2f2;color:#dc2626}
.metrics-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:8px}
.metric-box{background:#f8fafc;border-radius:10px;padding:12px}
.metric-box span{display:block;color:#9ca3af;font-size:8px}
.metric-box strong{display:block;font-size:13px;margin-top:4px}
.metric-box small{display:block;font-size:7px;margin-top:4px}
.metric-box small.normal{color:#16a34a}
.progress-message{display:flex;align-items:flex-start;gap:10px;background:#ecfdf5;border-radius:13px;padding:13px;margin-bottom:10px}
.message-icon{width:38px;height:38px;background:#16a34a;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.progress-message strong{font-size:10px;color:#166534}
.progress-message p{font-size:8px;color:#6b7280;line-height:1.6;margin:4px 0 0}
.back-progress-btn{height:41px;background:#fff;border:1px solid #e5e7eb;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;color:#374151;font-size:9px;font-weight:600;margin-bottom:15px}
@media(max-width:500px){
.weight-card{align-items:flex-start;flex-wrap:wrap}
.weight-content{min-width:calc(100% - 60px)}
.goal-info{width:100%;text-align:left;border-top:1px solid rgba(255,255,255,.12);padding-top:10px;margin-top:2px}
.metrics-grid{grid-template-columns:1fr}
}
</style>

<?php include '../includes/footer.php'; ?>