<?php
$pageTitle = 'Workout Plan Master';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="topbar">
        <div>
            <div class="topbar-title">Workout Plan Master</div>
            <small class="text-muted">Manage gym workout plans</small>
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
                <h2>Workout Plan Master</h2>
                <p>Create and manage workout plans for gym members.</p>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <div>
                        <span>Total Plans</span>
                        <h3>8</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <span>Active Plans</span>
                        <h3>6</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <div>
                        <span>Weight Loss</span>
                        <h3>3</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <div>
                        <span>Muscle Building</span>
                        <h3>3</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-section mb-4">
            <div class="form-section-header">
                <div class="form-section-icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div>
                    <h5>Add Workout Plan</h5>
                    <small>Create a new workout plan</small>
                </div>
            </div>

            <form>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <label class="form-label">
                            Plan Name <span class="required">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter workout plan name">
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label">
                            Goal Type <span class="required">*</span>
                        </label>
                        <select name="goal_type" class="form-select">
                            <option value="">Select Goal Type</option>
                            <option value="weight_loss">Weight Loss</option>
                            <option value="muscle_gain">Muscle Gain</option>
                            <option value="strength">Strength</option>
                            <option value="endurance">Endurance</option>
                            <option value="general_fitness">General Fitness</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label class="form-label">
                            Duration
                        </label>
                        <div class="input-group">
                            <input type="number"
                                   name="duration"
                                   class="form-control"
                                   min="1"
                                   placeholder="30">
                            <span class="input-group-text">Days</span>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label class="form-label">
                            Status <span class="required">*</span>
                        </label>
                        <select name="status" class="form-select">
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label class="form-label">
                            Plan Level
                        </label>
                        <select name="level" class="form-select">
                            <option value="">Select Level</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Description
                        </label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter workout plan description..."></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-rotate-left me-1"></i>
                        Reset
                    </button>

                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk me-1"></i>
                        Save Workout Plan
                    </button>
                </div>
            </form>
        </div>

        <div class="dashboard-section">
            <div class="section-header">
                <div>
                    <h5>Workout Plan List</h5>
                    <small>All workout plans available in the gym</small>
                </div>

                <div class="total-badge">
                    8 Plans
                </div>
            </div>

            <div class="filter-box mb-4">
                <div class="row g-3">
                    <div class="col-lg-5 col-md-6">
                        <label class="form-label">Search Plan</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search workout plan...">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <label class="form-label">Goal Type</label>
                        <select class="form-select">
                            <option value="">All Goals</option>
                            <option>Weight Loss</option>
                            <option>Muscle Gain</option>
                            <option>Strength</option>
                            <option>Endurance</option>
                            <option>General Fitness</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">All</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary w-100">
                            <i class="fa-solid fa-filter me-1"></i>
                            Filter
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle plan-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Workout Plan</th>
                            <th>Goal</th>
                            <th>Duration</th>
                            <th>Exercises</th>
                            <th>Members</th>
                            <th>Status</th>
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
                                        <small>Beginner workout program</small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="goal-badge weight-loss">
                                    Weight Loss
                                </span>
                            </td>

                            <td>
                                <strong>90 Days</strong>
                            </td>

                            <td>
                                <span class="count-badge">12</span>
                            </td>

                            <td>
                                <span class="count-badge">15</span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="workout-plan-exercises.php?plan_id=1"
                                       class="btn btn-sm btn-outline-success"
                                       title="Exercises">
                                        <i class="fa-solid fa-list-check"></i>
                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">
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
                                        <strong>Muscle Building Plan</strong>
                                        <small>Muscle gain workout program</small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="goal-badge muscle">
                                    Muscle Gain
                                </span>
                            </td>

                            <td>
                                <strong>90 Days</strong>
                            </td>

                            <td>
                                <span class="count-badge">18</span>
                            </td>

                            <td>
                                <span class="count-badge">12</span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="workout-plan-exercises.php?plan_id=2"
                                       class="btn btn-sm btn-outline-success"
                                       title="Exercises">
                                        <i class="fa-solid fa-list-check"></i>
                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">
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
                                        <strong>Strength Training Plan</strong>
                                        <small>Strength focused program</small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="goal-badge strength">
                                    Strength
                                </span>
                            </td>

                            <td>
                                <strong>60 Days</strong>
                            </td>

                            <td>
                                <span class="count-badge">15</span>
                            </td>

                            <td>
                                <span class="count-badge">8</span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="workout-plan-exercises.php?plan_id=3"
                                       class="btn btn-sm btn-outline-success"
                                       title="Exercises">
                                        <i class="fa-solid fa-list-check"></i>
                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">
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
                                        <i class="fa-solid fa-person-running"></i>
                                    </div>
                                    <div>
                                        <strong>Cardio Fitness Plan</strong>
                                        <small>Cardio and endurance program</small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="goal-badge cardio">
                                    Endurance
                                </span>
                            </td>

                            <td>
                                <strong>30 Days</strong>
                            </td>

                            <td>
                                <span class="count-badge">10</span>
                            </td>

                            <td>
                                <span class="count-badge">6</span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="workout-plan-exercises.php?plan_id=4"
                                       class="btn btn-sm btn-outline-success"
                                       title="Exercises">
                                        <i class="fa-solid fa-list-check"></i>
                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">
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
                                        <i class="fa-solid fa-heart-pulse"></i>
                                    </div>
                                    <div>
                                        <strong>General Fitness Plan</strong>
                                        <small>Complete fitness program</small>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="goal-badge general">
                                    General Fitness
                                </span>
                            </td>

                            <td>
                                <strong>60 Days</strong>
                            </td>

                            <td>
                                <span class="count-badge">14</span>
                            </td>

                            <td>
                                <span class="count-badge">10</span>
                            </td>

                            <td>
                                <span class="status inactive">
                                    Inactive
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="workout-plan-exercises.php?plan_id=5"
                                       class="btn btn-sm btn-outline-success"
                                       title="Exercises">
                                        <i class="fa-solid fa-list-check"></i>
                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">
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
                    Showing 1 to 5 of 8 workout plans
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
.stat-card{background:#fff;border-radius:12px;padding:20px;display:flex;align-items:center;gap:15px;min-height:110px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.stat-icon{width:52px;height:52px;min-width:52px;border-radius:11px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px}
.stat-icon.blue{background:#2563eb}
.stat-icon.green{background:#16a34a}
.stat-icon.orange{background:#f59e0b}
.stat-icon.purple{background:#7c3aed}
.stat-card span{display:block;color:#6b7280;font-size:13px}
.stat-card h3{margin:5px 0 0;font-size:25px;font-weight:700}
.form-section,.dashboard-section{background:#fff;border-radius:12px;padding:25px;box-shadow:0 2px 12px rgba(0,0,0,.05)}
.form-section-header{display:flex;align-items:center;gap:12px;padding-bottom:20px;margin-bottom:25px;border-bottom:1px solid #e5e7eb}
.form-section-icon{width:45px;height:45px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.form-section-header h5{margin:0;font-size:17px;font-weight:600}
.form-section-header small,.section-header small{color:#6b7280}
.form-label{font-size:13px;font-weight:600;color:#374151;margin-bottom:7px}
.required{color:#dc2626}
.form-control,.form-select{min-height:43px;border-color:#d1d5db;font-size:13px}
.form-control:focus,.form-select:focus{border-color:#2563eb;box-shadow:0 0 0 .2rem rgba(37,99,235,.1)}
.input-group-text{background:#f8fafc;border-color:#d1d5db;color:#6b7280}
.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:25px;padding-top:20px;border-top:1px solid #e5e7eb}
.section-header{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:20px}
.section-header h5{margin:0;font-size:17px;font-weight:600}
.total-badge{background:#eff6ff;color:#2563eb;border-radius:20px;padding:7px 13px;font-size:12px;font-weight:600}
.filter-box{background:#f8fafc;border:1px solid #e5e7eb;border-radius:10px;padding:18px}
.plan-table{margin-bottom:0}
.plan-table thead th{background:#f8fafc;color:#6b7280;font-size:12px;font-weight:600;white-space:nowrap;border-bottom:1px solid #e5e7eb}
.plan-table tbody td{font-size:13px;color:#374151;vertical-align:middle}
.plan-info{display:flex;align-items:center;gap:10px;min-width:230px}
.plan-icon{width:40px;height:40px;min-width:40px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.plan-info strong{display:block;color:#111827;font-size:13px}
.plan-info small{display:block;color:#6b7280;font-size:11px;margin-top:2px}
.goal-badge{display:inline-block;border-radius:20px;padding:5px 10px;font-size:11px;font-weight:600;white-space:nowrap}
.goal-badge.weight-loss{background:#fef3c7;color:#b45309}
.goal-badge.muscle{background:#ede9fe;color:#6d28d9}
.goal-badge.strength{background:#fee2e2;color:#b91c1c}
.goal-badge.cardio{background:#dcfce7;color:#15803d}
.goal-badge.general{background:#dbeafe;color:#1d4ed8}
.count-badge{display:inline-flex;align-items:center;justify-content:center;min-width:30px;height:28px;padding:0 8px;border-radius:7px;background:#f3f4f6;color:#374151;font-size:12px;font-weight:600}
.status{display:inline-block;padding:5px 10px;border-radius:20px;font-size:11px;font-weight:600}
.status.active{background:#dcfce7;color:#15803d}
.status.inactive{background:#fee2e2;color:#b91c1c}
.action-buttons{display:flex;gap:5px}
.pagination-wrapper{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-top:20px;padding-top:15px;border-top:1px solid #e5e7eb}
.pagination-info{color:#6b7280;font-size:12px}
@media(max-width:767px){
    .page-header,.section-header{align-items:flex-start;flex-direction:column}
    .form-section,.dashboard-section{padding:18px}
    .form-actions{flex-direction:column}
    .form-actions .btn{width:100%}
    .pagination-wrapper{align-items:flex-start;flex-direction:column}
}
</style>

<?php include '../includes/footer.php'; ?>