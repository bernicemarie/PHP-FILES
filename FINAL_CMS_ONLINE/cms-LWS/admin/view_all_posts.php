 <?php 
   if (isset($_POST['checkboxArray'])) {
    foreach ($_POST['checkboxArray'] as $checkPostId_Value) {
         $bulk_options = $_POST['bulk_options'];
        switch ($bulk_options) {
          case 'Approuve':
               if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
            $query="UPDATE posts SET post_status='$bulk_options' WHERE post_id= $checkPostId_Value";
            $result=mysqli_query($connect,$query);
            if (!$result) {
              die('errrrroooorrr'.mysqli_error($connect));
            }
            }
            else {
                set_message("Vous n'êtes pas le propriétaire, modification impossible");
            }
            break;
            case 'Desapprouve':
                 if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
            $query="UPDATE posts SET post_status='$bulk_options' WHERE post_id= $checkPostId_Value";
            $result=mysqli_query($connect,$query);
            if (!$result) {
              die('errrrroooorrr'.mysqli_error($connect));
            }
            }
             else {
                set_message("Vous n'êtes pas le propriétaire, modification impossible");
            }
            break;
            case 'Dupliquer':
                 if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
              $query= "SELECT * FROM posts WHERE post_id=$checkPostId_Value";
                        $result=mysqli_query($connect,$query);
                        while ($row=mysqli_fetch_assoc($result)) {
                        $post_id=$row['post_id'];
                        $post_title=$row['post_title'];
                        $post_author=$row['post_author'];
                        $post_date=$row['post_date'];
                        $post_image=$row['post_image'];
                        $post_content=escape($row['post_content']);
                        $post_comment_count=$row['post_comment_count'];
                        $post_status=$row['post_status'];
                      }

                       $query1= "INSERT INTO posts(post_title,post_author,post_date,post_image,post_content)
    VALUES('{$post_title}','{$post_author}','{$post_date}','{$post_image}','{$post_content}')";
    $query= mysqli_query($connect,$query1);
    if (!$query) {
      die("errrrrorooooooo".mysqli_error($connect));
    }
    }
     else {
                set_message("Vous n'êtes pas le propriétaire, modification impossible");
            }
            break;
             case 'reset':
                  if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
            $query="UPDATE posts SET posts_views_count=0 WHERE post_id= $checkPostId_Value";
            $result=mysqli_query($connect,$query);
            if (!$result) {
              die('errrrroooorrr'.mysqli_error($connect));
            }
            }
             else {
                set_message("Vous n'êtes pas le propriétaire, modification impossible");
            }
            break;
          case 'Supprimer':
               if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
            $query="DELETE FROM posts  WHERE post_id= $checkPostId_Value";
             $result=mysqli_query($connect,$query);
             if (!$result) {
              die('errrrroooorrr'.mysqli_error($connect));
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


 <form action="" method="POST">

<div id="bulkOptionContainer" class="col-xs-4">
  <select name="bulk_options" class="form-control" id="">
    <option value="">Selectionnez</option>
    <option value="Actif">Actif</option>
    <option value="Inactif">Inactif</option>
    <option value="Dupliquer">Dupliquer</option>
    <option value="reset">Reinitialiser</option>
    <option value="Supprimer">Supprimer</option>
  </select>
</div>
<div class="col-xs-4">
  <input class="btn btn-success" type="submit" name="appliquer" value="appliquer">
  <a class="btn btn-primary"href="posts.php?source=add_post">Ajouter un Post</a>
</div>
 <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th><input type="checkbox" name="" id="selectAllboxes"></th>
                          <th>Propriétaire</th>
                          <th>Titre du Post</th>
                          <th>Date</th>
                          <th>Image</th>
                          <th>Contenu</th>
                          <th>Nb Post Commenté</th>
                          <th>Nb Post Visité</th>
                          <th>Etat du Post</th>
                        </tr>
                      </thead> 
                      <tbody>
                     <input type="hidden" name="" value="<?php echo $user=$_SESSION['username'];?>">
                     <input type="hidden" name="" value="<?php echo $user_role=$_SESSION['user_role'];?>">
                        <?php 
                        $query= "SELECT * FROM posts";
                        $result=mysqli_query($connect,$query);
                        while ($row=mysqli_fetch_assoc($result)) {
                        $post_id=$row['post_id'];
                        $username=$row['username'];
                        $post_title=$row['post_title'];
                        $post_author=$row['post_author'];
                        $post_date=$row['post_date'];
                        $post_image=$row['post_image'];
                        $post_content=$row['post_content'];
                        $post_comment_count=$row['post_comment_count'];
                        $posts_views_count=$row['posts_views_count'];
                        $post_status=$row['post_status'];
                         echo"<tr>";
                         ?>
    <td><input type='checkbox' class='checkboxes' name="checkboxArray[]" value="<?php echo $post_id;?>"></td>
                          <?php 
                        echo "<td>$username</td>";
                        echo "<td>$post_title</td>";
                        echo "<td>$post_date</td>";
                      echo "<td><img width='50' height='50' src='../images/$post_image'></td>";
                        echo "<td>$post_content</td>";
                        echo "<td>$post_comment_count</td>";
                        echo "<td>$posts_views_count</td>";
                        echo "<td>$post_status</td>";
                        if (isset($_SESSION['username']) && $_SESSION['username']== $username) {
                        echo "<td><a onClick=\"javascript: return confirm('Voulez-vous voir cette image?');\" class='btn btn-primary' href='../post.php?p_id=$post_id'>Voir Post</a></td>";
                        echo "<td><a onClick=\"javascript: return confirm('Voulez-vous éditer cette ligne?');\" class='btn btn-primary' href='posts.php?source=edit_post&p_id=$post_id'>Editer</a></td>";


                        echo "<td><a onClick=\"javascript: return confirm('Voulez-vous approuver cette ligne?');\" class='btn btn-primary' href='posts.php?approuve=$post_id'>Approuver</a></td>";
                        echo "<td><a onClick=\"javascript: return confirm('Voulez-vous désapprouver cette ligne?');\" class='btn btn-danger' href='posts.php?desapprouve=$post_id'>Désapprouver</a></td>";
                           ?>
                           <form action="" method="POST">
                             <input type="hidden" name="post_id" value="<?php echo $post_id ?>">

                             <?php echo " <td> <a onClick=\"javascript: return confirm('Voulez-vous supprimer cette ligne?');\"><input class='btn btn-danger'  name='delete' type='submit' value='Supprimer'</a></td>"; ?>
                           </form>
 <?php

              //echo "<td><a onclick='_delete(event)' class='btn btn-danger' href='posts.php?delete=$post_id'>Supprimer</a></td>";
                                   echo"<tr>";   
                                  }
                        }
                                  ?>
                      </tbody>

                    </table>
                    </form>
                    <?php 

                     if (isset($_GET['desapprouve'])) {
                    $the_post_id= escape($_GET['desapprouve']);
                    $query="UPDATE posts SET post_status='Inactif' WHERE post_id=$the_post_id";
                    $result_desapprouve=mysqli_query($connect,$query);
                      header('location:posts.php?message=Bien desapprouvé'); }

                       if (isset($_GET['approuve'])) {
                    $the_post_id= escape($_GET['approuve']);
                    $query="UPDATE posts SET post_status='Actif' WHERE post_id=$the_post_id";
                    $result_desapprouve=mysqli_query($connect,$query);
                      header('location:posts.php?message=Bien approuvé'); }

                  if (isset($_POST['delete'])) {
                    $the_post_id= escape($_POST['post_id']);
                    $query_unlink="SELECT post_image FROM posts WHERE post_id=$the_post_id LIMIT 1";
                    $result_unlink=mysqli_query($connect,$query_unlink);
                  if(!$result_unlink){
                    die('Aucune suppression possible'.mysqli_error($connect));
                  }
                  $row= mysqli_fetch_array($result_unlink);
                  $path_image= "../images/{$row['post_image']}";
                  unlink($path_image);
                    $query="DELETE FROM posts WHERE post_id=$the_post_id";
                    $result=mysqli_query($connect,$query);
                    if ($result) {
                      header('Location:posts.php?message=Bien supprimé');
                    }
                    else{
                      die('Aucune suppression possible'.mysqli_error($connect));
                    } 
                  }
                     ?>