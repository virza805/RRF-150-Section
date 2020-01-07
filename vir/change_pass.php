<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->

<div class="container_full loge_bk" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-info">Welcome Admin</h2>
				<div class="">
					<h2 class="heading"> Admin Change Password </h2>
		<div class="box">

			<?php 

			if (isset($_POST["submit"])) {
				$sql="select * from admin where APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}' ";

				$res=$db->query($sql);
				if($res->num_rows>0){
					if($_POST["npass"]==$_POST["cpass"]){
						$s="update admin SET APASS='{$_POST["npass"]}' where AID='{$_SESSION["AID"]}' ";
						$db->query($s);
						echo "<h4 class='btn btn-success'>Password Changed</h4>";
					}else{
						echo "<h4 class='btn btn-danger'>Password Mismatch</h4>";
					}
				}else{
						echo "<h4 class='btn btn-danger'>Invalid Password</h4>";
					}
			}
			

			 ?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<br>
				<input type="text" name="opass" placeholder="Old Password" required class="input form-control"> <br>
				
				<input type="text" name="npass" placeholder="New Password" required class="input form-control"> <br>
				
				<input type="text" name="cpass" placeholder="Confirm Password" required class="input form-control"> <br>

				<button type="submit" class="btn btn-success" name="submit"> Change Pass</button>
			</form>

		</div>


				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								$target="staff/";
								$target_file=$target.basename($_FILES["img"] ["name"]);

								if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){
									$sql="update admin set IMG='{$target_file}' where AID={$_SESSION["AID"]}";
									$db->query($sql);
									echo "<h4 class='btn btn-success'>Insert Success..</h4>";
								}
							}

						 ?>

						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<table>
							<tr>
							<td>
							<input type="file" name="img" required class="input form-control"> 
							</td>
							<td>
							<button type="submit" class="btn btn-success" name="submit">Add Img </button>
							</td>
							</tr>
							</table>
						</form>
			</div>
			<div class="col-md-4">
					<h4><b class="text-info">View all Student in school</b></h4>
						
						<?php 
							if(isset($_GET["err"])){
								echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
							}
						 ?>
						<form  role="form" method="get" action="save_history.php"><br>
							
							<br>

							<select type="text" name="year" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(YEAR) from student ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Year</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["YEAR"]}'>{$ro["YEAR"]}</option>";
								}
							}

							 ?>

							 </select> <br>
							 
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
			</div>
		</div>
		
	</div>
</div>


<div class="container">
	<div class="col-md-6">
	<h4><b class="text-info">View all Student in school</b></h4>
						
						<?php 
							if(isset($_GET["err"])){
								echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
							}
						 ?>
						<form  role="form" method="get" action="view_old_students.php"><br>
							
							<br>

							<select type="text" name="year" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(YEAR) from history ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Year</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["YEAR"]}'>{$ro["YEAR"]}</option>";
								}
							}

							 ?>

							 </select> <br>
							 
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
	</div>


					<div class="col-md-12 fix"> 
						<h4><b class="text-info">View Old Student Details</b></h4>
						
						  
						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<select type="text" name="cla" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(SCLASS) from history ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Class</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["SCLASS"]}'>{$ro["SCLASS"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							 <select type="text" name="year" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(YEAR) from history ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Year</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["YEAR"]}'>{$ro["YEAR"]}</option>";
								}
							}

							 ?>

							 </select><br>
							
							
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>
						
						<?php
							require_once('database.php');
  
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM history WHERE ID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       
							if(isset($_POST['viewt'])){
								echo "<h4>Class {$_POST["cla"]} History Info - {$_POST["year"]}</h4><br>";
								$sql="select * from history where SCLASS='{$_POST["cla"]}' and YEAR='{$_POST["year"]}' ";
								$re=$db->query($sql);
								if($re->num_rows>0){
									echo '
									<table border="1px" class="form-control" >
										<tr>
											<th class="p-2">S.No</th>
											<th class="p-2">Reg. No</th>
											<th class="p-2">Roll No</th>
											<th class="p-2">Name</th>
											<th class="p-2">Gender</th>
											<th class="p-2">Barth</th>
											<th class="p-2">Father Name</th>
											<th class="p-2">Mather</th>
											<th class="p-2">Phone</th>
											<th class="p-2">Class</th>
											<th class="p-2">Sec</th>
											<th class="p-2">Image</th> 
											<th class="text-center" colspan="1">Action</th>
										</tr>
										';
										$i=0;
									while($r=$re->fetch_assoc()){
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["RNO"]}</td>
												<td>{$r["CRNO"]}</td>
												<td>{$r["NAME"]}</td>
												<td>{$r["GEN"]}</td>
												<td>{$r["DOB"]}</td>
												<td class='p-2'>{$r["FNAME"]}</td>
												<td>{$r["MNAME"]}</td>
												<td class='p-2'>{$r["PHO"]}</td>

												<td>{$r["SCLASS"]}</td>
												<td>{$r["SSEC"]}</td>
												<td><img src='{$r["SIMG"]}' alt='S. Img' height='70' width='70' class='p-2' ></td>

										        <td> 
										          <a href='change_pass.php?delid={$r["ID"]}' target='_blank' class='btn btn-danger '><i class='fas fa-trash-alt'></i></a>
										        </td>

											</tr>
										";
									}
	
									

									

							//	<a href='admin_edit_viwe_result.php?editid=<?php echo $result["SMID"] '  class='btn btn-success '>View</a>
								
									
								}
							}else{
								echo "No Record Found";
							}echo "</table>";
							
							

						 ?>

								
					</div>
				</div>
<!-- Footer Section On -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>