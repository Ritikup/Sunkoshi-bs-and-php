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
		<li><a href="about.php">About Us</a></li>
		<li><a href="notice.php">Notice and Information</a></li>
		<li><a href="articles.php">Articles</a></li>
		<li><a href="staff.php">Staffs</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
			<ul class="dropdown-menu">
				<li><a href="login.php">Log In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</li>

	</ul>
</div>
  </div>
  </nav>
<!--about panel heading-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
  </div>
</div>
  

<!-- Another container two column-->
<div  class="container">
	<div class="row">
<div class="col-md-8">
	<div class="panel panel-danger">
		<div class="panel-heading">
		<h3>Contact Information</h3>
	</div>
	<div class="panel-body">

<div class="col-md-12">
	 Sunkoshi Rural Municipality<br>
        Solukhumbu, Nepal<br>
        Phone: +977 05 5243221<br>
        email: info@sunkoshimun.com<br>
        url: www.sunkoshimun.com<br>


     </div>
	 </div>
  
	</div>
	<div class="panel panel-danger">
		<div class="panel-heading">
		<h3>Send Feedback</h3>
	</div>
	<div class="panel-body">

<div class="col-md-12">
	<form class="panel panel-info" method="post" action="send_feedback.php">
	
	
	<div class="panel-body">
		<div class="form-group row">
			<label class="control-label col-md-4"> Name:</label>
			<div class="col-md-8">
				<input type="text" name="fullname" placeholder="Your Name" class="form-control">
			</div>
		</div>
		
		
		
		<div class="form-group row">
			<label class="control-label col-md-4">E-Mail:</label>
			<div class="col-md-8">
				<input type="email" name="email" placeholder="E-Mail" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="control-label col-md-4">Message:</label>
			<div class="col-md-8">
				<textarea rows="5" cols="50" class="form-control" name="msg" placeholder="Your Message goes here....."></textarea>
				
			</div>
		</div>




		<div class="form-group">
			<button class="btn btn-success" name="submit">Send</button>
			<button class="btn btn-danger" name="reset">Cancel</button>

	</div>
</div>
</form>
     </div>
	 </div>
  
	</div>
	
</div>
<div class="col-md-4">
<form class="panel panel-default">
		<div class="panel-heading">
			<h3>Searching Something</h3>
		</div>
		<div class="panel-body">
			<div class="input-group">
				<input type="search" name="search" class="form-control" placeholder="Search">
				<div class="input-group-btn">
					<button class="btn btn-default"> <span class="glyphicon glyphicon-search">
					 </span></button>
				</div>
			</div>
		</div>
	</form>


<form class="panel panel-info">
	
	<div class="panel-heading"> Login Area</div>
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
<!--Gallery-->
<div class="panel panel-default">
		<div class="panel-heading">
		<h3>Gallery</h3>
	</div>
	<div class="panel-body">
<div class="col-md-4">
	<a href="gallery.php"><img src="IMAGES/fish farm.jpg" class="thumbnail" width="100%"></a>
       </div>

	  </div>
	 </div>
    </div>
   </div>
  </div>
 
  <!--creating footer-->
  
<div id="tour" class="bg-1">
<div class="container">
<div class="row">
  <div class="col-md-4">
      <h3>Notice:</h3>
      <p>
        notice
      </p>
  </div>

  <div class="col-md-4">
      <h3>IT Manager:</h3>
      <p>
        Ritik Shah<br>
        Ratnanagar-10, Chitwan<br>
        Phone: 9846164663<br>
        Email: info@rajendramahato.com.np<br>
        URL: www.rajendramahato.com.np
      </p>
  </div>

  <div class="col-md-4">
      <h3>Contact us</h3>
      <p>
        Sunkoshi Rural Municipality<br>
        Solukhumbu, Nepal<br>
        Phone: +977 05 5243221<br>
        email: info@sunkoshimun.com<br>
        url: www.sunkoshimun.com<br>
      </p>
  </div>
  
</div>
</div>

<!-- creating footer -->
<footer class="text-center">
  <a href="#" class="up-arrow" data-toggle="tooltip" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>All right reserved @ <a href="https://www.sunkoshimun.gov.np" data-toggle="tooltip">www.sunkoshimun.gov.np</p>
  </a>
  <br>
</footer>
</div>
</body>
</html>