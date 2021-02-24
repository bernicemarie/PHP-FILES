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

 mysqli_set_charset( $db , UTF8 );   
 mysqli_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$insert = $db->exec("INSERT INTO chauffeur(matricule,Nom_chauff,Prenom_chauff,fonction_chauff) VALUES('$matricule','$nom','$prenom','$fonction') ");

if ($insert ) {
	 
	header('location:datachauffeur.php?msg=Insertion bien effectuée');
	header('Content-Type: text/html;charset= UTF-8');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

