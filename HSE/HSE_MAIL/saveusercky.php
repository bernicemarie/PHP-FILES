<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include('connect.php');
$compte = $_POST['compte'];
$mdp= $_POST['mdp'];
$role = $_POST['role'];
$poste= $_POST['poste'];
$nom = $_POST['nom'];
$lieu = $_POST['lieu'];
$mdp=password_hash($mdp,PASSWORD_BCRYPT, array('cost'=>12));
 
$insert = $db->exec("INSERT INTO users(user,pass,role,poste,nom,lieux) 
    VALUES('$compte','$mdp','$role',
    '$poste','$nom','$lieu') ") ;


if ($insert ) {
       
    header('location:listeusercky.php?msg=Insertion bien effectuée');
}
else{
	echo "Aucune insertion effectuée, contactez votre Administrateur Principal";

    //header('location:indexuser.php?msg=Insertion bien effectuée');
}




 ?>

