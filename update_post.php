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
				<h2>Update POST</h2>
				</div>
				<div class="panel-body">
					<form method="post" action=""enctype="multipart/form-data">
						<div class="form-group row">
							<label class="control-label col-md-4">Title:</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Content:</label>
							<textarea name="content" class="form-control"></textarea>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Photo:</label>
							<input type="file" name="photo" class="form-control">
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Author:</label>
							<input type="text" name="author" class="form-control">
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Date:</label>
							<input type="date" name="date" class="form-control">
						</div>



						<div class="form-group">
							<button class="btn btn-success" name="submit">Post</button>
							<button class="btn btn-danger" onclick="window.open('post_view.php','_self')">View Post</button>

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
			$title=$_POST['title'];
			$content=$_POST['content'];
			$image_name=$_FILES['photo']['name'];
			$image_type=$_FILES['photo']['type'];
			$image_tmp=$_FILES['photo']['tmp_name'];
			$image_size=$_FILES['photo']['size'];
			$author=$_POST['author'];
			$date=$_POST['date'];

			if($title=='' || $content=='' || $author=='' || $date=='')
			{
				echo "<script>window.alert('Some fields are empty')</script>";
			}
			else if($image_type="IMAGES/jpeg" or $image_type="IMAGES/png" or $image_type="IMAGES/gif" or $image_type="IMAGES/jpg")
			{
				if($image_size<=200000)
				{
					move_uploaded_file($image_tmp,"images/$image_name");
				}

				$query="insert into post(title,content,photo,author,date)values('$title','$content','$image_name','$author','$date')";

			if(mysqli_query($con,$query))
			{
				echo "<script>window.alert('Post added successfully')</script>";
			}	
			else
			{
				echo "<script>window.alert('Not successful')</script>";
			}

			}
			else
			{
				echo "<script>window.alert('Image is too large than 2 mb')</script>";		
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

