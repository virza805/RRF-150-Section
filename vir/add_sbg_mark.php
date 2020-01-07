<h1>Now you can make Input number mathood qurie.</h1>
<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	if(isset($_GET["viewt"])){
		$sql="select * from smark where CLASS='{$_GET["cla"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:add_sbg_mark.php?err=Invalid Register no..");
		}else{
			$rows 	=$res->fetch_assoc();
			$class  =$rows["CLASS"];
			$etype  =$_GET["etype"];

		}
	}
	
 ?> 

<?php include "teacher_header.php"; ?>
<!--end menu Section -->
<div class="container_full slid_img">
	<div class="container">
		<h1 class="text text-center">Wellcome To School Management System <br> For Teacher</h1>
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
				<h2 class="text-light" >Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Add Mark</b></h4>
					 
					<?php
							require_once('database.php');

							if(isset($_GET['viewt'])){
								echo "<h4>Student Info Table</h4><br>";
								$sql="select * from smark where CLASS='{$_GET["cla"]}' and TERM='{$_GET["etype"]}' ";
								$re=$db->query($sql);
								if($re->num_rows>0){
									echo '

									<table border="1px" class="form-control" >
										<tr>
											<th class="p-2">S.No</th>
											<th class="p-2">Roll No</th>
											<th class="p-2">Name</th>
											<th class="p-2">Class</th>
											<th class="p-2">Tu Mark</th>
											<th class="p-2">SEM Mark</th>
											<th class="p-2">Action</th>
											<th class="p-2">Image</th>
										</tr>

										';

										$i=0;
									while($r=$re->fetch_assoc()){
										$i++;

														
							require_once('database.php');

							if(isset($_POST['submit'])){
								
								$sql="select * from smark where CLASS='{$r["CLASS"]}' and TERM='{$r["TERM"]}' ";
								$reg=$db->query($sql);
								if ($reg->num_rows>0){
										$r=$reg->fetch_assoc();
										
										$regno=$r["REGNO"];
										$name =$r["NAME"];
										$img  =$r["IMG"];
										$class=$r["CLASS"];
										$term =$r["TERM"];
									}

									 $tu_num = $_POST['tu_num'];
									 $se_num = $_POST['se_num'];
									// $tu_sub = $_POST['tu_sub']; ,BTU,BAN,ETU,ENG,MTU,MAT,STU,SCI,SOTU,SOC,RTU,REL,ATU,AGR,ICT
									//$etype   =$_GET["etype"];
									
							$result = mysqli_query($db,"UPDATE smark SET STU='$tu_num', SCI='$se_num' WHERE REGNO='$regno' and TERM='$term' ");
							if($result){
								echo "<h4 class='m-2 p-2 text-light bg-success'>$etype mark input success </h4>";
							}else{
								echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
							}


							}
							 

										echo "
											<tr>
											<form enctype='multipart/form-data' role='form' method='post' action='' >
												<td>{$i}</td>
												
												<td>{$r["REGNO"]}</td>
												
												<td>{$r["NAME"]}</td>
												<td>{$r["CLASS"]}</td>
												<td class='p-2'><input type='number' name='tu_num'></td>
												<td class='p-2'><input type='number' name='se_num' value=''></td>
												<td><button type='submit' class='btn btn-success' name='submit'>Add Data</button></td>
												 
												<td><img src='{$r["IMG"]}' alt='S. Img' height='70' width='70' class='p-2' ></td>
											</form> 
											</tr>
										";

									}
									
									
								}
							}else{
								echo "No Record Found";
							}echo "</table>";
							
						 ?>
 
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>

<script>
function mouseOver() {
  document.getElementById("demo").style.color = "red";
}

function myLeaveFunction() {
  document.getElementById("demo").innerHTML.type='submit';
}
</script>