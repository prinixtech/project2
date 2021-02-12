<?php 
include("../connection.php");
session_start();
if($_SESSION['is_login'])
{
	$email =$_SESSION['email'];
}
else 
{
	echo "<script>location.href='userprofile.php'</script>";

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>userprofile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 "> 
 <!--bootstrapo code-->
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <!--fontawesom code-->
 <link rel="stylesheet" type="text/css" href="../css/all.min.css">
 <!--googlefont code-->

 <!--style code-->
 <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
 <!--Top Nav bar code-->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow "><a href="userprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a></nav>
 <!--End Top Nav bar code-->


<!--Start Container code-->
  <div class="container-fluid" style="margin-top: 40px;">
	<div class="row"> <!--Start row-->
		<nav class="col-sm-2 bg-light sidebar py-5">   <!--Side bar code-->
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a href="userprofile.php" class="nav-link"><i class="fas fa-user"></i>Profile</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fab fa-accessible-icon"></i>Submit Request</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fas fa-align center"></i>Service Status</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fas fa-key"></i>Change Password</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
					</li>
				</ul>
			</div>
		</nav> <!--End Side bar code-->
		<div class="col-sm-6 mt-5 ">    <!--Start Profile  code-->
			<form action="" method="POST" class="mx-5">
				<div class="form-group">
					<label for="InputEmail"> Email</label>
					<input type="email" name="email" id="email" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="name"> Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<button type="submit" class="btn btn-danger" name="nameupdate" >Update</button>
			</form>
		</div> <!--End Profile  code-->
	</div><!--End  row-->
</div> <!--end Container code-->

 

<!--End Side bar code-->




<!--java Script File-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/all.min.js"></script>
</body>
</html>