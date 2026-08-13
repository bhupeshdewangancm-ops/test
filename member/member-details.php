<?php
$pageTitle = 'Member Details';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Member Details</div>
            <small class="text-muted">View complete member profile and membership information</small>
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
                <h2>Member Details</h2>
                <p>Complete profile, membership, attendance and payment information.</p>
            </div>

            <div class="page-actions">
                <a href="<?= $baseUrl ?>/member/member-list.php" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back
                </a>

                <a href="<?= $baseUrl ?>/member/add_member.php?id=1" class="btn btn-primary">
                    <i class="fa-solid fa-pen me-1"></i>
                    Edit Member
                </a>
            </div>
        </div>

        <div class="profile-card">
            <div class="profile-main">
                <div class="profile-photo">
                    <span>R</span>
                </div>

                <div class="profile-info">
                    <div class="profile-name-row">
                        <h3>Rohan Active Member</h3>
                        <span class="status-badge active">Active</span>
                    </div>

                    <p class="member-code">
                        <i class="fa-solid fa-id-card me-1"></i>
                        GYM-101
                    </p>

                    <div class="profile-contact">
                        <span>
                            <i class="fa-solid fa-phone"></i>
                            9111111111
                        </span>
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                            rohan@gmail.com
                        </span>
                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            Raipur, Chhattisgarh
                        </span>
                    </div>
                </div>

                <div class="profile-actions">
                    <button type="button" class="btn btn-success" onclick="sendWhatsApp()">
                        <i class="fa-brands fa-whatsapp me-1"></i>
                        WhatsApp
                    </button>

                    <button type="button" class="btn btn-outline-primary" onclick="printMember()">
                        <i class="fa-solid fa-print me-1"></i>
                        Print
                    </button>
                </div>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-header">
                    <div class="info-icon blue">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h5>Personal Information</h5>
                        <small>Basic member details</small>
                    </div>
                </div>

                <div class="details-grid">
                    <div class="detail-item">
                        <span>Full Name</span>
                        <strong>Rohan Active Member</strong>
                    </div>

                    <div class="detail-item">
                        <span>Gender</span>
                        <strong>Male</strong>
                    </div>

                    <div class="detail-item">
                        <span>Date of Birth</span>
                        <strong>15 May 1998</strong>
                    </div>

                    <div class="detail-item">
                        <span>Blood Group</span>
                        <strong>O+</strong>
                    </div>

                    <div class="detail-item">
                        <span>Phone</span>
                        <strong>9111111111</strong>
                    </div>

                    <div class="detail-item">
                        <span>Email</span>
                        <strong>rohan@gmail.com</strong>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <div class="info-card-header">
                    <div class="info-icon green">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div>
                        <h5>Gym Information</h5>
                        <small>Gym and branch details</small>
                    </div>
                </div>

                <div class="details-grid">
                    <div class="detail-item">
                        <span>Gym Name</span>
                        <strong>Seba24 Fitness Club</strong>
                    </div>

                    <div class="detail-item">
                        <span>Branch</span>
                        <strong>Raipur Main Branch</strong>
                    </div>

                    <div class="detail-item">
                        <span>Joining Date</span>
                        <strong>07 Aug 2026</strong>
                    </div>

                    <div class="detail-item">
                        <span>Member Status</span>
                        <strong class="text-success">Active</strong>
                    </div>

                    <div class="detail-item">
                        <span>RFID Card</span>
                        <strong>RFID-10001</strong>
                    </div>

                    <div class="detail-item">
                        <span>Biometric ID</span>
                        <strong>BIO-10001</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="membership-card">
            <div class="membership-header">
                <div>
                    <div class="section-title">
                        <div class="info-icon purple">
                            <i class="fa-solid fa-id-card"></i>
                        </div>
                        <div>
                            <h5>Membership Details</h5>
                            <small>Current membership information</small>
                        </div>
                    </div>
                </div>

                <span class="membership-status">
                    <i class="fa-solid fa-circle-check me-1"></i>
                    Active Membership
                </span>
            </div>

            <div class="membership-content">
                <div class="plan-box">
                    <div class="plan-icon">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <div>
                        <span>Membership Plan</span>
                        <strong>Monthly Plan</strong>
                        <small>₹599 / Month</small>
                    </div>
                </div>

                <div class="membership-details">
                    <div>
                        <span>Start Date</span>
                        <strong>07 Aug 2026</strong>
                    </div>

                    <div>
                        <span>Expiry Date</span>
                        <strong>06 Sep 2026</strong>
                    </div>

                    <div>
                        <span>Days Remaining</span>
                        <strong class="days-green">24 Days</strong>
                    </div>

                    <div>
                        <span>Payment Status</span>
                        <strong class="paid">Paid</strong>
                    </div>
                </div>
            </div>

            <div class="progress-section">
                <div class="progress-label">
                    <span>Membership Progress</span>
                    <strong>60%</strong>
                </div>

                <div class="progress">
                    <div class="progress-bar" style="width:60%"></div>
                </div>

                <div class="progress-dates">
                    <span>07 Aug 2026</span>
                    <span>06 Sep 2026</span>
                </div>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-header">
                    <div class="info-icon orange">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div>
                        <h5>Trainer Information</h5>
                        <small>Assigned trainer</small>
                    </div>
                </div>

                <div class="trainer-box">
                    <div class="trainer-avatar">R</div>
                    <div>
                        <strong>Rahul Trainer</strong>
                        <span>Personal Trainer</span>
                        <small>
                            <i class="fa-solid fa-phone me-1"></i>
                            9222222222
                        </small>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <div class="info-card-header">
                    <div class="info-icon red">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div>
                        <h5>Emergency Contact</h5>
                        <small>Emergency contact details</small>
                    </div>
                </div>

                <div class="emergency-box">
                    <div>
                        <span>Contact Name</span>
                        <strong>Rahul Kumar</strong>
                    </div>

                    <div>
                        <span>Relationship</span>
                        <strong>Brother</strong>
                    </div>

                    <div>
                        <span>Phone</span>
                        <strong>9222222222</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-card full-card">
            <div class="info-card-header">
                <div class="info-icon blue">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h5>Address Information</h5>
                    <small>Member residential address</small>
                </div>
            </div>

            <div class="address-content">
                <p>Shankar Nagar, Raipur, Chhattisgarh</p>

                <div class="address-grid">
                    <div>
                        <span>City</span>
                        <strong>Raipur</strong>
                    </div>

                    <div>
                        <span>State</span>
                        <strong>Chhattisgarh</strong>
                    </div>

                    <div>
                        <span>PIN Code</span>
                        <strong>492001</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-card full-card">
            <div class="info-card-header">
                <div class="info-icon gray">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <div>
                    <h5>Medical Information</h5>
                    <small>Health and medical history</small>
                </div>
            </div>

            <div class="medical-content">
                <span>Medical History</span>
                <p>No major medical history. Member has no known medical restrictions.</p>
            </div>
        </div>

        <div class="info-card full-card">
            <div class="info-card-header">
                <div class="info-icon green">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <h5>Quick Statistics</h5>
                    <small>Member activity overview</small>
                </div>
            </div>

            <div class="quick-stats">
                <div class="quick-stat">
                    <div class="quick-stat-icon blue">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div>
                        <span>Total Attendance</span>
                        <strong>18</strong>
                    </div>
                </div>

                <div class="quick-stat">
                    <div class="quick-stat-icon green">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <div>
                        <span>Workout Sessions</span>
                        <strong>15</strong>
                    </div>
                </div>

                <div class="quick-stat">
                    <div class="quick-stat-icon orange">
                        <i class="fa-solid fa-receipt"></i>
                    </div>
                    <div>
                        <span>Total Payments</span>
                        <strong>₹599</strong>
                    </div>
                </div>

                <div class="quick-stat">
                    <div class="quick-stat-icon purple">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div>
                        <span>Memberships</span>
                        <strong>1</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-card full-card">
            <div class="info-card-header">
                <div class="info-icon blue">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <h5>Recent Attendance</h5>
                    <small>Latest member attendance</small>
                </div>

                <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="view-all">
                    View All
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table attendance-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Duration</th>
                            <th>Method</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>07 Aug 2026</td>
                            <td>06:25 AM</td>
                            <td>08:00 AM</td>
                            <td>1h 35m</td>
                            <td>QR Code</td>
                            <td>
                                <span class="attendance-status present">Present</span>
                            </td>
                        </tr>

                        <tr>
                            <td>06 Aug 2026</td>
                            <td>06:30 AM</td>
                            <td>08:05 AM</td>
                            <td>1h 35m</td>
                            <td>QR Code</td>
                            <td>
                                <span class="attendance-status present">Present</span>
                            </td>
                        </tr>

                        <tr>
                            <td>05 Aug 2026</td>
                            <td>06:40 AM</td>
                            <td>08:15 AM</td>
                            <td>1h 35m</td>
                            <td>QR Code</td>
                            <td>
                                <span class="attendance-status present">Present</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="info-card full-card">
            <div class="info-card-header">
                <div class="info-icon orange">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div>
                    <h5>Recent Payments</h5>
                    <small>Latest payment history</small>
                </div>

                <a href="<?= $baseUrl ?>/payments/index.php" class="view-all">
                    View All
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table attendance-table">
                    <thead>
                        <tr>
                            <th>Receipt No.</th>
                            <th>Payment Date</th>
                            <th>Amount</th>
                            <th>Payment Mode</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>REC-10001</td>
                            <td>07 Aug 2026</td>
                            <td>₹599.00</td>
                            <td>UPI</td>
                            <td>
                                <span class="attendance-status present">Success</span>
                            </td>
                        </tr>

                        <tr>
                            <td>REC-00089</td>
                            <td>07 Jul 2026</td>
                            <td>₹599.00</td>
                            <td>Cash</td>
                            <td>
                                <span class="attendance-status present">Success</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bottom-actions">
            <a href="<?= $baseUrl ?>/member/member-list.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Back to Members
            </a>

            <a href="<?= $baseUrl ?>/member/add_member.php?id=1" class="btn btn-primary">
                <i class="fa-solid fa-pen me-1"></i>
                Edit Member
            </a>

            <button type="button" class="btn btn-success" onclick="sendWhatsApp()">
                <i class="fa-brands fa-whatsapp me-1"></i>
                Send WhatsApp
            </button>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.page-actions{display:flex;gap:8px}
.profile-card{background:#fff;border-radius:12px;padding:22px;margin-bottom:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.profile-main{display:flex;align-items:center;gap:18px}
.profile-photo{width:85px;height:85px;border-radius:12px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:30px;font-weight:700;flex-shrink:0}
.profile-info{flex:1}
.profile-name-row{display:flex;align-items:center;gap:10px;flex-wrap:wrap}
.profile-name-row h3{margin:0;font-size:20px;font-weight:700}
.member-code{margin:5px 0 12px;color:#6b7280;font-size:11px}
.profile-contact{display:flex;gap:18px;flex-wrap:wrap;color:#64748b;font-size:11px}
.profile-contact i{color:#2563eb;margin-right:4px}
.profile-actions{display:flex;gap:7px}
.status-badge{padding:5px 10px;border-radius:20px;font-size:10px;font-weight:600}
.status-badge.active{background:#dcfce7;color:#15803d}
.info-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.info-card{background:#fff;border-radius:12px;padding:22px;box-shadow:0 2px 12px rgba(0,0,0,.05);margin-bottom:20px}
.info-card.full-card{width:100%}
.info-card-header{display:flex;align-items:center;gap:11px;border-bottom:1px solid #e5e7eb;padding-bottom:16px;margin-bottom:20px}
.info-card-header h5{margin:0;font-size:15px;font-weight:600}
.info-card-header small{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.info-icon{width:42px;height:42px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
.info-icon.blue{background:#eff6ff;color:#2563eb}
.info-icon.green{background:#ecfdf5;color:#16a34a}
.info-icon.purple{background:#f5f3ff;color:#7c3aed}
.info-icon.orange{background:#fff7ed;color:#ea580c}
.info-icon.red{background:#fef2f2;color:#dc2626}
.info-icon.gray{background:#f3f4f6;color:#4b5563}
.details-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.detail-item span,.membership-details span,.emergency-box span,.address-grid span,.medical-content span{display:block;color:#9ca3af;font-size:10px;margin-bottom:5px}
.detail-item strong,.membership-details strong,.emergency-box strong,.address-grid strong{display:block;color:#374151;font-size:12px}
.text-success{color:#16a34a!important}
.membership-card{background:#fff;border-radius:12px;padding:22px;margin-bottom:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.membership-header{display:flex;justify-content:space-between;align-items:center;gap:15px;border-bottom:1px solid #e5e7eb;padding-bottom:16px;margin-bottom:20px}
.section-title{display:flex;align-items:center;gap:11px}
.section-title h5{margin:0;font-size:15px}
.section-title small{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.membership-status{background:#dcfce7;color:#15803d;border-radius:20px;padding:6px 11px;font-size:10px;font-weight:600}
.membership-content{display:flex;gap:35px;align-items:center}
.plan-box{display:flex;align-items:center;gap:12px;min-width:260px}
.plan-icon{width:48px;height:48px;border-radius:10px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:19px}
.plan-box span,.plan-box small{display:block;color:#9ca3af;font-size:9px}
.plan-box strong{display:block;font-size:14px;margin:3px 0}
.membership-details{display:grid;grid-template-columns:repeat(4,1fr);gap:30px;flex:1}
.days-green{color:#16a34a!important}
.paid{color:#16a34a!important}
.progress-section{margin-top:25px;padding-top:20px;border-top:1px solid #e5e7eb}
.progress-label{display:flex;justify-content:space-between;font-size:10px;margin-bottom:7px;color:#6b7280}
.progress-label strong{color:#2563eb}
.progress{height:8px;background:#e5e7eb;border-radius:10px;overflow:hidden}
.progress-bar{height:100%;background:#2563eb;border-radius:10px}
.progress-dates{display:flex;justify-content:space-between;font-size:9px;color:#9ca3af;margin-top:5px}
.trainer-box{display:flex;align-items:center;gap:12px}
.trainer-avatar{width:48px;height:48px;border-radius:50%;background:#fff7ed;color:#ea580c;display:flex;align-items:center;justify-content:center;font-weight:700}
.trainer-box strong,.trainer-box span,.trainer-box small{display:block}
.trainer-box strong{font-size:13px}
.trainer-box span{font-size:10px;color:#6b7280;margin-top:3px}
.trainer-box small{font-size:9px;color:#9ca3af;margin-top:4px}
.emergency-box{display:grid;grid-template-columns:repeat(3,1fr);gap:15px}
.address-content>p{background:#f8fafc;border-radius:8px;padding:13px;font-size:12px;color:#374151;margin:0 0 18px}
.address-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.medical-content{background:#f8fafc;padding:15px;border-radius:8px}
.medical-content p{font-size:11px;color:#4b5563;margin:0;line-height:1.7}
.quick-stats{display:grid;grid-template-columns:repeat(4,1fr);gap:15px}
.quick-stat{display:flex;align-items:center;gap:10px;border:1px solid #e5e7eb;border-radius:9px;padding:13px}
.quick-stat-icon{width:38px;height:38px;border-radius:8px;display:flex;align-items:center;justify-content:center}
.quick-stat-icon.blue{background:#eff6ff;color:#2563eb}
.quick-stat-icon.green{background:#ecfdf5;color:#16a34a}
.quick-stat-icon.orange{background:#fff7ed;color:#ea580c}
.quick-stat-icon.purple{background:#f5f3ff;color:#7c3aed}
.quick-stat span{display:block;font-size:9px;color:#9ca3af}
.quick-stat strong{display:block;font-size:15px;margin-top:3px}
.view-all{margin-left:auto;text-decoration:none;color:#2563eb;font-size:10px}
.view-all i{margin-left:3px}
.attendance-table{margin:0}
.attendance-table th{background:#f8fafc;color:#6b7280;font-size:10px;white-space:nowrap}
.attendance-table td{font-size:10px;white-space:nowrap}
.attendance-status{padding:5px 8px;border-radius:15px;font-size:9px;font-weight:600}
.attendance-status.present{background:#dcfce7;color:#15803d}
.bottom-actions{display:flex;justify-content:flex-end;gap:8px;margin:5px 0 25px}
@media(max-width:1000px){
.info-grid{grid-template-columns:1fr}
.membership-content{flex-direction:column;align-items:flex-start}
.membership-details{width:100%}
.quick-stats{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:700px){
.page-header{flex-direction:column;align-items:flex-start}
.page-actions,.profile-actions{width:100%}
.page-actions .btn,.profile-actions .btn{flex:1}
.profile-main{flex-direction:column;align-items:flex-start}
.details-grid{grid-template-columns:1fr}
.membership-details{grid-template-columns:1fr 1fr}
.emergency-box,.address-grid{grid-template-columns:1fr}
.quick-stats{grid-template-columns:1fr}
.bottom-actions{flex-direction:column}
.bottom-actions .btn{width:100%}
}
</style>

<script>
function sendWhatsApp(){
    alert('Demo UI: WhatsApp message option will be connected with WhatsApp API later.');
}

function printMember(){
    window.print();
}
</script>

<?php include '../includes/footer.php'; ?>