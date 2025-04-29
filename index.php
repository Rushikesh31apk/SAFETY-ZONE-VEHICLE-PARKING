<?php
session_start();
error_reporting(0);
include('includes/dbconn.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"SELECT ID from admin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['vpmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Login Failed !!";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicle Parking System</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<style>
	body {
	  background-image: url('p.jpg'); /* Your background image path */
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center center;
	  height: 100vh;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	}

	h2 {
	  color: white;
	  text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
	  margin-bottom: 20px;
	}

	.login-panel {
	  background: rgba(255, 255, 255, 0.95); /* semi-transparent white */
	  border-radius: 15px;
	  box-shadow: 0px 8px 16px rgba(0,0,0,0.3);
	  transition: transform 0.3s, box-shadow 0.3s;
	  padding: 30px;
	}

	.login-panel:hover {
	  transform: translateY(-5px);
	  box-shadow: 0px 12px 24px rgba(0,0,0,0.4);
	}

	.panel-heading {
	  font-size: 20px;
	  font-weight: bold;
	  text-align: center;
	  background: linear-gradient(to right, #4CAF50, #45a049);
	  color: white;
	  border-top-left-radius: 15px;
	  border-top-right-radius: 15px;
	  padding: 15px;
	  margin: -30px -30px 30px -30px;
	}

	.btn-success {
	  width: 100%;
	  border-radius: 25px;
	  background: linear-gradient(to right, #4CAF50, #45a049);
	  border: none;
	  padding: 10px;
	  font-size: 16px;
	}

	.btn-success:hover {
	  background: linear-gradient(to right, #45a049, #4CAF50);
	}

	.form-control {
	  border-radius: 20px;
	  padding: 10px 15px;
	  font-size: 15px;
	}

	.alert {
	  border-radius: 10px;
	  margin-bottom: 20px;
	  font-size: 14px;
	}

	.checkbox a {
	  color: #333;
	  text-decoration: none;
	}
	</style>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<center><h2><b>Vehicle Parking System</b></h2></center>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Please Log In To Continue</div>
				<div class="panel-body">
					<form method="POST">
					<?php if ($msg) {
						echo "<div class='alert bg-danger' role='alert'>
						<em class='fa fa-lg fa-warning'>&nbsp;</em> 
						$msg
						<a href='#' class='pull-right'>
						<em class='fa fa-lg fa-close'></em></a></div>";
					} ?> 
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" type="text" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" required>
						</div>
						<div class="checkbox text-center">
							<a href="forgot-password.php">Forgot Password?</a>
						</div>
						<button class="btn btn-success" type="submit" name="login">Login</button>
					</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>