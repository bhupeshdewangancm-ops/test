<?php
$pageTitle = 'Payment Details';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Payment Details</div>
            <small class="text-muted">View complete payment information</small>
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
                <h2>Payment Details</h2>
                <p>Complete information about the selected payment.</p>
            </div>

            <div class="page-actions">
                <button type="button" class="btn btn-outline-secondary" onclick="window.print()">
                    <i class="fa-solid fa-print me-1"></i>
                    Print
                </button>

                <a href="index.php" class="btn btn-primary">
                    <i class="fa-solid fa-arrow-left me-1"></i>
                    Back to Payments
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-xl-8">
                <div class="details-card">
                    <div class="details-header">
                        <div>
                            <span class="label-small">Payment Receipt</span>
                            <h3>RCP-000001</h3>
                        </div>

                        <span class="status success">
                            Success
                        </span>
                    </div>

                    <div class="amount-box">
                        <span>Amount Paid</span>
                        <strong>₹1,500.00</strong>
                        <small>Payment completed successfully</small>
                    </div>

                    <div class="details-section">
                        <h5>
                            <i class="fa-solid fa-receipt"></i>
                            Payment Information
                        </h5>

                        <div class="detail-grid">
                            <div class="detail-item">
                                <span>Receipt Number</span>
                                <strong>RCP-000001</strong>
                            </div>

                            <div class="detail-item">
                                <span>Payment Date</span>
                                <strong>07 August 2026</strong>
                            </div>

                            <div class="detail-item">
                                <span>Payment Mode</span>
                                <strong>
                                    <span class="payment-mode cash">
                                        <i class="fa-solid fa-money-bill"></i>
                                        Cash
                                    </span>
                                </strong>
                            </div>

                            <div class="detail-item">
                                <span>Transaction Reference</span>
                                <strong>TXN-CASH-0001</strong>
                            </div>

                            <div class="detail-item">
                                <span>Payment Status</span>
                                <strong>
                                    <span class="status success">Success</span>
                                </strong>
                            </div>

                            <div class="detail-item">
                                <span>Received By</span>
                                <strong>Admin</strong>
                            </div>
                        </div>
                    </div>

                    <div class="details-section">
                        <h5>
                            <i class="fa-solid fa-user"></i>
                            Member Information
                        </h5>

                        <div class="member-card">
                            <div class="member-avatar-large">R</div>

                            <div class="member-content">
                                <h4>Rohan Active Member</h4>
                                <p>Member Code: <strong>GYM-101</strong></p>
                                <div class="member-meta">
                                    <span>
                                        <i class="fa-solid fa-phone"></i>
                                        9111111111
                                    </span>
                                    <span>
                                        <i class="fa-solid fa-envelope"></i>
                                        rohan@gmail.com
                                    </span>
                                </div>
                            </div>

                            <a href="../member/member-details.php?id=1"
                               class="btn btn-outline-primary btn-sm">
                                View Member
                            </a>
                        </div>
                    </div>

                    <div class="details-section">
                        <h5>
                            <i class="fa-solid fa-file-invoice"></i>
                            Invoice Information
                        </h5>

                        <div class="invoice-box">
                            <div>
                                <span>Invoice Number</span>
                                <strong>INV-001</strong>
                            </div>

                            <div>
                                <span>Invoice Date</span>
                                <strong>07 August 2026</strong>
                            </div>

                            <div>
                                <span>Invoice Amount</span>
                                <strong>₹1,500.00</strong>
                            </div>

                            <a href="../billing_payment_invoice/invoice-details.php?id=1"
                               class="btn btn-sm btn-outline-primary">
                                View Invoice
                            </a>
                        </div>
                    </div>

                    <div class="details-section">
                        <h5>
                            <i class="fa-solid fa-note-sticky"></i>
                            Notes
                        </h5>

                        <div class="notes-box">
                            Full membership payment received successfully.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="summary-card">
                    <div class="summary-header">
                        <h5>Payment Summary</h5>
                    </div>

                    <div class="summary-row">
                        <span>Invoice Amount</span>
                        <strong>₹1,500.00</strong>
                    </div>

                    <div class="summary-row">
                        <span>Paid Amount</span>
                        <strong class="text-success">₹1,500.00</strong>
                    </div>

                    <div class="summary-row">
                        <span>Remaining Due</span>
                        <strong>₹0.00</strong>
                    </div>

                    <div class="summary-divider"></div>

                    <div class="summary-total">
                        <span>Total Paid</span>
                        <strong>₹1,500.00</strong>
                    </div>
                </div>

                <div class="summary-card mt-4">
                    <div class="summary-header">
                        <h5>Gym Information</h5>
                    </div>

                    <div class="gym-info">
                        <div class="gym-icon">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>

                        <div>
                            <strong>Seba24 Fitness Club</strong>
                            <span>Raipur Main Branch</span>
                        </div>
                    </div>

                    <div class="gym-detail">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Shankar Nagar, Raipur</span>
                    </div>

                    <div class="gym-detail">
                        <i class="fa-solid fa-phone"></i>
                        <span>9800000001</span>
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
.page-actions{display:flex;gap:8px}
.details-card,.summary-card{background:#fff;border-radius:12px;padding:25px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.details-header{display:flex;justify-content:space-between;align-items:center;padding-bottom:20px;border-bottom:1px solid #e5e7eb}
.label-small{display:block;color:#6b7280;font-size:12px;margin-bottom:5px}
.details-header h3{margin:0;font-size:22px;font-weight:700}
.status{display:inline-block;padding:6px 11px;border-radius:20px;font-size:11px;font-weight:600}
.status.success{background:#dcfce7;color:#15803d}
.amount-box{background:#eff6ff;border-radius:10px;padding:22px;text-align:center;margin:20px 0}
.amount-box span{display:block;color:#6b7280;font-size:12px}
.amount-box strong{display:block;color:#2563eb;font-size:30px;margin:5px 0}
.amount-box small{color:#6b7280;font-size:11px}
.details-section{padding:22px 0;border-bottom:1px solid #e5e7eb}
.details-section:last-child{border-bottom:0;padding-bottom:0}
.details-section h5{display:flex;align-items:center;gap:9px;margin:0 0 18px;font-size:16px;font-weight:600}
.details-section h5 i{color:#2563eb}
.detail-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}
.detail-item span{display:block;color:#6b7280;font-size:11px;margin-bottom:5px}
.detail-item strong{display:block;color:#111827;font-size:13px}
.payment-mode{display:inline-flex;align-items:center;gap:6px;padding:5px 9px;border-radius:20px;font-size:11px;font-weight:600}
.payment-mode.cash{background:#dcfce7;color:#15803d}
.member-card{display:flex;align-items:center;gap:15px;padding:15px;background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px}
.member-avatar-large{width:52px;height:52px;min-width:52px;border-radius:50%;background:#dbeafe;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:20px;font-weight:700}
.member-content{flex:1}
.member-content h4{margin:0 0 4px;font-size:15px;font-weight:600}
.member-content p{margin:0 0 7px;color:#6b7280;font-size:11px}
.member-meta{display:flex;gap:15px;flex-wrap:wrap}
.member-meta span{font-size:11px;color:#6b7280}
.member-meta i{color:#2563eb;margin-right:4px}
.invoice-box{display:flex;align-items:center;justify-content:space-between;gap:15px;padding:15px;background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px}
.invoice-box span{display:block;color:#6b7280;font-size:11px;margin-bottom:4px}
.invoice-box strong{font-size:13px;color:#111827}
.notes-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:8px;padding:14px;color:#4b5563;font-size:13px;line-height:1.6}
.summary-header{padding-bottom:15px;border-bottom:1px solid #e5e7eb;margin-bottom:15px}
.summary-header h5{margin:0;font-size:16px;font-weight:600}
.summary-row{display:flex;justify-content:space-between;gap:10px;padding:10px 0;font-size:13px}
.summary-row span{color:#6b7280}
.summary-row strong{color:#111827}
.text-success{color:#16a34a!important}
.summary-divider{height:1px;background:#e5e7eb;margin:8px 0}
.summary-total{display:flex;justify-content:space-between;align-items:center;padding-top:10px}
.summary-total span{font-size:13px;font-weight:600}
.summary-total strong{font-size:20px;color:#2563eb}
.gym-info{display:flex;align-items:center;gap:12px;margin-bottom:18px}
.gym-icon{width:45px;height:45px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.gym-info strong{display:block;font-size:14px}
.gym-info span{display:block;color:#6b7280;font-size:11px;margin-top:3px}
.gym-detail{display:flex;align-items:flex-start;gap:10px;padding:9px 0;color:#6b7280;font-size:12px}
.gym-detail i{width:16px;color:#2563eb;margin-top:2px}
@media(max-width:767px){
    .page-header{align-items:flex-start;flex-direction:column}
    .page-actions{width:100%;flex-wrap:wrap}
    .details-card,.summary-card{padding:18px}
    .detail-grid{grid-template-columns:1fr}
    .member-card,.invoice-box{align-items:flex-start;flex-direction:column}
}
@media print{
    .sidebar,.topbar,.page-actions{display:none!important}
    .main-content{margin-left:0!important}
    .details-card,.summary-card{box-shadow:none}
}
</style>

<?php include '../includes/footer.php'; ?>