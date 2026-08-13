<?php
$pageTitle = 'Store Billing';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Store Billing</div>
            <small class="text-muted">Create store sales and collect payments</small>
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
                <h2>Store Billing</h2>
                <p>Create a new store sale for member or walk-in customer.</p>
            </div>
            <a href="<?= $baseUrl ?>/payments/index.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Payment List
            </a>
        </div>

        <div class="row g-4">
            <div class="col-xl-8">
                <div class="billing-card">
                    <div class="card-header-custom">
                        <div>
                            <h5>
                                <i class="fa-solid fa-cart-shopping"></i>
                                Customer & Product
                            </h5>
                            <small>Select customer and add products to billing.</small>
                        </div>
                    </div>

                    <div class="card-body-custom">
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Customer Type <span class="required">*</span>
                                </label>
                                <select class="form-select" id="customerType" onchange="changeCustomerType()">
                                    <option value="member">Gym Member</option>
                                    <option value="walkin">Walk-in Customer</option>
                                </select>
                            </div>

                            <div class="col-md-6" id="memberBox">
                                <label class="form-label">
                                    Member <span class="required">*</span>
                                </label>
                                <select class="form-select">
                                    <option value="">Select Member</option>
                                    <option value="1">GYM-101 - Rohan Active Member</option>
                                    <option value="2">GYM-102 - Amit Sharma</option>
                                    <option value="3">GYM-103 - Priya Verma</option>
                                    <option value="4">GYM-104 - Suresh Kumar</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="walkinBox">
                                <label class="form-label">
                                    Customer Name
                                </label>
                                <input type="text" class="form-control" placeholder="Enter customer name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    Sale Date <span class="required">*</span>
                                </label>
                                <input type="date" class="form-control" value="2026-08-13">
                            </div>
                        </div>

                        <div class="product-add-box">
                            <div class="row g-3 align-items-end">
                                <div class="col-lg-5">
                                    <label class="form-label">Product</label>
                                    <select class="form-select" id="productSelect">
                                        <option value="">Select Product</option>
                                        <option value="1" data-price="80">Protein Shake - ₹80</option>
                                        <option value="2" data-price="120">Energy Drink - ₹120</option>
                                        <option value="3" data-price="250">Gym Gloves - ₹250</option>
                                        <option value="4" data-price="500">Gym T-Shirt - ₹500</option>
                                        <option value="5" data-price="150">Skipping Rope - ₹150</option>
                                    </select>
                                </div>

                                <div class="col-lg-2">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" value="1" min="1">
                                </div>

                                <div class="col-lg-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" id="productPrice" value="₹0.00" readonly>
                                </div>

                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary w-100" onclick="addProduct()">
                                        <i class="fa-solid fa-plus me-1"></i>
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table align-middle billing-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th width="120">Qty</th>
                                        <th>Total</th>
                                        <th width="70">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cartBody">
                                    <tr data-price="80">
                                        <td>1</td>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-icon">
                                                    <i class="fa-solid fa-bottle-water"></i>
                                                </div>
                                                <div>
                                                    <strong>Protein Shake</strong>
                                                    <small>SKU: PRO-001</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹80.00</td>
                                        <td>
                                            <input type="number"
                                                   class="form-control form-control-sm item-qty"
                                                   value="2"
                                                   min="1"
                                                   onchange="calculateBill()">
                                        </td>
                                        <td>
                                            <strong class="item-total">₹160.00</strong>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="removeProduct(this)">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr data-price="250">
                                        <td>2</td>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-icon">
                                                    <i class="fa-solid fa-dumbbell"></i>
                                                </div>
                                                <div>
                                                    <strong>Gym Gloves</strong>
                                                    <small>SKU: GLV-001</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹250.00</td>
                                        <td>
                                            <input type="number"
                                                   class="form-control form-control-sm item-qty"
                                                   value="1"
                                                   min="1"
                                                   onchange="calculateBill()">
                                        </td>
                                        <td>
                                            <strong class="item-total">₹250.00</strong>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="removeProduct(this)">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="empty-cart d-none" id="emptyCart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <h6>No products added</h6>
                            <p>Select a product above and click Add.</p>
                        </div>
                    </div>
                </div>

                <div class="billing-card mt-4">
                    <div class="card-header-custom">
                        <div>
                            <h5>
                                <i class="fa-solid fa-note-sticky"></i>
                                Billing Notes
                            </h5>
                        </div>
                    </div>

                    <div class="card-body-custom">
                        <label class="form-label">Notes</label>
                        <textarea class="form-control"
                                  rows="4"
                                  placeholder="Enter any additional billing notes..."></textarea>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="summary-card">
                    <div class="summary-header">
                        <div>
                            <h5>Bill Summary</h5>
                            <small>Review billing amount</small>
                        </div>
                        <span class="sale-badge">SALE</span>
                    </div>

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <strong id="subtotal">₹410.00</strong>
                    </div>

                    <div class="summary-row">
                        <span>Total Items</span>
                        <strong id="totalItems">3</strong>
                    </div>

                    <div class="summary-row discount-row">
                        <span>Discount</span>
                        <div class="discount-input">
                            <span>₹</span>
                            <input type="number"
                                   id="discount"
                                   value="0"
                                   min="0"
                                   onchange="calculateBill()">
                        </div>
                    </div>

                    <div class="summary-divider"></div>

                    <div class="summary-total">
                        <span>Total Amount</span>
                        <strong id="grandTotal">₹410.00</strong>
                    </div>

                    <div class="payment-section">
                        <label class="form-label">
                            Payment Mode <span class="required">*</span>
                        </label>

                        <div class="payment-options">
                            <label class="payment-option active">
                                <input type="radio"
                                       name="payment_mode"
                                       value="cash"
                                       checked>
                                <i class="fa-solid fa-money-bill"></i>
                                <span>Cash</span>
                            </label>

                            <label class="payment-option">
                                <input type="radio"
                                       name="payment_mode"
                                       value="upi">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <span>UPI</span>
                            </label>

                            <label class="payment-option">
                                <input type="radio"
                                       name="payment_mode"
                                       value="card">
                                <i class="fa-solid fa-credit-card"></i>
                                <span>Card</span>
                            </label>
                        </div>
                    </div>

                    <div class="transaction-box">
                        <label class="form-label">
                            Transaction Reference
                        </label>
                        <input type="text"
                               class="form-control"
                               placeholder="Optional transaction ID">
                    </div>

                    <button type="button"
                            class="btn btn-primary btn-lg w-100 mt-3"
                            onclick="completeSale()">
                        <i class="fa-solid fa-check me-2"></i>
                        Complete Sale
                    </button>

                    <button type="button"
                            class="btn btn-outline-secondary w-100 mt-2"
                            onclick="clearBill()">
                        <i class="fa-solid fa-rotate-left me-1"></i>
                        Clear Bill
                    </button>
                </div>

                <div class="stock-info-card mt-4">
                    <div class="stock-icon">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <div>
                        <strong>Stock Management</strong>
                        <p>Product stock will be reduced after completing the sale.</p>
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
.billing-card,.summary-card,.stock-info-card{background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.card-header-custom{display:flex;align-items:center;padding:20px 25px;border-bottom:1px solid #e5e7eb}
.card-header-custom h5{margin:0;font-size:16px;font-weight:600}
.card-header-custom h5 i{color:#2563eb;margin-right:8px}
.card-header-custom small{display:block;color:#6b7280;font-size:11px;margin-top:4px}
.card-body-custom{padding:25px}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:43px;border-color:#d1d5db;font-size:13px}
.product-add-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px;padding:18px}
.billing-table{margin-bottom:0}
.billing-table thead th{background:#f8fafc;color:#6b7280;font-size:12px;font-weight:600;white-space:nowrap}
.billing-table tbody td{font-size:13px}
.product-info{display:flex;align-items:center;gap:10px}
.product-icon{width:38px;height:38px;border-radius:8px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.product-info strong{display:block;font-size:13px;color:#111827}
.product-info small{display:block;font-size:10px;color:#6b7280;margin-top:2px}
.empty-cart{text-align:center;padding:40px;color:#6b7280}
.empty-cart i{font-size:35px;margin-bottom:10px}
.empty-cart h6{color:#374151;margin:0 0 5px}
.empty-cart p{font-size:12px;margin:0}
.summary-card{padding:22px;position:sticky;top:20px}
.summary-header{display:flex;align-items:center;justify-content:space-between;padding-bottom:18px;border-bottom:1px solid #e5e7eb}
.summary-header h5{margin:0;font-size:17px;font-weight:600}
.summary-header small{display:block;color:#6b7280;font-size:11px;margin-top:3px}
.sale-badge{background:#dbeafe;color:#1d4ed8;border-radius:20px;padding:5px 10px;font-size:10px;font-weight:700}
.summary-row{display:flex;align-items:center;justify-content:space-between;padding:12px 0;font-size:13px}
.summary-row span{color:#6b7280}
.summary-row strong{color:#111827}
.discount-row{align-items:center}
.discount-input{display:flex;align-items:center;border:1px solid #d1d5db;border-radius:6px;overflow:hidden}
.discount-input span{background:#f8fafc;padding:7px 9px}
.discount-input input{border:0;outline:0;width:80px;padding:7px;font-size:13px}
.summary-divider{height:1px;background:#e5e7eb;margin:5px 0}
.summary-total{display:flex;align-items:center;justify-content:space-between;padding:15px 0}
.summary-total span{font-size:14px;font-weight:600}
.summary-total strong{font-size:24px;color:#2563eb}
.payment-section{border-top:1px solid #e5e7eb;padding-top:20px;margin-top:5px}
.payment-options{display:grid;grid-template-columns:repeat(3,1fr);gap:7px}
.payment-option{display:flex;flex-direction:column;align-items:center;justify-content:center;gap:5px;padding:12px 5px;border:1px solid #d1d5db;border-radius:8px;cursor:pointer;color:#6b7280;font-size:11px}
.payment-option input{display:none}
.payment-option.active{border-color:#2563eb;background:#eff6ff;color:#2563eb}
.payment-option i{font-size:17px}
.transaction-box{margin-top:18px}
.stock-info-card{display:flex;gap:12px;padding:18px}
.stock-icon{width:43px;height:43px;min-width:43px;border-radius:9px;background:#fef3c7;color:#d97706;display:flex;align-items:center;justify-content:center}
.stock-info-card strong{font-size:13px}
.stock-info-card p{font-size:11px;color:#6b7280;margin:4px 0 0;line-height:1.5}
@media(max-width:767px){
    .page-header{align-items:flex-start;flex-direction:column}
    .card-body-custom,.summary-card{padding:18px}
    .payment-options{grid-template-columns:1fr 1fr 1fr}
}
@media print{
    .sidebar,.topbar,.page-header,.stock-info-card{display:none!important}
    .main-content{margin-left:0!important}
}
</style>

<script>
function changeCustomerType(){
    const type=document.getElementById('customerType').value;
    const memberBox=document.getElementById('memberBox');
    const walkinBox=document.getElementById('walkinBox');

    if(type==='walkin'){
        memberBox.classList.add('d-none');
        walkinBox.classList.remove('d-none');
    }else{
        memberBox.classList.remove('d-none');
        walkinBox.classList.add('d-none');
    }
}

document.querySelectorAll('.payment-option').forEach(function(option){
    option.addEventListener('click',function(){
        document.querySelectorAll('.payment-option').forEach(function(item){
            item.classList.remove('active');
        });
        option.classList.add('active');
        option.querySelector('input').checked=true;
    });
});

document.getElementById('productSelect').addEventListener('change',function(){
    const selected=this.options[this.selectedIndex];
    const price=selected.getAttribute('data-price')||0;
    document.getElementById('productPrice').value='₹'+parseFloat(price).toFixed(2);
});

function addProduct(){
    const select=document.getElementById('productSelect');
    const quantity=parseInt(document.getElementById('quantity').value)||1;

    if(!select.value){
        alert('Please select a product.');
        return;
    }

    const productName=select.options[select.selectedIndex].text.split(' - ₹')[0];
    const price=parseFloat(select.options[select.selectedIndex].getAttribute('data-price'))||0;
    const tbody=document.getElementById('cartBody');
    const rowNumber=tbody.querySelectorAll('tr').length+1;
    const total=price*quantity;

    const row=document.createElement('tr');
    row.setAttribute('data-price',price);

    row.innerHTML=`
        <td>${rowNumber}</td>
        <td>
            <div class="product-info">
                <div class="product-icon">
                    <i class="fa-solid fa-box"></i>
                </div>
                <div>
                    <strong>${productName}</strong>
                    <small>Store Product</small>
                </div>
            </div>
        </td>
        <td>₹${price.toFixed(2)}</td>
        <td>
            <input type="number"
                   class="form-control form-control-sm item-qty"
                   value="${quantity}"
                   min="1"
                   onchange="calculateBill()">
        </td>
        <td>
            <strong class="item-total">₹${total.toFixed(2)}</strong>
        </td>
        <td>
            <button type="button"
                    class="btn btn-sm btn-outline-danger"
                    onclick="removeProduct(this)">
                <i class="fa-solid fa-trash"></i>
            </button>
        </td>
    `;

    tbody.appendChild(row);
    calculateBill();

    select.value='';
    document.getElementById('quantity').value=1;
    document.getElementById('productPrice').value='₹0.00';
}

function removeProduct(button){
    button.closest('tr').remove();
    updateRowNumbers();
    calculateBill();
}

function updateRowNumbers(){
    document.querySelectorAll('#cartBody tr').forEach(function(row,index){
        row.children[0].textContent=index+1;
    });
}

function calculateBill(){
    let subtotal=0;
    let totalItems=0;
    const rows=document.querySelectorAll('#cartBody tr');

    rows.forEach(function(row){
        const price=parseFloat(row.getAttribute('data-price'))||0;
        const qty=parseInt(row.querySelector('.item-qty').value)||1;
        const total=price*qty;

        subtotal+=total;
        totalItems+=qty;

        row.querySelector('.item-total').textContent='₹'+total.toFixed(2);
    });

    const discount=parseFloat(document.getElementById('discount').value)||0;
    const grandTotal=Math.max(0,subtotal-discount);

    document.getElementById('subtotal').textContent='₹'+subtotal.toFixed(2);
    document.getElementById('totalItems').textContent=totalItems;
    document.getElementById('grandTotal').textContent='₹'+grandTotal.toFixed(2);

    const emptyCart=document.getElementById('emptyCart');

    if(rows.length===0){
        emptyCart.classList.remove('d-none');
    }else{
        emptyCart.classList.add('d-none');
    }
}

function clearBill(){
    if(confirm('Are you sure you want to clear this bill?')){
        document.querySelectorAll('#cartBody tr').forEach(function(row){
            row.remove();
        });

        document.getElementById('discount').value=0;
        calculateBill();
    }
}

function completeSale(){
    const rows=document.querySelectorAll('#cartBody tr');

    if(rows.length===0){
        alert('Please add at least one product.');
        return;
    }

    const total=document.getElementById('grandTotal').textContent;

    if(confirm('Complete this sale for '+total+'?')){
        alert('Sale completed successfully.');
    }
}

calculateBill();
</script>

<?php include '../includes/footer.php'; ?>