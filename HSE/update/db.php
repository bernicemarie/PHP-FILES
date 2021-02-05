<?php 
ob_start();
  $connect= mysqli_connect('localhost','root','','hse');
  if (!$connect) {
  	   die('<h1 class="text-center">Erreur de connection à la Base de données</h1>');
  }
   


 ?>