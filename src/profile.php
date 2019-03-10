<?php 
session_start();
include 'query.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Travel Destinations</title>

		<!-- css -->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="d-none d-md-flex col-sm-4 bg-image">
		            <div class="py-2 sticky-top flex-grow-1">
		                <div class="sidebar flex-sm-column">
		                    <h1 class="my-4">🌏 Welcome  
								<?php echo displayName(); ?>
		                    </h1>
		                    <div class="col content">
		                    	<form method="POST" action="#">
									<div class="form_input">
										<select id="user_country" class="form-control" name="education" placeholder=" Education ">
    										<option value="high_school">High School</option>
    										<option value="bachelors">Bachelors</option>
    										<option value="masters">Masters</option>
    										<option value="phd">PhD</option>
  										</select>
									</div>
									<div class="form_input">
										<select id="user_country" class="form-control" name="industry" placeholder=" Education ">
    										<option value="information_security_analyst">Information Security Analyst</option>
    										<option value="computer_systems_analyst">Computer Systems Analyst</option>
    										<option value="software_developer">Software Developer</option>
    										<option value="web_developer">Web Developer</option>
    										<option value="computer_scientist">Computer and Information Research Scientist</option>
    										<option value="computer_hardware_engineer">Computer Hardware Engineer</option>
    										<option value="computer_network_architect">Computer Network Architect</option>
    										<option value="game_developer">Game Developer</option>
    										<option value="health_sciences">Health Sciences</option>
    										<option value="biology">Biology</option>
    										<option value="chemistry">Chemistry</option>
  										</select>
									</div>
									<div class="form_input">
										<select id="user_country" class="form-control" name="race">
		                					<option value="native">American Indian or Alaska Native</option>
		                					<option value="asian">Asian</option>
		                					<option value="black">Black or African American</option>
		                					<option value="hispanic">Hispanic or Latino</option>
		                					<option value="islander">Native Hawaiian or Other Pacific Islander</option>
		                					<option value="white">White</option>
		                				</select>
									</div>
									<div class="form_input">
										<select id="user_country" class="form-control" name="language">
		                					<option value="native">English</option>
		                					<option value="asian">French</option>
		                					<option value="black">Mandrin</option>
		                					<option value="hispanic">Arabic</option>
		                				</select>
									</div>
									<input type="checkbox" name="mentor" value="mentor">Find Mentor<br>
									<input type="checkbox" name="mentee" value="mentee">Find Mentee<br>
									<input type="submit" name="submit" value="Submit" class="btn-login"/>
								</form>
							</div>
		                </div>
		            </div>
		        </div>
				<div class="col content">
					<?php echo displayResults(); ?>
				</div>
			</div>
		</div>
		
		<!-- css -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"> </script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	</body>
</html>

<?php

function displayName() {
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 	
    require 'connect.php';
	$username = $_SESSION['username'];
	echo '<small>'.$username.'</small>';
}
?>