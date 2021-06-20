<?php  include "include/db.php"; ?>
<?php  include "include/header_image.php"; ?>
<?php  include "include/function_escape.php"; ?>
<?php



    //if(!isset($_GET['email']) && !isset($_GET['token'])){


       // redirect('index');


   //}

if($stmt = mysqli_prepare($connect, 'SELECT user, nom, token FROM users WHERE token=?')){


    mysqli_stmt_bind_param($stmt, "s", $_GET['token']);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $nom, $user, $token);

    mysqli_stmt_fetch($stmt);

    mysqli_stmt_close($stmt);


//    if($_GET['token'] !== $token || $_GET['email'] !== $email){
//
//        redirect('index');
//
//    }

    if(isset($_POST['password']) && isset($_POST['confirmPassword'])){

        if($_POST['password'] === $_POST['confirmPassword']){

            $password = $_POST['password'];

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));

            if($stmt = mysqli_prepare($connect, "UPDATE users SET token='', pass='{$hashedPassword}' WHERE user = ?")){


                mysqli_stmt_bind_param($stmt, "s", $_GET['compte']);
                mysqli_stmt_execute($stmt);

                if(mysqli_stmt_affected_rows($stmt) >= 1){

                
                  set_message("Modification faite avec succès <button><a href='../index.php'>Connectez-vous maintenant ?</a></button> ");

                }

                mysqli_stmt_close($stmt);


            }


        }
        else {
         echo'<script>
        alert("Tapez un même mot de pass dans les deux champs,merci de réessayez-encore");
        </script>';
    }

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
                    <div class="login-body">
                    <div class="login-title"><strong>Bienvenue dans HSE EVENEMENTS</strong>, Connectez-Vous</div>
                    <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                        <input type="email" name="user" class="form-control" placeholder="Utilisateur" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name= "pass" class="form-control" placeholder="Mot de Passe" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="updates/forgot_password?toi=<?php echo uniqid(true);?>" class="btn btn-link btn-block">Mot de Pass oublié?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" name="envoyer">Connectez</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php";?>

</div> <!-- /.container -->

