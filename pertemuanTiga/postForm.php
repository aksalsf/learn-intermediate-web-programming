<?php

    $username = $_GET['username'];
    $password = md5($_GET['password']);

    echo "Username Anda " . $username . " dan password-nya " . $password;

?>

