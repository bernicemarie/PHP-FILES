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
               <a href="administrator.php"> UMS-HSE
                        </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>

                    <li class="xn-title">Menu</li>
                    <li class="active">
                        <a href="administrator.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENTS</span></a>
                        <ul>
                            <li >
                                <a href="evenement.php">AJOUT EVENEMENTS</a>
                                <a href="data.php">LISTE EVENEMENTS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEUR</span></a>
                        <ul>
                            <li >
                                <a href="datachauffeur.php">AJOUT CHAUFFEUR</a>
                                <a href="listechauffeur.php">LISTE CHAUFFEUR</a>
                            </li>
                        </ul>
                    </li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                        <ul>
                            <li >
                                <a href="dataseb.php">AJOUT SEB</a>
                                <a href="listeseb.php">LISTE SEB</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISE</span></a>
                        <ul>
                            <li >
                                <a href="dataentreprise.php">AJOUT ENTREPRISE</a>
                                <a href="listeentreprise.php">LISTE ENTREPRISE</a>
                            </li>
                        </ul>
                    </li>


                     <li class="">
                        <a href="aboutit.php"><span class="glyphicon glyphicon-barcode"></span> A PROPOS</a>

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
