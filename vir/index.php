<?php 
	include "database.php";
	session_start();
 ?>
<?php include "header.php"; ?>
<!-- Slider images On -->	
<div class="container_full slid_img">
	<div class="container">
	<h1 class="text-center w text-light">School Management System</h1>
		<div class="clock-place clock_custom"> </div>
		<center>
		<div>
						<i class="fa fa-spinner fa-spin"></i>
						<i class="fa fa-spinner fa-pulse"></i>
						<i class="fa fa-cog fa-spin"></i>
						<i class="fas fa-sync-alt fa-spin" style="font-size:40px;color:green;"></i>
						<i class="fa fa-cog fa-spin"></i>
						<i class="fa fa-spinner fa-pulse"></i>
						<i class="fa fa-spinner fa-spin"></i>
		</div>
</center>
	</div>
</div>
<!-- Slider images Off -->
<!-- Login Section On -->
<div class="container_full loge_bk" style ='margin-top: 0px;'>
	<div class="container text-center">
		<div class="row p-5">
			<div class="col-md-4 pr-4">
				<div>
		<h2 class="heading"> Admin Login </h2>
		<div class="">

			<?php 

			if (isset($_POST["login"])) {
				$sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					$ro=$res->fetch_assoc();
					$_SESSION["AID"]=$ro["AID"];
					$_SESSION["ANAME"]=$ro["ANAME"];
					echo "<script>window.open('admin_home.php','_self');  </script>";
				}else{
					echo "<h4 class='btn btn-danger'>Invalid Username or Password</h4>";
				}

			}
			if(isset($_GET["mes"])){
				echo "<h4 class='btn btn-danger'>{$_GET["mes"]}</h4>";
			}


			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="aname" placeholder="User Name" required class="input form-control"> <br>
				
				<input type="password" name="apass" placeholder="Password" required class="input form-control"> <br>
				<button type="submit" class="btn btn-success" name="login"> Login</button>
			</form>

		</div>
	</div>
			</div>

	<!--End Admin Login Section-->
			<div class="col-md-4 pl-4 pr-4">
				<div >
		<h2 class="heading"> Teacher Login </h2>
		<div class="bg-info p-4">

			<?php 

			if (isset($_POST["login"])) {
				$sql="select * from staff where TNAME='{$_POST["name"]}' and TPASS='{$_POST["pass"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					$ro=$res->fetch_assoc();
					$_SESSION["TID"]=$ro["TID"];
					$_SESSION["TNAME"]=$ro["TNAME"];
					echo "<script>window.open('teacher_home.php','_self');  </script>";
				}else{
					echo "<h4 class='btn btn-danger'>Invalid Username or Password</h4>";
				}

			}
			if(isset($_GET["mes"])){
				echo "<h4 class='btn btn-danger'>{$_GET["mes"]}</h4>";
			}


			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="name" placeholder="User Name" required class="input form-control"> <br>
				
				<input type="password" name="pass" placeholder="Password" required class="input form-control"> <br>
				<button type="submit" class="btn btn-success" name="login"> Login</button>
			</form>

		</div>
	</div>
			</div>

	<!--End Teacher Login Section-->
			<div class="col-md-4 pl-5">
				<div>
		<h2 class="heading">Student Login </h2>
		<div class="">

			<?php 

			if (isset($_POST["login"])) {
				$sql="select * from student where RNO='{$_POST["sid"]}' and PASS='{$_POST["pas"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					$ro=$res->fetch_assoc();
					$_SESSION["ID"]=$ro["ID"];
					$_SESSION["RNO"]=$ro["RNO"];
					echo "<script>window.open('student_login.php','_self');  </script>";
				}else{
					echo "<h4 class='btn btn-danger'>Invalid Username or Password</h4>";
				}

			}
			if(isset($_GET["mes"])){
				echo "<h4 class='btn btn-danger'>{$_GET["mes"]}</h4>";
			}


			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="sid" placeholder="Enter Student Id" required class="input form-control"> <br>
				
				<input type="password" name="pas" placeholder="Password" required class="input form-control"> <br>
				<button type="submit" class="btn btn-success" name="login"> Login</button>
			</form>

		</div>
	</div>
	
			</div>
		</div>
	</div>
	
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>