<?php
function displayResults() {
	/* TODO need to give filters to write up the query using a POST*/
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		require 'connect.php';

	$education = (isset($_POST['filter_education'])) ? $_POST['filter_education'] : "";
	$industry = (isset($_POST['filter_industry'])) ? $_POST['filter_industry'] : "";
	$interests = (isset($_POST['filter_interests'])) ? $_POST['filter_interests'] : "";
	$country = (isset($_POST['filter_country'])) ? $_POST['filter_country'] : "";
	$language = (isset($_POST['filter_language'])) ? $_POST['filter_language'] : "";
	$race = (isset($_POST['filter_race'])) ? $_POST['filter_race'] : "";
	$type = (isset($_POST['filter_type'])) ? $_POST['filter_type'] : "";
	$whereParts = array();

	if ($education !== "") {
		$whereParts[] = "education LIKE '%$education%' ";
	}
	if ($industry !== "") {
		$whereParts[] = "industry LIKE '%$industry%' ";
	}
	if ($interests !== "") {
		$whereParts[] = "interests LIKE '%$interests%' ";
	}
	if ($country !== "") {
		$whereParts[] = "country LIKE '%$country%' ";
	}
	if ($language !== "") {
		$whereParts[] = "language LIKE '%$language%' ";
	}
	if ($race !== "") {
		$whereParts[] = "race LIKE '%$race%' ";
	}
	if ($type !== "") {
		$whereParts[] = "type LIKE '%$type%' ";
	}
		
	$sql = "SELECT * FROM Users ";
	if(count($whereParts)) {
    	$sql .= "WHERE " . implode('AND ', $whereParts);
	}
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$users = ""; 
		while($row = $result->fetch_assoc()) {
			if ($_SESSION["username"] !== $row["username"] && isset($row["firstname"])) {
				$messageLink = 	  $row["facebook"];
				list($serial) = sscanf($messageLink, "https://www.facebook.com/%s");
				$messageLink = "https://www.facebook.com/messages/t/".$serial;

				$users .=	'<div class="row">';
				$users .=	    '<div class="col-lg-4">';
				$users .=	      '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img class="dest-pic" src="'. $row["pic_url"] .'">';
				$users .=	    '</div>';
				$users .=	    '<div class="col-lg-8 ml-auto">';
				$users .=	      '<h3>👑 '.$row["username"].'</h3>';
				$users .=	      '<p><b>' . $row["firstname"] . ' ' . $row["lastname"].'</b><br>';
				$users .=	      $row["bio"] . '<br>';
				$users .=		  '<b> interests: </b>' . $row["interests"] . '<br><br>';
				$users .=	      '🤖'.$row["industry"] .'| 🎓'. $row["education"] . '|';
				if (isset($row["country"])) {
					$users .= '📍'.$row["country"]. '<br>';
				}
				$users .=	      '<a href="https://twitter.com/' .$row["twitter"].'" target="_blank"> <img class="linkImg" src="img/twitter.png"></a> ';
				$users .=	      '<a href="https://linkedin.com/in/'.$row["linkedin"].'" target="_blank"><img class="linkImg" src="img/linkedin.png"></a> ';
				$users .=	      '<a href="'.$messageLink.'" target="_blank"><img class="linkImg" src="img/facebook.png"></a> ';
				$users .=	      '<a href="mailto:'.$row["email"].'" target="_blank"><img class="linkImg" src="img/email.png"></a> ';
				$users .=	    '</div> ';
				$users .=	'</div><hr>';
			}
		}
		echo $users;
	}
	else {
		echo "<p>no results :(</p>"; 
	}
}
}
?>