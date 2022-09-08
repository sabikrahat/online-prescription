<?php

include 'alert.php';

$hostname = "localhost";
$username = "root";
$password = "";
$db = "online_prescription";

// Create connection
$conn = mysqli_connect($hostname, $username, $password);

// Check connection
if (!$conn) {
    show_alert("Connection failed: " . mysqli_connect_error());
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully.<br>";

$create_db_sql = "CREATE DATABASE IF NOT EXISTS $db";

if (mysqli_query($conn, $create_db_sql)) {
    echo "Database created successfully";
} else {
    show_alert("Error creating database: " . mysqli_error($conn));
    echo "Error creating database: " . mysqli_error($conn);
}

$conn = mysqli_connect($hostname, $username, $password, $db);

// Check connection with db
if (!$conn) {
    show_alert("Connection failed: " . mysqli_connect_error());
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully with database.<br>";

$create_table_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    degree VARCHAR(20) NOT NULL,
    specialism VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    img_path VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
);";

$create_table_sql .= "CREATE TABLE IF NOT EXISTS patients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    description VARCHAR(1024) NOT NULL,
    created_by VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
);";

$create_table_sql .= "CREATE TABLE IF NOT EXISTS medicines (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    uses VARCHAR(1024) NOT NULL,
    sideeffects VARCHAR(1024) NOT NULL,
    dosage VARCHAR(1024) NOT NULL,
    description VARCHAR(1024) NOT NULL,
    created_by VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
);";

$create_table_sql .= "CREATE TABLE IF NOT EXISTS assigns_tb (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient VARCHAR(30) NOT NULL,
    medicine VARCHAR(30) NOT NULL,
    description VARCHAR(1024) NOT NULL,
    created_by VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
);";

if (mysqli_multi_query($conn, $create_table_sql)) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}