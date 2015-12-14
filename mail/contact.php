<?php
// Check for empty fields
// if(empty($_POST['name'])  		||
//    empty($_POST['email']) 		||
//    empty($_POST['phone']) 		||
//    empty($_POST['classes'])  ||
//    empty($_POST['questions'])   ||
//    empty($_POST['marketing'])   ||

//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
// 		echo $to2 . " ";
// 		echo $email_subject . " ";
// 		echo $email_body . " ";
// 		echo $headers . " ";
// 		echo "No arguments Provided!";
// 		return false;
//   }





// we have obtained the information in a PHP, next is where to send/hold the information
// these 6 variables hold the values written in html form (sent from client to server)
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$classes = $_POST['classes'];
$questions = $_POST['questions'];
$marketing = $_POST['marketing'];


//insert echo to check - like a log and can insert variables


// Create the email and send the message
$to = 'info@codeabode.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.

$email_subject = "CodeAbode Application: " . $name;
$email_body = "Name: " . $name . "\nEmail: " . $email_address . "\nPhone: " . $phone . "\nWhich session are you interested in: " . $classes . "\nAny additional questions: " . $questions . "\nHow did you hear about us: " . $marketing;
$headers = "From: noreply@codeAbode.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	// Added '.' to make this a string concatenation operation
$result = mail($to, $email_subject, $email_body, $headers);


//insert echo to check - like a log

//mail is sent; just reaching server
if($result == 1) {
	// redirect page to thankYou.html if form was successfully submitted
	header('Location: ../thankYou.php');
   // echo "Application successfully submitted.";
   // return 1;
} else {
   echo "Check your internet connection";
   return 0;
}
		
?>