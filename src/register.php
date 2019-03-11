<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>

<div class="container-fluid">
	<div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6" style="background-color:#FDCFB3"> 
		<img style="margin-top: 28%; margin-left: 10%;" src="../a.png" alt="atom logo" height="400" width="400">
		</div>
		
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
						<center>
						<h3 class="login-heading mb-4">Become a Femtr!</h3>
						<form method="post" action="#">

							<div class="form-label-group">
								<input type="text" id="inputUsername" name="reg_username"  class="form-control" placeholder=" Enter Your Name" required autofocus/>
								<label for="inputUsername"> Create A Username</label>
							</div>

							<div class="form-label-group">
								<input type="password" id="inputPass" name="reg_password" class="form-control" placeholder=" Enter Your Password " required/>
								<label for="inputPass">Enter Your Password</label>
							</div>

							<div class="form-label-group">
								<input type="password"  id="inputRePass" name="reg_confirm_password" class="form-control" placeholder=" Re-enter Your Password "required/>
								<label for="inputRePass">Re-Enter Your Password</label>
							</div>

						<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="submit" value="REGISTER" class="btn-login">Register</button>

						</form>
						<img style="margin-top: 28%; margin-left: 5%;" src="../cherry.png" alt="atom logo" height="20" width="23">
						<p style="font-size: 10px; margin:5px;">Powered by: Pixuel</p>

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
		$sql = "INSERT INTO Users VALUES ('$username', '$password', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null)";
	}

	if ($conn->query($sql) === TRUE) {
		session_start(); 
		$_SESSION['username'] = $username;
	    $URL="profile.php";
		echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
?>
						</center>
            </div>
					</div>
        </div>
      </div>
    </div>
  </div>
	</div>
	</body>
	</html>
