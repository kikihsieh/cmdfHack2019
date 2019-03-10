<form method="post" action="/cmdfHack2019/src/register.php">
	<div class="form_input">
		<input type="text" name="reg_username" placeholder=" Enter Your Name"/>
	</div>
	<div class="form_input">
		<input type="password" name="reg_password" placeholder=" Enter Your Password "/>
	</div>
	<div class="form_input">
		<input type="password" name="reg_confirm_password" placeholder=" Enter Your Password "/>
	</div>
	<input type="submit" name="submit" value="REGISTER" class="btn-login"/>
</form>

<?php
require 'connect.php';

if(isset($_POST['reg_username'])) {
	$username=$_POST['reg_username'];
	$password=$_POST['reg_password'];
	$confirm_password=$_POST['reg_confirm_password'];

	$sql= "select username from Users";
	$result=$conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { 
			if ($username === $row['username']) {
				echo 'username taken try again!';
				return;
			}
		}
	}
	if ($password !== $confirm_password) {
		echo 'passwords dont match, try again!';
		return;
	} else {
		$sql = "INSERT INTO Users VALUES ('$username', '$password', null, null, null, null, null, null, null, null, null, null, null)";
	}

	if ($conn->query($sql) === TRUE) {
	    echo "New User created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
?>