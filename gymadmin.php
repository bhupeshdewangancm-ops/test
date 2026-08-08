<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seba24 Gym SaaS - Gym Owner / Staff Portal Detailed UI</title>
    <style>
        @page {
            size: A4;
            margin: 15mm;
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2D3748;
            line-height: 1.4;
            background-color: #ffffff;
            margin: 0;
            padding: 10px;
            font-size: 13px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #2B6CB0;
            padding-bottom: 12px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #2B6CB0;
            margin: 0;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .header p {
            color: #4A5568;
            margin: 5px 0 0;
            font-size: 12px;
            font-weight: 600;
        }
        .module-card {
            border: 1px solid #CBD5E0;
            border-radius: 6px;
            margin-bottom: 25px;
            page-break-inside: avoid;
            background: #ffffff;
        }
        .module-header {
            background-color: #2B6CB0;
            color: #ffffff;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .module-header.addon {
            background-color: #2C7A7B;
        }
        .module-header .badge {
            font-size: 10px;
            background-color: #E2E8F0;
            color: #2B6CB0;
            padding: 2px 8px;
            border-radius: 12px;
            font-weight: bold;
        }
        .section-box {
            padding: 10px 12px;
            border-bottom: 1px solid #E2E8F0;
        }
        .section-box:last-child {
            border-bottom: none;
        }
        .section-title {
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            color: #718096;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }
        .filter-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        .filter-tag {
            background-color: #EDF2F7;
            border: 1px solid #CBD5E0;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 11px;
            color: #2D3748;
            font-weight: 600;
        }
        .filter-tag span {
            color: #2B6CB0;
            font-weight: normal;
        }
        .table-preview {
            width: 100%;
            border-collapse: collapse;
            margin-top: 4px;
            font-size: 11px;
        }
        .table-preview th {
            background-color: #F7FAFC;
            color: #4A5568;
            text-align: left;
            padding: 6px 8px;
            border: 1px solid #E2E8F0;
            font-weight: bold;
        }
        .table-preview td {
            padding: 6px 8px;
            border: 1px solid #E2E8F0;
            color: #2D3748;
        }
        .btn-action {
            background-color: #EBF8FF;
            color: #2B6CB0;
            border: 1px solid #BEE3F8;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
            display: inline-block;
            margin-right: 3px;
        }
        .btn-action.primary {
            background-color: #2B6CB0;
            color: #ffffff;
            border-color: #2B6CB0;
        }
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 8px;
        }
        .kpi-box {
            background-color: #F7FAFC;
            border: 1px solid #E2E8F0;
            padding: 8px 10px;
            border-radius: 5px;
        }
        .kpi-box .label {
            font-size: 10px;
            color: #718096;
            text-transform: uppercase;
            font-weight: bold;
        }
        .kpi-box .val {
            font-size: 15px;
            font-weight: bold;
            color: #2B6CB0;
            margin-top: 4px;
        }
        .footer {
            text-align: center;
            font-size: 10px;
            color: #A0AEC0;
            margin-top: 30px;
            border-top: 1px solid #E2E8F0;
            padding-top: 10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>2. GYM OWNER / STAFF PORTAL — Detailed UI Architecture</h1>
        <p>Complete Blueprint for All 9 Tenant ERP Menus & Sub-Menus (RBAC & Branch Controlled)</p>
    </div>

    <!-- ================= 1. DASHBOARD ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>1. Dashboard — Tenant Overview & Today Metrics (dashboard.blade.php)</span>
            <span class="badge">All Staff</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Bar & Branch Switcher</div>
            <span class="btn-action primary">Branch: Raipur Main Branch ▼</span>
            <span class="btn-action">+ Quick Member Onboarding</span>
            <span class="btn-action">Scan Gate QR</span>
        </div>
        <div class="section-box">
            <div class="section-title">KPI Metric Cards</div>
            <div class="kpi-grid">
                <div class="kpi-box"><div class="label">Today Check-ins</div><div class="val">84 Members</div></div>
                <div class="kpi-box"><div class="label">Active Members</div><div class="val">310 Members</div></div>
                <div class="kpi-box"><div class="label">Pending Dues (Fee)</div><div class="val" style="color:#C53030;">₹45,000</div></div>
                <div class="kpi-box"><div class="label">Expiring in 7 Days</div><div class="val" style="color:#DD6B20;">14 Members</div></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Recent Gate Check-ins Quick Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Member Code</th>
                        <th>Member Name</th>
                        <th>Branch</th>
                        <th>Check-in Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>09:15 AM</td>
                        <td>GYM-101</td>
                        <td>Rohan Active</td>
                        <td>Raipur</td>
                        <td style="color:green;font-weight:bold;">Allowed (Active Plan)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 2. DESK & ATTENDANCE ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>2.1 Desk & Attendance — Gate Check-In / Scan (checkin/index.blade.php)</span>
            <span class="badge">Front Desk</span>
        </div>
        <div class="section-box">
            <div class="section-title">Interactive Scan Input & Audio Feedback</div>
            <div class="filter-grid">
                <div class="filter-tag">Input Box: <span>Type Member Code (GYM-101) & Hit Enter</span></div>
                <div class="filter-tag">Scanner Mode: <span>Barcode / RFID Reader Active</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Live Gate Validation Logs Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>Code</th>
                        <th>Member Name</th>
                        <th>Plan Expiry</th>
                        <th>Gate Validation</th>
                        <th>Manual Override</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10:00 AM</td>
                        <td>GYM-102</td>
                        <td>Suresh Overdue</td>
                        <td>15-Jul-2026 (Expired)</td>
                        <td style="color:red;font-weight:bold;">BLOCKED (Fee Due)</td>
                        <td><span class="btn-action">Grant 1-Day Pass</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>2.2 Desk & Attendance — Staff Attendance (staff-attendance/index.blade.php)</span>
            <span class="badge">Front Desk</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons & Filters</div>
            <span class="btn-action primary">+ Check-In Staff</span>
            <span class="filter-tag" style="display:inline-block;">Date: <span>Today (31-Jul-2026)</span></span>
        </div>
        <div class="section-box">
            <div class="section-title">Staff Attendance Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Check-In Time</th>
                        <th>Check-Out Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vikram Trainer</td>
                        <td>Trainer</td>
                        <td>06:00 AM</td>
                        <td>--:--</td>
                        <td style="color:green;font-weight:bold;">Present</td>
                        <td><span class="btn-action">Mark Out</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 3. MEMBER MANAGEMENT ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>3.1 Member Management — All Members List (members/index.blade.php)</span>
            <span class="badge">Core CRM</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add New Member</span>
            <span class="btn-action">Export Members (Excel)</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Name / Phone / Member Code</span></div>
                <div class="filter-tag">Branch: <span>All Branches / Raipur / Bhilai</span></div>
                <div class="filter-tag">Status: <span>Active / Expired / Blocked</span></div>
                <div class="filter-tag">Fee Due: <span>All / Fully Paid / Overdue Only</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Members Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Member Name & Phone</th>
                        <th>Branch</th>
                        <th>Current Plan</th>
                        <th>Fee Dues</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GYM-101</td>
                        <td>Rohan Active (9111111111)</td>
                        <td>Raipur</td>
                        <td>Monthly Cardio</td>
                        <td style="color:green;">₹0 (Paid)</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">View</span> <span class="btn-action">ID Card</span> <span class="btn-action">Renew</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>3.2 Member Management — Add New Member (members/create.blade.php)</span>
            <span class="badge">Core CRM</span>
        </div>
        <div class="section-box">
            <div class="section-title">Member Onboarding Form Fields Structure</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Form Section</th>
                        <th>Input Fields Required</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Basic Info</strong></td>
                        <td>Full Name, Member Code (Auto/Manual), Phone, Email, Password, Gender, Blood Group</td>
                    </tr>
                    <tr>
                        <td><strong>Branch & Assignment</strong></td>
                        <td>Branch Selection (Raipur/Bhilai), Joining Date, Assigned Trainer</td>
                    </tr>
                    <tr>
                        <td><strong>Initial Subscription</strong></td>
                        <td>Select Plan, Plan Price, Discount, Initial Paid Amount, Payment Mode (Cash/Online)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>3.3 Member Management — Expiring Memberships (members/expiring.blade.php)</span>
            <span class="badge">Core CRM</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">Send Bulk WhatsApp Renewal Reminders</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Timeframe: <span>Expiring in Next 3 Days / 7 Days / 15 Days</span></div>
                <div class="filter-tag">Branch: <span>All Branches</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Expiring Members Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Member Code</th>
                        <th>Member Name & Phone</th>
                        <th>Plan Name</th>
                        <th>Expiry Date</th>
                        <th>Days Left</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GYM-105</td>
                        <td>Amit Kumar (9333333333)</td>
                        <td>Monthly Weights</td>
                        <td>03-Aug-2026</td>
                        <td style="color:orange;font-weight:bold;">3 Days Left</td>
                        <td><span class="btn-action">Send WhatsApp</span> <span class="btn-action">Renew Plan</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 4. PLANS & SUBSCRIPTIONS ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>4.1 Plans & Subscriptions — Gym Membership Plans (plans/index.blade.php)</span>
            <span class="badge">Management</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create Membership Plan</span>
        </div>
        <div class="section-box">
            <div class="section-title">Membership Plans Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Plan Name</th>
                        <th>Duration (Days/Months)</th>
                        <th>Price (₹)</th>
                        <th>Access Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monthly Cardio + Weights</td>
                        <td>30 Days</td>
                        <td>₹1,500</td>
                        <td>Gym Floor + Cardio</td>
                        <td style="color:green;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Disable</span></td>
                    </tr>
                    <tr>
                        <td>Annual VIP Membership</td>
                        <td>365 Days</td>
                        <td>₹12,000</td>
                        <td>All Access + Steam Bath</td>
                        <td style="color:green;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Disable</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>4.2 Plans & Subscriptions — Active Subscriptions (subscriptions/index.blade.php)</span>
            <span class="badge">Management</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Member Name / Plan Name</span></div>
                <div class="filter-tag">Status: <span>Active / Expired / Cancelled</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Active Subscriptions Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Sub ID</th>
                        <th>Member Name</th>
                        <th>Assigned Plan</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Assigned Trainer</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#SUB-1</td>
                        <td>Rohan Active</td>
                        <td>Monthly Cardio</td>
                        <td>31-Jul-2026</td>
                        <td>30-Aug-2026</td>
                        <td>Vikram Trainer</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Change Plan</span> <span class="btn-action">Switch Trainer</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 5. BILLING & FINANCE ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>5.1 Billing & Finance — Invoices & Due Bills (invoices/index.blade.php)</span>
            <span class="badge">Finance</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create Custom Invoice</span>
            <span class="btn-action">Send Dues Reminder SMS</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Invoice No / Member Name</span></div>
                <div class="filter-tag">Status: <span>All / Paid / Partial / Unpaid (Overdue)</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Invoices Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Member Name</th>
                        <th>Total (₹)</th>
                        <th>Paid (₹)</th>
                        <th>Due (₹)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>INV-002</td>
                        <td>Suresh Overdue</td>
                        <td>₹12,000</td>
                        <td>₹2,000</td>
                        <td style="color:red;font-weight:bold;">₹10,000</td>
                        <td style="color:orange;font-weight:bold;">Partial</td>
                        <td><span class="btn-action">Collect Payment</span> <span class="btn-action">Print PDF</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>5.2 Billing & Finance — Payments Collection (payments/index.blade.php)</span>
            <span class="badge">Finance</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Payment Mode: <span>All / Cash / UPI / Card / Bank Transfer</span></div>
                <div class="filter-tag">Date Filter: <span>Today / This Month</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Payment Collections Log Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Txn ID</th>
                        <th>Invoice Ref</th>
                        <th>Member Name</th>
                        <th>Amount Paid</th>
                        <th>Mode</th>
                        <th>Date</th>
                        <th>Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#PAY-501</td>
                        <td>INV-001</td>
                        <td>Rohan Active</td>
                        <td>₹1,500</td>
                        <td>Cash</td>
                        <td>31-Jul-2026</td>
                        <td><span class="btn-action">Print Receipt</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>5.3 Billing & Finance — Gym Expenses & Vouchers (expenses/index.blade.php)</span>
            <span class="badge">Owner Only</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add Expense Voucher</span>
        </div>
        <div class="section-box">
            <div class="section-title">Gym Expenses Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Voucher No</th>
                        <th>Expense Category</th>
                        <th>Description / Vendor</th>
                        <th>Amount (₹)</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EXP-101</td>
                        <td>Electricity Bill</td>
                        <td>State Power Distribution Co.</td>
                        <td>₹8,500</td>
                        <td>30-Jul-2026</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Delete</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 6. WORKOUT & DIET PLANNER ================= -->
    <div class="module-card">
        <div class="module-header addon">
            <span>6.1 Workout & Diet Planner — Exercise Library (exercises/index.blade.php)</span>
            <span class="badge">Module: DIET_WORKOUT</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add New Exercise</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Exercise Name / Target Muscle</span></div>
                <div class="filter-tag">Muscle Group: <span>All / Chest / Back / Legs / Biceps</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Exercise Library Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Exercise Name</th>
                        <th>Target Muscle</th>
                        <th>Video Tutorial URL</th>
                        <th>Instructions Preview</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Flat Bench Press</td>
                        <td>Chest</td>
                        <td>youtube.com/example1</td>
                        <td>Lie on bench and press upward...</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">View</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header addon">
            <span>6.2-6.4 Workout & Diet Planner — Routines, Diets & Assigned Plans</span>
            <span class="badge">Module: DIET_WORKOUT</span>
        </div>
        <div class="section-box">
            <div class="section-title">Assigned Plans & Templates Sub-Screens Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Sub-Menu Screen</th>
                        <th>Purpose & Features</th>
                        <th>Actions Available</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Workout Routines</strong></td>
                        <td>Create reusable workout templates (e.g. 4-Day Split, Fat Loss Circuit).</td>
                        <td><span class="btn-action">Create Routine</span></td>
                    </tr>
                    <tr>
                        <td><strong>Diet Charts / Meals</strong></td>
                        <td>Configure meal plans with calories and macro breakdowns.</td>
                        <td><span class="btn-action">Create Diet Plan</span></td>
                    </tr>
                    <tr>
                        <td><strong>Assigned Plans</strong></td>
                        <td>Map workout templates and diet charts to specific active members.</td>
                        <td><span class="btn-action">Assign to Member</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 7. SUPPLEMENT STORE (POS) ================= -->
    <div class="module-card">
        <div class="module-header addon">
            <span>7.1 Supplement Store (POS) — Product Inventory (products/index.blade.php)</span>
            <span class="badge">Module: POS_STORE</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add New Product</span>
            <span class="btn-action">Open POS Billing Screen</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Product Name / SKU Code</span></div>
                <div class="filter-tag">Stock Filter: <span>All / In Stock / Low Stock Alert</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Product Inventory Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>SKU Code</th>
                        <th>Product Name</th>
                        <th>Price (₹)</th>
                        <th>Stock Qty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WP-1KG-001</td>
                        <td>Whey Protein 1Kg</td>
                        <td>₹2,500</td>
                        <td>20 units</td>
                        <td style="color:green;">In Stock</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Add Stock</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header addon">
            <span>7.2-7.3 POS Store — POS Counter Billing & Sales Reports</span>
            <span class="badge">Module: POS_STORE</span>
        </div>
        <div class="section-box">
            <div class="section-title">POS Counter & Sales Report Features</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Screen Name</th>
                        <th>Layout & Functionality</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>POS Billing Screen</strong></td>
                        <td>Barcode scanning, cart management, instant receipt printing for walk-in or member supplement purchases.</td>
                    </tr>
                    <tr>
                        <td><strong>Sales & Stock Report</strong></td>
                        <td>Daily revenue breakdown, top-selling supplements, and stock adjustment logs (Owner Only).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 8. STAFF & HR CONTROL ================= -->
    <div class="module-card">
        <div class="module-header" style="background-color: #9B2C2C;">
            <span>8. Staff & HR Control — Gym Staff & Trainers (staff/index.blade.php)</span>
            <span class="badge" style="color:#9B2C2C;">Owner Only</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create Staff Login (Manager / Trainer / Receptionist)</span>
        </div>
        <div class="section-box">
            <div class="section-title">Gym Staff Accounts Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Email & Phone</th>
                        <th>Assigned Role</th>
                        <th>Branch</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vikram Trainer</td>
                        <td>trainer@seba24.com | 9800000003</td>
                        <td><strong>Trainer</strong></td>
                        <td>Raipur Branch</td>
                        <td style="color:green;">Active</td>
                        <td><span class="btn-action">Edit Role</span> <span class="btn-action">Reset Password</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 9. GYM SETTINGS & CONFIGS ================= -->
    <div class="module-card">
        <div class="module-header" style="background-color: #9B2C2C;">
            <span>9. Gym Settings & Configs — Profile, Branding & Branches</span>
            <span class="badge" style="color:#9B2C2C;">Owner Only</span>
        </div>
        <div class="section-box">
            <div class="section-title">Settings Configurations Available</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Setting Section</th>
                        <th>Details Managed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Branches Management</strong></td>
                        <td>Switch, create, or update gym branches (Raipur Main, Bhilai Branch, etc.).</td>
                    </tr>
                    <tr>
                        <td><strong>Gym Profile & Branding</strong></td>
                        <td>Upload Gym Logo, update Business Name, Phone, GST / Tax rates, and currency format.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        Generated for Seba24 Gym SaaS Project • Gym Owner & Staff Portal UI Blueprint • Print-Ready A4 CSS
    </div>

</body>
</html>