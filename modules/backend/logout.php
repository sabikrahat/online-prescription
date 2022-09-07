<?php

include 'components/alert.php';

session_start();
session_destroy();
show_alert("You are logged out.", "../frontend/login.html");