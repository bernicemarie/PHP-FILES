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
             <a class="navbar-brand" href="index">Maison</a>
            
                 <?php if (!isset($_SESSION['user_role'])) {
                   //echo'<a class="navbar-brand"  href="login">Connexion</a>';
                   echo'<a class="navbar-brand"  href="registration">Inscription</a>';
                 } 
                 else{
                  echo'';
                 }
                  ?>
                   <a class="navbar-brand" href="amuse-toi/jeux.php" target="">Jeux</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Cours
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <?php 

                $query= "SELECT * FROM categories";
                $result= mysqli_query($connect,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                       $cat_title=$row['cat_title'];
                       $cat_content=$row['cat_content'];
                       echo " <a href='cours/$cat_content' class='dropdown-Item' target='_blank'> {$cat_title}</a>" ;
                       echo "<br>";
                       
                }
                 ?>

                         <div class="dropdown-divider"></div>


                     </div>
                 </li>
                 <!--<?php 
                $query= "SELECT * FROM categories";
                $result= mysqli_query($connect,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                       $cat_title=$row['cat_title'];
                       echo "<li> <a href='#'> {$cat_title}</a> </li>" ;
                }
                 ?>  -->

                 <li><a href="infos">Lisez-moi</a></li>

                 <li><a href="../cms/admin/posts.php?source=add_post">Ajouter un Post</a></li>
                 
                 <li><a href="../cms/admin/logout.php">Déconnexion</a></li>
                 <li><a href="mail">Contactez-Moi</a></li>
                 <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role']=='admin') {
                 echo'<li><a href="../cms/admin/index_admin.php">Mon Espace De Travail</a></li>';
                  }
                 else {
                     echo'<li><a href="../cms/admin/index_user.php">Mon Espace De Travail</a></li>';
                 }
                  ?>

                 <?php 

                   if (isset($_SESSION['username'])) {
                       if (isset($_GET['p_id'])) {
                           $the_post_id=$_GET['p_id'];
                           echo "<li><a href='../cms/admin/posts.php?source=edit_post&p_id=$the_post_id'>Editer ce post </a></li>";

                       }
                   }
                    
                  ?>

             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container -->
 </nav>