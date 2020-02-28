<?php 
require_once 'Database.php';
class User{
	
	
	public function login($username,$password){
		$Db= new Database();
		$Db->connect();
		$rsh=$Db->select("user","*","username='".$username."' AND password='".$password."'");
		$UserFind=$rsh->num_rows;
		if($UserFind==1){
		return $rsh->fetch_array();
		}else{
			return false;
		}
	}
	
	
};
$a= new User();
$a->login("admin","admin");

?>