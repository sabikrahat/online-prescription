<?php
include '../backend/profile-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>Update Profile</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->

        <div class="custom-center">
            <div class="rounded-card container square-box d-flex justify-content-center align-items-center">

                <form method="POST" action="../backend/update-profile.php">
                    <div class="mb-4 text-center">
                        <h5>Update your Profile Carefully </h5>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                            name="name" required value="<?php echo $name ?>">
                        <div id="nameHelp" class="form-text">Name as per your NID Card or Certificates</div>
                    </div>
                    <br>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="exampleInputDegree" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="exampleInputDegree" name="degree" required
                                value="<?php echo $degree ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputSpecialism" class="form-label">Specialism</label>
                            <input type="text" class="form-control" id="exampleInputSpecialism" name="specialism"
                                required value="<?php echo $specialism ?>">
                        </div>
                    </div>
                    <br>
                    <div class="mb-2">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                            name="email" required readonly value="<?php echo $email ?>">
                        <div id="emailHelp" class="form-text">You can't change your registered email address.</div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>

            </div>
        </div>

        <!-- end of main body -->
    </div>

    <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>

</body>

</html>