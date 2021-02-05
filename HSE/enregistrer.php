<?php 

include('connect.php');

$matricule = $_POST['mat'];
$nom = $_POST['nc'];
$prenom = $_POST['pc'];
$fonction = $_POST['fc'];
 


 $con=$db->query("SELECT count(id) FROM chauffeur WHERE matricule='$matricule'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de matricule existe déjà.');
  window.location.href='datachauffeur.php';
  </script>
  <?php
}else{


$insert = $db->exec("INSERT INTO chauffeur(matricule,Nom_chauff,Prenom_chauff,fonction_chauff) VALUES('$matricule','$nom','$prenom','$fonction') ") ;

if ($insert ) {
	 
	header('location:datachauffeur.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

