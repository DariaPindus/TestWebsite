<?php
    $name = htmlspecialchars($_POST['name']);
    $email= htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message= htmlspecialchars($_POST['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == ''){
        echo 'Fill all fields';
        exit;
    }
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\n\Reply-to: $email\r\nContent-type: text-html; charset=utf-8\r\n";
    if (mail("daria.pindus@gmail.com", $subject, $message, $headers)){
        echo "Message has been sent!";
    }
    else
        echo "Message was incorrect";
?>