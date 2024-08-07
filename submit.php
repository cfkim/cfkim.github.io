<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['firstname']);
    $lname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $to = 'christine.fth.kim@gmail.com';
    $headers = 'From: $email';

    if(mail($to, $subject, $body, $headers)){
        header("Location: /thankyou.html");
        exit();
    }else{
        echo "Oops something went wrong!";
    }
}else{
    echo "Invalid request method. Please submit the form."
}
?>