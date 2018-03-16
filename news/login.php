<?php 
    session_start();
    include ('connect.php');
    if(isset($_SESSION['user'])){
        if($_SESSION['user']=="admin")
            header('location:admin.php');
        else
            header('location:user.php');
    }
    if(isset($_POST['login'])){
        $_SESSION['user']=$_POST['user'];
        $usernm=$_SESSION['user'];
        $sql="SELECT * FROM `register` WHERE `username` LIKE '$usernm'";
        $res=(mysqli_query($db,$sql));
        if(count($res)==1){
            if($usernm=='admin'){
                header('location:admin.php');
            }
            else{
                header('location:user.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="a1">
        <h1>THE HINDU</h1>
        <h3>LOGIN</h3>
        <form method="post" action="">
            <lable for="use" class="x"><b>User Name:<b></lable><br><br>
            <input type="text" name="user" id="use"><br><br>
            <lable for="psd" class="x"><b>Password:<b></lable><br><br>
            <input type="password" name="password" id="psd"><br><br>
            <input type="submit" class="x" name="login" value="login" id="psd"><br><br>     
        </form>
        <a href="register.php">backtoregister</a>
        </div>
    </body>
</html>