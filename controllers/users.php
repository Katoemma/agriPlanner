<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/agriplanner/';
    include($basePath . 'database/db.php');
    include($basePath . 'validation/validateUser.php');
    
    $AdminTable = 'users';


    $fname = "";
    $lname = "";
    $email = "";
    $pass = "";
    $cPass ="";

    //registering farm admin users
    if (isset($_POST['regBtn'])) {
        $errors = validateRegister($_POST);

        if (count($errors) === 0) {
            unset($_POST['regBtn'], $_POST['confirmPassword']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['type'] = "FA";

            $user = create($AdminTable,$_POST);

            $_SESSION['id'] = $user['id'];
            $_SESSION['message'] = 'You are logged in';
            $_SESSION['description'] = 'Welcome Back Our Esteemed User';
            $_SESSION['type'] = 'bg-green-500';

            header('location:Admin/index.php');
            exit();
            
        }else{
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $cPass =$_POST['confirmPassword'];
        }
    }
    // farm admin user login
    if(isset($_POST['loginBtn'])){
        $errors = validateLogin($_POST);

        if(count($errors) === 0){
            $user = selectOne($AdminTable, ['email'=> $_POST['email']]);

            if($user['type']== "FA"){
                $_SESSION['id'] = $user['id'];
                $SESSION['message'] = 'Welcome Back !';
                $_SESSION['description'] = 'Welcome Back Our Esteemed User';
                $_SESSION['type'] = 'bg-green-500';

                header('location:Admin/index.php');
                exit();
            }
        }else{
            $email = $_POST['email'];
            $pass = $_POST['password'];
        }
    }