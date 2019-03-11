<?php 
	session_start();
	require 'connect.php';
	$username = $_SESSION['username'];
	//$password = $_SESSION['password'];
	$sql = "SELECT * FROM Users WHERE username='".$username."'";
	$result=$conn->query($sql);
	if($result->num_rows==1){
		$row = $result->fetch_assoc();
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$bio = $row['bio'];
		$education = $row['education'];
		$industry = $row['industry'];
		$interests = $row['interests'];
		$country = $row['country'];
		$language = $row['language'];
		$race = $row['race'];
		$email = $row['email'];
		$linkedin = $row['linkedin'];
		$twitter = $row['twitter'];
		$facebook = $row['facebook'];
		$type = $row['type'];
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body style="background-color:#f1eaff;">
		<div class="container-fluid">
		<div class="edit_container">
			<br> <br>
		    <h1>Edit Profile</h1>
		  	<hr style="max-width: 850px; margin-left:0;">
			<div class="row">
		      <!-- left column -->
		      <div class="col-md-3">
		        <div class="text-center">
		          <img src="//placehold.it/255" class="avatar img-circle" alt="avatar"> <br> <br>
		          <input type="file" class="form-control" style="width:259px; margin-left: 5px;" name="edit_pic_url">
		        </div>
		      </div>
		      
		      <!-- edit form column -->
		      <div class="col-md-9 personal-info">
				<h3>User Info</h3>
				<br>
		        <form class="form-horizontal" method="post" action="#">
		          <div class="form-row">
							<label class="col-lg-4 control-label">First Name:</label>
								<label class="col-lg-8 control-label">Last Name:</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="edit_name" value="<?php echo $firstname?>">
								</div>
		            <div class="col-lg-4">
					<input class="form-control" type="text" name="edit_lastname" value="<?php echo $lastname?>">
		            </div>
		          </div>
				  <br>
		          <div class="form-row">
		            <label class="col-lg-8 control-label">Bio:</label>
		            <div class="col-lg-8" >
								<textarea class="form-control" type="text" name="edit_bio" rows="3"><?php echo $bio?></textarea>
								<!--<input class="form-control" type="text" name="edit_bio" value="<?php echo $bio?>">-->
		            </div>
		          </div>
				  <br>
				  <div class="form-row">
		            <label class="col-lg-8 control-label">I am a...</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control"  name="edit_type">
		                	<option value="<?php echo $type?>" selected="selected"><?php echo $type?></option>
		                	<option value="Mentor">Mentor</option>
		                	<option value="Mentee">Mentee</option>
		                	<option value="Both">Both Mentor and Mentee!</option>
		                </select>
		              </div>
		            </div>
		          </div>
				 <br>
		          <div class="form-row">
		            <label class="col-lg-8 control-label">Education:</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control"  name="edit_education">
		                	<option value="<?php echo $education?>" selected="selected"><?php echo $education?></option>
		                	<option value="High School">High School</option>
		                	<option value="Bachelors">Bachelors</option>
		                	<option value="Masters">Masters</option>
		                	<option value="PhD">PhD</option>
		                	<option value="Diploma">Diploma</option>
		                	<option value="Associate">Associate</option>
		                </select>
		              </div>
		            </div>
		          </div>
							<br>

		          <div class="form-row">
		            <label class="col-lg-8 control-label">Industry:</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control"  name="edit_industry">
		                	<option value="<?php echo $industry?>" selected="selected"><?php echo $industry?></option>
		                	<option value="Information Security Analyst">Information Security Analyst</option>
    						<option value="Computer Systems Analyst">Computer Systems Analyst</option>
    						<option value="Software Developer">Software Developer</option>
    						<option value="Web Developer">Web Developer</option>
    						<option value="Computer and Information Research Scientist">Computer and Information Research Scientist</option>
    						<option value="Computer Hardware Engineer">Computer Hardware Engineer</option>
							<option value="Computer Network Architect">Computer Network Architect</option>
							<option value="Game Developer">Game Developer</option>
							<option value="Health Sciences">Health Sciences</option>
							<option value="Computer Science">Computer Science</option>
							<option value="Mathematics">Mathematics</option>
							<option value="Biology">Biology</option>
							<option value="Chemistry">Chemistry</option>
		                </select>
		              </div>
		            </div>
		          </div>
							<br>
		          <div class="form-row">
		            <label class="col-lg-8 control-label">Intrests:</label>
		            <div class="col-lg-8">
		              <input class="form-control" type="text" name="edit_interests" value="<?php echo $interests?>">
		            </div>
		          </div>
							<br>

		          <div class="form-row">
		            <label class="col-lg-8 control-label">Country:</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control" name="edit_country">
		                	<option value="<?php echo $country?>" selected="selected"><?php echo $country?></option> 
		                	<option value="United States">United States</option> 
							<option value="United Kingdom">United Kingdom</option> 
							<option value="Afghanistan">Afghanistan</option> 
							<option value="Albania">Albania</option> 
							<option value="Algeria">Algeria</option> 
							<option value="American Samoa">American Samoa</option> 
							<option value="Andorra">Andorra</option> 
							<option value="Angola">Angola</option> 
							<option value="Anguilla">Anguilla</option> 
							<option value="Antarctica">Antarctica</option> 
							<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
							<option value="Argentina">Argentina</option> 
							<option value="Armenia">Armenia</option> 
							<option value="Aruba">Aruba</option> 
							<option value="Australia">Australia</option> 
							<option value="Austria">Austria</option> 
							<option value="Azerbaijan">Azerbaijan</option> 
							<option value="Bahamas">Bahamas</option> 
							<option value="Bahrain">Bahrain</option> 
							<option value="Bangladesh">Bangladesh</option> 
							<option value="Barbados">Barbados</option> 
							<option value="Belarus">Belarus</option> 
							<option value="Belgium">Belgium</option> 
							<option value="Belize">Belize</option> 
							<option value="Benin">Benin</option> 
							<option value="Bermuda">Bermuda</option> 
							<option value="Bhutan">Bhutan</option> 
							<option value="Bolivia">Bolivia</option> 
							<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
							<option value="Botswana">Botswana</option> 
							<option value="Bouvet Island">Bouvet Island</option> 
							<option value="Brazil">Brazil</option> 
							<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
							<option value="Brunei Darussalam">Brunei Darussalam</option> 
							<option value="Bulgaria">Bulgaria</option> 
							<option value="Burkina Faso">Burkina Faso</option> 
							<option value="Burundi">Burundi</option> 
							<option value="Cambodia">Cambodia</option> 
							<option value="Cameroon">Cameroon</option> 
							<option value="Canada">Canada</option> 
							<option value="Cape Verde">Cape Verde</option> 
							<option value="Cayman Islands">Cayman Islands</option> 
							<option value="Central African Republic">Central African Republic</option> 
							<option value="Chad">Chad</option> 
							<option value="Chile">Chile</option> 
							<option value="China">China</option> 
							<option value="Christmas Island">Christmas Island</option> 
							<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
							<option value="Colombia">Colombia</option> 
							<option value="Comoros">Comoros</option> 
							<option value="Congo">Congo</option> 
							<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
							<option value="Cook Islands">Cook Islands</option> 
							<option value="Costa Rica">Costa Rica</option> 
							<option value="Cote D'ivoire">Cote D'ivoire</option> 
							<option value="Croatia">Croatia</option> 
							<option value="Cuba">Cuba</option> 
							<option value="Cyprus">Cyprus</option> 
							<option value="Czech Republic">Czech Republic</option> 
							<option value="Denmark">Denmark</option> 
							<option value="Djibouti">Djibouti</option> 
							<option value="Dominica">Dominica</option> 
							<option value="Dominican Republic">Dominican Republic</option> 
							<option value="Ecuador">Ecuador</option> 
							<option value="Egypt">Egypt</option> 
							<option value="El Salvador">El Salvador</option> 
							<option value="Equatorial Guinea">Equatorial Guinea</option> 
							<option value="Eritrea">Eritrea</option> 
							<option value="Estonia">Estonia</option> 
							<option value="Ethiopia">Ethiopia</option> 
							<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
							<option value="Faroe Islands">Faroe Islands</option> 
							<option value="Fiji">Fiji</option> 
							<option value="Finland">Finland</option> 
							<option value="France">France</option> 
							<option value="French Guiana">French Guiana</option> 
							<option value="French Polynesia">French Polynesia</option> 
							<option value="French Southern Territories">French Southern Territories</option> 
							<option value="Gabon">Gabon</option> 
							<option value="Gambia">Gambia</option> 
							<option value="Georgia">Georgia</option> 
							<option value="Germany">Germany</option> 
							<option value="Ghana">Ghana</option> 
							<option value="Gibraltar">Gibraltar</option> 
							<option value="Greece">Greece</option> 
							<option value="Greenland">Greenland</option> 
							<option value="Grenada">Grenada</option> 
							<option value="Guadeloupe">Guadeloupe</option> 
							<option value="Guam">Guam</option> 
							<option value="Guatemala">Guatemala</option> 
							<option value="Guinea">Guinea</option> 
							<option value="Guinea-bissau">Guinea-bissau</option> 
							<option value="Guyana">Guyana</option> 
							<option value="Haiti">Haiti</option> 
							<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
							<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
							<option value="Honduras">Honduras</option> 
							<option value="Hong Kong">Hong Kong</option> 
							<option value="Hungary">Hungary</option> 
							<option value="Iceland">Iceland</option> 
							<option value="India">India</option> 
							<option value="Indonesia">Indonesia</option> 
							<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
							<option value="Iraq">Iraq</option> 
							<option value="Ireland">Ireland</option> 
							<option value="Israel">Israel</option> 
							<option value="Italy">Italy</option> 
							<option value="Jamaica">Jamaica</option> 
							<option value="Japan">Japan</option> 
							<option value="Jordan">Jordan</option> 
							<option value="Kazakhstan">Kazakhstan</option> 
							<option value="Kenya">Kenya</option> 
							<option value="Kiribati">Kiribati</option> 
							<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
							<option value="Korea, Republic of">Korea, Republic of</option> 
							<option value="Kuwait">Kuwait</option> 
							<option value="Kyrgyzstan">Kyrgyzstan</option> 
							<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
							<option value="Latvia">Latvia</option> 
							<option value="Lebanon">Lebanon</option> 
							<option value="Lesotho">Lesotho</option> 
							<option value="Liberia">Liberia</option> 
							<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
							<option value="Liechtenstein">Liechtenstein</option> 
							<option value="Lithuania">Lithuania</option> 
							<option value="Luxembourg">Luxembourg</option> 
							<option value="Macao">Macao</option> 
							<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
							<option value="Madagascar">Madagascar</option> 
							<option value="Malawi">Malawi</option> 
							<option value="Malaysia">Malaysia</option> 
							<option value="Maldives">Maldives</option> 
							<option value="Mali">Mali</option> 
							<option value="Malta">Malta</option> 
							<option value="Marshall Islands">Marshall Islands</option> 
							<option value="Martinique">Martinique</option> 
							<option value="Mauritania">Mauritania</option> 
							<option value="Mauritius">Mauritius</option> 
							<option value="Mayotte">Mayotte</option> 
							<option value="Mexico">Mexico</option> 
							<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
							<option value="Moldova, Republic of">Moldova, Republic of</option> 
							<option value="Monaco">Monaco</option> 
							<option value="Mongolia">Mongolia</option> 
							<option value="Montserrat">Montserrat</option> 
							<option value="Morocco">Morocco</option> 
							<option value="Mozambique">Mozambique</option> 
							<option value="Myanmar">Myanmar</option> 
							<option value="Namibia">Namibia</option> 
							<option value="Nauru">Nauru</option> 
							<option value="Nepal">Nepal</option> 
							<option value="Netherlands">Netherlands</option> 
							<option value="Netherlands Antilles">Netherlands Antilles</option> 
							<option value="New Caledonia">New Caledonia</option> 
							<option value="New Zealand">New Zealand</option> 
							<option value="Nicaragua">Nicaragua</option> 
							<option value="Niger">Niger</option> 
							<option value="Nigeria">Nigeria</option> 
							<option value="Niue">Niue</option> 
							<option value="Norfolk Island">Norfolk Island</option> 
							<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
							<option value="Norway">Norway</option> 
							<option value="Oman">Oman</option> 
							<option value="Pakistan">Pakistan</option> 
							<option value="Palau">Palau</option> 
							<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
							<option value="Panama">Panama</option> 
							<option value="Papua New Guinea">Papua New Guinea</option> 
							<option value="Paraguay">Paraguay</option> 
							<option value="Peru">Peru</option> 
							<option value="Philippines">Philippines</option> 
							<option value="Pitcairn">Pitcairn</option> 
							<option value="Poland">Poland</option> 
							<option value="Portugal">Portugal</option> 
							<option value="Puerto Rico">Puerto Rico</option> 
							<option value="Qatar">Qatar</option> 
							<option value="Reunion">Reunion</option> 
							<option value="Romania">Romania</option> 
							<option value="Russian Federation">Russian Federation</option> 
							<option value="Rwanda">Rwanda</option> 
							<option value="Saint Helena">Saint Helena</option> 
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
							<option value="Saint Lucia">Saint Lucia</option> 
							<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
							<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
							<option value="Samoa">Samoa</option> 
							<option value="San Marino">San Marino</option> 
							<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
							<option value="Saudi Arabia">Saudi Arabia</option> 
							<option value="Senegal">Senegal</option> 
							<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
							<option value="Seychelles">Seychelles</option> 
							<option value="Sierra Leone">Sierra Leone</option> 
							<option value="Singapore">Singapore</option> 
							<option value="Slovakia">Slovakia</option> 
							<option value="Slovenia">Slovenia</option> 
							<option value="Solomon Islands">Solomon Islands</option> 
							<option value="Somalia">Somalia</option> 
							<option value="South Africa">South Africa</option> 
							<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
							<option value="Spain">Spain</option> 
							<option value="Sri Lanka">Sri Lanka</option> 
							<option value="Sudan">Sudan</option> 
							<option value="Suriname">Suriname</option> 
							<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
							<option value="Swaziland">Swaziland</option> 
							<option value="Sweden">Sweden</option> 
							<option value="Switzerland">Switzerland</option> 
							<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
							<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
							<option value="Tajikistan">Tajikistan</option> 
							<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
							<option value="Thailand">Thailand</option> 
							<option value="Timor-leste">Timor-leste</option> 
							<option value="Togo">Togo</option> 
							<option value="Tokelau">Tokelau</option> 
							<option value="Tonga">Tonga</option> 
							<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
							<option value="Tunisia">Tunisia</option> 
							<option value="Turkey">Turkey</option> 
							<option value="Turkmenistan">Turkmenistan</option> 
							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
							<option value="Tuvalu">Tuvalu</option> 
							<option value="Uganda">Uganda</option> 
							<option value="Ukraine">Ukraine</option> 
							<option value="United Arab Emirates">United Arab Emirates</option> 
							<option value="United Kingdom">United Kingdom</option> 
							<option value="United States">United States</option> 
							<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
							<option value="Uruguay">Uruguay</option> 
							<option value="Uzbekistan">Uzbekistan</option> 
							<option value="Vanuatu">Vanuatu</option> 
							<option value="Venezuela">Venezuela</option> 
							<option value="Viet Nam">Viet Nam</option> 
							<option value="Virgin Islands, British">Virgin Islands, British</option> 
							<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
							<option value="Wallis and Futuna">Wallis and Futuna</option> 
							<option value="Western Sahara">Western Sahara</option> 
							<option value="Yemen">Yemen</option> 
							<option value="Zambia">Zambia</option> 
							<option value="Zimbabwe">Zimbabwe</option>
		                </select>
		              </div>
		            </div>
		          </div>
							<br>

		          <div class="form-row">
		            <label class="col-lg-8 control-label">Language:</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control" name="edit_language">
		                	<option value="<?php echo $language?>" selected="selected"><?php echo $language?></option>
		                	<option value="Afrikanns">Afrikanns</option>
							<option value="Albanian">Albanian</option>
							<option value="Arabic">Arabic</option>
							<option value="Armenian">Armenian</option>
							<option value="Basque">Basque</option>
							<option value="Bengali">Bengali</option>
							<option value="Bulgarian">Bulgarian</option>
							<option value="Catalan">Catalan</option>
							<option value="Cambodian">Cambodian</option>
							<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
							<option value="Croation">Croation</option>
							<option value="Czech">Czech</option>
							<option value="Danish">Danish</option>
							<option value="Dutch">Dutch</option>
							<option value="English">English</option>
							<option value="Estonian">Estonian</option>
							<option value="Fiji">Fiji</option>
							<option value="Finnish">Finnish</option>
							<option value="French">French</option>
							<option value="Georgian">Georgian</option>
							<option value="German">German</option>
							<option value="Greek">Greek</option>
							<option value="Gujarati">Gujarati</option>
							<option value="Hebrew">Hebrew</option>
							<option value="Hindi">Hindi</option>
							<option value="Hungarian">Hungarian</option>
							<option value="Icelandic">Icelandic</option>
							<option value="Indonesian">Indonesian</option>
							<option value="Irish">Irish</option>
							<option value="Italian">Italian</option>
							<option value="Japanese">Japanese</option>
							<option value="Javanese">Javanese</option>
							<option value="Korean">Korean</option>
							<option value="Latin">Latin</option>
							<option value="Latvian">Latvian</option>
							<option value="Lithuanian">Lithuanian</option>
							<option value="Macedonian">Macedonian</option>
							<option value="Malay">Malay</option>
							<option value="Malayalam">Malayalam</option>
							<option value="Maltese">Maltese</option>
							<option value="Maori">Maori</option>
							<option value="Marathi">Marathi</option>
							<option value="Mongolian">Mongolian</option>
							<option value="Nepali">Nepali</option>
							<option value="Norwegian">Norwegian</option>
							<option value="Persian">Persian</option>
							<option value="Polish">Polish</option>
							<option value="Portuguese">Portuguese</option>
							<option value="Punjabi">Punjabi</option>
							<option value="Quechua">Quechua</option>
							<option value="Romanian">Romanian</option>
							<option value="Russian">Russian</option>
							<option value="Samoan">Samoan</option>
							<option value="Serbian">Serbian</option>
							<option value="Slovak">Slovak</option>
							<option value="Slovenian">Slovenian</option>
							<option value="Spanish">Spanish</option>
							<option value="Swahili">Swahili</option>
							<option value="Swedish ">Swedish </option>
							<option value="Tamil">Tamil</option>
							<option value="Tatar">Tatar</option>
							<option value="Telugu">Telugu</option>
							<option value="Thai">Thai</option>
							<option value="Tibetan">Tibetan</option>
							<option value="Tonga">Tonga</option>
							<option value="Turkish">Turkish</option>
							<option value="Ukranian">Ukranian</option>
							<option value="Urdu">Urdu</option>
							<option value="Uzbek">Uzbek</option>
							<option value="Vietnamese">Vietnamese</option>
							<option value="Welsh">Welsh</option>
							<option value="Xhosa">Xhosa</option>
		                </select>
		              </div>
		            </div>
		          </div>
							<br>

		          <div class="form-row">
		            <label class="col-lg-8 control-label">Race:</label>
		            <div class="col-lg-8">
		              <div class="ui-select">
		                <select id="user_country" class="form-control" name="edit_race">
		                	<option value="<?php echo $race?>" selected="selected"><?php echo $race?></option>
		                	<option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
		                	<option value="Asian">Asian</option>
		                	<option value="Black or African American">Black or African American</option>
		                	<option value="Hispanic or Latino">Hispanic or Latino</option>
		                	<option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
		                	<option value="White">White</option>
		                </select>
		              </div>
		            </div>
		          </div>
							<br>
		          <div class="form-row">
		            <label class="col-lg-8 control-label">Email:</label>
		            <div class="col-lg-8">
		              <input class="form-control" type="text" name="edit_email" value="<?php echo $email?>">
		            </div>
		          </div>
				  <br>
				  <div class="form-row">
		            <label class="col-lg-8 control-label">Facebook Messenger:</label>
		            <div class="col-lg-8">
		              <input class="form-control" type="text" name="edit_facebook" value="<?php echo $facebook?>">
		            </div>
		          </div>
				  <br>
		          <div class="form-row">
		            <label class="col-lg-4 control-label">Linkedin:</label>
					<label class="col-lg-8 control-label">Twitter:</label>
		            <div class="col-lg-4">
		              <input class="form-control" type="text" name="edit_linkedin" value="<?php echo $linkedin?>">
		            </div>
		            <div class="col-lg-4">
		              <input class="form-control" type="text" name="edit_twitter" value="<?php echo $twitter?>">
		            </div>
				  </div>
				  <br>
		          <div class="form-row">
		            <label class="col-md-8 control-label"></label>
		            <div class="col-md-8">
		              <input type="submit" class="btn btn-primary" value="Save Changes">
		              &nbsp;&nbsp;&nbsp;
		              <!---<input type="reset" class="btn btn-default" value="Cancel">-->
									<a href="profile.php" target="_parent" class="btn btn-primary">Cancel</a>

		            </div>
		          </div>
		        </form>
		      </div>
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
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// $pic_url = $_POST['edit_pic_url'];
		$firstname = $_POST['edit_name']; 
		$lastname = $_POST['edit_lastname'];
		$bio = $_POST['edit_bio'];
		$education = $_POST['edit_education'];
		$industry = $_POST['edit_industry'];
		$interests = $_POST['edit_interests'];
		$country = $_POST['edit_country'];
		$language = $_POST['edit_language'];
		$race = $_POST['edit_race'];
		$email = $_POST['edit_email'];
		$linkedin = $_POST['edit_linkedin'];
		$twitter = $_POST['edit_twitter'];
		$facebook = $_POST['edit_facebook'];
		$type = $_POST['edit_type'];
		
		//echo $username .'<br>'. 'pic_url' .'<br>'. $firstname .'<br>'. $lastname .'<br>'. $bio .'<br>'. $education .'<br>'. $industry .'<br>'. $interests .'<br>'. $country .'<br>'. $language .'<br>'. $race .'<br>'. $email .'<br>'. $linkedin .'<br>'. $twitter;
		

		$sql = "UPDATE Users SET firstname='$firstname', lastname='$lastname', bio='$bio', education='$education', industry='$industry', interests='$interests', country='$country', type='$type',
			language='$language', race='$race', email='$email', linkedin='$linkedin', twitter='$twitter', facebook='$facebook' WHERE username='$username'";
		// echo '<br><br>' . $sql;	
		
		if ($conn->query($sql) === TRUE) {
	    	$URL="profile.php";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

		} else {
	    	// echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>