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
			<div class="col-md-12">
				<h2>Welcome Admin</h2>

						<h4><b>Set Exam Time Details</b></h4>
<table class="table table-bordered">
  <thead>
    <tr>
      
      <th scope="col">Exam Type</th>
      <th scope="col">Date</th>
      <th scope="col">Day</th>
      <th scope="col">6th</th>
	  <th  colspan="">7th</th>
      <th scope="col">8th</th>
    </tr>
  </thead>
  <tbody>

  	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <tr>
      
      <td>
      	<select type="text" name="etyp" placeholder="Exam Type" class="input form-control"> <br>
							<?php 
							$s="select * from lexam";
							$re=$db->query($s);
							if($re->num_rows>0){
								echo "<option value=''>Exam Type</option>";
								while($r=$re->fetch_assoc()){
									echo "<option value='{$r["ENAME"]}'>{$r["ENAME"]}</option>";
								}
							}

							 ?>
		 </select>
	 </td>
      <td><input type="date" name="date"  required class="input form-control"></td>
      <td><input type="text" name="day" placeholder="Days" class="input form-control"></td>
      <td>
      	<select type="text" name="sub" placeholder="Subject" required class="input form-control"> <br>
							<?php 
							$s="select * from sub";
							$re=$db->query($s);
							if($re->num_rows>0){
								echo "<option value=''>Subject</option>";
								while($r=$re->fetch_assoc()){
									echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}

							 ?>
		 </select>
		</td>
      <td>
      	<select type="text" name="s7" placeholder="Subject" required class="input form-control"> <br>
							<?php 
							$s="select * from sub";
							$re=$db->query($s);
							if($re->num_rows>0){
								echo "<option value=''>Subject</option>";
								while($r=$re->fetch_assoc()){
									echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}

							 ?>
		 </select>
      </td>
      <td>
      	<select type="text" name="s8" placeholder="Subject" required class="input form-control"> <br>
							<?php 
							$s="select * from sub";
							$re=$db->query($s);
							if($re->num_rows>0){
								echo "<option value=''>Subject</option>";
								while($r=$re->fetch_assoc()){
									echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}

							 ?>
		 </select>
      </td>
    
      
    </tr>
<button type="submit" class="btn btn-success" name="submit"> Add Exam</button>
</form>
  </tbody>
</table>


						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$ename = $_POST['etyp'];
							$etype = $_POST['date'];
							$date = $_POST['day'];
							$ses = $_POST['sub'];
							$cla = $_POST['s7'];
							$sub = $_POST['s8'];
							
							

							$result = mysqli_query($db,"INSERT INTO exam (ETYPE,EDATE,DAY,6th,7th,8th) VALUES('$ename','$etype','$date','$ses','$cla','$sub')");
							if($result){
								echo "<h4 style='color: green'>Exam Date Add Success..</h4>";
							}else{
							echo "<h4 style='color:red'>Exam Date Add Failed Some problem</h4>";
							}

							}

						 ?>

					</div>
					<!--Exam Add Section End-->
					<!--Exam See Table Section On-->
					<div class="col-10">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						 <div class="container">
						<form  role="form" method="post" action=""><br>
							
							
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
							 </select> <br>

							
							
							
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form> 
						 	
						 </div>
						 	 <?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM exam WHERE EID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>

						<table border="1px" class="bg-light m-5">
							<tr>
								<th>S.No</th>
								<th>Exam Name</th>
								<th>Date</th>
								<th>Day</th>
								<th>6th</th>
								<th>7th</th>
								<th>8th</th>
								<th colspan="2"> Action </th>
							</tr>
							<?php 
							
								$s="select * from exam  where ETYPE='{$_POST["etype"]}' ";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["ETYPE"]}</td>
											<td>{$r["EDATE"]}</td>
											<td>{$r["DAY"]}</td>
											<td>{$r["6th"]}</td>
											<td>{$r["7th"]}</td>
											<td>{$r["8th"]}</td>
											<td><a href='set_exam.php?delid={$r["EID"]}' class='btn btn-danger'>Delete</a></td>
											<td><a href='exam_edit.php?editid={$r["EID"]}' class='btn btn-success'>Edit</a></td>
										</tr>
										";
									}
								}
							?>
						</table>						
					</div>
					<!--Exam See Table Section End-->
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>