<html>
<head>

</head>
<body>
<?php
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "aooavoov1@gmail.com"; // GMAIL username
	$mail->Password = "059655685"; // GMAIL password
	$mail->From = "aooavoov1@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "ซันสุดหล่อ";  // set from Name
	$mail->Subject = "Test sending mail."; 
	$mail->Body = "<b>Hello</b>";//sent text//

	$mail->AddAddress("vasupol.ch@ku.th", "Mr.Vasupol Chongsathidkiet"); // to Address

	// $mail->AddAttachment("thaicreate/myfile.zip");//send file//
	// $mail->AddAttachment("thaicreate/myfile2.zip");//send file/

	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send(); 
?>
</body>
</html>