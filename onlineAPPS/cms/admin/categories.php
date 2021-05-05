<?php include("include/header_admin.php");
 
 if (isset($_POST['envoyer'])) {
  $cat_title=trim($_POST['cat_title']);
  $user=$_SESSION['username'];
  $cat_content=$_FILES['cat_content']['name'];
  $cat_content_temp=$_FILES['cat_content']['tmp_name'];
  $file_type=$_FILES['cat_content']["type"];
  $file_size=$_FILES['cat_content']["size"];
 
  if (verification($cat_title,$cat_content)) {
    set_message("Choisissez un autre nom pour ce cours!");
  }
  else if ( $file_type == "application/pdf"){ 
    move_uploaded_file($cat_content_temp,"../cours/$cat_content");
  $query= "INSERT INTO categories(cat_title,cat_content,username) VALUES('$cat_title','$cat_content','$user')";
  $result= mysqli_query($connect,$query);
  if (!$result) {
    die('Aucune insertion possible'.mysqli_error($connect));
  }
  set_message("Cours enregistré avec succès!");
 }
 else{
  set_message("Cours non enregistré,merci de choisir un fichier au format PDF");
}
 }
  
 if (isset($_POST['checkboxArray'])) {
  foreach ($_POST['checkboxArray'] as $checkPostId_Value) {
       $bulk_options = $_POST['bulk_options'];
      switch ($bulk_options) {
        
          
        case 'Supprimer':
             if (isset($_SESSION['username']) && $_SESSION['username']== $user) {
          $query="DELETE FROM categories  WHERE cat_id= $checkPostId_Value";
           $result=mysqli_query($connect,$query);
           if (!$result) {
            die('Impossible de supprimer '.mysqli_error($connect));
             }
             }
             else {
                set_message("Vous n'êtes pas le propriétaire, suppression impossible");
            }
          break;
        
        default:
          # code...
          break;
      }
      

  }
    
 }
 ?>
  

<div id="wrapper">

    <!-- Navigation -->
    <?php include("include/navigation_admin.php");?>;
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bienvenue dans Goundo
                        <small><?php echo $_SESSION['username'];?></small>
                    </h1>
                    <div class="col-xs-6">
                        <h2 class="text-center"> <span style="color: red"><?php echo display_message(); ?></span> </h2>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <label for="cat_title" class="control-label col-xs-4">Titre du cours<span
                                        class="required">*</span></label>
                                <input type="text" name="cat_title" class="form-control" required>
                                <label for="cat_title" class="control-label col-xs-4">Fichier du cours<span
                                        class="required">*</span></label>
                                <input type="file" name="cat_content" accept=".pdf" class="form-control" required>


                            </div>
                            <br>

                            <div class="form-group">
                                <button type="submit" name="envoyer" class="btn btn-primary">Ajouter</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>

                            </div>
                        </form>
                        <form action="" method="POST" enctype="multipart/form-data">

                            <?php 
if (isset($_GET['moi'])) {
 $the_cat_id=escape($_GET['moi']);
 $query="SELECT * FROM categories WHERE cat_id=$the_cat_id";
$result=mysqli_query($connect,$query);
while ($row=mysqli_fetch_array($result)) {
  $cat_id=$row['cat_id'];
  $cat_title=$row['cat_title'];
  $cat_content=$row['cat_content'];
  ?>

                            <div class="form-group">
                                <label for="cat_title" class="control-label col-xs-4">Titre du cours<span
                                        class="required">*</span></label>
                                <input value="<?php if (isset($cat_title)) {echo $cat_title;};?>" type="text"
                                    name="cat_title" class="form-control">
  
                            </div>
                            <div class="form-group">
                                <label for="cat_title" class="control-label col-xs-4">Fichier<span
                                        class="required">*</span></label>
                                        <h2 style="color:purple"><?php if (isset($cat_content)) {echo $cat_content;};?></h2>
                                     <br>
                                    <input  type="file"
                                    name="cours_name" accept=".pdf" class="form-control" required>
                                      
                                    
                            </div>
                               
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="update">Mise à Jour</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>
                            </div>
                            <?php }} ?>

                            <?php 
  if (isset($_POST['update'])) {
$cat_title=trim($_POST['cat_title']);
$cours_name=$_FILES['cours_name']['name'];
$cours_name_temp=$_FILES['cours_name']['tmp_name'];
$file_type=$_FILES['cours_name']["type"];
 
if (verification($cat_title)) {
  set_message("Impossible d'éditer ce cours, ce nom existe déjà!");
}
else if($file_type == "application/pdf"){
  move_uploaded_file($cours_name_temp,"../cours/$cours_name");
$query_update_cat= "UPDATE categories SET cat_title='$cat_title', cat_content='$cours_name' WHERE cat_id=$the_cat_id";
$query_update_cat_result= mysqli_query($connect,$query_update_cat);
if (!$query_update_cat_result) {
  die('Pas de modification possible'.mysqli_error($connect));
}

header("Location:categories.php?message= Modification faite!");
set_message("Modification faite avec succès!");
}
else{
  set_message("Modification non réalisée,merci de choisir un fichier au format PDF");
}
}  

 ?>
                            <h2 class="text-center"> <span style="color: red"><?php display_message(); ?></span> </h2>
                        </form>
                    </div>
                    <div class="col-xs-6">
                    <form action="" method="POST">

<div id="bulkOptionContainer" class="col-xs-4">
  <select name="bulk_options" class="form-control" id="">
    <option value="Supprimer">Supprimer</option>
  </select>
</div>
<div class="col-xs-4">
  <input class="btn btn-primary" type="submit"  value="Appliquer">
  
</div>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th><input type="checkbox" name="" id="selectAllboxes"></th>
                                    <th>Numéro du cours</th>
                                    <th>Titre du cours</th>
                                    <th>Fichier du cours</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                      $query= "SELECT * FROM categories";
                                      $result=mysqli_query($connect,$query);
                                      while ($row=mysqli_fetch_assoc($result)) {
                                               
                                         $cat_id=$row['cat_id'];
                                         $cat_title=$row['cat_title'];
                                         $cat_content=$row['cat_content'];
                                         $user=$row['username'];
                                         echo "<tr>";
                                         ?>
                                         <td><input type='checkbox' class='checkboxes' name="checkboxArray[]" value="<?php echo $cat_id;?>"></td>
                                                               <?php
                                    echo "<td>Cours_$cat_id</td>";
                                    echo "<td> $cat_title</td>";
                                    echo "<td><a href='#'>$cat_content</a></td>";
                                      if (isset($_SESSION['username']) && $_SESSION['username']== $user) {
                                    echo "<td><a onClick=\"javascript: return confirm('Voulez-vous editer ce cours?');\" class='btn btn-primary' href='categories.php?moi=$cat_id'>Editer</a></td>";
                                    echo "<td><a onClick=\"javascript: return confirm('Voulez-vous supprimer ce cours?');\" class='btn btn-danger' href='categories.php?you=$cat_id'>Supprimer</a></td>";
                                      }
                                         echo "<tr>";
                                    
                                  }
                                    if (isset($_GET['you'])) {
                                      $the_cat_id=mysqli_real_escape_string($connect,$_GET['you']);
                                      $query="DELETE FROM categories WHERE cat_id=$the_cat_id";
                                      $result=mysqli_query($connect,$query);
                                      if (!$result) {
                                        die('Erreur de modification'.mysqli_error($connect));
                                      }
                                      
                                      
                                      else{
                                        header("Location:categories.php?suppression faite avec succès");
                                      }
                                    }
                                     

                                     ?>


                            </tbody>
                        </table>
                        </form>

                    </div>
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
<script type="text/javascript" src="js/edit_cat.js"></script>
<script type="text/javascript" src="js/del_cat.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>