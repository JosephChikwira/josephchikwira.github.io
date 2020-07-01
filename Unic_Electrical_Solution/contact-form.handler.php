<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form = 'info@unicelectrical.co.za';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n"
"User Name: $visitor_email.n";
"User Message: $message.\n";

$to = admin@unicelectrical.co.za";
$headers ="From: $email_form \r\n";
$headers ="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: Index.html");
   