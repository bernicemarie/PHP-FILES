
 <!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 10:56:31 GMT -->
<head>        
        <!-- META SECTION -->
        <title>HSE EVENEMENTS </title>            
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">   
                     
                  <?php 
include ("asideprincipal.php")
                   ?>

                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            <!-- topnav   -->   
            
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

                     <?php 
                    include ("usercky.php")
                       ?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                   
                    <!-- END TASKS -->
                </ul>
    
                <!-- END X-NAVIGATION VERTICAL -->                

            <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                                    
                    <li class="active"><h4>A Propos de l'application HSE-EVENEMENTS </h4></li>
                </ul>
                <!-- END BREADCRUMB -->  
       
                <!-- PAGE CONTENT WRAPPER -->
                <div class="row">
                        <div class="col-md-10">
               <!--  <div class="panel panel-colorful"> -->
                
                    
                    
                    <!-- <div class="panel-heading ui-draggable-handle"> -->
                    <div class="card" >
                                    <div class="card-title"align="center">
                                    </BR> </BR>
                                        <h4><b> HSE-EVENEMENTS V 1.0 </b></h4>
                                    </div>
 

</BR> </BR> </BR>
HSE-EVENEMENTS V 1.0 est une application web qui permet d’avoir une vue</br> sur un certains nombres d'évènements qui se produisent sur le terrain.</br>  
L'application satisfait aux besoins ci-après:  
</br>- D’enregistrer les différents évènements qui peuvent se produire sur le terrain.
</br>- D’afficher la liste des évènements qui ont été enregistrés.
</br>- D’afficher le nombre de degats realisés.
</br>- D’afficher le nombre d'évènements par site.
</br>- D’enregistrer un nouveau chauffeur.
</br>- D’enregistrer un nouveau Seb.
</br>- D’enregistrer une nouvelle Entreprise.
</br>- D’afficher le nombre de Chauffeurs.
</br>- D’afficher le nombre de Seb ayant enregistré des dégats.
</br>- D’afficher le nombre d'Entreprise ayant enregistré des dégats.
</br>- D’afficher le nombre d'affrété ayant enregistré des dégats.
</br>- D'assurer le suivi des utilisateurs de l'application.
</br> Cette application satisfait un certain nombre de besoins donc elle est loin d'être parfaite et pourrait</br> éventuellement faire l'objet d'une évolution future selon les besoins qui seront sollicités.

                   
                     </div>
                     </div>
                     </div>
 </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
 
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="foot">
                                    <p>© 2019 - UMS Département Système d'Information | Etudes & Développements </p>
                                </div>
                            </div>
                        </div>
                 

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

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 10:58:42 GMT -->
</html>