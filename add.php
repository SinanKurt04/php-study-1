<?php

if(isset($_POST['submit'])) {

    // Check email
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Email must be a valid email address';
        exit();
    }

    // Check password
    if(empty($_POST['password'])) {
        echo 'Password must not be empty';
        exit();
    } else {
        $password = $_POST['password'];
        if(strlen($password) < 6) {
            echo 'Password must be at least 6 characters';
            exit();
        }
    }

    // Success message
    echo 'Success!';

}

?>