
<?php 
	include "database.php";
	session_start();
	
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
				<h2 class="text-light">Welcome </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">View / Edit Class Exam Mark </b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="admin_viwe_class_result.php"><br>
							
							<br>

							<select type="text" name="cla" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(CLASS) from smark ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Class</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["CLASS"]}'>{$ro["CLASS"]}</option>";
								}
							}

							 ?>

							 </select> <br>
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
				</div>
				

				<!--Tabulation Sheet Details Naw -->
				<h4 class="text-success text-center"><b>Tabulation Sheet</b></h4>
				<div class="row">
	<!--Student List Section End -->
					<div class="col-md-4 fix"> 
						<h6><b class="text-info">Tabulation Sheet Play to Kg</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						
						<form  role="form" method="get" action="tabulation_play_nursery.php">
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
						
						<form  role="form" method="get" action="tabulation_1_2.php">
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
						
						<form  role="form" method="get" action="tabulation_3_5.php">
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
						
						<form  role="form" method="get" action="tabulation_6_8.php">
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
						
						<form  role="form" method="get" action="tabulation_9_10.php">
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
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>