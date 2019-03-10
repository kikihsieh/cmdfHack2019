<?php 
include 'src/connect.php';
include 'src/login.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		LOGIN:
		<form method="POST" action="#">
			<div class="form_input">
				<input type="text" name="log_username" placeholder=" Enter Your Name"/>
			</div>
			<div class="form_input">
				<input type="password" name="log_password" placeholder=" Enter Your Password "/>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
		<?php echo loginHTML(); ?>
		<br>
		REGISTER:
		<span><a href="src/register.php">register here!</a></span>
	</div>

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>