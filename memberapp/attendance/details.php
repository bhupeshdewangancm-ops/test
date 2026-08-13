<?php
$pageTitle = 'Attendance Details';
include '../includes/header.php';
?>

<div class="attendance-details">

    <div class="details-top">
        <a href="history.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div>
            <span class="page-label">ATTENDANCE</span>
            <h2>Attendance Details</h2>
        </div>
    </div>

    <div class="main-status">
        <div class="status-circle">
            <i class="fa-solid fa-check"></i>
        </div>

        <h3>Attendance Verified</h3>
        <p>Friday, 07 August 2026</p>

        <span>
            <i class="fa-solid fa-circle-check"></i>
            Present
        </span>
    </div>

    <div class="info-card">

        <div class="card-title">
            <i class="fa-regular fa-clock"></i>
            <span>Attendance Time</span>
        </div>

        <div class="time-details">

            <div class="big-time">
                <div class="round-icon green">
                    <i class="fa-solid fa-right-to-bracket"></i>
                </div>

                <div>
                    <small>Check In</small>
                    <strong>06:25 AM</strong>
                    <span>QR Code</span>
                </div>
            </div>

            <div class="vertical-line"></div>

            <div class="big-time">
                <div class="round-icon orange">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>

                <div>
                    <small>Check Out</small>
                    <strong>08:00 AM</strong>
                    <span>QR Code</span>
                </div>
            </div>

        </div>

        <div class="duration-box">
            <span>Total Gym Duration</span>
            <strong>1 Hour 35 Minutes</strong>
        </div>

    </div>

    <div class="info-card">

        <div class="card-title">
            <i class="fa-solid fa-building"></i>
            <span>Branch Information</span>
        </div>

        <div class="branch-box">
            <div class="branch-icon">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div>
                <strong>Raipur Main Branch</strong>
                <span>Shankar Nagar, Raipur</span>
                <small>
                    <i class="fa-solid fa-phone"></i>
                    9800000001
                </small>
            </div>
        </div>

    </div>

    <div class="info-card">

        <div class="card-title">
            <i class="fa-solid fa-location-dot"></i>
            <span>Location Verification</span>
        </div>

        <div class="location-grid">

            <div>
                <small>Check In Latitude</small>
                <strong>21.2514200</strong>
            </div>

            <div>
                <small>Check In Longitude</small>
                <strong>81.6297000</strong>
            </div>

            <div>
                <small>Check In Accuracy</small>
                <strong>6.80 m</strong>
            </div>

            <div>
                <small>Check Out Latitude</small>
                <strong>21.2514280</strong>
            </div>

            <div>
                <small>Check Out Longitude</small>
                <strong>81.6297080</strong>
            </div>

            <div>
                <small>Check Out Accuracy</small>
                <strong>7.20 m</strong>
            </div>

        </div>

        <div class="verified-message">
            <i class="fa-solid fa-circle-check"></i>
            Location successfully verified within gym geofence.
        </div>

    </div>

    <div class="info-card">

        <div class="card-title">
            <i class="fa-regular fa-note-sticky"></i>
            <span>Notes</span>
        </div>

        <div class="note-box">
            Successful geofence QR attendance.
        </div>

    </div>

</div>

<style>
.attendance-details{max-width:800px;margin:auto}
.details-top{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.back-btn{width:38px;height:38px;border:1px solid #e5e7eb;background:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.details-top h2{font-size:21px;margin:3px 0 0;font-weight:700}
.main-status{background:#fff;border:1px solid #eef0f4;border-radius:17px;text-align:center;padding:25px 15px;margin-bottom:13px}
.status-circle{width:58px;height:58px;border-radius:50%;background:#ecfdf5;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:24px;margin:auto}
.main-status h3{font-size:17px;margin:12px 0 4px}
.main-status p{font-size:10px;color:#9ca3af;margin:0 0 10px}
.main-status span{display:inline-flex;align-items:center;gap:5px;color:#16a34a;background:#ecfdf5;padding:6px 11px;border-radius:20px;font-size:9px}
.info-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:12px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:15px}
.card-title i{color:#2563eb}
.time-details{display:flex;align-items:center;justify-content:center;gap:40px}
.big-time{display:flex;align-items:center;gap:10px}
.round-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center}
.round-icon.green{background:#ecfdf5;color:#16a34a}
.round-icon.orange{background:#fff7ed;color:#ea580c}
.big-time small{display:block;font-size:8px;color:#9ca3af}
.big-time strong{display:block;font-size:15px;margin:3px 0}
.big-time span{display:block;font-size:8px;color:#9ca3af}
.vertical-line{height:42px;width:1px;background:#e5e7eb}
.duration-box{margin-top:18px;background:#f8fafc;border-radius:9px;padding:11px;text-align:center}
.duration-box span{display:block;color:#9ca3af;font-size:9px}
.duration-box strong{display:block;font-size:12px;margin-top:4px}
.branch-box{display:flex;align-items:center;gap:12px}
.branch-icon{width:45px;height:45px;background:#eff6ff;color:#2563eb;border-radius:11px;display:flex;align-items:center;justify-content:center}
.branch-box strong{display:block;font-size:12px}
.branch-box span{display:block;color:#6b7280;font-size:9px;margin-top:3px}
.branch-box small{display:block;color:#9ca3af;font-size:8px;margin-top:4px}
.location-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:15px}
.location-grid small{display:block;color:#9ca3af;font-size:8px}
.location-grid strong{display:block;font-size:10px;margin-top:4px}
.verified-message{display:flex;align-items:center;gap:7px;background:#ecfdf5;color:#15803d;border-radius:8px;padding:10px;margin-top:15px;font-size:9px}
.note-box{background:#f8fafc;border-radius:9px;padding:12px;color:#374151;font-size:10px}
@media(max-width:600px){
.time-details{gap:15px}
.big-time{gap:7px}
.vertical-line{height:35px}
.location-grid{grid-template-columns:1fr 1fr}
}
@media(max-width:400px){
.time-details{justify-content:space-between;gap:8px}
.big-time strong{font-size:13px}
.round-icon{width:37px;height:37px}
}
</style>

<?php include '../includes/footer.php'; ?>