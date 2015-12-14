<?php

// set error reporting level
if (version_compare(phpversion(), '5.3.0', '>=') == 1)
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
	error_reporting(E_ALL & ~E_NOTICE);
  
	//define variables and set to empty
	//variables for error message
	$firstnameErr = $emailErr = $codeErr = $reasonErr = $timeErr = $monthErr= $personalOSErr = $caappErr = $appErr = $teamErr = $yourteamErr = $backgroundErr = $coursesErr = $phoneNumErr = "";
	//variables for input
	$firstname = $email = $phoneNum = $code = $reason = $time = $month = $personalOS[] = $app = $caapp = $yourteam = $team = $background = $courses = $submitButton = "";
	//variables to determine if email should send
	$firstnameValid = $emailValid = $timeValid = $monthValid = $codeValid = $reasonValid = $personalOSValid = $caappValid = $appValid = $yourteamValid = $teamValid = $backgroundValid = $coursesValid = $phoneNumValid = false;

	

		
session_start();
if (isset($_POST['submit'])) {

	//check if name is empty
	if (empty($_POST["firstname"])) {
		$firstnameErr = "Name is required";
		$firstnameValid = false;
	} else {
		$firstname = test_input($_POST["firstname"]);
		if ($firstname=="") {
			$firstnameErr = "Name is required";
			$firstnameValid = false;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
				$firstnameErr = " Only letters and white space allowed"; 
				$firstnameValid = false;
			} else {
				$firstnameValid = true;
			}
		}
	}
	
   //check if email is empty
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$emailValid = false;
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
			$emailValid = false;
		} else {
			$emailValid = true;
		}
	}
 
      //check if phone number is empty
	if (empty($_POST["phoneNum"])) {
		$phoneNumErr = "valid phone number is required";
		$phoneNumValid = false;
	} else {
		$phoneNum = test_input($_POST["phoneNum"]);
		$phoneNumLength = preg_replace("/[^\d]/", "", $phoneNum);
//		echo (" phoneNum is $phoneNum ");
//		echo (strlen($phoneNumLength) );
		// check if phone number format is valid
		if (preg_match("/[^\d+x.()\ -]/",$phoneNum))
		{
			$phoneNumValid = false;
			$phoneNumErr = "Invalid phoneNum format";
//			echo ("Number has wrong characters" );

		} else {
			if (strlen($phoneNumLength)==7 || strlen($phoneNumLength)==10 || strlen($phoneNumLength)==11 || strlen($phoneNumLength)==12 || strlen($phoneNumLength)==13) {
				$phoneNumValid = true;
				
			} else {
				$phoneNumValid = false;
				$phoneNumErr = "Invalid phoneNum format"; 
//				echo ("wrong number of digits");
			}
		}
	}

	//check if the time of classes is selected

	if (empty($_POST["time"])) {

		$timeErr = "Please select time to attend the classes";
		$timeValid = false;
	}
	else
	{
		$time = test_input($_POST['time']);
		if ($time =='1'|| $time == '2') {
			$timeValid = true;
		}
	}
	
	if (empty($_POST["month"])) {

		$monthErr = "Please select month to start classes";
		$monthValid = false;
	}
	else
	{
		$month = test_input($_POST['month']);
		if ($month =='1'|| $month == '2' || $month == '3' || $month == '4' || $month == '5' || $month == '6' || $month == '7' || $month == '8') {
			$monthValid = true;
		}
	}


	//check if reason for coding dropdown is selected
	if (empty($_POST["reason"])) {
		$reasonErr = "Please select your top reason for learning to code";
		$reasonValid = false;
	} else {
		$reason = test_input($_POST['reason']);
		
		//make sure drop down value matches expected values
		if ($reason=='1' || $reason=='2' || $reason=='3' || $reason=='4' ) {
			$reasonValid=true;
		}
		
		//if user chose Other, make sure they entered an explanation
		if ($reason=='4') {
			//check if reason for learning to code is empty
			if (empty($_POST["code"])) {
				$codeErr = " * If you selected 'Other,' please explain";
				$codeValid = false;
			} else {
				$code = test_input($_POST['code']);
				if ($code=="") {
					$codeErr = " * If you selected 'Other,' please explain";
					$codeValid = false;
				} else {
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z0-9 .,?!]*$/", $code)) {
						$codeErr = " * Only letters, spaces, and numbers are allowed"; 
						$codeValid = false;
					} else {
						$codeValid = true;
					}
				}
			}
		} else {
			$codeValid = true;
		}
	}
	
	
	
	//check if user entered what OS they have on their personal devices
	if (empty($_POST["personalOS"])) {
		$personalOSErr = "Please select a value below";
		$personalOSValid = false;
	} else {
		// Counting number of checked checkboxes.
		$theLength = count($_POST['personalOS']);
		// Loop to see which values were checked.
		foreach($_POST['personalOS'] as $selected) {
			//sanitize input from checkboxes
			$personalOS = test_input($selected);
			//check to make sure checkbox values match expected values
			if ($personalOS=='Windows' || $personalOS=='MacOS' || $personalOS=='ChromeOS' || $personalOS=='Linux' || $personalOS=='WindowsMobile' || $personalOS=='iOS' || $personalOS=='Android' || $personalOS=='Other') {
				//echo ("Yeeeeeeeeaaah! $personalOS " );
				$personalOSValid = true;
			} else {
				$personalOSValid = false;
				break;
			}
		}
	} 
	
	
	
	//check if user wants a code abode app
	if (empty($_POST["caapp"])) {
		$caappErr = "Please select a value below";
		$caappValid = false;
	} else {
		$caapp = test_input($_POST["caapp"]);
		
		//make sure radio value matches expected values
		if ($caapp=='1' || $caapp=='2') {
			$caappValid = true;
		} else {
			$caappValid = false;
		}
	}
	
	//check if user has idea for an app
	if (empty($_POST["app"])) {
		$appValid = true;
	} else {
		$app = test_input($_POST['app']);
		if ($app=="") {
			$appValid = true;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ,.?!]*$/",$app)) {
				$appErr = " * Only letters and white space allowed"; 
				$appValid = false;
			} else {
				$appValid = true;
			}
		}
	}	
	
	//check if yourteam is empty
	if (empty($_POST["yourteam"])) {
		$yourteamValid = true;
	} else {
		$yourteam = test_input($_POST['yourteam']);
		if ($yourteam=="") {
			$yourteamValid = true;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ,.?!]*$/",$yourteam)) {
				$yourteamErr = " * Only letters and white space allowed"; 
				$yourteamValid = false;
			} else {
				$yourteamValid = true;
			}
		}
	}	
	
	//check if team is empty
	if (empty($_POST["team"])) {
		$teamErr = "Please enter the type of person you would like to be paired with";
		$teamValid = false;
	} else {
		$team = test_input($_POST['team']);
		if ($team=="") {
			$teamErr = "Please enter the type of person you would like to be paired with";
			$teamValid = false;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ,.?!]*$/",$team)) {
				$teamErr = "Only letters and white space allowed"; 
				$teamValid = false;
//				echo ("is this where we are going wrong?");
			} else {
				$teamValid = true;
			}
		}
	}	
	
	//check if background is empty
	if (empty($_POST["background"])) {
		$backgroundValid = true;
	} else {
		$background = test_input($_POST['background']);
		if ($background=="") {
			$backgroundValid = true;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ,.?!]*$/",$background)) {
				$backgroundErr = " * Only letters and white space allowed"; 
				$backgroundValid = false;
			} else {
				$backgroundValid = true;
			}
		}
	}	
	
	//check if courses is empty
	if (empty($_POST["courses"])) {
		$coursesValid = true;
	} else {
		$courses = test_input($_POST['courses']);
		if ($courses=="") {
			$coursesValid = true;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9 ,.?!]*$/",$courses)) {
				$coursesErr = " * Only letters and white space allowed"; 
				$coursesValid = false;
			} else {
				$coursesValid = true;
			}
		}
	}		
			
			
	
    $sErrors = '';
    if (strlen($firstname) >= 1 and strlen($firstname) <= 25 && $firstnameValid) {
        if (strlen($email) >= 1 and strlen($email) <= 50 && $emailValid) {
			if ($phoneNumValid) {
				if($timeValid){
					if($monthValid){
						if ($reasonValid) {
							if ($personalOSValid) {
								if ($codeValid) {
									if (($caapp == '1' xor $caapp == '2') && $caappValid) {
										if ($appValid) {
											if ($yourteamValid) {
												if ($teamValid) {
													if ($backgroundValid) {
														if ($coursesValid) {
		//											echo "this worked!";
													//if form was submitted successfully, go to a new page
													
													//format reason input
													$theReason = '';
													if ($reason == '1') {
														$theReason = 'Improve my skills';
													} else if ($reason == '2') {
														$theReason = 'Get a job';
													} else if ($reason == '3') {
														$theReason = 'Start a business';
													} else if ($reason == '4') {
														$theReason = 'Other';
													}
													
													//format time input
													$theTime = '';
													if ($time == '1')
													{
														$theTime = 'Day';
													}
													elseif ($time == '2') {
														$theTime = 'Night';
													}

													//format month input
													$theMonth = '';
													if ($month == '1') {
														$theMonth = 'June';
													}
													elseif ($month == '2') {
														$theMonth = 'July';
													}
													elseif ($month == '3') {
														$theMonth = 'August';
													}
													elseif ($month == '4') {
														$theMonth = 'September';
													}
													elseif ($month == '5') {
														$theMonth = 'October';
													}
													elseif ($month == '6') {
														$theMonth = 'November';
													}
													elseif ($month == '7') {
														$theMonth = 'December';
													}
													elseif ($month == '8') {
														$theMonth = 'January';
													}

													//echo ("the reason is $theReason");
													
													//format code abode app
													$theCaapp;
													if ($caapp == '1') {
														$theCaapp = 'Yes';
													} else if ($caapp == '2') {
														$theCaapp = 'No';
													}
													
													//format the personal os variable
													$thePersonalOS = '';
													if(!empty($_POST['personalOS'])) {
														// Counting number of checked checkboxes.
														$theLength = count($_POST['personalOS']);
														// Loop to store and display values of individual checked checkbox.
														foreach($_POST['personalOS'] as $selected) {
															//concatenate checked boxes to a string variable for output
															$thePersonalOS .= $selected . ", ";
														}
													}

													
													
													
													
													//variables for database connection
													$servername = "atl4mysqlv115";
													$username = "codeabode_rex";
													$password = "Phyl063ny175!";
													$dbname = "cadb1";

													try {
														// connect to database
														$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
														// set the PDO error mode to exception
														$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
														
														// prepare sql and bind parameters
														$stmt = $conn->prepare("INSERT INTO Student_list (`ID`, `Name`, `Email`, `Phone`, `Time`,`Month`,`Why Code`, `Reason`, `OS`, `CA App`, `App Idea`, `Team Members`, `Team Qualities`, `Background`, `Courses`) 
														VALUES (NULL, :name, :email, :phone,:time,:month, :whyCode, :reason, :os, :caApp, :appIdea, :teamMembers, :teamQualities, :background, :courses)");
														
														
														$stmt->bindParam(':name', $inputName);
														$stmt->bindParam(':email', $inputEmail);
														$stmt->bindParam(':phone', $inputPhone);
														$stmt->bindParam(':time', $inputTime);
														$stmt->bindParam(':month', $inputMonth);
														$stmt->bindParam(':whyCode', $inputWhyCode);
														$stmt->bindParam(':reason', $inputReason);
														$stmt->bindParam(':os', $inputOs);
														$stmt->bindParam(':caApp', $inputCaApp);
														$stmt->bindParam(':appIdea', $inputAppIdea);
														$stmt->bindParam(':teamMembers', $inputTeamMembers);
														$stmt->bindParam(':teamQualities', $inputTeamQualities);
														$stmt->bindParam(':background', $inputBackground);
														$stmt->bindParam(':courses', $inputCourses);
														
														// insert a row
														$inputName = $firstname;
														$inputEmail = $email;
														$inputPhone = $phoneNum;
														$inputTime = $theTime;
														$inputMonth = $theMonth;
														$inputWhyCode = $theReason;
														$inputReason = $code;
														$inputOs = $thePersonalOS;
														$inputCaApp = $theCaapp;
														$inputAppIdea = $app;
														$inputTeamMembers = $yourteam;
														$inputTeamQualities = $team;
														$inputBackground = $background;
														$inputCourses = $courses;
														$stmt->execute();
														
														//echo "New records created successfully";
														
														
														
														
//														//query from database
//														$query = $conn->query('SELECT * FROM Student_list');
//														
//														//fetch all information from query
//														while ($theCaTest = $query->fetch()) {
//															echo "<h3>" . $theCaTest['Name'] . "</h3>";
//															echo "<p>" . "ID: " . $theCaTest['ID'] . "</p>";
//															echo "<p>" . $theCaTest['Email'] . "</p>";
//															echo "<p>" . $theCaTest['Phone'] . "</p>";
//															echo "<p>" . $theCaTest['Why Code'] . "</p>";
//															echo "<p>" . $theCaTest['Reason'] . "</p>";
//															echo "<p>" . $theCaTest['OS'] . "</p>";
//															echo "<p>" . $theCaTest['CA App'] . "</p>";
//															echo "<p>" . $theCaTest['App Idea'] . "</p>";
//															echo "<p>" . $theCaTest['Team Members'] . "</p>";
//															echo "<p>" . $theCaTest['Team Qualities'] . "</p>";
//															echo "<p>" . $theCaTest['Background'] . "</p>";
//															echo "<p>" . $theCaTest['Courses'] . "</p>";
//														}

													}
													catch(PDOException $e) {
														echo "Error: " . $e->getMessage();
													}
													
													//close db connection
													$conn = null;
													$stmt = null;
	
	
	
	
	
													$formcontent=" *From: $firstname \n *Email: $email \n *Phone Num: $phoneNum  \n *What time do you want to attend classes: $theTime \n *When do you want to start the classes: $theMonth \n *Why do you want to learn to code: $theReason \n If Other, please explain: $code \n *OS of your devices: $thePersonalOS \n *Do you want a CodeAbode app: $theCaapp \n App you want to develop: $app \n Your own team: $your_team \n *Team qualities: $team \n Background: $background \n Courses: $courses" ; 
													//echo "form content: $formcontent";
													$recipient = "scott@codeabode.com";
													$recipient2 = "lauren@nmhmchicago.org";
													$recipient3 = "esharyn@me.com";
													$subject = "CodeAbode Form";
													$mailheader = "From: $email \r\n";
													mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
													mail($recipient2, $subject, $formcontent, $mailheader) or die("Error!");
													mail($recipient3, $subject, $formcontent, $mailheader) or die("Error!");


													
													echo strtr(file_get_contents('success.html'), array());
													exit;
					
												}
												 else{
													$sErrors = 'courses are invalid';
		//											echo "courses $sErrors   ";
												}
											} else {
												$sErrors = 'background is invalid';
		//										echo "background $sErrors   ";
											}
										} else {
											$sErrors = 'team is invalid';
		//									echo "team $sErrors   ";
										}
									} else {
										$sErrors = 'your team is invalid';
		//								echo "yourteam $sErrors   ";
									}
								} else {
									$sErrors = 'app is invalid';
		//							echo "app $sErrors   ";
								}
							} else {
								$sErrors = 'caapp is invalid';
		//						echo "caapp $sErrors   ";
							}
						} else {
							$sErrors = 'code is invalid';
		//					echo "code $sErrors   ";
					   }
					} else {
						$sErrors = 'personalOS is invalid';
//						echo "personalOS $sErrors   ";
				   }
				} else {
					$sErrors = 'reason is invalid';
	//				echo "reason $sErrors   ";
			   }
			} else{
				$sErrors = 'Month is invalid';
			}
		} else {
			$sErrors = "Time is invalid";
		}
	}else {
			$sErrors = 'phone num is invalid';
//				echo "phoneNum $sErrors	";
		}
   } else {
			$sErrors = 'email is invalid';
//			echo "email $sErrors   ";
       }
    } else {
        $sErrors = 'first name is invalid';
 //		echo "firstname $sErrors";
   }

    // display step 2
    $aParams = array(
        '{errors}' => $sErrors,
		'{firstname}' => $firstname,
        '{email}' => $email,
		'{phoneNum}' => $phoneNum,
		'{time}'=> $time,
		'{month}'=> $month,
        '{reason}' => $reason,
		'{personalOS}' => $personalOS,
        '{code}' => $code,
        '{caapp}' => $caapp,
        '{app}' => $app,
        '{yourteam}' => $yourteam,
        '{team}' => $team,
        '{background}' => $background,
        '{courses}' => $courses
    );
//	echo "that definitely did not work";
//	echo "aParams[10] is $aParams.value";
    echo strtr(file_get_contents('error.html'), $aParams);
    exit;
}



// draw main page
//echo strtr(file_get_contents('main.html'), array());

// function to make POST variables more safe
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>