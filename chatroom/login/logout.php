<?php  
session_start();
$_SESSION['u_id'];

session_destroy();
header("LOCATION: ../index.php");

?>