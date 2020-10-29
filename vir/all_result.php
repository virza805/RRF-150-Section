

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

<!-- All Result Tu + Semester Section Start Now-->

				<h4 class="text-success text-center"><b>All Result Tu + Semester</b></h4>

				<div class="row">

				<div class="col-md-4 fix"> 

						<h6><b class="text-info"> Class Play to Kg</b></h4>

                        <?php 

						  	if(isset($_GET["err"])){

						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";

						  	}

						   ?>

						<form  role="form" method="get" action="all_result_play_kg-.php">

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

							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>

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

	<!-- Class Play to Kg Section End -->

				<div class="col-md-4 fix"> 

						<h6><b class="text-info">Class 1, 2</b></h4>

                        <?php 

						  	if(isset($_GET["err"])){

						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";

						  	}

						   ?>

						<form  role="form" method="get" action="all_result_1-2-.php">

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

							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>

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

	<!-- Class 1, 2 Section End -->

				<div class="col-md-4 fix"> 

						<h6><b class="text-info">Class 3, 4, 5</b></h4>

                        <?php 

						  	if(isset($_GET["err"])){

						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";

						  	}

						   ?>

						<form  role="form" method="get" action="all_result_3-5-.php">

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

							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>

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

	<!-- Class 3, 4, 5 Section End -->

					

                </div>

                

				<div class="row">

				<div class="col-md-4 fix"> 

						<h6><b class="text-info">Class 6, 7, 8</b></h4>

                        <?php 

						  	if(isset($_GET["err"])){

						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";

						  	}

						   ?>

						<form  role="form" method="get" action="all_result_6-8-.php">

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

							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>

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

	<!-- Class 6, 7, 8 Section End -->

				<div class="col-md-4 fix"> 

						<h6><b class="text-info">Class 9-10</b></h4>

                        <?php 

						  	if(isset($_GET["err"])){

						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";

						  	}

						   ?>

						<form  role="form" method="get" action="all_result_9-10-.php">

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

							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>

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

	<!-- Class 9.10 Section End -->
				<div class="col-md-4 fix"> 
						<h6><b class="text-info">Class Ten Test Exam</b></h4>
                        <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="all_result_ten_model_test.php">
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
							 <select type="text" name="sec" placeholder="Section" class="input form-control"> <br>
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
	<!-- Class 10 Model Test Section End -->

                </div>


<!-- Footer Section On -->

<?php include "footer.php"; ?>