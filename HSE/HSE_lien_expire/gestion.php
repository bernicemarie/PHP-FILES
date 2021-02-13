<?php
session_start();
include_once 'connect.php';
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$type=$_POST['type'];
//$immatriculation=$_POST['immatriculation'];
$date_emploi=$_POST['date_emploi'];
$matricule=$_POST['matricule'];





$con=$db->query("SELECT count(id_chauffeur) FROM chauffeur WHERE matricule='Chauffeur'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desole,ce chauffeur est deja effectuee.');
  window.location.href='chauffeur.php';
  </script>
  <?php
}else{



if($enreg=$db->exec("INSERT INTO chauffeur(prenom,nom,telephone,adresse,type,date_emploi,matricule) VALUES ('$prenom','$nom','$telephone','$adresse','$type','$date_emploi','$matricule')"))
{
	header('location:chauffeur.php?msg=Chauffeur enregistré avec succes');
}
else
{
header('location:chauffeur.php?msg=Echec lors de votre enregistrement');
}	

}

?>