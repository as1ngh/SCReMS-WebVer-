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
	<div id="login-info" class="row">
		<div class="col-md-4">

		</div>
        <div class="col-md-4">
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="newEmail" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="newPassword" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="newConfirmPassword" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                        <label>Enrollment Number</label>
                        <input type="text" name="newEnroll" class="form-control" placeholder="Enroll. No.">
                </div>
                <button type="submit" name="btnSubmit" class="btn btn-default">Submit</button>
            </form>
        </div>
		<div class="col-md-4">

		</div>

	</div>
	


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>