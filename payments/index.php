<?php
$pageTitle = 'Payments';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Payments</div>
            <small class="text-muted">Manage all gym payment transactions</small>
        </div>
        <div class="admin-profile">
            <div class="admin-avatar">A</div>
            <div class="admin-info">
                <strong>Admin</strong>
                <small>Gym Administrator</small>
            </div>
        </div>
    </div>

    <div class="content-area">
        <div class="page-header">
            <div>
                <h2>Payment Management</h2>
                <p>View, search and manage member payment transactions.</p>
            </div>
            <a href="show.php?id=1" class="btn btn-primary">
                <i class="fa-solid fa-eye me-1"></i>
                Payment Details
            </a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <div>
                        <span>Total Payments</span>
                        <h3>128</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <span>Successful</span>
                        <h3>120</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>
                    <div>
                        <span>Total Collected</span>
                        <h3>₹1,85,500</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon red">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <span>Failed</span>
                        <h3>8</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <div class="section-header">
                <div>
                    <h5>Payment List</h5>
                    <small>All payment transactions</small>
                </div>
                <span class="total-badge">128 Payments</span>
            </div>

            <div class="filter-box mb-4">
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Search</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Receipt / member name">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Payment Mode</label>
                        <select class="form-select">
                            <option value="">All Modes</option>
                            <option>Cash</option>
                            <option>UPI</option>
                            <option>Card</option>
                            <option>Bank Transfer</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">All Status</option>
                            <option>Success</option>
                            <option>Failed</option>
                            <option>Reversed</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">From Date</label>
                        <input type="date" class="form-control" value="2026-08-01">
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">To Date</label>
                        <input type="date" class="form-control" value="2026-08-13">
                    </div>

                    <div class="col-lg-1 col-md-6">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary w-100">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle payment-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Receipt No.</th>
                            <th>Member</th>
                            <th>Invoice</th>
                            <th>Amount</th>
                            <th>Payment Mode</th>
                            <th>Payment Date</th>
                            <th>Received By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <strong>RCP-000001</strong>
                            </td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">R</div>
                                    <div>
                                        <strong>Rohan Active Member</strong>
                                        <small>GYM-101</small>
                                    </div>
                                </div>
                            </td>
                            <td>INV-001</td>
                            <td>
                                <strong>₹1,500.00</strong>
                            </td>
                            <td>
                                <span class="payment-mode cash">
                                    <i class="fa-solid fa-money-bill"></i>
                                    Cash
                                </span>
                            </td>
                            <td>07 Aug 2026</td>
                            <td>Admin</td>
                            <td>
                                <span class="status success">Success</span>
                            </td>
                            <td>
                                <a href="show.php?id=1"
                                   class="btn btn-sm btn-outline-primary"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <strong>RCP-000002</strong>
                            </td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">A</div>
                                    <div>
                                        <strong>Amit Sharma</strong>
                                        <small>GYM-102</small>
                                    </div>
                                </div>
                            </td>
                            <td>INV-002</td>
                            <td>
                                <strong>₹2,000.00</strong>
                            </td>
                            <td>
                                <span class="payment-mode upi">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    UPI
                                </span>
                            </td>
                            <td>28 Jul 2026</td>
                            <td>Rahul</td>
                            <td>
                                <span class="status success">Success</span>
                            </td>
                            <td>
                                <a href="show.php?id=2"
                                   class="btn btn-sm btn-outline-primary"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <strong>RCP-000003</strong>
                            </td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">P</div>
                                    <div>
                                        <strong>Priya Verma</strong>
                                        <small>GYM-103</small>
                                    </div>
                                </div>
                            </td>
                            <td>INV-003</td>
                            <td>
                                <strong>₹3,500.00</strong>
                            </td>
                            <td>
                                <span class="payment-mode card">
                                    <i class="fa-solid fa-credit-card"></i>
                                    Card
                                </span>
                            </td>
                            <td>05 Aug 2026</td>
                            <td>Admin</td>
                            <td>
                                <span class="status success">Success</span>
                            </td>
                            <td>
                                <a href="show.php?id=3"
                                   class="btn btn-sm btn-outline-primary"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                <strong>RCP-000004</strong>
                            </td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">S</div>
                                    <div>
                                        <strong>Suresh Kumar</strong>
                                        <small>GYM-104</small>
                                    </div>
                                </div>
                            </td>
                            <td>INV-004</td>
                            <td>
                                <strong>₹1,200.00</strong>
                            </td>
                            <td>
                                <span class="payment-mode bank">
                                    <i class="fa-solid fa-building-columns"></i>
                                    Bank Transfer
                                </span>
                            </td>
                            <td>03 Aug 2026</td>
                            <td>Rahul</td>
                            <td>
                                <span class="status failed">Failed</span>
                            </td>
                            <td>
                                <a href="show.php?id=4"
                                   class="btn btn-sm btn-outline-primary"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                                <strong>RCP-000005</strong>
                            </td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">V</div>
                                    <div>
                                        <strong>Vikas Patel</strong>
                                        <small>GYM-105</small>
                                    </div>
                                </div>
                            </td>
                            <td>INV-005</td>
                            <td>
                                <strong>₹2,500.00</strong>
                            </td>
                            <td>
                                <span class="payment-mode upi">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    UPI
                                </span>
                            </td>
                            <td>01 Aug 2026</td>
                            <td>Admin</td>
                            <td>
                                <span class="status reversed">Reversed</span>
                            </td>
                            <td>
                                <a href="show.php?id=5"
                                   class="btn btn-sm btn-outline-primary"
                                   title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Showing 1 to 5 of 128 payments
                </div>

                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.stat-card{background:#fff;border-radius:12px;padding:20px;display:flex;align-items:center;gap:15px;min-height:110px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.stat-icon{width:52px;height:52px;min-width:52px;border-radius:11px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px}
.stat-icon.blue{background:#2563eb}
.stat-icon.green{background:#16a34a}
.stat-icon.orange{background:#f59e0b}
.stat-icon.red{background:#dc2626}
.stat-card span{display:block;color:#6b7280;font-size:13px}
.stat-card h3{margin:5px 0 0;font-size:23px;font-weight:700}
.dashboard-section{background:#fff;border-radius:12px;padding:25px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.section-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:20px}
.section-header h5{margin:0;font-size:17px;font-weight:600}
.section-header small{color:#6b7280}
.total-badge{background:#eff6ff;color:#2563eb;border-radius:20px;padding:7px 13px;font-size:12px;font-weight:600}
.filter-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px;padding:18px}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.form-control,.form-select{min-height:43px;border-color:#d1d5db;font-size:13px}
.input-group-text{background:#f8fafc;border-color:#d1d5db;color:#6b7280}
.payment-table{margin-bottom:0}
.payment-table thead th{background:#f8fafc;color:#6b7280;font-size:12px;font-weight:600;white-space:nowrap;border-bottom:1px solid #e5e7eb}
.payment-table tbody td{font-size:13px;color:#374151;white-space:nowrap}
.member-info{display:flex;align-items:center;gap:10px}
.member-avatar{width:36px;height:36px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700}
.member-info strong{display:block;color:#111827;font-size:13px}
.member-info small{display:block;color:#6b7280;font-size:11px;margin-top:2px}
.payment-mode{display:inline-flex;align-items:center;gap:6px;padding:5px 9px;border-radius:20px;font-size:11px;font-weight:600}
.payment-mode.cash{background:#dcfce7;color:#15803d}
.payment-mode.upi{background:#dbeafe;color:#1d4ed8}
.payment-mode.card{background:#ede9fe;color:#6d28d9}
.payment-mode.bank{background:#fef3c7;color:#b45309}
.status{display:inline-block;padding:5px 10px;border-radius:20px;font-size:11px;font-weight:600}
.status.success{background:#dcfce7;color:#15803d}
.status.failed{background:#fee2e2;color:#b91c1c}
.status.reversed{background:#f3f4f6;color:#4b5563}
.pagination-wrapper{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-top:20px;padding-top:15px;border-top:1px solid #e5e7eb}
.pagination-info{color:#6b7280;font-size:12px}
@media(max-width:767px){
    .page-header,.section-header{align-items:flex-start;flex-direction:column}
    .dashboard-section{padding:18px}
    .pagination-wrapper{align-items:flex-start;flex-direction:column}
}
</style>

<?php include '../includes/footer.php'; ?>