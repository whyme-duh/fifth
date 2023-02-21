<?php
    include("connection.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql="insert into user(username, password, email) values('$username','$password','$email')";
    $res=mysqli_query($connect, $sql);
    if(!$res){
        die("Failed to insert".mysqli_error($connect));
    }
    ?>

?>