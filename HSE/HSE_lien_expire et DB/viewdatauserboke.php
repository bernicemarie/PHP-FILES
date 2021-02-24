<?php 
include('connect.php');


$list = $db->query("SELECT * FROM events");
$ligne = $list->fetch();
 ?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/table-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:54 GMT -->
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


            <?php 
    
   include("asideusercky.php");
    
 ?>
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
                     <?php 
                    include ("usercky.php")
                       ?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
              
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
<div class="panel panel-default">
                                 
                                 

                        </div>

                    </div>
                    
                    <div class="row">


                        <div class="col-md-12">


                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">La liste des évènements </h3>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exporter</button>
                                        <ul class="dropdown-menu">
                                            
                                            
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> EXCEL</a></li>
                                            
                                        </ul>
                                    </div>                                    
                                    
                                </div>
                                 <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N° Rapport</th>
                                                <th>Matricule</th>
                                                <th>Vehicule</th>
                                                <th>Site</th>
                                                <th>Entreprise</th>
                                                <th>Victime</th>
                                                <th>Evenement</th>
                                                <th>Date</th>
                                                <th>Cause</th>
                                                <th>Degat</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                
                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
include('connect.php');

$req = $db->query('SELECT * FROM events where lieux = "Boke"');

 ?>


 <?php 
while ($result=$req->fetch()) {
    echo '

     <tr>
                                            
                                                <td>'.$result['id'].'</td>
                                                <td>'.$result['matricule'].'</td>
                                                <td>'.$result['nom_seb'].'</td>
                                                <td>'.$result['site'].'</td>
                                                <td>'.$result['entreprise'].'</td>
                                                <td>'.$result['victime'].'</td>
                                                <td>'.$result['evenement'].'</td>
                                                <td>'.$result['dat'].'</td>
                                                <td>'.$result['cause'].'</td>
                                                <td>'.$result['degat'].'</td>
                 <td> <img width="150" height="150" src="https://hse.ums-ap.com/GestionHSE/img/image/'.$result['id'].'.jpg">  </td>                    
                                                <td>'.$result['description'].'</td>
 
                                            </tr>
    ';                                       
}



  ?>    
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
                            
                            <!-- END DATATABLE EXPORT -->                            
                            
                            <!-- START DEFAULT TABLE EXPORT -->
                            
                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
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
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/table-export.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:59 GMT -->
</html>





