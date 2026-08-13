<?php
$pageTitle = 'Attendance Details';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Attendance Details</div>
            <small class="text-muted">Member attendance information</small>
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
                <h2>Attendance Details</h2>
                <p>Complete attendance information for the selected member.</p>
            </div>

            <div class="header-actions">
                <a href="<?= $baseUrl ?>/attendance/attendancelist.php" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back to List
                </a>

                <button class="btn btn-primary" onclick="printAttendance()">
                    <i class="fa-solid fa-print me-1"></i>
                    Print
                </button>
            </div>
        </div>

        <div class="member-profile-card">
            <div class="member-large-avatar">R</div>

            <div class="member-profile-info">
                <h3>Rohan Active Member</h3>
                <div class="member-meta">
                    <span><i class="fa-solid fa-id-card"></i> GYM-101</span>
                    <span><i class="fa-solid fa-phone"></i> 9111111111</span>
                    <span><i class="fa-solid fa-location-dot"></i> Raipur Main Branch</span>
                </div>
            </div>

            <div class="member-status">
                <span class="status active">Active Member</span>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div>
                    <span>Total Attendance</span>
                    <strong>18</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <div>
                    <span>This Month</span>
                    <strong>12</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <span>Avg. Duration</span>
                    <strong>1h 42m</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <span>Attendance Rate</span>
                    <strong>86%</strong>
                </div>
            </div>
        </div>

        <div class="details-grid">
            <div class="table-card">
                <div class="table-card-header">
                    <div>
                        <h5>Attendance History</h5>
                        <small>Recent attendance records</small>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label>From Date</label>
                            <input type="date" class="form-control" value="2026-08-01">
                        </div>

                        <div class="col-md-4">
                            <label>To Date</label>
                            <input type="date" class="form-control" value="2026-08-13">
                        </div>

                        <div class="col-md-4 d-flex align-items-end">
                            <button class="btn btn-primary w-100" onclick="filterHistory()">
                                <i class="fa-solid fa-filter me-1"></i>
                                Apply Filter
                            </button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table history-table align-middle">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Branch</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Method</th>
                                <th>Duration</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>13 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>06:25 AM</td>
                                <td>08:00 AM</td>
                                <td><span class="method qr">QR Code</span></td>
                                <td>1h 35m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>

                            <tr>
                                <td>12 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>06:40 AM</td>
                                <td>08:25 AM</td>
                                <td><span class="method qr">QR Code</span></td>
                                <td>1h 45m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>

                            <tr>
                                <td>11 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>07:05 AM</td>
                                <td>08:55 AM</td>
                                <td><span class="method qr">QR Code</span></td>
                                <td>1h 50m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>

                            <tr>
                                <td>10 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>06:55 AM</td>
                                <td>08:30 AM</td>
                                <td><span class="method manual">Manual</span></td>
                                <td>1h 35m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>

                            <tr>
                                <td>08 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>07:15 AM</td>
                                <td>09:00 AM</td>
                                <td><span class="method qr">QR Code</span></td>
                                <td>1h 45m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>

                            <tr>
                                <td>07 Aug 2026</td>
                                <td>Raipur Main Branch</td>
                                <td>06:25 AM</td>
                                <td>08:00 AM</td>
                                <td><span class="method qr">QR Code</span></td>
                                <td>1h 35m</td>
                                <td><span class="status checked-out">Checked Out</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="side-card">
                <div class="side-card-header">
                    <h5>Today's Attendance</h5>
                </div>

                <div class="today-status">
                    <div class="today-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <h4>Checked Out</h4>
                    <p>Today's attendance completed.</p>
                </div>

                <div class="attendance-info">
                    <div>
                        <span>Date</span>
                        <strong>13 Aug 2026</strong>
                    </div>

                    <div>
                        <span>Check In</span>
                        <strong>06:25 AM</strong>
                    </div>

                    <div>
                        <span>Check Out</span>
                        <strong>08:00 AM</strong>
                    </div>

                    <div>
                        <span>Total Duration</span>
                        <strong>1h 35m</strong>
                    </div>

                    <div>
                        <span>Check-in Method</span>
                        <strong>QR Code</strong>
                    </div>

                    <div>
                        <span>Location Accuracy</span>
                        <strong>6.80 meters</strong>
                    </div>
                </div>

                <div class="location-box">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <strong>Raipur Main Branch</strong>
                        <small>Shankar Nagar, Raipur</small>
                    </div>
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
.member-profile-card{background:#fff;border-radius:12px;padding:22px;display:flex;align-items:center;gap:15px;margin-bottom:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.member-large-avatar{width:65px;height:65px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:25px;font-weight:700}
.member-profile-info{flex:1}
.member-profile-info h3{margin:0;font-size:18px}
.member-meta{display:flex;flex-wrap:wrap;gap:15px;margin-top:8px}
.member-meta span{font-size:11px;color:#6b7280}
.member-meta i{color:#2563eb;margin-right:4px}
.status{display:inline-block;padding:5px 10px;border-radius:20px;font-size:9px;font-weight:600}
.status.active{background:#dcfce7;color:#15803d}
.status.checked-out{background:#dcfce7;color:#15803d}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:20px}
.stat-card{background:#fff;border-radius:12px;padding:18px;display:flex;align-items:center;gap:14px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.stat-icon{width:45px;height:45px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:18px}
.stat-icon.blue{background:#eff6ff;color:#2563eb}
.stat-icon.green{background:#ecfdf5;color:#16a34a}
.stat-icon.orange{background:#fff7ed;color:#ea580c}
.stat-icon.purple{background:#f3e8ff;color:#7e22ce}
.stat-card span{display:block;color:#6b7280;font-size:11px}
.stat-card strong{display:block;font-size:20px;margin-top:3px}
.details-grid{display:grid;grid-template-columns:minmax(0,1fr) 330px;gap:20px}
.table-card,.side-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden}
.table-card-header,.side-card-header{padding:20px 25px;border-bottom:1px solid #e5e7eb}
.table-card-header h5,.side-card-header h5{margin:0;font-size:15px}
.table-card-header small{color:#6b7280}
.filter-section{padding:18px 25px;background:#f8fafc;border-bottom:1px solid #e5e7eb}
.filter-section label{display:block;font-size:11px;font-weight:600;margin-bottom:5px;color:#374151}
.form-control{font-size:12px;min-height:40px}
.history-table{margin:0}
.history-table th{font-size:10px;color:#6b7280;background:#f8fafc;white-space:nowrap}
.history-table td{font-size:11px;white-space:nowrap}
.method{display:inline-block;padding:4px 7px;border-radius:5px;font-size:9px}
.method.qr{background:#eff6ff;color:#2563eb}
.method.manual{background:#f3e8ff;color:#7e22ce}
.today-status{text-align:center;padding:25px;border-bottom:1px solid #e5e7eb}
.today-icon{width:55px;height:55px;border-radius:50%;background:#dcfce7;color:#16a34a;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;font-size:22px}
.today-status h4{font-size:15px;margin:0}
.today-status p{font-size:10px;color:#6b7280;margin:5px 0 0}
.attendance-info{padding:15px 20px}
.attendance-info>div{display:flex;justify-content:space-between;padding:10px 0;border-bottom:1px solid #f1f5f9}
.attendance-info span{font-size:10px;color:#6b7280}
.attendance-info strong{font-size:10px}
.location-box{margin:0 20px 20px;padding:12px;background:#f8fafc;border-radius:8px;display:flex;gap:10px;align-items:center}
.location-box>i{color:#2563eb;font-size:18px}
.location-box strong{display:block;font-size:10px}
.location-box small{display:block;color:#6b7280;font-size:9px;margin-top:3px}
@media(max-width:1100px){.details-grid{grid-template-columns:1fr}.stats-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:700px){.stats-grid{grid-template-columns:1fr}.page-header,.member-profile-card{flex-direction:column;align-items:flex-start}.member-status{width:100%}.header-actions{width:100%}.header-actions .btn{flex:1}}
@media print{.sidebar,.topbar,.page-header{display:none!important}.main-content{margin-left:0!important}}
</style>

<script>
function printAttendance(){
    window.print();
}

function filterHistory(){
    alert('Attendance history filter UI action.');
}
</script>

<?php include '../includes/footer.php'; ?>