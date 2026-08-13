<?php
$pageTitle = 'Attendance List';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Attendance List</div>
            <small class="text-muted">Manage daily member attendance</small>
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
                <h2>Attendance Management</h2>
                <p>View and manage member attendance records.</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-outline-primary" onclick="exportAttendance()">
                    <i class="fa-solid fa-file-export me-1"></i>
                    Export
                </button>
                <button class="btn btn-primary" onclick="markAttendance()">
                    <i class="fa-solid fa-user-check me-1"></i>
                    Mark Attendance
                </button>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <span>Total Members</span>
                    <strong>245</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <div>
                    <span>Present Today</span>
                    <strong>178</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fa-solid fa-user-xmark"></i>
                </div>
                <div>
                    <span>Absent Today</span>
                    <strong>67</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <span>Currently Inside</span>
                    <strong>42</strong>
                </div>
            </div>
        </div>

        <div class="table-card">
            <div class="table-card-header">
                <div>
                    <h5>Attendance Records</h5>
                    <small>Today's member attendance</small>
                </div>
            </div>

            <div class="filter-section">
                <div class="row g-3">
                    <div class="col-lg-3">
                        <label>Search Member</label>
                        <input type="text" class="form-control" placeholder="Name / Member Code">
                    </div>

                    <div class="col-lg-2">
                        <label>Date</label>
                        <input type="date" class="form-control" value="2026-08-13">
                    </div>

                    <div class="col-lg-2">
                        <label>Branch</label>
                        <select class="form-select">
                            <option>All Branches</option>
                            <option selected>Raipur Main Branch</option>
                            <option>Bilaspur Branch</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label>Status</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>Present</option>
                            <option>Checked Out</option>
                            <option>Inside Gym</option>
                            <option>Absent</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label>Method</label>
                        <select class="form-select">
                            <option>All Methods</option>
                            <option>QR Code</option>
                            <option>Manual</option>
                            <option>RFID</option>
                            <option>Biometric</option>
                        </select>
                    </div>

                    <div class="col-lg-1 d-flex align-items-end">
                        <button class="btn btn-primary w-100" onclick="filterAttendance()">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table attendance-table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Member</th>
                            <th>Member Code</th>
                            <th>Branch</th>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Method</th>
                            <th>Duration</th>
                            <th>Status</th>
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
                                        <small>9111111111</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-101</td>
                            <td>Raipur Main Branch</td>
                            <td>13 Aug 2026</td>
                            <td>06:25 AM</td>
                            <td>08:00 AM</td>
                            <td><span class="method qr">QR Code</span></td>
                            <td>1h 35m</td>
                            <td><span class="status checked-out">Checked Out</span></td>
                            <td>
                                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-primary" title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">A</div>
                                    <div>
                                        <strong>Amit Sharma</strong>
                                        <small>9111111112</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-102</td>
                            <td>Raipur Main Branch</td>
                            <td>13 Aug 2026</td>
                            <td>07:10 AM</td>
                            <td>-</td>
                            <td><span class="method qr">QR Code</span></td>
                            <td>-</td>
                            <td><span class="status inside">Inside Gym</span></td>
                            <td>
                                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">P</div>
                                    <div>
                                        <strong>Priya Verma</strong>
                                        <small>9111111113</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-103</td>
                            <td>Bilaspur Branch</td>
                            <td>13 Aug 2026</td>
                            <td>08:15 AM</td>
                            <td>09:50 AM</td>
                            <td><span class="method manual">Manual</span></td>
                            <td>1h 35m</td>
                            <td><span class="status checked-out">Checked Out</span></td>
                            <td>
                                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">S</div>
                                    <div>
                                        <strong>Suresh Kumar</strong>
                                        <small>9111111114</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-104</td>
                            <td>Raipur Main Branch</td>
                            <td>13 Aug 2026</td>
                            <td>09:05 AM</td>
                            <td>-</td>
                            <td><span class="method rfid">RFID</span></td>
                            <td>-</td>
                            <td><span class="status inside">Inside Gym</span></td>
                            <td>
                                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">N</div>
                                    <div>
                                        <strong>Neha Singh</strong>
                                        <small>9111111115</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-105</td>
                            <td>Bilaspur Branch</td>
                            <td>13 Aug 2026</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td><span class="status absent">Absent</span></td>
                            <td>
                                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <span>Showing 1 to 5 of 178 attendance records</span>
                <div>
                    <button class="btn btn-sm btn-outline-secondary">Previous</button>
                    <button class="btn btn-sm btn-primary">1</button>
                    <button class="btn btn-sm btn-outline-secondary">2</button>
                    <button class="btn btn-sm btn-outline-secondary">3</button>
                    <button class="btn btn-sm btn-outline-secondary">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.header-actions{display:flex;gap:8px}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:20px}
.stat-card{background:#fff;border-radius:12px;padding:18px;display:flex;align-items:center;gap:14px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.stat-icon{width:45px;height:45px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:18px}
.stat-icon.blue{background:#eff6ff;color:#2563eb}
.stat-icon.green{background:#ecfdf5;color:#16a34a}
.stat-icon.red{background:#fef2f2;color:#dc2626}
.stat-icon.orange{background:#fff7ed;color:#ea580c}
.stat-card span{display:block;color:#6b7280;font-size:11px}
.stat-card strong{display:block;font-size:20px;margin-top:3px}
.table-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden}
.table-card-header{padding:20px 25px;border-bottom:1px solid #e5e7eb}
.table-card-header h5{margin:0;font-size:16px}
.table-card-header small{color:#6b7280}
.filter-section{padding:20px 25px;background:#f8fafc;border-bottom:1px solid #e5e7eb}
.filter-section label{display:block;font-size:11px;font-weight:600;color:#374151;margin-bottom:5px}
.form-control,.form-select{font-size:13px;min-height:40px}
.attendance-table{margin:0}
.attendance-table th{font-size:10px;color:#6b7280;background:#f8fafc;white-space:nowrap}
.attendance-table td{font-size:11px;white-space:nowrap}
.member-info{display:flex;align-items:center;gap:8px}
.member-avatar{width:34px;height:34px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700}
.member-info strong{display:block;font-size:11px}
.member-info small{display:block;color:#9ca3af;font-size:9px;margin-top:2px}
.status{display:inline-block;padding:5px 9px;border-radius:20px;font-size:9px;font-weight:600}
.status.checked-out{background:#dcfce7;color:#15803d}
.status.inside{background:#dbeafe;color:#1d4ed8}
.status.absent{background:#fee2e2;color:#b91c1c}
.method{display:inline-block;padding:4px 7px;border-radius:5px;font-size:9px}
.method.qr{background:#eff6ff;color:#2563eb}
.method.manual{background:#f3e8ff;color:#7e22ce}
.method.rfid{background:#ecfdf5;color:#15803d}
.pagination{padding:15px 20px;border-top:1px solid #e5e7eb;display:flex;justify-content:space-between;align-items:center;color:#6b7280;font-size:11px}
.pagination div{display:flex;gap:5px}
@media(max-width:1000px){.stats-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:700px){.stats-grid{grid-template-columns:1fr}.page-header{flex-direction:column;align-items:flex-start}.header-actions{width:100%}.header-actions .btn{flex:1}.pagination{flex-direction:column;gap:10px}}
</style>

<script>
function exportAttendance(){
    alert('Attendance export UI action.');
}

function markAttendance(){
    alert('Mark attendance UI action.');
}

function filterAttendance(){
    alert('Attendance filter UI action.');
}
</script>

<?php include '../includes/footer.php'; ?>