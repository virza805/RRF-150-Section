<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->
<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-12">
				<h2 class="text-light">Welcome Admin </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Admin View Student Details</b></h4>
						
						  
						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
							<select type="text" name="sec" placeholder="Section" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CSEC) from class ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Section</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
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
        $query = "DELETE FROM student WHERE ID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       
							if(isset($_POST['viewt'])){
								echo "<h4>Student Info Table</h4><br>";
								$sql="select * from student where SCLASS='{$_POST["cla"]}' and SSEC='{$_POST["sec"]}' ";
								$re=$db->query($sql);
								if($re->num_rows>0){
									echo '
									<table border="1px" class="form-control" >
										<tr>
											<th class="p-2">S.No</th>
											<th class="p-2">Reg. No</th>
											<th class="p-2">Roll No</th>
											<th class="p-2">Name</th>
											<th class="p-2">Father Name</th>
											<th class="p-2">Gender</th>
											<th class="p-2">Password</th>
											<th class="p-2">Phone</th>
											<th class="p-2">Class</th>
											<th class="p-2">Sec</th>
											<th class="p-2">Image</th> 
											<th class="text-center" colspan="3">Action</th>
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
												<td class='p-2'>{$r["FNAME"]}</td>
												<td>{$r["GEN"]}</td>
												<td>{$r["PASS"]}</td>
												<td class='p-2'>{$r["PHO"]}</td>

												<td>{$r["SCLASS"]}</td>
												<td>{$r["SSEC"]}</td>
												<td><img src='{$r["SIMG"]}' alt='S. Img' height='70' width='70' class='p-2' ></td>

										        <td> 
										          <a href='student.php?delid={$r["ID"]}'  class='btn btn-danger '><i class='fas fa-trash-alt'></i></a>
										        </td>

										        <td>
										          <a href='edit_student.php?editid={$r["ID"]}'  class='btn btn-success '>Edit</a>
										        </td>
										        <td>
										          <a href=''  class='btn btn-success '>View</a>
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
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>