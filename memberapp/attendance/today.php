<?php
$pageTitle = 'Today Attendance';
include '../includes/header.php';
?>

<div class="attendance-page">

    <div class="page-heading">
        <div>
            <span class="page-label">ATTENDANCE</span>
            <h2>Today's Attendance</h2>
            <p>Track your gym attendance for today.</p>
        </div>
        <div class="date-box">
            <i class="fa-regular fa-calendar"></i>
            <span>07 Aug 2026</span>
        </div>
    </div>

    <div class="attendance-status-card">
        <div class="status-top">
            <div class="status-icon">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <span class="status-label">ATTENDANCE STATUS</span>
                <h3>Present</h3>
            </div>
            <span class="status-badge">Checked Out</span>
        </div>

        <div class="attendance-times">
            <div class="time-item">
                <div class="time-icon checkin">
                    <i class="fa-solid fa-right-to-bracket"></i>
                </div>
                <div>
                    <small>Check In</small>
                    <strong>06:25 AM</strong>
                </div>
            </div>

            <div class="time-line"></div>

            <div class="time-item">
                <div class="time-icon checkout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
                <div>
                    <small>Check Out</small>
                    <strong>08:00 AM</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="section-title-row">
        <div>
            <h4>Attendance Details</h4>
            <p>Today's attendance information</p>
        </div>
    </div>

    <div class="detail-grid">

        <div class="detail-card">
            <div class="detail-icon blue">
                <i class="fa-solid fa-building"></i>
            </div>
            <div>
                <small>Branch</small>
                <strong>Raipur Main Branch</strong>
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-icon purple">
                <i class="fa-solid fa-calendar-day"></i>
            </div>
            <div>
                <small>Date</small>
                <strong>07 August 2026</strong>
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-icon green">
                <i class="fa-solid fa-qrcode"></i>
            </div>
            <div>
                <small>Check In Method</small>
                <strong>QR Code</strong>
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-icon orange">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
                <small>Location</small>
                <strong>Gym Branch</strong>
            </div>
        </div>

    </div>

    <div class="location-card">
        <div class="location-header">
            <div class="location-icon">
                <i class="fa-solid fa-location-crosshairs"></i>
            </div>
            <div>
                <h4>Location Verified</h4>
                <p>Your attendance was successfully verified.</p>
            </div>
            <span class="verified-badge">
                <i class="fa-solid fa-check"></i>
                Verified
            </span>
        </div>

        <div class="location-data">
            <div>
                <small>Latitude</small>
                <strong>21.251420</strong>
            </div>

            <div>
                <small>Longitude</small>
                <strong>81.629700</strong>
            </div>

            <div>
                <small>Accuracy</small>
                <strong>6.80 m</strong>
            </div>
        </div>
    </div>

    <div class="notes-card">
        <div class="notes-icon">
            <i class="fa-regular fa-note-sticky"></i>
        </div>
        <div>
            <small>Attendance Note</small>
            <p>Successful geofence QR attendance.</p>
        </div>
    </div>

</div>

<style>
.attendance-page{max-width:1000px;margin:auto}
.page-heading{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:22px}
.page-label{font-size:10px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:24px;font-weight:700;margin:5px 0}
.page-heading p{margin:0;color:#6b7280;font-size:12px}
.date-box{display:flex;align-items:center;gap:8px;padding:10px 13px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;font-size:11px;color:#374151}
.date-box i{color:#2563eb}
.attendance-status-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);border-radius:18px;padding:22px;color:#fff;margin-bottom:22px;box-shadow:0 8px 25px rgba(37,99,235,.18)}
.status-top{display:flex;align-items:center;gap:12px}
.status-icon{width:45px;height:45px;background:rgba(255,255,255,.15);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:20px}
.status-label{font-size:9px;opacity:.75;letter-spacing:.7px}
.status-top h3{font-size:20px;margin:3px 0 0}
.status-badge{margin-left:auto;background:#fff;color:#2563eb;padding:6px 10px;border-radius:20px;font-size:9px;font-weight:600}
.attendance-times{display:flex;align-items:center;margin-top:25px}
.time-item{display:flex;align-items:center;gap:10px}
.time-icon{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center}
.time-icon.checkin{background:rgba(255,255,255,.16)}
.time-icon.checkout{background:rgba(255,255,255,.16)}
.time-item small{display:block;font-size:9px;opacity:.7}
.time-item strong{display:block;font-size:14px;margin-top:2px}
.time-line{height:1px;background:rgba(255,255,255,.3);width:70px;margin:0 15px}
.section-title-row{margin:25px 0 12px}
.section-title-row h4{font-size:16px;margin:0;font-weight:700}
.section-title-row p{font-size:10px;color:#9ca3af;margin:4px 0 0}
.detail-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
.detail-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:15px;display:flex;align-items:center;gap:12px}
.detail-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center}
.detail-icon.blue{background:#eff6ff;color:#2563eb}
.detail-icon.purple{background:#f5f3ff;color:#7c3aed}
.detail-icon.green{background:#ecfdf5;color:#16a34a}
.detail-icon.orange{background:#fff7ed;color:#ea580c}
.detail-card small{display:block;color:#9ca3af;font-size:9px}
.detail-card strong{display:block;color:#1f2937;font-size:12px;margin-top:4px}
.location-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-top:12px}
.location-header{display:flex;align-items:center;gap:11px}
.location-icon{width:40px;height:40px;border-radius:10px;background:#ecfdf5;color:#16a34a;display:flex;align-items:center;justify-content:center}
.location-header h4{font-size:13px;margin:0}
.location-header p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.verified-badge{margin-left:auto;color:#16a34a;background:#ecfdf5;padding:5px 8px;border-radius:15px;font-size:9px}
.location-data{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid #f0f0f0;margin-top:15px;padding-top:15px}
.location-data small{display:block;color:#9ca3af;font-size:9px}
.location-data strong{display:block;font-size:11px;margin-top:4px}
.notes-card{display:flex;align-items:center;gap:12px;background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px;margin-top:12px}
.notes-icon{width:38px;height:38px;background:#eff6ff;color:#2563eb;border-radius:9px;display:flex;align-items:center;justify-content:center}
.notes-card small{font-size:9px;color:#9ca3af}
.notes-card p{font-size:11px;margin:4px 0 0;color:#374151}
@media(max-width:600px){
.page-heading{align-items:flex-start;flex-direction:column}
.date-box{width:100%}
.detail-grid{grid-template-columns:1fr}
.location-data{grid-template-columns:1fr;gap:12px}
.status-badge{font-size:8px}
.time-line{width:35px;margin:0 8px}
}
</style>

<?php include '../includes/footer.php'; ?>