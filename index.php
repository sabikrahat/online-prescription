<?php

include 'modules/php/components/create_db_and_table.php';

session_start();

if (isset($_SESSION['email'])) {
    echo 'Welcome ' . $_SESSION['email'];
    header("location: modules/html/home.html");
} else {
    echo 'You are not logged in!';
    header("location: modules/html/login.html");
}