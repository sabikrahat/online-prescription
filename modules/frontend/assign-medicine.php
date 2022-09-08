<?php
include '../backend/assign-medicine-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Title -->
    <title>Assign Medicine</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->

        <div class="custom-center">
            <div class="rounded-card container square-box d-flex justify-content-center align-items-center">

                <form method="POST" action="../backend/assign-medicine-backend.php">
                    <div class="mb-4 text-center">
                        <h5>Assign Medicine Carefully </h5>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName" class="form-label">Patient</label>
                        <select class="form-select" aria-label="Default select example" id="exampleInputName"
                            aria-describedby="nameHelp" required name="patient">
                            <option selected disabled>Open this to select patient</option>
                            <?php
                            if (mysqli_num_rows($res_patient) < 0) {
                                echo "0 results";
                            } else {
                                while ($row = mysqli_fetch_assoc($res_patient)) {
                                    echo "<option value='" . $row['email'] . "'>" . $row['name'] . ' (' . $row['email'] . ')' . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <div id="nameHelp" class="form-text">Select patient whom you want to prescribed medicine</div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName1" class="form-label">Medicine</label>
                        <select class="form-select" aria-label="Default select example" id="exampleInputName1"
                            aria-describedby="nameHelp" required name="medicine">
                            <option selected disabled>Open this to select medicine</option>
                            <?php
                            if (mysqli_num_rows($res_medicine) < 0) {
                                echo "0 results";
                            } else {
                                while ($row = mysqli_fetch_assoc($res_medicine)) {
                                    echo "<option value='" . $row['title'] . "'>" . $row['title'] . ' (' . $row['dosage'] . ')' . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <div id="nameHelp" class="form-text">Select medicine which you want to prescribed to that
                            patient</div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea4">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea4" rows="4" name="description"
                            required></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </form>

            </div>
        </div>

        <!-- end of main body -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>