<?php 

    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);

    session_destroy();

    header("Location:login.php");

?>