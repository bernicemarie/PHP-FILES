<?php 

include('connect.php');

$ent = $_POST['en'];
$loca = $_POST['lo'];

$con=$db->query("SELECT count(id) FROM entreprise WHERE nom_en='$ent'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, cette entreprise existe déjà.');
  window.location.href='dataentreprise.php';
  </script>
  <?php
}else{



 
$insert = $db->exec("INSERT INTO entreprise(nom_en,local) VALUES('$ent','$loca') ") ;

if ($insert ) {
	 
	header('location:dataentreprise.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

