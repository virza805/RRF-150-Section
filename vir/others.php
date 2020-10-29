<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	$sql="SELECT * FROM hclass WHERE TID={$_SESSION["TID"]}";
	$res=$db->query($sql);

	if($res->num_rows>0){
		$row=$res->fetch_assoc();
	}
 ?> 
<?php include "teacher_header.php"; ?>

<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-10">
				<h2>Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>

				<h4 class="text-success text-center"><b>Exam Admit Card & Seat Plan</b></h4>
				<div class="row">
				<div class="col-md-4 fix"> 
						<h6><b class="text-info">Seat Plan & Admit Card</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="admit_seat.php">
                       
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
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ENAME) from lexam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ENAME"]}'>{$ro["ENAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>			
					</div>
	<!-- Exam Admit Card Section End -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Exam Seat Plan</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="seat_plan.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
							<select type="text" name="clas" required class="input form-control"> <br>
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
							 </select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ENAME) from lexam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ENAME"]}'>{$ro["ENAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>			
					</div>
	<!-- Exam Seat Plan Section End -->
	<div class="col-md-4 fix"> 
						<h6><b class="text-info">Admit Card</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="admit_card.php">
                       
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
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ENAME) from lexam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ENAME"]}'>{$ro["ENAME"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>			
					</div>
	<!-- Exam Admit Card Section End -->
				</div>
				<!-- End Class Play-Kg -->
				<h4 class="text-success text-center"><b>Section Wise Details</b></h4>
				<div class="row">
				<div class="col-md-4 fix"> 
						<h6><b class="text-info">Student List</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="section_stu_list.php">
							
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
					</div>
	<!--Student List Section End -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Attendance Sheet</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="attendance_sheet.php">
						<table>
							<tbody>
							<tr>
								<td>
							<select type="text" name="cla" required class="input form-control">
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
							 </select> 
							 </td>
							 <td>
							 <input type="text" name="month" placeholder="Enter Month" class="input form-control">
							 </td>
							</tr> 
							</tbody>
						</table>
						<br>
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
					</div>
	<!-- Attendance Sheet Section End -->
	<!-- <div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_sheet.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
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
						</form>  <br>	
					</div> -->

	<!-- Tabulation Sheet Section End -->
				</div>
				<!--Tabulation Sheet Details Naw -->
				<h4 class="text-success text-center"><b>Blank Tabulation Sheet</b></h4>
				<div class="row">
	<!--Student List Section End -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet Play to Kg</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_play-kg.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(TERM) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["TERM"]}'>{$ro["TERM"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View</button> <br><br>
						</form>  <br>	
					</div>
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet 1-2</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_1-2.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(TERM) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["TERM"]}'>{$ro["TERM"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>	
					</div>
			<!--End Tabulation Sheet 1, 2 -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet 3, 4, 5</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_3-5.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(TERM) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["TERM"]}'>{$ro["TERM"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>	
					</div>
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet 6, 7, 8 </b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_6-8.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(TERM) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["TERM"]}'>{$ro["TERM"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>	
					</div>
		<!-- End Tabulation Sheet 6, 7, 8 -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet 9-10</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_9-10.php">
						<table>
							<tbody>
							<tr>
								<td>
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
							 </select>
							 </td>
							 <td>
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
							</select>
							 </td>
							</tr> 
							</tbody>
						</table>
							 <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(TERM) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["TERM"]}'>{$ro["TERM"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
						</form>  <br>	
					</div>
	<!-- Tabulation Sheet Section End -->
				</div>
				<!-- End Section Wise Details -->
				
			</div>
		</div>
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>