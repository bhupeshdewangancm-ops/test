<?php
$pageTitle = 'My Progress';
include '../includes/header.php';
?>

<div class="progress-page">

    <div class="page-heading">
        <div>
            <span class="page-label">FITNESS</span>
            <h2>My Progress</h2>
            <p>Track your fitness journey and body measurements.</p>
        </div>

        <a href="latest.php" class="latest-btn">
            <i class="fa-solid fa-chart-line"></i>
            Latest Progress
        </a>
    </div>

    <div class="progress-overview">

        <div class="overview-card">
            <div class="overview-icon blue">
                <i class="fa-solid fa-weight-scale"></i>
            </div>
            <div>
                <span>Current Weight</span>
                <strong>72.5 kg</strong>
                <small class="down">
                    <i class="fa-solid fa-arrow-down"></i>
                    2.5 kg
                </small>
            </div>
        </div>

        <div class="overview-card">
            <div class="overview-icon green">
                <i class="fa-solid fa-ruler-vertical"></i>
            </div>
            <div>
                <span>Height</span>
                <strong>175 cm</strong>
                <small>Height</small>
            </div>
        </div>

        <div class="overview-card">
            <div class="overview-icon purple">
                <i class="fa-solid fa-calculator"></i>
            </div>
            <div>
                <span>BMI</span>
                <strong>23.7</strong>
                <small class="normal">Normal</small>
            </div>
        </div>

    </div>

    <div class="section-heading">
        <div>
            <h4>Body Measurements</h4>
            <p>Latest recorded measurements</p>
        </div>
    </div>

    <div class="measurement-grid">

        <div class="measurement-card">
            <div class="measurement-icon blue">
                <i class="fa-solid fa-weight-scale"></i>
            </div>
            <span>Weight</span>
            <strong>72.5 kg</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

        <div class="measurement-card">
            <div class="measurement-icon green">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <span>Chest</span>
            <strong>39 in</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

        <div class="measurement-card">
            <div class="measurement-icon orange">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <span>Waist</span>
            <strong>32 in</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

        <div class="measurement-card">
            <div class="measurement-icon purple">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <span>Hip</span>
            <strong>36 in</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

        <div class="measurement-card">
            <div class="measurement-icon red">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <span>Arm</span>
            <strong>13.5 in</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

        <div class="measurement-card">
            <div class="measurement-icon teal">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <span>Thigh</span>
            <strong>21 in</strong>
            <small>Last updated: 13 Aug 2026</small>
        </div>

    </div>

    <div class="section-heading history-heading">
        <div>
            <h4>Progress History</h4>
            <p>Previous body measurements</p>
        </div>
    </div>

    <div class="history-list">

        <a href="latest.php" class="history-card">
            <div class="history-date">
                <strong>13</strong>
                <span>AUG</span>
            </div>

            <div class="history-info">
                <strong>Latest Measurement</strong>
                <span>Weight 72.5 kg • BMI 23.7</span>
            </div>

            <div class="weight-change down">
                <i class="fa-solid fa-arrow-down"></i>
                1.0 kg
            </div>

            <i class="fa-solid fa-chevron-right history-arrow"></i>
        </a>

        <a href="latest.php" class="history-card">
            <div class="history-date">
                <strong>01</strong>
                <span>AUG</span>
            </div>

            <div class="history-info">
                <strong>Body Measurement</strong>
                <span>Weight 73.5 kg • BMI 24.0</span>
            </div>

            <div class="weight-change down">
                <i class="fa-solid fa-arrow-down"></i>
                1.5 kg
            </div>

            <i class="fa-solid fa-chevron-right history-arrow"></i>
        </a>

        <a href="latest.php" class="history-card">
            <div class="history-date">
                <strong>15</strong>
                <span>JUL</span>
            </div>

            <div class="history-info">
                <strong>Body Measurement</strong>
                <span>Weight 75.0 kg • BMI 24.5</span>
            </div>

            <div class="weight-change neutral">
                Starting
            </div>

            <i class="fa-solid fa-chevron-right history-arrow"></i>
        </a>

    </div>

</div>

<style>
.progress-page{max-width:900px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.latest-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#2563eb;color:#fff;padding:10px 13px;border-radius:8px;font-size:9px;font-weight:600}
.progress-overview{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
.overview-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:14px;display:flex;align-items:center;gap:10px}
.overview-icon{width:43px;height:43px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.overview-icon.blue{background:#eff6ff;color:#2563eb}
.overview-icon.green{background:#ecfdf5;color:#16a34a}
.overview-icon.purple{background:#f5f3ff;color:#7c3aed}
.overview-card span{display:block;color:#9ca3af;font-size:8px}
.overview-card strong{display:block;font-size:15px;margin:4px 0}
.overview-card small{font-size:8px;color:#9ca3af}
.overview-card small.down{color:#16a34a}
.overview-card small.normal{color:#16a34a}
.section-heading{margin:24px 0 11px}
.section-heading h4{font-size:15px;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.measurement-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
.measurement-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:14px}
.measurement-icon{width:35px;height:35px;border-radius:9px;display:flex;align-items:center;justify-content:center;margin-bottom:10px}
.measurement-icon.blue{background:#eff6ff;color:#2563eb}
.measurement-icon.green{background:#ecfdf5;color:#16a34a}
.measurement-icon.orange{background:#fff7ed;color:#ea580c}
.measurement-icon.purple{background:#f5f3ff;color:#7c3aed}
.measurement-icon.red{background:#fef2f2;color:#dc2626}
.measurement-icon.teal{background:#f0fdfa;color:#0f766e}
.measurement-card>span{display:block;color:#9ca3af;font-size:8px}
.measurement-card>strong{display:block;font-size:14px;margin:4px 0}
.measurement-card>small{display:block;color:#9ca3af;font-size:7px}
.history-heading{margin-top:25px}
.history-list{display:flex;flex-direction:column;gap:8px}
.history-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:11px;display:flex;align-items:center;gap:11px;color:#111827}
.history-card:hover{border-color:#dbeafe}
.history-date{width:42px;height:42px;border-radius:10px;background:#eff6ff;color:#2563eb;display:flex;flex-direction:column;align-items:center;justify-content:center;flex-shrink:0}
.history-date strong{font-size:13px;line-height:1}
.history-date span{font-size:7px;font-weight:700;margin-top:3px}
.history-info{flex:1}
.history-info strong{display:block;font-size:10px}
.history-info span{display:block;font-size:8px;color:#9ca3af;margin-top:4px}
.weight-change{font-size:8px;font-weight:600;white-space:nowrap}
.weight-change.down{color:#16a34a}
.weight-change.neutral{color:#9ca3af}
.history-arrow{font-size:8px;color:#9ca3af}
@media(max-width:650px){
.page-heading{align-items:flex-start;flex-direction:column}
.latest-btn{width:100%}
.progress-overview{grid-template-columns:1fr}
.measurement-grid{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:420px){
.measurement-grid{grid-template-columns:1fr}
.history-info span{font-size:7px}
.weight-change{display:none}
}
</style>

<?php include '../includes/footer.php'; ?>