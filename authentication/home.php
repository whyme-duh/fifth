<?php
    session_start();
    if(isset($_SESSION['uname'])){
        header('location:login.php?err=true');
        
    }
    else{
        echo "<h1>Welcome to CSIT</h1>";
        echo "<a href='logout.php?lgt=true'>Logout</a>";
    }
?>