<?php  use PHPMailer\PHPMailer\PHPMailer;
 require_once __DIR__ ."/vendor/autoload.php";
 
function set_message($msg){
	session_start();
	$_SESSION['message'] = $msg;
	
	}
	function display_message() {
	
		if(isset($_SESSION['message'])) {
	
			echo $_SESSION['message'];
			unset($_SESSION['message']);
	
		}
	}
?>
<!-- sending contact message!-->
<?php 
function send_message(){
	if (isset($_POST['envoyer'])) {
		$to= "kamanobenjamin@gmail.com";
		$nom=($_POST['nom']);
		$adresse=($_POST['adresse']);
		$message=($_POST['message']);
		 
	/* 	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	   require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
		require 'vendor/phpmailer/phpmailer/src/SMTP.php'; */
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;  
	$mail->SMTPAuth   = FALSE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 25;
	$mail->Host       = 'mail01.ums-cky.com';
	$mail->Username   = 'ums1\admin.si'; 
	$mail->Password   = 'G@%i$n20';   
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->AddAddress($to, "Benjamin Marie KAMANO");
	$mail->addAttachment('/image.jpg', 'new.jpg'); 
	$mail->SetFrom( $adresse ,$nom);
	//$mail->AddReplyTo($from_name, "reply-to-name");
	$mail->AddCC($adresse, $nom);
	$content =$message ;
	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
		set_message("Désolé votre message n'a pas pû être envoyé");
		header("index.php? message n'on envoyé");
	  var_dump($mail);
	} else {
		set_message("Votre message a été envoyé avec succès <br> Bernice Marie le prendra en charge!");
		header("index.php?message bien envoyé");
	}
	
	}
}
 ?>
<!-- end sending contact message!-->