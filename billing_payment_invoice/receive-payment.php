<?php
$pageTitle = 'Receive Payment';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Receive Payment</div>
            <small class="text-muted">Collect pending invoice payment</small>
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
                <h2>Receive Payment</h2>
                <p>Record a payment against a member invoice.</p>
            </div>
            <a href="<?= $baseUrl ?>/billing_payment_invoice/invoices.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Invoice List
            </a>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="form-card">
                    <div class="form-card-header">
                        <div class="form-icon">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>
                        <div>
                            <h5>Payment Information</h5>
                            <small>Enter payment details below.</small>
                        </div>
                    </div>

                    <div class="form-card-body">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Invoice <span class="required">*</span></label>
                                <select class="form-select">
                                    <option value="">Select Invoice</option>
                                    <option value="1">INV-002 - Amit Sharma - ₹10,000 Due</option>
                                    <option value="2">INV-003 - Priya Verma - ₹2,500 Due</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Member</label>
                                <input type="text" class="form-control" value="Amit Sharma" readonly>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Invoice Amount</label>
                                <input type="text" class="form-control" value="₹12,000.00" readonly>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Already Paid</label>
                                <input type="text" class="form-control" value="₹2,000.00" readonly>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Due Amount</label>
                                <input type="text" class="form-control due-input" value="₹10,000.00" readonly>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    Payment Amount <span class="required">*</span>
                                </label>
                                <input type="number" class="form-control" value="5000" min="1">
                                <small class="help-text">Maximum payable amount: ₹10,000.00</small>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    Payment Date <span class="required">*</span>
                                </label>
                                <input type="date" class="form-control" value="2026-08-13">
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    Payment Mode <span class="required">*</span>
                                </label>

                                <div class="payment-grid">
                                    <label class="payment-method active">
                                        <input type="radio" name="payment_mode" checked>
                                        <i class="fa-solid fa-money-bill"></i>
                                        <strong>Cash</strong>
                                        <small>Cash payment</small>
                                    </label>

                                    <label class="payment-method">
                                        <input type="radio" name="payment_mode">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                        <strong>UPI</strong>
                                        <small>UPI payment</small>
                                    </label>

                                    <label class="payment-method">
                                        <input type="radio" name="payment_mode">
                                        <i class="fa-solid fa-credit-card"></i>
                                        <strong>Card</strong>
                                        <small>Card payment</small>
                                    </label>

                                    <label class="payment-method">
                                        <input type="radio" name="payment_mode">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <strong>Bank Transfer</strong>
                                        <small>Bank transfer</small>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Transaction Reference</label>
                                <input type="text" class="form-control" placeholder="Enter transaction reference">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Received By</label>
                                <select class="form-select">
                                    <option>Admin</option>
                                    <option>Rahul Trainer</option>
                                    <option>Amit Staff</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="4" placeholder="Enter payment notes..."></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <a href="<?= $baseUrl ?>/billing_payment_invoice/invoices.php" class="btn btn-outline-secondary">
                                Cancel
                            </a>
                            <button class="btn btn-primary" onclick="receivePayment()">
                                <i class="fa-solid fa-check me-1"></i>
                                Receive Payment
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="payment-summary">
                    <div class="summary-header">
                        <h5>Payment Summary</h5>
                        <span class="status partial">Partial</span>
                    </div>

                    <div class="member-box">
                        <div class="member-avatar">A</div>
                        <div>
                            <strong>Amit Sharma</strong>
                            <small>GYM-102</small>
                        </div>
                    </div>

                    <div class="summary-line">
                        <span>Invoice</span>
                        <strong>INV-002</strong>
                    </div>

                    <div class="summary-line">
                        <span>Invoice Amount</span>
                        <strong>₹12,000.00</strong>
                    </div>

                    <div class="summary-line">
                        <span>Paid Amount</span>
                        <strong class="text-success">₹2,000.00</strong>
                    </div>

                    <div class="summary-line due-line">
                        <span>Current Due</span>
                        <strong>₹10,000.00</strong>
                    </div>

                    <div class="summary-divider"></div>

                    <div class="payable">
                        <span>Payment Now</span>
                        <strong>₹5,000.00</strong>
                    </div>

                    <div class="remaining">
                        <span>Remaining After Payment</span>
                        <strong>₹5,000.00</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;gap:15px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.form-card,.payment-summary{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.form-card-header{display:flex;align-items:center;gap:12px;padding:20px 25px;border-bottom:1px solid #e5e7eb}
.form-icon{width:44px;height:44px;background:#eff6ff;color:#2563eb;border-radius:9px;display:flex;align-items:center;justify-content:center}
.form-card-header h5{margin:0;font-size:16px}
.form-card-header small{color:#6b7280;font-size:11px}
.form-card-body{padding:25px}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:43px;font-size:13px;border-color:#d1d5db}
.due-input{color:#dc2626;font-weight:600}
.help-text{font-size:10px;color:#6b7280;margin-top:5px;display:block}
.payment-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:10px}
.payment-method{border:1px solid #d1d5db;border-radius:9px;padding:15px 8px;text-align:center;cursor:pointer}
.payment-method input{display:none}
.payment-method i{display:block;font-size:20px;color:#6b7280;margin-bottom:7px}
.payment-method strong{display:block;font-size:12px}
.payment-method small{display:block;color:#9ca3af;font-size:9px;margin-top:3px}
.payment-method.active{border-color:#2563eb;background:#eff6ff}
.payment-method.active i{color:#2563eb}
.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:30px;padding-top:20px;border-top:1px solid #e5e7eb}
.payment-summary{padding:22px;position:sticky;top:20px}
.summary-header{display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #e5e7eb;padding-bottom:15px}
.summary-header h5{margin:0;font-size:16px}
.status{padding:5px 9px;border-radius:20px;font-size:10px;font-weight:600}
.status.partial{background:#fef3c7;color:#b45309}
.member-box{display:flex;align-items:center;gap:10px;padding:18px 0;border-bottom:1px solid #e5e7eb}
.member-avatar{width:40px;height:40px;border-radius:50%;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:600}
.member-box strong{display:block;font-size:13px}
.member-box small{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.summary-line{display:flex;justify-content:space-between;padding:12px 0;font-size:12px}
.summary-line span{color:#6b7280}
.due-line strong{color:#dc2626}
.summary-divider{height:1px;background:#e5e7eb}
.payable,.remaining{display:flex;justify-content:space-between;padding:14px 0;font-size:13px}
.payable{color:#2563eb}
.payable strong{font-size:18px}
.remaining{background:#f8fafc;padding:12px;border-radius:8px;color:#6b7280}
.remaining strong{color:#dc2626}
@media(max-width:800px){.page-header{flex-direction:column;align-items:flex-start}.payment-grid{grid-template-columns:1fr 1fr}}
</style>

<script>
document.querySelectorAll('.payment-method').forEach(function(method){
    method.addEventListener('click',function(){
        document.querySelectorAll('.payment-method').forEach(function(item){
            item.classList.remove('active');
        });
        method.classList.add('active');
        method.querySelector('input').checked=true;
    });
});

function receivePayment(){
    alert('Payment received successfully.');
}
</script>

<?php include '../includes/footer.php'; ?>