<?php
$pageTitle = 'Attendance History';
include '../includes/header.php';
?>

<div class="attendance-history">

    <div class="page-heading">
        <div>
            <span class="page-label">ATTENDANCE</span>
            <h2>Attendance History</h2>
            <p>View your previous gym attendance.</p>
        </div>
    </div>

    <div class="summary-grid">

        <div class="summary-card">
            <div class="summary-icon blue">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <small>Total Attendance</small>
                <strong>18</strong>
                <span>This Month</span>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon green">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <small>Present Days</small>
                <strong>18</strong>
                <span>100% Attendance</span>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon orange">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <small>Avg. Duration</small>
                <strong>1h 35m</strong>
                <span>Per Visit</span>
            </div>
        </div>

    </div>

    <div class="filter-card">

        <div class="filter-title">
            <i class="fa-solid fa-filter"></i>
            <span>Filter Attendance</span>
        </div>

        <div class="filter-row">
            <div>
                <label>From Date</label>
                <input type="date" value="2026-08-01">
            </div>

            <div>
                <label>To Date</label>
                <input type="date" value="2026-08-07">
            </div>

            <button type="button" class="filter-btn">
                <i class="fa-solid fa-filter"></i>
                Apply Filter
            </button>
        </div>

    </div>

    <div class="history-header">
        <div>
            <h4>Attendance Records</h4>
            <small>August 2026</small>
        </div>
        <span class="record-count">18 Records</span>
    </div>

    <div class="attendance-list">

        <div class="attendance-item">
            <div class="history-date">
                <strong>07</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <strong>Raipur Main Branch</strong>
                <span>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    06:25 AM
                    <b>•</b>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    08:00 AM
                </span>
            </div>

            <div class="history-duration">
                <strong>1h 35m</strong>
                <span>Duration</span>
            </div>

            <span class="present-badge">Present</span>

            <a href="details.php" class="history-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>

        <div class="attendance-item">
            <div class="history-date">
                <strong>06</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <strong>Raipur Main Branch</strong>
                <span>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    06:30 AM
                    <b>•</b>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    08:05 AM
                </span>
            </div>

            <div class="history-duration">
                <strong>1h 35m</strong>
                <span>Duration</span>
            </div>

            <span class="present-badge">Present</span>

            <a href="details.php" class="history-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>

        <div class="attendance-item">
            <div class="history-date">
                <strong>05</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <strong>Raipur Main Branch</strong>
                <span>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    06:20 AM
                    <b>•</b>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    07:55 AM
                </span>
            </div>

            <div class="history-duration">
                <strong>1h 35m</strong>
                <span>Duration</span>
            </div>

            <span class="present-badge">Present</span>

            <a href="details.php" class="history-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>

        <div class="attendance-item">
            <div class="history-date">
                <strong>04</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <strong>Raipur Main Branch</strong>
                <span>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    06:28 AM
                    <b>•</b>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    08:10 AM
                </span>
            </div>

            <div class="history-duration">
                <strong>1h 42m</strong>
                <span>Duration</span>
            </div>

            <span class="present-badge">Present</span>

            <a href="details.php" class="history-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>

        <div class="attendance-item">
            <div class="history-date">
                <strong>03</strong>
                <small>AUG</small>
            </div>

            <div class="history-info">
                <strong>Raipur Main Branch</strong>
                <span>
                    <i class="fa-solid fa-right-to-bracket"></i>
                    06:35 AM
                    <b>•</b>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    08:00 AM
                </span>
            </div>

            <div class="history-duration">
                <strong>1h 25m</strong>
                <span>Duration</span>
            </div>

            <span class="present-badge">Present</span>

            <a href="details.php" class="history-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>

    </div>

</div>

<style>
.attendance-history{max-width:1000px;margin:auto}
.page-heading{margin-bottom:22px}
.page-label{font-size:10px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:24px;font-weight:700;margin:5px 0}
.page-heading p{font-size:12px;color:#6b7280;margin:0}
.summary-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
.summary-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px;display:flex;align-items:center;gap:12px}
.summary-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center}
.summary-icon.blue{background:#eff6ff;color:#2563eb}
.summary-icon.green{background:#ecfdf5;color:#16a34a}
.summary-icon.orange{background:#fff7ed;color:#ea580c}
.summary-card small{display:block;font-size:9px;color:#9ca3af}
.summary-card strong{display:block;font-size:18px;margin:3px 0}
.summary-card span{font-size:8px;color:#16a34a}
.filter-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:16px;margin-top:15px}
.filter-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:600;margin-bottom:13px}
.filter-title i{color:#2563eb}
.filter-row{display:grid;grid-template-columns:1fr 1fr auto;gap:12px;align-items:end}
.filter-row label{display:block;font-size:9px;color:#6b7280;margin-bottom:5px}
.filter-row input{width:100%;height:39px;border:1px solid #d1d5db;border-radius:7px;padding:0 10px;font-size:11px}
.filter-btn{height:39px;border:0;border-radius:7px;background:#2563eb;color:#fff;padding:0 16px;font-size:10px}
.history-header{display:flex;align-items:center;justify-content:space-between;margin:24px 0 12px}
.history-header h4{font-size:15px;margin:0}
.history-header small{font-size:9px;color:#9ca3af}
.record-count{font-size:9px;background:#eff6ff;color:#2563eb;padding:6px 9px;border-radius:15px}
.attendance-list{display:flex;flex-direction:column;gap:9px}
.attendance-item{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:12px;display:flex;align-items:center;gap:12px}
.history-date{width:43px;height:47px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;flex-direction:column;align-items:center;justify-content:center;flex-shrink:0}
.history-date strong{font-size:16px;line-height:16px}
.history-date small{font-size:7px;margin-top:3px}
.history-info{flex:1;min-width:0}
.history-info strong{display:block;font-size:11px}
.history-info span{display:block;color:#9ca3af;font-size:8px;margin-top:5px}
.history-info i{font-size:7px;color:#2563eb}
.history-info b{font-weight:400;margin:0 3px}
.history-duration{text-align:right}
.history-duration strong{display:block;font-size:10px}
.history-duration span{font-size:8px;color:#9ca3af}
.present-badge{font-size:8px;color:#16a34a;background:#ecfdf5;padding:5px 7px;border-radius:12px}
.history-arrow{color:#9ca3af;font-size:10px}
@media(max-width:700px){
.summary-grid{grid-template-columns:1fr}
.filter-row{grid-template-columns:1fr 1fr}
.filter-btn{grid-column:1/-1}
.attendance-item{align-items:flex-start}
.history-duration{display:none}
.present-badge{margin-left:auto}
}
@media(max-width:480px){
.filter-row{grid-template-columns:1fr}
.filter-btn{grid-column:auto}
.attendance-item{gap:8px}
.history-info span{font-size:7px}
}
</style>

<?php include '../includes/footer.php'; ?>