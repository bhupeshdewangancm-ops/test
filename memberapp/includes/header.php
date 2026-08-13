<?php
include_once __DIR__ . '/config.php';
$pageTitle = $pageTitle ?? 'GymFit Member App';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - GymFit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        *{box-sizing:border-box}
        body{margin:0;background:#f5f7fb;font-family:Arial,sans-serif;color:#111827}
        .member-main{margin-left:230px;min-height:100vh}
        .member-header{height:65px;background:#fff;border-bottom:1px solid #eef0f4;display:flex;align-items:center;justify-content:space-between;padding:0 22px;position:sticky;top:0;z-index:900}
        .header-title{font-size:14px;font-weight:700}
        .header-actions{display:flex;align-items:center;gap:8px}
        .header-btn{width:35px;height:35px;border:1px solid #eef0f4;background:#fff;border-radius:9px;color:#374151;display:flex;align-items:center;justify-content:center;text-decoration:none;font-size:10px}
        .page-content{padding:20px}
        @media(max-width:767px){
            .member-main{margin-left:0}
            .page-content{padding:14px 12px 80px}
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/sidebar.php'; ?>

<div class="member-main">

    <header class="member-header">

        <div class="header-title">
            <?= htmlspecialchars($pageTitle) ?>
        </div>

        <div class="header-actions">

            <a href="<?= $baseUrl ?>/notifications/index.php" class="header-btn">
                <i class="fa-solid fa-bell"></i>
            </a>

            <a href="<?= $baseUrl ?>/profile/index.php" class="header-btn">
                <i class="fa-solid fa-user"></i>
            </a>

        </div>

    </header>

    <main class="page-content">