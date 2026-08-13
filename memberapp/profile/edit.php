<?php
$pageTitle = 'Edit Profile';
include '../includes/header.php';
?>

<div class="edit-profile-page">

    <div class="page-heading">

        <div class="heading-left">
            <a href="index.php" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div>
                <span class="page-label">ACCOUNT</span>
                <h2>Edit Profile</h2>
                <p>Update your personal information.</p>
            </div>
        </div>

    </div>

    <form method="post" action="#">

        <div class="form-card">

            <div class="card-title">
                <i class="fa-solid fa-user"></i>
                Personal Information
            </div>

            <div class="profile-photo-section">

                <div class="profile-photo">
                    R
                </div>

                <div>
                    <strong>Profile Photo</strong>
                    <p>Upload a new profile photo.</p>

                    <label class="upload-btn">
                        <i class="fa-solid fa-camera"></i>
                        Change Photo
                        <input type="file" accept="image/*">
                    </label>
                </div>

            </div>

            <div class="form-grid">

                <div class="form-group">
                    <label>Full Name <span>*</span></label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-user"></i>

                        <input
                            type="text"
                            name="name"
                            value="Rohan Active Member"
                            placeholder="Enter full name"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Mobile Number <span>*</span></label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-mobile-screen-button"></i>

                        <input
                            type="tel"
                            name="mobile"
                            value="9876543210"
                            placeholder="Enter mobile number"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Email Address</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-envelope"></i>

                        <input
                            type="email"
                            name="email"
                            value="rohan@example.com"
                            placeholder="Enter email address"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-calendar"></i>

                        <input
                            type="date"
                            name="date_of_birth"
                            value="1998-01-15"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-venus-mars"></i>

                        <select name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Blood Group</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-droplet"></i>

                        <select name="blood_group">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+" selected>O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>

            </div>

        </div>

        <div class="form-card">

            <div class="card-title">
                <i class="fa-solid fa-location-dot"></i>
                Address Information
            </div>

            <div class="form-grid">

                <div class="form-group full">
                    <label>Address</label>

                    <div class="input-wrapper textarea-wrapper">
                        <i class="fa-solid fa-house"></i>

                        <textarea
                            name="address"
                            placeholder="Enter your address"
                        >123 Shankar Nagar, Raipur, Chhattisgarh - 492001</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label>City</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-city"></i>

                        <input
                            type="text"
                            name="city"
                            value="Raipur"
                            placeholder="Enter city"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>State</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-map"></i>

                        <input
                            type="text"
                            name="state"
                            value="Chhattisgarh"
                            placeholder="Enter state"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>PIN Code</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-location-crosshairs"></i>

                        <input
                            type="text"
                            name="pincode"
                            value="492001"
                            maxlength="6"
                            placeholder="Enter PIN code"
                        >
                    </div>
                </div>

            </div>

        </div>

        <div class="form-actions">

            <a href="index.php" class="cancel-btn">
                <i class="fa-solid fa-xmark"></i>
                Cancel
            </a>

            <button type="submit" class="save-btn">
                <i class="fa-solid fa-check"></i>
                Save Changes
            </button>

        </div>

    </form>

</div>

<style>
.edit-profile-page{max-width:850px;margin:auto}
.page-heading{margin-bottom:20px}
.heading-left{display:flex;align-items:center;gap:12px}
.back-btn{width:38px;height:38px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#374151}
.page-label{font-size:9px;color:#2563eb;font-weight:700;letter-spacing:1px}
.page-heading h2{font-size:21px;font-weight:700;margin:3px 0}
.page-heading p{font-size:10px;color:#6b7280;margin:0}
.form-card{background:#fff;border:1px solid #eef0f4;border-radius:14px;padding:18px;margin-bottom:12px}
.card-title{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;border-bottom:1px solid #f0f0f0;padding-bottom:13px;margin-bottom:17px}
.card-title i{color:#2563eb}
.profile-photo-section{display:flex;align-items:center;gap:13px;padding-bottom:18px;margin-bottom:18px;border-bottom:1px solid #f0f0f0}
.profile-photo{width:62px;height:62px;border-radius:50%;background:#eff6ff;color:#2563eb;display:flex;align-items:center;justify-content:center;font-size:21px;font-weight:700}
.profile-photo-section strong{display:block;font-size:10px}
.profile-photo-section p{font-size:8px;color:#9ca3af;margin:4px 0 8px}
.upload-btn{display:inline-flex;align-items:center;gap:6px;background:#eff6ff;color:#2563eb;border-radius:7px;padding:7px 9px;font-size:8px;font-weight:600;cursor:pointer}
.upload-btn input{display:none}
.form-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.form-group.full{grid-column:1/-1}
.form-group label{display:block;font-size:9px;font-weight:600;color:#374151;margin-bottom:6px}
.form-group label span{color:#dc2626}
.input-wrapper{position:relative}
.input-wrapper>i{position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#9ca3af;font-size:11px;z-index:1}
.input-wrapper input,.input-wrapper select,.input-wrapper textarea{width:100%;border:1px solid #dfe3e8;border-radius:8px;font-size:9px;color:#374151;background:#fff}
.input-wrapper input,.input-wrapper select{height:40px;padding:0 12px 0 35px}
.input-wrapper textarea{min-height:90px;padding:11px 12px 11px 35px;resize:vertical}
.input-wrapper input:focus,.input-wrapper select:focus,.input-wrapper textarea:focus{outline:none;border-color:#2563eb;box-shadow:0 0 0 3px rgba(37,99,235,.08)}
.textarea-wrapper>i{top:14px;transform:none}
.form-actions{display:flex;align-items:center;justify-content:flex-end;gap:8px;padding-bottom:15px}
.cancel-btn,.save-btn{height:41px;padding:0 15px;border-radius:8px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:9px;font-weight:600}
.cancel-btn{background:#fff;border:1px solid #d1d5db;color:#374151}
.save-btn{background:#2563eb;border:0;color:#fff}
@media(max-width:600px){
.form-grid{grid-template-columns:1fr}
.form-group.full{grid-column:auto}
.form-actions{flex-direction:column-reverse}
.cancel-btn,.save-btn{width:100%}
}
</style>

<?php include '../includes/footer.php'; ?>