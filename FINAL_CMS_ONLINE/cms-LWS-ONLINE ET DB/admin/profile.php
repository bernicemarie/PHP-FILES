 <?php include("include/header_admin.php");
 
?>
<?php 
if (isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
 $query_profile= "SELECT * FROM users WHERE username='$username'";
 $query_profile_result=mysqli_query($connect,$query_profile);
      while ($row=mysqli_fetch_assoc($query_profile_result)) {
      $nomcompte= $row['username'];
      
      
      
      $adresse= $row['user_email'];
      $user_image=$row['user_image'];
      $role= $row['user_role'];
 }
     if (isset($_POST['update_profile'])) {
     $nomcompte= $_POST['nomcompte'];
     
      
    
      $adresse= $_POST['adresse'];
      $user_image=$_FILES['image']['name'];
      $user_image_temp=$_FILES['image']['tmp_name'];
     

     
    move_uploaded_file($user_image_temp,"../images/$user_image");
     if (empty($user_image)) {
      $query= "SELECT * FROM users WHERE username='$username'";
          $select_image=mysqli_query($connect,$query);
    while ($row=mysqli_fetch_assoc($select_image)) {
      $user_image=$row['user_image'];
    }
 }
 $query_unlink="SELECT user_image FROM users WHERE username='$username' LIMIT 1";
 $result_unlink=mysqli_query($connect,$query_unlink);
if(!$result_unlink){
 die('Aucune modification possible'.mysqli_error($connect));
}
$row= mysqli_fetch_array($result_unlink);
$path_image= "../images/{$row['user_image']}";
unlink($path_image);
 $query_update= "UPDATE users SET username='$nomcompte',
  
 user_email='$adresse',
 user_image='$user_image'
  WHERE username='$username'";
  $query_update_result= mysqli_query($connect,$query_update);
  if (!$query_update_result) {
    die('Pas de modification, contactez votre administrateur'.mysqli_error($connect));
  }
  
   header("Location:profile.php?modification faite");
   set_message("Modification faite!");
    }
    }


 ?>
    <div id="wrapper">
        <!-- Navigation -->
       <?php include("include/navigation_admin.php");?>;
        <div id="page-wrapper">

            <div class="container-fluid">
<?php ?>
                <!-- Page Heading -->
                <div class="row">

            <h1 class="page-header">
                            Bienvenue dans Goundo
                            <small><?php echo $_SESSION['username'] ."  ". $_SESSION['user_lastname']  ?></small>
                        </h1>
                          

                          <div class="block">                                                 
                <form class="form-validate form-horizontal" action=""  method="POST"  enctype="multipart/form-data">
                          <div class="panel panel-info">
                                            <div class="panel-heading ui-draggable-handle">
                                                <h3 class="panel-title"><strong>Modifier vos informations</strong></h3>
                                            </div>
                                            <h2 class="text-center"> <span style="color: red"><?php display_message(); ?></span> </h2>
                  <div class="col-md-5">  
                       <div class="row">
                       <div class="block">
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Nom Compte<span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input value="<?php echo $nomcompte;?>" name= "nomcompte" type="text" class=" form-control"/>
                      </div>
                    </div>
                       <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Adresse <span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input  value="<?php echo $adresse;?>"  name="adresse" type="email" class="form-control" />
                      </div>
                    </div>
                    
                    </div>
                   
                   </div>
                    </div>
                    </div>
                  <div class="col-md-5">  
                    <div class="row">
                    <div class="block">
                  
                       
                    </div>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Image <span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input name="image" type="file" class="form-control" >
                        <img width="100" src="../images/<?php echo $user_image;?>" alt="Image">
                      </div>
                    </div>
                    
                      
                   </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-5 col-lg-7">
                      </div>
                    </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">

                           <div class="modal-footer">
                                                 
                              <input class="btn btn-primary" type="submit" name="update_profile" value="Modifier"> 
                              <input class="btn btn-danger" type="reset"  value="Annuler"> 
                                
                                          </div>

                        </div>
                    </div>
                  </form>       
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
     <script type="text/javascript" src="js/edit_comment.js"></script>
    <script type="text/javascript" src="js/del_comment.js"></script>
   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
