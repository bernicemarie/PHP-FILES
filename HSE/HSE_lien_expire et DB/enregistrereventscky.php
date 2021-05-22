<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include('connect.php');
include('updates/include/function_escape.php');
$matricule = $_POST['mati'];
$seb = $_POST['seb'];
$entreprise = $_POST['entreprise'];
$evenement = $_POST['event'];
$shift = $_POST['shift'];
$site = $_POST['site'];
$date= $_POST['dat'];
$heure= $_POST['heure'];
$lieu= escape($_POST['lieu']);
$victime= escape($_POST['victime']);
$cause= escape($_POST['cause']);
$degat= escape($_POST['degat']);
$fonction= escape($_POST['fc']);
$immatriculation= escape($_POST['immatriculation']);
$description= escape($_POST['description']);
$imme= escape($_POST['ai']);
$preventi= escape($_POST['ap']);
$lieux= escape($_POST['lieux']);
$observation= escape($_POST['observation']);
$insert = $db->exec("INSERT INTO events(matricule,nom_seb,entreprise,evenement,shift,site,dat,heure,lieu,victime,cause,degat,description,action_immed,action_prevent,fonction,immatriculation,lieux,observation) 
    VALUES('$matricule','$seb','$entreprise',
    '$evenement','$shift','$site',
    '$date','$heure',
    '$lieu','$victime',
    '$cause','$degat','$description',
    '$imme','$preventi','$fonction','$immatriculation','$lieux','$observation') ") ;


if ($insert ) {
     $last_id = $db->lastInsertId();
$im='img/image/'.$last_id.'.jpg';     
if(isset($_FILES['photo'])){
move_uploaded_file($_FILES['photo']['tmp_name'], $im);

}
}
else{
	echo "Aucune insertion effectuée, contactez votre Administrateur Principal";

    //header('location:indexuser.php?msg=Insertion bien effectuée');
}




 ?>

