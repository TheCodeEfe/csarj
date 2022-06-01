<?php
require("class.phpmailer.php");

function sendmail($mailadresleri,$konu,$htmlmail,$mailheaders)
{
	//echo "geldi";
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'TLS'; // secure transfer enabled REQUIRED for GMail
	//$mail->SMTPSecure = false;
	//$mail->SMTPAutoTLS = false;
	$mail->Host = "mail.socialapp.co";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->SetLanguage("tr", "phpmailer/language");
	$mail->CharSet  ="utf-8";

	$mail->Username = "info@socialapp.co"; // Mail adresi
	$mail->Password = "felanfilan3"; // Parola
	$mail->SetFrom("info@socialapp.co", "Siteden mail var"); // Mail adresi
	if(strpos($mailadresleri,",") === false)
	{
		//echo "burada";
		$mail->AddAddress($mailadresleri); // Gönderilecek kişi
	}
	else
	{
		$mailler = explode(",",$mailadresleri);
		foreach ($mailler as $key => $value)
		{
			$mail->AddAddress($value);
		}
	}

	$mail->Subject = $konu;
	$mail->Body    = $htmlmail;
	//exit();

	if(!$mail->Send())
	{
		return false;
	                //echo "Mailer Error: ".$mail->ErrorInfo;
	}
	else
	{
		return true;
	                //echo "Message has been sent";
	}
}
?>