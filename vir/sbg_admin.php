
<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>
<!--end menu Section -->

<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Permission to Teacher for input  Mark</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="admin_par_add_mark.php"><br>
							
							<br>

							<select type="text" name="cla" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CNAME) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Class</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
								}
							}

							 ?>

							 </select> <br>
							  <br>
							<select type="text" name="etype" " required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ENAME) from lexam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ENAME"]}'>{$ro["ENAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>

							
							
							
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
						
								
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h4><b class="text-info">One Student Permission to Teacher for input  Mark</b></h4>
						
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