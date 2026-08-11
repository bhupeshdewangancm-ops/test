<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Members</title>

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

        .card-header {
            border-radius: 12px 12px 0 0 !important;
        }

        .avatar {
            width: 42px;
            height: 42px;
            min-width: 42px;
            border-radius: 50%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
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

        .member-name {
            font-weight: 600;
        }

        .filter-label {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .days-left {
            font-weight: 600;
        }

        .bulk-action-bar {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 10px 14px;
        }

        .selected-count {
            font-weight: 600;
        }

        .whatsapp-btn {
            background: #198754;
            border-color: #198754;
            color: #fff;
        }

        .whatsapp-btn:hover {
            background: #157347;
            border-color: #146c43;
            color: #fff;
        }

        .message-preview {
            background: #e9f7ef;
            border: 1px solid #cfe8d8;
            border-radius: 10px;
            padding: 15px;
            white-space: pre-line;
            min-height: 120px;
        }

        .selected-member-list {
            max-height: 180px;
            overflow-y: auto;
        }

        .member-selection-item {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
        }

        .member-selection-item:last-child {
            border-bottom: none;
        }

        .modal-content {
            border: none;
            border-radius: 14px;
        }

        .modal-header {
            border-bottom: 1px solid #eee;
        }

        .modal-footer {
            border-top: 1px solid #eee;
        }

        .form-check-input {
            cursor: pointer;
        }

        .table tbody tr.selected-row {
            background-color: #f0f8ff;
        }
    </style>
</head>

<body>

<div class="container-fluid p-4">

    <!-- ============================= -->
    <!-- PAGE HEADER -->
    <!-- ============================= -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="page-title mb-1">
                Members
            </h4>

            <p class="text-muted mb-0">
                Manage all gym members
            </p>
        </div>

        <button
            type="button"
            class="btn btn-primary"
        >
            <i class="bi bi-plus-lg me-1"></i>
            Add Member
        </button>

    </div>


    <!-- ============================= -->
    <!-- FILTER CARD -->
    <!-- ============================= -->

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            <div class="row g-3 align-items-end">

                <!-- SEARCH -->

                <div class="col-md-3">

                    <label class="filter-label">
                        Search Member
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Name, phone or member code"
                    >

                </div>


                <!-- BRANCH -->

                <div class="col-md-2">

                    <label class="filter-label">
                        Branch
                    </label>

                    <select class="form-select">

                        <option value="">
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


                <!-- STATUS -->

                <div class="col-md-2">

                    <label class="filter-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option value="">
                            All Status
                        </option>

                        <option>
                            Active
                        </option>

                        <option>
                            Inactive
                        </option>

                    </select>

                </div>


                <!-- MEMBERSHIP -->

                <div class="col-md-2">

                    <label class="filter-label">
                        Membership
                    </label>

                    <select class="form-select">

                        <option value="">
                            All Membership
                        </option>

                        <option>
                            Active
                        </option>

                        <option>
                            Expired
                        </option>

                        <option>
                            Expiring Soon
                        </option>

                        <option>
                            No Membership
                        </option>

                    </select>

                </div>


                <!-- BUTTONS -->

                <div class="col-md-3">

                    <button
                        type="button"
                        class="btn btn-primary me-2"
                    >
                        <i class="bi bi-search me-1"></i>
                        Search
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


    <!-- ============================= -->
    <!-- MEMBER LIST CARD -->
    <!-- ============================= -->

    <div class="card shadow-sm">

        <!-- CARD HEADER -->

        <div class="card-header bg-white border-0 py-3">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="mb-1">
                        Member List
                    </h5>

                    <small class="text-muted">
                        All registered members
                    </small>

                </div>

                <span class="badge bg-primary">
                    25 Members
                </span>

            </div>


            <!-- ============================= -->
            <!-- BULK ACTION BAR -->
            <!-- ============================= -->

            <div class="bulk-action-bar mt-3">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex align-items-center gap-3">

                        <div class="form-check mb-0">

                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="selectAllMembers"
                            >

                            <label
                                class="form-check-label"
                                for="selectAllMembers"
                            >
                                Select All
                            </label>

                        </div>

                        <div class="text-muted small">

                            <span
                                id="selectedCount"
                                class="selected-count"
                            >
                                0
                            </span>

                            members selected

                        </div>

                    </div>


                    <button
                        type="button"
                        class="btn whatsapp-btn"
                        id="openWhatsappButton"
                        disabled
                        data-bs-toggle="modal"
                        data-bs-target="#whatsappModal"
                    >

                        <i class="bi bi-whatsapp me-1"></i>

                        Send WhatsApp

                    </button>

                </div>

            </div>

        </div>


        <!-- ============================= -->
        <!-- TABLE -->
        <!-- ============================= -->

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
                                Phone
                            </th>

                            <th>
                                Branch
                            </th>

                            <th>
                                Membership
                            </th>

                            <th>
                                Start Date
                            </th>

                            <th>
                                Expiry Date
                            </th>

                            <th>
                                Days Left
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="text-center pe-4">
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- ============================= -->
                        <!-- MEMBER 1 -->
                        <!-- ============================= -->

                        <tr data-member-id="1">

                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-2">

                                    <input
                                        type="checkbox"
                                        class="form-check-input member-checkbox"
                                        value="1"
                                        data-name="Rohan Active Member"
                                        data-phone="9111111111"
                                    >

                                    <span>
                                        1
                                    </span>

                                </div>

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
                                            rohan@gmail.com
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>GYM-101</strong>
                            </td>


                            <td>
                                9111111111
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>
                                <strong>
                                    Monthly Cardio + Weights
                                </strong>
                            </td>


                            <td>
                                07 Aug 2026
                            </td>


                            <td>
                                <strong>
                                    06 Sep 2026
                                </strong>
                            </td>


                            <td>

                                <span class="badge bg-success days-left">
                                    27 Days Left
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Active
                                </span>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-warning action-btn"
                                    title="Edit"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info action-btn"
                                    title="Attendance"
                                >
                                    <i class="bi bi-calendar-check"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger action-btn"
                                    title="Delete"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ============================= -->
                        <!-- MEMBER 2 -->
                        <!-- ============================= -->

                        <tr data-member-id="2">

                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-2">

                                    <input
                                        type="checkbox"
                                        class="form-check-input member-checkbox"
                                        value="2"
                                        data-name="Amit Sharma"
                                        data-phone="9222222222"
                                    >

                                    <span>
                                        2
                                    </span>

                                </div>

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
                                            amit@gmail.com
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>GYM-102</strong>
                            </td>


                            <td>
                                9222222222
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>
                                <strong>
                                    Premium Membership
                                </strong>
                            </td>


                            <td>
                                28 Jun 2026
                            </td>


                            <td>
                                <strong>
                                    28 Jul 2026
                                </strong>
                            </td>


                            <td>

                                <span class="badge bg-danger days-left">
                                    Expired 13 Days Ago
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-danger">
                                    Expired
                                </span>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-warning action-btn"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info action-btn"
                                >
                                    <i class="bi bi-calendar-check"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger action-btn"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ============================= -->
                        <!-- MEMBER 3 -->
                        <!-- ============================= -->

                        <tr data-member-id="3">

                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-2">

                                    <input
                                        type="checkbox"
                                        class="form-check-input member-checkbox"
                                        value="3"
                                        data-name="Sumit Verma"
                                        data-phone="9333333333"
                                    >

                                    <span>
                                        3
                                    </span>

                                </div>

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
                                            sumit@gmail.com
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>GYM-103</strong>
                            </td>


                            <td>
                                9333333333
                            </td>


                            <td>
                                Raipur City Branch
                            </td>


                            <td>
                                <strong>
                                    Annual Fitness Plan
                                </strong>
                            </td>


                            <td>
                                15 Aug 2026
                            </td>


                            <td>
                                <strong>
                                    15 Aug 2027
                                </strong>
                            </td>


                            <td>

                                <span class="badge bg-success days-left">
                                    370 Days Left
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Active
                                </span>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-warning action-btn"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info action-btn"
                                >
                                    <i class="bi bi-calendar-check"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger action-btn"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ============================= -->
                        <!-- MEMBER 4 -->
                        <!-- ============================= -->

                        <tr data-member-id="4">

                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-2">

                                    <input
                                        type="checkbox"
                                        class="form-check-input member-checkbox"
                                        value="4"
                                        data-name="Priya Singh"
                                        data-phone="9444444444"
                                    >

                                    <span>
                                        4
                                    </span>

                                </div>

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
                                            priya@gmail.com
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>GYM-104</strong>
                            </td>


                            <td>
                                9444444444
                            </td>


                            <td>
                                Telibandha Branch
                            </td>


                            <td>
                                <strong>
                                    Monthly Fitness Plan
                                </strong>
                            </td>


                            <td>
                                12 Jul 2026
                            </td>


                            <td>
                                <strong>
                                    12 Aug 2026
                                </strong>
                            </td>


                            <td>

                                <span class="badge bg-warning text-dark days-left">
                                    2 Days Left
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-warning text-dark">
                                    Expiring Soon
                                </span>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-warning action-btn"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info action-btn"
                                >
                                    <i class="bi bi-calendar-check"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger action-btn"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>


                        <!-- ============================= -->
                        <!-- MEMBER 5 -->
                        <!-- ============================= -->

                        <tr data-member-id="5">

                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-2">

                                    <input
                                        type="checkbox"
                                        class="form-check-input member-checkbox"
                                        value="5"
                                        data-name="Mohit Patel"
                                        data-phone="9555555555"
                                    >

                                    <span>
                                        5
                                    </span>

                                </div>

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
                                            mohit@gmail.com
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <strong>GYM-105</strong>
                            </td>


                            <td>
                                9555555555
                            </td>


                            <td>
                                Raipur Main Branch
                            </td>


                            <td>

                                <span class="badge bg-secondary">
                                    No Membership
                                </span>

                            </td>


                            <td>
                                -
                            </td>


                            <td>
                                -
                            </td>


                            <td>

                                <span class="badge bg-secondary">
                                    No Plan
                                </span>

                            </td>


                            <td>

                                <span class="badge bg-secondary">
                                    Inactive
                                </span>

                            </td>


                            <td class="text-center pe-4">

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary action-btn"
                                >
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-warning action-btn"
                                >
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-info action-btn"
                                >
                                    <i class="bi bi-calendar-check"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger action-btn"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        <!-- ============================= -->
        <!-- PAGINATION -->
        <!-- ============================= -->

        <div class="card-footer bg-white border-0 py-3">

            <div class="d-flex justify-content-between align-items-center">

                <small class="text-muted">
                    Showing 1 to 5 of 25 members
                </small>

                <nav>

                    <ul class="pagination mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Previous
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                2
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                3
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                Next
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- WHATSAPP MESSAGE MODAL -->
<!-- ================================================= -->

<div
    class="modal fade"
    id="whatsappModal"
    tabindex="-1"
    aria-labelledby="whatsappModalLabel"
    aria-hidden="true"
>

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content">

            <!-- MODAL HEADER -->

            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="whatsappModalLabel"
                >

                    <i class="bi bi-whatsapp text-success me-2"></i>

                    Send WhatsApp Message

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>

            </div>


            <!-- MODAL BODY -->

            <div class="modal-body">


                <!-- SELECTED MEMBERS -->

                <div class="alert alert-light border">

                    <div class="d-flex justify-content-between align-items-center mb-2">

                        <div>

                            <strong>
                                Selected Members
                            </strong>

                            <div class="text-muted small">
                                Members who will receive this message
                            </div>

                        </div>

                        <span
                            class="badge bg-success"
                            id="modalSelectedCount"
                        >
                            0 Members
                        </span>

                    </div>


                    <div
                        class="selected-member-list"
                        id="selectedMemberList"
                    >

                        <div class="text-muted small">
                            No members selected.
                        </div>

                    </div>

                </div>


                <!-- MESSAGE TYPE -->

                <div class="mb-3">

                    <label
                        for="messageType"
                        class="form-label fw-semibold"
                    >
                        Message Type
                    </label>

                    <select
                        class="form-select"
                        id="messageType"
                    >

                        <option value="">
                            Select Message Type
                        </option>

                        <option value="fee_reminder">
                            Fee Reminder
                        </option>

                        <option value="expiry_reminder">
                            Membership Expiry Reminder
                        </option>

                        <option value="payment_reminder">
                            Payment Due Reminder
                        </option>

                        <option value="welcome">
                            Welcome Message
                        </option>

                        <option value="general">
                            General Message
                        </option>

                        <option value="custom">
                            Custom Message
                        </option>

                    </select>

                </div>


                <!-- MESSAGE -->

                <div class="mb-3">

                    <label
                        for="whatsappMessage"
                        class="form-label fw-semibold"
                    >
                        Message
                    </label>

                    <textarea
                        id="whatsappMessage"
                        class="form-control"
                        rows="7"
                        placeholder="Write your WhatsApp message..."
                    ></textarea>

                    <div class="text-muted small mt-1">
                        You can edit the message before sending.
                    </div>

                </div>


                <!-- MESSAGE PREVIEW -->

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Message Preview
                    </label>

                    <div
                        class="message-preview"
                        id="messagePreview"
                    >
                        Your message preview will appear here.
                    </div>

                </div>

            </div>


            <!-- MODAL FOOTER -->

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-light border"
                    data-bs-dismiss="modal"
                >
                    Cancel
                </button>

                <button
                    type="button"
                    class="btn whatsapp-btn"
                    id="sendWhatsappButton"
                >

                    <i class="bi bi-whatsapp me-1"></i>

                    Send WhatsApp Message

                </button>

            </div>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- BOOTSTRAP JS -->
<!-- ================================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- ================================================= -->
<!-- CUSTOM JS -->
<!-- ================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const selectAllMembers =
        document.getElementById('selectAllMembers');

    const memberCheckboxes =
        document.querySelectorAll('.member-checkbox');

    const selectedCount =
        document.getElementById('selectedCount');

    const modalSelectedCount =
        document.getElementById('modalSelectedCount');

    const openWhatsappButton =
        document.getElementById('openWhatsappButton');

    const selectedMemberList =
        document.getElementById('selectedMemberList');

    const messageType =
        document.getElementById('messageType');

    const whatsappMessage =
        document.getElementById('whatsappMessage');

    const messagePreview =
        document.getElementById('messagePreview');

    const sendWhatsappButton =
        document.getElementById('sendWhatsappButton');


    /*
    |--------------------------------------------------------------------------
    | Get Selected Members
    |--------------------------------------------------------------------------
    */

    function getSelectedMembers() {

        return Array.from(
            document.querySelectorAll(
                '.member-checkbox:checked'
            )
        );

    }


    /*
    |--------------------------------------------------------------------------
    | Update Selection
    |--------------------------------------------------------------------------
    */

    function updateSelection() {

        const selectedMembers =
            getSelectedMembers();

        const count =
            selectedMembers.length;


        selectedCount.textContent =
            count;


        modalSelectedCount.textContent =
            count +
            (count === 1 ? ' Member' : ' Members');


        openWhatsappButton.disabled =
            count === 0;


        /*
        |--------------------------------------------------------------------------
        | Select All State
        |--------------------------------------------------------------------------
        */

        if (
            count === memberCheckboxes.length &&
            memberCheckboxes.length > 0
        ) {

            selectAllMembers.checked = true;

            selectAllMembers.indeterminate = false;

        } else if (count > 0) {

            selectAllMembers.checked = false;

            selectAllMembers.indeterminate = true;

        } else {

            selectAllMembers.checked = false;

            selectAllMembers.indeterminate = false;

        }


        /*
        |--------------------------------------------------------------------------
        | Highlight Selected Rows
        |--------------------------------------------------------------------------
        */

        document
            .querySelectorAll('tbody tr')
            .forEach(function (row) {

                const checkbox =
                    row.querySelector('.member-checkbox');

                if (checkbox && checkbox.checked) {

                    row.classList.add('selected-row');

                } else {

                    row.classList.remove('selected-row');

                }

            });

    }


    /*
    |--------------------------------------------------------------------------
    | Select All
    |--------------------------------------------------------------------------
    */

    selectAllMembers.addEventListener(
        'change',
        function () {

            memberCheckboxes.forEach(
                function (checkbox) {

                    checkbox.checked =
                        selectAllMembers.checked;

                }
            );

            updateSelection();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Individual Checkbox
    |--------------------------------------------------------------------------
    */

    memberCheckboxes.forEach(
        function (checkbox) {

            checkbox.addEventListener(
                'change',
                function () {

                    updateSelection();

                }
            );

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Update Selected Member List In Modal
    |--------------------------------------------------------------------------
    */

    function updateSelectedMemberList() {

        const selectedMembers =
            getSelectedMembers();


        if (selectedMembers.length === 0) {

            selectedMemberList.innerHTML = `
                <div class="text-muted small">
                    No members selected.
                </div>
            `;

            return;

        }


        let html = '';


        selectedMembers.forEach(
            function (checkbox) {

                const name =
                    checkbox.dataset.name;

                const phone =
                    checkbox.dataset.phone;


                html += `
                    <div class="member-selection-item">
                        <div class="d-flex justify-content-between align-items-center">

                            <div>
                                <strong>${name}</strong>

                                <div class="text-muted small">
                                    ${phone}
                                </div>
                            </div>

                            <i class="bi bi-check-circle-fill text-success"></i>

                        </div>
                    </div>
                `;

            }
        );


        selectedMemberList.innerHTML =
            html;

    }


    /*
    |--------------------------------------------------------------------------
    | Open WhatsApp Modal
    |--------------------------------------------------------------------------
    */

    openWhatsappButton.addEventListener(
        'click',
        function () {

            updateSelectedMemberList();

            updateMessagePreview();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Message Templates
    |--------------------------------------------------------------------------
    */

    function getMessageTemplate(type) {

        const selectedMembers =
            getSelectedMembers();


        let firstName =
            'Member';


        if (selectedMembers.length > 0) {

            firstName =
                selectedMembers[0].dataset.name;

        }


        switch (type) {

            case 'fee_reminder':

                return `Hello ${firstName},

This is a friendly reminder that your gym membership fee is due.

Please make the payment at your earliest convenience.

Thank you,
Seba24 Fitness Club`;


            case 'expiry_reminder':

                return `Hello ${firstName},

Your gym membership is going to expire soon.

Please renew your membership to continue your workout without interruption.

Thank you,
Seba24 Fitness Club`;


            case 'payment_reminder':

                return `Hello ${firstName},

This is a reminder regarding your pending gym payment.

Please contact the gym reception for payment details.

Thank you,
Seba24 Fitness Club`;


            case 'welcome':

                return `Welcome to Seba24 Fitness Club, ${firstName}!

We are happy to have you as our member.

Have a great workout!`;


            case 'general':

                return `Hello ${firstName},

We have an important update from Seba24 Fitness Club.

Thank you.`;


            case 'custom':

                return '';


            default:

                return '';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Update Message Preview
    |--------------------------------------------------------------------------
    */

    function updateMessagePreview() {

        messagePreview.textContent =
            whatsappMessage.value ||
            'Your message preview will appear here.';

    }


    /*
    |--------------------------------------------------------------------------
    | Message Type Change
    |--------------------------------------------------------------------------
    */

    messageType.addEventListener(
        'change',
        function () {

            const template =
                getMessageTemplate(
                    messageType.value
                );


            whatsappMessage.value =
                template;


            updateMessagePreview();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Message Typing
    |--------------------------------------------------------------------------
    */

    whatsappMessage.addEventListener(
        'input',
        function () {

            updateMessagePreview();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Send WhatsApp Button
    |--------------------------------------------------------------------------
    */

    sendWhatsappButton.addEventListener(
        'click',
        function () {

            const selectedMembers =
                getSelectedMembers();


            if (selectedMembers.length === 0) {

                alert(
                    'Please select at least one member.'
                );

                return;

            }


            const message =
                whatsappMessage.value.trim();


            if (!message) {

                alert(
                    'Please enter a message.'
                );

                whatsappMessage.focus();

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | Static UI
            |--------------------------------------------------------------------------
            |
            | Later API call will come here.
            |
            */

            alert(
                selectedMembers.length +
                ' member(s) selected.\n\n' +
                'WhatsApp message is ready to send.'
            );

        }
    );


    /*
    |--------------------------------------------------------------------------
    | Initial State
    |--------------------------------------------------------------------------
    */

    updateSelection();

});

</script>

</body>
</html>