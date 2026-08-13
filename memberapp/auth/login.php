<?php
include '../includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Member Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        *{box-sizing:border-box}
        body{margin:0;background:#f5f7fb;font-family:Arial,sans-serif}
        .login-page{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}
        .login-box{width:100%;max-width:390px}
        .login-logo{text-align:center;margin-bottom:20px}
        .login-logo>div{width:62px;height:62px;background:#2563eb;color:#fff;border-radius:17px;display:flex;align-items:center;justify-content:center;margin:auto;font-size:24px}
        .login-logo h2{font-size:20px;margin:12px 0 4px}
        .login-logo p{font-size:9px;color:#9ca3af;margin:0}
        .login-card{background:#fff;border:1px solid #e5e7eb;border-radius:17px;padding:22px}
        .login-card label{font-size:9px;font-weight:600;color:#374151;margin-bottom:6px;display:block}
        .input-box{height:44px;border:1px solid #d1d5db;border-radius:9px;display:flex;align-items:center;padding:0 11px;gap:8px;margin-bottom:15px}
        .input-box i{color:#9ca3af;font-size:10px}
        .input-box input{border:0;outline:0;width:100%;font-size:10px}
        .login-options{display:flex;justify-content:space-between;align-items:center;margin-bottom:17px}
        .login-options a{font-size:8px;color:#2563eb;text-decoration:none}
        .remember{display:flex!important;align-items:center;gap:5px;margin:0!important;font-weight:400!important}
        .remember input{width:11px}
        .login-btn{height:44px;background:#2563eb;color:#fff;border-radius:9px;display:flex;align-items:center;justify-content:center;gap:6px;text-decoration:none;font-size:10px;font-weight:600}
        .login-footer{text-align:center;color:#9ca3af;font-size:8px;margin-top:18px}
    </style>
</head>
<body>

<div class="login-page">

    <div class="login-box">

        <div class="login-logo">
            <div>
                <i class="fa-solid fa-dumbbell"></i>
            </div>
            <h2>Welcome Back</h2>
            <p>Login to your GymFit member account</p>
        </div>

        <div class="login-card">

            <form>

                <label>Mobile Number</label>

                <div class="input-box">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" placeholder="Enter mobile number">
                </div>

                <label>Password</label>

                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Enter password">
                    <i class="fa-solid fa-eye"></i>
                </div>

                <div class="login-options">

                    <label class="remember">
                        <input type="checkbox">
                        Remember me
                    </label>

                    <a href="#">Forgot Password?</a>

                </div>

                <a href="<?= $baseUrl ?>/dashboard/index.php" class="login-btn">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login
                </a>

            </form>

        </div>

        <div class="login-footer">
            © 2026 GymFit Member App
        </div>

    </div>

</div>

</body>
</html>