<?php 
	include "database.php";
	session_start();

	$editid = $_GET['editid'];
	if(isset($_POST['submit'])){

			$et = $_POST['ety'];
		
			$ap = $_POST['ap'];
			$a = $_POST['a'];
			$as = $_POST['as'];
			
			$b = $_POST['b'];
			$c = $_POST['c'];
			$d = $_POST['d'];
			$f = $_POST['f'];
			
	
	$query ="UPDATE comment SET ETYPE='$et', AA='$ap', A='$a', AAA='$as', B='$b', C='$c', D='$d', F='$f' WHERE ECID='$editid' ";
	$update =$db->query($query);
	if($update){
		echo "<h3 class='text-success'> Data update sussecs </h3> ";
	}else{
		echo "<h3 class='text-danger'> Data update Not ok </h3> ";
	}	
	
	}

 ?>
<?php include "admin_header.php"; ?>

<!-- Slider images Off -->

<div class="container_full d_back" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2>Welcome Admin</h2>
				
<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Set Exam Comments</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>




				<form method="post" enctype='multipart/form-data' role='form' action=' '>
				<br>
							
						<table border="1px" class="table table-striped">
						<?php 

$query = "SELECT * FROM comment WHERE ECID= '$editid' ";
$edit = $db->query($query);
while ($result = $edit->fetch_assoc()) {
  
	?>			
						<tr>
							<th>Edit ID No</th>
							<th><?php echo $result['ECID'] ?></th>
						</tr>
						<tr>
							<th>Exam Name</th>
							
							<td><input type="text" name="ety" value="<?php echo $result['ETYPE'] ?>"  required class="input form-control"> </td>
							
						</tr>
						<tr>
							<th>A+</th>
							<td><input type="text" name="ap" value="<?php echo $result['AA'] ?>"  required class="input form-control"> </td>
						</tr>
						<tr>
							<th>A</th>
							<td><input type="text" name="a" value="<?php echo $result['A'] ?>" class="input form-control"></td>
						</tr>
						<tr>
							<th>A-</th>
							<td><input type="text" name="as" value="<?php echo $result['AAA'] ?>" class="input form-control"></td>
						</tr>
						<tr>
							<th>B</th>
							<td><input type="text" name="b" value="<?php echo $result['B'] ?>" class="input form-control"></td>
						</tr>
						<tr>
							<th>C</th>
							<td><input type="text" name="c" value="<?php echo $result['C'] ?>" class="input form-control"></td>
						</tr>
						<tr>
							<th>D</th>
							<td><input type="text" name="d" value="<?php echo $result['D'] ?>" class="input form-control"></td>
						</tr>
						<tr>
							<th>F</th>
							<td><input type="text" name="f" value="<?php echo $result['F'] ?>" class="input form-control"></td>
						</tr>
					</table>
							
							  <br>
							 <br>
							<button type="submit" class="btn btn-success" name="submit">Update Comment</button> <br><br>
<?php } ?>
			</form>  <br>
						
								
					</div>
				</div>


<!-- End Exam Comments Input Section --->
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>
