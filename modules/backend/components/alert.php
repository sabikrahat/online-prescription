<?php

function show_alert($message, $path = NULL)
{
    echo "<script>";
    echo "alert('$message');";
    if ($path != NULL) {
        echo "window.location.href = '$path';";
    }
    echo "</script>";
}