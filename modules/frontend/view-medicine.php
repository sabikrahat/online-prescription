<?php
include '../backend/view-medicine-data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>View Medicine</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->
        <div class="custom-center">
            <div class="rounded-card container square-box d-flex justify-content-center align-items-center">

                <form>
                    <div class="mb-4 text-center">
                        <h5>Medicine Info of <?php echo $title ?></h5>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputTitle" name="title" required readonly
                            value="<?php echo $title ?>">
                    </div>
                    <div class=" row mb-2">
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1">Prescribed for</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="uses"
                                required readonly><?php echo $uses ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea2">Side Effects</label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="sideeffects"
                                required readonly><?php echo $sideeffects ?></textarea>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea3">Dosage</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="dosage" required
                            readonly><?php echo $dosage ?></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea4">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea4" rows="4" name="description"
                            required readonly><?php echo $description ?></textarea>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary"
                        onclick="window.location.href='edit-medicine.php?id=<?php echo $medicine_id ?>'">Edit
                        Medicine Info
                    </button>
                </form>

            </div>
        </div>

        <!-- end of main body -->
    </div>

    <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>

</body>

</html>