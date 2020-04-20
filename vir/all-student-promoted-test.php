<?php 
	include "database.php"; 
	session_start();
	// if(!isset($_SESSION["TID"])){
	// 	echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	// }
	if(isset($_GET["viewt"])){
		$sql="select * from student where SCLASS='{$_GET["cla"]}' and SSEC='{$_GET["sec"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:sbg_mark.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["SCLASS"];
			$sec=$_GET["sec"];

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
								$sql="select * from student where SCLASS='{$_GET["cla"]}' and SSEC='{$_GET["sec"]}'  ";
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
                                // $target="student/";
                                // $target_file=$target.basename($_FILES["img"] ["name"]);
                                
                                // if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){
                                
                                $atu  = $_POST['ec'];
                                $ict  = $_POST['ess'];
                                
                                $s    = $_POST['ey'];
                                $tid    = $_POST['et'];
                                
                                $query ="UPDATE student SET SCLASS='$atu', SSEC='$ict', YEAR='$s', TID='$tid' WHERE SCLASS='$class' and SSEC='$sec' ";
                                $update =$db->query($query);
                                if($update){
                                    echo "<h3 class='text-success'> Promoted {$_GET['cla']} to $atu Success </h3> ";
                                  }else{
                                    echo "<h3 class='text-danger'> Data update Not ok </h3> ";
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

            <!-- This is test From On -->

            <table border="1px" class="mt-3 table table-striped">
								<thead>

								    <tr>
								      <th scope="col" class="text-center" colspan="2">Student Information</th>
								      <th scope="col" class="text-center" colspan="2">Student Information</th>
								    </tr>
							  </thead>
							  <tbody>
							  	<form enctype='multipart/form-data' role='form' method='post' action=' '>
							  		 <tr>
                                           
								      	<th>Class</th>
                                        <td>

                                        <select type="text" class="form-control" id="btu" placeholder="Edit Class" name="ec"> <br>
                                        <?php  
                                        $sl="select DISTINCT(CNAME) from class ";
                                        $r=$db->query($sl);
                                        if($r->num_rows>0){
                                            echo "<option value='{$result['SCLASS']}'> {$result['SCLASS']} </option>";
                                            while($ro=$r->fetch_assoc()){
                                                echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
                                            }
                                        }

                                        ?>
                                        </select>
                                    </td>
                                        
								      </tr>
								      <tr>
								      	<th>Section</th>
                                        <td>
                                            <select type="text" class="form-control" id="btu" placeholder="Edit Class Section" name="ess"> <br>
                                            <?php  
                                            $sl="select DISTINCT(CSEC) from class ";
                                            $r=$db->query($sl);
                                            if($r->num_rows>0){
                                                echo "<option value='{$result['SSEC']}'>{$result['SSEC']}</option>";
                                                while($ro=$r->fetch_assoc()){
                                                    echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
                                                }
                                            }

                                            ?>
                                            </select>
                                         </td>
								        
								      </tr>
								   
								     <tr>
								      
								      <th>Year/Sation</th>
								      <td><input type="text" class="form-control" placeholder="Edit Year" name="ey" value="<?php // echo $result['YEAR'] ?>"></td>
								    </tr>

								    <tr>
								    	 <th>Class Teacher</th>
								    	 <!-- <td>
								    	 <input type="text" class="input form-control" name="et" value="<?php //echo $result['TID'] ?>">
								    	</td>
                                         -->
                                        
                                        <td>
                                        <select type="text" class="form-control" id="btu" placeholder="Update Class Teacher" name="et"> <br>
                                        <?php  
                                        $sl="select DISTINCT(TID) from staff ";
                                        $r=$db->query($sl);
                                        if($r->num_rows>0){
                                            echo "<option value='{$result['TID']}'> {$result['TID']} </option>";
                                            while($ro=$r->fetch_assoc()){
                                                echo "<option value='{$ro["TID"]}'>TeacherID - {$ro["TID"]}</option>";
                                            }
                                        }

                                        ?>
                                        </select>
                                        </td>








								    	<td colspan="2"><input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update"></td>
								  
								    </tr>
								</form>
							  </tbody>
							</table>




            <!-- This is test From Off -->



		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>