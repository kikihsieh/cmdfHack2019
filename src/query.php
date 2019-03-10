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
		
	$sql = "SELECT * FROM Users ";
	if(count($whereParts)) {
    	$sql .= "WHERE " . implode('AND ', $whereParts);
	}
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$users = ""; 
		while($row = $result->fetch_assoc()) {
			$users .=	'<div class="row">';
			$users .=	    '<div class="col-lg-4">';
			$users .=	      '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img class="dest-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1024px-Circle-icons-profile.svg.png">';
			$users .=	    '</div>';
			$users .=	    '<div class="col-lg-8 ml-auto">';
			$users .=	      '<h3>'.$row["username"].'</h3>';
			$users .=	      '<p><b>' . $row["firstname"] . ' ' . $row["lastname"].'</b><br>';
			$users .=	      $row["bio"] . '<br>';
			$users .=		  '<b> interests: </b>' . $row["interests"] . '<br><br>';
			$users .=	      $row["industry"] .' | '. $row["education"] . '<br>';
			$users .=	      $row["email"] . ' ' . $row["twitter"] . ' ' . $row["linkedin"] . '</p>';
			$users .=	    '</div>';
			$users .=	'</div><hr>';
		}
		echo $users;
	}
	else {
		echo "<p>no results :(</p>"; 
	}
}
}
?>