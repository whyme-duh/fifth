<?php
    $errorname = $erroremail = $errorpassword = '';
    $sucessmsg = "";

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassowrd = $_POST['confirmpassword'];
        $email= $_POST['email'];
        if($username == ""){
            $errorname = "Name cannot be blank";
            
        }
        
        if($email == ""){
            $erroremail = "Email cannot be blank";
        }
        // validate email
        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            $erroremail = "Invalid Email";
        }
        if($password != $confirmpassowrd){
            $errorpassword = "Please type same password";
        }
        if($username != '' && $email !="" && $password == $confirmpassowrd )
        {
            include('insert.php');
            
            $sucessmsg ='You have sucessfully created your account. Please <a href="login.php"> Login.</a>';
        }
    }

?>

<style>
    .container{
        width:100%;
        display:flex;
        justify-content:center;
        flex-direction:column;
        align-items:center;
    }
    span{
        color:red;
    }
    h2{
        color:green;
    }
    .form{
        border-radius:5px;
        width:20%;
        background-color:rgba(168, 167, 162,0.5);
        padding:1em;

    }
    input{
        border-radius:5px;
        padding:0.2em;
        border:none;
        margin-top:0.2em;
    }
    input[type="submit"]{
        display: flex;
        justify-content: center;
        align-items:center;
        width:30%;
        background-color:rgb(92, 214, 100);
        font-size:0.85em;
        padding:0.2em;
        cursor:pointer;
    }
    input[type="submit"]:hover{
        background-color:rgb(120, 250, 100);

    }
    form{
        display:flex;
        justify-content:center;
        flex-direction:column;
    }
    h5{
        text-align:center;
    }
    p{
        font-size:0.75em;
    }
</style>
<div class="container">
    <h3>Sign Up</h3>
    <div class="form">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        Username : <input type="text" id="username" name= "username"> <br> <span ><?php echo $errorname;?></span>
        Email : <input type="email" id="email" name= "email"> <br><span ><?php echo $erroremail;?></span>
        Password : <input type="password" id="password" name ="password"><br>
        Confirm Password : <input type="password" id="confirmpassword" name ="confirmpassword"><br><span ><?php echo $errorpassword;?></span>
        <input type="submit" value="Sign Up">

    </form>
    <h5><?php echo $sucessmsg; ?></h5>
    <p>Already have an account? <a href="login.php">Sign In.</a></p>
    </div>

</div>