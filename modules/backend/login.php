<?php

include 'components/connection.php';

$table = "users";
$conn = make_connection();

$email = $_POST['email'];
$password = $_POST['password'];
$isRemember = $_POST['isRememberChecked'];

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
    header("location: ../frontend/home.html");
} else {
    echo "Wrong Username or Password";
    // header("location: ../html/login.html");
    show_alert("Wrong email or Password");
}

mysqli_close($conn);