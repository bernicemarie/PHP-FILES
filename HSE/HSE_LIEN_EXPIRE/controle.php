 <?php 
session_start();
if ($_SESSION['role']=='') {
    header('location:index.php');
}
 ?>