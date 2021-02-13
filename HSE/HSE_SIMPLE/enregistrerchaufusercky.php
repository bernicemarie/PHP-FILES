<?php 

include('connect.php');

$matricule = $_POST['mat'];
$nom = $_POST['nc'];
$prenom = $_POST['pc'];
$fonction = $_POST['fc'];
 


 $con=$db->query("SELECT count(id) FROM chauffeurcky WHERE matricule='$matricule'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de matricule existe déjà.');
  window.location.href='datachauffeurusercky.php';
  </script>
  <?php
}else{


$insert = $db->exec("INSERT INTO chauffeurcky(matricule,Nom_chauff,Prenom_chauff,telephone) VALUES('$matricule','$nom','$prenom','$telephone') ") ;

if ($insert ) {
	 
	header('location:datachauffeurusercky.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

