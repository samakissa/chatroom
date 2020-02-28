<?php 
require_once '../libs/UserClass.php';
$username=$_POST['username'];
$password=$_POST['password'];
$loginUser = new User();
$User=$loginUser->login($username,$password);
while($UserRow= $User){
	$u_id = $UserRow[0];
	$Name = $UserRow[1];
	$dbUsername = $UserRow[2];
	$dbPassword = $UserRow[3];
	
}
if($username === $dbUsername  AND $password === $dbPassword){
	session_start();
	$_SESSION['u_id']=$u_id;
	$_SESSION['name']=$Name;
	header("LOCATION: ../index.php");
	
}else{
	return false;
}



?>