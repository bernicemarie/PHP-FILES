<?php 

include('connect.php');

$id = $_POST['id'];
$compte = $_POST['compte'];
$mdp= $_POST['mdp'];
$role = $_POST['role'];
$poste= $_POST['poste'];
$nom = $_POST['nom'];
$lieu = $_POST['lieu'];
 $con=$db->query("SELECT count(id) FROM login WHERE pass='$mdp'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!='')
{

 
$insert = $db->exec(" UPDATE login set 
 user= '$compte', pass= '$mdp',role= '$role',poste= '$poste',nom= '$nom',lieux= '$lieu' WHERE id=".$id);

if ($insert ) {
	 
	header('location:listeusercky.php'); 
}
else{

	echo "Aucune modification effectuée,contactez votre Administrateur Principal"; 
}
}
 ?>

  <script type="text/javascript">
  alert('Desolé, cet utilisateur existe déjà.');
  window.location.href='listeusercky.php';
  </script>
  
