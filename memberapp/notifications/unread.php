<?php
$pageTitle = 'Unread Notifications';
include '../includes/header.php';
?>

<div class="unread-page">

    <div class="page-heading">
        <div>
            <span class="page-label">UPDATES</span>
            <h2>Unread Notifications</h2>
            <p>Notifications that need your attention.</p>
        </div>

        <a href="index.php" class="back-link">
            <i class="fa-solid fa-bell"></i>
            All Notifications
        </a>
    </div>

    <div class="unread-summary">

        <div class="summary-icon">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div>
            <small>UNREAD NOTIFICATIONS</small>
            <strong>3</strong>
            <span>You have 3 new updates.</span>
        </div>

    </div>

    <div class="notification-list">

        <a href="details.php" class="notification-card">

            <div class="notification-icon blue">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Today's Workout Assigned</h4>
                    <span>10 min ago</span>
                </div>

                <p>Your trainer has assigned a new workout plan for today.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    Today, 06:00 AM
                </small>
            </div>

            <span class="new-badge">NEW</span>

        </a>

        <a href="details.php" class="notification-card">

            <div class="notification-icon green">
                <i class="fa-solid fa-calendar-check"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Attendance Marked</h4>
                    <span>2 hrs ago</span>
                </div>

                <p>Your attendance has been successfully marked for today.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    Today, 06:25 AM
                </small>
            </div>

            <span class="new-badge">NEW</span>

        </a>

        <a href="details.php" class="notification-card">

            <div class="notification-icon orange">
                <i class="fa-solid fa-file-invoice"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Payment Reminder</h4>
                    <span>Yesterday</span>
                </div>

                <p>You have a pending payment of ₹1,500.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    12 Aug 2026
                </small>
            </div>

            <span class="new-badge">NEW</span>

        </a>

    </div>

    <div class="read-info">
        <i class="fa-solid fa-circle-info"></i>
        <span>Open a notification to view its complete details.</span>
    </div>

</div>

<style>
.unread-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.back-link{display:flex;align-items:center;gap:7px;color:#2563eb;font-size:9px;font-weight:600;background:#eff6ff;padding:9px 11px;border-radius:8px}
.unread-summary{display:flex;align-items:center;gap:12px;background:#eff6ff;border-radius:14px;padding:16px;margin-bottom:15px}
.summary-icon{width:45px;height:45px;border-radius:11px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center}
.unread-summary small{display:block;color:#2563eb;font-size:8px;font-weight:700;letter-spacing:.5px}
.unread-summary strong{display:block;font-size:18px;margin:3px 0}
.unread-summary span{display:block;color:#6b7280;font-size:8px}
.notification-list{display:flex;flex-direction:column;gap:9px}
.notification-card{background:#fff;border:1px solid #dbeafe;border-radius:13px;padding:13px;display:flex;align-items:flex-start;gap:11px;color:#111827}
.notification-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.notification-icon.blue{background:#eff6ff;color:#2563eb}
.notification-icon.green{background:#ecfdf5;color:#16a34a}
.notification-icon.orange{background:#fff7ed;color:#ea580c}
.notification-content{flex:1;min-width:0}
.notification-top{display:flex;align-items:center;justify-content:space-between;gap:10px}
.notification-top h4{font-size:11px;font-weight:700;margin:0}
.notification-top span{font-size:8px;color:#9ca3af;white-space:nowrap}
.notification-content p{font-size:9px;color:#6b7280;margin:5px 0}
.notification-content small{font-size:8px;color:#9ca3af}
.notification-content small i{margin-right:3px}
.new-badge{background:#2563eb;color:#fff;font-size:7px;font-weight:700;padding:4px 6px;border-radius:10px}
.read-info{display:flex;align-items:center;gap:8px;background:#f8fafc;color:#9ca3af;border-radius:10px;padding:12px;margin-top:15px;font-size:8px}
.read-info i{color:#2563eb}
@media(max-width:550px){
.page-heading{align-items:flex-start;flex-direction:column}
.back-link{width:100%;justify-content:center}
.notification-top{align-items:flex-start;flex-direction:column;gap:3px}
}
</style>

<?php include '../includes/footer.php'; ?>