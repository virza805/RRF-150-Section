<?php 
	include "database.php";
	session_start();

$editid = $_GET['editid'];
if(isset($_POST['submit'])){

$btu   = $_POST['etyp'];
$etu   = $_POST['edat'];
$mtu  = $_POST['eday'];
$stu    = $_POST['6th'];
$sotu    = $_POST['7th'];
$rtu   = $_POST['8th'];

$query ="UPDATE exam SET ETYPE='$btu', EDATE='$etu', DAY='$mtu', 6th='$stu', 7th='$sotu', 8th='$rtu' WHERE EID='$editid' ";
$update =$db->query($query);
if($update){
    echo "<h3 class='text-success'> Data update sussecs </h3> ";
  }else{
    echo "<h3 class='text-danger'> Data update Not ok </h3> ";
  }


}

 ?>

<?php include "admin_header.php"; ?>
	
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
						<h4><b class="text-info">Updeat or Edit Mark</b></h4>
						<a href="view_class_result.php"> <<=Back </a>
						<div class="container">
							<?php 

$query = "SELECT * FROM exam WHERE EID= '$editid' ";
$edit = $db->query($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>
 
 <div class="row ">
  	 
    	
    <div class="col-sm-6 text-left">
    	
 		<table class="mt-3" style="width:100%">
		    
		    <tbody>
		    	
		      <tr class=''>
		      	<th>Edit/Update ID</th>
		        <td >: <?php echo $result['EID'] ?></td>
		      </tr>
		      
		      <tr>
		      	<th>Exam</th>
		        <td>: <?php echo $result['ETYPE'] ?></td>
		        
		      </tr>
		     </tbody>
		 </table>
	
	</div>


    
    <div class="col-sm-6 text-right mt-3">
      
     
    </div>
</div>
							<table border="1px" class="mt-3 table table-striped">
								<thead>

								    <tr>
								      <th scope="col">S.No</th>
								      <th scope="col">Edit Subjects</th>
								      <th scope="col">Edit Value</th>
								    </tr>
							  </thead>
							  <tbody>
							  	<form enctype='multipart/form-data' role='form' method='post' action=' '>
								    <tr>
								      <th scope="row">1</th>
								      <td>Exam Type</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Type" name="etyp" value="<?php echo $result['ETYPE'] ?>"></td>
								      
								     
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td>Exam Date</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Date" name="edat" value="<?php echo $result['EDATE'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td>Exam Days</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Days" name="eday" value="<?php echo $result['DAY'] ?>"></td>
								     
								     
								    </tr>
								    <tr>
								      <th scope="row">4</th>
								      <td>Class 6th</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Subject Class 6" name="6th" value="<?php echo $result['6th'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">5</th>
								      <td>Class 7th</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Subject Class 7" name="7th" value="<?php echo $result['7th'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">6</th>
								      <td>Class 8th</td>
								      <td><input type="text" class="form-control" placeholder="Edit Exam Subject Class 8" name="8th" value="<?php echo $result['8th'] ?>"></td>
								    </tr>
								   
								    <tr>
								    	<td colspan="4">
                          <input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update">
<!-- 
                          <button type='submit' class='btn btn-success' name='submite'>Delat</button> -->
                          </td>
                        </tr>
								</form>
							  </tbody>
							</table>
 <?php } ?>
						</div>
								
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>

						 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

							$ename = $_POST['etyp'];
							$etype = $_POST['date'];
							$date = $_POST['day'];
							$ses = $_POST['sub'];
							$cla = $_POST['s7'];
							$sub = $_POST['s8'];
							
							

							$result = mysqli_query($db,"INSERT INTO exam (ETYPE,EDATE,DAY,6th,7th,8th) VALUES('$ename','$etype','$date','$ses','$cla','$sub')");
							if($result){
								echo "<h4 style='color: green'>Exam Date Add Success..</h4>";
							}else{
							echo "<h4 style='color:red'>Exam Date Add Failed Some problem</h4>";
							}

							}

						 ?>