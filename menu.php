<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seba24 Gym SaaS - Complete Access Controlled Menu Architecture</title>
    <style>
        @page {
            size: A4;
            margin: 15mm 15mm 20mm 15mm;
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2D3748;
            line-height: 1.5;
            background-color: #ffffff;
            margin: 0;
            padding: 10px;
            font-size: 14px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #3182CE;
            padding-bottom: 12px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #1A202C;
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .header p {
            color: #4A5568;
            margin: 5px 0 0;
            font-size: 13px;
            font-weight: 600;
        }
        .portal-section {
            margin-bottom: 35px;
            page-break-inside: avoid;
        }
        .portal-title {
            background-color: #1A365D;
            color: #ffffff;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .portal-title.gym-title {
            background-color: #2B6CB0;
        }
        .portal-title.member-title {
            background-color: #2C7A7B;
        }
        .menu-list {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }
        .menu-item {
            font-weight: bold;
            font-size: 14px;
            color: #1A202C;
            margin-top: 14px;
            padding: 8px 12px;
            background-color: #EDF2F7;
            border-left: 4px solid #3182CE;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu-item .badge {
            font-size: 11px;
            background-color: #E2E8F0;
            color: #4A5568;
            padding: 2px 8px;
            border-radius: 12px;
            font-weight: 600;
        }
        .menu-item .badge.addon {
            background-color: #FEFCBF;
            color: #744210;
            border: 1px solid #F6E05E;
        }
        .menu-item .badge.owner {
            background-color: #FED7D7;
            color: #9B2C2C;
            border: 1px solid #FEB2B2;
        }
        .submenu-list {
            list-style-type: none;
            padding-left: 15px;
            margin: 6px 0 10px 0;
        }
        .submenu-item {
            font-size: 13px;
            color: #2D3748;
            padding: 6px 5px;
            border-bottom: 1px dashed #E2E8F0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .submenu-item::before {
            content: "▪ ";
            color: #3182CE;
            font-weight: bold;
            margin-right: 5px;
        }
        .submenu-item .sub-text {
            flex-grow: 1;
        }
        .desc {
            font-size: 11px;
            color: #718096;
            font-style: italic;
            margin-left: 5px;
            font-weight: normal;
        }
        .role-tag {
            font-size: 10px;
            font-weight: bold;
            color: #4A5568;
            background-color: #F7FAFC;
            border: 1px solid #CBD5E0;
            padding: 2px 6px;
            border-radius: 4px;
            margin-left: 10px;
            white-space: nowrap;
        }
        .section-note {
            background-color: #EBF8FF;
            border-left: 4px solid #3182CE;
            padding: 10px 12px;
            font-size: 12px;
            color: #2C5282;
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            font-size: 11px;
            color: #A0AEC0;
            margin-top: 40px;
            border-top: 1px solid #E2E8F0;
            padding-top: 10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Seba24 Gym SaaS System Architecture</h1>
        <p>Complete Access Controlled Menu & Sub-Menu Blueprint (3-Layer RBAC & Module Control)</p>
    </div>

    <!-- 1. SUPER ADMIN PORTAL -->
    <div class="portal-section">
        <div class="portal-title">1. SUPER ADMIN PORTAL (SaaS Management Panel)</div>
        <div class="section-note">
            <strong>Access Control:</strong> Accessible strictly by Seba24 Super Administrators. Controls Tenant creation, SaaS Plans, Add-on Modules toggle, and Billing.
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span>1. Dashboard <span class="desc">— SaaS Overview, Total Revenue, Active Gyms</span></span>
                <span class="badge">SaaS Core</span>
            </li>
            
            <li class="menu-item">
                <span>2. Gym Management (Tenants)</span>
                <span class="badge">SaaS Core</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">All Gyms List <span class="desc">— Create, Edit, Toggle Active/Inactive Status</span></span></li>
                <li class="submenu-item"><span class="sub-text">Gym Branches <span class="desc">— Multi-branch Monitoring & Address Setup</span></span></li>
                <li class="submenu-item"><span class="sub-text">Gym Owners / Users <span class="desc">— Tenant Login & Credential Control</span></span></li>
            </ul>

            <li class="menu-item">
                <span>3. SaaS Subscription & Plans</span>
                <span class="badge">SaaS Core</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">SaaS Plans <span class="desc">— Basic, Pro, Enterprise Plan Configurations</span></span></li>
                <li class="submenu-item"><span class="sub-text">Add-on Modules <span class="desc">— DIET_WORKOUT & POS_STORE Pricing & Toggles</span></span></li>
                <li class="submenu-item"><span class="sub-text">Gym Subscriptions <span class="desc">— Expiry, Renewals & Tenant Limit Monitoring</span></span></li>
            </ul>

            <li class="menu-item">
                <span>4. SaaS Accounting & Payments</span>
                <span class="badge">SaaS Core</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Gym Invoices <span class="desc">— System Generated Software Usage Bills</span></span></li>
                <li class="submenu-item"><span class="sub-text">Payment Transactions <span class="desc">— Gateway Logs & Manual Receipts</span></span></li>
            </ul>

            <li class="menu-item">
                <span>5. System Settings</span>
                <span class="badge">System</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">General Settings <span class="desc">— Platform Logo, SMTP & SEO Metadata</span></span></li>
                <li class="submenu-item"><span class="sub-text">Administrators <span class="desc">— Super Admin Role & Permissions</span></span></li>
            </ul>
        </ul>
    </div>

    <!-- 2. GYM OWNER / MANAGER PORTAL -->
    <div class="portal-section">
        <div class="portal-title gym-title">2. GYM OWNER / STAFF PORTAL (Tenant ERP Access)</div>
        <div class="section-note">
            <strong>Access Control Matrix:</strong> Menu visibility depends on <em>(1) Modules Assigned by Super Admin</em> AND <em>(2) Staff Role Permissions (Owner / Manager / Receptionist / Trainer)</em>.
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span>1. Dashboard <span class="desc">— Daily Check-ins, Pending Dues, Expiring Plans</span></span>
                <span class="badge">All Staff</span>
            </li>
            
            <li class="menu-item">
                <span>2. Desk & Attendance (Daily Operations)</span>
                <span class="badge">Front Desk</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Gate Check-In / Scan <span class="desc">— Scan Member Code (GYM-101) for Block/Allow</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
                <li class="submenu-item"><span class="sub-text">Staff Attendance <span class="desc">— Daily Staff Check-in / Check-out</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
            </ul>

            <li class="menu-item">
                <span>3. Member Management</span>
                <span class="badge">Core CRM</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">All Members List <span class="desc">— Filter by Active, Inactive, Overdue Fees</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
                <li class="submenu-item"><span class="sub-text">Add New Member <span class="desc">— Onboarding Form & Branch Mapping</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
                <li class="submenu-item"><span class="sub-text">Expiring Memberships <span class="desc">— Members expiring within next 7 days</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
            </ul>

            <li class="menu-item">
                <span>4. Plans & Subscriptions</span>
                <span class="badge">Management</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Gym Membership Plans <span class="desc">— Monthly, Annual & Cardio+Weight Plans</span></span> <span class="role-tag">Owner, Manager</span></li>
                <li class="submenu-item"><span class="sub-text">Member Subscriptions <span class="desc">— Assign Plans & Set Trainers</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
            </ul>

            <li class="menu-item">
                <span>5. Billing & Finance</span>
                <span class="badge">Finance</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Invoices & Due Bills <span class="desc">— Track Paid, Partial & Unpaid Status</span></span> <span class="role-tag">Owner, Manager</span></li>
                <li class="submenu-item"><span class="sub-text">Payments Collection <span class="desc">— Collect Cash / Online Payments</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
                <li class="submenu-item"><span class="sub-text">Gym Expenses & Vouchers <span class="desc">— Utility & Staff Expense Tracking</span></span> <span class="role-tag">Owner Only</span></li>
            </ul>

            <li class="menu-item">
                <span>6. Workout & Diet Planner <span class="desc">— Add-on Module</span></span>
                <span class="badge addon">Module: DIET_WORKOUT</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Exercise Library <span class="desc">— Bench Press, Squats, YouTube Video URLs</span></span> <span class="role-tag">Owner, Trainer</span></li>
                <li class="submenu-item"><span class="sub-text">Workout Routines / Templates <span class="desc">— Beginner to Pro Schedules</span></span> <span class="role-tag">Owner, Trainer</span></li>
                <li class="submenu-item"><span class="sub-text">Diet Charts / Meals <span class="desc">— Nutritional Plans & Timing</span></span> <span class="role-tag">Owner, Trainer</span></li>
                <li class="submenu-item"><span class="sub-text">Assigned Plans <span class="desc">— Trainer to Member Custom Assignment</span></span> <span class="role-tag">Owner, Trainer</span></li>
            </ul>

            <li class="menu-item">
                <span>7. Supplement Store (POS) <span class="desc">— Add-on Module</span></span>
                <span class="badge addon">Module: POS_STORE</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Product Inventory <span class="desc">— SKU Code, Price, Stock Quantities</span></span> <span class="role-tag">Owner, Manager</span></li>
                <li class="submenu-item"><span class="sub-text">POS Billing Screen <span class="desc">— Direct Store Counter Checkout</span></span> <span class="role-tag">Owner, Manager, Reception</span></li>
                <li class="submenu-item"><span class="sub-text">Sales & Stock Report <span class="desc">— Daily Store Revenue Analytics</span></span> <span class="role-tag">Owner Only</span></li>
            </ul>

            <li class="menu-item">
                <span>8. Staff & HR Control</span>
                <span class="badge owner">Owner Only</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Gym Staff & Trainers <span class="desc">— Create Manager, Trainer, Receptionist Logins</span></span> <span class="role-tag">Owner Only</span></li>
                <li class="submenu-item"><span class="sub-text">Role Permissions (RBAC) <span class="desc">— Toggle Menu Access for Staff</span></span> <span class="role-tag">Owner Only</span></li>
            </ul>

            <li class="menu-item">
                <span>9. Gym Settings & Configs</span>
                <span class="badge owner">Owner Only</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Branch Switcher <span class="desc">— Manage Raipur, Bhilai & Multi-branches</span></span> <span class="role-tag">Owner Only</span></li>
                <li class="submenu-item"><span class="sub-text">Gym Profile & Branding <span class="desc">— Logo, Address, Tax Rates</span></span> <span class="role-tag">Owner Only</span></li>
            </ul>
        </ul>
    </div>

    <!-- 3. MEMBER PORTAL -->
    <div class="portal-section">
        <div class="portal-title member-title">3. MEMBER PORTAL / MOBILE APP (End-User App)</div>
        <div class="section-note">
            <strong>Dynamic Status Control:</strong> Members with an <em>Active</em> status get full access to check-ins and plans. Members with an <em>Overdue/Unpaid</em> status get restricted to Billing/Payment screens.
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span>1. Home / Dashboard <span class="desc">— Digital ID Card, Check-in QR Code, Plan Validity</span></span>
                <span class="badge">Active Members</span>
            </li>
            
            <li class="menu-item">
                <span>2. My Membership & Billing</span>
                <span class="badge">All Members</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Active Plan Details <span class="desc">— Start Date, End Date, Assigned Trainer</span></span></li>
                <li class="submenu-item"><span class="sub-text">Invoices & Receipts <span class="desc">— Download PDF Bills (INV-001, etc.)</span></span></li>
                <li class="submenu-item"><span class="sub-text">Dues & Pay Online <span class="desc">— Clear Pending Overdue Amounts</span></span></li>
            </ul>

            <li class="menu-item">
                <span>3. Fitness & Diet Tracking <span class="desc">— Visible if Gym has DIET_WORKOUT module</span></span>
                <span class="badge addon">Module Dependent</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">My Workout Routine <span class="desc">— Daily Exercises, Video Links & Instructions</span></span></li>
                <li class="submenu-item"><span class="sub-text">My Diet Chart <span class="desc">— Daily Meal Plans & Calories</span></span></li>
                <li class="submenu-item"><span class="sub-text">Body Measurements / Progress <span class="desc">— Weight, BMI & Log History</span></span></li>
            </ul>

            <li class="menu-item">
                <span>4. Profile & Security</span>
                <span class="badge">All Members</span>
            </li>
            <ul class="submenu-list">
                <li class="submenu-item"><span class="sub-text">Personal Details <span class="desc">— Phone, Blood Group, Emergency Contact</span></span></li>
                <li class="submenu-item"><span class="sub-text">Change Password</span></li>
            </ul>
        </ul>
    </div>

    <div class="footer">
        Generated for Seba24 Gym SaaS System • Print-Ready System Documentation • Designed for A4 Standard Print
    </div>

</body>
</html>