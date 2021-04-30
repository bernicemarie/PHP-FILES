<?php 
 class User {
	 protected static $db_table = "users";
	 public $userid;
	 public $username;
	 public $userpassword;
	 public $userfirstname;
	 public $userlastname;
   public static function  find_all_users(){
   	return self::find_this_query("SELECT * FROM  users");
   }


    public static function  find_users_by_id($id){
   	global $database;
   	$result_set = self::find_this_query("SELECT * FROM  users WHERE userid = $id LIMIT 1");
   	$found_user = mysqli_fetch_array($result_set);
   	return $found_user;
   }
   public static function verify_user($username,$password){
	global $database;
	$username= $database->escape_string($username);
	$password= $database->escape_string($password);
	$result_set = self::find_this_query("SELECT * FROM users WHERE username='{$username}'
	 AND userpassword='{$password}' LIMIT 1");
	if (mysqli_num_rows($result_set)>0){
		return true;
	}
	else{ 
		return false;
	}
   }


 public static function  find_this_query($sql){
   	global $database;
   	$result_set = $database->query($sql);

   	return $result_set;
   }
  public function saves(){
	  return isset($this->userid) ? $this->update() : $this->create();
  }
   
   public function create(){
	global $database;
	$sql = "INSERT INTO ".self::$db_table." (username, userpassword,userfirstname,userlastname)";
	$sql .="VALUES ('"; 
	$sql .= $database->escape_string($this->username) . "', '";
	$sql .= $database->escape_string($this->userpassword) . "', '";
	$sql .= $database->escape_string($this->userfirstname) . "', '";
	$sql .= $database->escape_string($this->userlastname) . "' )";
	if($database->query($sql)){
       $this->userid = $database->the_insert_id();
		return true;
	}
	else {
		return false;
	}
	

}

 public function update(){
	 global $database;
	 $sql = "UPDATE ".self::$db_table." SET ";
	 $sql .="username = '" . $database->escape_string($this->username) . "', ";
	 $sql .="userpassword = '" . $database->escape_string($this->userpassword) . "', ";
	 $sql .="userfirstname = '" . $database->escape_string($this->userfirstname). "', ";
	 $sql .="userlastname = '" . $database->escape_string($this->userlastname) . "' ";
	 $sql .=" WHERE userid = " . $database->escape_string($this->userid);
	 $database->query($sql);
	 return (mysqli_affected_rows($database->connection)==1) ? true : false ;
 }
    public function delete(){
		global $database;
		$sql = "DELETE FROM ".self::$db_table." WHERE userid = $database->escape_string($this->userid)";
		$database->query($sql);
		return (mysqli_affected_rows($database->connection)==1) ? true : false ;
	}

 }


  $user = new User();
 




 ?>