<?php
    session_start();
    if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ) {
        header("Location: login.html");
    } else {
        echo "welcome to admin";
    }
?>