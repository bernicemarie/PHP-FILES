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
              
                                        
                    <li>
                        <a href="datauser.php"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENT</span></a>
                         
                    </li>
                    <li>
                        <a href="listechauffeuruser.php"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEUR</span></a>
                         
                    </li>
                     <li>
                        <a href="listeentrepriseuser.php"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISE</span></a>
                         
                    </li>
                     <li>
                        <a href="listesebuser.php"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                         
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