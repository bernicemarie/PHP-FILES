
<?php  include "include/db.php"; ?>
<?php  include "include/header.php"; ?>
<?php  include "include/function_escape.php"; ?>
<?php 
if (isset($_POST['envoyer'])) {
    $user=escape($_POST['user']);
    if (!verifie($user)) {
        echo'<script>
        alert("Votre identifiant n\'est pas valide chez nous,réessayez-encore");
        </script>';
    }
    else {
        header("Location:reset?votre espace de réinitialisation");
    }     
    }
 ?>
<!-- Navigation -->
<?php  include "include/navigation_password.php"; ?>
<!-- Page Content -->
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Mot de Pass oublié?</h2>
                                <h2 class="text-center btn-info">Merci de vous identifier!</h2>
                                <div class="panel-body">
                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="user" placeholder="Votre identifiant" class="form-control"  type="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="envoyer" class="btn btn-lg btn-info btn-block" value="Validez" type="submit">
                                        </div>
                                        <h2>UMS-HSE</h2>
                                    </form>
                                </div><!-- Body-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include "include/footer.php";?>

</div> <!-- /.container -->

