<?php
$pageTitle = 'Workout Plan Exercises';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Workout Plan Exercises</div>
            <small class="text-muted">Manage exercises assigned to workout plans</small>
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
                <h2>Workout Plan Exercises</h2>
                <p>Add and manage exercises inside workout plans.</p>
            </div>
            <a href="workout-plan-master.php" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i>
                Workout Plans
            </a>
        </div>

        <div class="form-section mb-4">
            <div class="form-section-header">
                <div class="form-section-icon">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div>
                    <h5>Add Exercise to Workout Plan</h5>
                    <small>Select workout plan and exercise details</small>
                </div>
            </div>

            <form>
                <div class="row g-4">
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
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label">
                            Exercise <span class="required">*</span>
                        </label>
                        <select name="exercise_id" class="form-select">
                            <option value="">Select Exercise</option>
                            <option value="1">Treadmill Running</option>
                            <option value="2">Bench Press</option>
                            <option value="3">Squats</option>
                            <option value="4">Lat Pulldown</option>
                            <option value="5">Bicep Curl</option>
                            <option value="6">Shoulder Press</option>
                            <option value="7">Leg Press</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Day of Week <span class="required">*</span>
                        </label>
                        <select name="day_of_week" class="form-select">
                            <option value="">Select Day</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                            <option value="sunday">Sunday</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Sets <span class="required">*</span>
                        </label>
                        <input type="number" name="sets" class="form-control" min="1" placeholder="e.g. 3">
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Reps <span class="required">*</span>
                        </label>
                        <input type="number" name="reps" class="form-control" min="1" placeholder="e.g. 12">
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Rest Time
                        </label>
                        <div class="input-group">
                            <input type="number" name="rest_time_seconds" class="form-control" min="0" placeholder="60">
                            <span class="input-group-text">sec</span>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label class="form-label">
                            Sort Order
                        </label>
                        <input type="number" name="sort_order" class="form-control" min="1" placeholder="1">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Notes</label>
                        <textarea name="notes" class="form-control" rows="4" placeholder="Enter exercise instructions or notes..."></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-rotate-left me-1"></i>
                        Reset
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-plus me-1"></i>
                        Add Exercise
                    </button>
                </div>
            </form>
        </div>

        <div class="dashboard-section">
            <div class="section-header">
                <div>
                    <h5>Assigned Exercises</h5>
                    <small>Exercises currently assigned to workout plans</small>
                </div>
                <div class="total-badge">
                    12 Exercises
                </div>
            </div>

            <div class="filter-box mb-4">
                <div class="row g-3">
                    <div class="col-lg-5 col-md-6">
                        <label class="form-label">Workout Plan</label>
                        <select class="form-select">
                            <option value="">All Workout Plans</option>
                            <option>Weight Loss Beginner Plan</option>
                            <option>Muscle Building Plan</option>
                            <option>Strength Training Plan</option>
                            <option>Cardio Fitness Plan</option>
                        </select>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <label class="form-label">Exercise</label>
                        <select class="form-select">
                            <option value="">All Exercises</option>
                            <option>Treadmill Running</option>
                            <option>Bench Press</option>
                            <option>Squats</option>
                            <option>Lat Pulldown</option>
                            <option>Bicep Curl</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Day</label>
                        <select class="form-select">
                            <option value="">All Days</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </div>

                    <div class="col-lg-1 col-md-6">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary w-100">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle workout-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Workout Plan</th>
                            <th>Exercise</th>
                            <th>Day</th>
                            <th>Sets</th>
                            <th>Reps</th>
                            <th>Rest</th>
                            <th>Order</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="plan-info">
                                    <div class="plan-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>
                                    <div>
                                        <strong>Weight Loss Beginner Plan</strong>
                                        <small>Weight Loss</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Treadmill Running</strong>
                                <small class="d-block text-muted">Cardio</small>
                            </td>
                            <td>
                                <span class="day-badge">Monday</span>
                            </td>
                            <td>1</td>
                            <td>1</td>
                            <td>20 sec</td>
                            <td>1</td>
                            <td>
                                <span class="notes-text">Warm-up cardio</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <div class="plan-info">
                                    <div class="plan-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>
                                    <div>
                                        <strong>Weight Loss Beginner Plan</strong>
                                        <small>Weight Loss</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Squats</strong>
                                <small class="d-block text-muted">Legs</small>
                            </td>
                            <td>
                                <span class="day-badge">Monday</span>
                            </td>
                            <td>3</td>
                            <td>12</td>
                            <td>60 sec</td>
                            <td>2</td>
                            <td>
                                <span class="notes-text">Keep back straight</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <div class="plan-info">
                                    <div class="plan-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>
                                    <div>
                                        <strong>Weight Loss Beginner Plan</strong>
                                        <small>Weight Loss</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Bench Press</strong>
                                <small class="d-block text-muted">Chest</small>
                            </td>
                            <td>
                                <span class="day-badge">Wednesday</span>
                            </td>
                            <td>3</td>
                            <td>10</td>
                            <td>60 sec</td>
                            <td>1</td>
                            <td>
                                <span class="notes-text">Controlled movement</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                <div class="plan-info">
                                    <div class="plan-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>
                                    <div>
                                        <strong>Muscle Building Plan</strong>
                                        <small>Muscle Gain</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Lat Pulldown</strong>
                                <small class="d-block text-muted">Back</small>
                            </td>
                            <td>
                                <span class="day-badge">Friday</span>
                            </td>
                            <td>4</td>
                            <td>10</td>
                            <td>90 sec</td>
                            <td>1</td>
                            <td>
                                <span class="notes-text">Pull bar to upper chest</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                                <div class="plan-info">
                                    <div class="plan-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>
                                    <div>
                                        <strong>Strength Training Plan</strong>
                                        <small>Strength</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <strong>Bicep Curl</strong>
                                <small class="d-block text-muted">Biceps</small>
                            </td>
                            <td>
                                <span class="day-badge">Saturday</span>
                            </td>
                            <td>3</td>
                            <td>12</td>
                            <td>60 sec</td>
                            <td>2</td>
                            <td>
                                <span class="notes-text">Slow controlled reps</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Showing 1 to 5 of 12 exercises
                </div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
.page-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:25px}
.page-header h2{margin:0;font-size:24px;font-weight:700}
.page-header p{margin:5px 0 0;color:#6b7280}
.form-section,.dashboard-section{background:#fff;border-radius:12px;padding:25px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.form-section-header{display:flex;align-items:center;gap:12px;padding-bottom:20px;margin-bottom:25px;border-bottom:1px solid #e5e7eb}
.form-section-icon{width:45px;height:45px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.form-section-header h5,.section-header h5{margin:0;font-size:17px;font-weight:600}
.form-section-header small,.section-header small{color:#6b7280}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:43px;border-color:#d1d5db;font-size:13px}
.form-control:focus,.form-select:focus{border-color:#2563eb;box-shadow:0 0 0 .2rem rgba(37,99,235,.1)}
textarea.form-control{resize:vertical}
.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:25px;padding-top:20px;border-top:1px solid #e5e7eb}
.section-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:20px}
.total-badge{background:#eff6ff;color:#2563eb;border-radius:20px;padding:7px 13px;font-size:12px;font-weight:600}
.filter-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px;padding:18px}
.workout-table{margin-bottom:0}
.workout-table thead th{background:#f8fafc;color:#6b7280;font-size:12px;font-weight:600;white-space:nowrap;border-bottom:1px solid #e5e7eb}
.workout-table tbody td{font-size:13px;color:#374151;vertical-align:middle}
.plan-info{display:flex;align-items:center;gap:10px;min-width:210px}
.plan-icon{width:38px;height:38px;min-width:38px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.plan-info strong{display:block;color:#111827;font-size:13px}
.plan-info small{display:block;color:#6b7280;font-size:11px;margin-top:2px}
.day-badge{display:inline-block;background:#f3f4f6;color:#374151;border-radius:6px;padding:5px 9px;font-size:11px;font-weight:600}
.notes-text{display:block;max-width:170px;color:#6b7280;line-height:1.4}
.action-buttons{display:flex;gap:5px}
.pagination-wrapper{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-top:20px;padding-top:15px;border-top:1px solid #e5e7eb}
.pagination-info{color:#6b7280;font-size:12px}
@media(max-width:767px){
    .page-header,.section-header{flex-direction:column;align-items:flex-start}
    .form-section,.dashboard-section{padding:18px}
    .form-actions{flex-direction:column}
    .form-actions .btn{width:100%}
    .pagination-wrapper{align-items:flex-start;flex-direction:column}
}
</style>

<?php include '../includes/footer.php'; ?>