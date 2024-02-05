<?php

include 'email_function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $destination = $_POST["destination"];
    $departDate = $_POST["departDate"];
    $returnDate = $_POST["returnDate"];
    $people = $_POST["people"];
    $email = $_POST["email"];
    $whatsappNumber = $_POST["whatsappNumber"];

    // Construct email content
    $subject = "Booking Details";
$message = '<html>
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
                                <td>Destination</td>
                                <td>' . $destination . '</td>
                            </tr>
                            <tr>
                                <td>Depart Date</td>
                                <td>' . $departDate . '</td>
                            </tr>
                            <tr>
                                <td>Return Date</td>
                                <td>' . $returnDate . '</td>
                            </tr>
                            <tr>
                                <td>People</td>
                                <td>' . $people . '</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>' . $email . '</td>
                            </tr>
                            <tr>
                                <td>WhatsApp Number</td>
                                <td>' . $whatsappNumber . '</td>
                            </tr>
                        </table>
                    </body>
                </html>';


    // Send email

$to = "info@nationwidelanka.com";
$htmlContent = "<h1>Hello, World!</h1><p>This is a test HTML email.</p>";
$from = "info@nationwidelanka.com";




    if (sendEmail($to, $subject,   $message, $from)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }




} else {
    echo "Invalid request.";
}









?>
