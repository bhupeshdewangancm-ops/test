<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Workout Plan Exercises</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container-fluid py-4">

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">

            <h5 class="mb-0">
                Workout Plan Exercises
            </h5>

        </div>

        <div class="card-body">

            <form id="planExerciseForm">

                <!-- Workout Plan -->

                <div class="row mb-4">

                    <div class="col-md-6">

                        <label class="form-label">
                            Workout Plan
                            <span class="text-danger">*</span>
                        </label>

                        <select name="workout_plan_id"
                                id="workout_plan_id"
                                class="form-select"
                                required>

                            <option value="">
                                Select Workout Plan
                            </option>

                            <!-- API se workout_plans aayenge -->

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

                </div>


                <!-- Exercise Table -->

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead class="table-light">

                        <tr>

                            <th style="min-width:150px;">
                                Day
                            </th>

                            <th style="min-width:220px;">
                                Exercise
                            </th>

                            <th width="100">
                                Sets
                            </th>

                            <th width="100">
                                Reps
                            </th>

                            <th width="130">
                                Rest (Sec)
                            </th>

                            <th width="100">
                                Order
                            </th>

                            <th style="min-width:200px;">
                                Notes
                            </th>

                            <th width="70">
                                Action
                            </th>

                        </tr>

                        </thead>


                        <tbody id="exerciseRows">

                        <tr>

                            <!-- Day -->

                            <td>

                                <select name="day_of_week[]"
                                        class="form-select"
                                        required>

                                    <option value="">Select Day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>

                                </select>

                            </td>


                            <!-- Exercise -->

                            <td>

                                <select name="exercise_id[]"
                                        class="form-select"
                                        required>

                                    <option value="">
                                        Select Exercise
                                    </option>

                                    <!-- API se exercises master -->

                                    <option value="5">
                                        Flat Bench Press
                                    </option>

                                    <option value="6">
                                        Incline Dumbbell Press
                                    </option>

                                    <option value="7">
                                        Barbell Squat
                                    </option>

                                    <option value="8">
                                        Lat Pulldown
                                    </option>

                                </select>

                            </td>


                            <!-- Sets -->

                            <td>

                                <input type="number"
                                       name="sets[]"
                                       class="form-control"
                                       min="1"
                                       value="3">

                            </td>


                            <!-- Reps -->

                            <td>

                                <input type="number"
                                       name="reps[]"
                                       class="form-control"
                                       min="1"
                                       value="10">

                            </td>


                            <!-- Rest -->

                            <td>

                                <input type="number"
                                       name="rest_time_seconds[]"
                                       class="form-control"
                                       min="0"
                                       value="60">

                            </td>


                            <!-- Order -->

                            <td>

                                <input type="number"
                                       name="sort_order[]"
                                       class="form-control"
                                       min="1"
                                       value="1">

                            </td>


                            <!-- Notes -->

                            <td>

                                <input type="text"
                                       name="notes[]"
                                       class="form-control"
                                       placeholder="Optional">

                            </td>


                            <!-- Delete -->

                            <td class="text-center">

                                <button type="button"
                                        class="btn btn-danger btn-sm removeRow">

                                    Delete

                                </button>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>


                <div class="d-flex justify-content-between mt-3">

                    <button type="button"
                            id="addExercise"
                            class="btn btn-outline-primary">

                        + Add Exercise

                    </button>


                    <button type="submit"
                            class="btn btn-primary">

                        Save Plan Exercises

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<script>

document.getElementById('addExercise')
    .addEventListener('click', function () {

        const tbody =
            document.getElementById('exerciseRows');

        const firstRow =
            tbody.querySelector('tr');

        const newRow =
            firstRow.cloneNode(true);

        // Reset values

        newRow.querySelectorAll('select')
            .forEach(function (select) {

                select.selectedIndex = 0;

            });

        newRow.querySelectorAll('input')
            .forEach(function (input) {

                if (input.name === 'sets[]') {
                    input.value = 3;
                }

                else if (input.name === 'reps[]') {
                    input.value = 10;
                }

                else if (
                    input.name === 'rest_time_seconds[]'
                ) {
                    input.value = 60;
                }

                else if (
                    input.name === 'sort_order[]'
                ) {

                    input.value =
                        tbody.querySelectorAll('tr').length + 1;

                }

                else {
                    input.value = '';
                }

            });

        tbody.appendChild(newRow);

    });


document.addEventListener('click', function (event) {

    if (
        event.target.classList.contains('removeRow')
    ) {

        const tbody =
            document.getElementById('exerciseRows');

        const rows =
            tbody.querySelectorAll('tr');

        if (rows.length > 1) {

            event.target
                .closest('tr')
                .remove();

        } else {

            alert(
                'At least one exercise row is required.'
            );

        }

    }

});

</script>

</body>
</html>