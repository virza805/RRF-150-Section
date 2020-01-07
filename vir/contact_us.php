<?php 
	include "database.php";
	session_start();


	 ?>
<?php //include "header.php"; ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home_School Management System</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<!--Start menu Section -->
	<div class="container_full navbar bg-light navbar-expand-md sticky-top">
		<div class="container" style="margin:0 auto;" >
			<a href="#" class="navbar-brand">
				<div id="logo_left">

					<img src="img/sbgs_logo.png" alt="Logo" width="" height="70px">
					
					<!-- <h2 class="d-inline">
						<span>T</span>
						<span>A</span>
						<span>N</span>
						<span>V</span>
						<span>I</span>
						<span>R</span>
					</h2> -->
					
				</div>
			</a>

			<a class="btn navbar-toggler" data-target="#myMenuToggler" data-toggle="collapse">
				<i class="fa fa-maxcdn" style="font-size:30px;"></i>
			</a>
			<div class="collapse navbar-collapse justify-content-end" id="myMenuToggler">
				<nav id="scrol_py" class="menu1">
					<ul>
					<li><a href="index.php" class="nav-link" >Admin</a></li>
						<li><a href="teacher_login.php" class="nav-link" >Teacher</a></li>
						<li><a href="index.php" class="nav-link" >Student</a></li>
						
						<li><a href="contact_us.php" class="nav-link" >Contact Us</a></li>
						<li><a href="http://www.vir-za.com" class="nav-link" >Logout</a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	</div>
<!--end menu Section -->












<!-- Slider images On slid_img -->	
<div class="container_full slid_img ">
	<div class="container">
		<h2 class="text-center text-light pt-3"></h2>
			<div class="container text-center pt-5 pb-5"  style ='margin-top:80px;' >
		<h1 class="box1 mt-4 mb-5"> Contact Us </h1>
		<div class="">
<br>
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$tname = $_POST['username'];
							
							$email = $_POST['email'];
							$subject = $_POST['subject'];
							$message = $_POST['message'];
							
							

							$result = mysqli_query($db,"INSERT INTO contact (name, email, subject, message) VALUES('$tname','$email','$subject','$message')");
							if($result){
								echo "<p style='color: green'>Your Message Send Success..</p>";
							}else{
							echo "<p style='color:red'>Your Message not Send Some problem</p>";
							}

							}

						 ?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-row bb">
		<div class="col-4"></div>
		
		<div class="col-4">

	<input type="text" name="username" class="form-control mb-2" placeholder="Name">
	<input type="email" name="email" class="form-control mb-2" id="inputEmail4" placeholder="Email">
    <input type="text" name="subject" class="form-control mb-2" placeholder="Tel. number">
    <textarea  name="message" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Message*"></textarea>
	<button type="submit" class="btn btn-success" name="submit"   style ='margin-bottom:80px;' >Send</button>	 
		</div>
		<div class="col-4"></div>
	</div>
</form>	

	</div>
	</div>
	</div>
</div>
<!-- Slider images Off -->
<!-- Login Section On -->

<!-- Login Section Off -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center pt-5 pb-5">
		<h2 class="heading">  </h2> <br>
		<br>
		<br>
		<div class="box1 mt-3 mb-5">
			<h2>Contact</h2>
			
			<img src="img/sbgs_lg.png" alt="">
			<h4>Rajashon, Savar, Dhaka-1340</h4>
			<br>
<h5 class="text1">
	
	<a href="mailto:school.sbgs@gmail.com?subject=this is a test" target="_blank" >Email:school.sbgs@gmail.com </a> <br>
			
			<a href="tel:01760-505554"> mobile: 01760-505554 </a> <br> 
			<a href="tel:01613-948803"> mobile: 01613-948803 </a> <br> 
			<a href="https://www.vir-za.com" target="_blank" > website: www.sbgsedu.com </a>
			</h5>
			

		</div>
		<br>
		<br>
		<br>
	</div>
</div>
<!-- Login Section Off -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>

	
		<h2 class="heading"> </h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2054.943472015561!2d90.28160459650522!3d23.85211221906668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1567573418048!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	


		
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>