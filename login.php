<?php
    $username = "cat";
    $password = "dog";

    if ( isset($_POST['username']) && isset($_POST['password']) ) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedin'] = true;
            echo "You are logged in!";
        }
        else {
            echo "Error, wrong username and password!";
        }
    }
?>