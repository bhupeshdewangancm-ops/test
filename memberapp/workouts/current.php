<?php
$pageTitle = 'Current Workout';
include '../includes/header.php';
?>

<div class="current-workout-page">

    <div class="page-heading">
        <div class="heading-left">
            <a href="index.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div>
                <span class="page-label">WORKOUT</span>
                <h2>Current Workout</h2>
                <p>Your active workout plan.</p>
            </div>
        </div>
    </div>

    <div class="plan-card">

        <div class="plan-icon">
            <i class="fa-solid fa-fire"></i>
        </div>

        <div class="plan-info">
            <span>ACTIVE WORKOUT PLAN</span>
            <h3>Weight Loss Beginner Plan</h3>
            <small>
                Assigned by Rahul Trainer
            </small>
        </div>

        <div class="active-badge">
            <i class="fa-solid fa-circle"></i>
            Active
        </div>

    </div>

    <div class="workout-stats">

        <div>
            <i class="fa-solid fa-list-check"></i>
            <span>Exercises</span>
            <strong>5</strong>
        </div>

        <div>
            <i class="fa-solid fa-calendar-days"></i>
            <span>Days / Week</span>
            <strong>3</strong>
        </div>

        <div>
            <i class="fa-solid fa-clock"></i>
            <span>Duration</span>
            <strong>45 Min</strong>
        </div>

    </div>

    <div class="section-heading">
        <h4>Today's Exercises</h4>
        <p>Thursday • Full Body Training</p>
    </div>

    <div class="exercise-card">

        <div class="exercise-item">

            <div class="exercise-number">01</div>

            <div class="exercise-content">
                <strong>Treadmill Running</strong>
                <span>Cardio warm-up</span>

                <div class="exercise-details">
                    <small>
                        <b>Duration</b>
                        20 Minutes
                    </small>
                </div>
            </div>

            <span class="exercise-status">Cardio</span>

        </div>

        <div class="exercise-item">

            <div class="exercise-number">02</div>

            <div class="exercise-content">
                <strong>Squats</strong>
                <span>Leg strength exercise</span>

                <div class="exercise-details">
                    <small>
                        <b>Sets</b>
                        3
                    </small>
                    <small>
                        <b>Reps</b>
                        12
                    </small>
                    <small>
                        <b>Rest</b>
                        60 Sec
                    </small>
                </div>
            </div>

            <span class="exercise-status">Strength</span>

        </div>

        <div class="exercise-item">

            <div class="exercise-number">03</div>

            <div class="exercise-content">
                <strong>Bench Press</strong>
                <span>Chest strength exercise</span>

                <div class="exercise-details">
                    <small>
                        <b>Sets</b>
                        3
                    </small>
                    <small>
                        <b>Reps</b>
                        10
                    </small>
                    <small>
                        <b>Rest</b>
                        90 Sec
                    </small>
                </div>
            </div>

            <span class="exercise-status">Chest</span>

        </div>

        <div class="exercise-item">

            <div class="exercise-number">04</div>

            <div class="exercise-content">
                <strong>Lat Pulldown</strong>
                <span>Back strength exercise</span>

                <div class="exercise-details">
                    <small>
                        <b>Sets</b>
                        3
                    </small>
                    <small>
                        <b>Reps</b>
                        12
                    </small>
                    <small>
                        <b>Rest</b>
                        60 Sec
                    </small>
                </div>
            </div>

            <span class="exercise-status">Back</span>

        </div>

        <div class="exercise-item">

            <div class="exercise-number">05</div>

            <div class="exercise-content">
                <strong>Bicep Curl</strong>
                <span>Biceps strength exercise</span>

                <div class="exercise-details">
                    <small>
                        <b>Sets</b>
                        3
                    </small>
                    <small>
                        <b>Reps</b>
                        12
                    </small>
                    <small>
                        <b>Rest</b>
                        60 Sec
                    </small>
                </div>
            </div>

            <span class="exercise-status">Arms</span>

        </div>

    </div>

    <div class="trainer-note">

        <div class="note-icon">
            <i class="fa-solid fa-lightbulb"></i>
        </div>

        <div>
            <strong>Trainer Instructions</strong>
            <p>
                Start with a proper warm-up. Maintain correct form
                during every exercise and take adequate rest between sets.
            </p>
        </div>

    </div>

    <a href="index.php" class="back-btn-large">
        <i class="fa-solid fa-arrow-left"></i>
        Back to Workouts
    </a>

</div>

<style>
.current-workout-page{max-width:800px;margin:auto}
.page-heading{margin-bottom:20px}
.heading-left{display:flex;align-items:center;gap:12px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:21px;margin:3px 0}
.page-heading p{font-size:10px;color:#6b7280;margin:0}
.plan-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:16px;padding:17px;display:flex;align-items:center;gap:11px;margin-bottom:10px}
.plan-icon{width:47px;height:47px;background:rgba(255,255,255,.14);border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:18px}
.plan-info{flex:1}
.plan-info>span{font-size:7px;letter-spacing:.8px;opacity:.7}
.plan-info h3{font-size:14px;margin:4px 0}
.plan-info small{font-size:7px;opacity:.7}
.active-badge{background:rgba(255,255,255,.14);padding:6px 8px;border-radius:14px;font-size:7px}
.active-badge i{font-size:5px;color:#bbf7d0;margin-right:3px}
.workout-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:8px}
.workout-stats>div{background:#fff;border:1px solid #eef0f4;border-radius:11px;padding:12px;text-align:center}
.workout-stats i{display:block;color:#2563eb;font-size:13px;margin-bottom:5px}
.workout-stats span{display:block;color:#9ca3af;font-size:7px}
.workout-stats strong{display:block;font-size:12px;margin-top:4px}
.section-heading{margin:23px 0 10px}
.section-heading h4{font-size:15px;margin:0}
.section-heading p{font-size:9px;color:#9ca3af;margin:4px 0 0}
.exercise-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:4px 15px}
.exercise-item{display:flex;align-items:flex-start;gap:10px;padding:13px 0;border-bottom:1px solid #f3f4f6}
.exercise-item:last-child{border-bottom:0}
.exercise-number{width:34px;height:34px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:8px;font-weight:700;flex-shrink:0}
.exercise-content{flex:1}
.exercise-content>strong{display:block;font-size:10px}
.exercise-content>span{display:block;color:#9ca3af;font-size:7px;margin-top:3px}
.exercise-details{display:flex;gap:12px;margin-top:8px}
.exercise-details small{font-size:7px;color:#6b7280}
.exercise-details b{display:block;color:#9ca3af;font-size:6px;margin-bottom:2px}
.exercise-status{font-size:7px;background:#f8fafc;color:#6b7280;padding:5px 7px;border-radius:10px}
.trainer-note{display:flex;align-items:flex-start;gap:9px;background:#eff6ff;border-radius:12px;padding:12px;margin-top:10px}
.note-icon{width:37px;height:37px;background:#2563eb;color:#fff;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.trainer-note strong{display:block;font-size:9px;color:#1e40af}
.trainer-note p{font-size:8px;color:#6b7280;line-height:1.6;margin:4px 0 0}
.back-btn-large{height:41px;background:#fff;border:1px solid #e5e7eb;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;color:#374151;font-size:9px;font-weight:600;margin:10px 0 15px}
@media(max-width:550px){
.plan-card{align-items:flex-start;flex-wrap:wrap}
.active-badge{margin-left:auto}
.workout-stats{grid-template-columns:1fr}
.exercise-status{display:none}
.exercise-details{gap:8px}
}
</style>

<?php include '../includes/footer.php'; ?>