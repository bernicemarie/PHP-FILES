<?php
 /* class User {
     public $name ="Bernice";
     public function sayHello(){
         return $this->name . " ".'says hello to PHP OOP';
         
     }
 }
$user1 = new User();
$user2 = new User();
 $user1->name ="Bernice";
echo $user1->name ."<br>";
echo $user1->sayHello();

echo "<br>";
 $user2->name ="Jean";
echo $user2->name ."<br>";
echo $user2->sayHello();
 */
 class User {
     public $name ;
     public $age ;
     public function __construct($name,$age){
         $this->name = $name;
         $this->age = $age;
         
        /*  echo 'I do love coding....'; */
     }
     public function sayHello(){
         return $this->name . " ".'says hello to PHP OOP';
         
     }
 }
$user1 = new User('Bernice',15);
echo $user1->name. "  is  " .$user1->age."years old";

  