

<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome Admin</h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Teacher to Add Mark</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="admin_par_1_add_mark.php"><br>
							
							<input type="text" name="rno" placeholder="Enter Roll No" required class="input form-control"><br>
							
							
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
						
								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>