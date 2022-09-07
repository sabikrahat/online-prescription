<?php

include 'components/connection.php';

session_start();

if (isset($_SESSION['email'])) {

    $tb_patients = "patients";
    $tb_medicines = "medicines";
    $conn = make_connection();

    $sql_patients = "SELECT * FROM $tb_patients where created_by = '" . $_SESSION['email'] . "'";
    $result_patients = mysqli_query($conn, $sql_patients);

    $sql_medicines = "SELECT * FROM $tb_medicines where created_by = '" . $_SESSION['email'] . "'";
    $result_medicines = mysqli_query($conn, $sql_medicines);

    mysqli_close($conn);
} else {
    show_alert("You are not logged in!", "../frontend/login.html");
}