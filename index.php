<?php 
session_start();
include 'src/connect.php';
include 'src/login.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/typewriter.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6" style="background-color:#b36dff">
		 <img style="margin-top: 28%; margin-left: 10%;" src="a.png" alt="atom logo" height="400" width="400">
	
    
</div>
		
		
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
			<center> 
				<h3 class="login-heading mb-4">
					<a class="typewrite" data-period="2000" data-type='[ "Mentorship.", "Empowerment.", "F E M T R", "Welcome :)"]'>
						<span class="wrap"></span>
					</a>
				</h3>
			
			
			<form method="POST" action="#">
			
				<div class="form-label-group">
					<input type="text" id="inputUsername" class="form-control" name="log_username" placeholder=" Enter Your Name" required autofocus/>
					<label for="inputUsername"> Enter Your Username</label>
				</div>

			<div class="form-label-group">
				<input type="password" id="inputPass" name="log_password" class="form-control" placeholder=" Enter Your Password " required/>
				<label for="inputPass">Enter Your Password</label>
			</div>
			
			<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="submit" value="LOGIN" class="btn-login">Sign In</button>
			
		</form>
		<?php echo loginHTML(); ?>
		<br>
		<a href="src/register.php" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Register</a>
		<img style="margin-top: 28%; margin-left: 10%;" src="cherry.png" alt="atom logo" height="20" width="20"> 
		<p>Powered by: Pixuel</p>

	</div>

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>