<?php
require 'PHPMailerAutoload.php'; //this is original file.

if(isset($_POST['send']))
{
// Fetching data that is entered by the user
$email = "jaypatel.web.co@gmail.com";
$password = "kishan999";

$to_id = "jaypatel.web.co@gmail.com";

$name = $_POST['name'];
$useremail = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "Portfolio Message";
$body = "Name : ".$name. "EmailID: ".$useremail. "Phone Number: ".$phone. "Message: ".$message;
//echo '<p id="para">'.$body.'</p>';

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;

// Email Sending Details
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($body);

	// Success or Failure
	if (!$mail->send()) {
	$error = "Mailer Error: " . $mail->ErrorInfo;
	echo '<p id="para">'.$error.'</p>';
	}
	else {
	echo '<p id="para">Message sent!</p>';
	}

}

else{
echo '<p id="para">Please enter valid data</p>';
}

?>