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
				<div class="row">
					<div class="col-5 fix"> 
						<h4><b>Add Subject Details</b></h4>
					
						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$sname = $_POST['sname'];
							
							
							

							$result = mysqli_query($db,"INSERT INTO lexam (ENAME) VALUES('$sname')");
							if($result){
								echo "<p style='color: green'>Your Exam Insert Success..</p>";
							}else{
							echo "<p style='color:red'>Your Exam Insert Failed Some problem</p>";
							}

							}

						 ?>

						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<br>
							<input type="text" name="sname" placeholder="Input Exam Name/Type" required class="input form-control"> <br>
							
							<button type="submit" class="btn btn-success" name="submit">Add Exam</button>
						</form>
					</div>
					<div class="col-6 text-center">
						<h4><b>Subject Details</b></h4>
						 <?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM lexam WHERE LEID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>


						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="table table-striped">
							<thead>
							<tr>
								<th>S.No</th>
								<th>Subject</th>
								
								<th> Action </th>
							</tr>
							</thead>
							<?php 
								$s="select * from lexam";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["ENAME"]}</td>
											
											<td><a href='exam_list.php?delid={$r["LEID"]}' class='btn btn-danger'>Delete</a></td>
										</tr>
										";

									}
								}else{
									echo "No Record Found";
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
