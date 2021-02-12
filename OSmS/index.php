<!DOCTYPE html>
<html>
<head>
	<title>OSMS</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 "> 
 <!--bootstrapo code-->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <!--fontawesom code-->
 <link rel="stylesheet" type="text/css" href="css/all.min.css">
 <!--googlefont code-->

 <!--style code-->
 <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	 <!--Start Navbar code-->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
	<a href="index.php" class="navbar-brand"> OSMS</a>
<span class="navbar-text">Customer's happiness is our aim </span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
	<ul class="navbar-nav pl-5 custom-nav">
	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>	
	<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>	
	<li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>	
	<li class="nav-item"><a href="user/loginpage.php" class="nav-link">	Login</a></li>
	<li class="nav-item"><a href="#contactus" class="nav-link">contact US</a></li>	
	</ul>
</div>
</nav>
 <!--End Navbar code-->
 <!--Start Header Jumbotron code-->
<header class="jumbotron back-image" style="background-image: url(img/pic.jpg);">
	<div class="myclass mainhead">
		<h1 class="text-uppercase text-danger font-weight-bold">
		Welcome To OSMS
		</h1>
		<p class="font-italic">
		Customer's happiness is our aim 
		</p>
		<a href="user/loginpage.php" class="btn btn-success mr-4">Login</a>
	 	<a href="#registration" class="btn btn-danger mr-4">Sign Up </a>
	</div>
</header>
<!--end Header Jumbotron code-->
<!--introductoion Services code-->
<div class="container">
<div class="jumbotron">
	<h3 class="text-center">OSMS Services</h3>
	<p>aragraph definition: A paragraph is a unit of writing in a larger body of work. A paragraph expresses a particular topic or theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indented to show their beginnings.
		aragraph definition: A paragraph is a unit of writing in a larger body of work. A paragraph expresses a particular topic or theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indented to show their beginnings.
		aragraph definition: A paragraph is a unit of writing in a larger body of work. A paragraph expresses a particular topic or theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indented to show their beginnings.
		aragraph definition: A paragraph is a unit of writing in a larger body of work. A paragraph expresses a particular topic or theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indented to show their beginnings.
		
	</p>
</div>	
</div>
<!--Endintro Our Services code-->

<!--Our Services code-->
<div class="container text-center border-bottom" id="services">
	<h2 class="text-center">Our Services</h2>
	<div class="row mt-4">
	<div class="col-sm-4 mb-4">		
	<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>	
	<h4 class="mt-4">Electronic Application</h4>		
	</div>
<div class="col-sm-4 mb-4">		
	<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>	
	<h4 class="mt-4">Preventing Maintenance</h4>		
	</div>
	<div class="col-sm-4 mb-4">		
	<a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>	
	<h4 class="mt-4">Fault Repair</h4>		
	</div>
</div>
</div>
<!--End Our Services code-->

<!--Start Registration form code-->
<?php  include ('registration.php');
?>
<!--end Registration form code-->


<!--Start Happy customer code-->
<div class="jumbotron bg-danger">
	<div class="container">
		<h2 class="text-center text-white">Happy Customers</h2>
		<div class="row inline-block mt-5">
			<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center">
						<img src="img/pp2.jpg" alt="img" class="img-fluid" style="border-radius: 100px;">
						<h3 class="card-title">Shweta </h3>
						<p class="card-text">theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research ., new paragraphs are indente</p>
					</div>
				</div>
			</div>
						<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center">
						<img src="img/pp3.jpg" alt="img" class="img-fluid" style="border-radius: 100px;">
						<h3 class="card-title">Shweta </h3>
						<p class="card-text">theme. What is a Paragraph? A paragraph is a component of fictional prose and nonesearch papers, books, etc., new paragraphs are indente</p>
					</div>
				</div>
			</div>
			               <div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center">
						<img src="img/pp1.jpg" alt="img" class="img-fluid" style="border-radius: 100px;">
						<h3 class="card-title">Shweta </h3>
						<p class="card-text">theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indente</p>
								</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
				<div class="card shadow-lg mb-2">
					<div class="card-body text-center">
						<img src="img/pp4.jpg" alt="img" class="img-fluid" style="border-radius: 100px;">
						<h3 class="card-title">Shweta </h3>
						<p class="card-text">theme. What is a Paragraph? A paragraph is a component of fictional prose and non-fiction writings. When writing essays, research papers, books, etc., new paragraphs are indente</p>
					</div>
				</div>
			</div>
		                      </div>
	</div>
</div>

<!--end happy customer code-->


<!--Contact US code-->
<div class="container" id="contactus">
<h2 class="text-center mb-4	">	Contact Us</h2>	
<div class="row">	
	<div class="col-md-8">
		<form action="" method="POST">	
			<input type="	text" name="name" class="form-control" placeholder="Name"><br>
			<input type="	text" name="subject" class="form-control" placeholder="Subject"><br>
			<input type="	email" name="email" class="form-control" placeholder="Email"><br>
			<textarea class="form-control" name="message" placeholder="How can we help you" style="height: 150px;"></textarea><br>	
			<input type="submit" name="submit" class="btn btn-primary" value="send">
			<br>
			<br>
		</form>
		</div>
		<div class="col-md-4 text-center">
			<strong>	Headquarter:</strong><br>
			OSMS pvt Ltd, ,<br >
			Ashok Nagar , Ranchi<br>
phone:+546541545
<a href="" >www.osms.com</a>
<br>
<br>
		<br>
<br><br>
<br><strong>	Headquarter:</strong><br>
			OSMS pvt Ltd, ,<br >
			Ashok Nagar , Ranchi<br>
phone:+546541545
<br>
<a href="" >www.osms.com</a>
<br>

		</div>
</div>	
</div>	
<!--end Contact US code-->



<!--fOOTER code-->
<footer class="container-fluid bg-dark mt-5 text-white">
	<div class="container">	
	<div class="row py-3">
	<div class="col-md-6">
		<span class="pr-2">	Follow Us:</span>
		<br>		
		<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
			<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
					<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-rss"></i></a>
		</div>	
		<div class="col-md-6">
			<small>Designed by Priya Goyal &copy; 2019</small>
			<small class="ml-2"><a href="#">Admin Login</a>	</small>
		</div>
</div>
</div>	
</footer>



<!--end footer code-->



<!--java Script File-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>
</body>
</html>