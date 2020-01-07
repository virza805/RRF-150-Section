
<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	//$sql="SELECT * FROM hclass WHERE TID={$_SESSION["TID"]}";
	$sql="SELECT * FROM hclass WHERE TID={$_SESSION["TID"]}";
	$res=$db->query($sql);

	if($res->num_rows>0){
		$row=$res->fetch_assoc();
	}
 ?> 
<?php include "teacher_header.php"; ?>
<!--end menu Section -->
<div class="container_full bg-light slid_img">
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
						<h4><b class="text-info">Teacher to Add Mark</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="add_sbg_mark.php"><br>
							
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
							$sl="select DISTINCT(ETYPE) from exam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ETYPE"]}'>{$ro["ETYPE"]}</option>";
								}
							}
							 ?>
							 </select>
							 <!--  <br>

							 <select type="text" name="tumark" required class="input form-control">
							  <option value="-">Select Tu Sub</option>
							  <?php  
							// $sl="select DISTINCT(ETU) from smark ";
							// $r=$db->query($sl);
							// if($r->num_rows>0){
							// 	$ro=$r->fetch_assoc();
							// 	echo "<option value='{$ro["ETU"]}'>English</option>";}
							 ?>
							
							  <option value= '<?php $r=$db->query("select DISTINCT(BTU) from smark"); ?>' >Bangla</option>
							  <option value= '<?php $db->query("select DISTINCT(ETU) from smark"); ?>' >English</option>
							  <option value= '<?php "select smark where MTU like '%MyColumn%' " ?>' >Math</option>
							  <option value= '<?php "select smark where STU like '%MyColumn%' " ?>' >Science</option>
							  <option value='<?php "SELECT STU FROM smark"; ?>' >S. Science</option>
							  <option value= "SELECT DISTINCT ATU FROM smark" >Agricultural</option>
							</select> -->
							<br>
							
							
							
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