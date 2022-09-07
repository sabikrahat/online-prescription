<?php
include '../backend/view-patient-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>Edit Patient</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->
        <div class="custom-center">
            <div class="rounded-card container square-box d-flex justify-content-center align-items-center">

                <form method="POST" action="../backend/update-patient.php?id=<?php echo $_GET['id'] ?>">
                    <div class=" mb-4 text-center">
                        <h5>Patient Information of <?php echo $name ?></h5>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input type="name" class="form-control" id="exampleInputName" name="name" required
                            value="<?php echo $name ?>">
                    </div>
                    <br>
                    <div class=" row mb-2">
                        <div class="col-md-6">
                            <label for="exampleInputEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email" required
                                value="<?php echo $email ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPhone" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="exampleInputPhone" name="phone" required
                                value="<?php echo $phone ?>">
                        </div>
                    </div>
                    <br>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"
                            required><?php echo $description ?></textarea>
                    </div>
                    <br>
                    <div class="row justify-content-evenly">
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary">Update Patient Info
                            </button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-danger"
                                onclick="window.location.href='../backend/delete-patient.php?id=<?php echo $_GET['id'] ?>'">Delete
                                Patient
                                Info</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- end of main body -->
    </div>

    <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>

</body>

</html>