<?php
$pageTitle = 'Member List';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Member List</div>
            <small class="text-muted">Manage gym members and membership details</small>
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
                <h2>Members</h2>
                <p>View, manage and contact your gym members.</p>
            </div>

            <div class="header-actions">
                <button type="button" class="btn btn-success" onclick="openWhatsAppModal()">
                    <i class="fa-brands fa-whatsapp me-1"></i>
                    WhatsApp Message
                </button>

                <a href="<?= $baseUrl ?>/member/add_member.php" class="btn btn-primary">
                    <i class="fa-solid fa-user-plus me-1"></i>
                    Add Member
                </a>
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
                    <span>Active Members</span>
                    <strong>198</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fa-solid fa-hourglass-half"></i>
                </div>
                <div>
                    <span>Expiring Soon</span>
                    <strong>24</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fa-solid fa-user-xmark"></i>
                </div>
                <div>
                    <span>Expired</span>
                    <strong>23</strong>
                </div>
            </div>
        </div>

        <div class="filter-card">
            <div class="filter-header">
                <div>
                    <h5>Member Filters</h5>
                    <small>Search and filter members</small>
                </div>

                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="resetFilters()">
                    <i class="fa-solid fa-rotate-left me-1"></i>
                    Reset
                </button>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <label>Search Member</label>
                    <input type="text" id="searchMember" class="form-control" placeholder="Name, code or phone">
                </div>

                <div class="col-lg-2 col-md-6">
                    <label>Branch</label>
                    <select id="branchFilter" class="form-select">
                        <option value="">All Branches</option>
                        <option>Raipur Main Branch</option>
                        <option>Bilaspur Branch</option>
                        <option>Durg Branch</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-6">
                    <label>Member Status</label>
                    <select id="memberStatus" class="form-select">
                        <option value="">All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Blocked</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-6">
                    <label>Membership</label>
                    <select id="membershipStatus" class="form-select">
                        <option value="">All</option>
                        <option>Active</option>
                        <option>Expiring Soon</option>
                        <option>Expired</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-6">
                    <label>Gender</label>
                    <select id="genderFilter" class="form-select">
                        <option value="">All</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="col-lg-1 col-md-6 d-flex align-items-end">
                    <button type="button" class="btn btn-primary w-100" onclick="applyFilters()">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="selection-bar" id="selectionBar">
            <div>
                <strong>
                    <span id="selectedCount">0</span> members selected
                </strong>
                <small>Select members to send WhatsApp messages.</small>
            </div>

            <div class="selection-actions">
                <button type="button" class="btn btn-success btn-sm" onclick="openWhatsAppModal()">
                    <i class="fa-brands fa-whatsapp me-1"></i>
                    Send WhatsApp
                </button>

                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="clearSelection()">
                    Clear Selection
                </button>
            </div>
        </div>

        <div class="table-card">
            <div class="table-card-header">
                <div>
                    <h5>Member Records</h5>
                    <small>All gym members</small>
                </div>

                <div class="table-header-actions">
                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectAllMembers()">
                        <i class="fa-solid fa-check-double me-1"></i>
                        Select All
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table member-table align-middle">
                    <thead>
                        <tr>
                            <th width="40">
                                <input type="checkbox" id="selectAll" class="member-checkbox" onchange="toggleAllMembers(this)">
                            </th>
                            <th>#</th>
                            <th>Member</th>
                            <th>Member Code</th>
                            <th>Phone</th>
                            <th>Branch</th>
                            <th>Plan</th>
                            <th>Expiry Date</th>
                            <th>Days Left</th>
                            <th>Membership</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="memberTableBody">
                        <tr>
                            <td>
                                <input type="checkbox" class="member-checkbox member-select" value="1" data-name="Rohan Active Member" data-phone="9111111111">
                            </td>
                            <td>1</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">R</div>
                                    <div>
                                        <strong>Rohan Active Member</strong>
                                        <small>Male | O+</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-101</td>
                            <td>9111111111</td>
                            <td>Raipur Main Branch</td>
                            <td>Monthly Cardio + Weights</td>
                            <td>06 Sep 2026</td>
                            <td>
                                <span class="days-left safe">24 Days</span>
                            </td>
                            <td>
                                <span class="membership active">Active</span>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/member/member-details.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/member/add_member.php?id=1" class="btn btn-sm btn-outline-secondary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-info" title="Attendance">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-outline-success" onclick="singleWhatsApp('Rohan Active Member','9111111111')" title="WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="member-checkbox member-select" value="2" data-name="Amit Sharma" data-phone="9111111112">
                            </td>
                            <td>2</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">A</div>
                                    <div>
                                        <strong>Amit Sharma</strong>
                                        <small>Male | B+</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-102</td>
                            <td>9111111112</td>
                            <td>Raipur Main Branch</td>
                            <td>Muscle Building Plan</td>
                            <td>18 Aug 2026</td>
                            <td>
                                <span class="days-left warning">5 Days</span>
                            </td>
                            <td>
                                <span class="membership expiring">Expiring Soon</span>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/member/member-details.php" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/member/add_member.php?id=2" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-info">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-outline-success" onclick="singleWhatsApp('Amit Sharma','9111111112')">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="member-checkbox member-select" value="3" data-name="Priya Verma" data-phone="9111111113">
                            </td>
                            <td>3</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">P</div>
                                    <div>
                                        <strong>Priya Verma</strong>
                                        <small>Female | A+</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-103</td>
                            <td>9111111113</td>
                            <td>Bilaspur Branch</td>
                            <td>Cardio Fitness Plan</td>
                            <td>12 Aug 2026</td>
                            <td>
                                <span class="days-left expired">Expired</span>
                            </td>
                            <td>
                                <span class="membership expired">Expired</span>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/member/member-details.php" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/member/add_member.php?id=3" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-info">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-outline-success" onclick="singleWhatsApp('Priya Verma','9111111113')">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="member-checkbox member-select" value="4" data-name="Suresh Kumar" data-phone="9111111114">
                            </td>
                            <td>4</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">S</div>
                                    <div>
                                        <strong>Suresh Kumar</strong>
                                        <small>Male | O+</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-104</td>
                            <td>9111111114</td>
                            <td>Raipur Main Branch</td>
                            <td>Strength Training Plan</td>
                            <td>25 Aug 2026</td>
                            <td>
                                <span class="days-left warning">12 Days</span>
                            </td>
                            <td>
                                <span class="membership expiring">Expiring Soon</span>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/member/member-details.php" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/member/add_member.php?id=4" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-info">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-outline-success" onclick="singleWhatsApp('Suresh Kumar','9111111114')">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="member-checkbox member-select" value="5" data-name="Neha Singh" data-phone="9111111115">
                            </td>
                            <td>5</td>
                            <td>
                                <div class="member-info">
                                    <div class="member-avatar">N</div>
                                    <div>
                                        <strong>Neha Singh</strong>
                                        <small>Female | O+</small>
                                    </div>
                                </div>
                            </td>
                            <td>GYM-105</td>
                            <td>9111111115</td>
                            <td>Durg Branch</td>
                            <td>Monthly Cardio + Weights</td>
                            <td>30 Sep 2026</td>
                            <td>
                                <span class="days-left safe">48 Days</span>
                            </td>
                            <td>
                                <span class="membership active">Active</span>
                            </td>
                            <td>
                                <span class="status inactive">Inactive</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/member/member-details.php" class="btn btn-sm btn-outline-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/member/add_member.php?id=5" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="<?= $baseUrl ?>/attendance/attendance-details.php" class="btn btn-sm btn-outline-info">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-outline-success" onclick="singleWhatsApp('Neha Singh','9111111115')">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <span>Showing 1 to 5 of 245 members</span>

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

<!-- WhatsApp Modal -->
<div class="modal fade" id="whatsappModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content whatsapp-modal">
            <div class="modal-header">
                <div class="modal-title-wrapper">
                    <div class="whatsapp-modal-icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <h5 class="modal-title">Send WhatsApp Message</h5>
                        <small id="recipientInfo">0 members selected</small>
                    </div>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="message-type-section">
                    <label class="form-label">Message Type</label>

                    <div class="message-type-grid">
                        <button type="button" class="message-type active" onclick="selectMessageType(this,'fees')">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <span>Fees Reminder</span>
                            <small>Remind about pending fees</small>
                        </button>

                        <button type="button" class="message-type" onclick="selectMessageType(this,'expiry')">
                            <i class="fa-solid fa-calendar-xmark"></i>
                            <span>Expiry Reminder</span>
                            <small>Membership expiry reminder</small>
                        </button>

                        <button type="button" class="message-type" onclick="selectMessageType(this,'payment')">
                            <i class="fa-solid fa-receipt"></i>
                            <span>Payment Reminder</span>
                            <small>Pending payment reminder</small>
                        </button>

                        <button type="button" class="message-type" onclick="selectMessageType(this,'general')">
                            <i class="fa-solid fa-message"></i>
                            <span>General Message</span>
                            <small>Send custom message</small>
                        </button>
                    </div>
                </div>

                <div class="message-preview-box">
                    <div class="preview-header">
                        <span>
                            <i class="fa-brands fa-whatsapp"></i>
                            Message Preview
                        </span>

                        <span class="preview-badge">WhatsApp</span>
                    </div>

                    <div class="whatsapp-preview">
                        <div class="preview-message" id="messagePreview">
                            Dear Member,<br><br>
                            Your gym membership fees are pending. Please clear your outstanding amount at the earliest.<br><br>
                            Thank you,<br>
                            Seba24 Fitness Club
                        </div>
                    </div>
                </div>

                <div class="custom-message-section">
                    <label class="form-label">Message</label>

                    <textarea id="whatsappMessage" class="form-control" rows="5">Dear Member,

Your gym membership fees are pending. Please clear your outstanding amount at the earliest.

Thank you,
Seba24 Fitness Club</textarea>

                    <div class="message-help">
                        <span>Available variables:</span>
                        <button type="button" onclick="insertVariable('{name}')">{name}</button>
                        <button type="button" onclick="insertVariable('{member_code}')">{member_code}</button>
                        <button type="button" onclick="insertVariable('{expiry_date}')">{expiry_date}</button>
                        <button type="button" onclick="insertVariable('{days_left}')">{days_left}</button>
                    </div>
                </div>

                <div class="selected-members-box">
                    <div class="selected-members-header">
                        <strong>Selected Members</strong>
                        <span id="selectedMembersCount">0</span>
                    </div>

                    <div id="selectedMembersList" class="selected-members-list">
                        <div class="empty-selection">
                            No members selected.
                        </div>
                    </div>
                </div>

                <div class="warning-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <div>
                        <strong>Demo Mode</strong>
                        <p>
                            This is currently a static UI. Actual WhatsApp messages will be connected later with your WhatsApp Business/API service.
                        </p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button" class="btn btn-success" onclick="sendWhatsAppMessage()">
                    <i class="fa-brands fa-whatsapp me-1"></i>
                    Send WhatsApp Message
                </button>
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
.stat-icon.orange{background:#fff7ed;color:#ea580c}
.stat-icon.red{background:#fef2f2;color:#dc2626}
.stat-card span{display:block;color:#6b7280;font-size:11px}
.stat-card strong{display:block;font-size:20px;margin-top:3px}
.filter-card{background:#fff;border-radius:12px;padding:20px 25px;margin-bottom:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.filter-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}
.filter-header h5{margin:0;font-size:15px}
.filter-header small{color:#6b7280}
.filter-card label{display:block;font-size:11px;font-weight:600;color:#374151;margin-bottom:5px}
.form-control,.form-select{font-size:12px;min-height:40px}
.selection-bar{display:none;background:#eff6ff;border:1px solid #bfdbfe;border-radius:10px;padding:12px 16px;margin-bottom:15px;justify-content:space-between;align-items:center}
.selection-bar.show{display:flex}
.selection-bar strong{display:block;font-size:12px;color:#1e40af}
.selection-bar small{display:block;color:#64748b;font-size:10px;margin-top:2px}
.selection-actions{display:flex;gap:7px}
.table-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden}
.table-card-header{padding:18px 22px;border-bottom:1px solid #e5e7eb;display:flex;justify-content:space-between;align-items:center}
.table-card-header h5{margin:0;font-size:15px}
.table-card-header small{color:#6b7280}
.member-table{margin:0}
.member-table th{font-size:10px;color:#6b7280;background:#f8fafc;white-space:nowrap}
.member-table td{font-size:10px;white-space:nowrap}
.member-checkbox{width:15px;height:15px;cursor:pointer}
.member-info{display:flex;align-items:center;gap:8px}
.member-avatar{width:35px;height:35px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px}
.member-info strong{display:block;font-size:11px}
.member-info small{display:block;color:#9ca3af;font-size:9px;margin-top:2px}
.days-left{display:inline-block;padding:5px 8px;border-radius:5px;font-size:9px;font-weight:600}
.days-left.safe{background:#dcfce7;color:#15803d}
.days-left.warning{background:#fef3c7;color:#b45309}
.days-left.expired{background:#fee2e2;color:#b91c1c}
.membership{display:inline-block;padding:5px 8px;border-radius:15px;font-size:9px;font-weight:600}
.membership.active{background:#dcfce7;color:#15803d}
.membership.expiring{background:#fef3c7;color:#b45309}
.membership.expired{background:#fee2e2;color:#b91c1c}
.status{display:inline-block;padding:5px 8px;border-radius:15px;font-size:9px;font-weight:600}
.status.active{background:#dcfce7;color:#15803d}
.status.inactive{background:#f1f5f9;color:#64748b}
.action-buttons{display:flex;gap:4px}
.action-buttons .btn{width:30px;height:28px;padding:0;display:flex;align-items:center;justify-content:center}
.pagination{padding:15px 20px;border-top:1px solid #e5e7eb;display:flex;justify-content:space-between;align-items:center;color:#6b7280;font-size:10px}
.pagination>div{display:flex;gap:4px}
.whatsapp-modal{border:0;border-radius:14px;overflow:hidden}
.modal-header{padding:18px 22px}
.modal-title-wrapper{display:flex;align-items:center;gap:12px}
.whatsapp-modal-icon{width:42px;height:42px;border-radius:50%;background:#dcfce7;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:22px}
.modal-title{font-size:16px;margin:0;font-weight:700}
.modal-title-wrapper small{font-size:10px;color:#6b7280}
.message-type-section{margin-bottom:20px}
.message-type-section .form-label,.custom-message-section .form-label{font-size:12px;font-weight:600}
.message-type-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:8px}
.message-type{border:1px solid #e5e7eb;background:#fff;border-radius:9px;padding:12px 8px;text-align:left;cursor:pointer;transition:.2s}
.message-type i{font-size:16px;color:#64748b;margin-bottom:7px}
.message-type span{display:block;font-size:10px;font-weight:600;color:#374151}
.message-type small{display:block;font-size:8px;color:#9ca3af;margin-top:3px}
.message-type:hover,.message-type.active{border-color:#22c55e;background:#f0fdf4}
.message-type.active i{color:#16a34a}
.message-preview-box{border:1px solid #d1fae5;border-radius:10px;overflow:hidden;margin-bottom:18px}
.preview-header{background:#f0fdf4;padding:10px 13px;display:flex;justify-content:space-between;font-size:10px;font-weight:600;color:#166534}
.preview-badge{background:#dcfce7;padding:3px 7px;border-radius:10px}
.whatsapp-preview{background:#efeae2;padding:18px}
.preview-message{background:#fff;border-radius:8px;padding:12px;font-size:11px;line-height:1.6;max-width:80%;box-shadow:0 1px 2px rgba(0,0,0,.1)}
.custom-message-section{margin-bottom:18px}
.message-help{margin-top:7px;display:flex;align-items:center;gap:5px;flex-wrap:wrap;font-size:9px;color:#6b7280}
.message-help button{border:1px solid #d1d5db;background:#fff;border-radius:4px;padding:3px 6px;font-size:9px;color:#2563eb}
.selected-members-box{border:1px solid #e5e7eb;border-radius:9px;margin-bottom:15px}
.selected-members-header{padding:10px 12px;border-bottom:1px solid #e5e7eb;display:flex;justify-content:space-between;font-size:11px}
.selected-members-header span{background:#2563eb;color:#fff;border-radius:12px;padding:2px 7px}
.selected-members-list{padding:10px;display:flex;gap:6px;flex-wrap:wrap;max-height:100px;overflow:auto}
.selected-member-tag{background:#f1f5f9;border-radius:15px;padding:5px 9px;font-size:9px;color:#374151}
.empty-selection{font-size:10px;color:#9ca3af}
.warning-box{display:flex;gap:10px;padding:12px;background:#fff7ed;border:1px solid #fed7aa;border-radius:8px}
.warning-box>i{color:#ea580c;margin-top:2px}
.warning-box strong{font-size:10px;color:#9a3412}
.warning-box p{font-size:9px;color:#9a3412;margin:3px 0 0}
.modal-footer{padding:15px 20px}
@media(max-width:1100px){.stats-grid{grid-template-columns:repeat(2,1fr)}.member-table{min-width:1300px}}
@media(max-width:700px){.page-header{flex-direction:column;align-items:flex-start}.header-actions{width:100%}.header-actions .btn{flex:1}.stats-grid{grid-template-columns:1fr}.message-type-grid{grid-template-columns:repeat(2,1fr)}.selection-bar{flex-direction:column;align-items:flex-start;gap:10px}.selection-actions{width:100%}.selection-actions .btn{flex:1}.pagination{flex-direction:column;gap:10px}}
</style>

<script>
let selectedMessageType = 'fees';

document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.member-select').forEach(function(checkbox){
        checkbox.addEventListener('change', updateSelection);
    });

    document.getElementById('whatsappMessage').addEventListener('input', function(){
        document.getElementById('messagePreview').innerHTML = this.value.replace(/\n/g,'<br>');
    });
});

function getSelectedMembers(){
    return Array.from(document.querySelectorAll('.member-select:checked'));
}

function updateSelection(){
    const selected = getSelectedMembers();
    const count = selected.length;

    document.getElementById('selectedCount').textContent = count;
    document.getElementById('selectedMembersCount').textContent = count;

    const selectionBar = document.getElementById('selectionBar');

    if(count > 0){
        selectionBar.classList.add('show');
    }else{
        selectionBar.classList.remove('show');
    }

    const list = document.getElementById('selectedMembersList');

    if(count === 0){
        list.innerHTML = '<div class="empty-selection">No members selected.</div>';
        return;
    }

    list.innerHTML = '';

    selected.forEach(function(member){
        const tag = document.createElement('div');
        tag.className = 'selected-member-tag';
        tag.innerHTML = member.dataset.name + ' - ' + member.dataset.phone;
        list.appendChild(tag);
    });

    const all = document.querySelectorAll('.member-select');
    const checked = document.querySelectorAll('.member-select:checked');

    document.getElementById('selectAll').checked = all.length === checked.length;
}

function toggleAllMembers(checkbox){
    document.querySelectorAll('.member-select').forEach(function(item){
        item.checked = checkbox.checked;
    });

    updateSelection();
}

function selectAllMembers(){
    document.getElementById('selectAll').checked = true;

    document.querySelectorAll('.member-select').forEach(function(item){
        item.checked = true;
    });

    updateSelection();
}

function clearSelection(){
    document.getElementById('selectAll').checked = false;

    document.querySelectorAll('.member-select').forEach(function(item){
        item.checked = false;
    });

    updateSelection();
}

function openWhatsAppModal(){
    const selected = getSelectedMembers();

    if(selected.length === 0){
        alert('Please select at least one member first.');
        return;
    }

    updateSelection();

    const modal = new bootstrap.Modal(document.getElementById('whatsappModal'));
    modal.show();
}

function singleWhatsApp(name, phone){
    document.querySelectorAll('.member-select').forEach(function(item){
        item.checked = false;
    });

    const member = document.querySelector('.member-select[data-phone="' + phone + '"]');

    if(member){
        member.checked = true;
    }

    updateSelection();
    openWhatsAppModal();
}

function selectMessageType(button,type){
    document.querySelectorAll('.message-type').forEach(function(item){
        item.classList.remove('active');
    });

    button.classList.add('active');
    selectedMessageType = type;

    let message = '';

    if(type === 'fees'){
        message = `Dear {name},

Your gym membership fees are pending. Please clear your outstanding amount at the earliest.

Thank you,
Seba24 Fitness Club`;
    }

    if(type === 'expiry'){
        message = `Dear {name},

Your gym membership is going to expire on {expiry_date}. You have {days_left} days remaining.

Please renew your membership to continue enjoying our gym services.

Thank you,
Seba24 Fitness Club`;
    }

    if(type === 'payment'){
        message = `Dear {name},

This is a reminder regarding your pending payment.

Please clear your pending amount at the earliest.

Thank you,
Seba24 Fitness Club`;
    }

    if(type === 'general'){
        message = `Dear {name},

Thank you for being a valued member of Seba24 Fitness Club.

We hope you are enjoying your fitness journey with us.

Thank you,
Seba24 Fitness Club`;
    }

    document.getElementById('whatsappMessage').value = message;
    document.getElementById('messagePreview').innerHTML = message.replace(/\n/g,'<br>');
}

function insertVariable(variable){
    const textarea = document.getElementById('whatsappMessage');
    const start = textarea.selectionStart;
    const end = textarea.selectionEnd;
    const value = textarea.value;

    textarea.value = value.substring(0,start) + variable + value.substring(end);
    textarea.focus();
    textarea.selectionStart = start + variable.length;
    textarea.selectionEnd = start + variable.length;

    document.getElementById('messagePreview').innerHTML = textarea.value.replace(/\n/g,'<br>');
}

function sendWhatsAppMessage(){
    const selected = getSelectedMembers();

    if(selected.length === 0){
        alert('Please select at least one member.');
        return;
    }

    const message = document.getElementById('whatsappMessage').value.trim();

    if(!message){
        alert('Please enter a message.');
        return;
    }

    alert(
        'Demo Mode\\n\\n' +
        selected.length +
        ' member(s) selected.\\n\\n' +
        'Actual WhatsApp API integration will be connected later.'
    );
}

function applyFilters(){
    alert('Member filters applied in UI demo.');
}

function resetFilters(){
    document.getElementById('searchMember').value = '';
    document.getElementById('branchFilter').value = '';
    document.getElementById('memberStatus').value = '';
    document.getElementById('membershipStatus').value = '';
    document.getElementById('genderFilter').value = '';

    alert('Filters reset.');
}
</script>

<?php include '../includes/footer.php'; ?>