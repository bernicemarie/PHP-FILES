<?php 
 include("updates/include/db.php");
session_start();
 if (isset($_POST['envoyer'])) {
$user=$_POST['user'];
$pass=$_POST['pass'];


 $query= "SELECT * FROM users WHERE user='$user'";
 $result=mysqli_query($connect,$query);
 if (!$result) {
    die('Erreur de connexion,contactez votre administrateur'.mysqli_error($connect));
 }
 while ($row=mysqli_fetch_array($result)) {
    $db_user_id=$row['id'];
    $db_username=$row['user'];
    $db_user_nom=$row['nom'];
    
    $db_password=$row['pass'];
    $db_role=$row['role'];
    $db_user_lieux=$row['lieux'];
    $db_user_poste=$row['poste'];
    
 }
  
   //Password verification!
 if (password_verify($pass,$db_password) ) {
       $_SESSION['nom']=$db_user_nom;
       $_SESSION['nom_compte']=$db_username;
       $_SESSION['role']=$db_role; 
       $_SESSION['lieux']=$db_user_lieux; 
       $_SESSION['poste']=$db_user_poste; 
       if ($_SESSION['role']=='Adminbk') {
           header('Location:administrator.php');
       }
       else if ($_SESSION['role']=='Admincky') {
           header('Location:administratorcky.php');
       }
       else if ($_SESSION['role']=='Userbk') {
           header('Location:utilisateurs.php');
       }
       else
        if ($_SESSION['role']=='Usercky') {
           header('Location:utilisateurscky.php');
       }
       else if
         ($_SESSION['role']=='Owner') {
           header('Location:adminprincipal.php');
       }
     

    

      
 }
 else {
    header('location:error.php?msg=Vos informations sont incorrectes, ressayez!');

}
  }
  
 ?>