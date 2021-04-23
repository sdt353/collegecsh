<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_form = 'info@deepak.com';

$email_subject = 'New Form Submission ';

$email_body = 'User Naame: $name. \n'.
                'User Email: $visitor_email. \n '.
                'Subject: $subject. \n '.
                'Message: $message. \n ';

$to = 'deepaktatvarthi1997@gmail.com';

$headers ="From: $email_form \r\n";
$headers ="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Locatin: contact.html");
?>