<?php

include 'components/connection.php';

$table = "patients";
$conn = make_connection();

$patient_id = $_GET['id'];


$sql = "DELETE FROM $table WHERE id = '$patient_id'";

if (mysqli_query($conn, $sql)) {
    show_alert("Patient deleted.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/edit-patient.php");
}

mysqli_close($conn);