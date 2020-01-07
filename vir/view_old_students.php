<?php 
	include "database.php";
	session_start();
 ?>
<?php include "admin_header.php"; ?>

<div class="container"></div>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
				<h2 class="text-light" >Welcome Admin </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Now you see old student <?php echo $_GET["year"];?> </b></h4>
						
					<?php
							require_once('database.php');

							if(isset($_GET['viewt'])){
								echo "<h4>History Student Info Table</h4><br>";
								$sql="select * from history where YEAR='{$_GET["year"]}'  ";
								$re=$db->query($sql);
								if($re->num_rows>0){
									echo '
									<table border="1px" class="form-control" >
										<tr>
											<th class="p-2">S.No</th>
											<th class="p-2">Roll No</th>
											<th class="p-2">Name</th>
											<th class="p-2">Father Name</th>

											<th class="p-2">Class</th>
											<th class="p-2">Sec</th>
											<th class="p-2">Action</th>
											<th class="p-2">Image</th>
										</tr>

										';

										$i=0;
									while($r=$re->fetch_assoc()){
										$i++;

							

										echo "
											<tr>
											<form enctype='multipart/form-data' role='form' method='post' action=' ' >
												<td>{$i}</td>
												
												<td>{$r["RNO"]}</td>
												
												<td>{$r["NAME"]}</td>
												<td class='p-2'>{$r["FNAME"]}</td>

												<td>{$r["SCLASS"]}</td>
												<td>{$r["SSEC"]}</td>
												<td></td>
												 
												<td><img src='{$r["SIMG"]}' alt='S. Img' height='70' width='70' class='p-2' ></td>
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