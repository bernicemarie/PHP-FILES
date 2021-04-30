<?php 
  class Session{
      private $signed_in = false;
      public $userid;
      public $message;
    function __construct(){
       session_start();
       $this->check_the_login();
       $this->check_message();
   }
public function is_signed_in(){
    return $this->signed_in;
}
public function login($userid){
 if ($user){
     $this->userid=$_SESSION['userid']=$userid->userid;
     $this->signed_in=true;
 }
}
  public function logout(){
      unset($_SESSION['userid']);
      unset($this->userid);
      $this->signed_in = false;
      session_destroy();
  }
   private function check_the_login(){
       if(isset($_SESSION['userid'])){
           $this->$userid=$_SESSION['userid'];
           $this->$signed_in=true;
       }
       else {
           unset($this->userid);
           $this->signed_in=false; 
       }
   }

   public function message($msg=""){
       if(!empty($msg)){
           $_SESSION['message']=$msg;
       }
       else {
           return $this->message;
       }
   }
     private function check_message(){
         if(isset($_SESSION['message'])){
             $this->message = $_SESSION['message'];
             unset($_SESSION['message']);
            
         } else {
             $this->message = "";
            
         }
     }

  }

$session= new Session();
 ?>