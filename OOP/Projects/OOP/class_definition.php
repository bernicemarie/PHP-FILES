<?php 

class cars{

   function gretting(){

   }
function gretting2(){

   }

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
//echo $class . "<br>";
}
$the_methods= get_class_methods('cars');

foreach ($the_methods as $methods) {
	echo $methods . "<br>";
}
 ?>