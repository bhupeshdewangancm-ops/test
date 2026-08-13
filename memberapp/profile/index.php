<?php
$pageTitle = 'My Profile';
include '../includes/header.php';
?>

<div class="profile-page">

    <div class="page-heading">
        <div>
            <span class="page-label">ACCOUNT</span>
            <h2>My Profile</h2>
            <p>View your personal and membership information.</p>
        </div>

        <a href="edit.php" class="edit-btn">
            <i class="fa-solid fa-pen"></i>
            Edit Profile
        </a>
    </div>

    <div class="profile-header-card">

        <div class="profile-avatar">
            R
        </div>

        <div class="profile-main-info">
            <h3>Rohan Active Member</h3>
            <span>Member ID: GYM-101</span>
            <small>
                <i class="fa-solid fa-circle"></i>
                Active Member
            </small>
        </div>

    </div>

    <div class="profile-card">

        <div class="card-title">
            <i class="fa-solid fa-user"></i>
            Personal Information
        </div>

        <div class="info-grid">

            <div class="info-item">
                <span>Full Name</span>
                <strong>Rohan Active Member</strong>
            </div>

            <div class="info-item">
                <span>Mobile Number</span>
                <strong>9876543210</strong>
            </div>

            <div class="info-item">
                <span>Email Address</span>
                <strong>rohan@example.com</strong>
            </div>

            <div class="info-item">
                <span>Date of Birth</span>
                <strong>15 January 1998</strong>
            </div>

            <div class="info-item">
                <span>Gender</span>
                <strong>Male</strong>
            </div>

            <div class="info-item">
                <span>Blood Group</span>
                <strong>O+</strong>
            </div>

        </div>

    </div>

    <div class="profile-card">

        <div class="card-title">
            <i class="fa-solid fa-location-dot"></i>
            Address Information
        </div>

        <div class="address-box">
            <i class="fa-solid fa-house"></i>

            <div>
                <strong>Home Address</strong>
                <p>
                    123 Shankar Nagar,<br>
                    Raipur, Chhattisgarh - 492001
                </p>
            </div>
        </div>

    </div>

    <div class="profile-card">

        <div class="card-title">
            <i class="fa-solid fa-id-card"></i>
            Membership Information
        </div>

        <div class="membership-grid">

            <div class="membership-item">
                <span>Membership Plan</span>
                <strong>Premium Plan</strong>
            </div>

            <div class="membership-item">
                <span>Member Since</span>
                <strong>07 August 2026</strong>
            </div>

            <div class="membership-item">
                <span>Start Date</span>
                <strong>07 August 2026</strong>
            </div>

            <div class="membership-item">
                <span>Expiry Date</span>
                <strong>06 September 2026</strong>
            </div>

            <div class="membership-item">
                <span>Days Remaining</span>
                <strong class="blue-text">24 Days</strong>
            </div>

            <div class="membership-item">
                <span>Status</span>
                <strong class="green-text">Active</strong>
            </div>

        </div>

    </div>

    <div class="profile-card">

        <div class="card-title">
            <i class="fa-solid fa-building"></i>
            Gym Information
        </div>

        <div class="gym-info">

            <div class="gym-icon">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div>
                <strong>GymFit Fitness Center</strong>
                <span>Raipur Main Branch</span>
                <small>
                    Shankar Nagar, Raipur, Chhattisgarh
                </small>
            </div>

        </div>

    </div>

    <a href="edit.php" class="mobile-edit-btn">
        <i class="fa-solid fa-pen"></i>
        Edit Profile
    </a>

</div>

<style>
.profile-page{max-width:850px;margin:auto}
.page-heading{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}
.page-label{font-size:9px;font-weight:700;color:#2563eb;letter-spacing:1px}
.page-heading h2{font-size:23px;font-weight:700;margin:5px 0}
.page-heading p{font-size:11px;color:#6b7280;margin:0}
.edit-btn{display:flex;align-items:center;justify-content:center;gap:7px;background:#2563eb;color:#fff;border-radius:8px;padding:10px 13px;font-size:9px;font-weight:600}
.profile-header-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:18px;padding:22px;display:flex;align-items:center;gap:15px;margin-bottom:12px}
.profile-avatar{width:65px;height:65px;border-radius:50%;background:#fff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:700;border:3px solid rgba(255,255,255,.3)}
.profile-main-info h3{font-size:18px;margin:0 0 5px}
.profile-main-info>span{display:block;font-size:9px;opacity:.75}
.profile-main-info small{display:inline-flex;align-items:center;gap:5px;background:rgba(255,255,255,.14);padding:5px 8px;border-radius:15px;font-size:8px;margin-top:8px}
.profile-main-info small i{font-size:6px;color:#bbf7d0}
.profile-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:17px;margin-bottom:12px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:15px}
.card-title i{color:#2563eb}
.info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.info-item span,.membership-item span{display:block;color:#9ca3af;font-size:8px}
.info-item strong,.membership-item strong{display:block;font-size:10px;margin-top:4px;color:#111827}
.address-box{display:flex;align-items:flex-start;gap:11px}
.address-box>i{width:38px;height:38px;background:#eff6ff;color:#2563eb;border-radius:10px;display:flex;align-items:center;justify-content:center}
.address-box strong{font-size:10px}
.address-box p{font-size:9px;color:#6b7280;line-height:1.6;margin:4px 0 0}
.membership-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.blue-text{color:#2563eb!important}
.green-text{color:#16a34a!important}
.gym-info{display:flex;align-items:center;gap:11px}
.gym-icon{width:43px;height:43px;border-radius:10px;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center}
.gym-info strong{display:block;font-size:11px}
.gym-info span{display:block;font-size:8px;color:#6b7280;margin-top:3px}
.gym-info small{display:block;font-size:8px;color:#9ca3af;margin-top:3px}
.mobile-edit-btn{display:none}
@media(max-width:550px){
.page-heading{align-items:flex-start;flex-direction:column}
.edit-btn{display:none}
.profile-header-card{padding:18px}
.profile-avatar{width:58px;height:58px}
.profile-main-info h3{font-size:15px}
.info-grid,.membership-grid{grid-template-columns:1fr}
.mobile-edit-btn{height:43px;background:#2563eb;color:#fff;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:7px;font-size:10px;font-weight:600;margin-bottom:15px}
}
</style>

<?php include '../includes/footer.php'; ?>