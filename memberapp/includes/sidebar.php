<aside class="member-sidebar">

    <div class="member-logo">
        <a href="<?= $baseUrl ?>/dashboard/index.php">
            <i class="fa-solid fa-dumbbell"></i>
            <span>GymFit</span>
        </a>
    </div>

    <nav>

        <div class="nav-title">MAIN</div>

        <a href="<?= $baseUrl ?>/dashboard/index.php">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
        </a>

        <div class="nav-title">FITNESS</div>

        <a href="<?= $baseUrl ?>/attendance/today.php">
            <i class="fa-solid fa-calendar-check"></i>
            <span>Attendance</span>
        </a>

        <a href="<?= $baseUrl ?>/attendance/history.php">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Attendance History</span>
        </a>

        <a href="<?= $baseUrl ?>/workouts/current.php">
            <i class="fa-solid fa-dumbbell"></i>
            <span>Current Workout</span>
        </a>

        <a href="<?= $baseUrl ?>/workouts/history.php">
            <i class="fa-solid fa-list-check"></i>
            <span>Workout History</span>
        </a>

        <a href="<?= $baseUrl ?>/progress/index.php">
            <i class="fa-solid fa-chart-line"></i>
            <span>Progress</span>
        </a>

        <a href="<?= $baseUrl ?>/progress/latest.php">
            <i class="fa-solid fa-chart-simple"></i>
            <span>Latest Progress</span>
        </a>

        <div class="nav-title">MEMBERSHIP</div>

        <a href="<?= $baseUrl ?>/subscriptions/current.php">
            <i class="fa-solid fa-crown"></i>
            <span>Current Plan</span>
        </a>

        <a href="<?= $baseUrl ?>/subscriptions/details.php">
            <i class="fa-solid fa-circle-info"></i>
            <span>Plan Details</span>
        </a>

        <a href="<?= $baseUrl ?>/subscriptions/history.php">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Plan History</span>
        </a>

        <div class="nav-title">BILLING</div>

        <a href="<?= $baseUrl ?>/invoices/index.php">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Invoices</span>
        </a>

        <a href="<?= $baseUrl ?>/invoices/dues.php">
            <i class="fa-solid fa-money-bill-wave"></i>
            <span>Due Amount</span>
        </a>

        <a href="<?= $baseUrl ?>/payments/index.php">
            <i class="fa-solid fa-credit-card"></i>
            <span>Payments</span>
        </a>

        <div class="nav-title">OTHERS</div>

        <a href="<?= $baseUrl ?>/trainer/index.php">
            <i class="fa-solid fa-user-tie"></i>
            <span>My Trainer</span>
        </a>

        <a href="<?= $baseUrl ?>/notifications/index.php">
            <i class="fa-solid fa-bell"></i>
            <span>Notifications</span>
        </a>

        <a href="<?= $baseUrl ?>/profile/index.php">
            <i class="fa-solid fa-user"></i>
            <span>My Profile</span>
        </a>

        <a href="<?= $baseUrl ?>/profile/edit.php">
            <i class="fa-solid fa-pen"></i>
            <span>Edit Profile</span>
        </a>

    </nav>

</aside>

<style>
.member-sidebar{width:230px;height:100vh;position:fixed;left:0;top:0;background:#111827;color:#fff;padding:15px 11px;z-index:1000;overflow-y:auto}
.member-logo{padding:8px 10px 18px;border-bottom:1px solid rgba(255,255,255,.08);margin-bottom:8px}
.member-logo a{color:#fff;text-decoration:none;font-size:18px;font-weight:700;display:flex;align-items:center;gap:8px}
.member-logo i{color:#60a5fa}
.nav-title{font-size:8px;color:#6b7280;font-weight:700;padding:13px 10px 6px;letter-spacing:.6px}
.member-sidebar nav a{display:flex;align-items:center;gap:10px;color:#d1d5db;text-decoration:none;padding:9px 10px;border-radius:8px;font-size:10px;margin-bottom:2px}
.member-sidebar nav a:hover,.member-sidebar nav a.active{background:#2563eb;color:#fff}
.member-sidebar nav a i{width:17px;text-align:center}
@media(max-width:767px){
    .member-sidebar{display:none}
}
</style>