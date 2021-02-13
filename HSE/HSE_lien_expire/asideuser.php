<?php 
session_start();
if(empty($_SESSION['nom']))
   {
    header("location:index.php");

   }
   ?>


      <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
               <a href="utilisateurs.php">UMS-HSE
                        </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                    <li class="xn-title">Menu</li>
                    <li class="active">
                        <a href="utilisateurs.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>                        
                    </li>                    
              
                                        
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENT</span></a>
                        <ul>                            
                            <li >
                                <a href="evenementuser.php">AJOUT EVENEMENTS</a>
                                <a href="datauser.php">LISTE EVENEMENTS</a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEUR</span></a>
                        <ul>                            
                            <li >
                                 
                                <a href="datachauffeuruser.php">AJOUT CHAUFFEUR</a>
                                <a href="listechauffeuruser.php">LISTE CHAUFFEURS</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISE</span></a>
                        <ul>                            
                            <li >
                                 
                                <a href="dataentrepriseuser.php">AJOUT ENTREPRISE</a>
                                <a href="listeentrepriseuser.php">LISTE ENTREPRISES</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                        <ul>                            
                            <li >
                                <a href="datasebuser.php">AJOUT SEB</a>
                                <a href="listesebuser.php">LISTE SEB</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="">
                        <a href="about.php"><span class="glyphicon glyphicon-barcode"></span> A PROPOS</a>
                         
                    </li>
                    <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-sign-out"></i>
                          <span>DECONNEXION</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      
            <ul class="sub">
                 <li><a class="" href="logout.php">Quittez UMS HSE ??</a></li>
              
                         
            </ul>
          </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>