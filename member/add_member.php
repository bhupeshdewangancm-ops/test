<?php
$pageTitle = 'Add Member';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Add Member</div>
            <small class="text-muted">Register a new gym member</small>
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
                <h2>Add New Member</h2>
                <p>Create member profile, membership, payment, body metrics and workout details.</p>
            </div>
            <a href="<?= $baseUrl ?>/member/member-list.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Back to Members
            </a>
        </div>

        <form method="post" action="#" enctype="multipart/form-data">

            <!-- Member Profile -->
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon blue">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h5>Member Profile</h5>
                        <small>Basic member information</small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3">
                        <label class="form-label">Member Photo</label>
                        <div class="photo-box">
                            <div class="photo-preview" id="photoPreview">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <label for="photo" class="photo-btn">
                                <i class="fa-solid fa-camera me-1"></i>
                                Upload Photo
                            </label>
                            <input type="file" id="photo" name="photo" accept="image/*" hidden>
                            <small>JPG / PNG, Maximum 2MB</small>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">
                                    Member Name <span class="required">*</span>
                                </label>
                                <input type="text" name="name" class="form-control" placeholder="Enter member name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    Phone <span class="required">*</span>
                                </label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" maxlength="15" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email address">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Blood Group</label>
                                <select name="blood_group" class="form-select">
                                    <option value="">Select Blood Group</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Joining Date</label>
                                <input type="date" name="joining_date" class="form-control" value="<?= date('Y-m-d') ?>">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Member Code</label>
                                <input type="text" name="member_code" class="form-control" placeholder="Auto generated if empty">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Branch</label>
                                <select name="branch_id" class="form-select">
                                    <option value="">Select Branch</option>
                                    <option value="1">Raipur Main Branch</option>
                                    <option value="2">Bilaspur Branch</option>
                                    <option value="3">Durg Branch</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="blocked">Blocked</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">RFID Card Number</label>
                        <input type="text" name="rfid_card_no" class="form-control" placeholder="Enter RFID card number">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Biometric ID</label>
                        <input type="text" name="biometric_id" class="form-control" placeholder="Enter biometric ID">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Emergency Contact</label>
                        <input type="text" name="emergency_contact" class="form-control" placeholder="Enter emergency contact number">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Photo URL</label>
                        <input type="text" name="photo_url" class="form-control" placeholder="Enter photo URL if available">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="3" placeholder="Enter complete address"></textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Medical History</label>
                        <textarea name="medical_history" class="form-control" rows="3" placeholder="Enter medical history, allergies, injuries etc."></textarea>
                    </div>
                </div>
            </div>

            <!-- Membership -->
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon purple">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <div>
                        <h5>Membership</h5>
                        <small>Select membership plan and duration</small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Membership Plan</label>
                        <select name="plan_id" class="form-select">
                            <option value="">No Membership Plan</option>
                            <option value="1">Monthly Plan - ₹599</option>
                            <option value="2">Quarterly Plan - ₹1,599</option>
                            <option value="3">Half Yearly Plan - ₹2,999</option>
                            <option value="4">Yearly Plan - ₹4,999</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Duration Days</label>
                        <input type="number" name="duration_days" class="form-control" placeholder="30" min="1">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Trainer</label>
                        <select name="trainer_id" class="form-select">
                            <option value="">No Trainer</option>
                            <option value="2">Rahul Trainer</option>
                            <option value="3">Amit Trainer</option>
                            <option value="4">Vikas Trainer</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Billing -->
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon green">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <div>
                        <h5>Billing & Payment</h5>
                        <small>Initial membership payment details</small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label">Discount Amount</label>
                        <div class="input-group">
                            <span class="input-group-text">₹</span>
                            <input type="number" step="0.01" min="0" name="discount_amount" class="form-control" placeholder="0.00">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Amount Paid</label>
                        <div class="input-group">
                            <span class="input-group-text">₹</span>
                            <input type="number" step="0.01" min="0" name="amount_paid" class="form-control" placeholder="0.00">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Payment Mode</label>
                        <select name="payment_mode" class="form-select">
                            <option value="">Select Payment Mode</option>
                            <option value="cash">Cash</option>
                            <option value="upi">UPI</option>
                            <option value="card">Card</option>
                            <option value="bank_transfer">Bank Transfer</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Transaction Reference</label>
                        <input type="text" name="transaction_reference" class="form-control" placeholder="Required for UPI, Card or Bank Transfer">
                    </div>

                    <div class="col-md-6">
                        <div class="payment-note">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>For non-cash payment, transaction reference is required.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body Metrics -->
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon orange">
                        <i class="fa-solid fa-weight-scale"></i>
                    </div>
                    <div>
                        <h5>Initial Body Metrics</h5>
                        <small>Record member's initial body measurements</small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label">Weight</label>
                        <div class="input-group">
                            <input type="number" step="0.01" min="0" name="weight" class="form-control" placeholder="Enter weight">
                            <span class="input-group-text">KG</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Height</label>
                        <div class="input-group">
                            <input type="number" step="0.01" min="0" name="height" class="form-control" placeholder="Enter height">
                            <span class="input-group-text">CM</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">BMI</label>
                        <input type="number" step="0.01" min="0" name="bmi" class="form-control" placeholder="Enter BMI">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Chest</label>
                        <div class="input-group">
                            <input type="number" step="0.01" min="0" name="chest" class="form-control" placeholder="Chest measurement">
                            <span class="input-group-text">CM</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Waist</label>
                        <div class="input-group">
                            <input type="number" step="0.01" min="0" name="waist" class="form-control" placeholder="Waist measurement">
                            <span class="input-group-text">CM</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Biceps</label>
                        <div class="input-group">
                            <input type="number" step="0.01" min="0" name="biceps" class="form-control" placeholder="Biceps measurement">
                            <span class="input-group-text">CM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Workout Assignment -->
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon red">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <div>
                        <h5>Workout Assignment</h5>
                        <small>Optionally assign workout plan during registration</small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Workout Plan</label>
                        <select name="workout_plan_id" class="form-select">
                            <option value="">No Workout Plan</option>
                            <option value="1">Weight Loss Beginner Plan</option>
                            <option value="2">Muscle Building Plan</option>
                            <option value="3">Strength Training Plan</option>
                            <option value="4">Cardio Fitness Plan</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Workout Trainer</label>
                        <select name="trainer_id" class="form-select">
                            <option value="">No Trainer</option>
                            <option value="2">Rahul Trainer</option>
                            <option value="3">Amit Trainer</option>
                            <option value="4">Vikas Trainer</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Workout Start Date</label>
                        <input type="date" name="workout_start_date" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Workout End Date</label>
                        <input type="date" name="workout_end_date" class="form-control">
                        <small class="form-help">Must be same as or after workout start date.</small>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Workout Notes</label>
                        <textarea name="workout_notes" class="form-control" rows="4" maxlength="1000" placeholder="Enter workout instructions or trainer notes"></textarea>
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="summary-card">
                <div class="summary-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <div>
                    <strong>Member Registration</strong>
                    <p>Review all information before saving the member.</p>
                </div>
            </div>

            <div class="form-actions">
                <a href="<?= $baseUrl ?>/member/member-list.php" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-xmark me-1"></i>
                    Cancel
                </a>

                <button type="reset" class="btn btn-light">
                    <i class="fa-solid fa-rotate-left me-1"></i>
                    Reset
                </button>

                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-user-plus me-1"></i>
                    Add Member
                </button>
            </div>
        </form>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.form-section{background:#fff;border-radius:12px;padding:25px;margin-bottom:20px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.section-header{display:flex;align-items:center;gap:12px;padding-bottom:18px;margin-bottom:25px;border-bottom:1px solid #e5e7eb}
.section-header h5{margin:0;font-size:16px;font-weight:600;color:#1f2937}
.section-header small{display:block;color:#6b7280;font-size:10px;margin-top:3px}
.section-icon{width:44px;height:44px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:17px;flex-shrink:0}
.section-icon.blue{background:#eff6ff;color:#2563eb}
.section-icon.purple{background:#f5f3ff;color:#7c3aed}
.section-icon.green{background:#ecfdf5;color:#16a34a}
.section-icon.orange{background:#fff7ed;color:#ea580c}
.section-icon.red{background:#fef2f2;color:#dc2626}
.form-label{display:block;font-size:12px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:42px;border-color:#d1d5db;font-size:12px}
.form-control:focus,.form-select:focus{border-color:#2563eb;box-shadow:0 0 0 .2rem rgba(37,99,235,.1)}
textarea.form-control{resize:vertical;min-height:95px}
.input-group-text{font-size:11px;background:#f9fafb;color:#6b7280}
.form-help{display:block;color:#9ca3af;font-size:10px;margin-top:5px}
.photo-box{border:1px dashed #d1d5db;border-radius:10px;background:#f9fafb;padding:18px;text-align:center}
.photo-preview{width:110px;height:110px;margin:0 auto 12px;border-radius:10px;background:#e5e7eb;color:#9ca3af;display:flex;align-items:center;justify-content:center;font-size:34px;overflow:hidden}
.photo-preview img{width:100%;height:100%;object-fit:cover}
.photo-btn{display:inline-block;padding:8px 13px;background:#2563eb;color:#fff;border-radius:6px;font-size:11px;cursor:pointer}
.photo-box small{display:block;color:#9ca3af;font-size:9px;margin-top:8px}
.payment-note{height:42px;display:flex;align-items:center;gap:8px;padding:0 12px;border-radius:7px;background:#eff6ff;color:#2563eb;font-size:10px;margin-top:25px}
.summary-card{display:flex;align-items:center;gap:13px;background:#eff6ff;border:1px solid #dbeafe;border-radius:10px;padding:16px;margin-bottom:20px}
.summary-icon{width:40px;height:40px;border-radius:8px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center}
.summary-card strong{font-size:13px;color:#1e3a8a}
.summary-card p{margin:3px 0 0;font-size:10px;color:#64748b}
.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-bottom:25px}
.form-actions .btn{font-size:12px;padding:9px 16px}
@media(max-width:767px){
.page-header{flex-direction:column;align-items:flex-start}
.form-section{padding:18px}
.form-actions{flex-direction:column-reverse}
.form-actions .btn{width:100%}
.payment-note{margin-top:0}
}
</style>

<script>
document.getElementById('photo').addEventListener('change',function(){
    const file=this.files[0];

    if(!file){
        return;
    }

    if(file.size>2*1024*1024){
        alert('Photo size must be less than 2MB.');
        this.value='';
        return;
    }

    if(!file.type.startsWith('image/')){
        alert('Please select a valid image.');
        this.value='';
        return;
    }

    const reader=new FileReader();

    reader.onload=function(e){
        document.getElementById('photoPreview').innerHTML='<img src="'+e.target.result+'" alt="Member Photo">';
    };

    reader.readAsDataURL(file);
});
</script>

<?php include '../includes/footer.php'; ?>