<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercise Master</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container-fluid py-4">

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="mb-0">Exercise Master</h5>
        </div>

        <div class="card-body">

            <form id="exerciseForm">

                <div class="row">

                    <!-- Exercise Name -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Exercise Name
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Enter exercise name"
                               required>

                    </div>

                    <!-- Target Muscle -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Target Muscle
                        </label>

                        <select name="target_muscle"
                                class="form-select">

                            <option value="">Select Target Muscle</option>

                            <option value="Chest">Chest</option>
                            <option value="Back">Back</option>
                            <option value="Shoulders">Shoulders</option>
                            <option value="Biceps">Biceps</option>
                            <option value="Triceps">Triceps</option>
                            <option value="Legs">Legs</option>
                            <option value="Abs">Abs</option>
                            <option value="Full Body">Full Body</option>

                        </select>

                    </div>

                    <!-- Video -->
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Video URL
                        </label>

                        <input type="url"
                               name="video_url"
                               class="form-control"
                               placeholder="https://youtube.com/...">

                    </div>

                    <!-- Instructions -->
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Instructions
                        </label>

                        <textarea name="instructions"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter exercise instructions"></textarea>

                    </div>

                </div>

                <div class="text-end">

                    <button type="reset"
                            class="btn btn-secondary">
                        Reset
                    </button>

                    <button type="submit"
                            class="btn btn-primary">
                        Save Exercise
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>