<?php
require 'connect.php';

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$conn = OpenCon();
	$sql="select * from Users where username='".$uname."'AND password='".$password."' limit 1";
	$result=$conn->query($sql);
	if($result->num_rows==1){
	
		echo " You Have Successfully Logged in";
		exit();

	} else {
		echo " You Have Entered Incorrect Password";
		exit();
	}
}


?>
<html>
<head>
	<title>Form in Design</title>
</head>
<body>
	<div class="container">
		<img src="IMAGE"/>
		<form method="POST" action="#">
			<div class="form_input">
				<input type="text" name="username" placeholder=" Enter Your Name"/>
			</div>
			<div class="form_input">
				<input type="password" name="password" placeholder=" Enter Your Password "/>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>