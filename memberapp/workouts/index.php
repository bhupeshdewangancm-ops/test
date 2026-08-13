<?php
$pageTitle = 'My Workouts';
include '../includes/header.php';
?>

<div class="workouts-page">

    <div class="page-heading">
        <div>
            <span class="page-label">FITNESS</span>
            <h2>My Workouts</h2>
            <p>Manage your assigned workout plans.</p>
        </div>

        <a href="history.php" class="history-btn">
            <i class="fa-solid fa-clock-rotate-left"></i>
            History
        </a>
    </div>

    <div class="workout-summary">

        <div class="summary-card">
            <div class="summary-icon blue">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <div>
                <span>Current Plan</span>
                <strong>1</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon green">
                <i class="fa-solid fa-list-check"></i>
            </div>
            <div>
                <span>Exercises</span>
                <strong>5</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon orange">
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <div>
                <span>Days / Week</span>
                <strong>3</strong>
            </div>
        </div>

    </div>

    <div class="section-heading">
        <h4>Current Workout Plan</h4>
        <p>Your active workout assignment</p>
    </div>

    <a href="current.php" class="current-workout-card">

        <div class="workout-main-icon">
            <i class="fa-solid fa-fire"></i>
        </div>

        <div class="workout-content">

            <div class="title-row">
                <strong>Weight Loss Beginner Plan</strong>
                <span>Active</span>
            </div>

            <small>Assigned by Rahul Trainer</small>

            <div class="workout-meta">
                <span>
                    <i class="fa-solid fa-dumbbell"></i>
                    5 Exercises
                </span>

                <span>
                    <i class="fa-solid fa-calendar"></i>
                    3 Days / Week
                </span>

                <span>
                    <i class="fa-solid fa-clock"></i>
                    45 Min
                </span>
            </div>

        </div>

        <i class="fa-solid fa-chevron-right arrow"></i>

    </a>

    <div class="section-heading">
        <h4>Today's Workout</h4>
        <p>Thursday • 13 August 2026</p>
    </div>

    <div class="today-card">

        <div class="today-header">

            <div>
                <span>DAY 3</span>
                <h3>Full Body Training</h3>
            </div>

            <div class="today-status">
                <i class="fa-solid fa-circle"></i>
                Scheduled
            </div>

        </div>

        <div class="exercise-list">

            <div class="exercise-row">
                <div class="exercise-number">01</div>
                <div class="exercise-info">
                    <strong>Treadmill Running</strong>
                    <span>20 Minutes</span>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="exercise-row">
                <div class="exercise-number">02</div>
                <div class="exercise-info">
                    <strong>Squats</strong>
                    <span>3 Sets × 12 Reps</span>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="exercise-row">
                <div class="exercise-number">03</div>
                <div class="exercise-info">
                    <strong>Bench Press</strong>
                    <span>3 Sets × 10 Reps</span>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="exercise-row">
                <div class="exercise-number">04</div>
                <div class="exercise-info">
                    <strong>Lat Pulldown</strong>
                    <span>3 Sets × 12 Reps</span>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="exercise-row">
                <div class="exercise-number">05</div>
                <div class="exercise-info">
                    <strong>Bicep Curl</strong>
                    <span>3 Sets × 12 Reps</span>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

        </div>

        <a href="current.php" class="start-workout-btn">
            <i class="fa-solid fa-play"></i>
            View Workout
        </a>

    </div>

</div>

<style>
.workouts-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.history-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#fff;border:1px solid #e5e7eb;color:#374151;padding:10px 13px;border-radius:8px;font-size:9px;font-weight:600}
.workout-summary{display:grid;grid-template-columns:repeat(3,1fr);gap:9px}
.summary-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:13px;display:flex;align-items:center;gap:9px}
.summary-icon{width:39px;height:39px;border-radius:10px;display:flex;align-items:center;justify-content:center}
.summary-icon.blue{background:#eff6ff;color:#2563eb}
.summary-icon.green{background:#ecfdf5;color:#16a34a}
.summary-icon.orange{background:#fff7ed;color:#ea580c}
.summary-card span{display:block;color:#9ca3af;font-size:7px}
.summary-card strong{display:block;font-size:14px;margin-top:4px}
.section-heading{margin:23px 0 10px}
.section-heading h4{font-size:15px;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.current-workout-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:14px;display:flex;align-items:center;gap:10px;color:#111827}
.current-workout-card:hover{border-color:#dbeafe}
.workout-main-icon{width:46px;height:46px;border-radius:11px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:17px}
.workout-content{flex:1}
.title-row{display:flex;align-items:center;gap:7px}
.title-row strong{font-size:10px}
.title-row span{font-size:7px;background:#ecfdf5;color:#16a34a;padding:4px 6px;border-radius:10px}
.workout-content>small{display:block;font-size:8px;color:#9ca3af;margin-top:4px}
.workout-meta{display:flex;gap:10px;margin-top:7px;flex-wrap:wrap}
.workout-meta span{font-size:7px;color:#6b7280}
.workout-meta i{color:#9ca3af;margin-right:3px}
.arrow{font-size:8px;color:#9ca3af}
.today-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:15px}
.today-header{display:flex;align-items:center;justify-content:space-between;padding-bottom:12px;border-bottom:1px solid #f0f0f0}
.today-header span{font-size:7px;color:#2563eb;font-weight:700;letter-spacing:.7px}
.today-header h3{font-size:13px;margin:4px 0 0}
.today-status{background:#eff6ff;color:#2563eb;padding:6px 8px;border-radius:12px;font-size:7px}
.today-status i{font-size:5px;margin-right:3px}
.exercise-list{display:flex;flex-direction:column}
.exercise-row{display:flex;align-items:center;gap:9px;padding:10px 0;border-bottom:1px solid #f3f4f6}
.exercise-row:last-child{border-bottom:0}
.exercise-number{width:31px;height:31px;border-radius:8px;background:#f8fafc;color:#6b7280;display:flex;align-items:center;justify-content:center;font-size:8px;font-weight:700}
.exercise-info{flex:1}
.exercise-info strong{display:block;font-size:9px}
.exercise-info span{display:block;font-size:7px;color:#9ca3af;margin-top:3px}
.exercise-row>i{font-size:7px;color:#9ca3af}
.start-workout-btn{height:40px;background:#2563eb;color:#fff;border-radius:8px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600;margin-top:10px}
@media(max-width:600px){
.page-heading{align-items:flex-start;flex-direction:column}
.history-btn{width:100%}
.workout-summary{grid-template-columns:1fr}
}
@media(max-width:450px){
.title-row{align-items:flex-start;flex-direction:column;gap:4px}
.workout-meta{gap:6px}
}
</style>

<?php include '../includes/footer.php'; ?>