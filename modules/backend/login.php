<?php

include 'components/connection.php';

$table = "users";
$conn = make_connection();

$email = $_POST['email'];
$password = $_POST['password'];
$isRemember = $_POST['isRememberChecked'] ?? false;

$email_check = "SELECT * FROM $table WHERE email = '$email'";

$email_query = mysqli_query($conn, $email_check);

if ((mysqli_num_rows($email_query)) > 0) {
    $sql = "SELECT * FROM $table WHERE email ='$email' and password ='$password'";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['email'] = $email;
        if ($isRemember == "true") {
            $expire_time = time() + (60 * 60 * 24 * 30); // 30 days
            setcookie("email", $email, $expire_time);
            setcookie("password", $password, $expire_time);
        }
        header("location: ../frontend/home.php");
    } else {
        echo "Password incorrect.";
        show_alert("Password incorrect.", "../frontend/login.html");
    }
} else {
    show_alert("Email doesn\'t exists.", "../frontend/login.html");
}

mysqli_close($conn);