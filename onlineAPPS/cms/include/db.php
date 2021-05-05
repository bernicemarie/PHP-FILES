<?php 
ob_start();
  $connect= mysqli_connect('localhost','c1545647c_bernice','K@m@no87$','c1545647c_cms');
  if (!$connect) {
  	   die('<h1>Erreur de connection à la Base de données</h1>');
  }
   


 ?>