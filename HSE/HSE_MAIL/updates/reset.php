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

                  header("Location:../index.php");


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
                    <div class="panel-body">
                        <div class="text-center">

                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                               <h2 class="text-center">Réinitialisation?</h2>
                                <p>Vous pouvez reinitialiser votre mot de pass ici!</p>
                                <div class="panel-body">

                                     <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                                            <input id="password" name="password" placeholder="Entrez votre nouveau mot de pass" class="form-control"  type="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok color-blue"></i></span>
                                            <input id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre nouveau mot de pass" class="form-control"  type="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input name="resetPassword" class="btn btn-lg btn-primary btn-block" value="Réinitialiser" type="submit">
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>

                                </div><!-- Body-->

                                <h2>Bienvenue!</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <?php include "include/footer.php";?>

</div> <!-- /.container -->
