<?php

/* This code was made using the tutorial on this website: http://form.guide/email-form/php-form-to-email.html */

/*if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}*/
$name = $_POST['Name'];
$sender_email = $_POST['Email'];
$message = $_POST['Message'];

/*if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}*/

$email_from = 'thakkar.anj@husky.neu.edu';
$email_subject = "Someone contacted me through my website!";
$email_body = "You have a new message from: $name.\n".
    "Here is the message:\n $message".
    
$to = "thakkar.anj@husky.neu.edu";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $sender_email \r\n";

mail($to,$email_subject,$email_body,$headers);

/*function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}*/

?> 