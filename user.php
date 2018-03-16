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
    <img src="accident.jpg" width=300 height=300>
    <p>Greater Noida: In a horrific mishap, a car on Thursday rammed into a truck near Dhoom Manikpur in Greater Noida, killing five people, including three children, and injuring five others, police said. The incident took place at around 12:30 am when they were returning from a marriage in Ghaziabad in their five-seater WagonR. 
The deceased have been identified as Manveer Singh (38), his son Arjun (12), daughter Khushi (6), sister-in-law Neetu (26) and her daughter Nisha (8). The injured were admitted to the Sarvodaya Hospital. The truck driver is at large, police said. When asked why the car had not been stopped at any of the intersections despite being overloaded, SP (traffic), Noida, Anil Kumar Jha was quoted as saying by The Times of India: "We issue challans to people for overloading. But we are having to manage with only 150 traffic police personnel. It is because of this shortage that there was no traffic team patrolling the Badalpur area, where the accident took place”.
The police said the driver had stopped near a dhaba and had parked the truck along the road. The daily mentioned sources as saying that Manveer was driving the WagonR in high speed and failed to apply the brakes in time. The truck driver fled after the accident. </p>
    <form method="POST" action="">
        <b>COMMENT HERE:</b><br>
        <textarea name="txtarea" cols="70" rows="1" required></textarea><br><br>
        <input type="submit" name="comment" value="comment"><br><br>
    </form>
    <a href="logout.php">logout</a>
</body>
</html>