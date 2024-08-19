<?php
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $subject = $_POST['contact-subject'];
    $message = $_POST['contact-message'];

    // Domain name
    $emailFrom = 'deadcodetutor@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body =
                "User name: $name.\n".
                "User Email: $email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

    $to = 'islamashrafmahmoud5@gmail.com';
    $headers = "From: $emailFrom \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: ContactUs.html");

?>