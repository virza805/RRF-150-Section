<?php 
	include "database.php"; 
	session_start();
	// if(!isset($_SESSION["TID"])){
	// 	echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	// }
	if(isset($_GET["rno"])){
		$sql="select * from student where RNO='{$_GET["rno"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			//header("location:admin_par_1_add_mark.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["SCLASS"];
			$name=$rows["NAME"];
			$img=$rows["SIMG"];
			$regno=$_GET["rno"];
		}
	}
	
 ?> 

<?php include "admin_header.php"; ?>

<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome Admin </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">One Student Permission to Teacher for input Mark</b></h4>
						
						    <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								
									$regno = $_POST['regno'];
									$etype = $_POST['etype'];
									$class = $_POST['class'];
									$name = $_POST['name'];
									
							$result = mysqli_query($db,"INSERT INTO smark (REGNO,NAME,IMG,TERM,CLASS) VALUES('$regno','$name','$img','$etype','$class') ");
							if($result){
								echo "<h4 class='m-2 p-2 text-light bg-success'>Insert Success</h4>";
							}else{
							echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
							}

								
							
							}

						 ?>
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Reg No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Exam Type</th>
        <th>Submit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<form  role="form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
							
							 
						
        <td><input type="text" name="regno" value="<?php echo $regno; ?>" placeholder="Enter Regster No" required class="input form-control"></td>
        <td><input type="text" name="name" value="<?php echo $name; ?>" required class="input form-control"></td>
        <td><input type="text" name="class" value="<?php echo $class; ?>" required class="input form-control"></td>
        <td>
        	<select type="text" name="etype" required class="input form-control"> 
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
			 </select>
		</td>
        <td><button type="submit" class="btn btn-success" name="submit">Add Mark</button></td>
        </form> 
      </tr> 
      
    </tbody>
  </table>

						
						

								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>