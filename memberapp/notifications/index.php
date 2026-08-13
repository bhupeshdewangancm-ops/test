<?php
$pageTitle = 'Notifications';
include '../includes/header.php';
?>

<div class="notification-page">

    <div class="page-heading">
        <div>
            <span class="page-label">UPDATES</span>
            <h2>Notifications</h2>
            <p>Stay updated with your gym activities.</p>
        </div>

        <a href="unread.php" class="unread-btn">
            <i class="fa-solid fa-envelope"></i>
            Unread
            <span>3</span>
        </a>
    </div>

    <div class="notification-tabs">
        <a href="index.php" class="active">All</a>
        <a href="unread.php">Unread</a>
    </div>

    <div class="notification-list">

        <a href="details.php" class="notification-card unread">

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

            <div class="unread-dot"></div>

        </a>

        <a href="details.php" class="notification-card unread">

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

            <div class="unread-dot"></div>

        </a>

        <a href="details.php" class="notification-card unread">

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

            <div class="unread-dot"></div>

        </a>

        <a href="details.php" class="notification-card">

            <div class="notification-icon purple">
                <i class="fa-solid fa-chart-line"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Progress Updated</h4>
                    <span>2 days ago</span>
                </div>

                <p>Your latest body measurements have been added successfully.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    11 Aug 2026
                </small>
            </div>

        </a>

        <a href="details.php" class="notification-card">

            <div class="notification-icon red">
                <i class="fa-solid fa-bullhorn"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Gym Announcement</h4>
                    <span>3 days ago</span>
                </div>

                <p>New morning workout batch is now available.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    10 Aug 2026
                </small>
            </div>

        </a>

        <a href="details.php" class="notification-card">

            <div class="notification-icon blue">
                <i class="fa-solid fa-id-card"></i>
            </div>

            <div class="notification-content">
                <div class="notification-top">
                    <h4>Membership Reminder</h4>
                    <span>5 days ago</span>
                </div>

                <p>Your membership will expire in 24 days.</p>

                <small>
                    <i class="fa-regular fa-clock"></i>
                    08 Aug 2026
                </small>
            </div>

        </a>

    </div>

</div>

<style>
.notification-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:18px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.unread-btn{display:flex;align-items:center;gap:7px;background:#2563eb;color:#fff;border-radius:8px;padding:9px 11px;font-size:9px}
.unread-btn span{background:#fff;color:#2563eb;width:16px;height:16px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:8px;font-weight:700}
.notification-tabs{display:flex;gap:5px;border-bottom:1px solid #e5e7eb;margin-bottom:12px}
.notification-tabs a{padding:9px 15px;color:#6b7280;font-size:10px;font-weight:600}
.notification-tabs a.active{color:#2563eb;border-bottom:2px solid #2563eb}
.notification-list{display:flex;flex-direction:column;gap:8px}
.notification-card{position:relative;background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:13px;display:flex;align-items:flex-start;gap:11px;color:#111827;transition:.2s}
.notification-card:hover{border-color:#dbeafe;box-shadow:0 4px 15px rgba(15,23,42,.04)}
.notification-card.unread{background:#fafdff}
.notification-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.notification-icon.blue{background:#eff6ff;color:#2563eb}
.notification-icon.green{background:#ecfdf5;color:#16a34a}
.notification-icon.orange{background:#fff7ed;color:#ea580c}
.notification-icon.purple{background:#f5f3ff;color:#7c3aed}
.notification-icon.red{background:#fef2f2;color:#dc2626}
.notification-content{flex:1;min-width:0}
.notification-top{display:flex;align-items:center;justify-content:space-between;gap:10px}
.notification-top h4{font-size:11px;font-weight:700;margin:0}
.notification-top span{font-size:8px;color:#9ca3af;white-space:nowrap}
.notification-content p{font-size:9px;color:#6b7280;margin:5px 0}
.notification-content small{font-size:8px;color:#9ca3af}
.notification-content small i{margin-right:3px}
.unread-dot{width:7px;height:7px;background:#2563eb;border-radius:50%;margin-top:5px;flex-shrink:0}
@media(max-width:550px){
.page-heading{align-items:flex-start;flex-direction:column}
.unread-btn{width:100%;justify-content:center}
.notification-top{align-items:flex-start;flex-direction:column;gap:3px}
}
</style>

<?php include '../includes/footer.php'; ?>