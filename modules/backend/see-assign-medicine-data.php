<?php

include 'components/connection.php';

session_start();

if (isset($_SESSION['email'])) {

    $table = "assigns_tb";
    $conn = make_connection();

    $sql = "SELECT * FROM $table where created_by = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn, $sql);


    mysqli_close($conn);
} else {
    show_alert("You are not logged in!", "../frontend/login.html");
}