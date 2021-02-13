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
                       $lieu=$row['lieu'];  
                       $cause=$row['cause'];  
                       $degat=$row['degat'];  
                     ?>  
                <!-- First Blog Post -->
                
              
                 <div class="well">
                  <p class="text-center" style="color: red"><?php echo 'Rapport:'.' '.$id;?></p>
                   <p>Date: <?php echo $date;?></p>
                  <p>L'entreprise:<?php echo $entreprise;?></p>
                  <p>Le nom :<?php echo $nom_seb ;?></p>
                   <p>Le type:<?php echo $evenement ;?></p>
                <p>Le Site:<?php echo $site ;?></p>
                <p> Le lieu:<?php echo $lieu ;?></p>
                   <p>La cause: <?php echo $cause ;?></p>
                   <p>Les Dégats: <?php echo $degat ;?></p>
                </div>
              <img class="img-responsive" style="width:800px;height:600px;"src="../img/image/<?php echo $id.'.jpg';?>">  
                <!-- <img class="img-responsive" src="images/<?php echo $post_image;?>" alt=""> -->
                
               
               
                
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
