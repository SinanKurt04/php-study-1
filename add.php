<?php

if(isset($_POST['submit'])) {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Email must be a valid email address';
    } else {
        echo 'Email is valid';
    }
}

?>