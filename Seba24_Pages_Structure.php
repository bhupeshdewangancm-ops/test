<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seba24 Gym SaaS - Complete Main Pages Wireframe & Filter Structure</title>
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
            border-bottom: 3px solid #3182CE;
            padding-bottom: 12px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #1A202C;
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
            font-size: 15px;
            font-weight: bold;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            display: flex;
            justify-content: space-between;
        }
        .module-header.addon {
            background-color: #2C7A7B;
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
        <h1>Seba24 Gym SaaS - Page-by-Page UI Structure</h1>
        <p>Filters, Search Params, Table Columns & Action Bars for All Main Module Screens</p>
    </div>

    <!-- 1. MEMBERS LIST PAGE -->
    <div class="module-card">
        <div class="module-header">
            <span>1. MEMBER MANAGEMENT — Main List Screen (index.blade.php)</span>
            <span>Core ERP</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action">+ Add New Member</span>
            <span class="btn-action">Export Excel / CSV</span>
            <span class="btn-action">Import Members</span>
        </div>
        <div class="section-box">
            <div class="section-title">Filter & Search Bar (How Data is Filtered)</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Name / Phone / Member Code (GYM-101)</span></div>
                <div class="filter-tag">Branch: <span>All / Raipur / Bhilai</span></div>
                <div class="filter-tag">Status: <span>Active / Expired / Blocked / Left</span></div>
                <div class="filter-tag">Plan: <span>All / Monthly / Annual VIP</span></div>
                <div class="filter-tag">Fee Status: <span>Paid / Overdue (Unpaid)</span></div>
                <div class="filter-tag">Gender: <span>All / Male / Female</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Data Table Layout (Columns & Row Actions)</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Member Name & Phone</th>
                        <th>Branch</th>
                        <th>Active Plan</th>
                        <th>Expiry Date</th>
                        <th>Fee Status</th>
                        <th>Gate Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GYM-101</td>
                        <td>Rohan Active (9111111111)</td>
                        <td>Raipur</td>
                        <td>Monthly Cardio</td>
                        <td>30-Aug-2026</td>
                        <td style="color:green; font-weight:bold;">Paid</td>
                        <td><span style="color:green;">● Allowed</span></td>
                        <td>
                            <span class="btn-action">View Profile</span>
                            <span class="btn-action">Renew</span>
                            <span class="btn-action">ID Card</span>
                        </td>
                    </tr>
                    <tr>
                        <td>GYM-102</td>
                        <td>Suresh Overdue (9222222222)</td>
                        <td>Bhilai</td>
                        <td>Annual VIP</td>
                        <td>15-Jul-2026</td>
                        <td style="color:red; font-weight:bold;">Overdue (₹10,000)</td>
                        <td><span style="color:red;">● Blocked</span></td>
                        <td>
                            <span class="btn-action">View Profile</span>
                            <span class="btn-action">Collect Fee</span>
                            <span class="btn-action">WhatsApp Alert</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 2. CHECK-IN / GATE ATTENDANCE SCREEN -->
    <div class="module-card">
        <div class="module-header">
            <span>2. DESK & ATTENDANCE — Gate Check-In Control Screen</span>
            <span>Front Desk</span>
        </div>
        <div class="section-box">
            <div class="section-title">Check-in Input Box (Barcode / RFID / Manual Entry)</div>
            <div class="filter-grid">
                <div class="filter-tag">Scan / Type: <span>Member Code (e.g. GYM-101) + [ENTER]</span></div>
                <div class="filter-tag">Audio Alert: <span>Beep Success (Green) / Warning Sound (Red)</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Today's Live Check-in Logs Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Code</th>
                        <th>Member Name</th>
                        <th>Branch</th>
                        <th>Status / Reason</th>
                        <th>Action / Override</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:30 AM</td>
                        <td>GYM-101</td>
                        <td>Rohan Active</td>
                        <td>Raipur</td>
                        <td style="color:green; font-weight:bold;">ALLOWED (Plan Valid)</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>08:45 AM</td>
                        <td>GYM-102</td>
                        <td>Suresh Overdue</td>
                        <td>Bhilai</td>
                        <td style="color:red; font-weight:bold;">BLOCKED (Fee Overdue by 15 Days)</td>
                        <td><span class="btn-action">One-Day Manual Override</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 3. INVOICES & BILLING LIST -->
    <div class="module-card">
        <div class="module-header">
            <span>3. BILLING & FINANCE — Invoices Main Screen</span>
            <span>Finance</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action">+ Create Custom Invoice</span>
            <span class="btn-action">Send Overdue Reminders (SMS/WhatsApp)</span>
        </div>
        <div class="section-box">
            <div class="section-title">Filter & Search Bar</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Invoice No (INV-001) / Member Name / Phone</span></div>
                <div class="filter-tag">Status: <span>All / Paid / Partial / Unpaid (Overdue)</span></div>
                <div class="filter-tag">Date Range: <span>This Month / Last 30 Days / Custom Date</span></div>
                <div class="filter-tag">Branch: <span>Raipur / Bhilai</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Invoices Table Layout</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Member Name</th>
                        <th>Plan / Details</th>
                        <th>Total (₹)</th>
                        <th>Paid (₹)</th>
                        <th>Due (₹)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>INV-001</td>
                        <td>Rohan Active (GYM-101)</td>
                        <td>Monthly Cardio</td>
                        <td>1,500</td>
                        <td>1,500</td>
                        <td>0</td>
                        <td style="color:green;">Paid</td>
                        <td>
                            <span class="btn-action">Print PDF</span>
                            <span class="btn-action">Receipt</span>
                        </td>
                    </tr>
                    <tr>
                        <td>INV-002</td>
                        <td>Suresh Overdue (GYM-102)</td>
                        <td>Annual VIP</td>
                        <td>12,000</td>
                        <td>2,000</td>
                        <td style="color:red; font-weight:bold;">10,000</td>
                        <td style="color:orange;">Partial</td>
                        <td>
                            <span class="btn-action">Add Payment</span>
                            <span class="btn-action">PDF</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 4. WORKOUT & DIET PLANNER -->
    <div class="module-card">
        <div class="module-header addon">
            <span>4. WORKOUT & DIET PLANNER — Assigned Plans Screen</span>
            <span>Add-on: DIET_WORKOUT</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action">+ Assign Workout/Diet Plan</span>
            <span class="btn-action">+ Create New Routine Template</span>
        </div>
        <div class="section-box">
            <div class="section-title">Filter & Search Bar</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Member Name / Member Code</span></div>
                <div class="filter-tag">Trainer: <span>All / Vikram Trainer / Rahul Trainer</span></div>
                <div class="filter-tag">Goal: <span>Weight Loss / Muscle Gain / General Fitness</span></div>
                <div class="filter-tag">Level: <span>Beginner / Intermediate / Advanced</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Assigned Fitness Plans Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Member Name</th>
                        <th>Assigned Trainer</th>
                        <th>Workout Template</th>
                        <th>Diet Chart</th>
                        <th>Start Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rohan Active (GYM-101)</td>
                        <td>Vikram Trainer</td>
                        <td>4-Day Split Muscle Gain</td>
                        <td>High Protein 2500 Cal</td>
                        <td>01-Aug-2026</td>
                        <td>Active</td>
                        <td>
                            <span class="btn-action">Edit Plan</span>
                            <span class="btn-action">View Progress</span>
                            <span class="btn-action">Share PDF</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. SUPPLEMENT STORE (POS) -->
    <div class="module-card">
        <div class="module-header addon">
            <span>5. SUPPLEMENT STORE (POS) — Inventory & Products Screen</span>
            <span>Add-on: POS_STORE</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action">+ Add New Product</span>
            <span class="btn-action">Open POS Billing Screen</span>
            <span class="btn-action">Stock Adjustment</span>
        </div>
        <div class="section-box">
            <div class="section-title">Filter & Search Bar</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Product Name / SKU (e.g. WP-1KG-001)</span></div>
                <div class="filter-tag">Category: <span>All / Protein / Shakers / Vitamins</span></div>
                <div class="filter-tag">Stock Alert: <span>All / In Stock / Low Stock (< 5) / Out of Stock</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">Product Inventory Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Product Name</th>
                        <th>Price (₹)</th>
                        <th>Stock Qty</th>
                        <th>Total Sold</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WP-1KG-001</td>
                        <td>Whey Protein 1Kg</td>
                        <td>2,500.00</td>
                        <td>20</td>
                        <td>145</td>
                        <td style="color:green;">In Stock</td>
                        <td>
                            <span class="btn-action">Edit</span>
                            <span class="btn-action">Add Stock</span>
                        </td>
                    </tr>
                    <tr>
                        <td>SHAKER-001</td>
                        <td>Protein Shaker Bottle</td>
                        <td>300.00</td>
                        <td style="color:red; font-weight:bold;">2</td>
                        <td>89</td>
                        <td style="color:orange;">Low Stock Alert</td>
                        <td>
                            <span class="btn-action">Edit</span>
                            <span class="btn-action">Add Stock</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 6. SUPER ADMIN — TENANT MANAGEMENT -->
    <div class="module-card">
        <div class="module-header">
            <span>6. SUPER ADMIN PORTAL — Gyms (Tenants) Management Screen</span>
            <span>Seba24 Admin</span>
        </div>
        <div class="section-box">
            <div class="section-title">Top Action Buttons</div>
            <span class="btn-action">+ Onboard New Gym</span>
            <span class="btn-action">Broadcast Notification</span>
        </div>
        <div class="section-box">
            <div class="section-title">Filter & Search Bar</div>
            <div class="filter-grid">
                <div class="filter-tag">Search: <span>Gym Name / Owner Email / Phone</span></div>
                <div class="filter-tag">SaaS Plan: <span>All / Basic / Pro / Enterprise VIP</span></div>
                <div class="filter-tag">Status: <span>Active / Expired / Suspended</span></div>
                <div class="filter-tag">Module: <span>All / DIET_WORKOUT / POS_STORE</span></div>
            </div>
        </div>
        <div class="section-box">
            <div class="section-title">SaaS Tenants Table</div>
            <table class="table-preview">
                <thead>
                    <tr>
                        <th>Gym Name</th>
                        <th>Owner & Contact</th>
                        <th>SaaS Plan</th>
                        <th>Active Modules</th>
                        <th>Total Members</th>
                        <th>Plan Expiry</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Seba24 Fitness Club</td>
                        <td>Rahul (admin@seba24.com)</td>
                        <td>Enterprise VIP</td>
                        <td>DIET_WORKOUT, POS_STORE</td>
                        <td>420 / 5000</td>
                        <td>31-Dec-2026</td>
                        <td>
                            <span class="btn-action">Login As Gym</span>
                            <span class="btn-action">Upgrade Plan</span>
                            <span class="btn-action">Toggle Modules</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Gold Fitness Club</td>
                        <td>Amit (admin@goldgym.com)</td>
                        <td>Basic Gym Plan</td>
                        <td>None (Standard)</td>
                        <td>110 / 200</td>
                        <td>30-Sep-2026</td>
                        <td>
                            <span class="btn-action">Login As Gym</span>
                            <span class="btn-action">Upgrade Plan</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        Generated for Seba24 SaaS Project • UI & Filter Reference Blueprint • Ready for A4 Print
    </div>

</body>
</html>