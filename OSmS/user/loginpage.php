<?php 
include("../connection.php");
session_start();
if(!isset($_SESSION['is_login']))
{
if(isset($_REQUEST['email']))
{
$email=mysqli_real_escape_string($conn,trim($_REQUEST['email']));
$password=mysqli_real_escape_string($conn, trim($_REQUEST['password']));
$sql="select email, password from user_table where email='".$email."' AND password='".$password."' limit 1";
$result = $conn->query($sql);
if($result->num_rows == 1)
{
	$_SESSION['is_login']=true;
	$_SESSION['email']=$email;
	echo "<script>location.href='userprofile.php';</script>";
	

}
else
{
	$msg = '<div class="alert alert-warning mt-2 " role="alert">Please Enter Correct email id or password</div>';
	
}
}
}
else
{
	echo "<script> location.href='userprofile.php';</script>";
}
$sql = "select name, email from user_table WHERE email='$email'"

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
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
	<div class="mt-5  text-center" style="font-size:30px; ">
	<i class="fas fa-stathoscope"></i>
<span>Online Service Management System</span>
</div>
<p class="text-center " style="font-size:20px;"><i class="fas fa-user text-danger mt-3"></i>Requester Area</p>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-md-4">
			<form action="" class="shadow-lg p-4" method="POST" >
				<div class="form-group">
				<i class="fas fa-user"></i>	<label for="email" class="font-weight-bold pl-2">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Email">
					<small>We will never share your email to the any third party</small>
				</div>
				<div class="form-group">
				<i class="fas fa-key"></i>	<label for="password" class="font-weight-bold pl-2">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
														<?php if(isset($msg))
			{echo $msg;
			} ?>
									<button type="submit" class="btn btn-outline-danger mt-5 font-weight-bold btn-block shadow-sm">Login</button>

			</form>
			<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm text-center">Back To Home</a></div>
		</div>
	</div>
</div>

<!--java Script File-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/all.min.js"></script>
</body>
</html>