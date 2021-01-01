  <?php 
   if (isset($_POST['create_post'])) {
    $post_title=escape($_POST['post_title']);
    
    $post_author=escape($_POST['post_author']);
    $username=escape($_SESSION['username']);
    $user_role=escape($_SESSION['user_role']);
    $post_image=$_FILES['post_image']['name'];
    $file_image=$_FILES['post_image']['type'];
    $post_image_temp=$_FILES['post_image']['tmp_name']; 
    
    $post_content=escape(substr(($_POST['post_content']),0,100));
    //$post_date=date('d-m-Y');
    if ($file_image == "application/pdf" || $file_image=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
      set_message("Post non enregistré,merci de choisir une image"); 
  
    //echo "<p  class='text-center btn-danger' >Insertion bien efffectuée!<a href='../post.php?p_id=$the_post_id'><br>Allez sur le poste inseré</a></p>";
   }
   else{
    move_uploaded_file($post_image_temp,"../images/$post_image");
    $query1= "INSERT INTO posts(username,user_role,post_title,post_author,post_date,post_image,post_content)
    VALUES('{$username}','{$user_role}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}')";
    $query= mysqli_query($connect,$query1);
    if (!$query) {
      die("Pas d\'insertion possible dans la table POSTS".mysqli_error($connect));
    }
    $the_post_id=mysqli_insert_id($connect);
    set_message("Post bien enregistré");
    header("Location:../index?crée");

  }
   }
   ?>
  <div class="block">   
  <h2 class="text-center"> <span style="color: red"><?php echo display_message(); ?></span> </h2>                                             
                <form class="form-validate form-horizontal" action=""  method="POST"  enctype="multipart/form-data">
                          <div class="panel panel-info">
                                            <div class="panel-heading ui-draggable-handle">
                                            <h3 class="panel-title"><strong>Ajouter un Post</strong></h3>
                                                
                                            </div>
                  <div class="col-md-5">  
                       <div class="row">
                       <div class="block">
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Titre du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name= "post_title" type="text" class=" form-control" placeholder="Ajouter un titre" required>
                    
                      </div>
                    </div>

                      
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Auteur du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input value="<?php echo $_SESSION['username']; ?>"  name="post_author" type="text" class=" form-control" placeholder="Ajouter votre nom" required>
                      </div>
                    </div>
                      
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Image du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input name="post_image" type="file"   accept="image/*" class="form-control" required>
                      </div>
                    </div>
                     
                   </div>
                    </div>
                    </div>
                  <div class="col-md-5">  
                    <div class="row">
                    <div class="block">
                  
                       
                         <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Date du Post<span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name="post_date" type="date" class=" form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
                      </div>
                    </div> 
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Contenu du Post <span class="required">*</span></label>
                      
                      <div class="col-lg-8">
                   <textarea  name="post_content"  class=" form-control" cols="2" rows="2" id="body" maxlength="15" placeholder="Ajouter un pétit commentaire">&nbsp;</textarea>
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
                                                 
                              <input class="btn btn-primary" type="submit" name="create_post" value="Publier"> 
                              <input onclick="history.back()" class="btn btn-danger" type="reset"  value="Rétour"> 
                                 
                                          </div>

                        </div>
                    </div>
                  </form>       
                 </div>   

