<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include('connect.php');
$matricule = $_POST['mati'];
$seb = $_POST['seb'];
$entreprise = $_POST['entreprise'];
$evenement = $_POST['event'];
$shift = $_POST['shift'];
$site = $_POST['site'];
$date= $_POST['dat'];
$heure= $_POST['heure'];
$lieu= $_POST['lieu'];
$victime= $_POST['victime'];
$cause= $_POST['cause'];
$degat= $_POST['degat'];
$fonction= $_POST['fc'];
$immatriculation= $_POST['immatriculation'];
$description= $_POST['description'];
$imme= $_POST['ai'];
$preventi= $_POST['ap'];
$lieux= $_POST['lieux'];
$observation= $_POST['observation'];
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
    header('location:datauser.php?msg=Insertion bien effectuée');
}
else{
	echo "Aucune insertion effectuée, contactez votre Administrateur";

    //header('location:indexuser.php?msg=Insertion bien effectuée');
}




 ?>

