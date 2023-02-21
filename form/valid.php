<?php 
    $errorname =$errorpassword = $erroremail = $errorgender = '';
    // print_r($_SERVER);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email= $_POST['email'];
        if($name == ""){
            $errorname = "Name cannot be blank";
        }
        if($password == ""){
            $errorpassword = "Password cannot be blank";
        }
        if($email == ""){
            $erroremail = "Email cannot be blank";
        }
        if(empty($_POST['Gender'])){
            $errorgender = "Gender is required";
        }
    }
?>