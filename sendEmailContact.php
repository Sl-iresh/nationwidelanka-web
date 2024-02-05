<?php
include 'email_function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get form data
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	// Construct email content

	$subject = "Contact Form Submission: $subject";


	$htmlContent = '<html>
									 <head>
											 <style>
													 table {
															 width: 100%;
															 border-collapse: collapse;
															 margin-bottom: 20px;
													 }

													 th, td {
															 border: 1px solid #dddddd;
															 text-align: left;
															 padding: 8px;
													 }

													 th {
															 background-color: #f2f2f2;
													 }
											 </style>
									 </head>
									 <body>
											 <table>
													 <tr>
															 <th>Field</th>
															 <th>Value</th>
													 </tr>
													 <tr>
															 <td>name</td>
															 <td>' . $name . '</td>
													 </tr>
													 <tr>
															 <td>email</td>
															 <td>' . $email . '</td>
													 </tr>
													 <tr>
															 <td>subject</td>
															 <td>' . $subject . '</td>
													 </tr>
													 <tr>
															 <td>message</td>
															 <td>' . $message . '</td>
													 </tr>
												
											 </table>
									 </body>
							 </html>';













	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	$to = "info@nationwidelanka.com";
	$from = "info@nationwidelanka.com";


	if (sendEmail($to, $subject,   $htmlContent, $from)) {
		echo "Email sent successfully.";
	} else {
		echo "Email sending failed.";
	}
} else {
	echo "Invalid request.";
}
