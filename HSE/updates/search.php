<?php 
include("include/header.php");
include("include/function_escape.php");
session_start();
 ?>


    <!-- Navigation -->
   <?php 
    include("include/navigation.php");
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
  
               <?php 
                    

                 if (isset($_POST['submit'])) {
                     $search= escape($_POST['search']); 
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
                  <h2><?php echo $entreprise;?></h2>
                  <h2><?php echo 'Rapport'.' '.$id;?></h2>
                </p>
                <h2><span class="glyphicon glyphicon-time"></span> <?php echo $date;?></h2>
                
              
              <img class="img-responsive" style="width:800px;height:600px;"src="../img/image/<?php echo $id.'.jpg';?>">  
                <!-- <img class="img-responsive" src="images/<?php echo $post_image;?>" alt=""> -->
                
                <h2><?php echo $evenement ;?></h2>
                
                 <hr>
                
  
            <?php } 
                         }
                    
                 } ?>    
                
                 
              

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php 
            include("include/sidebar.php");
             ?>
            
        
        </div>
        </div>
        <!-- /.row -->

       

       <?php 
include("include/footer.php");
        ?>
