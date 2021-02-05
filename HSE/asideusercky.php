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
               <a href="utilisateurscky.php">UMS-HSE
                        </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                    <li class="xn-title">Menu</li>
                    <li class="active">
                        <a href="utilisateurscky.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>                        
                    </li>                    
              
                                        
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENTS</span></a>
                        <ul>                            
                            <li >
                                <a href="evenementusercky.php">AJOUT EVENEMENT</a>
                                <a href="datausercky.php">LISTE EVENEMENTS</a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEURS</span></a>
                        <ul>                            
                            <li>
                                 
                                <a href="datachauffeurusercky.php">AJOUT CHAUFFEUR</a>
                                <a href="listechauffeurusercky.php">LISTE CHAUFFEURS</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISES</span></a>
                        <ul>                            
                            <li >
                                 
                                <a href="dataentrepriseusercky.php">AJOUT ENTREPRISE</a>
                                <a href="listeentrepriseusercky.php">LISTE ENTREPRISES</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                        <ul>                            
                            <li >
                                <a href="datasebusercky.php">AJOUT  SEB</a>
                                <a href="listesebusercky.php">LISTE SEB</a>
                            </li>                            
                        </ul>
                    </li>
                     <li class="">
                        <a href="aboutcky.php"><span class="glyphicon glyphicon-barcode"></span> A PROPOS</a> 
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