<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	if(isset($_GET["rno"])){
		$sql="select * from smark where REGNO='{$_GET["rno"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:add_c_1.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["CLASS"];
			$name=$rows["NAME"];
			$img=$rows["IMG"];
			$regno=$_GET["rno"];
		}
	}
	
 ?> 

<?php include "teacher_header.php"; ?>
<!--end menu Section -->
<div class="container_full slid_img">
	<div class="container">
		<h1 class="text text-center">Wellcome To School Management System <br> For Teacher</h1>
	</div>
</div>
<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "tsidebar.php"; ?>
			
	<!-- Side bar Section end-->	
			<div class="col-md-10">
				<h2 class="text-light">Welcome <?php echo $_SESSION["TNAME"]; ?> </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Add Mark</b></h4>
						
						 
						  <?php
							require_once('database.php');

							if(isset($_POST['submit'])){
									$sql="update smark set BTU='{$_POST["tu_mark"]}', BAN='{$_POST["sem_mark"]}' where REGNO='{$_GET["rno"]}', TERM='{$rows["TERM"]}' ";
									$db->query($sql);
									echo "<h4 class='btn btn-success'>Insert Success..</h4>";
								}else{
									echo "<h4 class='p-2 text-light bg-danger'>Insert Failed</h4>";
								}


						 ?>
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Reg No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Tu Mark</th>
        <th>Sem Mark</th>
        <th>Submit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<form  role="form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
							
							 
						
        <td><input type="text" name="regno" value="<?php echo $regno; ?>" placeholder="Enter Regster No" required class="input form-control"></td>
        <td><input type="text" name="name" value="<?php echo $name; ?>" required class="input form-control"></td>
        <td><input type="text" name="class" value="<?php echo $class; ?>" required class="input form-control"></td>
        <td><input type="text" name="tu_mark" value="Input Tu" required class="input form-control"></td>
        <td><input type="text" name="sem_mark" value="Sem Mark" required class="input form-control"></td>
       
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