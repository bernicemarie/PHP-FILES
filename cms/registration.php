<?php  include "include/db.php"; ?>
 <?php  include "include/header.php"; ?>
 <?php 
    if (isset($_GET['langue']) && !empty($_GET['langue'])) {
      $_SESSION['langue']= $_GET['langue'];
      if (isset($_SESSION['langue']) && $_SESSION['langue']!= $_GET['langue']) {
       echo'<script type="text/javascript">location.reload();</script>';
        
      }
      }
       if (isset($_SESSION['langue'])){
        include"langues/".$_SESSION['langue'].".php";
       }
       else{
        include"langues/francais.php";
       }
    
  ?>
 <?php 
  if (isset($_POST['submit'])) {
    $utilisateur=$_POST['utilisateur'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if (verification($utilisateur,$email)) {
       $message="Ces informations existent déjà";
    }
    else if
    (!empty($utilisateur) && !empty($email) && !empty($password))   {
    $utilisateur=mysqli_real_escape_string($connect,$utilisateur);
    $email=mysqli_real_escape_string($connect,$email);
    $password=mysqli_real_escape_string($connect,$password);
    $password=password_hash($password,PASSWORD_BCRYPT, array('cost'=>12));
    $query_registration="INSERT INTO users(username,user_password,user_email,user_role)
     VALUES('$utilisateur','$password','$email','user')";
     $query_registration_result=mysqli_query($connect,$query_registration);
     if (!$query_registration_result) {
         die('Aucune inscription possible'.mysqli_error($connect));
     }
     $message="Vous avez été enregistré(e) avec succès";
    } 

    else{
     $message="Aucun champ ne doit être vide!";

    }
  } else{
    $message="";
  }

  ?>


    <!-- Navigation -->
    
    <?php  include "include/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
      <form method="get" class="navbar-form navbar-right" action="" id="langueform">
        <div class="form-group">
        <select class="form-control" name="langue" onChange="changelangue()" class="form-control">
            <option value="francais"<?php if (isset($_SESSION['langue']) && $_SESSION['langue']=='francais') { echo "selected";} ?>>Français</option>
            <option value="english"<?php if (isset($_SESSION['langue']) && $_SESSION['langue']=='english') { echo "selected";} ?>>English</option>
            <option value="spanish"<?php if (isset($_SESSION['langue']) && $_SESSION['langue']=='spanish') { echo "selected";} ?>>Espanol</option>
          </select>
        </div>
      </form>
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1 class="text-center btn-info"><?php echo _REGISTER; ?></h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <h2 class="text-center btn-danger"><?php echo "$message"; ?></h2>
                        <div class="form-group">
                            <label for="username" class="sr-only">Nom Utilisateur</label>
                            <input type="text" name="utilisateur" id="username" class="form-control" placeholder="<?php echo _USERNAME; ?>">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo _EMAIL; ?> devthings@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Mot de Pass</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="<?php echo _PASSWORD; ?>">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-info btn-lg btn-block" value="<?php echo _VALIDATE; ?>">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
</section>


        <hr>
<script>
  function changelangue(){

document.getElementById('langueform').submit();

  }
</script>


<?php include "include/footer.php";?>
