<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: web-design-development-contact.php'); exit;
}
	
// get the posted data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
   
        
// check that a name was entered
if (empty($name))
    $error = 'You must enter your name.';
// check that an email address was entered
elseif (empty($email)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'You must enter a valid email address.';

// check that a message was entered
elseif (empty($message))
    $error = 'You must enter a message.';

		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: web-design-development-contact.php?e='.urlencode($error)); exit;
}

$headers = "From: $email\r\n"; 
$headers .= "Reply-To: $email\r\n";

// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email\n";
$email_content .= "Contact subject: $subject\n";
$email_content .= "Message:\n\n: $message";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
//mail ('hasinitctg@gmail.com', 'MAIL MACHINE BD - Contact Form Submission', $email_content, $headers);
mail ('hasinitctg@gmail.com', 'From Hasin IT ', $email_content, $headers);
	
// send the user back to the form
header('Location: web-design-development-contact.php?s='.urlencode('Thank you for your message. We will contact ASAP.')); exit;

?>