<?php 

class cars{
	var $va1 = 5;
	var $va2 = 5;

   function car_details(){
   	return "This cars has  ".$this->va1."  wheels";

   }
 

}
$rav4 = new cars;
echo $rav4->va1."<br>";
echo $rav4->car_details();
 
 ?>