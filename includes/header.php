<?php
$baseUrl = '/test';

$pageTitle = $pageTitle ?? 'Gym Management System';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f6fa;
            font-family: Arial, Helvetica, sans-serif;
        }

        .admin-wrapper {
            min-height: 100vh;
        }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        .content-area {
            padding: 25px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #212529;
            margin-bottom: 20px;
        }

        .topbar {
            height: 70px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .topbar-title {
            font-size: 20px;
            font-weight: 600;
            color: #212529;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .admin-info strong {
            display: block;
            font-size: 14px;
        }

        .admin-info small {
            color: #6c757d;
        }

        .footer {
            background: #ffffff;
            border-top: 1px solid #e5e7eb;
            padding: 15px 25px;
            color: #6c757d;
            font-size: 14px;
            margin-left: 250px;
        }

        @media (max-width: 991px) {
            .main-content {
                margin-left: 0;
            }

            .footer {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<div class="admin-wrapper">