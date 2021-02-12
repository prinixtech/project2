<?php 
include("connection.php");
//Only Signup click 
if(isset($_REQUEST['rsignup']))
{
	//check all fields 
	if(($_REQUEST['name']=="")|| ($_REQUEST['email']=="")||($_REQUEST['password']==""))
	{
$regmsg= '<div class="alert alert-warning mt-2 " role="alert">All fields are required</div>';

	}
	else
	{
		//check email already exist
$sql= "select email from user_table WHERE email='".$_REQUEST['email']."'";
$result=$conn->query($sql);
if($result->num_rows==1)
{
	$regmsg1= '<div class="alert alert-warning mt-2 " role="alert">Email ID already register</div>';
}
else
{
	// otherwise account created
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$password=$_REQUEST['password'];
$sql="insert into user_table (name,email,password) values('".$name."','".$email."','".$password."')";
if(mysqli_query($conn,$sql)==true)
	{
$regmsg1= '<div class="alert alert-success mt-2 " role="alert"> "Account Successfully created</div>';
	}
 else
 {
 	$regmsg1= '<div class="alert alert-warning mt-2 " role="alert"> "Account Successfully not created</div>';

 }
	}
}
}
 ?>

 <div class="container pt-5" id="registration">
	<h2 class="text-center">
		Create an Account
	</h2>
<div class="row mt-4 mb-4">
	<div class="col-md-6 offset-md-3">
		<form action="index.php" class="shadow-lg p-4" method="POST">
			<div class="form-group">
				<i class="fas fa-user"></i>
				<label for="name" class="font-weight-bold pl-2">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
				<?php if(isset($regmsg))
			{echo $regmsg;
			} ?>
			</div>
			<div class="form-group">
				<i class="fas fa-user"></i>
				<label for="email" class="font-weight-bold pl-2">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
				<small>We'll never share your email with anyone else</small>
				<?php if(isset($regmsg))
			{echo $regmsg;
			} ?>
			</div>
			<div class="form-group">
				<i class="fas fa-key"></i>
				<label for="password" class="font-weight-bold pl-2">Password</label>
				<input type="password" name="password" class="form-control" placeholder="password">
				<?php if(isset($regmsg))
			{echo $regmsg;
			} ?>
			</div>
			<button type="submit" class="btn btn-danger mt-5 shadow-sm btn-block font-weight-bold" name="rsignup">Sign Up</button>
			<em class="font-size:10px">Note- By clicking signup , you agree to our terms and condition</em>
			<br>
			<?php if(isset($regmsg1))
			{echo $regmsg1;
			} ?>
		</form>
</div>
</div>
</div>