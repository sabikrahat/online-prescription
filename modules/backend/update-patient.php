<?php

include 'components/connection.php';

$table = "patients";
$conn = make_connection();

$patient_id = $_GET['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

$sql = "UPDATE $table SET name = '$name', email = '$email', phone = '$phone', description = '$description' WHERE id = '$patient_id'";

if (mysqli_query($conn, $sql)) {
    show_alert("Patient updated successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/edit-patient.php");
}

mysqli_close($conn);