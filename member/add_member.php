<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Member</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background:#f5f6fa}
.card{border:0;border-radius:10px}
.card-header{background:#fff;font-weight:600;padding:15px 20px}
.card-body{padding:20px}
.required::after{content:" *";color:red}
.section-card{margin-bottom:18px}
</style>
</head>
<body>
<div class="container-fluid p-4">
<div class="d-flex justify-content-between align-items-center mb-4">
<div>
<h4 class="mb-1">Add New Member</h4>
<small class="text-muted">Enter member registration details</small>
</div>
<a href="#" class="btn btn-outline-secondary">Back</a>
</div>

<form>

<div class="card section-card shadow-sm">
<div class="card-header">1. Basic Information</div>
<div class="card-body">
<div class="row g-3">
<div class="col-md-4">
<label class="form-label required">Member Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter member name">
</div>
<div class="col-md-4">
<label class="form-label required">Phone Number</label>
<input type="text" class="form-control" name="phone" placeholder="Enter phone number">
</div>
<div class="col-md-4">
<label class="form-label">Email</label>
<input type="email" class="form-control" name="email" placeholder="Enter email">
</div>
<div class="col-md-3">
<label class="form-label">Gender</label>
<select class="form-select" name="gender">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
</div>
<div class="col-md-3">
<label class="form-label">Date of Birth</label>
<input type="date" class="form-control" name="dob">
</div>
<div class="col-md-3">
<label class="form-label">Blood Group</label>
<select class="form-select" name="blood_group">
<option value="">Select Blood Group</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
</div>
<div class="col-md-3">
<label class="form-label">Joining Date</label>
<input type="date" class="form-control" name="joining_date">
</div>
<div class="col-md-3">
<label class="form-label">Branch</label>
<select class="form-select" name="branch_id">
<option value="">Select Branch</option>
<option value="1">Main Branch</option>
<option value="2">City Branch</option>
</select>
</div>
<div class="col-md-3">
<label class="form-label">Member Code</label>
<input type="text" class="form-control" name="member_code" placeholder="Auto Generated">
</div>
<div class="col-md-3">
<label class="form-label">RFID Card No.</label>
<input type="text" class="form-control" name="rfid_card_no" placeholder="Enter RFID card no.">
</div>
<div class="col-md-3">
<label class="form-label">Biometric ID</label>
<input type="text" class="form-control" name="biometric_id" placeholder="Enter biometric ID">
</div>
<div class="col-md-3">
<label class="form-label">Emergency Contact</label>
<input type="text" class="form-control" name="emergency_contact" placeholder="Enter contact number">
</div>
<div class="col-md-3">
<label class="form-label">Status</label>
<select class="form-select" name="status">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
<option value="blocked">Blocked</option>
</select>
</div>
<div class="col-md-6">
<label class="form-label">Photo URL</label>
<input type="text" class="form-control" name="photo_url" placeholder="Enter photo URL">
</div>
<div class="col-md-6">
<label class="form-label">Address</label>
<textarea class="form-control" name="address" rows="2" placeholder="Enter address"></textarea>
</div>
<div class="col-md-12">
<label class="form-label">Medical History</label>
<textarea class="form-control" name="medical_history" rows="2" placeholder="Enter medical history"></textarea>
</div>
</div>
</div>
</div>

<div class="card section-card shadow-sm">
<div class="card-header">2. Membership Plan</div>
<div class="card-body">
<div class="row g-3">
<div class="col-md-6">
<label class="form-label">Membership Plan</label>
<select class="form-select" name="plan_id">
<option value="">Select Membership Plan</option>
<option value="1">Monthly Plan - ₹2,000</option>
<option value="2">Quarterly Plan - ₹5,000</option>
<option value="3">Half Yearly Plan - ₹9,000</option>
<option value="4">Yearly Plan - ₹15,000</option>
</select>
</div>
<div class="col-md-3">
<label class="form-label">Plan Amount</label>
<input type="text" class="form-control" value="₹ 5,000.00" readonly>
</div>
<div class="col-md-3">
<label class="form-label">Duration Days</label>
<input type="number" class="form-control" name="duration_days" value="90">
</div>
</div>
</div>
</div>

<div class="card section-card shadow-sm">
<div class="card-header">3. Billing & Initial Payment</div>
<div class="card-body">
<div class="row g-3">
<div class="col-md-3">
<label class="form-label">Total Amount</label>
<input type="text" class="form-control" value="₹ 5,000.00" readonly>
</div>
<div class="col-md-3">
<label class="form-label">Discount Amount</label>
<input type="number" class="form-control" name="discount_amount" value="500">
</div>
<div class="col-md-3">
<label class="form-label">Net Amount</label>
<input type="text" class="form-control" value="₹ 4,500.00" readonly>
</div>
<div class="col-md-3">
<label class="form-label">Initial Payment</label>
<input type="number" class="form-control" name="amount_paid" value="2000">
</div>
<div class="col-md-3">
<label class="form-label">Due Amount</label>
<input type="text" class="form-control" value="₹ 2,500.00" readonly>
</div>
<div class="col-md-3">
<label class="form-label">Payment Mode</label>
<select class="form-select" name="payment_mode">
<option value="">Select Payment Mode</option>
<option value="cash">Cash</option>
<option value="upi">UPI</option>
<option value="card">Card</option>
<option value="bank_transfer">Bank Transfer</option>
</select>
</div>
<div class="col-md-3">
<label class="form-label">Transaction Reference</label>
<input type="text" class="form-control" name="transaction_reference" placeholder="UTR / Transaction ID">
</div>
<div class="col-md-3">
<label class="form-label">Payment Status</label>
<input type="text" class="form-control" value="Partial" readonly>
</div>
</div>
</div>
</div>

<div class="card section-card shadow-sm">
<div class="card-header">4. Initial Body Measurements</div>
<div class="card-body">
<div class="row g-3">
<div class="col-md-2">
<label class="form-label">Weight (kg)</label>
<input type="number" step="0.01" class="form-control" name="weight" placeholder="74.5">
</div>
<div class="col-md-2">
<label class="form-label">Height (cm)</label>
<input type="number" step="0.01" class="form-control" name="height" placeholder="175">
</div>
<div class="col-md-2">
<label class="form-label">BMI</label>
<input type="number" step="0.01" class="form-control" name="bmi" placeholder="24.3">
</div>
<div class="col-md-2">
<label class="form-label">Chest</label>
<input type="number" step="0.01" class="form-control" name="chest" placeholder="38">
</div>
<div class="col-md-2">
<label class="form-label">Waist</label>
<input type="number" step="0.01" class="form-control" name="waist" placeholder="32">
</div>
<div class="col-md-2">
<label class="form-label">Biceps</label>
<input type="number" step="0.01" class="form-control" name="biceps" placeholder="14">
</div>
</div>
</div>
</div>

<div class="card section-card shadow-sm">
<div class="card-header">5. Workout Assignment</div>
<div class="card-body">
<div class="row g-3">
<div class="col-md-4">
<label class="form-label">Workout Plan</label>
<select class="form-select" name="workout_plan_id">
<option value="">Select Workout Plan</option>
<option value="1">General Fitness</option>
<option value="2">Weight Loss</option>
<option value="3">Muscle Gain</option>
</select>
</div>
<div class="col-md-4">
<label class="form-label">Trainer</label>
<select class="form-select" name="trainer_id">
<option value="">Select Trainer</option>
<option value="1">Rahul Sharma</option>
<option value="2">Amit Verma</option>
</select>
</div>
<div class="col-md-2">
<label class="form-label">Start Date</label>
<input type="date" class="form-control" name="workout_start_date">
</div>
<div class="col-md-2">
<label class="form-label">End Date</label>
<input type="date" class="form-control" name="workout_end_date">
</div>
<div class="col-md-12">
<label class="form-label">Workout Notes</label>
<textarea class="form-control" name="workout_notes" rows="2" placeholder="Enter workout notes"></textarea>
</div>
</div>
</div>
</div>

<div class="card shadow-sm">
<div class="card-body">
<div class="d-flex justify-content-end gap-2">
<button type="button" class="btn btn-light">Cancel</button>
<button type="submit" class="btn btn-primary px-4">Save Member</button>
</div>
</div>
</div>

</form>
</div>
</body>
</html>