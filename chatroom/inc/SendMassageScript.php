<?php 
require_once '../libs/Database.php';
	
	$ChatInsert= new Database();
	
	$u_id = $_POST['u_id'];
	$massage = $_POST['massage'];
	if($massage!=''){
	
	$massage= htmlentities($massage);
		$ChatInsert->connect();
		
		$ChatInsert->insert("chat",array('',$u_id,$massage));
	}
		
?>