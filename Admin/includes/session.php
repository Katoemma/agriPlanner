<?php 

    if(isset($_SESSION['id'])){
        $user = selectOne('users', ['id'=> $_SESSION['id']]);
    }else{
        header('location:../login.php');
    }
    
?>