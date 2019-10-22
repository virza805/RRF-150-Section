<?php 
	include "database.php";
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	
 ?> 
<?php include "teacher_header.php"; ?>
<!--end menu Section -->
<div class="container_full slid_img">
	<div class="container">
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
			<h5><?php echo $row['DGN'] ?></h5>
				<img colspan="2" src="<?php echo $row['IMG'] ?>" height="150" width="150" alt="Upload Pending">
			<h5><?php echo $row['TNAME'] ?></h5>
			<?php }?>
			</div>
		</div>
	</div>
</div>
<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-10">
				<h2 class="text-light">Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">View Student Details</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="form-control" >
							<tr>
								<th>S.No</th>
								<th>Reg. No</th>
								<th>Roll No</th>
								<th>Name</th>
								<th>Father Name</th>
								<th>Password</th>
								<th>Phone</th>
								<th>Address</th>
								<th>class</th>
								<th>Sec</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
							<?php 
								$s="select * from student where TID={$_SESSION["TID"]}";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["RNO"]}</td>
											<td>{$r["CRNO"]}</td>
											<td>{$r["NAME"]}</td>
											<td>{$r["FNAME"]}</td>
											<td>{$r["PASS"]}</td>
											<td>{$r["PHO"]}</td>
											<td>{$r["ADDR"]}</td>
											<td>{$r["SCLASS"]}</td>
											<td>{$r["SSEC"]}</td>
											<td><img src='{$r["SIMG"]}' height='70' width='70' alt='Student Image'></td>
											
											
											<td><a href='stud_delete.php?id={$r["ID"]}' class='btn btn-danger'>Delete</a></td>
										</tr>
										";

									}
								}
							?>
						</table>
						 
						
						<br>
								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>