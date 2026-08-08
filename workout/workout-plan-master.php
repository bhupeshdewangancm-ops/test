<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Workout Plan Master</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container-fluid py-4">

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="mb-0">Workout Plan Master</h5>
        </div>

        <div class="card-body">

            <form id="workoutPlanForm">

                <div class="row">

                    <!-- Plan Name -->
                    <div class="col-md-5 mb-3">

                        <label class="form-label">
                            Workout Plan Name
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Example: Beginner Muscle Gain"
                               required>

                    </div>

                    <!-- Goal Type -->
                    <div class="col-md-4 mb-3">

                        <label class="form-label">
                            Goal Type
                            <span class="text-danger">*</span>
                        </label>

                        <select name="goal_type"
                                class="form-select"
                                required>

                            <option value="">Select Goal</option>

                            <option value="general">General</option>
                            <option value="weight_loss">Weight Loss</option>
                            <option value="muscle_gain">Muscle Gain</option>
                            <option value="strength">Strength</option>
                            <option value="endurance">Endurance</option>
                            <option value="bodybuilding">Bodybuilding</option>
                            <option value="cardio">Cardio</option>
                            <option value="maintenance">Maintenance</option>

                        </select>

                    </div>

                    <!-- Status -->
                    <div class="col-md-3 mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select name="is_active"
                                class="form-select">

                            <option value="1">Active</option>
                            <option value="0">Inactive</option>

                        </select>

                    </div>

                </div>

                <div class="text-end">

                    <button type="reset"
                            class="btn btn-secondary">
                        Reset
                    </button>

                    <button type="submit"
                            class="btn btn-primary">
                        Save Workout Plan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>