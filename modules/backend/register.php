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

$img = $_FILES['pick-image']['name'];
$img_type = $_FILES['pick-image']['type'];
$img_size = $_FILES['pick-image']['size'];
$img_tmp = $_FILES['pick-image']['tmp_name'];
$img_store = $_SERVER['DOCUMENT_ROOT'] . "/cse479-project/online-prescription/db_uploads/" . $img;

move_uploaded_file($img_tmp, $img_store);

$email_check = "SELECT * FROM $table WHERE email = '$email'";

$email_query = mysqli_query($conn, $email_check);

if ((mysqli_num_rows($email_query)) > 0) {
    show_alert("Email already exists.", "../frontend/register.html");
} else {
    $sql = "INSERT INTO $table (name, degree, specialism, email, password, img_path) VALUES ('$name', '$degree', '$specialism', '$email', '$password', '$img')";

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