<?php

include 'components/connection.php';

session_start();

if (isset($_SESSION['email'])) {

    $table = "users";
    $conn = make_connection();

    $sql = "SELECT * FROM $table where email = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 0) {
        show_alert("Something went wrong! User data not found!", "../frontend/home.php");
        die("Something went wrong! User data not found!");
    }
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $degree = $row['degree'];
    $specialism = $row['specialism'];
    $email = $row['email'];
    $password = $row['password'];


    mysqli_close($conn);
} else {
    show_alert("You are not logged in!", "../frontend/login.html");
}