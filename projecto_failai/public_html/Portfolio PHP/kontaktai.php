<?php

if($_POST) {
    $fname = "Vardas";
    $lname = "Pavardė";
    $country = "Šalis";
    $subject = "Žinutė";
    $email = "submit";
    $email_body = "<div>";

    if(isset($_POST['Vardas'])) {
        $fname = filter_var($_POST['Vardas'], FILTER_SANITIZE_STRING);


    if(isset($_POST['submit'])) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['Pavardė'])) {
        $lname = filter_var($_POST['Pavardė'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['Šalis'])) {
        $country = filter_var($_POST['Šalis'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['Žinutė'])) {
        $subject = htmlspecialchars($_POST['Žinutė']);
    }

    if($country == "Lietuva") {
        $recipient = "daugelaite.roberta@gmail.com";
    }
    else if($country == "Latvija") {
        $recipient = "daugelaite.roberta@gmail.com";
    }
    else if($country == "Estija") {
        $recipient = "daugelaite.roberta@gmail.com";
    }
    else {
        $recipient = "daugelaite.roberta@gmail.com";
    }

    $email_body .= "<div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $email . "\r\n";

    if(mail($recipient, $email, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $fname. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}}