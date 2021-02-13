<?php  include "include/db.php"; ?>
<?php  include "include/header.php"; ?>
<?php  include "include/function_escape.php"; ?>
<?php
    if(isset($_POST['password']) && isset($_POST['confirmPassword'])){

        if($_POST['password'] === $_POST['confirmPassword'] && verifie( $user= escape($_POST['user'])) ){
            $user= escape($_POST['user']);
            $password = escape($_POST['password']);

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));

            if($stmt = mysqli_prepare($connect, "UPDATE users SET  pass='{$hashedPassword}' WHERE user = ?")){

                mysqli_stmt_bind_param($stmt, "s", $user);
                mysqli_stmt_execute($stmt);

                if(mysqli_stmt_affected_rows($stmt) >= 1){

                  header("Location:../index.php");
                }
                mysqli_stmt_close($stmt);


            }

        }
        else {
          echo'  <script>
            alert("Merci de bien verifier vos informations, votre identifiant doit être chez nous et répétez votre nouveau mot de pass");
            </script>';
        }

    }


?>

<!-- Navigation -->
<?php  include "include/navigation_password.php"; ?>
<!-- Page Content -->
<div class="container">

    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">

                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                               <h2 class="text-center">Réinitialisation?</h2>
                                
                                <div class="panel-body">

                                     <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="mail" name="user" placeholder="Entrez votre identifiant" class="form-control"  type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                            <input id="myInput" name="password" placeholder="Entrez votre nouveau mot de pass" class="form-control"  type="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok color-blue"></i></span>
                                            <input id="myInput2" name="confirmPassword" placeholder="Confirmez votre nouveau mot de pass" class="form-control"  type="password" required>
                                        </div>
                                        
                                    <input type="checkbox" onclick="myFunction2()"> Je peux entièrement voir mes mots de pass
                                
           
                                    </div>
                                 
                                    <div class="form-group">
                                        <input name="resetPassword" class="btn btn-lg btn-primary btn-block" value="Réinitialiser" type="submit">
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                    
                                </form>
                                <h2>Bienvenue dans UMS-HSE</h2>
                                </div><!-- Body-->

                                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    

    <?php include "include/footer.php";?>

</div> <!-- /.container -->^
 