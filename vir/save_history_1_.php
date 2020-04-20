<?php 
	include "database.php"; 
	session_start();
	// if(!isset($_SESSION["TID"])){
	// 	echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	// }
	if(isset($_GET["rno"])){
		$sql="select * from student where RNO='{$_GET["year"]}' ";
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
				<div class="col-md-4">
			<h4><b class="text-info">To test 1/1 save history</b></h4>
						<?php 
							if(isset($_GET["err"])){
								echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
							}
						 ?>
					  <form  role="form" method="get" action=""><br>
						  
					  <select type="text" name="year" required class="input form-control"> 
				<?php  
					$sl="select DISTINCT(RNO) from student ";
					$r=$db->query($sl);
					if($r->num_rows>0){
						echo "<option value=''>Sleet Student ID</option>";
							while($ro=$r->fetch_assoc()){
								echo "<option value='{$ro["RNO"]}'>{$ro["RNO"]}</option>";
						}
					}

				 ?>
			 </select>
						  
						  <button type="submit" class="btn btn-success" name="viewt">View Details </button> <br><br>
					  </form>  <br>
					  
			</div>
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">student Table To Send for save Table</b></h4>
						
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Submit</th>
        <th>Reg No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Year</th>
      </tr>
    </thead>
    <tbody>
    <?php 
			$sql="SELECT * FROM student where RNO='{$_GET["year"]}' ";
			$res=$db->query($sql);
		
			if($res->num_rows>0){
				while($row=$res->fetch_assoc()){;	
        ?>
        
        
        <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
								
									$regno = $_POST['regno'];
									$year = $_POST['year'];
									$class = $_POST['class'];
									$name = $_POST['name'];
                                    $img = $_POST['img'];
                                    
									$rel = $_POST['rel'];
									$fname = $_POST['fname'];
									$mname = $_POST['mname'];
									$dob = $_POST['dob'];
									$gen = $_POST['gen'];
                                    
									$mail = $_POST['mail'];
									$addr = $_POST['addr'];
									$ssec = $_POST['ssec'];
									$crno = $_POST['crno'];
                                    
									$pass = $_POST['pass'];
									$tid = $_POST['tid'];
									$pho = $_POST['pho'];
									
							$result = mysqli_query($db,"INSERT INTO save (RNO,NAMES,SIMG,YE,SCLASS,REL,FNAME,MNAME,DOB,GEN,MAIL,ADDR,SSEC,CRNO,PHO,PASS,TID) VALUES('$regno','$name','$img','$year','$class','$rel','$fname','$mname','$dob','$gen','$mail','$addr','$ssec','$crno','$pho','$pass','$tid') ");
							if($result){
								echo "<h4 class='m-2 p-2 text-light bg-success'>Insert Success</h4>";
							}else{
							echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
							}	
							
							}

						 ?>
						 
		<form  role="form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
      <tr>				
        <td><input type="text" name="regno" value="<?php echo $row['RNO']; ?>" placeholder="Enter Regster No" required class="input form-control"></td>
        <td><input type="text" name="name" value="<?php echo $row['NAME'] ?>" required class="input form-control"></td>
        <td><input type="text" name="class" value="<?php echo $row['SCLASS'] ?>" required class="input form-control"></td>
        <td><input type="text" name="year" value="<?php echo $row['YEAR'] ?>" required class="input form-control"></td>
        <td><input type="text" name="img" value="<?php echo $row['SIMG'] ?>" required class="input form-control"></td>

        <td><input type="text" name="rel" value="<?php echo $row['REL'] ?>" required class="input form-control"></td>
        <td><input type="text" name="fname" value="<?php echo $row['FNAME'] ?>" required class="input form-control"></td>
        <td><input type="text" name="mname" value="<?php echo $row['MNAME'] ?>" required class="input form-control"></td>
        
	  </tr>
      <tr>				
        <td><input type="text" name="dob" value="<?php echo $row['DOB'] ?>" required class="input form-control"></td>
        <td><input type="text" name="gen" value="<?php echo $row['GEN'] ?>" required class="input form-control"></td>

        <td><input type="text" name="mail" value="<?php echo $row['MAIL'] ?>" required class="input form-control"></td>
        <td><input type="text" name="addr" value="<?php echo $row['ADDR'] ?>" required class="input form-control"></td>
        <td><input type="text" name="ssec" value="<?php echo $row['SSEC'] ?>" required class="input form-control"></td>
        <td><input type="text" name="crno" value="<?php echo $row['CRNO'] ?>" required class="input form-control"></td>
 
        <td><input type="text" name="pass" value="<?php  echo $row['PASS'] ?>" required class="input form-control"></td>
        <td><input type="text" name="tid" value="<?php  echo $row['TID'] ?>" required class="input form-control"></td>
        <td><input type="text" name="pho" value="<?php  echo $row['PHO'] ?>" required class="input form-control"></td>
	  </tr>
	  <tr>
	  <td><button type="submit" class="btn btn-success" name="submit">SaveToHistory</button></td>
	  </tr>
	  
	  </form> 
      <?php }}?> 
      
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