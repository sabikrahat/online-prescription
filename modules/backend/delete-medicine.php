<?php

include 'components/connection.php';

$table = "medicines";
$conn = make_connection();

$medicine_id = $_GET['id'];


$sql = "DELETE FROM $table WHERE id = '$medicine_id'";

if (mysqli_query($conn, $sql)) {
    show_alert("Medicine deleted.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/edit-medicine.php");
}

mysqli_close($conn);