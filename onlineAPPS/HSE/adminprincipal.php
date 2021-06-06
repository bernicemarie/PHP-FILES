<?php 
include('connect.php');
include('contenus/include/function_escape.php');


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
        <link rel="icon" type="image/*" href="img/ums-img.jpg">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
<script async src="../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9822210293833673",
    enable_page_level_ads: true
  });
</script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                 <?php
                    include("asideprincipal.php");

                   ?>
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
                    <!-- SEARCH -->
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                     <?php  
                      include ("user.php");
                      ?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                     
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="administratorcky.php">UMS-HSE <?php echo $_SESSION['lieux']; ?> </a></li>                    
                    <li><a href="#"><?php echo $_SESSION['nom']; ?></a></li>                     
                    <li class="active">Tableau de Bord</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                     <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-danger widget-item-icon" onclick="location.href='degatsprincipal.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-ambulance"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list6 = $db->query("SELECT count(matricule) as r6 FROM events where lieux= 'Conakry'");
                                       $ligne6 = $list6->fetch(); echo $ligne6['r6']; ?></div>
                                    <div class="widget-title">Dégats enregistrés <?php echo $_SESSION['lieux'];?></div>
                            
                                </div>
                                                   
                            </div>                  
                            <!-- END WIDGET SLIDER -->
                            
                        </div>

                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->


                            <div class="widget widget-danger widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-ambulance"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list2 = $db->query("SELECT count(*) as r2 FROM events WHERE site='Conakry'");
                                        $ligne2 = $list2->fetch(); echo $ligne2['r2']; ?></div>

                                    <div class="widget-title">évènements <?php echo $_SESSION['lieux']; ?> </div>
                                    
                                </div>      
                                 
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3 ">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-danger widget-item-icon" onclick="location.href='viewdatabokeprincipal.php';">
                                
                                <div class="widget-item-left ">
                                    <span class="fa fa-ambulance"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">  <?php $list = $db->query("SELECT count(*) as r FROM events WHERE lieux='Boke'");
                                     $ligne = $list->fetch();echo $ligne['r']; ?> </div>
                                    <div class="widget-title ">évènements Boke</div>
                            
                                </div>
                                                   
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            
                            <div class="widget widget-warning widget-padding-lg">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-title plugin-date">Loading...</div>                                    
                            </div>  

                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                          <div class="widget widget-warning widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-male"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list3 = $db->query("SELECT count(matricule) as r3 FROM chauffeurcky WHERE matricule!= 'Affrété'");
                                    $ligne3 = $list3->fetch();  echo $ligne3['r3']; ?></div>
                                    <div class="widget-title">Chauffeurs <?php echo $_SESSION['lieux']; ?> </div>
                            
                                </div>
                                                   
                            </div>                            
                           <!-- END WIDGET REGISTRED -->
                            
                        </div>                 
                    <div class="col-md-3">
                            
                            <!--START WIDGET REGISTRED -->
                            <div class="widget widget-warning widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list4 = $db->query("SELECT count(distinct(entreprise)) as r4 FROM events WHERE 
                                   entreprise != '' and lieux= 'Conakry'");
                                    $ligne4 = $list4->fetch(); echo $ligne4['r4']; ?></div>
                                    <div class="widget-title">Entreprises accidentées <?php echo $_SESSION['lieux']; ?> </div>
                            
                                </div>
                                                   
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div> 
                       <div class="col-md-3">
                            
                            <!--START WIDGET REGISTRED -->
                            <div class="widget widget-warning widget-item-icon" onclick="location.href='sebviewprincipal.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-car"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list5 = $db->query("SELECT count(distinct(nom_seb)) as r5 FROM events WHERE nom_seb != 'Affrété'and lieux = 'Conakry'");
                                      $ligne5 = $list5->fetch(); echo $ligne5['r5']; ?></div>
                                    <div class="widget-title">SEB Accidentés <?php echo $_SESSION['lieux']; ?> </div>
                            
                                </div>
                                                   
                            </div>   
                        </div> 
                         <div class="col-md-3">
                            
                            <!--START WIDGET REGISTRED -->
                            <div class="widget widget-warning widget-item-icon" onclick="location.href='affrétéviewprincipal.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-car"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php $list7 = $db->query("SELECT count(distinct(immatriculation)) as r7 FROM events WHERE 
                                       immatriculation != ''  and lieux= 'Conakry'");
                                     $ligne7 = $list7->fetch(); echo $ligne7['r7']; ?></div>
                                    <div class="widget-title">affrétés accidentés <?php echo $_SESSION['lieux']; ?> </div>
                            
                                </div>
                                                   
                            </div>   
                        </div>

                    </div>
                    <!-- END WIDGETS -->  


                    <!-- START GRAPH -->  
                   
                      <?php 
                $post_boke_count=graphcount('events','lieux','Boke');
                $post_conakry_count=graphcount('events','lieux','Conakry');
                $post_site1_count=graphcount('events','site','Site 1');
                $post_site2_count=graphcount('events','site','Site 2');
                $post_entreprise_count=graphentreprisecount('entreprise');
                 ?>                              
                    
                     <div class="row">
                    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([ 
          ['Données', 'Il y"a'],

          <?php 
             $element_text=['Entreprise','Total Accident Boke','Total Accident Conakry','Total Accident Site 1','Total Accident Site 2'];
             $element_count=[$post_entreprise_count,$post_boke_count,$post_conakry_count, $post_site1_count, $post_site2_count];
             for($i=0;$i<5;$i++){
              echo "['$element_text[$i]'".","."$element_count[$i]],";


             }


           ?>
          //['Posts', 1000],
           
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script> 
<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>



                 </div> 
                    
        <!-- END GRAPH -->         
                    
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
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi "></script>
   
    
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 10:58:42 GMT -->
</html>






