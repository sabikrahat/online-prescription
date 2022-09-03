<?php

include 'alert.php';

function make_connection()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "online_prescription";

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $db);

    // Check connection
    if (!$conn) {
        show_alert("Connection failed: " . mysqli_connect_error());
        die("Connection failed: " . mysqli_connect_error());
    }

    // echo "Connected successfully";

    return $conn;
}