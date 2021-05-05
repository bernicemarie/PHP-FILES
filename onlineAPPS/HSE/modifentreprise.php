<?php 

include('connect.php');

$id = $_POST['id'];

$ent = $_POST['en'];
$loca = $_POST['lo'];

$con=$db->query("SELECT count(id) FROM entreprise WHERE nom_en='$ent'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!=1)
{

 
$insert = $db->exec(" UPDATE entreprise set 
 nom_en= '$ent', local= '$loca' WHERE id=".$id) ;

if ($insert ) {
	 
	header('location:listeentreprise.php'); 
}
else{

	echo "Aucune modification effectuée"; 
}
}
 ?>

  <script type="text/javascript">
  alert('Desolé, ce numéro de seb existe déjà.');
  window.location.href='listeentreprise.php';
  </script>
  
