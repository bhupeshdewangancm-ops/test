<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit Member App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        *{box-sizing:border-box}
        body{margin:0;background:#f5f7fb;font-family:Arial,sans-serif;color:#111827}
        .app-home{max-width:520px;margin:auto;padding:35px 18px}
        .app-logo{text-align:center;margin-bottom:25px}
        .logo-icon{width:65px;height:65px;background:#2563eb;color:#fff;border-radius:18px;display:flex;align-items:center;justify-content:center;margin:auto;font-size:25px}
        .app-logo h1{font-size:24px;margin:12px 0 3px}
        .app-logo p{font-size:10px;color:#9ca3af;margin:0}
        .hero-card{background:linear-gradient(135deg,#2563eb,#1d4ed8);color:#fff;border-radius:20px;padding:28px 22px;text-align:center}
        .hero-icon{width:55px;height:55px;background:rgba(255,255,255,.15);border-radius:16px;display:flex;align-items:center;justify-content:center;margin:0 auto 15px;font-size:21px}
        .hero-card h2{font-size:20px;line-height:1.35;margin:0 0 9px}
        .hero-card p{font-size:10px;line-height:1.7;opacity:.85;margin:0 auto 20px}
        .primary-btn{height:44px;background:#fff;color:#2563eb;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:7px;text-decoration:none;font-size:10px;font-weight:700}
        .feature-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px;margin-top:15px}
        .feature-card{background:#fff;border:1px solid #eef0f4;border-radius:13px;padding:14px;text-decoration:none;color:#111827}
        .feature-icon{width:36px;height:36px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:11px;margin-bottom:9px}
        .blue{background:#eff6ff;color:#2563eb}
        .orange{background:#fff7ed;color:#ea580c}
        .purple{background:#f5f3ff;color:#7c3aed}
        .green{background:#ecfdf5;color:#16a34a}
        .feature-card strong{display:block;font-size:9px}
        .feature-card span{display:block;color:#9ca3af;font-size:7px;margin-top:4px}
        .app-footer{text-align:center;color:#9ca3af;font-size:8px;margin-top:25px}
    </style>
</head>
<body>

<div class="app-home">

    <div class="app-logo">
        <div class="logo-icon">
            <i class="fa-solid fa-dumbbell"></i>
        </div>
        <h1>GymFit</h1>
        <p>Member App</p>
    </div>

    <div class="hero-card">
        <div class="hero-icon">
            <i class="fa-solid fa-heart-pulse"></i>
        </div>

        <h2>Your Fitness Journey Starts Here</h2>

        <p>
            Track your workouts, attendance, membership and progress from one place.
        </p>

        <a href="<?= $baseUrl ?>/auth/login.php" class="primary-btn">
            <i class="fa-solid fa-right-to-bracket"></i>
            Login to Member App
        </a>
    </div>

    <div class="feature-grid">

        <a href="<?= $baseUrl ?>/auth/login.php" class="feature-card">
            <div class="feature-icon blue">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <strong>Attendance</strong>
            <span>Track your attendance</span>
        </a>

        <a href="<?= $baseUrl ?>/auth/login.php" class="feature-card">
            <div class="feature-icon orange">
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <strong>Workouts</strong>
            <span>View workout plans</span>
        </a>

        <a href="<?= $baseUrl ?>/auth/login.php" class="feature-card">
            <div class="feature-icon purple">
                <i class="fa-solid fa-crown"></i>
            </div>
            <strong>Membership</strong>
            <span>Check membership</span>
        </a>

        <a href="<?= $baseUrl ?>/auth/login.php" class="feature-card">
            <div class="feature-icon green">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <strong>Progress</strong>
            <span>Track progress</span>
        </a>

    </div>

    <div class="app-footer">
        © 2026 GymFit Member App
    </div>

</div>

</body>
</html>