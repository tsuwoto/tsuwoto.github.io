<?php
// Check for empty fields
if(empty($_POST['building'])  		||
   // empty($_POST['email']) 		||
   empty($_POST['room']) 		||
   // empty($_POST['message'])	||
   // !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$building = strip_tags(htmlspecialchars($_POST['building']));
// $email_address = strip_tags(htmlspecialchars($_POST['email']));
$room = strip_tags(htmlspecialchars($_POST['room']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'findmymicrowave@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Microwave";
$email_body = "New microwave in:\n\nBuilding: $building\n\nDetails: $room\n\n"
$headers = "From: findmymicrowave@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
