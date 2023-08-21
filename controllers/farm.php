<?php 

    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/agriplanner/';
    include($basePath . 'database/db.php');
    include($basePath . 'validation/validateFarm.php');
    
    $table = 'farm';

    $name = "";
    $location = "";
    $area = "";


    //adding farm
    if (isset($_POST['addFarm'])) {
        $errors = validateFarm($_POST);
        $jsonErrors = json_encode(array('errors' => $errors));

        if(count($errors)== 0){
            unset($_POST['addFarm']);

            $token = 'F'.date('Y').substr(time(), -4);
            $_POST['token'] = $token;

            $post = create($table, $_POST);
            $_SESSION['message'] = $_POST['name'].' successfully registered' ;
            $_SESSION['description'] = 'Welcome Back Our Esteemed User';
            $_SESSION['type'] = 'bg-green-500';
            header('location:farms.php');
            exit();
        }
        else{
            $name = $_POST['name'];
            $location = $_POST['location'];
            $area = $_POST['area'];
        }
    }

    if(isset($_GET['farm'])){
        $token = $_GET['farm'];

    }