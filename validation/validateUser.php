<?php
    $fnameError = "";
    function validateRegister($user){
        $errors = array();

        if(empty($_POST['fname'])){
            $errors['fname'] = 'First name is required !';
        }
        if(empty($_POST['lname'])){
            $errors['lname'] = 'Last name is required !';
        }
        if(empty($_POST['password'])){
            $errors['password'] = 'Please Input password !';
        }
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required !';
        }
        if(strlen($_POST['password']) < 6 && !empty($_POST['password']) ){
            $errors['password'] = 'Password must be morethan six characters!';
        }
        if($_POST['password'] !== $_POST['confirmPassword']){
            $errors['cPass'] = 'Password does not Match!';
        }

        //checking for existing email
        if (!empty($_POST['email'])) {
            $existingEmail = selectOne('users',['email' => $_POST['email']]);
            if(!empty($existingEmail)){
                $errors['email'] = "Email exists!";
            }
        }
        
        return $errors;
    }
    function validateLogin($user) {
        $errors = array();
    
        // Validate email and password inputs
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required!';
        }
        if (empty($_POST['password'])) {
            $errors['password'] = 'Please input password!';
        }
    
        // Check if user with given email exists
        $existingUser = selectOne('users', ['email' => $_POST['email']]);
    
        if (!$existingUser) {
            $errors['email'] = 'Email not found in system!';
        } else {
            $pass = $existingUser['password'];
            $passverify = password_verify($_POST['password'], $pass);
    
            if (!$passverify) {
                $errors['password'] = 'Incorrect Password entered !';
            }
        }
    
        return $errors;
    }
    