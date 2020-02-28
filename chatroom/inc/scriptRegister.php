<?php  
require_once '../libs/Database.php';

 $name = $_POST['fullname']; 
 $username= $_POST['username'];
 $email = $_POST['password'];
 $password = $_POST['password'];
 $Create= new Database();
 if($name AND $username AND $email AND $password !=''){
	 $Create->connect();
	 $rsh= $Create->insert("user",array('',$name,$username,$password,$email));
	 if($rsh){
		 echo "You account has been created <a href='../index.php'> Click here to Login </a>";
	 }
 }else{
	 echo "Please fill all the fields";
 }
 

?>