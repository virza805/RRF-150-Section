<?php 
	include "database.php"; 
	session_start();
	// if(!isset($_SESSION["TID"])){
	// 	echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	// }
	if(isset($_GET["viewt"])){
		$sql="select * from student where YEAR='{$_GET["year"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:save_history.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["SCLASS"];
			//$etype=$_GET["etype"];

		}
	}
	
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
				<h2 class="text-light" >Welcome Admin </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Now you see which Permission to input Mark</b></h4>
						
					<?php
							require_once('database.php');

							if(isset($_GET['viewt'])){
								echo "<h4>Student Info Table</h4><br>";
								$sql="select * from student where YEAR='{$_GET["year"]}'  ";
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

														
							require_once('database.php');

							if(isset($_POST['submit'])){
								
								$sql="select * from student where RNO='{$r["RNO"]}' and SCLASS='{$r["SCLASS"]}' ";
								$reg=$db->query($sql);
								if ($reg->num_rows>0){
										$r=$reg->fetch_assoc();
										
                                        $RNO=$r["RNO"];
                                        $NAME=$r["NAME"];
                                        $REL=$r["REL"];
                                        $FNAME=$r["FNAME"];
                                        $DOB=$r["DOB"];
                                        $GEN=$r["GEN"];
                                        $MAIL=$r["MAIL"];
                                        $ADDR=$r["ADDR"];
                                        $SCLASS=$r["SCLASS"];
                                        $SSEC=$r["SSEC"];
                                        $SIMG=$r["SIMG"];
                                        $MNAME=$r["MNAME"];
                                        $CRNO=$r["CRNO"];
                                        $YEAR=$r["YEAR"];
                                        $PASS=$r["PASS"];
                                        $TID=$r["TID"];
                                        $SN=$r["SN"];
                                        $PHO=$r["PHO"];
                                        
									}
									
									
									
							$result = mysqli_query($db,"INSERT INTO history (RNO,NAME,REL,FNAME,DOB,GEN,MAIL,ADDR,SCLASS,SSEC,SIMG,MNAME,CRNO,YEAR,PASS,TID,SN,PHO) VALUES('$RNO','$NAME','$REL','$FNAME','$DOB','$GEN','$MAIL','$ADDR','$SCLASS','$SSEC','$SIMG','$MNAME','$CRNO','$YEAR','$PASS','$TID','$SN','$PHO')");
							if($result){
								echo "<h4 class='m-2 p-2 text-light bg-success'>All Student Save History</h4>";
							}else{
								echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
							}

							}

										echo "
											<tr>
											<form enctype='multipart/form-data' role='form' method='post' action=' ' >
												<td>{$i}</td>
												
												<td>{$r["RNO"]}</td>
												
												<td>{$r["NAME"]}</td>
												<td class='p-2'>{$r["FNAME"]}</td>

												<td>{$r["SCLASS"]}</td>
												<td>{$r["SSEC"]}</td>
												<td><button type='submit' class='btn btn-success' name='submit'>Add Data</button></td>
												 
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
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>