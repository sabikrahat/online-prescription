<?php
include '../backend/see-assign-medicine-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>See Assigned Medicines</title>

    <link rel="stylesheet" href="../css/authenticate.css">

</head>

<body>

    <div class="authenticate-bg">

        <!-- main body -->
        <div class="custom-center">

            <div class="col-8">
                <div class="custom-container">
                    <?php
                    if (mysqli_num_rows($result) < 0) {
                        echo "0 results";
                    } else {
                    ?>
                    <table class="table table-striped table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" colspan="2">
                                    <div class="container"
                                        style="justify-content: center; align-items: center; display: flex;">
                                        <h4>Assigned Medicine List</h4>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="container"
                                        style="justify-content: center; align-items: center; display: flex;">
                                        <button type="button" class="btn btn-outline-success"
                                            onclick="window.print()">Print
                                            Data</button>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Paitent Email</th>
                                <th scope="col">Medicine Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $row['id'] . "</th>";
                                    echo "<td>" . $row['patient'] . "</td>";
                                    echo "<td>" . $row['medicine'] . "</td>";
                                    echo "<td>" . $row['description'] . "</td>";
                                    echo " </tr>";
                                }
                                ?>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- <br>
            <button type="button" class="btn btn-primary" onclick="window.location.href='edit-profile.php'">Edit
                Profile</button> -->

        </div>
    </div>

    <!-- end of main body -->
    </div>

    <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>

</body>

</html>