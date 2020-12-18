<div class="col-md-4">
               

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Recherche</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!--  Login -->
                <?php if(isset($_SESSION['user_role'])): ?>
                    <h4 class="text-center">Vous êtes connecté(e) en tant que <?php echo $_SESSION['username']?></h4>
                <a href="../cms/admin/logout.php" class="btn btn-danger">Deconnectez-Vous ?</a>
                <?php else: ?>
                   <div class="well">
                    <h2 class="text-center btn-primary">Connectez-vous</h2>
                    <form action="include/login.php" method="POST">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Entrez votre nom">
                    </div>
                     <div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Entrez votre mot de pass">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="envoyer">Valider</button>
                        </span>
                         
                    </div>
                    <br>
                    <div class="form-group">
                        <a class="btn btn-danger" href="forgot_password.php?forgot=<?php echo uniqid() ?>">Mot de pass oublié?</a>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <?php endif; ?>

                     


                <div class="well">

     <?php 
                $query= "SELECT * FROM categories";
                $result= mysqli_query($connect,$query);
               
                 ?>  

                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php 
                            while ($row=mysqli_fetch_assoc($result)) {
                       $cat_title=$row['cat_title'];
                       $cat_id=$row['cat_id'];
                       echo "<li> <a href='category.php?category=$cat_id'> {$cat_title}</a> </li>" ;
                    
                }
                                 ?>
                                
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                         
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <?php 
                    include("widget.php"); ?>
                </div>

            </div>