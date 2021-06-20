<?php 
include('connect.php');

 
 
 ?>


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


            <?php 
    
   include("aside.php");
    
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
                     
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                     <?php  
                     include ("admin.php")

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
                                                <th>N° Serie</th>
                                                <th>Site</th>
                                                <th>Shift</th>
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

$req = $db->query('SELECT * FROM events where entreprise!="ums" and lieux="Boke"');

 ?>


 <?php 
while ($result=$req->fetch()) {
    echo '

     <tr>
                                                <td>'.$result['id'].'</td>
                                                <td>'.$result['matricule'].'</td>
                                                <td>'.$result['nom_seb'].'</td>
                                                <td>'.$result['immatriculation'].'</td>
                                                <td>'.$result['site'].'</td>
                                                <td>'.$result['shift'].'</td>
                                                <td>'.$result['entreprise'].'</td>
                                                <td>'.$result['victime'].'</td>
                                                <td>'.$result['evenement'].'</td>
                                                <td>'.$result['dat'].'</td>
                                                <td>'.$result['cause'].'</td>
                                                <td>'.$result['degat'].'</td>
             <td> <img width="80" height="80" src="https://hse.ums-ap.com/GestionHSE/img/image/'.$result['id'].'.jpg">  </td>                                    
                                                          
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
         
        <!-- END MESSAGE BOX-->        
        
        <!-- MESSAGE BOX-->
        
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





