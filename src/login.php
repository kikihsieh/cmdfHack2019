<?php

function loginHTML($conn) {
	echo '<form method="POST" action="#">
				<div class="form_input">
					<input type="text" name="username" placeholder=" Enter Your Name"/>
				</div>
				<div class="form_input">
					<input type="password" name="password" placeholder=" Enter Your Password "/>
				</div>
				<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
			</form>';

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