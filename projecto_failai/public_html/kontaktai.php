<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'daugelaite.roberta@gmail.com';

$email_subject = "New Form Submission";

$email_body = "Jūsų vardas: $name.\n".
                "Jūsų el. paštas: $visitor_email.\n".
                "Žinutė: $message.\n";

$to = "vaidilute20@yahoo.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: kontaktai.html");
