<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";