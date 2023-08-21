<?php 

    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/agriplanner/';
    include($basePath . 'database/db.php');
    include($basePath . 'validation/validateUser.php');
    
    $AdminTable = 'farm';

    if (isset($_POST['addFarm'])) {
        dd($_POST);
    }