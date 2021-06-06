<?php 

include('connect.php');

$matricule = $_POST['mat'];
$nom = $_POST['nc'];
$prenom = $_POST['pc'];
$telephone= $_POST['fc'];


 $con=$db->query("SELECT count(id) FROM chauffeur WHERE matricule='$matricule'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de matricule existe déjà.');
  window.location.href='datachauffeuruser.php';
  </script>
  <?php
}else{


$insert = $db->exec("INSERT INTO chauffeur(matricule,Nom_chauff,Prenom_chauff,fonction_chauff) VALUES('$matricule','$nom','$prenom','$telephone') ") ;

if ($insert ) {
	 
	header('location:datachauffeuruser.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

