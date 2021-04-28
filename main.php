<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Sunkoshi Rural Municipality | About SRM | Staffs | News and Notices | Articles| Contact Us</title>
	<meta charset="utf-8">
	<meta name="copyright" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact Information">
	<meta name="Keywords" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact Information">
	<meta name="Description" content="Introduction of SRM | Staffs | News and Notices | Articles | Contact Information">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
	<link rel="favicon icon"  href="IMAGES/Favicon.png">
</head>
<body>
	<!--navbar start-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<div class="hidden-lg hidden-md"><img src="IMAGES/govlogo.png" width="30px" height="30px" alt="logo">SRM</div>
					<div class="brand-box hidden-sm hidden-xs"><img src="IMAGES/govlogo.png" width="30px" height="30px" alt="logo">Sunkoshi Rural Municipality</div>
						</a>
					</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">

		<li><a href="index.php" class="active">Home</a></li>
		
	    <li><a href="logout.php"><?php echo $_SESSION['username']; ?> Log Out</a></li>
			
	        </ul>
            </div>
            </div>
  </nav>
  <!--navbar end-->
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<ul class="navbar" style="background-color: yellow; line-height: 50px;">
				
				<li><a href="#"><span class=" glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
				<li><a href="update_gallery.php"><span class="glyphicon glyphicon-camera"></span>Update Gallery</a></li>
				<li><a href="update_post.php"><span class="glyphicon glyphicon-file"></span>Update Post</a></li>
				<li><a href="update_population.php"><span class="glyphicon glyphicon-camera"></span>Update Population</a></li>
				<li><a href="update_staff.php"><span class="glyphicon glyphicon-user"></span>Update Staff</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
			<div class="panel-heading">
				<h2>Main Dashboard</h2>
				</div>
				<div class="panel-body">
					<p>
					You can update gallery,post, population as well as staff's details from the dashboard of Sunkoshi Rural Municipality. There are update and delete facilities into every pages.
				</p>
				</div>	
			</div>
		</div>
	</div>
</div>
</div>

</body>
</html>
<?php

}

?>