<html>
<head>
		<title>Create new account</title>
		<script>
		$(function(){
			$("#re-password").on("click",function(){
				alert(1);
			});
		});
		
		</script>
</head>
<body>
<div class="row">
<div class="col-md-6" >
<div class="form-group">
<form method="post" action="inc/ScriptRegister.php" >
<div class="col-md-8"><label for="name">Name:</label><input type="text" class="form-control" name="fullname" placeholder="Enter full name"></div>
<div class="col-md-8"><label for="name">Username:</label><input type="text" class="form-control" name="username" placeholder="Enter Username"></div>
<div class="col-md-8"><label for="name">Email:</label><input type="text" class="form-control" name="email" placeholder="Enter Email"></div>
<div class="col-md-8"><label for="name">Password:</label><input id="password" type="password" name="password" class="form-control" placeholder="Enter Password"></div>
<div class="col-md-8"><br /><button type="submit" class="btn btn-primary pull-right" >Create Now </button></div>

</form>
</div>
</div>
</div>

</body>
</html>