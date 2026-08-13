<?php
$pageTitle = 'Member Dashboard';
include '../includes/header.php';
?>

<div class="dashboard-page">

    <div class="welcome-section">
        <div>
            <span class="welcome-label">GOOD MORNING</span>
            <h2>Hello, Rohan 👋</h2>
            <p>Ready for your workout today?</p>
        </div>
        <a href="<?= $baseUrl ?>/profile/index.php" class="profile-avatar">R</a>
    </div>

    <div class="membership-card">
        <div class="membership-top">
            <div>
                <span>MEMBERSHIP</span>
                <h3>Premium Plan</h3>
            </div>
            <div class="active-badge">
                <i class="fa-solid fa-circle"></i>
                Active
            </div>
        </div>

        <div class="membership-info">
            <div>
                <small>Start Date</small>
                <strong>07 Aug 2026</strong>
            </div>
            <div>
                <small>Expiry Date</small>
                <strong>06 Sep 2026</strong>
            </div>
            <div>
                <small>Days Left</small>
                <strong>24 Days</strong>
            </div>
        </div>

        <div class="membership-progress">
            <div class="progress-info">
                <span>Membership Progress</span>
                <strong>20%</strong>
            </div>
            <div class="progress-track">
                <div class="progress-value"></div>
            </div>
        </div>
    </div>

    <div class="section-heading">
        <div>
            <h4>Quick Overview</h4>
            <p>Your gym activity summary</p>
        </div>
    </div>

    <div class="stats-grid">

        <a href="<?= $baseUrl ?>/attendance/history.php" class="stat-card">
            <div class="stat-icon blue">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <small>Attendance</small>
                <strong>18</strong>
                <span>This Month</span>
            </div>
        </a>

        <a href="<?= $baseUrl ?>/workouts/history.php" class="stat-card">
            <div class="stat-icon purple">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <div>
                <small>Workouts</small>
                <strong>14</strong>
                <span>Completed</span>
            </div>
        </a>

        <a href="<?= $baseUrl ?>/workouts/history.php" class="stat-card">
            <div class="stat-icon green">
                <i class="fa-solid fa-fire"></i>
            </div>
            <div>
                <small>Workout Streak</small>
                <strong>7</strong>
                <span>Days</span>
            </div>
        </a>

        <a href="<?= $baseUrl ?>/progress/index.php" class="stat-card">
            <div class="stat-icon orange">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <div>
                <small>Progress</small>
                <strong>+4.2%</strong>
                <span>This Month</span>
            </div>
        </a>

    </div>

    <div class="section-heading">
        <div>
            <h4>Today's Workout</h4>
            <p>Your assigned workout plan</p>
        </div>
        <a href="<?= $baseUrl ?>/workouts/current.php">View All</a>
    </div>

    <div class="workout-card">

        <div class="workout-header">
            <div class="workout-icon">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div class="workout-title">
                <span>MONDAY WORKOUT</span>
                <h3>Weight Loss Beginner Plan</h3>
            </div>

            <span class="workout-status">Active</span>
        </div>

        <div class="workout-meta">

            <div>
                <i class="fa-solid fa-list-check"></i>
                <span>6 Exercises</span>
            </div>

            <div>
                <i class="fa-regular fa-clock"></i>
                <span>45 Minutes</span>
            </div>

            <div>
                <i class="fa-solid fa-fire"></i>
                <span>Moderate</span>
            </div>

        </div>

        <a href="<?= $baseUrl ?>/workouts/current.php" class="start-workout-btn">
            <i class="fa-solid fa-play"></i>
            View Today's Workout
        </a>

    </div>

    <div class="section-heading">
        <div>
            <h4>Today's Attendance</h4>
            <p>Your latest gym visit</p>
        </div>
        <a href="<?= $baseUrl ?>/attendance/today.php">Details</a>
    </div>

    <div class="attendance-card">

        <div class="attendance-status">
            <div class="attendance-icon">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <div>
                <span>Status</span>
                <strong>Present</strong>
            </div>
        </div>

        <div class="attendance-time">

            <div>
                <small>Check In</small>
                <strong>06:25 AM</strong>
            </div>

            <div class="time-separator">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <small>Check Out</small>
                <strong>08:00 AM</strong>
            </div>

        </div>

    </div>

    <div class="section-heading">
        <div>
            <h4>Quick Actions</h4>
            <p>Access your gym features</p>
        </div>
    </div>

    <div class="quick-actions">

        <a href="<?= $baseUrl ?>/attendance/history.php" class="action-card">
            <div class="action-icon blue">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <span>Attendance</span>
            <small>View history</small>
        </a>

        <a href="<?= $baseUrl ?>/workouts/current.php" class="action-card">
            <div class="action-icon purple">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <span>Workout</span>
            <small>Today's plan</small>
        </a>

        <a href="<?= $baseUrl ?>/progress/index.php" class="action-card">
            <div class="action-icon green">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <span>Progress</span>
            <small>Track progress</small>
        </a>

        <a href="<?= $baseUrl ?>/subscriptions/current.php" class="action-card">
            <div class="action-icon orange">
                <i class="fa-solid fa-id-card"></i>
            </div>
            <span>Membership</span>
            <small>View plan</small>
        </a>

    </div>

    <div class="announcement-card">

        <div class="announcement-icon">
            <i class="fa-solid fa-bullhorn"></i>
        </div>

        <div>
            <span>GYM ANNOUNCEMENT</span>
            <h4>New morning workout batch available</h4>
            <p>Ask your trainer for more information.</p>
        </div>

    </div>

</div>

<style>
.dashboard-page{max-width:1000px;margin:auto}
.welcome-section{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
.welcome-label{font-size:9px;font-weight:700;color:#2563eb;letter-spacing:1px}
.welcome-section h2{font-size:23px;font-weight:700;margin:5px 0}
.welcome-section p{font-size:11px;color:#6b7280;margin:0}
.profile-avatar{width:45px;height:45px;border-radius:50%;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;font-weight:700;text-decoration:none}
.membership-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:18px;padding:20px;box-shadow:0 8px 25px rgba(37,99,235,.18)}
.membership-top{display:flex;align-items:flex-start;justify-content:space-between}
.membership-top span{font-size:8px;opacity:.7;letter-spacing:1px}
.membership-top h3{font-size:18px;margin:5px 0 0}
.active-badge{background:rgba(255,255,255,.16);border-radius:20px;padding:6px 9px;font-size:8px}
.active-badge i{font-size:6px;margin-right:4px}
.membership-info{display:grid;grid-template-columns:repeat(3,1fr);gap:15px;margin-top:22px}
.membership-info small{display:block;font-size:8px;opacity:.65}
.membership-info strong{display:block;font-size:11px;margin-top:4px}
.membership-progress{margin-top:20px}
.progress-info{display:flex;justify-content:space-between;font-size:8px;opacity:.8;margin-bottom:6px}
.progress-track{height:5px;background:rgba(255,255,255,.2);border-radius:10px;overflow:hidden}
.progress-value{height:100%;width:20%;background:#fff;border-radius:10px}
.section-heading{display:flex;align-items:center;justify-content:space-between;margin:24px 0 11px}
.section-heading h4{font-size:15px;font-weight:700;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.section-heading a{font-size:10px;color:#2563eb;font-weight:600;text-decoration:none}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:10px}
.stat-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:13px;display:flex;align-items:center;gap:10px;text-decoration:none;color:#111827}
.stat-card:hover{border-color:#bfdbfe}
.stat-icon{width:39px;height:39px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.stat-icon.blue{background:#eff6ff;color:#2563eb}
.stat-icon.purple{background:#f5f3ff;color:#7c3aed}
.stat-icon.green{background:#ecfdf5;color:#16a34a}
.stat-icon.orange{background:#fff7ed;color:#ea580c}
.stat-card small{display:block;color:#9ca3af;font-size:8px}
.stat-card strong{display:block;font-size:16px;margin:3px 0}
.stat-card span{display:block;color:#9ca3af;font-size:7px}
.workout-card{background:#fff;border:1px solid #eef0f4;border-radius:15px;padding:17px}
.workout-header{display:flex;align-items:center;gap:11px}
.workout-icon{width:43px;height:43px;border-radius:11px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.workout-title{flex:1}
.workout-title span{font-size:8px;color:#2563eb;font-weight:700}
.workout-title h3{font-size:13px;margin:3px 0 0}
.workout-status{font-size:8px;color:#16a34a;background:#ecfdf5;padding:5px 8px;border-radius:15px}
.workout-meta{display:flex;gap:20px;border-top:1px solid #f0f0f0;border-bottom:1px solid #f0f0f0;margin:15px 0;padding:11px 0}
.workout-meta div{display:flex;align-items:center;gap:6px;color:#6b7280;font-size:9px}
.workout-meta i{color:#2563eb}
.start-workout-btn{height:40px;background:#2563eb;color:#fff;border-radius:8px;display:flex;align-items:center;justify-content:center;gap:7px;font-size:10px;font-weight:600;text-decoration:none}
.attendance-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px;display:flex;align-items:center;justify-content:space-between}
.attendance-status{display:flex;align-items:center;gap:10px}
.attendance-icon{width:40px;height:40px;background:#ecfdf5;color:#16a34a;border-radius:10px;display:flex;align-items:center;justify-content:center}
.attendance-status span{display:block;color:#9ca3af;font-size:8px}
.attendance-status strong{display:block;font-size:12px;margin-top:3px;color:#16a34a}
.attendance-time{display:flex;align-items:center;gap:15px}
.attendance-time small{display:block;color:#9ca3af;font-size:8px}
.attendance-time strong{display:block;font-size:11px;margin-top:3px}
.time-separator{color:#9ca3af;font-size:9px}
.quick-actions{display:grid;grid-template-columns:repeat(4,1fr);gap:10px}
.action-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:15px;color:#111827;text-decoration:none}
.action-card:hover{border-color:#bfdbfe}
.action-icon{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:10px}
.action-icon.blue{background:#eff6ff;color:#2563eb}
.action-icon.purple{background:#f5f3ff;color:#7c3aed}
.action-icon.green{background:#ecfdf5;color:#16a34a}
.action-icon.orange{background:#fff7ed;color:#ea580c}
.action-card span{display:block;font-size:11px;font-weight:600}
.action-card small{display:block;color:#9ca3af;font-size:8px;margin-top:3px}
.announcement-card{display:flex;align-items:center;gap:12px;background:#eff6ff;border-radius:13px;padding:14px;margin:20px 0}
.announcement-icon{width:40px;height:40px;border-radius:10px;background:#fff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.announcement-card span{font-size:8px;color:#2563eb;font-weight:700}
.announcement-card h4{font-size:11px;margin:3px 0}
.announcement-card p{font-size:8px;color:#6b7280;margin:0}
@media(max-width:800px){
    .stats-grid{grid-template-columns:repeat(2,1fr)}
    .quick-actions{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:500px){
    .welcome-section h2{font-size:19px}
    .membership-info{grid-template-columns:1fr 1fr}
    .membership-info div:last-child{grid-column:1/-1}
    .workout-header{align-items:flex-start}
    .workout-status{margin-left:auto}
    .workout-meta{gap:10px;justify-content:space-between}
    .attendance-card{align-items:flex-start;gap:12px}
    .attendance-time{gap:8px}
    .attendance-time strong{font-size:10px}
}
</style>

<?php include '../includes/footer.php'; ?>