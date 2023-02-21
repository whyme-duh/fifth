<style>
    span{
        color:red;
        font-size:0.5em;
    }
    .container{
        width:100%;
        display:flex;
        justify-content:center;
        flex-direction:column;
        align-items:center;
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#btn').click(function(){
            var username = $("#username").val();
            var password = $("$password").val();
            alert(username);
        })
    });
</script>
<div class="container">
    <h3>Sign In</h3>
    <div class="form">
    <form >
        Username/email: <input type="text" id="username" name= "username"> <br><span >
        Password : <input type="password" id="password" name ="password"><br><span>
        <input type="submit" id ="btn" value="Log In">
    </form> 

    </div>
</div>
