 <?php 
 include("updates/include/db.php");
 include("updates/include/function_escape.php");
 session_start();
 if (isset($_POST['envoyer'])) {
$user=escape($_POST['user']);
$pass=escape($_POST['pass']);


 $query= "SELECT * FROM login WHERE user='$user'";
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
      header('location:updates/contenu.php');

    

      
 }
 else {
    header('location:error.php?msg=Vos informations sont incorrectes, ressayez!');

}
  }
  
 ?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:08 GMT -->
<head>        
        <!-- META SECTION -->
        <title>HSE EVENEMENTS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
<p align="center" style="float"> <img src="img/ums.png"  class="auto-style2" height="80" width="355" /><br /></p>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenue dans HSE EVENEMENTS</strong>, Connectez-Vous</div>
                    <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                        <input type="text" name="user" class="form-control" placeholder="Utilisateur" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name= "pass" class="form-control" placeholder="Mot de Passe" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Mot de Pass oublié?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" name="envoyer">Connectez</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2021 - UMS Département SI |Etudes & Développements
                    </div>
                    <div class="pull-right">
                        <a href="#"></a> 
                         
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:08 GMT -->
</html>






