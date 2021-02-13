<?php 
session_start();
include("include/db.php");
include("include/function_escape.php");
include("include/header.php");

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

               if (isset($_GET['page'])) {
                 $page=$_GET['page'];
                  
               }
               else  {
                  $page=0;
                 }
                 if ($page==""|| $page== 1) {
                   $page_1=0;
                 }
                 else  {
                       $page_1=($page * 3)-3;
                 }
                $post_query_count= "SELECT * FROM events ";
                $find_count=mysqli_query($connect,$post_query_count);
                $count=mysqli_num_rows($find_count);
                $count=ceil($count/3);

                $query= "SELECT * FROM events ORDER BY id DESC LIMIT $page_1,3 ";
                $result= mysqli_query($connect,$query);
                if (!$result) {
                  die("Contactez l'administrateur principal de l'application".mysqli_error($connect));
                }
               while ($row=mysqli_fetch_assoc($result)) {
                       $id=$row['id'];
                       $nom_seb=$row['nom_seb'];
                       $entreprise=$row['entreprise'];
                       $site=$row['site'];
                       $evenement=$row['evenement'];  
                       
                       $date=$row['dat'];  
                     ?>  
                <!-- First Blog Post -->
          
                <p class="lead">
                  <h2 class="text-center"><?php echo 'Rapport'.' '.$id;?></h2>
                   
                  <h2 class="text-center"><?php echo $entreprise;?></h2>
                </p>
              <img class="img-responsive" style="width:800px;height:600px;" alt="Pas d'image pour cet évènement" src="../img/image/<?php echo $id.'.jpg';?>">  
                <!-- <img class="img-responsive" src="images/<?php echo $post_image;?>" alt=""> -->
                 <p class="text-center btn-info">Les évènements</p>
                 
                    
            <?php  } ?>    


            

       


                

               

                <!-- Second Blog Post -->
                

                <!-- Third Blog Post -->
                 

                <!-- Pager -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php 
            include("include/sidebar.php");
             ?>
            
        
        </div>
        </div>
        <!-- /.row -->

        

        
        <?php 
           get_posts_with_pagination();

           ?>
          
        

       

       <?php 
include("include/footer.php");
        ?>