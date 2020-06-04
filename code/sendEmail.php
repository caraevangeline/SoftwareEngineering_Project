<?php

	$email = "abothulallavanya@gmail.com";
	include("class.phpmailer.php");
	include("class.smtp.php");
	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->Host = "smtp.gmail.com"; // specify main and backup server
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587; // set the port to use
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "jyotsnakanikella@gmail.com"; // your SMTP username or your gmail username
	$mail->Password = "jyo123456"; // your SMTP password or your gmail password
	$from = "jyostnakanikella@gmail.com"; // Reply to this email
	$to=$email; // Recipients email ID
	$name="manasa"; // Recipient's name
	$mail->From = $from;
	$mail->FromName = ""; // Name to indicate where the email came from when the recepient received
	$mail->AddAddress($to,$name);
	$mail->AddReplyTo($from,"");
	$mail->WordWrap = 50; // set word wrap
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "Verification Mail";
	$mail->Body = "VerificationLink:<br/> http://outflaretechnologies.com/php/Thrivefish/Admin/verify.php?email=".$email."&val=<br/><br/>"; //HTML Body
	$mail->AltBody = "VerificationLink:<br/> http://outflaretechnologies.com/php/Thrivefish/Admin/verify.php?email=".$email."&val=<br/><br/>";//Text Body
	if(!$mail->Send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
		echo "Message has been sent";
	}
?>
