<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = filter_input('INPUT_POST',$_POST['name'],FILTER_SANITIZE_STRING);
$message = filter_input('INPUT_POST',$_POST['message'],FILTER_SANITIZE_STRING);
$email_address = filter_input('INPUT_POST',$_POST['email'],FILTER_SANITIZE_EMAIL);
$phone = filter_input('INPUT_POST',$_POST['phone'],FILTER_SANITIZE_NUMBER_INT);

// Create the email and send the message
//$to = 'contact@arthurdebarbanson.fr'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to = 'arthurdebarbanason@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email_address \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>