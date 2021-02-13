<?php 

include('connect.php');
$id = $_POST['id'];
$evenement = $_POST['evenement'];
$shift = $_POST['shift'];
$site = $_POST['site'];
$date= $_POST['dat'];
$heure= $_POST['heure'];
$lieu= $_POST['lieu'];
$victime= $_POST['victime'];
$fonction= $_POST['fc'];
$immatriculation= $_POST['immatriculation'];
$cause= $_POST['cause'];
$degat= $_POST['degat'];
$description= $_POST['description'];
$imme= $_POST['ai'];
$preventi= $_POST['ap'];
$insert = $db->exec("
	UPDATE events set evenement = '$evenement',shift= '$shift',site= '$site',dat= '$date',heure= '$heure',lieu= '$lieu',victime= '$victime',cause= '$cause',degat= '$degat',description= '$description',action_immed= '$imme',action_prevent= '$preventi',fonction= '$fonction',immatriculation= '$immatriculation' WHERE id=".$id) ;

if ($insert ) {
     
    header('location:datauser.php?msg=Insertion bien effectuée');
}
else{

    echo "Aucune insertion n'a été effectuée";
}
 ?>

