<?php
$pageTitle = 'Dashboard';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">

    <!-- TOPBAR -->
    <div class="topbar">
        <div>
            <div class="topbar-title">Dashboard</div>
            <small class="text-muted">Gym Management Overview</small>
        </div>

        <div class="admin-profile">
            <div class="admin-avatar">A</div>

            <div class="admin-info">
                <strong>Admin</strong>
                <small>Gym Administrator</small>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content-area">

        <!-- PAGE HEADER -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <div>
                <h2 class="page-title mb-1">Dashboard</h2>
                <p class="text-muted mb-0">
                    Welcome back, Admin. Here's your gym overview.
                </p>
            </div>

            <div>
                <span class="badge bg-primary px-3 py-2">
                    <i class="fa-solid fa-calendar-day me-1"></i>
                    <?= date('d M Y') ?>
                </span>
            </div>
        </div>

        <!-- STAT CARDS -->
        <div class="row g-4 mb-4">

            <!-- TOTAL MEMBERS -->
            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-primary">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div class="card-content">
                        <span>Total Members</span>
                        <h3>250</h3>
                        <small class="text-success">
                            <i class="fa-solid fa-arrow-up"></i>
                            12% this month
                        </small>
                    </div>
                </div>
            </div>

            <!-- ACTIVE MEMBERS -->
            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-success">
                        <i class="fa-solid fa-user-check"></i>
                    </div>

                    <div class="card-content">
                        <span>Active Members</span>
                        <h3>198</h3>
                        <small class="text-success">
                            <i class="fa-solid fa-circle-check"></i>
                            Active
                        </small>
                    </div>
                </div>
            </div>

            <!-- EXPIRED MEMBERS -->
            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-danger">
                        <i class="fa-solid fa-user-clock"></i>
                    </div>

                    <div class="card-content">
                        <span>Expired Members</span>
                        <h3>27</h3>
                        <small class="text-danger">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            Need renewal
                        </small>
                    </div>
                </div>
            </div>

            <!-- TODAY ATTENDANCE -->
            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-warning">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>

                    <div class="card-content">
                        <span>Today's Attendance</span>
                        <h3>145</h3>
                        <small class="text-success">
                            <i class="fa-solid fa-arrow-up"></i>
                            8% from yesterday
                        </small>
                    </div>
                </div>
            </div>

        </div>

        <!-- SECOND STAT ROW -->
        <div class="row g-4 mb-4">

            <!-- REVENUE -->
            <div class="col-xl-4 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-info">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>

                    <div class="card-content">
                        <span>This Month Revenue</span>
                        <h3>₹1,85,500</h3>
                        <small class="text-success">
                            <i class="fa-solid fa-arrow-up"></i>
                            15.5% increase
                        </small>
                    </div>
                </div>
            </div>

            <!-- PENDING FEES -->
            <div class="col-xl-4 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-danger">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>

                    <div class="card-content">
                        <span>Pending Fees</span>
                        <h3>₹42,800</h3>
                        <small class="text-danger">
                            <i class="fa-solid fa-clock"></i>
                            32 invoices pending
                        </small>
                    </div>
                </div>
            </div>

            <!-- EXPIRING SOON -->
            <div class="col-xl-4 col-md-6">
                <div class="dashboard-card">
                    <div class="card-icon bg-secondary">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>

                    <div class="card-content">
                        <span>Expiring in 7 Days</span>
                        <h3>18</h3>
                        <small class="text-warning">
                            <i class="fa-solid fa-bell"></i>
                            Renewal reminder needed
                        </small>
                    </div>
                </div>
            </div>

        </div>

        <!-- QUICK ACTIONS -->
        <div class="dashboard-section mb-4">

            <div class="section-header">
                <div>
                    <h5>Quick Actions</h5>
                    <small>Frequently used actions</small>
                </div>
            </div>

            <div class="row g-3">

                <div class="col-xl-3 col-md-6">
                    <a href="../member/add_member.php" class="quick-action">
                        <div class="quick-icon bg-primary">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>

                        <div>
                            <strong>Add Member</strong>
                            <small>Register new member</small>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="../attendance/attendancelist.php" class="quick-action">
                        <div class="quick-icon bg-success">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>

                        <div>
                            <strong>Attendance</strong>
                            <small>View today's attendance</small>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="../billing_payment_invoice/receive-payment.php" class="quick-action">
                        <div class="quick-icon bg-warning">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>

                        <div>
                            <strong>Receive Payment</strong>
                            <small>Collect member fees</small>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="../workout/member-workout-assignment.php" class="quick-action">
                        <div class="quick-icon bg-info">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>

                        <div>
                            <strong>Assign Workout</strong>
                            <small>Assign workout to member</small>
                        </div>
                    </a>
                </div>

            </div>

        </div>

        <!-- MAIN DASHBOARD ROW -->
        <div class="row g-4 mb-4">

            <!-- ATTENDANCE SUMMARY -->
            <div class="col-xl-7">

                <div class="dashboard-section h-100">

                    <div class="section-header">
                        <div>
                            <h5>Today's Attendance</h5>
                            <small>Member attendance summary</small>
                        </div>

                        <a href="../attendance/attendancelist.php"
                           class="btn btn-sm btn-outline-primary">
                            View All
                        </a>
                    </div>

                    <div class="attendance-summary">

                        <div class="attendance-box">
                            <div class="attendance-icon present">
                                <i class="fa-solid fa-user-check"></i>
                            </div>

                            <div>
                                <span>Present</span>
                                <h4>145</h4>
                            </div>
                        </div>

                        <div class="attendance-box">
                            <div class="attendance-icon absent">
                                <i class="fa-solid fa-user-xmark"></i>
                            </div>

                            <div>
                                <span>Absent</span>
                                <h4>53</h4>
                            </div>
                        </div>

                        <div class="attendance-box">
                            <div class="attendance-icon checked">
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </div>

                            <div>
                                <span>Checked In</span>
                                <h4>72</h4>
                            </div>
                        </div>

                        <div class="attendance-box">
                            <div class="attendance-icon checkout">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>

                            <div>
                                <span>Checked Out</span>
                                <h4>73</h4>
                            </div>
                        </div>

                    </div>

                    <div class="progress-wrapper mt-4">

                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">
                                Attendance Rate
                            </span>

                            <strong>73%</strong>
                        </div>

                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success"
                                 style="width: 73%;">
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- MEMBERSHIP SUMMARY -->
            <div class="col-xl-5">

                <div class="dashboard-section h-100">

                    <div class="section-header">
                        <div>
                            <h5>Membership Summary</h5>
                            <small>Current membership status</small>
                        </div>
                    </div>

                    <div class="membership-item">
                        <div>
                            <span>Active</span>
                            <strong>198 Members</strong>
                        </div>

                        <div class="status-badge success">
                            79%
                        </div>
                    </div>

                    <div class="membership-item">
                        <div>
                            <span>Expiring Soon</span>
                            <strong>18 Members</strong>
                        </div>

                        <div class="status-badge warning">
                            7%
                        </div>
                    </div>

                    <div class="membership-item">
                        <div>
                            <span>Expired</span>
                            <strong>27 Members</strong>
                        </div>

                        <div class="status-badge danger">
                            11%
                        </div>
                    </div>

                    <div class="membership-item">
                        <div>
                            <span>Frozen</span>
                            <strong>7 Members</strong>
                        </div>

                        <div class="status-badge secondary">
                            3%
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- TABLES -->
        <div class="row g-4">

            <!-- RECENT MEMBERS -->
            <div class="col-xl-7">

                <div class="dashboard-section">

                    <div class="section-header">

                        <div>
                            <h5>Recent Members</h5>
                            <small>Recently registered members</small>
                        </div>

                        <a href="../member/member-list.php"
                           class="btn btn-sm btn-outline-primary">
                            View All
                        </a>

                    </div>

                    <div class="table-responsive">

                        <table class="table align-middle dashboard-table">

                            <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>Member Code</th>
                                    <th>Plan</th>
                                    <th>Expiry</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>
                                        <div class="member-info">
                                            <div class="member-avatar">
                                                RS
                                            </div>

                                            <div>
                                                <strong>Rohan Sharma</strong>
                                                <small>9111111111</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>GYM-101</td>

                                    <td>Monthly Plan</td>

                                    <td>06 Sep 2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="member-info">
                                            <div class="member-avatar">
                                                AK
                                            </div>

                                            <div>
                                                <strong>Amit Kumar</strong>
                                                <small>9222222222</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>GYM-102</td>

                                    <td>Quarterly Plan</td>

                                    <td>20 Aug 2026</td>

                                    <td>
                                        <span class="badge bg-warning text-dark">
                                            Expiring
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="member-info">
                                            <div class="member-avatar">
                                                PS
                                            </div>

                                            <div>
                                                <strong>Priya Singh</strong>
                                                <small>9333333333</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>GYM-103</td>

                                    <td>Monthly Plan</td>

                                    <td>15 Sep 2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="member-info">
                                            <div class="member-avatar">
                                                VK
                                            </div>

                                            <div>
                                                <strong>Vikas Kumar</strong>
                                                <small>9444444444</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>GYM-104</td>

                                    <td>Monthly Plan</td>

                                    <td>01 Aug 2026</td>

                                    <td>
                                        <span class="badge bg-danger">
                                            Expired
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- RECENT PAYMENTS -->
            <div class="col-xl-5">

                <div class="dashboard-section">

                    <div class="section-header">

                        <div>
                            <h5>Recent Payments</h5>
                            <small>Latest payment transactions</small>
                        </div>

                        <a href="../payments/index.php"
                           class="btn btn-sm btn-outline-primary">
                            View All
                        </a>

                    </div>

                    <div class="payment-list">

                        <div class="payment-item">

                            <div class="payment-icon">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>

                            <div class="payment-details">
                                <strong>Rohan Sharma</strong>
                                <small>RCP-000001</small>
                            </div>

                            <div class="payment-amount">
                                <strong>₹1,500</strong>
                                <small class="text-success">
                                    Success
                                </small>
                            </div>

                        </div>

                        <div class="payment-item">

                            <div class="payment-icon">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>

                            <div class="payment-details">
                                <strong>Amit Kumar</strong>
                                <small>RCP-000002</small>
                            </div>

                            <div class="payment-amount">
                                <strong>₹2,000</strong>
                                <small class="text-success">
                                    Success
                                </small>
                            </div>

                        </div>

                        <div class="payment-item">

                            <div class="payment-icon">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>

                            <div class="payment-details">
                                <strong>Priya Singh</strong>
                                <small>RCP-000003</small>
                            </div>

                            <div class="payment-amount">
                                <strong>₹1,500</strong>
                                <small class="text-success">
                                    Success
                                </small>
                            </div>

                        </div>

                        <div class="payment-item">

                            <div class="payment-icon">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>

                            <div class="payment-details">
                                <strong>Vikas Kumar</strong>
                                <small>RCP-000004</small>
                            </div>

                            <div class="payment-amount">
                                <strong>₹1,200</strong>
                                <small class="text-success">
                                    Success
                                </small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- EXPIRING MEMBERS -->
        <div class="dashboard-section mt-4">

            <div class="section-header">

                <div>
                    <h5>Membership Expiring Soon</h5>
                    <small>
                        Members whose membership will expire within 7 days
                    </small>
                </div>

                <a href="../member/member-list.php"
                   class="btn btn-sm btn-outline-danger">
                    View Members
                </a>

            </div>

            <div class="table-responsive">

                <table class="table align-middle dashboard-table">

                    <thead>
                        <tr>
                            <th>Member</th>
                            <th>Member Code</th>
                            <th>Plan</th>
                            <th>Expiry Date</th>
                            <th>Days Left</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">
                                        AK
                                    </div>

                                    <div>
                                        <strong>Amit Kumar</strong>
                                        <small>9222222222</small>
                                    </div>
                                </div>
                            </td>

                            <td>GYM-102</td>

                            <td>Quarterly Plan</td>

                            <td>20 Aug 2026</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    5 Days
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-success">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Reminder
                                </button>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">
                                        SK
                                    </div>

                                    <div>
                                        <strong>Sunil Kumar</strong>
                                        <small>9555555555</small>
                                    </div>
                                </div>
                            </td>

                            <td>GYM-108</td>

                            <td>Monthly Plan</td>

                            <td>22 Aug 2026</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    7 Days
                                </span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-success">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Reminder
                                </button>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<style>
    .dashboard-card {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        min-height: 140px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.05);
        transition: 0.2s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    }

    .card-icon {
        width: 55px;
        height: 55px;
        min-width: 55px;
        border-radius: 12px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
    }

    .card-content span {
        display: block;
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .card-content h3 {
        margin: 0 0 5px;
        font-size: 25px;
        font-weight: 700;
        color: #111827;
    }

    .card-content small {
        font-size: 12px;
    }

    .dashboard-section {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-bottom: 20px;
    }

    .section-header h5 {
        margin: 0;
        font-size: 17px;
        font-weight: 600;
        color: #111827;
    }

    .section-header small {
        color: #6b7280;
    }

    .quick-action {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        text-decoration: none;
        color: #111827;
        transition: 0.2s ease;
        height: 100%;
    }

    .quick-action:hover {
        border-color: #2563eb;
        background: #f8faff;
        color: #111827;
        transform: translateY(-2px);
    }

    .quick-action strong {
        display: block;
        font-size: 14px;
        margin-bottom: 3px;
    }

    .quick-action small {
        display: block;
        color: #6b7280;
        font-size: 12px;
    }

    .quick-icon {
        width: 45px;
        height: 45px;
        min-width: 45px;
        border-radius: 9px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .attendance-summary {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .attendance-box {
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 15px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .attendance-icon {
        width: 42px;
        height: 42px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .attendance-icon.present {
        background: #dcfce7;
        color: #16a34a;
    }

    .attendance-icon.absent {
        background: #fee2e2;
        color: #dc2626;
    }

    .attendance-icon.checked {
        background: #dbeafe;
        color: #2563eb;
    }

    .attendance-icon.checkout {
        background: #fef3c7;
        color: #d97706;
    }

    .attendance-box span {
        display: block;
        color: #6b7280;
        font-size: 12px;
    }

    .attendance-box h4 {
        margin: 2px 0 0;
        font-size: 20px;
        font-weight: 700;
    }

    .membership-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .membership-item:last-child {
        border-bottom: 0;
    }

    .membership-item span {
        display: block;
        color: #6b7280;
        font-size: 12px;
        margin-bottom: 3px;
    }

    .membership-item strong {
        font-size: 14px;
    }

    .status-badge {
        min-width: 50px;
        text-align: center;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .status-badge.success {
        background: #dcfce7;
        color: #15803d;
    }

    .status-badge.warning {
        background: #fef3c7;
        color: #b45309;
    }

    .status-badge.danger {
        background: #fee2e2;
        color: #b91c1c;
    }

    .status-badge.secondary {
        background: #e5e7eb;
        color: #4b5563;
    }

    .dashboard-table {
        margin-bottom: 0;
    }

    .dashboard-table thead th {
        background: #f8fafc;
        color: #6b7280;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
        border-bottom: 1px solid #e5e7eb;
    }

    .dashboard-table tbody td {
        font-size: 13px;
        color: #374151;
        white-space: nowrap;
    }

    .member-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .member-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #e0e7ff;
        color: #3730a3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
    }

    .member-info strong {
        display: block;
        color: #111827;
        font-size: 13px;
    }

    .member-info small {
        display: block;
        color: #6b7280;
        font-size: 11px;
        margin-top: 2px;
    }

    .payment-list {
        display: flex;
        flex-direction: column;
    }

    .payment-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 13px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .payment-item:last-child {
        border-bottom: 0;
    }

    .payment-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        border-radius: 8px;
        background: #dcfce7;
        color: #16a34a;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .payment-details {
        flex: 1;
    }

    .payment-details strong {
        display: block;
        font-size: 13px;
    }

    .payment-details small {
        display: block;
        color: #6b7280;
        font-size: 11px;
        margin-top: 3px;
    }

    .payment-amount {
        text-align: right;
    }

    .payment-amount strong {
        display: block;
        font-size: 13px;
    }

    .payment-amount small {
        font-size: 11px;
    }

    @media (max-width: 767px) {

        .content-area {
            padding: 15px;
        }

        .attendance-summary {
            grid-template-columns: 1fr;
        }

        .topbar {
            padding: 0 15px;
        }

        .admin-info {
            display: none;
        }

        .dashboard-card {
            min-height: 120px;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>