<?php
	session_start();
	if(isset($_SESSION['userEnroll'])){
		header("Location: ./mainScreen.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+2:400,700&display=swap" rel="stylesheet">
</head>
<body>

	<div id="heading" class="row row-no-gutters">
		<div class="col-md-2">
			<img src="images/iitr_logo.jpg" height="150" width="150" class="img-circle">
		</div>
		<div class="col-md-7">
			<div>
				<h1>Student's Club Resource Management System</h1>
			</div>
			<div>
				<h1>(SCReMS)</h1>
			</div>
		</div>
	</div>
	<div id="login" class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<form action="includes/login.inc.php" method="post">
				<div class="form-group">
				  <input type="text" name="logEnroll" class="form-control" placeholder="Enrollment Number">
				</div>
				<div class="form-group">
				  <input type="password" name="logPassword" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<p class="help-block"> <a href="createAccount.php">Create Account</a></p>
				</div>
				<button type="submit" name="logBtn" class="btn btn-default">Sign up</button>
			</form>
		</div>
		<div class="col-md-4">

		</div>

	</div>
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
