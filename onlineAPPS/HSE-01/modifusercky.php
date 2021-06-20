<?php 

include('connect.php');
include('contenus/include/function_escape.php');
$id = escape($_POST['id']);
$compte = escape($_POST['compte']);
$mdp= escape($_POST['mdp']);
$role = escape($_POST['role']);
$poste= escape($_POST['poste']);
$nom = escape($_POST['nom']);
$lieu = escape($_POST['lieu']);
 $con=$db->query("SELECT count(id) FROM users WHERE pass='$mdp'" );
$countresult=$con->fetchColumn();
if($countresult==1 || $countresult!='')
{

 $mdp=password_hash($mdp,PASSWORD_BCRYPT, array('cost'=>12));

$insert = $db->exec(" UPDATE users set 
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
  
