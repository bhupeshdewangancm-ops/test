<?php
$baseUrl = '';

$currentUrl = $_SERVER['REQUEST_URI'] ?? '';
?>

<style>
.sidebar{
    width:250px;
    height:100vh;
    background:#111827;
    color:#fff;
    position:fixed;
    left:0;
    top:0;
    z-index:1100;
    overflow-y:auto;
}
.sidebar-logo{
    height:70px;
    display:flex;
    align-items:center;
    padding:0 20px;
    border-bottom:1px solid rgba(255,255,255,.08);
}
.sidebar-logo a{
    color:#fff;
    text-decoration:none;
    font-size:21px;
    font-weight:700;
}
.sidebar-logo i{
    margin-right:10px;
}
.sidebar-menu{
    padding:15px 10px;
}
.menu-title{
    color:#9ca3af;
    font-size:11px;
    font-weight:600;
    text-transform:uppercase;
    padding:12px 12px 7px;
    letter-spacing:.5px;
}
.sidebar-menu a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:11px 13px;
    margin-bottom:3px;
    border-radius:7px;
    color:#d1d5db;
    text-decoration:none;
    font-size:14px;
    transition:all .2s ease;
}
.sidebar-menu a i{
    width:18px;
    text-align:center;
}
.sidebar-menu a:hover{
    background:#1f2937;
    color:#fff;
}
.sidebar-menu a.active{
    background:#2563eb;
    color:#fff;
}
.sidebar-divider{
    height:1px;
    background:rgba(255,255,255,.08);
    margin:12px 5px;
}
.sidebar-logout{
    color:#fca5a5!important;
}
.sidebar-logout:hover{
    background:#7f1d1d!important;
    color:#fff!important;
}
</style>

<aside class="sidebar">

    <div class="sidebar-logo">
        <a href="<?= $baseUrl ?>/dashboard/index.php">
            <i class="fa-solid fa-dumbbell"></i>
            Gym Admin
        </a>
    </div>

    <div class="sidebar-menu">

        <div class="menu-title">Main</div>

        <a href="<?= $baseUrl ?>/dashboard/index.php">
            <i class="fa-solid fa-gauge-high"></i>
            <span>Dashboard</span>
        </a>

        <div class="menu-title">Member Management</div>

        <a href="<?= $baseUrl ?>/member/member-list.php">
            <i class="fa-solid fa-users"></i>
            <span>Member List</span>
        </a>

        <a href="<?= $baseUrl ?>/member/add_member.php">
            <i class="fa-solid fa-user-plus"></i>
            <span>Add Member</span>
        </a>

        <a href="<?= $baseUrl ?>/member/member-details.php">
            <i class="fa-solid fa-id-card"></i>
            <span>Member Details</span>
        </a>

        <div class="menu-title">Attendance</div>

        <a href="<?= $baseUrl ?>/attendance/attendancelist.php">
            <i class="fa-solid fa-calendar-check"></i>
            <span>Attendance List</span>
        </a>

        <a href="<?= $baseUrl ?>/attendance/attendance-details.php">
            <i class="fa-solid fa-clipboard-user"></i>
            <span>Attendance Details</span>
        </a>

        <div class="menu-title">Workout</div>

        <a href="<?= $baseUrl ?>/workout/exercise-master.php">
            <i class="fa-solid fa-dumbbell"></i>
            <span>Exercise Master</span>
        </a>

        <a href="<?= $baseUrl ?>/workout/workout-plan-master.php">
            <i class="fa-solid fa-list-check"></i>
            <span>Workout Plans</span>
        </a>

        <a href="<?= $baseUrl ?>/workout/workout-plan-exercises.php">
            <i class="fa-solid fa-list"></i>
            <span>Plan Exercises</span>
        </a>

        <a href="<?= $baseUrl ?>/workout/member-workout-assignment.php">
            <i class="fa-solid fa-user-check"></i>
            <span>Member Workout</span>
        </a>

        <div class="menu-title">Classes</div>

        <a href="<?= $baseUrl ?>/classes/index.php">
            <i class="fa-solid fa-chalkboard"></i>
            <span>Class List</span>
        </a>

        <a href="<?= $baseUrl ?>/classes/add-class.php">
            <i class="fa-solid fa-plus"></i>
            <span>Add Class</span>
        </a>

        <a href="<?= $baseUrl ?>/classes/class-details.php">
            <i class="fa-solid fa-circle-info"></i>
            <span>Class Details</span>
        </a>

        <div class="menu-title">Billing & Payments</div>

        <a href="<?= $baseUrl ?>/billing_payment_invoice/invoices.php">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Invoices</span>
        </a>

        <a href="<?= $baseUrl ?>/billing_payment_invoice/receive-payment.php">
            <i class="fa-solid fa-money-bill-wave"></i>
            <span>Receive Payment</span>
        </a>

        <a href="<?= $baseUrl ?>/billing_payment_invoice/payment-receipt.php">
            <i class="fa-solid fa-receipt"></i>
            <span>Payment Receipts</span>
        </a>

        <a href="<?= $baseUrl ?>/billing_payment_invoice/invoice-details.php">
            <i class="fa-solid fa-file-lines"></i>
            <span>Invoice Details</span>
        </a>

        <div class="menu-title">Payments</div>

        <a href="<?= $baseUrl ?>/payments/index.php">
            <i class="fa-solid fa-credit-card"></i>
            <span>Payments</span>
        </a>

        <a href="<?= $baseUrl ?>/payments/show.php">
            <i class="fa-solid fa-money-check-dollar"></i>
            <span>Payment Details</span>
        </a>

        <div class="menu-title">Store</div>

        <a href="<?= $baseUrl ?>/payment/billing.php">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Store Billing</span>
        </a>

        <div class="menu-title">Reports</div>

        <a href="<?= $baseUrl ?>/reports/index.php">
            <i class="fa-solid fa-chart-column"></i>
            <span>Reports</span>
        </a>

        <div class="menu-title">Settings</div>

        <a href="<?= $baseUrl ?>/settings/index.php">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>

        <div class="sidebar-divider"></div>

        <a href="#" class="sidebar-logout" onclick="return confirm('Are you sure you want to logout?');">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>

    </div>
</aside>