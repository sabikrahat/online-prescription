<?php

include 'components/connection.php';

$table = "medicines";
$conn = make_connection();

$medicine_id = $_GET['id'];

$title = $_POST['title'];
$uses = $_POST['uses'];
$sideeffects = $_POST['sideeffects'];
$dosage = $_POST['dosage'];
$description = $_POST['description'];

$sql = "UPDATE $table SET title = '$title', uses = '$uses', sideeffects = '$sideeffects', dosage = '$dosage', description = '$description' WHERE id = '$medicine_id'";

if (mysqli_query($conn, $sql)) {
    show_alert("Medicine updated successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/edit-medicine.php");
}

mysqli_close($conn);