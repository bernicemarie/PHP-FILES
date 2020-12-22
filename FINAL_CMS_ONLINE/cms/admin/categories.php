<?php include("include/header_admin.php");
 
 if (isset($_POST['envoyer'])) {
  $cat_title=trim($_POST['cat_title']);
  $cat_content=$_FILES['cat_content']['name'];
  $cat_content_temp=$_FILES['cat_content']['tmp_name'];
  move_uploaded_file($cat_content_temp,"../cours/$cat_content");
  if (verification($cat_title,$cat_content)) {
    set_message("Choisissez un autre nom pour ce cours!");
  }
  else if (!empty($cat_title)){ 
  $query= "INSERT INTO categories(cat_title,cat_content) VALUES('$cat_title','$cat_content')";
  $result= mysqli_query($connect,$query);
  if (!$result) {
    die('Aucune insertion possible'.mysqli_error($connect));
  }
  set_message("Cours enregistré avec succès!");
 }
  
 }
 else{
    set_message("");
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
                                <input type="file" name="cat_content" class="form-control" required>


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
                                    <input  type="file"
                                    name="cours_name" class="form-control" required>
                                    <img width="100" src="../cours/<?php echo $cat_content;?>" alt="Aucun fichier" required>
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
if (verification($cat_title)) {
  set_message("Impossible d'éditer ce cours, ce nom existe déjà!");
}
else if(!empty($cat_title)){
  move_uploaded_file($cours_name_temp,"../cours/$cours_name");
$query_update_cat= "UPDATE categories SET cat_title='$cat_title', cat_content='$cours_name' WHERE cat_id=$the_cat_id";
$query_update_cat_result= mysqli_query($connect,$query_update_cat);
if (!$query_update_cat_result) {
  die('Pas de modification possible'.mysqli_error($connect));
}

header("Location:categories.php?message= Modification faite!");
set_message("Modification faite avec succès!");
}
} else{
  set_message("");
}

 ?>
                            <h2 class="text-center"> <span style="color: red"><?php display_message(); ?></span> </h2>
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
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
                                               echo "<tr>";
                                         $cat_id=$row['cat_id'];
                                         $cat_title=$row['cat_title'];
                                         $cat_content=$row['cat_content'];
                                    echo "<td> $cat_id</td>";
                                    echo "<td> $cat_title</td>";
                                    echo "<td><a href='#'>$cat_content</a></td>";
                                    echo "<td><a onClick=\"javascript: return confirm('Voulez-vous editer ce cours?');\" class='btn btn-primary' href='categories?moi=$cat_id'>Editer</a></td>";
                                    echo "<td><a onClick=\"javascript: return confirm('Voulez-vous supprimer ce cours?');\" class='btn btn-danger' href='categories?you=$cat_id'>Supprimer</a></td>";
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
                                        header("Location:categories?suppression faite avec succès");
                                      }
                                    }
                                     

                                     ?>


                            </tbody>
                        </table>

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