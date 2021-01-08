<?php include("include/header_image.php");
 include("include/db.php");
 
?>

    <div id="wrapper">
        <!-- Navigation -->
       <?php include("include/navigation.php");?>;
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               <input type="hidden" value="<?php   if (isset($_SESSION['username'])){  echo $user=$_SESSION['username']; };  ?>">

            <h1 class="text-center" style="color: lime">
                           <marquee behavior="" direction="up"> Bienvenue dans Goundo</marquee>
                            
                           
                        </h1>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 well">
                                     <div class="well " style="background: #">
                                         
                                         <h2 class="text-center">
                                         <?php  if (isset($_SESSION['username'])) {
                              echo "<small style= 'color: purple' >$user</small>";
                            }
                              else{
                               echo " ";} ?>
                                         </h2>

                                         <h2>
                                            <p>
                                                Le site goundo permet de partager nos souvenirs, d'ajouter des cours pour l'amélioration de nos skills et de se divertir.
                                             Il permet à chacun d'avoir son espace de taf afin de publier les images, de visualiser les publications des autres,de les 
                                             commenter et de télécharger des cours déjà ajoutés pour un meilleur apprentissage.  
                                            </p>
                                            
                                             L'idée de ce site est venue depuis que nous étions à la fac, très souvent quand il s'agissait 
                                             de cacher certaines choses entre amis, on se disait à voir dans goundon.com, une manière de faire 
                                             rire la gallérie. 
                                              Nous avions quitté la fac en 2010 avec succès, nous saluons tous nos encadreurs 
                                             qui n'ont ménagé aucun effort pour la réuissite de notre cursus universitaire. Puisse Dieu leur donner sa grâce de santé.
                                         </h2>
                                         <p>
                                            <h2>
                                           2010-2020, 10ans après le site a vu le jour, rendons grâce à Dieu!
                                           L'objectif prémier de cet espace est de consolider nos liens d'amitiés et de fraternités. A travers l'idée des uns et des autres 
                                           notre site connaîtra des améliorations.

                                         </h2>
                                         <h1 class="text-center" style="color: purple">
                                             Que Dieu nous unisse et nous bénisse!
                                         </h1>
                                         </p>
                                     </div>
                                </div>
                            </div>

                        </div>
             
                   
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
     

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
