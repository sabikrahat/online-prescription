<?php

include 'components/connection.php';

$table = "assigns_tb";
$conn = make_connection();

$patient = $_POST['patient'];
$medicine = $_POST['medicine'];
$description = $_POST['description'];

$created_by = NULL;

session_start();

if (isset($_SESSION['email'])) {
    $created_by = $_SESSION['email'];
}

$sql = "INSERT INTO $table (patient, medicine, description, created_by) VALUES ('$patient', '$medicine', '$description', '$created_by')";

if (mysqli_query($conn, $sql)) {
    show_alert("Medicine assigned successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/add-medicine.html");
}

mysqli_close($conn);