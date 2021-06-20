<?php 

include('connect.php');

$seb = $_POST['nseb'];
$imma = $_POST['im'];


$con=$db->query("SELECT count(id) FROM vehiculecky WHERE nom_seb='$seb'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de Seb existe déjà.');
  window.location.href='datasebprincipal.php';
  </script>
  <?php
}else{

 
$insert = $db->exec("INSERT INTO vehiculecky(nom_seb,modele) VALUES('$seb','$imma') ") ;

if ($insert ) {
	 
	header('location:datasebprincipal.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée, contactez votre Administrateur Principal";
}
}




 ?>

