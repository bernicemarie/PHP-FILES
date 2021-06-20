<?php 

include('connect.php');

$id = $_POST['id'];

$matricule = $_POST['mat'];
$nom = $_POST['nc'];
$prenom = $_POST['pc'];
$fonction = $_POST['fc'];

$con=$db->query("SELECT count(id) FROM chauffeur WHERE matricule='$matricule'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!=1)
{

 
$insert = $db->exec(" UPDATE chauffeur set 
 matricule='$matricule',nom_chauff='$nom',
  prenom_chauff='$prenom', fonction_chauff='$fonction'
	WHERE id=".$id) ;

if ($insert ) {
	 
	header('location:listechauffeur.php'); 
}
else{

	header('location:listechauffeur.php'); 
}
}
 ?>

  <script type="text/javascript">
  alert('Desolé, ce numéro de seb existe déjà.');
  window.location.href='listechauffeur.php';

