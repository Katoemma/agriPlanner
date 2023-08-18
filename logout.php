<?php
    session_start();
        $_SESSION['message'] = 'you are logged Out';
        $_SESSION['description'] = 'Thanks for using our services';
        $_SESSION['type'] = 'bg-red-600';
        header('location:login.php');
    session_destroy();
