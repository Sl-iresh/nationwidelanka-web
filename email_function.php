<?php

function sendEmail($to, $subject, $htmlContent, $from) {
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $from . "\r\n";

    // Send email
    if(mail($to, $subject, $htmlContent, $headers)){
        echo "Email sent successfully to $to";
    } else {
        echo "Email sending failed.";
    }
}
?>
