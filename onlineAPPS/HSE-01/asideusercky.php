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
              
                                        
                    <li>
                        <a href="datausercky.php"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENTS</span></a>
                        
                    </li>
                    <li>
                        <a href="listechauffeurusercky.php"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEURS</span></a>
                         
                    </li>
                     <li>
                        <a href="listeentrepriseusercky.php"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISES</span></a>
                         
                    </li>
                     <li>
                        <a href="listesebusercky.php"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                         
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