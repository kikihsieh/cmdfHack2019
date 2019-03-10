
<form action="register.php" method="POST">
	username: <input type="text" placeholder="Enter a username" name="username"> <br>
	passworrd: <input type="password" placeholder="and password" name="password"> <br>
	retype password: <input type="password" placeholder="confirm password" name="confirm_password"> <br>
	<input type="submit">
</form>

<?php
function registerHTML() {	
	if(isset($_POST['username'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="select * from Users where username='".$username."'AND password='".$password."' limit 1";
		$result=$conn->query($sql);
		if($result->num_rows==1){
			echo " You Have Successfully Logged in";
			exit();
		} else {
			echo "You Have Entered Incorrect Password";
			exit();
		}
	}
}

?>