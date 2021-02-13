<?php use PHPMailer\PHPMailer\PHPMailer; ?>
<?php  include "include/db.php"; ?>
<?php  include "include/header_image.php"; ?>
<?php  include "include/function_escape.php"; ?>
<?php 
require '../vendor/autoload.php';
if (isset($_POST['envoyer'])) {
    $admin=escape('benjamintamba.kamano@ums-cky.com');
    $user=$_POST['user'];
    $length=20;
    $token=bin2hex(openssl_random_pseudo_bytes($length));
    if (verifie($user)) {
        if ($stmt=mysqli_prepare($connect,"UPDATE users SET token='$token' WHERE user=?")) {
            mysqli_stmt_bind_param($stmt,"s",$user);
            mysqli_stmt_execute($stmt);
           mysqli_stmt_close($stmt);
                    /**
                     *
                     * configure PHPMailer
                     *
                     *
                     */
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = 'mail01.ums-cky.com';
                    $mail->Username = 'ums1\admin.si'; 
                    $mail->Password = 'G@%i$n20';   
                    $mail->Port = 25;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = false;
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom($admin, 'Benjamin Tamba KAMANO');
                    $mail->addAddress($user);

                    $mail->Subject = 'Réinitialisation du mot de pass';

                    $mail->Body = '<p>Merci de cliquer sur ce lien pour la modification de votre mot de pass

                    <a href="http://localhost/HSE/updates/reset.php?compte='.$user.'&token='.$token.' ">http://localhost/HSE/updates/reset.php?compte='.$user.'&token='.$token.'</a>
                    </p>';
                    if($mail->send()){
                        $emailSent = true;
                         
                    } else{

                        $emailSent = false;

                    }

        }
          
    }
    else {
         echo'<script>
        alert("Votre identifiant n\'est pas valide, merci de réessayez-encore");
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

                           <?php if (!isset($emailSent)):?>
                        
                            
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Mot de Pass oublié?</h2>
                                <p>Vous pouvez reinitialiser votre mot de pass ici!</p>
                                <div class="panel-body">
                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="user" placeholder="Votre adresse électronique" class="form-control"  type="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="envoyer" class="btn btn-lg btn-info btn-block" value="Réinitialiser votre mot de pass" type="submit">
                                            <h2>Entrez une adresse valide</h2>
                                        </div>

                                        <input type="hidden" class="hide" name="token" id="token" value="">
                                    </form>

                                </div><!-- Body-->
                                   <?php else:?>
                                    <h2>Un message vous a été envoyé, merci de vérifier votre boîte aux lettres!</h2>
                                <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include "include/footer.php";?>

</div> <!-- /.container -->

