<?php
$pageTitle = 'My Trainer';
include '../includes/header.php';
?>

<div class="trainer-page">

    <div class="page-heading">
        <div>
            <span class="page-label">TRAINER</span>
            <h2>My Trainer</h2>
            <p>View your assigned personal trainer.</p>
        </div>
    </div>

    <div class="trainer-profile-card">

        <div class="trainer-avatar">R</div>

        <div class="trainer-profile-info">
            <span>PERSONAL TRAINER</span>
            <h3>Rahul Trainer</h3>
            <p>
                <i class="fa-solid fa-circle"></i>
                Available Today
            </p>
        </div>

        <div class="verified-badge">
            <i class="fa-solid fa-circle-check"></i>
            Verified
        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-user-tie"></i>
            Trainer Information
        </div>

        <div class="info-grid">

            <div class="info-item">
                <span>Trainer Name</span>
                <strong>Rahul Trainer</strong>
            </div>

            <div class="info-item">
                <span>Experience</span>
                <strong>7 Years</strong>
            </div>

            <div class="info-item">
                <span>Specialization</span>
                <strong>Weight Training</strong>
            </div>

            <div class="info-item">
                <span>Certification</span>
                <strong>Certified Fitness Trainer</strong>
            </div>

            <div class="info-item">
                <span>Mobile Number</span>
                <strong>9876543211</strong>
            </div>

            <div class="info-item">
                <span>Email</span>
                <strong>rahul@gymfit.com</strong>
            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-calendar-check"></i>
            Training Schedule
        </div>

        <div class="schedule-list">

            <div class="schedule-row">
                <div class="day">MON</div>
                <div class="schedule-info">
                    <strong>Weight Training</strong>
                    <span>07:00 AM - 08:00 AM</span>
                </div>
                <span class="schedule-status">Scheduled</span>
            </div>

            <div class="schedule-row">
                <div class="day">WED</div>
                <div class="schedule-info">
                    <strong>Strength Training</strong>
                    <span>07:00 AM - 08:00 AM</span>
                </div>
                <span class="schedule-status">Scheduled</span>
            </div>

            <div class="schedule-row">
                <div class="day">FRI</div>
                <div class="schedule-info">
                    <strong>Fitness Assessment</strong>
                    <span>07:00 AM - 08:00 AM</span>
                </div>
                <span class="schedule-status">Scheduled</span>
            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-title">
            <i class="fa-solid fa-dumbbell"></i>
            Assigned Workout
        </div>

        <div class="workout-box">

            <div class="workout-icon">
                <i class="fa-solid fa-fire"></i>
            </div>

            <div>
                <strong>Weight Loss Beginner Plan</strong>
                <span>5 Exercises • 3 Days / Week</span>
                <small>Assigned on 07 August 2026</small>
            </div>

            <a href="../workouts/current.php">
                <i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>

    </div>

    <div class="contact-actions">

        <a href="tel:9876543211" class="call-btn">
            <i class="fa-solid fa-phone"></i>
            Call Trainer
        </a>

        <a href="mailto:rahul@gymfit.com" class="message-btn">
            <i class="fa-solid fa-envelope"></i>
            Email Trainer
        </a>

    </div>

</div>

<style>
.trainer-page{max-width:850px;margin:auto}
.page-heading{margin-bottom:20px}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:23px;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.trainer-profile-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:17px;padding:20px;display:flex;align-items:center;gap:13px;margin-bottom:10px}
.trainer-avatar{width:62px;height:62px;border-radius:50%;background:#fff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:700}
.trainer-profile-info{flex:1}
.trainer-profile-info>span{font-size:7px;letter-spacing:1px;opacity:.7}
.trainer-profile-info h3{font-size:17px;margin:4px 0}
.trainer-profile-info p{font-size:8px;margin:0;opacity:.85}
.trainer-profile-info p i{font-size:6px;color:#bbf7d0;margin-right:3px}
.verified-badge{font-size:8px;background:rgba(255,255,255,.13);padding:6px 8px;border-radius:14px}
.card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:10px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:14px}
.card-title i{color:#2563eb}
.info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.info-item span{display:block;color:#9ca3af;font-size:8px}
.info-item strong{display:block;font-size:10px;margin-top:4px}
.schedule-list{display:flex;flex-direction:column}
.schedule-row{display:flex;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid #f3f4f6}
.schedule-row:last-child{border-bottom:0}
.day{width:40px;height:36px;border-radius:9px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:8px;font-weight:700}
.schedule-info{flex:1}
.schedule-info strong{display:block;font-size:9px}
.schedule-info span{display:block;font-size:8px;color:#9ca3af;margin-top:3px}
.schedule-status{font-size:7px;background:#ecfdf5;color:#16a34a;padding:5px 7px;border-radius:10px}
.workout-box{display:flex;align-items:center;gap:10px}
.workout-icon{width:43px;height:43px;background:#fff7ed;color:#ea580c;border-radius:10px;display:flex;align-items:center;justify-content:center}
.workout-box>div:nth-child(2){flex:1}
.workout-box strong{display:block;font-size:10px}
.workout-box span{display:block;font-size:8px;color:#6b7280;margin-top:3px}
.workout-box small{display:block;font-size:7px;color:#9ca3af;margin-top:3px}
.workout-box>a{color:#9ca3af;font-size:9px}
.contact-actions{display:flex;gap:8px;margin-bottom:15px}
.call-btn,.message-btn{height:42px;flex:1;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600}
.call-btn{background:#2563eb;color:#fff}
.message-btn{background:#fff;border:1px solid #e5e7eb;color:#374151}
@media(max-width:550px){
.info-grid{grid-template-columns:1fr}
.contact-actions{flex-direction:column}
.trainer-profile-card{align-items:flex-start}
.verified-badge{margin-left:auto}
}
</style>

<?php include '../includes/footer.php'; ?>