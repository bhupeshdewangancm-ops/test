<?php
$pageTitle = isset($_GET['id']) ? 'Edit Exercise' : 'Add Exercise';

include '../includes/header.php';
include '../includes/sidebar.php';

$isEdit = isset($_GET['id']);
?>

<div class="main-content">

    <div class="topbar">
        <div>
            <div class="topbar-title">
                <?= $isEdit ? 'Edit Exercise' : 'Add Exercise' ?>
            </div>

            <small class="text-muted">
                <?= $isEdit ? 'Update exercise details' : 'Create a new gym exercise' ?>
            </small>
        </div>

        <div class="admin-profile">

            <div class="admin-avatar">
                A
            </div>

            <div class="admin-info">
                <strong>Admin</strong>
                <small>Gym Administrator</small>
            </div>

        </div>
    </div>

    <div class="content-area">

        <!-- PAGE HEADER -->
        <div class="page-header">

            <div>
                <h2>
                    <?= $isEdit ? 'Edit Exercise' : 'Add Exercise' ?>
                </h2>

                <p>
                    <?= $isEdit
                        ? 'Update the selected exercise information.'
                        : 'Add a new exercise to your gym exercise master.'
                    ?>
                </p>
            </div>

            <a href="exercise-master.php"
               class="btn btn-outline-secondary">

                <i class="fa-solid fa-arrow-left me-1"></i>
                Back to Exercise List

            </a>

        </div>

        <!-- FORM -->
        <div class="form-section">

            <div class="form-section-header">

                <div class="form-section-icon">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>

                <div>
                    <h5>Exercise Information</h5>
                    <small>
                        Enter basic exercise details
                    </small>
                </div>

            </div>

            <form method="post"
                  action="#">

                <div class="row g-4">

                    <!-- NAME -->
                    <div class="col-lg-6">

                        <label class="form-label">
                            Exercise Name
                            <span class="required">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter exercise name"
                               value="<?= $isEdit ? 'Flat Bench Press' : '' ?>"
                               required>

                    </div>

                    <!-- TARGET MUSCLE -->
                    <div class="col-lg-6">

                        <label class="form-label">
                            Target Muscle
                            <span class="required">*</span>
                        </label>

                        <select name="target_muscle"
                                class="form-select"
                                required>

                            <option value="">
                                Select target muscle
                            </option>

                            <option
                                <?= $isEdit ? 'selected' : '' ?>>
                                Chest
                            </option>

                            <option>Back</option>
                            <option>Shoulders</option>
                            <option>Biceps</option>
                            <option>Triceps</option>
                            <option>Legs</option>
                            <option>Abs</option>
                            <option>Cardio</option>

                        </select>

                    </div>

                    <!-- VIDEO URL -->
                    <div class="col-lg-6">

                        <label class="form-label">
                            Video URL
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="fa-brands fa-youtube"></i>
                            </span>

                            <input type="url"
                                   name="video_url"
                                   class="form-control"
                                   placeholder="https://youtube.com/..."
                                   value="<?= $isEdit
                                       ? 'https://youtube.com/example1'
                                       : ''
                                   ?>">

                        </div>

                        <small class="form-help">
                            Add YouTube or other exercise video URL.
                        </small>

                    </div>

                    <!-- STATUS -->
                    <div class="col-lg-6">

                        <label class="form-label">
                            Status
                            <span class="required">*</span>
                        </label>

                        <select name="status"
                                class="form-select"
                                required>

                            <option value="active"
                                selected>
                                Active
                            </option>

                            <option value="inactive">
                                Inactive
                            </option>

                        </select>

                    </div>

                    <!-- INSTRUCTIONS -->
                    <div class="col-12">

                        <label class="form-label">
                            Instructions
                        </label>

                        <textarea name="instructions"
                                  class="form-control"
                                  rows="5"
                                  placeholder="Enter exercise instructions..."><?= $isEdit
                                      ? 'Lie on the bench and press barbell upward with controlled movement.'
                                      : ''
                                  ?></textarea>

                        <small class="form-help">
                            Explain how the member should perform this exercise.
                        </small>

                    </div>

                </div>

                <!-- FORM ACTIONS -->
                <div class="form-actions">

                    <a href="exercise-master.php"
                       class="btn btn-outline-secondary">

                        <i class="fa-solid fa-xmark me-1"></i>
                        Cancel

                    </a>

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="fa-solid fa-floppy-disk me-1"></i>

                        <?= $isEdit
                            ? 'Update Exercise'
                            : 'Save Exercise'
                        ?>

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<style>

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.page-header h2 {
    margin: 0;
    font-size: 24px;
    font-weight: 700;
}

.page-header p {
    margin: 5px 0 0;
    color: #6b7280;
}

.form-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
}

.form-section-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-bottom: 20px;
    margin-bottom: 25px;
    border-bottom: 1px solid #e5e7eb;
}

.form-section-icon {
    width: 45px;
    height: 45px;
    border-radius: 9px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-section-header h5 {
    margin: 0;
    font-size: 17px;
    font-weight: 600;
}

.form-section-header small {
    color: #6b7280;
}

.form-label {
    font-size: 13px;
    font-weight: 600;
    color: #374151;
    margin-bottom: 7px;
}

.required {
    color: #dc2626;
}

.form-control,
.form-select {
    min-height: 43px;
    border-color: #d1d5db;
    font-size: 13px;
}

.form-control:focus,
.form-select:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.1);
}

textarea.form-control {
    min-height: 130px;
    resize: vertical;
}

.input-group-text {
    background: #f8fafc;
    border-color: #d1d5db;
    color: #dc2626;
}

.form-help {
    display: block;
    color: #6b7280;
    font-size: 11px;
    margin-top: 5px;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #e5e7eb;
}

@media (max-width: 767px) {

    .page-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .form-section {
        padding: 18px;
    }

    .form-actions {
        flex-direction: column-reverse;
    }

    .form-actions .btn {
        width: 100%;
    }

}

</style>

<?php include '../includes/footer.php'; ?>