<?php
function displayResults() {
	/* TODO need to give filters to write up the query using a POST*/
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_POST['education'])) {
		require 'connect.php';

	$username = $_POST['log_username'];
	$sql = "SELECT * FROM Users WHERE username = '$username'";
	$result = $conn->query($sql);
	/* template
	
	*/
	if ($result->num_rows > 0) {
		$destinations = '<h1 class="my-4">→ <small>'.$row["username"].'</small></h1><br>'; 
		while($row = $result->fetch_assoc()) { 
			$destinations .=	'<div class="row">';
			$destinations .=	    '<div class="col-lg-4">';
			$destinations .=	      '<img class="dest-pic" src="'.$row["pic_url"].'">';
			$destinations .=	    '</div>';
			$destinations .=	    '<div class="col-lg-8 ml-auto">';
			$destinations .=	      '<h3>✈️ '.$row["username"].'</h3>';
			$destinations .=	      '<p>'.$row["education"].'</p>';
			$destinations .=	      '<br> rating: ';
										for ($i = 0; $i < $row["rating"]; $i++) {
							    			$destinations .= '⭐';
										} 
			$destinations .=	      '<br> 📍'.$row["city_name"]. ', <b>@</b>'. $row["address"] . '</p>';
			$destinations .=		  '<div class="reviews"><div class="review-title"><b>Reviews:</b></div>';
			$destinations .=		  '</div>';
			$destinations .=		  '<div class="activities"><div class="activity-title"><b>Activities:</b></div>';
			$destinations .=		  '</div>';
			$destinations .=	    '</div>';
			$destinations .=	'</div><hr>';
		}
		echo $destinations;
	}
	else {
		echo "<p>no destinations :(</p>"; 
	}
}
}
?>