<?
//include"bin/config.inc.php";
include "mailler/mail_gonder.php";
$Posted = $_POST;

if($Posted['islem'] == "forms")
{
$err = 0;
/*
$msg  = "Mesajınız gönderildi. En kısa zamanda sizinle irtibata geçilecektir.";
$datax['err']  = $err;
$datax['msg']  = $msg;
$datax['data'] = $data;
echo json_encode($datax);
exit();
*/
if (strlen($Posted['fullName']) <= 3)
{
	$err  = 1;
	$msg  = "Lütfen Adınızı ve soyadınızı yazınız.";
	$data = "adi";
}

/*
elseif (strlen($Posted['mesaj']) <= 3)
{
	$err  = 1;
	$msg  = "Lütfen bir mesaj yazınız ";
	$data = "mesaj";
}
*/




if ($err == 0)
{

	$mailadresleri = "efe@efeden.net";
	$konu   = "Siteden Mail var!!!";
	$tarih  = date("d-m-Y");
	$kimlik = $_SERVER['REMOTE_ADDR'];
	$pathr  = $_SERVER['HTTP_HOST'];
	
	$mailheaders = "From: ";
	$mailheaders .= $pathr." Site'den <apache@izmirreklam.com>";
	$mailheaders .= "\n";
	$mailheaders .= "Reply-To: ";
	$mailheaders .= $Posted['eposta'];
	$mailheaders .= "\n";
	$mailheaders .= "Content-Type: text/html; charset=utf-8";
	$mailheaders .= "\n";
	
	
	$htmlmail = <<<end_of_html_mail
	
	<div><b> Mesaj gönderen isim:</b> $Posted[fullName] </div>
	<div> <b>Konu:</b>$Posted[subject]</div>
	<div> <b>Telefon:</b>$Posted[phone]</div>
	<div> <b>Mesajı:</b> $Posted[message] </div>
	<div><b> Mesaj Gönderim Tarihi: </b>$tarih </div>
end_of_html_mail;
	
	if(sendmail($mailadresleri,$konu,$htmlmail,$mailheaders))
	{
		$err  = 0;
		$msg  = "Mesajınız gönderildi. En kısa zamanda sizinle irtibata geçilecektir.";
		$data = "";
	}
	else 
	{
		$err  = 1;
		$msg  = "Mesaj göndermede bir sorun oluştu lütfen daha sonra tekrar deneyein!";
		$data = "";
	}
	
}

$datax['err']  = $err;
$datax['msg']  = $msg;
$datax['data'] = $data;
echo json_encode($datax);
}
?>