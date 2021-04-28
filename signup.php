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
			<div class="hidden-lg hidden-md"><img src="IMAGES/govlogo.png"  width="30px" height="30px"> SRM</div>
			<div class="brand-box hidden-sm hidden-xs"><img src="IMAGES/govlogo.png" width="30px" height="30px"> Sunkoshi Rural Municipality</div>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php" class="active">Home</a></li>
		<li><a href="login.php">Log in</a></li>
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
          <div class="panel-heading"><h3>Sign up to Sunkoshi Administrator</h3></div>
          <div class="panel-body">

          <div class="form-group row">
              <label class="control-label col-md-4">First Name:</label>
              <div class="col-md-8">
                <input type="text" name="fname" placeholder="First Name" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-4">Last Name:</label>
              <div class="col-md-8">
                <input type="text" name="lname" placeholder="Last Name" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-4">Gender:</label>
              <div class="col-md-8">
                <select name="gender" class="form-control">
                	<option value="Male">Male</option>
                	<option value="Female">Female</option>
                	<option value="Others">Others</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-4">Date of Birth:</label>
              <div class="col-md-8">
                <input type="date" name="dob" placeholder="Date of Birth" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-4">Phone:</label>
              <div class="col-md-8">
                <input type="text" name="phone" placeholder="+977..." class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-4">E-Mail:</label>
              <div class="col-md-8">
                <input type="email" name="email" placeholder="E-Mail" class="form-control">
              </div>
            </div>

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
            <button class="btn btn-success" name="submit">Create Account</button>
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
$con=mysqli_connect("localhost","root","","Sunkoshi");
if(mysqli_connect_errno())
{
  echo "Failed to connect database". mysqli_connect_error();
}
if(isset($_POST['submit']))
{
  $a=$_POST['fname'];
  $b=$_POST['lname'];
  $c=$_POST['gender'];
  $d=$_POST['dob'];
  $e=$_POST['phone'];
  $f=$_POST['email'];
  $g=$_POST['username'];
  $h=$_POST['password'];

  if($a=="" || $b=="" || $e=="" || $f=="" || $g=="" || $h=="")
  {
    echo "<script>window.alert('Some fields are empty')</script>";
  }
  else
  {
  $query1="insert into users (first_name,last_name,gender,dob,phone,email,username,password)values('$a','$b','$c','$d','$e','$f','$g','$h')";
  if(mysqli_query($con,$query1))
  {
    echo "<script>window.alert('User created successfully')</script>";
  }
  else
  {
    echo "<script>window.alert('User not created')</script>";
  }
}
}
mysqli_close($con);
?>