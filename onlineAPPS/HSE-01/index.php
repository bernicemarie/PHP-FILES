<?php 
 include("contenus/include/db.php");
 include("contenus/include/function_escape.php");
 session_start();
 if (isset($_POST['envoyer'])) {
$user=escape($_POST['user']);
$pass=escape($_POST['pass']);


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
      header('location:contenus/contenu.php');

    

      
 }
 else {
    echo'<script>
        alert("Vos informations saisies ne sont pas valides!");
        </script>';
}
  }
  
 ?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:08 GMT -->
<head>        
        <!-- META SECTION -->
               
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>HSE EVENEMENTS</title>     
        
        <link rel="icon" type="image/*" href="img/ums-img.jpg">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link href="contenus/css/bootstrap.min.css" rel="stylesheet">

        <!-- EOF CSS INCLUDE -->  
        <style>
        body{
            background-image: url('img/ums-img.jpg');
            background-repeat: repeat;
            background-size: cover; 
        background-attachment: fixed;
      


      }
      
       
    </style>                                  
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                    <p align="center" style="float"> <img src="img/ums.png"  class="auto-style2" height="70" width="330" /></p>
                    <h2>UMS-HSE</h2>
                            
                            <div class="well">
                              
                                     
                                 <form action="" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                    <input type="email" name="user" class="form-control" placeholder="Utilisateur" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="myInput" type="password" name= "pass" class="form-control" placeholder="Mot de Passe" required />
                       <div class="btn-info">
                       <input type="checkbox" onclick="myFunction()"> Je peux voir mon mot de pass
                       </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="contenus/forgot_passwords.php?toi=<?php echo uniqid(true);?>" class="btn btn-danger">Mot de Pass oublié?</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block" name="envoyer">Connectez-vous</button>
                    </div>
                </div>
                </form>

                  </div><!-- Body-->
                              
                    <div class="login-footer">
                <div class="pull-left">
                    &copy; 2021-UMS Département SI|Etudes & Développements
                </div>
                 
            </div>
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "contenus/include/footer.php";?>
    
</div> <!-- /.container -->


    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:08 GMT -->
</html>






