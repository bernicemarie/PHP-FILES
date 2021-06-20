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
              <?php 
                 if (isset($_SESSION['role']) && $_SESSION['role']=='Owner') {
                 echo'<a href="adminprincipal.php">UMS-HSE</a>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Adminbk') {
                 echo'<a href="administrator.php">UMS-HSE</a>';
                  }
                 else if (isset($_SESSION['role']) && $_SESSION['role']=='Admincky') {
                 echo'<a href="administratorcky.php">UMS-HSE</a>';
                  }
                   else if (isset($_SESSION['role']) && $_SESSION['role']=='Userbk') {
                 echo'<a href="utilisateurs.php">UMS-HSE</a>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Usercky') {
                 echo'<a href="utilisateurscky.php">UMS-HSE</a>';
                  }
                  ?>
                        <a href="#" class="x-navigation-control"></a>
                    </li>

                    <li class="xn-title">Menu</li>
                    <li class="active">
                      <?php 
                 if (isset($_SESSION['role']) && $_SESSION['role']=='Owner') {
                 echo'<a href="adminprincipal.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Adminbk') {
                 echo'<a href="administrator.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>';
                  }
                 else if (isset($_SESSION['role']) && $_SESSION['role']=='Admincky') {
                 echo'<a href="administratorcky.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>';
                  }
                   else if (isset($_SESSION['role']) && $_SESSION['role']=='Userbk') {
                 echo'<a href="utilisateurs.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Usercky') {
                 echo'<a href="utilisateurscky.php"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de Bord</span></a>';
                  }
                  ?>   
                    </li>


                    <li>
                        <a href="data.php"><span class="fa fa-outdent"></span> <span class="xn-text">EVENEMENTS</span></a>
                         
                    </li>
                    <li>
                     <a href="listechauffeur.php"><span class="fa fa-outdent"></span> <span class="xn-text">CHAUFFEUR</span></a>
                    </li>
                     <li>
                        <a href="listeseb.php"><span class="fa fa-outdent"></span> <span class="xn-text">SEB</span></a>
                        
                    </li>
                    <li>
                        <a href="listeentreprise.php"><span class="fa fa-outdent"></span> <span class="xn-text">ENTREPRISE</span></a>
                         
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
