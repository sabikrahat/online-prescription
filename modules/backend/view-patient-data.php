<?php

include 'components/connection.php';

$patient_id = $_GET['id'];

session_start();

if (isset($_SESSION['email'])) {

    $table = "patients";
    $conn = make_connection();

    $sql = "SELECT * FROM $table where id = '$patient_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 0) {
        show_alert("Something went wrong! User data not found!", "../frontend/home.php");
        die("Something went wrong! User data not found!");
    }

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $description = $row['description'];
} else {
    show_alert("You are not logged in!", "../frontend/login.html");
}

mysqli_close($conn);