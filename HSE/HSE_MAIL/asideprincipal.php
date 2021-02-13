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
               <a href="adminprincipal.php"> UMS-HSE
                        </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>

                    <li class="xn-title">Menu</li>
                    <li class="active">
                        <a href="adminprincipal.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENTS</span></a>
                        <ul>
                            <li >
                                <a href="evenementprincipal.php">AJOUT EVENEMENTS</a>
                                <a href="dataprincipal.php">LISTE EVENEMENTS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEUR</span></a>
                        <ul>
                            <li >
                                <a href="datachauffeurprincipal.php">AJOUT CHAUFFEUR</a>
                                <a href="listechauffeurprincipal.php">LISTE CHAUFFEUR</a>
                            </li>
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                        <ul>
                            <li >
                                <a href="datasebprincipal.php">AJOUT SEB</a>
                                <a href="listesebprincipal.php">LISTE SEB</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISE</span></a>
                        <ul>
                            <li >
                                <a href="dataentrepriseprincipal.php">AJOUT ENTREPRISE</a>
                                <a href="listeentrepriseprincipal.php">LISTE ENTREPRISE</a>
                            </li>
                        </ul>
                    </li>
                      <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">ADMINISTRATION</span></a>
                        <ul>
                            <li >
                                <a href="creationusercky.php">AJOUT UTILISATEURS</a>
                                <a href="listeusercky.php">LISTE UTILISATEURS</a>
                            </li>
                        </ul>
                    </li>


                     <li class="">
                    <a href="aboutprincipal.php"><span class="glyphicon glyphicon-barcode"></span> A PROPOS</a>

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
