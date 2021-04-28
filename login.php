<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Sunkoshi Rural Municipality | About SRM | Staffs | News and Notices | Articles | Contact us </title>
	<meta charset="utf-8">
	<meta name="copyright" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact information">
	<meta name="keywords" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact information">
	<meta name="description" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact information">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="favicon icon" href="IMAGES/favicon.png">
</head>
<body>
<!-- login menu start -->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
			<a href="#" class="navbar-brand">
			<div class="hidden-lg hidden-md"><img src="IMAGES/govlogo.png" width="30px" height="30px"> SRM</div>
			<div class="brand-box hidden-sm hidden-xs"><img src="IMAGES/govlogo.png" width="30px" height="30px"> Sunkoshi Rural Municipality</div>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php" class="active">Home</a></li>
		<li><a href="signup.php">Sign Up</a></li>
		</ul>
		</div>
		</div>
</nav>
<!-- login menu end -->
<!-- creating login form -->
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form class="panel panel-info" method="post" action="">
          <div class="panel-heading"><h3>Login to Administrator</h3></div>
          <div class="panel-body">
            <div class="form-group row">
              <label class="control-label col-md-4">Username:</label>
              <div class="col-md-8">
                <input type="text" name="username" placeholder="Username" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-4">Password:</label>
              <div class="col-md-8">
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
            </div>
            <div class="form-group">
            <button class="btn btn-success" name="submit">Log in</button>
            <button class="btn btn-danger" name="reset">Cancel</button>
            </div>
          </div>
        </form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<!-- end login form -->
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","sunkoshi");
if(mysqli_connect_errno())
{
	echo "Failed to connect database". mysqli_connect_error();
}
if(isset($_POST['submit']))
{
	$aa=$_POST['username'];
	$bb=$_POST['password'];

	$query="select * from users where username='$aa' and password='$bb'";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		$_SESSION['username']=$aa;
		echo "<script>window.open('main.php','_self')</script>";
	}
	else
	{
		echo "<script>window.alert('Invalid Username or Password')</script>";
	}
}
mysqli_close($con);
?>

