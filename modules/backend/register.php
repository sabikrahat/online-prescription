<?php

include 'components/connection.php';

$table = "users";
$conn = make_connection();

$name = $_POST['name'];
$degree = $_POST['degree'];
$specialism = $_POST['specialism'];
$email = $_POST['email'];
$password = $_POST['password'];
$isRemember = $_POST['isRememberChecked'] ?? false;

$email_check = "SELECT * FROM $table WHERE email = '$email'";

$email_query = mysqli_query($conn, $email_check);

if ((mysqli_num_rows($email_query)) > 0) {
    show_alert("Email already exists.", "../frontend/register.html");
} else {
    $sql = "INSERT INTO $table (name, degree, specialism, email, password) VALUES ('$name', '$degree', '$specialism', '$email', '$password', )";

    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION['email'] = $email;
        if ($isRemember == "true") {
            $expire_time = time() + (60 * 60 * 24 * 30); // 30 days
            setcookie("email", $email, $expire_time);
            setcookie("password", $password, $expire_time);
        }
        show_alert("Registation done successfully.", "../frontend/home.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        show_alert("Error: " . $sql . "<br>" . mysqli_error($conn), "../frontend/register.html");
    }
}

mysqli_close($conn);