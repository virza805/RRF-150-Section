<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin_School Management System</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!--Start menu Section -->
	<div class="container_full navbar bg-light navbar-expand-md sticky-top">
		<div class="container" style="margin:0 auto;" >
			<a href="#" class="navbar-brand">
				<div id="logo_left">

					<img src="img/vir.png" alt="Logo" width="" height="70px">
					<!--
					<h2 class="d-inline">
						<span>T</span>
						<span>A</span>
						<span>N</span>
						<span>V</span>
						<span>I</span>
						<span>R</span>
					</h2>
					-->
				</div>
			</a>

			<a class="btn navbar-toggler" data-target="#myMenuToggler" data-toggle="collapse">
				<i class="fa fa-maxcdn" style="font-size:30px;"></i>
			</a>
			<div class="collapse navbar-collapse justify-content-end" id="myMenuToggler">
				<nav id="scrol_py" class="menu1">
					<ul>
						<li><a href="teacher_home.php" class="nav-link active" >Teacher_Home</a></li>
						<li><a href="teacher_change_pass.php" class="nav-link" >Setting</a></li>
						
						<li><a href="logout.php" class="nav-link" >Logout</a></li>
						<!--
						<li ><a href="#work" class="nav-link" > WORKE <i class="fa fa-angle-down"></i></a>

							<ul>
								<li><a href="worke/all.html" target="_blank">All</a></li>
								<li><a href="worke/Ui-psd.html" target="_blank">Ui-psd</a></li>
								<li><a href="worke/Development.html" target="_blank">Development</a></li>
								<li><a href="worke/Wordpress.html" target="_blank">Wordpress</a></li>
								<li><a href="worke/Logo-Icon.html" target="_blank">Logo-Icon</a></li>
								<li><a href="worke/Other.html" target="_blank">Other</a></li>
							</ul>
						

						</li>
						<li><a href="#feet" class="nav-link" > FEETBACK </a></li>
						
						<li><a href="#contact" class="nav-link" > CONTACT </a></li>
							-->
						
					</ul>
				</nav>
			</div>
		</div>
	</div>
<!--end menu Section -->
<!--end menu Section -->
<div class="container_full dream_img slid_img">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-8">
			<h2 class="mt-5 text-light" ><i><b>Wellcome To School Management System</b></i></h2>
		
			</div>
			<div class="col-md-4">
			<?php 
			$sql="SELECT * FROM staff WHERE TID={$_SESSION["TID"]}";
			$res=$db->query($sql);
		
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
			
			?>
			<h5 class="text-light"><?php echo $row['DGN'] ?></h5>
				<img colspan="2" src="<?php echo $row['IMG'] ?>" height="150" width="150" alt="Upload Pending">
			<h4 class="text-light"><?php echo $row['TNAME'] ?></h4>
			<?php }?>
			</div>
		</div>
	</div>
</div>