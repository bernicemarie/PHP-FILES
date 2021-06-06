<?php 

include('connect.php');

$id = $_POST['id'];

$matricule = $_POST['mat'];
$nom = $_POST['nc'];
$prenom = $_POST['pc'];
$telephone = $_POST['fc'];

$con=$db->query("SELECT count(id) FROM chauffeurcky WHERE matricule='$matricule'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!=1)
{

 
$insert = $db->exec(" UPDATE chauffeurcky set 
 matricule='$matricule',nom_chauff='$nom',
  prenom_chauff='$prenom',telephone='$telephone'
	WHERE id=".$id) ;

if ($insert ) {
	 
	header('location:listechauffeurcky.php'); 
}
else{

	header('location:listechauffeurcky.php'); 
}
}
 ?>

  <script type="text/javascript">
  alert('Desolé, ce numéro de seb existe déjà.');
  window.location.href='listechauffeurcky.php';

