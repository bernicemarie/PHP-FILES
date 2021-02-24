<?php 
include("include/db.php");
include("include/header.php");
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
                $post_query_count= "SELECT * FROM posts ";
                $find_count=mysqli_query($connect,$post_query_count);
                $count=mysqli_num_rows($find_count);
                $count=ceil($count/3);

                $query= "SELECT * FROM posts ORDER BY post_id DESC LIMIT $page_1,3";
                $result= mysqli_query($connect,$query);
                if (!$result) {
                  die("Contactez l'administrateur principal de l'application".mysqli_error($connect));
                }
                while ($row=mysqli_fetch_assoc($result)) {
                       $post_id=$row['post_id'];
                       $username=$row['username'];
                       $post_title=$row['post_title'];
                       $post_author=$row['post_author'];
                       $post_date=$row['post_date'];
                       $post_image=$row['post_image'];
                       $post_content= substr($row['post_content'],0,200);
                       $post_status=$row['post_status'];
                       if ($post_status=='Actif') {
                         
                     ?>  
                    

                <!-- First Blog Post -->
                 <h2 class="lead">
                    Postée par  <a href="author_posts.php?author=<?php echo $post_author;?> &p_id=<?php echo $post_id;?>"><?php echo $username;?></a>
                </h2>
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ;?>"><?php echo $post_title ;?></a>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date;?></p>
                 <p><?php echo $post_content ;?></p>
                <a href="post.php?p_id=<?php echo $post_id ;?>">
                <a href=" post.php?p_id=<?php echo $post_id;?>"><img class="img-responsive" style="width:800px;height:700px;" src="images/<?php echo $post_image;?>" alt=""></a>
                </a>
               <br>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Laissez un commentaire <span class="glyphicon glyphicon-chevron-right"></span></a>
                   
              
                 
                    
            <?php } } ?>    


            

       


                

               

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