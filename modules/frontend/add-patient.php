<?php
include '../backend/profile_data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>Add Patient</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->
        <div class="custom-center">
            <div class="rounded-card container square-box d-flex justify-content-center align-items-center">

                <form>
                    <div class="mb-4 text-center">
                        <h5>User Profile of "<?php echo $name ?>" </h5>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input type="name" class="form-control" id="exampleInputName" name="name" required readonly
                            value="<?php echo $name; ?>">
                    </div>
                    <br>
                    <div class=" row mb-2">
                        <div class="col-md-6">
                            <label for="exampleInputDegree" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="exampleInputDegree" name="degree" required
                                readonly value="<?php echo $degree ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputSpecialism" class="form-label">Specialism</label>
                            <input type="text" class="form-control" id="exampleInputSpecialism" name="specialism"
                                required readonly value="<?php echo $specialism ?>">
                        </div>
                    </div>
                    <br>
                    <div class="mb-2">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="email" required readonly
                            value="<?php echo $email ?>">
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='edit_profile.php'">Edit
                        Profile</button>
                </form>

            </div>
        </div>

        <!-- end of main body -->
    </div>

    <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>

</body>

</html>