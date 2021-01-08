<?php 
if (isset($_GET['p_id'])) {
  $the_post_id=$_GET['p_id'];



$query= "SELECT * FROM posts WHERE post_id=$the_post_id";
$select_posts= mysqli_query($connect,$query);
while ($row=mysqli_fetch_assoc($select_posts)) {
    $post_id=$row['post_id'];
    $post_title=$row['post_title'];
    
    $post_author=$row['post_author'];
    $post_status=$row['post_status'];
    $post_image=$row['post_image'];
    
    $post_content=$row['post_content'];
    $post_date= $row['post_date'];
    $post_comment_count= $row['post_comment_count'];
    $post_content=mysqli_real_escape_string($connect,$post_content);
}
if (isset($_POST['update_post'])) {
    $post_title=escape($_POST['post_title']);
    
    $post_author=escape($_POST['post_author']);
    $post_status=$_POST['post_status'];
    $post_image=$_FILES['post_image']['name'];
    $file_image=$_FILES['post_image']['type'];
    $post_image_temp=$_FILES['post_image']['tmp_name'];
    
    $post_content=escape(substr(($_POST['post_content']),1,200));
    move_uploaded_file($post_image_temp,"../images/$post_image");
    if (empty($post_image)) {
      $query= "SELECT * FROM posts WHERE post_id=$the_post_id";
          $select_image=mysqli_query($connect,$query);
    while ($row=mysqli_fetch_assoc($select_image)) {
      $post_image=$row['post_image'];
    }
 }
 

 $query_unlink="SELECT post_image FROM posts WHERE post_id=$the_post_id LIMIT 1";
 $result_unlink=mysqli_query($connect,$query_unlink);
if(!$result_unlink){
 die('Aucune modification possible'.mysqli_error($connect));
}
$row= mysqli_fetch_array($result_unlink);
$path_image= "../images/{$row['post_image']}";
if ($file_image == "application/pdf" || $file_image=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
  set_message("Post non modifié,merci de choisir une image"); 
}
else{
  unlink($path_image);
$query_update="UPDATE posts SET 
post_title='$post_title'
,post_date= '$post_date'
,post_author='$post_author'
,post_status='$post_status'
,post_content='$post_content'
,post_image='$post_image'
,post_comment_count='$post_comment_count' 
WHERE post_id='$the_post_id'";
  $result_update=mysqli_query($connect,$query_update);
  if (!$result_update) {
    die("Contactez l'administrateur principal de l'application " .mysqli_error($connect));
  }
  echo "<p class='bg-success text-center'>Mise à jour effectuée.<a href='../post.php?p_id=$the_post_id'>Voir ce post</a> Ou  <a href='posts.php'>Voir tous les posts</a></p>";
  header("Location:posts.php?Modification faite");
}
}
}
 ?>
               <div class="block">      
                <h2 class="text-center"> <span style="color: red"><?php echo display_message(); ?></span> </h2>                                                              
                <form class="form-validate form-horizontal" action=""  method="POST"  enctype="multipart/form-data">
                          <div class="panel panel-info">
                                            <div class="panel-heading ui-draggable-handle">
                                                <h3 class="panel-title"><strong>Mise à Jour</strong></h3>
                                           
                                            </div>
                  <div class="col-md-5">  
                       <div class="row"><a href=""></a>
                       <div class="block">
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Titre du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input value="<?php echo $post_title;?>" name= "post_title" type="text" class=" form-control" required>
                      </div>
                    </div>

                      
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Auteur du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input value="<?php echo $post_author;?>" name="post_author" type="text" class=" form-control" required>
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Image du Post <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input type="file" name="post_image" accept="image/*" required>
                       <img width="100" src="../images/<?php echo $post_image;?>" alt="Aucune image" required>
                         
                      </div>
                    </div>
                     
                   </div>
                    </div>
                    </div>
                  <div class="col-md-5">  
                    <div class="row">
                    <div class="block">
                  
                      
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Contenu du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <textarea name="post_content"  class=" form-control" cols="15" rows="15" id="body" maxlength="30"><?php echo str_replace('\r\n','</br>',$post_content) ;?> </textarea>
                      </div>
                    </div>  
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Etat du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <select name="post_status" class="form-control">
                           <option value="<?php echo $post_status;?>"><?php echo $post_status;?></option>
                           <?php 
                            if ($post_status=='Actif') {
                              echo "<option value='Inactif'>Inactif</option>";
                            }
                            else {
                              echo "<option value='Actif'>Actif</option>";
                            }
                            ?>
                        </select>
                          
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Date du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input value="<?php echo $post_date;?>" name="post_date" type="date" class=" form-control" />
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
                                                 
                              <input class="btn btn-primary" type="submit" name="update_post" value="Modifier"> 
                              
                               <a href="posts.php" class="btn btn-danger">Rétour</a>
                                          </div>

                        </div>
                    </div>
                  </form>       
                 </div>  