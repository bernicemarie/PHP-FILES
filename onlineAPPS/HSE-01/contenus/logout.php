
 <?php 
 ob_start();
 include("db.php");
   session_start();
   session_destroy();
   //$_SESSION['user_lastname']=null;
   //$_SESSION['user_firstname']=null;
   //$_SESSION['user_role']=null; 
   header("Location:https://ums-ap.com/accueil/accueil.php");

 ?>