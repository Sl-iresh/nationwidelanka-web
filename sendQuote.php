<?php
include 'email_function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get form data
	$formData = json_decode(file_get_contents('php://input'), true);

	// Add your email sending logic here using $formData

	// Example: Construct email content
	$to = 'info@nationwidelanka.com'; // Replace with your email address
	$subject = 'Contact Form Submission';
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
							<td>Name</td>
							<td>' . $formData['name'] . '</td>
					</tr>
					<tr>
							<td>Email</td>
							<td>' . $formData['email'] . '</td>
					</tr>
					<tr>
							<td>Number</td>
							<td>' . $formData['number'] . '</td>
					</tr>
					<tr>
							<td>WhatsApp Number</td>
							<td>' . $formData['whatsappNumber'] . '</td>
					</tr>
					<tr>
							<td>Country</td>
							<td>' . $formData['country'] . '</td>
					</tr>
					<tr>
							<td>Address</td>
							<td>' . $formData['address'] . '</td>
					</tr>
					<tr>
							<td>Arrival Date</td>
							<td>' . $formData['arrival'] . '</td>
					</tr>
					<tr>
							<td>Tour Category</td>
							<td>' . $formData['tour'] . '</td>
					</tr>
					<tr>
							<td>Special Requests and Notes</td>
							<td>' . $formData['special'] . '</td>
					</tr>
			</table>
	</body>
</html>';


	// Set content-type header for sending HTML email
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";









	$to = "info@nationwidelanka.com";
	$from = "info@nationwidelanka.com";


	if (sendEmail($to, $subject,   $htmlContent, $from)) {
		echo "Email sent successfully.";
	} else {
		echo "Email sending failed.";
	}
} else {
	echo 'Invalid request.';
}
