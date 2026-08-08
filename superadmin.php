<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seba24 Gym SaaS - Super Admin Complete UI Wireframes</title>
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
            border-bottom: 3px solid #1A365D;
            padding-bottom: 12px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #1A365D;
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
            background-color: #1A365D;
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
        .module-header .badge {
            font-size: 10px;
            background-color: #E2E8F0;
            color: #1A365D;
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
            color: #3182CE;
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
            font-size: 16px;
            font-weight: bold;
            color: #1A365D;
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
        <h1>1. SUPER ADMIN PORTAL — Detailed UI Architecture</h1>
        <p>Complete Blueprint for All 5 Menus & 11 Sub-Menus (SaaS Core Platform)</p>
    </div>

    <!-- ================= 1. DASHBOARD ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>1. Dashboard — SaaS Executive Overview (dashboard.blade.php)</span>
            <span class="badge">SaaS Core</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Bar & Date Controls</div>
            <span class="btn-action primary">+ Onboard New Gym</span>
            <span class="btn-action">Download MRR Report</span>
            <span class="btn-action">Date Filter: This Month ▼</span>
        </div>
        <div class="section-box">
            <div class="section-title">KPI Metric Cards (Top Section)</div>
            <div class="kpi-grid">
                <div class="kpi-box"><div class="label">Total Onboarded Gyms</div><div class="val">142 Gyms</div></div>
                <div class="kpi-box"><div class="label">Active SaaS Subscriptions</div><div class="val">128 Active</div></div>
                <div class="kpi-box"><div class="label">Monthly Recurring Revenue (MRR)</div><div class="val">₹3,45,000</div></div>
                <div class="kpi-box"><div class="label">Expiring in Next 7 Days</div><div class="val" style="color:#C53030;">12 Gyms</div></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Quick Glance Table: Recently Registered Tenants & Expiring Soon</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Gym Name</th>
                        <th>Owner Contact</th>
                        <th>Selected SaaS Plan</th>
                        <th>Active Modules</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Seba24 Fitness Club</td>
                        <td>Rahul Sharma (9800000001)</td>
                        <td>Enterprise VIP</td>
                        <td>DIET_WORKOUT, POS_STORE</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Login As Tenant</span> <span class="btn-action">Manage</span></td>
                    </tr>
                    <tr>
                        <td>Gold Fitness Club</td>
                        <td>Amit Verma (9900000001)</td>
                        <td>Basic Plan</td>
                        <td>None</td>
                        <td style="color:orange;font-weight:bold;">Expiring (2 Days)</td>
                        <td><span class="btn-action">Send WhatsApp Reminder</span> <span class="btn-action">Renew</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 2. GYM MANAGEMENT ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>2.1 Gym Management — All Gyms List (gyms/index.blade.php)</span>
            <span class="badge">Tenants</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create New Gym Tenant</span>
            <span class="btn-action">Export Gym List (CSV)</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Gym Name / Owner Name / Phone / Email</span></div>
                <div class="filter-tag">SaaS Plan: <span>All / Basic / Pro / Enterprise</span></div>
                <div class="filter-tag">Status: <span>All / Active / Expired / Suspended</span></div>
                <div class="filter-tag">City/State: <span>All / Raipur / Bhilai</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">All Gyms Data Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Gym ID</th>
                        <th>Gym Tenant Name</th>
                        <th>Owner Name</th>
                        <th>Contact Email & Phone</th>
                        <th>Branches</th>
                        <th>Total Members</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#GYM-1</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Rahul Sharma</td>
                        <td>admin@seba24.com | 9800000001</td>
                        <td>2 Branches</td>
                        <td>420 / 5000</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td>
                            <span class="btn-action">Edit</span>
                            <span class="btn-action">Login As Gym</span>
                            <span class="btn-action">Suspend</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>2.2 Gym Management — Gym Branches (branches/index.blade.php)</span>
            <span class="badge">Tenants</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add Branch to Gym</span>
            <span class="btn-action">Branch Directory Export</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Branch Name / Address / Phone</span></div>
                <div class="filter-tag">Filter by Gym: <span>All Gyms / Seba24 Fitness / Gold Gym</span></div>
                <div class="filter-tag">Status: <span>Active / Inactive</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Branches Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Branch ID</th>
                        <th>Parent Gym Tenant</th>
                        <th>Branch Name</th>
                        <th>Branch Contact</th>
                        <th>Full Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#BR-101</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Raipur Main Branch</td>
                        <td>9800000001</td>
                        <td>Shankar Nagar, Raipur</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">View Members</span></td>
                    </tr>
                    <tr>
                        <td>#BR-102</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Bhilai Branch</td>
                        <td>9800000002</td>
                        <td>Civic Center, Bhilai</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">View Members</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>2.3 Gym Management — Gym Owners / Users (gym-users/index.blade.php)</span>
            <span class="badge">Tenants</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Add Tenant User / Owner</span>
            <span class="btn-action">Reset User Passwords</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>User Name / Email / Phone</span></div>
                <div class="filter-tag">Filter by Gym: <span>All Gyms / Seba24 Fitness Club</span></div>
                <div class="filter-tag">Role: <span>Gym Owner / Manager / Trainer / Receptionist</span></div>
                <div class="filter-tag">Status: <span>Active / Blocked</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Tenant Users Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Login Email</th>
                        <th>Phone Number</th>
                        <th>Assigned Gym</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#USR-1</td>
                        <td>Rahul Owner</td>
                        <td>admin@seba24.com</td>
                        <td>9800000001</td>
                        <td>Seba24 Fitness Club</td>
                        <td><strong>gym_owner</strong></td>
                        <td style="color:green;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Reset Password</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 3. SAAS SUBSCRIPTION & PLANS ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>3.1 SaaS Subscription & Plans — SaaS Plans (saas-plans/index.blade.php)</span>
            <span class="badge">Billing</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create New SaaS Package</span>
            <span class="btn-action">Re-order Packages</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Billing Cycle: <span>All / Monthly / Yearly</span></div>
                <div class="filter-tag">Visibility: <span>Public / Hidden (Custom Plan)</span></div>
                <div class="filter-tag">Status: <span>Active / Archived</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">SaaS Plans Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Plan Code</th>
                        <th>Package Name</th>
                        <th>Billing Cycle</th>
                        <th>Price (₹)</th>
                        <th>Max Members Limit</th>
                        <th>Included Add-ons</th>
                        <th>Subscribed Gyms</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#SP-PRO</td>
                        <td>Professional Package</td>
                        <td>Yearly</td>
                        <td>₹24,000</td>
                        <td>2,000 Members</td>
                        <td>DIET_WORKOUT</td>
                        <td>64 Gyms</td>
                        <td><span class="btn-action">Edit Plan</span> <span class="btn-action">Toggle Public</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>3.2 SaaS Subscription & Plans — Add-on Modules (addons/index.blade.php)</span>
            <span class="badge">Billing</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Register New System Add-on</span>
        </div>
        <div class="section-box">
            <div class="section-title">Add-on Modules Table (Module Feature Configuration)</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Module Key</th>
                        <th>Module Title</th>
                        <th>Description</th>
                        <th>Monthly Price (₹)</th>
                        <th>Yearly Price (₹)</th>
                        <th>Active Using Gyms</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>DIET_WORKOUT</strong></td>
                        <td>Workout & Diet Planner</td>
                        <td>Allows gym trainers to assign custom exercise and nutrition charts.</td>
                        <td>₹500 / month</td>
                        <td>₹5,000 / year</td>
                        <td>86 Gyms</td>
                        <td><span class="btn-action">Edit Pricing</span> <span class="btn-action">Assign to Gym</span></td>
                    </tr>
                    <tr>
                        <td><strong>POS_STORE</strong></td>
                        <td>Supplement & POS Store</td>
                        <td>Inventory, SKU management and front counter POS store billing.</td>
                        <td>₹800 / month</td>
                        <td>₹8,000 / year</td>
                        <td>42 Gyms</td>
                        <td><span class="btn-action">Edit Pricing</span> <span class="btn-action">Assign to Gym</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>3.3 SaaS Subscription & Plans — Gym Subscriptions (subscriptions/index.blade.php)</span>
            <span class="badge">Billing</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Manual Gym Plan Assignment / Upgrade</span>
            <span class="btn-action">Send Expiry Reminders</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Gym Tenant Name / Owner Email</span></div>
                <div class="filter-tag">SaaS Package: <span>Basic / Pro / Enterprise</span></div>
                <div class="filter-tag">Expiry Filter: <span>Active / Expiring in 7 Days / Expired</span></div>
                <div class="filter-tag">Add-on Filter: <span>Has POS_STORE / Has DIET_WORKOUT</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Tenant Subscriptions Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Sub ID</th>
                        <th>Gym Tenant</th>
                        <th>SaaS Plan Name</th>
                        <th>Active Add-ons</th>
                        <th>Start Date</th>
                        <th>End Date (Expiry)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#SUB-901</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Enterprise VIP</td>
                        <td>DIET_WORKOUT, POS_STORE</td>
                        <td>01-Jan-2026</td>
                        <td>31-Dec-2026</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Extend Validity</span> <span class="btn-action">Change Plan</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 4. SAAS ACCOUNTING & PAYMENTS ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>4.1 SaaS Accounting & Payments — Gym Invoices (invoices/index.blade.php)</span>
            <span class="badge">Finance</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Generate Software Invoice</span>
            <span class="btn-action">Export Accounting CSV</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Invoice No (e.g. SAAS-INV-01) / Gym Name</span></div>
                <div class="filter-tag">Status: <span>All / Paid / Unpaid / Overdue</span></div>
                <div class="filter-tag">Date Range: <span>This Month / Last 30 Days / Financial Year</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">SaaS Invoices Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Gym Tenant Name</th>
                        <th>Billing Description</th>
                        <th>Amount (₹)</th>
                        <th>Tax (18% GST)</th>
                        <th>Net Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SAAS-INV-101</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Annual VIP Plan + POS Add-on</td>
                        <td>₹32,000</td>
                        <td>₹5,760</td>
                        <td>₹37,760</td>
                        <td style="color:green;font-weight:bold;">Paid</td>
                        <td><span class="btn-action">View PDF</span> <span class="btn-action">Email Receipt</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>4.2 SaaS Accounting & Payments — Payment Transactions (payments/index.blade.php)</span>
            <span class="badge">Finance</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Log Manual Payment Receipt</span>
            <span class="btn-action">Gateway Log Report</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Transaction ID / Gym Name / Invoice No</span></div>
                <div class="filter-tag">Payment Mode: <span>Razorpay / Stripe / Bank Transfer / Cash</span></div>
                <div class="filter-tag">Payment Status: <span>Success / Failed / Refunded</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Payment Transactions Log Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Txn ID</th>
                        <th>Invoice Ref</th>
                        <th>Gym Tenant</th>
                        <th>Payment Mode</th>
                        <th>Amount Paid (₹)</th>
                        <th>Txn Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TXN-98214300</td>
                        <td>SAAS-INV-101</td>
                        <td>Seba24 Fitness Club</td>
                        <td>Razorpay (Online)</td>
                        <td>₹37,760</td>
                        <td>31-Jul-2026</td>
                        <td style="color:green;font-weight:bold;">SUCCESS</td>
                        <td><span class="btn-action">View Receipt</span> <span class="btn-action">Refund</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= 5. SYSTEM SETTINGS ================= -->
    <div class="module-card">
        <div class="module-header">
            <span>5.1 System Settings — General Settings (settings/general.blade.php)</span>
            <span class="badge">System</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">Save Configuration Changes</span>
            <span class="btn-action">Clear System Cache</span>
        </div>
        <div class="section-box">
            <div class="section-title">System Settings Configuration Forms (Layout Preview)</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Section Title</th>
                        <th>Form Fields / Configurations Available</th>
                        <th>Current Value Preview</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Branding & Identity</strong></td>
                        <td>Platform Name, Footer Text, Super Admin Logo, Favicon Upload</td>
                        <td>Seba24 Gym SaaS System</td>
                    </tr>
                    <tr>
                        <td><strong>Mail / SMTP Server</strong></td>
                        <td>SMTP Host, SMTP Port, Email Username, Password, Encryption (SSL/TLS)</td>
                        <td>smtp.seba24.com (Port: 587)</td>
                    </tr>
                    <tr>
                        <td><strong>Payment Gateway Setup</strong></td>
                        <td>Razorpay API Key & Secret, Stripe Key & Secret, Default Currency (INR / USD)</td>
                        <td>Razorpay Active (₹ INR)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="module-card">
        <div class="module-header">
            <span>5.2 System Settings — Administrators (settings/admins.blade.php)</span>
            <span class="badge">System</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action primary">+ Create Super Admin Account</span>
            <span class="btn-action">Audit Login Logs</span>
        </div>
        <div class="section-box">
            <div class="section-title">Search & Filter Grid</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Admin Name / Email</span></div>
                <div class="filter-tag">Role: <span>Super Admin / Support Executive / Account Manager</span></div>
                <div class="filter-tag">Status: <span>Active / Disabled</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Platform Administrators Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Admin ID</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Assigned Access Role</th>
                        <th>Last Login IP & Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ADM-1</td>
                        <td>Bhupesh (Master)</td>
                        <td>admin@seba24.com</td>
                        <td><strong>Super Admin (All Access)</strong></td>
                        <td>192.168.1.5 (31-Jul-2026)</td>
                        <td style="color:green;font-weight:bold;">Active</td>
                        <td><span class="btn-action">Edit</span> <span class="btn-action">Change Role</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        Generated for Seba24 SaaS Project • 100% Super Admin Wireframes Reference • Print-Ready A4 CSS
    </div>

</body>
</html>