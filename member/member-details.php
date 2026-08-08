<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{background:#f5f6fa}
.card{border:0;border-radius:10px}
.card-header{background:#fff;font-weight:600;padding:15px 20px}
.card-body{padding:20px}
.section-card{margin-bottom:18px}
.profile-img{width:90px;height:90px;border-radius:50%;object-fit:cover;background:#e9ecef}
.info-label{font-size:12px;color:#6c757d;margin-bottom:3px}
.info-value{font-size:14px;font-weight:500}
.stat-card{background:#fff;border-radius:10px;padding:18px;height:100%}
.stat-title{font-size:13px;color:#6c757d}
.stat-value{font-size:22px;font-weight:700;margin-top:5px}
.table th{font-size:13px;white-space:nowrap}
.table td{font-size:13px;vertical-align:middle;white-space:nowrap}
.nav-tabs .nav-link{color:#495057;font-weight:500}
.nav-tabs .nav-link.active{font-weight:600}
.badge{font-weight:500}
</style>
</head>

<body>

<div class="container-fluid p-4">

<div class="d-flex justify-content-between align-items-center mb-4">
<div>
<h4 class="mb-1">Member Details</h4>
<small class="text-muted">Complete member profile and history</small>
</div>

<div class="d-flex gap-2">
<a href="#" class="btn btn-outline-secondary">Back</a>
<a href="#" class="btn btn-primary">Edit Member</a>
</div>
</div>

<!-- Member Profile -->
<div class="card section-card shadow-sm">
<div class="card-body">

<div class="row align-items-center">

<div class="col-md-1">
<img
src="https://via.placeholder.com/100"
class="profile-img"
alt="Member">
</div>

<div class="col-md-3">
<h5 class="mb-1">Arjun Rathore</h5>
<div class="text-muted mb-2">MEM-00010</div>
<span class="badge bg-success">Active</span>
</div>

<div class="col-md-2">
<div class="info-label">Phone</div>
<div class="info-value">9876001122</div>
</div>

<div class="col-md-2">
<div class="info-label">Email</div>
<div class="info-value">arjun@gmail.com</div>
</div>

<div class="col-md-2">
<div class="info-label">Branch</div>
<div class="info-value">Main Branch</div>
</div>

<div class="col-md-2">
<div class="info-label">Joining Date</div>
<div class="info-value">01 Aug 2026</div>
</div>

</div>

</div>
</div>

<!-- Summary -->
<div class="row g-3 mb-4">

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Membership</div>
<div class="stat-value">Active</div>
<small class="text-success">Monthly Plan</small>
</div>
</div>

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Total Paid</div>
<div class="stat-value">₹7,500</div>
<small class="text-muted">All payments</small>
</div>
</div>

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Current Due</div>
<div class="stat-value">₹2,500</div>
<small class="text-danger">Payment pending</small>
</div>
</div>

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Attendance</div>
<div class="stat-value">22</div>
<small class="text-muted">This month</small>
</div>
</div>

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Workout Plan</div>
<div class="stat-value">Active</div>
<small class="text-muted">Muscle Gain</small>
</div>
</div>

<div class="col-md-2">
<div class="stat-card shadow-sm">
<div class="stat-title">Membership Ends</div>
<div class="stat-value">30 Aug</div>
<small class="text-muted">2026</small>
</div>
</div>

</div>

<!-- Tabs -->
<div class="card shadow-sm">

<div class="card-header p-0">

<ul class="nav nav-tabs px-3 pt-3" role="tablist">

<li class="nav-item">
<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile">
Profile
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#subscriptions">
Subscriptions
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#payments">
Payments
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#invoices">
Invoices
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#attendance">
Attendance
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#workout">
Workout
</button>
</li>

<li class="nav-item">
<button class="nav-link" data-bs-toggle="tab" data-bs-target="#measurements">
Body Measurements
</button>
</li>

</ul>

</div>

<div class="card-body">

<div class="tab-content">

<!-- PROFILE -->
<div class="tab-pane fade show active" id="profile">

<h6 class="mb-3">Personal Information</h6>

<div class="row g-4">

<div class="col-md-3">
<div class="info-label">Full Name</div>
<div class="info-value">Arjun Rathore</div>
</div>

<div class="col-md-3">
<div class="info-label">Phone</div>
<div class="info-value">9876001122</div>
</div>

<div class="col-md-3">
<div class="info-label">Email</div>
<div class="info-value">arjun@gmail.com</div>
</div>

<div class="col-md-3">
<div class="info-label">Gender</div>
<div class="info-value">Male</div>
</div>

<div class="col-md-3">
<div class="info-label">Date of Birth</div>
<div class="info-value">20 Aug 1999</div>
</div>

<div class="col-md-3">
<div class="info-label">Blood Group</div>
<div class="info-value">A+</div>
</div>

<div class="col-md-3">
<div class="info-label">Member Code</div>
<div class="info-value">MEM-00010</div>
</div>

<div class="col-md-3">
<div class="info-label">Joining Date</div>
<div class="info-value">01 Aug 2026</div>
</div>

<div class="col-md-3">
<div class="info-label">Branch</div>
<div class="info-value">Main Branch</div>
</div>

<div class="col-md-3">
<div class="info-label">RFID Card</div>
<div class="info-value">RFID-10021</div>
</div>

<div class="col-md-3">
<div class="info-label">Biometric ID</div>
<div class="info-value">BIO-10010</div>
</div>

<div class="col-md-3">
<div class="info-label">Emergency Contact</div>
<div class="info-value">9876001199</div>
</div>

<div class="col-md-6">
<div class="info-label">Address</div>
<div class="info-value">Tagore Nagar, Raipur, Chhattisgarh</div>
</div>

<div class="col-md-6">
<div class="info-label">Medical History</div>
<div class="info-value">No medical condition reported</div>
</div>

</div>

</div>

<!-- SUBSCRIPTIONS -->
<div class="tab-pane fade" id="subscriptions">

<div class="d-flex justify-content-between mb-3">
<h6 class="mb-0">Membership / Subscription History</h6>
<button class="btn btn-sm btn-primary">Renew Membership</button>
</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>#</th>
<th>Plan</th>
<th>Start Date</th>
<th>End Date</th>
<th>Duration</th>
<th>Plan Amount</th>
<th>Discount</th>
<th>Net Amount</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Monthly Plan</td>
<td>01 Aug 2026</td>
<td>30 Aug 2026</td>
<td>30 Days</td>
<td>₹5,000</td>
<td>₹500</td>
<td>₹4,500</td>
<td><span class="badge bg-success">Active</span></td>
</tr>

<tr>
<td>2</td>
<td>Quarterly Plan</td>
<td>01 May 2026</td>
<td>31 Jul 2026</td>
<td>90 Days</td>
<td>₹10,000</td>
<td>₹1,000</td>
<td>₹9,000</td>
<td><span class="badge bg-secondary">Expired</span></td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- PAYMENTS -->
<div class="tab-pane fade" id="payments">

<div class="d-flex justify-content-between mb-3">
<h6 class="mb-0">Payment History</h6>
<button class="btn btn-sm btn-primary">Add Payment</button>
</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>Receipt No.</th>
<th>Invoice No.</th>
<th>Date</th>
<th>Amount Paid</th>
<th>Payment Mode</th>
<th>Transaction Reference</th>
<th>Received By</th>
<th>Status</th>
<th>Receipt</th>
</tr>
</thead>

<tbody>

<tr>
<td>REC-10001</td>
<td>INV-10001</td>
<td>01 Aug 2026</td>
<td>₹2,000</td>
<td>UPI</td>
<td>UTR12345678</td>
<td>Admin</td>
<td><span class="badge bg-success">Success</span></td>
<td>
<button class="btn btn-sm btn-outline-primary">Receipt</button>
</td>
</tr>

<tr>
<td>REC-10002</td>
<td>INV-10001</td>
<td>10 Aug 2026</td>
<td>₹1,000</td>
<td>Cash</td>
<td>-</td>
<td>Reception</td>
<td><span class="badge bg-success">Success</span></td>
<td>
<button class="btn btn-sm btn-outline-primary">Receipt</button>
</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- INVOICES -->
<div class="tab-pane fade" id="invoices">

<h6 class="mb-3">Invoice History</h6>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>Invoice No.</th>
<th>Invoice Date</th>
<th>Plan</th>
<th>Total</th>
<th>Discount</th>
<th>Tax</th>
<th>Net Amount</th>
<th>Paid</th>
<th>Due</th>
<th>Due Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<tr>
<td>INV-10001</td>
<td>01 Aug 2026</td>
<td>Monthly Plan</td>
<td>₹5,000</td>
<td>₹500</td>
<td>₹0</td>
<td>₹4,500</td>
<td>₹3,000</td>
<td>₹1,500</td>
<td>20 Aug 2026</td>
<td><span class="badge bg-warning text-dark">Partial</span></td>
<td>
<button class="btn btn-sm btn-outline-primary">View</button>
</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- ATTENDANCE -->
<div class="tab-pane fade" id="attendance">

<div class="d-flex justify-content-between align-items-center mb-3">

<h6 class="mb-0">Attendance History</h6>

<div class="d-flex gap-2">
<input type="date" class="form-control form-control-sm">
<input type="date" class="form-control form-control-sm">
<button class="btn btn-sm btn-outline-primary">Filter</button>
</div>

</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>Date</th>
<th>Branch</th>
<th>Check In</th>
<th>Check In Method</th>
<th>Check In Location</th>
<th>Accuracy</th>
<th>Check Out</th>
<th>Check Out Method</th>
<th>Check Out Location</th>
<th>Duration</th>
</tr>
</thead>

<tbody>

<tr>
<td>07 Aug 2026</td>
<td>Main Branch</td>
<td>06:32 AM</td>
<td><span class="badge bg-primary">QR Code</span></td>
<td>21.251410, 81.629750</td>
<td>8.5 m</td>
<td>08:05 AM</td>
<td><span class="badge bg-primary">QR Code</span></td>
<td>21.251430, 81.629770</td>
<td>1h 33m</td>
</tr>

<tr>
<td>06 Aug 2026</td>
<td>Main Branch</td>
<td>06:40 AM</td>
<td><span class="badge bg-secondary">Manual</span></td>
<td>-</td>
<td>-</td>
<td>08:10 AM</td>
<td><span class="badge bg-secondary">Manual</span></td>
<td>-</td>
<td>1h 30m</td>
</tr>

<tr>
<td>05 Aug 2026</td>
<td>Main Branch</td>
<td>06:28 AM</td>
<td><span class="badge bg-primary">QR Code</span></td>
<td>21.251420, 81.629730</td>
<td>6.2 m</td>
<td>07:55 AM</td>
<td><span class="badge bg-primary">QR Code</span></td>
<td>21.251425, 81.629740</td>
<td>1h 27m</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- WORKOUT -->
<div class="tab-pane fade" id="workout">

<div class="d-flex justify-content-between mb-3">
<h6 class="mb-0">Current Workout Plan</h6>
<button class="btn btn-sm btn-primary">Change Workout Plan</button>
</div>

<div class="row g-3 mb-4">

<div class="col-md-3">
<div class="info-label">Workout Plan</div>
<div class="info-value">Muscle Gain</div>
</div>

<div class="col-md-3">
<div class="info-label">Trainer</div>
<div class="info-value">Rahul Sharma</div>
</div>

<div class="col-md-2">
<div class="info-label">Start Date</div>
<div class="info-value">01 Aug 2026</div>
</div>

<div class="col-md-2">
<div class="info-label">End Date</div>
<div class="info-value">30 Aug 2026</div>
</div>

<div class="col-md-2">
<div class="info-label">Status</div>
<div class="info-value">
<span class="badge bg-success">Active</span>
</div>
</div>

</div>

<h6 class="mb-3">Workout Exercises</h6>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>Day</th>
<th>Exercise</th>
<th>Sets</th>
<th>Reps</th>
<th>Rest</th>
<th>Order</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td>Monday</td>
<td>Bench Press</td>
<td>4</td>
<td>12</td>
<td>60 sec</td>
<td>1</td>
<td>Controlled movement</td>
</tr>

<tr>
<td>Monday</td>
<td>Incline Press</td>
<td>3</td>
<td>10</td>
<td>90 sec</td>
<td>2</td>
<td>Maintain proper form</td>
</tr>

<tr>
<td>Tuesday</td>
<td>Squat</td>
<td>4</td>
<td>10</td>
<td>90 sec</td>
<td>1</td>
<td>-</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h6 class="mb-3">Workout Assignment History</h6>

<div class="table-responsive">

<table class="table table-bordered">

<thead class="table-light">
<tr>
<th>Plan</th>
<th>Trainer</th>
<th>Start Date</th>
<th>End Date</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>Muscle Gain</td>
<td>Rahul Sharma</td>
<td>01 Aug 2026</td>
<td>30 Aug 2026</td>
<td><span class="badge bg-success">Active</span></td>
</tr>

<tr>
<td>General Fitness</td>
<td>Amit Verma</td>
<td>01 Jul 2026</td>
<td>31 Jul 2026</td>
<td><span class="badge bg-secondary">Completed</span></td>
</tr>
</tbody>

</table>

</div>
</div>

<!-- BODY MEASUREMENTS -->
<div class="tab-pane fade" id="measurements">

<div class="d-flex justify-content-between mb-3">
<h6 class="mb-0">Body Measurement History</h6>
<button class="btn btn-sm btn-primary">Add Measurement</button>
</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>Date</th>
<th>Weight</th>
<th>Height</th>
<th>BMI</th>
<th>Chest</th>
<th>Waist</th>
<th>Biceps</th>
</tr>
</thead>

<tbody>

<tr>
<td>01 Aug 2026</td>
<td>74.5 kg</td>
<td>175 cm</td>
<td>24.3</td>
<td>38</td>
<td>32</td>
<td>14</td>
</tr>

<tr>
<td>01 Jul 2026</td>
<td>76.0 kg</td>
<td>175 cm</td>
<td>24.8</td>
<td>38</td>
<td>33</td>
<td>13.5</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>
</div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>