<?php
$to = 'findmymicrowave@gmail.com';
$email_subject = "New Microwave";
$email_body = "New microwave in:\n\nBuilding: $building\n\nDetails: $room\n\n"
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body);
?>