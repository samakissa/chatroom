<html>
<head>
		<title>Chat Room</title>
		<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
		<link rel="stylesheet" href="resources/css/bootstrap.css" />
		<link rel="stylesheet" href="resources/css/bootstrap.min.css" />
		
</head>
<body>
<?php 
session_start();
$u_id= $_SESSION['u_id'];
$name= $_SESSION['name'];
if($u_id!=''){
	
echo "<a href='#' class='btn btn-default'><strong>Hello ".$name.":</strong></a>"."   <a href='login/logout.php' class='btn btn-default' >Logout</a>";
?>
<div class="row">
<div class="col-sm-7 col-md-7 col-lg-7" style="background:gray; margin-left:200px; margin-top:50px; text-align:center; color:white; font-size:20px;">Chat Room</div><br />
<div class="col-sm-7 col-md-7 col-lg-7 massages" style="background:white; margin-left:200px; border:1px solid black; height:400px; overflow-y:auto;" ></div>
<div class="col-sm-7 col-md-7 col-lg-7 " style="margin-left:200px;" >
<input type="text" id="u_id" hidden value="<?php echo $u_id; ?>"/>
<input type="text" id="massage" style="height:70px;" class="form-control" placeholder="Enter your massage......" />

<div class="col-md-8" style="background:skyblue;">
<strong > Developed by : </strong> Hamid Raza <br />
<strong >Contact : </strong> <a href="mailto: badshah.hazor@gmail.com"> badshah.hazor@gmail.com</a><br />
<strong> Phone No. </strong> +92347-4923922 
</div>
</div>
</div>
<?php }else{?>

<div class="row">
<br />
	<form method="post"  action="login/login.php">
	<div class="col-md-3">
	<input type="text" name="username" placeholder="Enter username.." class="form-control" />
	</div>
	<div class="col-md-3">
	<input type="password" name="password" placeholder="Enter password.." class="form-control" />
	</div>
	<div class="col-md-3">
	<button class="btn btn-primary" type="submit">Login</button>
	</div>
	</form>
	
 </div>
 <br /> <br /> <br /> <br /> 
<?include('inc/register.php'); } ?>
<script src="resources/js/bootstrap.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.3.min.js" ></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="resources/js/send.js"></script>
</body>
</html>