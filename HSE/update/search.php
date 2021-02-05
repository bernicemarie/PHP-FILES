<?php 
include("db.php");
include("header.php");
session_start();
 ?>


    <!-- Navigation -->
   <?php 
    include("navigation.php");
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
  
               <?php 
                    

                 if (isset($_POST['submit'])) {
                     $search= escapecontact($_POST['search']); 
                     $query= "SELECT * FROM events WHERE id LIKE '%$search%'"; 
                     $search_query=mysqli_query($connect,$query);
                     if (!$search_query) {
                        die('No data found in the database');
                         }
                          $count=mysqli_num_rows($search_query);
                        if ($count==0) {
                            echo ' <h1 class="text-center btn-info">Aucun résultat n\'a été trouvé</h1>';
                            
                       
                         } else {

                while ($row=mysqli_fetch_assoc($search_query)) {
                        
                       $id=$row['id'];
                       $nom_seb=$row['nom_seb'];
                       $entreprise=$row['entreprise'];
                       $site=$row['site'];
                       $evenement=$row['evenement'];  
                       $date=$row['dat'];  
                     ?>  
                <!-- First Blog Post -->
                
              <h2>
                    <a><?php echo $nom_seb ;?></a>
                  
                </h2>
                 <p class="lead">
                  <a><?php echo $entreprise;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $date;?></p>
                
              
              <img class="img-responsive" width="150" height="150" src="../../img/image/<?php echo $id.'.jpg';?>">  
                <!-- <img class="img-responsive" src="images/<?php echo $post_image;?>" alt=""> -->
                
                <p><?php echo $evenement ;?></p>
                
                 <hr>
              
            <?php } 
                         }
                    
                 } ?>    
                
                 
              

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php 
            include("sidebar.php");
             ?>
            
        
        </div>
        </div>
        <!-- /.row -->

       

       <?php 
include("footer.php");
        ?>
