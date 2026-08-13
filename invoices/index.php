<?php
$pageTitle = 'Invoices';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Invoices</div>
            <small class="text-muted">Manage all gym invoices</small>
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
                <h2>Invoice Management</h2>
                <p>View and manage member invoices.</p>
            </div>
            <button class="btn btn-primary" onclick="createInvoice()">
                <i class="fa-solid fa-plus me-1"></i>
                Create Invoice
            </button>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>
                <div>
                    <span>Total Invoices</span>
                    <strong>156</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <div>
                    <span>Paid</span>
                    <strong>112</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <span>Partial</span>
                    <strong>24</strong>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <div>
                    <span>Unpaid</span>
                    <strong>20</strong>
                </div>
            </div>
        </div>

        <div class="table-card">
            <div class="table-card-header">
                <div>
                    <h5>Invoice List</h5>
                    <small>All generated invoices</small>
                </div>
                <button class="btn btn-outline-secondary btn-sm" onclick="exportInvoices()">
                    <i class="fa-solid fa-file-export me-1"></i>
                    Export
                </button>
            </div>

            <div class="filter-section">
                <div class="row g-3">
                    <div class="col-lg-3">
                        <label>Search</label>
                        <input type="text" class="form-control" placeholder="Invoice no / member">
                    </div>

                    <div class="col-lg-2">
                        <label>Status</label>
                        <select class="form-select">
                            <option>All Status</option>
                            <option>Paid</option>
                            <option>Partial</option>
                            <option>Unpaid</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label>Branch</label>
                        <select class="form-select">
                            <option>All Branches</option>
                            <option>Raipur Main Branch</option>
                            <option>Bilaspur Branch</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label>From Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-2">
                        <label>To Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-1 d-flex align-items-end">
                        <button class="btn btn-primary w-100" onclick="filterInvoices()">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table invoice-table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Invoice No</th>
                            <th>Member</th>
                            <th>Branch</th>
                            <th>Invoice Date</th>
                            <th>Total</th>
                            <th>Paid</th>
                            <th>Due</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><strong>INV-0001</strong></td>
                            <td>
                                <strong>Rohan Active Member</strong>
                                <small>GYM-101</small>
                            </td>
                            <td>Raipur Main Branch</td>
                            <td>07 Aug 2026</td>
                            <td>₹1,500.00</td>
                            <td class="text-success">₹1,500.00</td>
                            <td>₹0.00</td>
                            <td><span class="status paid">Paid</span></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/invoices/show.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="printInvoice()" title="Print">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><strong>INV-0002</strong></td>
                            <td>
                                <strong>Amit Sharma</strong>
                                <small>GYM-102</small>
                            </td>
                            <td>Raipur Main Branch</td>
                            <td>08 Aug 2026</td>
                            <td>₹12,000.00</td>
                            <td class="text-success">₹5,000.00</td>
                            <td class="text-danger">₹7,000.00</td>
                            <td><span class="status partial">Partial</span></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/invoices/show.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-success" onclick="receivePayment()" title="Receive Payment">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td><strong>INV-0003</strong></td>
                            <td>
                                <strong>Priya Verma</strong>
                                <small>GYM-103</small>
                            </td>
                            <td>Bilaspur Branch</td>
                            <td>10 Aug 2026</td>
                            <td>₹2,500.00</td>
                            <td>₹0.00</td>
                            <td class="text-danger">₹2,500.00</td>
                            <td><span class="status unpaid">Unpaid</span></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/invoices/show.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-success" onclick="receivePayment()" title="Receive Payment">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td><strong>INV-0004</strong></td>
                            <td>
                                <strong>Suresh Kumar</strong>
                                <small>GYM-104</small>
                            </td>
                            <td>Raipur Main Branch</td>
                            <td>12 Aug 2026</td>
                            <td>₹3,000.00</td>
                            <td class="text-success">₹3,000.00</td>
                            <td>₹0.00</td>
                            <td><span class="status paid">Paid</span></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/invoices/show.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="printInvoice()" title="Print">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td><strong>INV-0005</strong></td>
                            <td>
                                <strong>Neha Singh</strong>
                                <small>GYM-105</small>
                            </td>
                            <td>Bilaspur Branch</td>
                            <td>13 Aug 2026</td>
                            <td>₹4,500.00</td>
                            <td>₹0.00</td>
                            <td class="text-danger">₹4,500.00</td>
                            <td><span class="status unpaid">Unpaid</span></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= $baseUrl ?>/invoices/show.php" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-success" onclick="receivePayment()" title="Receive Payment">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <span>Showing 1 to 5 of 156 invoices</span>
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
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:20px}
.stat-card{background:#fff;border-radius:12px;padding:18px;display:flex;align-items:center;gap:14px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.stat-icon{width:45px;height:45px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:18px}
.stat-icon.blue{background:#eff6ff;color:#2563eb}
.stat-icon.green{background:#ecfdf5;color:#16a34a}
.stat-icon.orange{background:#fff7ed;color:#ea580c}
.stat-icon.red{background:#fef2f2;color:#dc2626}
.stat-card span{display:block;color:#6b7280;font-size:11px}
.stat-card strong{display:block;font-size:20px;margin-top:3px}
.table-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden}
.table-card-header{padding:20px 25px;border-bottom:1px solid #e5e7eb;display:flex;justify-content:space-between;align-items:center}
.table-card-header h5{margin:0;font-size:16px}
.table-card-header small{color:#6b7280}
.filter-section{padding:20px 25px;background:#f8fafc;border-bottom:1px solid #e5e7eb}
.filter-section label{display:block;font-size:11px;font-weight:600;color:#374151;margin-bottom:5px}
.form-control,.form-select{font-size:13px;min-height:40px}
.invoice-table{margin:0}
.invoice-table th{font-size:11px;color:#6b7280;background:#f8fafc;white-space:nowrap}
.invoice-table td{font-size:12px;white-space:nowrap}
.invoice-table td small{display:block;font-size:10px;color:#6b7280;margin-top:3px}
.status{display:inline-block;padding:5px 10px;border-radius:20px;font-size:10px;font-weight:600}
.status.paid{background:#dcfce7;color:#15803d}
.status.partial{background:#fef3c7;color:#b45309}
.status.unpaid{background:#fee2e2;color:#b91c1c}
.action-buttons{display:flex;gap:5px}
.pagination{padding:15px 20px;border-top:1px solid #e5e7eb;display:flex;justify-content:space-between;align-items:center;color:#6b7280;font-size:11px}
.pagination div{display:flex;gap:5px}
@media(max-width:900px){.stats-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.stats-grid{grid-template-columns:1fr}.page-header{flex-direction:column;align-items:flex-start}.pagination{flex-direction:column;gap:10px}}
</style>

<script>
function createInvoice(){
    alert('Create Invoice UI action.');
}

function exportInvoices(){
    alert('Invoice export UI action.');
}

function filterInvoices(){
    alert('Invoice filter UI action.');
}

function receivePayment(){
    alert('Receive payment UI action.');
}

function printInvoice(){
    alert('Print invoice UI action.');
}
</script>

<?php include '../includes/footer.php'; ?>