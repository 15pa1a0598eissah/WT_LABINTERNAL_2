<?php
    session_start();
    include ('connect.php');
    if(isset($_POST['comment'])){
        $usernm=$_SESSION['user'];
        $com=$_POST['txtarea'];
        echo $usernm;
        echo $com;
        $sql1="INSERT INTO `user` (`username`, `comment`) VALUES ('$usernm', '$com')";
        $res=mysqli_query($db,$sql1);
        if(count($res)==1){
            echo "comment saved";
        }
    }
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <h1>USER PAGE</h1>
    <img src="accident.jpg" width=50 height=50>
    <form method="POST" action="">
        <b>COMMENT HERE:</b><br>
        <textarea name="txtarea" cols="70" rows="1" required></textarea><br><br>
        <input type="submit" name="comment" value="comment"><br><br>
    </form>
    <a href="logout.php">logout</a>
</body>
</html>