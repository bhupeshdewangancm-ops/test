<?php
$pageTitle = 'Exercise Master';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">

    <div class="topbar">
        <div>
            <div class="topbar-title">Exercise Master</div>
            <small class="text-muted">Manage gym exercises</small>
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

        <!-- PAGE HEADER -->
        <div class="page-header">
            <div>
                <h2>Exercise Master</h2>
                <p>Manage all exercises available in your gym.</p>
            </div>

            <a href="add-exercise.php" class="btn btn-primary">
                <i class="fa-solid fa-plus me-1"></i>
                Add Exercise
            </a>
        </div>

        <!-- STAT CARDS -->
        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>

                    <div>
                        <span>Total Exercises</span>
                        <h3>25</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div>
                        <span>Active Exercises</span>
                        <h3>22</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fa-solid fa-person-running"></i>
                    </div>

                    <div>
                        <span>Cardio</span>
                        <h3>8</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>

                    <div>
                        <span>Strength</span>
                        <h3>17</h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- EXERCISE LIST -->
        <div class="dashboard-section">

            <div class="section-header">

                <div>
                    <h5>Exercise List</h5>
                    <small>All exercises added to the gym</small>
                </div>

                <div class="d-flex gap-2">

                    <button type="button"
                            class="btn btn-outline-secondary btn-sm">
                        <i class="fa-solid fa-file-export me-1"></i>
                        Export
                    </button>

                    <a href="add-exercise.php"
                       class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-plus me-1"></i>
                        Add Exercise
                    </a>

                </div>

            </div>

            <!-- FILTER -->
            <div class="filter-box mb-4">

                <div class="row g-3">

                    <div class="col-lg-5 col-md-6">
                        <label class="form-label">
                            Search Exercise
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Search by exercise name...">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">

                        <label class="form-label">
                            Target Muscle
                        </label>

                        <select class="form-select">

                            <option value="">All</option>
                            <option>Chest</option>
                            <option>Back</option>
                            <option>Shoulders</option>
                            <option>Biceps</option>
                            <option>Triceps</option>
                            <option>Legs</option>
                            <option>Abs</option>
                            <option>Cardio</option>

                        </select>

                    </div>

                    <div class="col-lg-2 col-md-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select class="form-select">

                            <option value="">All</option>
                            <option>Active</option>
                            <option>Inactive</option>

                        </select>

                    </div>

                    <div class="col-lg-2 col-md-12">

                        <label class="form-label">
                            &nbsp;
                        </label>

                        <button class="btn btn-primary w-100">
                            <i class="fa-solid fa-filter me-1"></i>
                            Filter
                        </button>

                    </div>

                </div>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table align-middle exercise-table">

                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Exercise</th>
                            <th>Target Muscle</th>
                            <th>Video</th>
                            <th>Instructions</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>

                            <td>1</td>

                            <td>
                                <div class="exercise-info">

                                    <div class="exercise-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>

                                    <div>
                                        <strong>Flat Bench Press</strong>
                                        <small>Strength Exercise</small>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="muscle-badge">
                                    Chest
                                </span>
                            </td>

                            <td>

                                <a href="https://youtube.com"
                                   target="_blank"
                                   class="video-link">

                                    <i class="fa-brands fa-youtube"></i>
                                    Watch

                                </a>

                            </td>

                            <td>
                                <span class="instruction-text">
                                    Lie on the bench and press
                                    barbell upward.
                                </span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a href="add-exercise.php?id=1"
                                       class="btn btn-sm btn-outline-primary"
                                       title="Edit">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Delete">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        <!-- ROW 2 -->
                        <tr>

                            <td>2</td>

                            <td>
                                <div class="exercise-info">

                                    <div class="exercise-icon">
                                        <i class="fa-solid fa-person-running"></i>
                                    </div>

                                    <div>
                                        <strong>Treadmill Running</strong>
                                        <small>Cardio Exercise</small>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="muscle-badge">
                                    Cardio
                                </span>
                            </td>

                            <td>

                                <a href="https://youtube.com"
                                   target="_blank"
                                   class="video-link">

                                    <i class="fa-brands fa-youtube"></i>
                                    Watch

                                </a>

                            </td>

                            <td>
                                <span class="instruction-text">
                                    Run or walk on treadmill
                                    at comfortable speed.
                                </span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a href="add-exercise.php?id=2"
                                       class="btn btn-sm btn-outline-primary">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        <!-- ROW 3 -->
                        <tr>

                            <td>3</td>

                            <td>
                                <div class="exercise-info">

                                    <div class="exercise-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>

                                    <div>
                                        <strong>Barbell Squats</strong>
                                        <small>Strength Exercise</small>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="muscle-badge">
                                    Legs
                                </span>
                            </td>

                            <td>

                                <a href="https://youtube.com"
                                   target="_blank"
                                   class="video-link">

                                    <i class="fa-brands fa-youtube"></i>
                                    Watch

                                </a>

                            </td>

                            <td>
                                <span class="instruction-text">
                                    Keep your back straight and
                                    squat down slowly.
                                </span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a href="add-exercise.php?id=3"
                                       class="btn btn-sm btn-outline-primary">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        <!-- ROW 4 -->
                        <tr>

                            <td>4</td>

                            <td>
                                <div class="exercise-info">

                                    <div class="exercise-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>

                                    <div>
                                        <strong>Lat Pulldown</strong>
                                        <small>Strength Exercise</small>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="muscle-badge">
                                    Back
                                </span>
                            </td>

                            <td>
                                <span class="text-muted">
                                    No Video
                                </span>
                            </td>

                            <td>
                                <span class="instruction-text">
                                    Pull the bar down towards
                                    your upper chest.
                                </span>
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a href="add-exercise.php?id=4"
                                       class="btn btn-sm btn-outline-primary">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        <!-- ROW 5 -->
                        <tr>

                            <td>5</td>

                            <td>
                                <div class="exercise-info">

                                    <div class="exercise-icon">
                                        <i class="fa-solid fa-dumbbell"></i>
                                    </div>

                                    <div>
                                        <strong>Bicep Curl</strong>
                                        <small>Strength Exercise</small>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="muscle-badge">
                                    Biceps
                                </span>
                            </td>

                            <td>
                                <span class="text-muted">
                                    No Video
                                </span>
                            </td>

                            <td>
                                <span class="instruction-text">
                                    Curl dumbbells upward while
                                    keeping elbows stable.
                                </span>
                            </td>

                            <td>
                                <span class="status inactive">
                                    Inactive
                                </span>
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a href="add-exercise.php?id=5"
                                       class="btn btn-sm btn-outline-primary">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                    <button type="button"
                                            class="btn btn-sm btn-outline-danger">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <!-- PAGINATION -->
            <div class="pagination-wrapper">

                <div class="pagination-info">
                    Showing 1 to 5 of 25 exercises
                </div>

                <nav>

                    <ul class="pagination mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Previous
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                2
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                3
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                Next
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>

<style>

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.page-header h2 {
    margin: 0;
    font-size: 24px;
    font-weight: 700;
}

.page-header p {
    margin: 5px 0 0;
    color: #6b7280;
}

.stat-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    min-height: 110px;
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
}

.stat-icon {
    width: 52px;
    height: 52px;
    min-width: 52px;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
}

.stat-icon.blue {
    background: #2563eb;
}

.stat-icon.green {
    background: #16a34a;
}

.stat-icon.orange {
    background: #f59e0b;
}

.stat-icon.purple {
    background: #7c3aed;
}

.stat-card span {
    display: block;
    color: #6b7280;
    font-size: 13px;
}

.stat-card h3 {
    margin: 5px 0 0;
    font-size: 25px;
    font-weight: 700;
}

.dashboard-section {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.section-header h5 {
    margin: 0;
    font-size: 17px;
    font-weight: 600;
}

.section-header small {
    color: #6b7280;
}

.filter-box {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 18px;
}

.form-label {
    font-size: 13px;
    font-weight: 600;
    color: #374151;
}

.exercise-table {
    margin-bottom: 0;
}

.exercise-table thead th {
    background: #f8fafc;
    color: #6b7280;
    font-size: 12px;
    font-weight: 600;
    white-space: nowrap;
    border-bottom: 1px solid #e5e7eb;
}

.exercise-table tbody td {
    font-size: 13px;
    color: #374151;
    vertical-align: middle;
}

.exercise-info {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 200px;
}

.exercise-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 9px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.exercise-info strong {
    display: block;
    font-size: 13px;
    color: #111827;
}

.exercise-info small {
    display: block;
    font-size: 11px;
    color: #6b7280;
    margin-top: 2px;
}

.muscle-badge {
    display: inline-block;
    background: #f3f4f6;
    color: #374151;
    border-radius: 20px;
    padding: 5px 10px;
    font-size: 11px;
    font-weight: 600;
}

.video-link {
    color: #dc2626;
    text-decoration: none;
    font-size: 12px;
    font-weight: 600;
}

.video-link:hover {
    color: #b91c1c;
}

.instruction-text {
    display: block;
    max-width: 250px;
    color: #6b7280;
    white-space: normal;
    line-height: 1.5;
}

.status {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

.status.active {
    background: #dcfce7;
    color: #15803d;
}

.status.inactive {
    background: #fee2e2;
    color: #b91c1c;
}

.action-buttons {
    display: flex;
    gap: 5px;
}

.pagination-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid #e5e7eb;
}

.pagination-info {
    color: #6b7280;
    font-size: 12px;
}

@media (max-width: 767px) {

    .page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .section-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .pagination-wrapper {
        align-items: flex-start;
        flex-direction: column;
    }

}

</style>

<?php include '../includes/footer.php'; ?>