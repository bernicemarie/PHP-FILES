<?php 

include('connect.php');

$id = $_POST['id'];

$seb = $_POST['nseb'];
$imma = $_POST['im'];
 $con=$db->query("SELECT count(id) FROM vehicule WHERE nom_seb='$seb'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!='')
{

 
$insert = $db->exec(" UPDATE vehicule set 
 nom_seb= '$seb', modele= '$imma' WHERE id=".$id) ;

if ($insert ) {
	 
	header('location:dataseb.php'); 
}
else{

	echo "Aucune modification effectuée"; 
}
}
 ?>

  <script type="text/javascript">
  alert('Desolé, ce numéro de Seb existe déjà.');
  window.location.href='listeseb.php';
  </script>
  
