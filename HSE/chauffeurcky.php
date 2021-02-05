<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:33 GMT -->
<head>        
        <!-- META SECTION -->
        <title>HSE EVENEMENTS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                  
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR --> 

         <?php include("asidecky.php") ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                     
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="administratorcky.php">Home</a></li>
                    <li><a href="#">Informations</a></li>
                    <li class="active">Form Validation</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <span> <i class="fa fa-bars"></i>Saisissez vos informations</span>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="block">                                                 
                                <form  role="form" class="form-horizontal" action="enregistrercky.php" method="POST"> 


                 <div class="form-group">
                 <div class="col-md-3">
                    Matricule : <br>
     <input name="mat" type="text" class=" form-control"/>
                                            
                                        </div>
                                     
                 <div class="col-md-3"> Nom : <br>
     <input name="nc" type="text" class=" form-control"/>
                                            
                                       
                                    </div> 

                 <div class="col-md-3"> Prénom : <br>
     <input name="pc" type="text" class=" form-control"/>
                                            
                                        </div>   

                                <div class="col-md-3"> Telephone : <br>
     <input name="pc" type="text" class=" form-control"/>
                                            
                                        </div>
                                </div>    
   
                               
                               
                              
                 

                 <div class="col-md-12">
      <div class="btn-group pull-right">
                                        <div class="btn pull-right">
                                         
                                        <button class="btn btn-success" type="submit">Ajouter</button>
                                
                                    </div>    
                                    <div class="btn pull-right">
                                         
                                        <button class="btn btn-danger" type="cancel">Annuler</button>
                                
                                    </div>      
                                
                                    </div>
                                            
                                        </div>
                                </div> 
                                </form>

                                 

                            
                            </div>                                               
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>                       
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-12">

                          

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
        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->          
        
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:34 GMT -->
</html>






