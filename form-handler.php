<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'shresthaj187@gmail.com';
$email_subject ='jifkjk';
$email_body = "User Name: $name.\n".
              "User Email: $name.\n".
              "User Message: $name.\n";

$to = 'jakjk@gmail.com';

$headers = "Form: $email_form \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>