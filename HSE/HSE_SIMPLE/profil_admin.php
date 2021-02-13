<?php 
session_start();
include('connect.php');

//$id=$_GET['id'];
 
 ?>
 <!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 10:56:31 GMT -->
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   <!--   <script src="jquery-3.2.1.min.js" type="text/javascript"></script>        -->  

                           
    </head>
<script async src="../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9822210293833673",
    enable_page_level_ads: true
  });
</script>






    <body>
         
            
             
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    
                    <!-- SIGN OUT -->

                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                    <!-- MESSAGES -->

                    <li class="dropdown pull-right">               
                         <?php

                         include("admin.php")

                           ?>                   
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                   
                    <!-- END TASKS -->
                </ul>
    
                <!-- END X-NAVIGATION VERTICAL -->       
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="administrator.php">Home</a></li>
                     
                </ul>
                <!-- END BREADCRUMB -->
                
               <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                
                                    <h2 class="panel-title"span style="color:red;"></span><font size="5"><font face="Times New Roman">Profil utilisateur</font></font></h2>
                                    
                              <div class="panel panel-danger">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title"><strong>Statut de l'utilisateur</strong></h3>
                                    
                                </div>
                                
                      <div class="panel-body">
                        <div class="row">
                <div class="col-lg-12">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="POST">
                                        <input  value="3" name="id" class="form-control hidden">
                                                                                    <div class="form-group">
                                            <label>Nom</label>
                                            <input value=" <?php echo $_SESSION['nom']; ?>" class="form-control" Disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Poste</label>
                                            <input class="form-control" value="<?php echo $_SESSION['poste']; ?>" Disabled >
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input type="test" class="form-control" value="<?php echo $_SESSION['role']; ?>" Disabled >
                                        </div>
                                        <div class="form-group">
                                            <input type="test" class="form-control hidden" name="login" value="Benjamin.KAMANO" >
                                        </div>                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                      
                                        <div class="form-group">
                                            <label> Mot de passe</label>
                                            <input type="password" name="pwd2" class="form-control " placeholder="*********" >
                                        </div>
                                        <div class="form-group">
                                            <label>Confirmation</label>
                                            <input type="password" name="pwd" class="form-control " placeholder="********">
                                        </div>
                                        

                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                <button type="submit" class=" btn btn-lg btn-success">Valider</button>
                               <button type="reset" onclick="history.back()" class="btn btn-lg btn-danger ">Annuler</button>
                                </div>
                            </div>
                            </form>
                                                        <!-- /.row (nested) -->
                        </div>
          
                    </div>
            
               
                    
                    </div>
            </div>
                      </div>
                    </div>
       </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>  <strong>Déconnexion</strong> ?</div>
                    <div class="mb-content">
                        <p>Voulez-vous quitter?</p>                    
                        <p>Cliquez sur Non Pour continuer. Cliquez sur Oui Pour Quitter.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Oui</a>
                            <button class="btn btn-default btn-lg mb-control-close">Non</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
 
<!-- Mirrored from themifycloud.com/demos/templates/joli/form-layouts-one-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:33 GMT -->
</html>






