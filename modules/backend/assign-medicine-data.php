<?php

include 'components/connection.php';

session_start();

if (isset($_SESSION['email'])) {

    $tb_patient = "patients";
    $tb_medicine = "medicines";
    $conn = make_connection();

    $sql_p = "SELECT * FROM $tb_patient";
    $sql_m = "SELECT * FROM $tb_medicine";
    
    $res_patient = mysqli_query($conn, $sql_p);
    $res_medicine = mysqli_query($conn, $sql_m);


    mysqli_close($conn);
} else {
    show_alert("You are not logged in!", "../frontend/login.html");
}