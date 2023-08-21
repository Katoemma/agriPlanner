<?php 
    function validateFarm($farm){
        $errors = array();

        if(empty($_POST['name'])){
            $errors['farmName'] = "Farm name is required !";
        }
        if(empty($_POST['location'])){
            $errors['location'] = "Location is required !";
        }
        if(empty($_POST['acres'])){
            $errors['acres'] = "Total area is required !";
        }

        $nameExists = selectOne('farm', ['name'=>$_POST['name']]);
        if($nameExists){
            $errors['farmName'] = "Farm name already exists";
        }

        return $errors;
    }
