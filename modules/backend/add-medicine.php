<?php

include 'components/connection.php';

$table = "medicines";
$conn = make_connection();

$title = $_POST['title'];
$uses = $_POST['uses'];
$sideeffects = $_POST['sideeffects'];
$dosage = $_POST['dosage'];
$description = $_POST['description'];

$created_by = NULL;

session_start();

if (isset($_SESSION['email'])) {
    $created_by = $_SESSION['email'];
}

$sql = "INSERT INTO $table (title, uses, sideeffects, dosage, description, created_by) VALUES ('$title', '$uses', '$sideeffects', '$dosage', '$description', '$created_by')";

if (mysqli_query($conn, $sql)) {
    show_alert("New medicine created successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/add-medicine.html");
}

mysqli_close($conn);