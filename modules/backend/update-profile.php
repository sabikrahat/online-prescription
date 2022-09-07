<?php

include 'components/connection.php';

$table = "users";
$conn = make_connection();

$name = $_POST['name'];
$degree = $_POST['degree'];
$specialism = $_POST['specialism'];
$email = $_POST['email'];

$sql = "UPDATE $table SET name = '$name', degree = '$degree', specialism = '$specialism' WHERE email = '$email'";

if (mysqli_query($conn, $sql)) {
    show_alert("Profile updated successfully.", "../frontend/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/edit-profile.php");
}

mysqli_close($conn);