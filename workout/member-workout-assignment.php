<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Member Workout Assignment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container-fluid py-4">

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">

            <h5 class="mb-0">
                Member Workout Assignment
            </h5>

        </div>

        <div class="card-body">

            <form id="memberWorkoutForm">

                <div class="row">

                    <!-- Member -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Member
                            <span class="text-danger">*</span>
                        </label>

                        <select name="member_id"
                                class="form-select"
                                required>

                            <option value="">
                                Select Member
                            </option>

                            <!-- members API -->

                            <option value="1">
                                Arjun Rathore
                            </option>

                            <option value="2">
                                Rahul Sharma
                            </option>

                        </select>

                    </div>


                    <!-- Workout Plan -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Workout Plan
                            <span class="text-danger">*</span>
                        </label>

                        <select name="workout_plan_id"
                                class="form-select"
                                required>

                            <option value="">
                                Select Workout Plan
                            </option>

                            <!-- workout_plans API -->

                            <option value="1">
                                Beginner Weight Loss Plan
                            </option>

                            <option value="2">
                                Beginner Muscle Gain Plan
                            </option>

                            <option value="3">
                                Regular Gym Workout
                            </option>

                        </select>

                    </div>


                    <!-- Trainer -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Trainer
                        </label>

                        <select name="trainer_id"
                                class="form-select">

                            <option value="">
                                Select Trainer
                            </option>

                            <!-- gym_users trainer -->

                            <option value="4">
                                Amit Sharma
                            </option>

                            <option value="7">
                                Raj Verma
                            </option>

                        </select>

                    </div>


                    <!-- Status -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select name="status"
                                class="form-select">

                            <option value="active">
                                Active
                            </option>

                            <option value="completed">
                                Completed
                            </option>

                            <option value="cancelled">
                                Cancelled
                            </option>

                        </select>

                    </div>


                    <!-- Start Date -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Start Date
                            <span class="text-danger">*</span>
                        </label>

                        <input type="date"
                               name="start_date"
                               class="form-control"
                               required>

                    </div>


                    <!-- End Date -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            End Date
                        </label>

                        <input type="date"
                               name="end_date"
                               class="form-control">

                    </div>


                    <!-- Notes -->

                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Notes
                        </label>

                        <textarea name="notes"
                                  class="form-control"
                                  rows="3"
                                  placeholder="Enter notes"></textarea>

                    </div>

                </div>


                <div class="text-end">

                    <button type="reset"
                            class="btn btn-secondary">

                        Reset

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        Assign Workout Plan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>