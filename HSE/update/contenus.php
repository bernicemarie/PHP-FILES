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
hfghfghfghg
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
              <form>
  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
</form>

<?php
echo '<a href="javascript:window.print()">IMPRIMER CETTE PAGE OU CETTE SELECTION</a>';
?>
              
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                              <h2 class="text-center btn-info">Tout est du Goundo, le sourire partagé</h2>
                            <div class="carousel-inner">
                                 <?php 
                                  get_active_slide();
                                  get_slides();
                                  ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
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

                $query= "SELECT * FROM events ";
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
                

                <h2>
                    <a><?php echo $nom_seb ;?></a>
                  
                </h2>
                <p class="lead">
                  <a><?php echo $entreprise;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date;?></p>
                <hr>
               <!--  <a href="post.php?p_id=<?php echo $post_id ;?>">
                <a href=" post.php?p_id=<?php echo $post_id;?>"><img class="img-responsive" src="images/<?php echo $post_image;?>" alt=""></a>
                </a> -->
                <p><?php echo $evenement ;?></p>
                <p><?php echo $date ;?></p>
                 
              
                 
                    
            <?php  } ?>    


            

       


                

               

                <!-- Second Blog Post -->
                

                <!-- Third Blog Post -->
                 

                <!-- Pager -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php 
            include("sidebar.php");
             ?>
            
        
        </div>
        </div>
        <!-- /.row -->

        

        
        <!--   <?php 
           get_posts_with_pagination();

           ?>
          
          -->

       

       <?php 
include("footer.php");
        ?>