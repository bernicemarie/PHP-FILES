 <?php include("include/db.php"); ?>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->



         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse"
                 data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="contenu.php">Accueil</a>
            
                 
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                 <?php 
                 if (isset($_SESSION['role']) && $_SESSION['role']=='Owner') {
                 echo'<li><a href="../adminprincipal.php">Mon Espace De Travail</a></li>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Adminbk') {
                 echo'<li><a href="../administratorcky.php">Mon Espace De Travail</a></li>';
                  }
                 else if (isset($_SESSION['role']) && $_SESSION['role']=='Admincky') {
                 echo'<li><a href="../administrator.php">Mon Espace De Travail</a></li>';
                  }
                   else if (isset($_SESSION['role']) && $_SESSION['role']=='Userbk') {
                 echo'<li><a href="../utilisateurs.php">Mon Espace De Travail</a></li>';
                  }
                  else if (isset($_SESSION['role']) && $_SESSION['role']=='Usercky') {
                 echo'<li><a href="../utilisateurscky.php">Mon Espace De Travail</a></li>';
                  }
                  ?>
                    <li><a href="logout.php">Quitter ma session</a></li>
                 

             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container -->
 </nav>