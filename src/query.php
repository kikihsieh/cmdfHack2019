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
		echo $education;
	}
	if ($industry !== "") {
		$whereParts[] = "industry LIKE '%$industry%' ";
		echo $industry;
	}
	if ($interests !== "") {
		$whereParts[] = "interests LIKE '%$interests%' ";
		echo $interests;
	}
	if ($country !== "") {
		$whereParts[] = "country LIKE '%$country%' ";
		echo $country;
	}
	if ($language !== "") {
		$whereParts[] = "language LIKE '%$language%' ";
		echo $language;
	}
	if ($race !== "") {
		$whereParts[] = "race LIKE '%$race%' ";
		echo $race;
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
			$users .=	      '<img class="dest-pic" src="'.$row["pic_url"].'">';
			$users .=	    '</div>';
			$users .=	    '<div class="col-lg-8 ml-auto">';
			$users .=	      '<h3>✈️ '.$row["username"].'</h3>';
			$users .=	      '<p>'.$row["industry"].'</p>';
			$users .=	      '<p>'.$row["country"].'</p>';
			$users .=	      '<p>'.$row["language"].'</p>';
			$users .=	      '<p>'.$row["race"].'</p>';
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