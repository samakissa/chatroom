<?php 
require_once '../libs/Database.php';
$getMassage= new Database();

	$getMassage->connect();
	$chat=$getMassage->select("chat");
	while($ChatRow= $chat->fetch_array()){
		$u_id= $ChatRow[1];
		$massage = $ChatRow[2];
		$user= $getMassage->select("user","*","u_id='".$u_id."'");
		$userData= $user->fetch_array();
		$name= $userData[1];
		
		echo "<br />  <b>(".$name ."):</b> &nbsp; ".$massage;
		
	}?>