<?php

include 'components/connection.php';

$table = "users";
$conn = make_connection();

$name = $_POST['name'];
$degree = $_POST['degree'];
$specialism = $_POST['specialism'];
$email = $_POST['email'];
$password = $_POST['password'];
$isRemember = $_POST['isRememberChecked'];


$sql = "INSERT INTO $table (name, degree, specialism, email, password) VALUES ('$name', '$degree', '$specialism', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['email'] = $email;
    if ($isRemember == "true") {
        $expire_time = time() + (60 * 60 * 24 * 30); // 30 days
        setcookie("email", $email, $expire_time);
        setcookie("password", $password, $expire_time);
    }
    header("location: ../frontend/home.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // header("location: ../html/register.html");
    show_alert("Error: " . $sql . "<br>" . mysqli_error($conn));
}

mysqli_close($conn);