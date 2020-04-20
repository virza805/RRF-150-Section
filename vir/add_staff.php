<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->

<div class="container_full d_back" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2>Welcome Admin</h2>

				<?php 
require_once('database.php');

$edit = $_GET['edit'];
if(isset($_POST['update'])) {
	$edit = $_GET['edit'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$date = $_POST['date'];
	$sal = $_POST['sal'];
	$class = $_POST['tclass'];
	$section = $_POST['tsec'];

	$query ="UPDATE staff SET TNAME='$name', DGN='$email', TPASS='$subject', QUAL='$message', SAL='$sal', DATE='$date', TCLASS='$class', TSEC='$section'  WHERE TID='$edit' ";
	$update =$db->query($query);
	if($update){
    echo "<h3 class='text-success'> Data update sussecs </h3> ";
  }else{
    echo "<h3 class='text-danger'> Data update Not ok </h3> ";
  }

}



$query = "SELECT * FROM staff WHERE TID= '$edit' ";
$edit = $db->query($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>

		<form class="cminication" action="" method="POST">
			  <div class="form-row">
				<div class="col ">
					<h6 class="text-left">Name:</h6>
				  <input type="text" class="form-control mb-2" id="name" value="<?php echo $result['TNAME']; ?>" name="name">

				  <h6 class="text-left">DGN:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['DGN']; ?>" id="email" name="email" >

				  <h6 class="text-left">PassWord:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['TPASS']; ?>" id="subject" name="subject" >

				  <h6 class="text-left">Qualification:</h6>
				  <input class="form-control mb-3" value="<?php echo $result['QUAL']; ?>" id="message" name="message"  >
				  
				  <h6 class="text-left">Sal:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['SAL']; ?>" id="subject" name="sal" >

				  <h6 class="text-left">Date:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['DATE']; ?>" id="subject" name="date" >
				  <h6 class="text-left">ClassTeacher:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['TCLASS']; ?>" id="subject" name="tclass" >
				  <h6 class="text-left">Section:</h6>
				  <input type="text" class="form-control mb-2" value="<?php echo $result['TSEC']; ?>" id="subject" name="tsec" >
				 		

					<div class="checkbox">
						<label for="checkbox"><input type="checkbox" id="checkbox" name="checkbox"> Remember me</label>
					  </div>

					  <br>

					  <input type="submit" class="btn btn-success" value="Update" name="update">

					  <br><br><br><br>



				  
				</div>

				
			  </div>
			</form>

<?php } ?>







				<div class="row">
					<div class="col-3 fix"> 
						<h4><b>Add Staff/Teacher Details</b></h4>
					
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$tname = $_POST['tname'];
							
							$qual = $_POST['qual'];
							$sal = $_POST['sal'];
							$date = $_POST['date'];
							$tde = $_POST['tde'];
							$class = $_POST['cla'];
							$section = $_POST['sec'];
							
							

							$result = mysqli_query($db,"INSERT INTO staff (TNAME,DGN,TPASS,QUAL,SAL,DATE,TCLASS,TSEC) VALUES('$tname','$tde',1234,'$qual','$sal','$date','$class','$section')");
							if($result){
								echo "<p style='color: green'>Your Teacher Add Success..</p>";
							}else{
							echo "<p style='color:red'>Your Teacher Add Failed Some problem</p>";
							}

							}

						 ?>

						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="tname" placeholder="Staff Name" required class="input form-control"> <br>
							<input type="text" name="tde" placeholder="Designation" required class="input form-control"> <br>
							
							<input type="text" name="qual" placeholder="Qualification" required class="input form-control"> <br>

							<input type="text" name="sal" placeholder="Salary" required class="input form-control"> <br>

							<input type="date" name="date"  required class="input form-control"> <br>
							<select type="text" name="cla" class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CNAME) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value='-'>Class</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<select type="text" name="sec" class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CSEC) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value='-'>Section</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="submit"> Add Staff</button>
						</form>
					</div>
					<div class="col-8 text-center">
						<h4><b>Look Staf/Teacher List</b></h4>
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table class="mt-3 table table-striped">
							<tr>
								<th>S.No-Salary</th>
								<th>Name</th>
								<th>Staff ID</th>
								<!-- <th>Designation</th> -->
								<th>ClassTeacher</th>
								<th>Joyen</th>
								<th colspan="3"> Action </th>
							</tr>
							<?php 
								$s="select * from staff order by TID asc";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									// {$i}
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$r["SAL"]}</td>
											<td>{$r["TNAME"]}</td>
											<td>{$r["TID"]}</td>
											<td>{$r["TCLASS"]} </br>
												{$r["TSEC"]}</td>
											<td>{$r["DATE"]}</td>
											
											<td><a href='staff_delete.php?id={$r["TID"]}' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a></td>
											<td><a href='staff_view.php?id={$r["TID"]}'  class='btn btn-success '>View</a>

											<td><a href='?edit={$r["TID"]}'  class='btn btn-success '><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
										        </td>
										</tr>
										";

									}
								}
							 ?>
						</table>
					</div>
				</div>

				










				



				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>