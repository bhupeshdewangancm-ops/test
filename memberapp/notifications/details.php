<?php
$pageTitle = 'Notification Details';
include '../includes/header.php';
?>

<div class="notification-details">

    <div class="details-heading">
        <a href="index.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div>
            <span class="page-label">NOTIFICATION</span>
            <h2>Notification Details</h2>
        </div>
    </div>

    <div class="notification-detail-card">

        <div class="detail-icon">
            <i class="fa-solid fa-dumbbell"></i>
        </div>

        <span class="detail-type">WORKOUT</span>

        <h3>Today's Workout Assigned</h3>

        <div class="detail-date">
            <i class="fa-regular fa-clock"></i>
            13 August 2026, 06:00 AM
        </div>

        <div class="detail-divider"></div>

        <p>
            Your trainer has assigned a new workout plan for today.
            Please complete the assigned exercises according to your
            workout schedule.
        </p>

        <div class="workout-summary">

            <div>
                <small>Workout Plan</small>
                <strong>Weight Loss Beginner Plan</strong>
            </div>

            <div>
                <small>Exercises</small>
                <strong>6 Exercises</strong>
            </div>

            <div>
                <small>Duration</small>
                <strong>45 Minutes</strong>
            </div>

        </div>

        <a href="../workout/current.php" class="action-btn">
            <i class="fa-solid fa-dumbbell"></i>
            View Workout
        </a>

    </div>

</div>

<style>
.notification-details{max-width:700px;margin:auto}
.details-heading{display:flex;align-items:center;gap:12px;margin-bottom:20px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.details-heading h2{font-size:21px;margin:3px 0 0}
.notification-detail-card{background:#fff;border:1px solid #eef0f4;border-radius:17px;padding:25px;text-align:center}
.detail-icon{width:60px;height:60px;border-radius:16px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:23px;margin:0 auto 13px}
.detail-type{font-size:8px;color:#2563eb;font-weight:700;letter-spacing:1px}
.notification-detail-card h3{font-size:18px;margin:7px 0}
.detail-date{font-size:9px;color:#9ca3af}
.detail-date i{margin-right:4px}
.detail-divider{height:1px;background:#eef0f4;margin:20px 0}
.notification-detail-card>p{font-size:11px;line-height:1.7;color:#6b7280;margin:0 auto;max-width:550px}
.workout-summary{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;background:#f8fafc;border-radius:12px;padding:13px;margin-top:20px;text-align:left}
.workout-summary>div{padding:5px 8px}
.workout-summary small{display:block;color:#9ca3af;font-size:8px}
.workout-summary strong{display:block;font-size:9px;margin-top:5px}
.action-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#2563eb;color:#fff;border-radius:9px;height:43px;margin-top:20px;font-size:10px;font-weight:600}
@media(max-width:500px){
.notification-detail-card{padding:20px 15px}
.workout-summary{grid-template-columns:1fr}
}
</style>

<?php include '../includes/footer.php'; ?>