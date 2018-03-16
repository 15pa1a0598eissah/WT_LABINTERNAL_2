<?php 
	include ('connect.php');
	if(isset($_POST['register'])){
		$user=$_POST['user'];
		$psd=$_POST['password'];
		$email=$_POST['email'];
		$password=md5($psd);
		$sql="INSERT INTO `register` (`username`, `password`, `email`) VALUES ('$user', '$password', '$email');";
		$res=mysqli_query($db,$sql);
		if(count($res)==1)
			echo "you are logged in";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
	<div class="a1">
		<h1>THE HINDU</h1>
		<h3>REGISTER</h3>
		<form method="POST" action="">
			<lable for="usnm" class="x"><b>User Name:</b></lable><br><br>
			<input type="text" id="usnm" name="user" placeholder="Enter Name" required><br><br>
			<lable for="psd1" class="x"><b>password:</b></lable><br><br>
			<input type="password" id="psd1" name="password" placeholder="Enter password" required><br><br>
			<lable for="email" class="x"><b>email:</b></lable><br><br>
			<input type="email" id="email" name="email" placeholder="Enter email" required><br><br>
			<input type="submit" class="x" name="register" value="register"><br><br>
		</form>
		<p class="x"><a href="login.php">back to login</a></p>
	</div>
	</body>
</html>