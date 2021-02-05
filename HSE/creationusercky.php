
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    
                        
                    
                      <?php 
                  include("asideprincipal.php")
                       ?>

                   
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
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
                    
                    <!-- SIGN OUT -->

                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                    <!-- MESSAGES -->

                    <li class="dropdown pull-right">
                      
                       

                                         
                        <?php 
                  include("user.php")
                       ?>
                                             
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                   
                    <!-- END TASKS -->
                </ul>
    
                <!-- END X-NAVIGATION VERTICAL -->       
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                     
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                
                                    <h2 class="panel-title"><span class="fa fa-arrow-circle-o-left"></span><font size="5"><font face="Times New Roman">    Enregistrement d'un Utilisateur</font></font></h2>
                                    
                                
                                 </div><br><br><br>

                                                             <form class="form-horizontal" method="post" action="saveusercky.php">
                            <div class="panel panel-success">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title"><strong>Ajouter un nouvel Utilisateur</strong></h3>
                                    
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        
                                        <label class="col-md-3  control-label">NOM</label>
                                        <div class="col-md-6 ">                                            
                                            
                                                
                                                <input type="text" class="form-control" name="nom" required/>
                                            </div>                                            
                                            
                                        </div>

                                    <div class="form-group">
                                        
                                        <label class="col-md-3  control-label">POSTE</label>
                                        <div class="col-md-6 ">                                            
                                            
                                                
                                                <input type="text" class="form-control" name="poste" required/>
                                            </div>                                            
                                            
                                        </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3  control-label">ROLE</label>
                                        <div class="col-md-6 ">   
                                                                                                           
                                            <select class="form-control select" name="role" required>
                                                <option value="">Choisissez</option>
                                                <option value="Owner">Owner</option>
                                                <option value="Admincky">Admincky</option>
                                                <option value="Adminbk">Adminbk</option>
                                                <option value="Usercky">Usercky</option>
                                                <option value="Userbk">Userbk</option>
                                                 
                                                
                                            </select> 
                                           
                                        </div>

                                    </div> 

                                    <div class="form-group">
                                        <label class="col-md-3  control-label">LIEU</label>
                                        <div class="col-md-6 ">   
                                                                                                           
                                            <select class="form-control select"  name="lieu" required>
                                                <option value="">Choisissez</option>
                                                <option value="Conakry">Conakry</option>
                                                <option value="Boke">Boke</option>
                                                
                                                
                                            </select> 
                                           
                                        </div>

                                    </div>                                      
                                      <div class="form-group">
                                        
                                        <label class="col-md-3 control-label">COMPTE</label>
                                        <div class="col-md-6">                                            
                                            
                                                
                                                <input type="text" class="form-control" name="compte" required/>
                                                                                    
                                            
                                        </div></div>   
                                         <div class="form-group">
                                        
                                        <label class="col-md-3 control-label">MOT DE PASSE</label>
                                        <div class="col-md-6">                                            
                                            
                                                
                                                <input type="text" class="form-control" name="mdp" required/>
                                                                                    
                                            
                                        </div></div>   
                                     
                                     
                                     
                                 <div class="form-group">
                      <div class="col-lg-offset-5 col-lg-10">
                        <button class="btn btn-success" type="submit" id='submit' name= "submit">Ajouter</button>
                        <button class="btn btn-danger" type="reset"><a href="creationusercky.php">Annuler</a></button>
                      </div>
                    </div>      



                            </form>
                            
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
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
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






