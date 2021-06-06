

 <?php 
 include("db.php");
?>

<?php 
function escape($string){
	global $connect;
$controle=mysqli_real_escape_string($connect,trim($string));
return $controle;
}
 ?>
 <!-- verifie ajout-->
<?php 
function verifie($user){
global $connect;
 $query= "SELECT nom FROM users WHERE user='$user'";
 $result= mysqli_query($connect,$query);
 /*if (!$result) {
 	die("La demande est incorrecte".mysqli_error($connect));
 }*/
 if (mysqli_num_rows($result)>0) {
 	return true;
 }
 else{
 	return false;
 }

}
 ?>
  <!-- verifie ajout -->

<!-- displaying message!-->
<?php 
 function set_message($msg){
	$_SESSION['message'] = $msg;
	
	}
	function display_message() {
	
		if(isset($_SESSION['message'])) {
	
			echo $_SESSION['message'];
			unset($_SESSION['message']);
	
		}
	}
?>
<!-- end displaying message!-->

<!--  page redirecting!-->
<?php
function redirect($location){

	return header("Location: $location ");
}
?>
<!-- End page redirecting!-->



<!-- sending contact message!-->
<?php 
function send_message(){
	if (isset($_POST['submit'])) {
		$to= "kamanobenjamin@gmail.com";
		$sujet=escapecontact(wordwrap($_POST['sujet'],100));
		$message=escapecontact($_POST['message']);
		$adresse=escapecontact($_POST['adresse']);
		$copie=escapecontact($_POST['copie']);
		$nom=escapecontact($_POST['nom']);
		
	/* 	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	   require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
		require 'vendor/phpmailer/phpmailer/src/SMTP.php'; */
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = "kamanobenjamin87@gmail.com";
	$mail->Password   = "K@mano87$";
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->AddAddress($to, "Benjamin Marie KAMANO");
	$mail->addAttachment('/image.jpg', 'new.jpg'); 
	$mail->SetFrom( $adresse ,$nom);
	//$mail->AddReplyTo($from_name, "reply-to-name");
	$mail->AddCC($adresse, $nom);
	$mail->Subject =  $sujet;
	$content =   $message ;
	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
		set_message("Désolé votre message n'a pas pû être envoyé");
		redirect("mail.php");
	  var_dump($mail);
	} else {
		set_message("Votre message a été envoyé avec succès <br> Bernice Marie le prendra en charge!");
		redirect("mail.php");
	}
	
	}
}
 ?>
<!-- end sending contact message!-->


<!-- PAGINATION!-->
<?php 
function get_posts_with_pagination($perPage = "3") {
	global $connect;
	$count_query= "SELECT * FROM events";
$count_result= mysqli_query($connect,$count_query);

$rows = mysqli_num_rows($count_result);
//echo $rows;


if(isset($_GET['page'])){ //get page from URL if it's there
    $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers

} else{
    $page = 1;
}
$lastPage = ceil($rows / $perPage);
//echo $lastPage;

if($page < 1){
    $page = 1;
}elseif($page > $lastPage){
    $page = $lastPage;
}

$middleNumbers = '';
$sub1 = $page - 1;
$sub2 = $page - 2;
$add1 = $page + 1;
$add2 = $page + 2;
if($page == 1){
    $middleNumbers .= '<li class="page-item active"><a>'.$page.'</a></li>';
    //$middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1.'</a></li>';
} elseif ($lastPage==2) {
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1.'</a></li>';
    $middleNumbers .= '<li class="page-item active"><a>'.$page.'</a></li>';
}
elseif ($page == $lastPage) {
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1.'</a></li>';
    $middleNumbers .= '<li class="page-item active"><a>'.$page.'</a></li>';
}elseif ($page > 2 && $page < ($lastPage -1)) {
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2.'</a></li>';
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1.'</a></li>';
    $middleNumbers .= '<li class="page-item active"><a>'.$page.'</a></li>';
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1.'</a></li>';
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2.'</a></li>';
} elseif($page > 1 && $page < $lastPage){
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1.'</a></li>';
    $middleNumbers .= '<li class="page-item active"><a>'.$page.'</a></li>';
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1.'</a></li>';
}

$limit = 'LIMIT ' . ($page-1) * $perPage . ',' . $perPage;
$query2 = "SELECT * FROM events". $limit;

$outputPagination = ""; // Initialize the pagination output variable

if($page != 1){
    $prev  = $page - 1;
    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Rétour</a></li>';
}

$outputPagination .= $middleNumbers;

if($page != $lastPage){
    $next = $page + 1;
    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Suivant</a></li>';
}

 
if($lastPage!=0){
	echo "<div class='text-center' style='clear: both;' ><ul class='pagination' >{$outputPagination}</ul></div>";
}

}


?> 

<!-- END PAGINATION!-->
<!-- START SLIDES!-->
<?php 

function get_active_slide(){
	global $connect;
 $query_get_active_slide="SELECT * FROM events ORDER BY id DESC LIMIT 1";
                    $result_get_active_slide=mysqli_query($connect,$query_get_active_slide);
                  if(!$result_get_active_slide){
                    die('Aucune suppression possible'.mysqli_error($connect));
                  }
                  while($row= mysqli_fetch_array($result_get_active_slide)){
                       $post_image=$row['post_image'];
    

$slide_active = <<<DELIMETER
 <div class="item active">
    <img class="slide-image"  height=300 width=200 src="images/{$row['post_image']}" alt="">
</div>
DELIMETER;
        echo $slide_active;
    }
}

function get_slides(){
   global $connect;
 $query_get_slides="SELECT * FROM posts ";
                    $result_get_slides=mysqli_query($connect,$query_get_slides);
                  if(!$result_get_slides){
                    die('Aucune suppression possible'.mysqli_error($connect));
                  }
                  while($row= mysqli_fetch_array($result_get_slides)){
                       $post_image=$row['post_image'];
$slides = <<<DELIMETER
 <div class="item">
    <img class="slide-image"  height=800 width=200 src="images/{$row['post_image']}" alt="">
</div>
DELIMETER;
        echo $slides;
    }
}
 ?>


<!-- END SLIDES!-->


<!-- START GRAPHCOUNT!-->
 <?php 
  
function graphcount($table,$col1,$col2){
	global $connect;
 $query_user= "SELECT * FROM $table WHERE $col1='$col2'";
  $result_user=mysqli_query($connect,$query_user);
                $user_count=mysqli_num_rows($result_user);
                return $user_count;
}


function graphentreprisecount($table){
	global $connect;
 $query_user= "SELECT * FROM $table";
  $result_user=mysqli_query($connect,$query_user);
                $user_count=mysqli_num_rows($result_user);
                return $user_count;
}

               
   ?>
<!-- END GRAPHCOUNT!-->


<!--  Flash message helper -->
 <?php
// Flash message helper
function flash($name = '', $message = '', $class = 'alert alert-success'){
  if(!empty($name)){
    //No message, create it
    if(!empty($message) && empty($_SESSION[$name])){
      if(!empty( $_SESSION[$name])){
          unset( $_SESSION[$name]);
      }
      if(!empty( $_SESSION[$name.'_class'])){
          unset( $_SESSION[$name.'_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name.'_class'] = $class;
    }
    //Message exists, display it
    elseif(!empty($_SESSION[$name]) && empty($message)){
      $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : 'success';
      echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
      unset($_SESSION[$name]);
      unset($_SESSION[$name.'_class']);
    }
  }
}
?>
<!--  End Flash message helper -->



