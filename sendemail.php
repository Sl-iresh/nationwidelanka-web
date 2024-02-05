<?php
include 'email_function.php';

$to = "info@nationwidelanka.com";
$subject = "My HTML Email";
$htmlContent = "<h1>Hello, World!</h1><p>This is a test HTML email.</p>";
$from = "info@nationwidelanka.com";

sendEmail($to, $subject, $htmlContent, $from);
?>
