<?php
$pageTitle = 'Member Workout Assignment';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Member Workout Assignment</div>
            <small class="text-muted">Assign workout plans to gym members</small>
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
                <h2>Member Workout Assignment</h2>
                <p>Manage workout plans assigned to gym members.</p>
            </div>
            <a href="add-member-workout.php" class="btn btn-primary">
                <i class="fa-solid fa-plus me-1"></i>
                Assign Workout
            </a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <span>Total Assignments</span>
                        <h3>35</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <span>Active</span>
                        <h3>24</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fa-solid fa-flag-checkered"></i>
                    </div>
                    <div>
                        <span>Completed</span>
                        <h3>8</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon red">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <div>
                        <span>Cancelled</span>
                        <h3>3</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <div class="section-header">
                <div>
                    <h5>Workout Assignments</h5>
                    <small>All member workout assignments</small>
                </div>
                <a href="add-member-workout.php" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus me-1"></i>
                    Assign Workout
                </a>
            </div>

            <div class="filter-box mb-4">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <label class="form-label">Search Member</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Member name or code">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Workout Plan</label>
                        <select class="form-select">
                            <option value="">All Plans</option>
                            <option>Weight Loss Beginner Plan</option>
                            <option>Muscle Building Plan</option>
                            <option>Strength Training Plan</option>
                            <option>Cardio Fitness Plan</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Trainer</label>
                        <select class="form-select">
                            <option value="">All Trainers</option>
                            <option>Rahul Trainer</option>
                            <option>Amit Trainer</option>
                            <option>Vikas Trainer</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">All</option>
                            <option>Active</option>
                            <option>Completed</option>
                            <option>Cancelled</option>
                        </select>
                    </div>

                    <div class="col-lg-1 col-md-12">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary w-100">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle assignment-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Member</th>
                            <th>Workout Plan</th>
                            <th>Trainer</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">R</div>
                                    <div>
                                        <strong>Rohan Active Member</strong>
                                        <small>GYM-101</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Weight Loss Beginner Plan</strong>
                                <small class="d-block text-muted">Weight Loss</small>
                            </td>
                            <td>Rahul Trainer</td>
                            <td>01 Aug 2026</td>
                            <td>31 Oct 2026</td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <span class="notes-text">
                                    Beginner weight loss workout
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="add-member-workout.php?id=1" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">A</div>
                                    <div>
                                        <strong>Amit Sharma</strong>
                                        <small>GYM-102</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Muscle Building Plan</strong>
                                <small class="d-block text-muted">Muscle Gain</small>
                            </td>
                            <td>Amit Trainer</td>
                            <td>05 Aug 2026</td>
                            <td>05 Nov 2026</td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <span class="notes-text">
                                    Focus on strength training
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="add-member-workout.php?id=2" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">P</div>
                                    <div>
                                        <strong>Priya Verma</strong>
                                        <small>GYM-103</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Cardio Fitness Plan</strong>
                                <small class="d-block text-muted">Cardio</small>
                            </td>
                            <td>Vikas Trainer</td>
                            <td>01 Jul 2026</td>
                            <td>31 Jul 2026</td>
                            <td>
                                <span class="status completed">Completed</span>
                            </td>
                            <td>
                                <span class="notes-text">
                                    Cardio improvement program
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="add-member-workout.php?id=3" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">S</div>
                                    <div>
                                        <strong>Suresh Kumar</strong>
                                        <small>GYM-104</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Strength Training Plan</strong>
                                <small class="d-block text-muted">Strength</small>
                            </td>
                            <td>Rahul Trainer</td>
                            <td>10 Jul 2026</td>
                            <td>10 Oct 2026</td>
                            <td>
                                <span class="status cancelled">Cancelled</span>
                            </td>
                            <td>
                                <span class="notes-text">
                                    Assignment cancelled
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="add-member-workout.php?id=4" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Showing 1 to 4 of 35 assignments
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
.stat-card h3{margin:5px 0 0;font-size:25px;font-weight:700}
.dashboard-section{background:#fff;border-radius:12px;padding:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.section-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:20px}
.section-header h5{margin:0;font-size:17px;font-weight:600}
.section-header small{color:#6b7280}
.filter-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px;padding:18px}
.form-label{font-size:13px;font-weight:600;color:#374151}
.assignment-table{margin-bottom:0}
.assignment-table thead th{background:#f8fafc;color:#6b7280;font-size:12px;font-weight:600;white-space:nowrap;border-bottom:1px solid #e5e7eb}
.assignment-table tbody td{font-size:13px;color:#374151;vertical-align:middle}
.member-info{display:flex;align-items:center;gap:10px;min-width:190px}
.member-avatar{width:38px;height:38px;min-width:38px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700}
.member-info strong{display:block;color:#111827;font-size:13px}
.member-info small{display:block;color:#6b7280;font-size:11px;margin-top:2px}
.assignment-table tbody td strong{font-size:13px}
.notes-text{display:block;max-width:180px;color:#6b7280;line-height:1.4}
.status{display:inline-block;padding:5px 10px;border-radius:20px;font-size:11px;font-weight:600;white-space:nowrap}
.status.active{background:#dcfce7;color:#15803d}
.status.completed{background:#dbeafe;color:#1d4ed8}
.status.cancelled{background:#fee2e2;color:#b91c1c}
.action-buttons{display:flex;gap:5px}
.pagination-wrapper{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-top:20px;padding-top:15px;border-top:1px solid #e5e7eb}
.pagination-info{color:#6b7280;font-size:12px}
@media(max-width:767px){.page-header,.section-header{align-items:flex-start;flex-direction:column}.pagination-wrapper{align-items:flex-start;flex-direction:column}}
</style>

<?php include '../includes/footer.php'; ?>