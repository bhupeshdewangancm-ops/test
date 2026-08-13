<?php
$pageTitle = 'Workout History';
include '../includes/header.php';
?>

<div class="workout-history-page">

    <div class="page-heading">
        <div class="heading-left">
            <a href="index.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div>
                <span class="page-label">FITNESS</span>
                <h2>Workout History</h2>
                <p>View your previous workout plans.</p>
            </div>
        </div>
    </div>

    <div class="history-summary">

        <div class="summary-card">
            <div class="summary-icon blue">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <div>
                <span>Total Plans</span>
                <strong>3</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon green">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <span>Completed</span>
                <strong>2</strong>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon orange">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <span>Current</span>
                <strong>1</strong>
            </div>
        </div>

    </div>

    <div class="section-heading">
        <h4>Workout Plans</h4>
        <p>Your workout assignment history</p>
    </div>

    <div class="history-list">

        <a href="current.php" class="history-card">

            <div class="plan-history-icon active">
                <i class="fa-solid fa-fire"></i>
            </div>

            <div class="history-info">

                <div class="history-title">
                    <strong>Weight Loss Beginner Plan</strong>
                    <span class="status active">Active</span>
                </div>

                <small>07 Aug 2026 - 06 Sep 2026</small>

                <div class="history-meta">
                    <span>
                        <i class="fa-solid fa-dumbbell"></i>
                        5 Exercises
                    </span>

                    <span>
                        <i class="fa-solid fa-user-tie"></i>
                        Rahul Trainer
                    </span>
                </div>

            </div>

            <i class="fa-solid fa-chevron-right arrow"></i>

        </a>

        <a href="current.php" class="history-card">

            <div class="plan-history-icon completed">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div class="history-info">

                <div class="history-title">
                    <strong>Strength Training Plan</strong>
                    <span class="status completed">Completed</span>
                </div>

                <small>07 Jul 2026 - 06 Aug 2026</small>

                <div class="history-meta">
                    <span>
                        <i class="fa-solid fa-dumbbell"></i>
                        8 Exercises
                    </span>

                    <span>
                        <i class="fa-solid fa-user-tie"></i>
                        Rahul Trainer
                    </span>
                </div>

            </div>

            <i class="fa-solid fa-chevron-right arrow"></i>

        </a>

        <a href="current.php" class="history-card">

            <div class="plan-history-icon completed">
                <i class="fa-solid fa-heart-pulse"></i>
            </div>

            <div class="history-info">

                <div class="history-title">
                    <strong>Cardio Fitness Plan</strong>
                    <span class="status completed">Completed</span>
                </div>

                <small>07 Jun 2026 - 06 Jul 2026</small>

                <div class="history-meta">
                    <span>
                        <i class="fa-solid fa-dumbbell"></i>
                        6 Exercises
                    </span>

                    <span>
                        <i class="fa-solid fa-user-tie"></i>
                        Amit Trainer
                    </span>
                </div>

            </div>

            <i class="fa-solid fa-chevron-right arrow"></i>

        </a>

    </div>

    <div class="history-note">

        <i class="fa-solid fa-circle-info"></i>

        <p>
            Your workout history shows previously assigned plans,
            trainers and workout duration.
        </p>

    </div>

    <a href="index.php" class="current-workout-btn">
        <i class="fa-solid fa-fire"></i>
        View Current Workout
    </a>

</div>

<style>
.workout-history-page{max-width:850px;margin:auto}
.page-heading{margin-bottom:20px}
.heading-left{display:flex;align-items:center;gap:12px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:21px;margin:3px 0}
.page-heading p{font-size:10px;color:#6b7280;margin:0}
.history-summary{display:grid;grid-template-columns:repeat(3,1fr);gap:9px}
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
.history-list{display:flex;flex-direction:column;gap:8px}
.history-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:12px;display:flex;align-items:center;gap:10px;color:#111827}
.history-card:hover{border-color:#dbeafe;box-shadow:0 3px 12px rgba(15,23,42,.04)}
.plan-history-icon{width:43px;height:43px;border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.plan-history-icon.active{background:#eff6ff;color:#2563eb}
.plan-history-icon.completed{background:#f3f4f6;color:#6b7280}
.history-info{flex:1;min-width:0}
.history-title{display:flex;align-items:center;gap:7px}
.history-title strong{font-size:10px}
.status{font-size:7px;padding:3px 6px;border-radius:10px}
.status.active{background:#ecfdf5;color:#16a34a}
.status.completed{background:#f3f4f6;color:#6b7280}
.history-info>small{display:block;color:#9ca3af;font-size:7px;margin-top:4px}
.history-meta{display:flex;gap:12px;margin-top:6px}
.history-meta span{font-size:7px;color:#6b7280}
.history-meta i{font-size:7px;color:#9ca3af;margin-right:3px}
.arrow{font-size:8px;color:#9ca3af}
.history-note{display:flex;align-items:flex-start;gap:8px;background:#eff6ff;border-radius:10px;padding:11px;margin-top:12px}
.history-note>i{color:#2563eb;font-size:11px;margin-top:2px}
.history-note p{font-size:8px;color:#6b7280;line-height:1.5;margin:0}
.current-workout-btn{height:42px;background:#2563eb;color:#fff;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600;margin:12px 0 15px}
@media(max-width:600px){
.history-summary{grid-template-columns:1fr}
}
@media(max-width:450px){
.history-title{align-items:flex-start;flex-direction:column;gap:4px}
.history-meta{gap:7px;flex-wrap:wrap}
}
</style>

<?php include '../includes/footer.php'; ?>