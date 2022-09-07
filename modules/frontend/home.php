<?php
include '../backend/home-data.php';
?>

<script>
function patientDescription(x) {
    window.location.href = "../frontend/view-patient.php?id=" + x.rowIndex;
}

function medicineDescription(x) {
    window.location.href = "../frontend/view-medicine.php?id=" + x.rowIndex;
}
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- Title -->
    <title>Online Prescription</title>

    <link rel="icon" type="image/x-icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../frontend/home.php">
                <img src="../assets/icon.png
                " height="30px" width="30px" class="d-inline-block align-top" alt="online prescription" />
                <b>&ensp;Online Prescription</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-patient.html">Add Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-medicine.html">Add Medicine</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Add Record
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="add-patient.html">Add Patient</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="add-medicine.html">Add Medicine</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="assign-medicine.php">Assign Medicine</a>
                    </li>
                </ul>
                <form method="POST" action="../backend/logout.php">
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center ">
        <div class="row m-10">
            <div class="col-12">

                <!-- main body -->

                <!-- carousel -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/slider-1.png" class="d-block w-100" alt="online prescription">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/slider-2.png" class="d-block w-100" alt="online prescription">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/slider-3.png" class="d-block w-100" alt="online prescription">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br>
                <br>
                <h2 class="text-center">Online Prescription</h2>
                <p class="text-center" style="font-size: 20px;">Making Patient Care Effective & Efficient</p><br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="custom-container">
                            <div class="container text-center">
                                Patients
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="custom-container">
                            <div class="container text-center">
                                Medicines
                            </div>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-6">
                        <div class="custom-container">
                            <?php
                            if (mysqli_num_rows($result_patients) < 0) {
                                echo "0 results";
                            } else {
                            ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr style=' padding-left: 2px; padding-right: 2px;'>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>#</th>
                                        <th scope="col" style='overflow:hidden; white-space:nowrap;'>
                                            Name</th>
                                        <th scope="col" style='overflow:hidden; white-space:nowrap'>Email</th>
                                        <th scope="col" style='overflow:hidden; white-space:nowrap'>Phone</th>
                                        <th scope="col" style='overflow:hidden; white-space:nowrap'>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result_patients)) {
                                            echo "<tr style='padding-left: 2px; padding-right: 2px;' onclick='patientDescription(this)'>";
                                            echo "<th scope='row' style='overflow:hidden; white-space:nowrap'>" . $row['id'] . "</th>";
                                            echo "<td style='overflow:hidden; white-space:nowrap; cursor: pointer;'>" . $row['name'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['email'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['phone'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['description'] . "</td>";
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
                    <div class="col-6">
                        <div class="custom-container">
                            <?php
                            if (mysqli_num_rows($result_medicines) < 0) {
                                echo "0 results";
                            } else {
                            ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr padding-left: 2px; padding-right: 2px;>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>#</th>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>Title</th>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>Prescribed for</th>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>Side Effects</th>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>Dosage</th>
                                        <th scope="col" style=' overflow:hidden; white-space:nowrap'>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result_medicines)) {
                                            echo "<tr style='padding-left: 2px; padding-right: 2px;' onclick='medicineDescription(this)'>";
                                            echo "<th scope='row' style='overflow:hidden; white-space:nowrap'>" . $row['id'] . "</th>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['title'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['uses'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['sideeffects'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['dosage'] . "</td>";
                                            echo "<td style='overflow:hidden; white-space:nowrap'>" . $row['description'] . "</td>";
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
                </div>
                <!-- end of main body -->

            </div>
        </div>
    </div>

    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../bootstrap/js/others/jquery-3.5.1.slim.min.js"></script>
    <script src="../../bootstrap/js/others/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>