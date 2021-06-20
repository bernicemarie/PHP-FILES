<?php 

include('connect.php');



$id = $_POST['id'];


$matricule = $_POST['mati'];
$seb = $_POST['seb'];
$entreprise = $_POST['entreprise'];
$evenement = $_POST['evenement'];
$shift = $_POST['shift'];
$site = $_POST['site'];
$date= $_POST['dat'];
$heure= $_POST['heure'];
$lieu= $_POST['lieu'];
$victime= $_POST['victime'];
$cause= $_POST['cause'];
$degat= $_POST['degat'];
$description= $_POST['description'];
$imme= $_POST['ai'];
$preventi= $_POST['ap'];


$insert = $db->exec("
	UPDATE events set matricule= '$matricule', nom_seb= '$seb',entreprise= '$entreprise',evenement = '$evenement',shift= '$shift',site= '$site',dat= '$date',heure= '$heure',lieu= '$lieu',cause= '$cause',degat= '$degat',description= '$description',action_immed= '$imme',action_prevent= '$preventi' WHERE id=".$id) ;

if ($insert ) {
     
    header('location:data.php?msg=Insertion bien effectuée');
}
else{

    header('location:data.php?msg=Insertion non effectuée');
}




 ?>

