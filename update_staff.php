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
				
				<li><a href="main.php"><span class=" glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
				<li><a href="update_gallery.php"><span class="glyphicon glyphicon-camera"></span>Update Gallery</a></li>
				<li><a href="update_post.php"><span class="glyphicon glyphicon-file"></span>Update Post</a></li>
				<li><a href="update_population.php"><span class="glyphicon glyphicon-camera"></span>Update Population</a></li>
				<li><a href="update_staff.php"><span class="glyphicon glyphicon-user"></span>Update Staff</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
			<div class="panel-heading">
				<h2>Update Staff Information</h2>
				</div>
				<div class="panel-body">
					<form method="post" action="">
						
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
              <label class="control-label col-md-4">Address:</label>
              <div class="col-md-8">
                <input type="text" name="address" placeholder="Address" class="form-control">
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
              <label class="control-label col-md-4">Post:</label>
              <div class="col-md-8">
                <input type="text" name="post" placeholder="Staff" class="form-control">
              </div>
            </div>



						<div class="form-group">
							<button class="btn btn-success" name="submit">Add Staff Record</button>
							
							<button class="btn btn-danger" name="cancel">Cancel</button>
						</div>
					</form>

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
  $e=$_POST['address'];
  $f=$_POST['phone'];
  $g=$_POST['email'];
  $h=$_POST['post'];

  if($a=="" || $b=="" || $e=="" || $f=="" || $g=="" || $h=="")
  {
    echo "<script>window.alert('Some fields are empty')</script>";
  }
  else
  {
  $query1="insert into staffs (first_name,last_name,gender,dob,address,phone,email,post)values('$a','$b','$c','$d','$e','$f','$g','$h')";
  if(mysqli_query($con,$query1))
  {
    echo "<script>window.alert('Staffs info added successfully')</script>";
  }
  else
  {
    echo "<script>window.alert('User not created')</script>";
  }
}
}
mysqli_close($con);
?>
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

