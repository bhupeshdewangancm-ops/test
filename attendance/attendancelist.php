<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attendance</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f5f6fa;
        }

        .page-title {
            font-weight: 600;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .filter-label {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .table th {
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
            vertical-align: middle;
        }

        .table td {
            font-size: 14px;
            vertical-align: middle;
            white-space: nowrap;
        }

        .avatar {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .member-name {
            font-weight: 600;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .attendance-status {
            font-weight: 600;
        }

        .stat-card {
            border-radius: 12px;
            padding: 18px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
            height: 100%;
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .quick-date button {
            white-space: nowrap;
        }

        .location-box {
            font-size: 12px;
            line-height: 1.5;
        }

        .pagination .page-link {
            color: #0d6efd;
        }

        .pagination .active .page-link {
            color: #fff;
        }
    </style>
</head>

<body>

<div class="container-fluid p-4">

    <!-- ========================================== -->
    <!-- PAGE HEADER -->
    <!-- ========================================== -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="page-title mb-1">
                Attendance
            </h4>

            <p class="text-muted mb-0">
                Manage and monitor member attendance
            </p>
        </div>

        <button
            type="button"
            class="btn btn-primary"
        >
            <i class="bi bi-download me-1"></i>
            Export Attendance
        </button>

    </div>


    <!-- ========================================== -->
    <!-- SUMMARY CARDS -->
    <!-- ========================================== -->

    <div class="row g-3 mb-4">

        <!-- TOTAL -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <div class="text-muted small mb-1">
                            Today's Attendance
                        </div>

                        <h3 class="mb-0">
                            42
                        </h3>

                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            8% from yesterday
                        </small>
                    </div>

                    <div class="stat-icon bg-primary-subtle text-primary">
                        <i class="bi bi-people"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- CHECKED IN -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <div class="text-muted small mb-1">
                            Currently Inside
                        </div>

                        <h3 class="mb-0">
                            18
                        </h3>

                        <small class="text-muted">
                            Members checked in
                        </small>
                    </div>

                    <div class="stat-icon bg-success-subtle text-success">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- CHECKED OUT -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <div class="text-muted small mb-1">
                            Checked Out
                        </div>

                        <h3 class="mb-0">
                            24
                        </h3>

                        <small class="text-muted">
                            Completed visits
                        </small>
                    </div>

                    <div class="stat-icon bg-info-subtle text-info">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- ABSENT -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <div class="text-muted small mb-1">
                            Attendance Rate
                        </div>

                        <h3 class="mb-0">
                            84%
                        </h3>

                        <small class="text-success">
                            Good attendance
                        </small>
                    </div>

                    <div class="stat-icon bg-warning-subtle text-warning">
                        <i class="bi bi-graph-up"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- FILTER CARD -->
    <!-- ========================================== -->

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            <!-- QUICK DATE -->

            <div class="d-flex justify-content-between align-items-center mb-3">

                <div>

                    <h6 class="mb-1">
                        Attendance Filter
                    </h6>

                    <small class="text-muted">
                        Filter attendance records
                    </small>

                </div>

                <div class="quick-date d-flex gap-2">

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-primary"
                    >
                        Today
                    </button>

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                    >
                        Yesterday
                    </button>

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                    >
                        This Week
                    </button>

                    <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                    >
                        This Month
                    </button>

                </div>

            </div>


            <div class="row g-3 align-items-end">

                <!-- DATE -->

                <div class="col-xl-2 col-md-4">

                    <label class="filter-label">
                        Date
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        value="2026-08-10"
                    >

                </div>


                <!-- MEMBER -->

                <div class="col-xl-3 col-md-4">

                    <label class="filter-label">
                        Member
                    </label>

                    <select class="form-select">

                        <option>
                            All Members
                        </option>

                        <option>
                            Rohan Active Member
                        </option>

                        <option>
                            Amit Sharma
                        </option>

                        <option>
                            Sumit Verma
                        </option>

                        <option>
                            Priya Singh
                        </option>

                        <option>
                            Mohit Patel
                        </option>

                    </select>

                </div>


                <!-- BRANCH -->

                <div class="col-xl-2 col-md-4">

                    <label class="filter-label">
                        Branch
                    </label>

                    <select class="form-select">

                        <option>
                            All Branches
                        </option>

                        <option>
                            Raipur Main Branch
                        </option>

                        <option>
                            Raipur City Branch
                        </option>

                        <option>
                            Telibandha Branch
                        </option>

                    </select>

                </div>


                <!-- METHOD -->

                <div class="col-xl-2 col-md-4">

                    <label class="filter-label">
                        Check-in Method
                    </label>

                    <select class="form-select">

                        <option>
                            All Methods
                        </option>

                        <option>
                            QR Code
                        </option>

                        <option>
                            RFID
                        </option>

                        <option>
                            Biometric
                        </option>

                        <option>
                            Manual
                        </option>

                    </select>

                </div>


                <!-- STATUS -->

                <div class="col-xl-1 col-md-4">

                    <label class="filter-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option>
                            All
                        </option>

                        <option>
                            Inside
                        </option>

                        <option>
                            Completed
                        </option>

                    </select>

                </div>


                <!-- SEARCH -->

                <div class="col-xl-2 col-md-4">

                    <div class="d-flex gap-2">

                        <button
                            type="button"
                            class="btn btn-primary"
                        >
                            <i class="bi bi-search"></i>
                        </button>

                        <button
                            type="button"
                            class="btn btn-light border"
                        >
                            Reset
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- ATTENDANCE LIST -->
    <!-- ========================================== -->

    <div class="card shadow-sm">

        <!-- HEADER -->

        <div class="card-header bg-white border-0 py-3">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="mb-1">
                        Attendance List
                    </h5>

                    <small class="text-muted">
                        Member attendance records
                    </small>

                </div>

                <span class="badge bg-primary">
                    42 Records
                </span>

            </div>

        </div>


        <!-- TABLE -->

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="ps-4">
                                #
                            </th>

                            <th>
                                Member
                            </th>

                            <th>
                                Member Code
                            </th>

                            <th>
                                Branch
                            </th>

                            <th>
                                Date
                            </th>

                            <th>
                                Check In
                            </th>

                            <th>
                                Check Out
                            </th>

                            <th>
                                Duration
                            </th>

                            <th>
                                Method
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Location
                            </th>

                            <th class="text-center pe-4">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- ================================= -->
                        <!-- RECORD 1 -->
                        <!-- ================================= -->

                        <tr>

                            <td class="ps-4">
                                1
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar me-2">
                                        R
                                    </div>

                                    <div>

                                        <div class="member-name">
                                            Rohan Active Member
                                        </div>

                                        <small class="text-muted">
                                            9111111111
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>
                                    GYM-101
                                </strong>
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <strong class="text-success">
                                    06:25 AM
                                </strong>

                                <div class="small text-muted">
                                    QR Code
                                </div>

                            </td>


                            <td>

                                <strong>
                                    08:00 AM
                                </strong>

                                <div class="small text-muted">
                                    QR Code
                                </div>

                            </td>


                            <td>
                                1h 35m
                            </td>


                            <td>

                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-qr-code me-1"></i>
                                    QR Code
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="location-box">

                                    <span class="text-success">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>

                                    21.251420, 81.629700

                                    <br>

                                    <small class="text-muted">
                                        Accuracy: 6.8m
                                    </small>

                                </div>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ================================= -->
                        <!-- RECORD 2 -->
                        <!-- ================================= -->

                        <tr>

                            <td class="ps-4">
                                2
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar me-2">
                                        A
                                    </div>

                                    <div>

                                        <div class="member-name">
                                            Amit Sharma
                                        </div>

                                        <small class="text-muted">
                                            9222222222
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>
                                    GYM-102
                                </strong>
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <strong class="text-success">
                                    07:10 AM
                                </strong>

                                <div class="small text-muted">
                                    RFID
                                </div>

                            </td>


                            <td>

                                <strong>
                                    09:05 AM
                                </strong>

                                <div class="small text-muted">
                                    RFID
                                </div>

                            </td>


                            <td>
                                1h 55m
                            </td>


                            <td>

                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-credit-card me-1"></i>
                                    RFID
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="location-box">

                                    <span class="text-success">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>

                                    21.251500, 81.629800

                                    <br>

                                    <small class="text-muted">
                                        Accuracy: 8.2m
                                    </small>

                                </div>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ================================= -->
                        <!-- RECORD 3 -->
                        <!-- ================================= -->

                        <tr>

                            <td class="ps-4">
                                3
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar me-2">
                                        S
                                    </div>

                                    <div>

                                        <div class="member-name">
                                            Sumit Verma
                                        </div>

                                        <small class="text-muted">
                                            9333333333
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>
                                    GYM-103
                                </strong>
                            </td>


                            <td>
                                Raipur City Branch
                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <strong class="text-success">
                                    08:15 AM
                                </strong>

                                <div class="small text-muted">
                                    QR Code
                                </div>

                            </td>


                            <td>

                                <span class="text-muted">
                                    Not Checked Out
                                </span>

                            </td>


                            <td>
                                <span class="text-muted">
                                    2h 10m+
                                </span>
                            </td>


                            <td>

                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-qr-code me-1"></i>
                                    QR Code
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-warning text-dark">
                                    Currently Inside
                                </span>

                            </td>


                            <td>

                                <div class="location-box">

                                    <span class="text-success">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>

                                    21.251600, 81.629900

                                    <br>

                                    <small class="text-muted">
                                        Accuracy: 5.4m
                                    </small>

                                </div>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ================================= -->
                        <!-- RECORD 4 -->
                        <!-- ================================= -->

                        <tr>

                            <td class="ps-4">
                                4
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar me-2">
                                        P
                                    </div>

                                    <div>

                                        <div class="member-name">
                                            Priya Singh
                                        </div>

                                        <small class="text-muted">
                                            9444444444
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>
                                    GYM-104
                                </strong>
                            </td>


                            <td>
                                Telibandha Branch
                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <strong class="text-success">
                                    09:20 AM
                                </strong>

                                <div class="small text-muted">
                                    Biometric
                                </div>

                            </td>


                            <td>

                                <strong>
                                    11:10 AM
                                </strong>

                                <div class="small text-muted">
                                    Biometric
                                </div>

                            </td>


                            <td>
                                1h 50m
                            </td>


                            <td>

                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-fingerprint me-1"></i>
                                    Biometric
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="location-box">

                                    <span class="text-success">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>

                                    Location Verified

                                    <br>

                                    <small class="text-muted">
                                        Accuracy: 9.1m
                                    </small>

                                </div>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ================================= -->
                        <!-- RECORD 5 -->
                        <!-- ================================= -->

                        <tr>

                            <td class="ps-4">
                                5
                            </td>


                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar me-2">
                                        M
                                    </div>

                                    <div>

                                        <div class="member-name">
                                            Mohit Patel
                                        </div>

                                        <small class="text-muted">
                                            9555555555
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>
                                    GYM-105
                                </strong>
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <strong class="text-success">
                                    10:05 AM
                                </strong>

                                <div class="small text-muted">
                                    Manual
                                </div>

                            </td>


                            <td>

                                <strong>
                                    12:00 PM
                                </strong>

                                <div class="small text-muted">
                                    Manual
                                </div>

                            </td>


                            <td>
                                1h 55m
                            </td>


                            <td>

                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-person-check me-1"></i>
                                    Manual
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Completed
                                </span>

                            </td>


                            <td>

                                <div class="location-box">

                                    <span class="text-muted">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>

                                    Not Available

                                </div>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        <!-- ========================================== -->
        <!-- FOOTER / PAGINATION -->
        <!-- ========================================== -->

        <div class="card-footer bg-white border-0 py-3">

            <div class="d-flex justify-content-between align-items-center">

                <small class="text-muted">
                    Showing 1 to 5 of 42 attendance records
                </small>

                <nav>

                    <ul class="pagination mb-0">

                        <li class="page-item disabled">
                            <a
                                class="page-link"
                                href="#"
                            >
                                Previous
                            </a>
                        </li>

                        <li class="page-item active">
                            <a
                                class="page-link"
                                href="#"
                            >
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a
                                class="page-link"
                                href="#"
                            >
                                2
                            </a>
                        </li>

                        <li class="page-item">
                            <a
                                class="page-link"
                                href="#"
                            >
                                3
                            </a>
                        </li>

                        <li class="page-item">
                            <a
                                class="page-link"
                                href="#"
                            >
                                Next
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>

</body>
</html>