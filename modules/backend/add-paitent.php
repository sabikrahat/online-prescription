<?php

include 'components/connection.php';

$table = "patients";
$conn = make_connection();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

$created_by = NULL;

session_start();

if (isset($_SESSION['email'])) {
    $created_by = $_SESSION['email'];
}

$sql = "INSERT INTO $table (name, email, phone, description, created_by) VALUES ('$name', '$email', '$phone', '$description', '$created_by')";

if (mysqli_query($conn, $sql)) {
    show_alert("New patient created successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/add-patient.html");
}

mysqli_close($conn);