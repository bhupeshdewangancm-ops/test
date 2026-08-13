<?php
$pageTitle = 'Assign Workout';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Assign Workout</div>
            <small class="text-muted">Assign workout plan to a gym member</small>
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
                <h2>Assign Workout</h2>
                <p>Assign a workout plan to a gym member.</p>
            </div>
            <a href="member-workout-assignment.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Back to Assignments
            </a>
        </div>

        <div class="form-section">
            <div class="form-section-header">
                <div class="form-section-icon">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div>
                    <h5>Workout Assignment Details</h5>
                    <small>Enter member and workout assignment information</small>
                </div>
            </div>

            <form>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <label class="form-label">
                            Member <span class="required">*</span>
                        </label>
                        <select name="member_id" class="form-select">
                            <option value="">Select Member</option>
                            <option value="1">GYM-101 - Rohan Active Member</option>
                            <option value="2">GYM-102 - Amit Sharma</option>
                            <option value="3">GYM-103 - Priya Verma</option>
                            <option value="4">GYM-104 - Suresh Kumar</option>
                            <option value="5">GYM-105 - Neha Singh</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label">
                            Workout Plan <span class="required">*</span>
                        </label>
                        <select name="workout_plan_id" class="form-select">
                            <option value="">Select Workout Plan</option>
                            <option value="1">Weight Loss Beginner Plan</option>
                            <option value="2">Muscle Building Plan</option>
                            <option value="3">Strength Training Plan</option>
                            <option value="4">Cardio Fitness Plan</option>
                            <option value="5">General Fitness Plan</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label">Trainer</label>
                        <select name="trainer_id" class="form-select">
                            <option value="">Select Trainer</option>
                            <option value="2">Rahul Trainer</option>
                            <option value="3">Amit Trainer</option>
                            <option value="4">Vikas Trainer</option>
                            <option value="5">Sanjay Trainer</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Start Date <span class="required">*</span>
                        </label>
                        <input type="date" name="start_date" class="form-control">
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                        <small class="form-help">Optional</small>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label">
                            Assignment Status <span class="required">*</span>
                        </label>
                        <select name="status" class="form-select">
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Notes</label>
                        <textarea name="notes" class="form-control" rows="5" placeholder="Enter notes about this workout assignment..."></textarea>
                        <small class="form-help">
                            Add any additional instructions or notes for this assignment.
                        </small>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="member-workout-assignment.php" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-xmark me-1"></i>
                        Cancel
                    </a>
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk me-1"></i>
                        Assign Workout
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.form-section{background:#fff;border-radius:12px;padding:25px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.form-section-header{display:flex;align-items:center;gap:12px;padding-bottom:20px;margin-bottom:25px;border-bottom:1px solid #e5e7eb}
.form-section-icon{width:45px;height:45px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.form-section-header h5{margin:0;font-size:17px;font-weight:600}
.form-section-header small{color:#6b7280}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:43px;border-color:#d1d5db;font-size:13px}
.form-control:focus,.form-select:focus{border-color:#2563eb;box-shadow:0 0 0 .2rem rgba(37,99,235,.1)}
textarea.form-control{min-height:130px;resize:vertical}
.form-help{display:block;color:#6b7280;font-size:11px;margin-top:5px}
.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:30px;padding-top:20px;border-top:1px solid #e5e7eb}
@media(max-width:767px){
    .page-header{flex-direction:column;align-items:flex-start}
    .form-section{padding:18px}
    .form-actions{flex-direction:column-reverse}
    .form-actions .btn{width:100%}
}
</style>

<?php include '../includes/footer.php'; ?>