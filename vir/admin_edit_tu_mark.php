<?php 
	include "database.php";
	session_start();

$editid = $_GET['editid'];
if(isset($_POST['submit'])){

$btu   = $_POST['btu'];
$etu   = $_POST['etu'];
$mtu  = $_POST['mtu'];
$stu    = $_POST['stu'];
$sotu    = $_POST['sotu'];
$rtu   = $_POST['rtu'];
$atu  = $_POST['atu'];
$bdtu  = $_POST['bdtu'];
$edtu  = $_POST['edtu'];
$actu  = $_POST['actu'];
$ftu  = $_POST['ftu'];
$butu  = $_POST['butu'];

$query ="UPDATE smark SET BTU='$btu', ETU='$etu', MTU='$mtu', STU='$stu', SOTU='$sotu', RTU='$rtu', ATU='$atu', BDTU='$bdtu', EDTU='$edtu', ACTU='$actu', FTU='$ftu',BUTU='$butu' WHERE SMID='$editid' ";
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

$query = "SELECT * FROM smark WHERE SMID= '$editid' ";
$edit = $db->query($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>
 
 <div class="row ">
  	 
    	
    <div class="col-sm-6 text-left">
    	
 		<table class="mt-3" style="width:100%">
		    
		    <tbody>
		    	
		      <tr>
		      	<th>Name of Student</th>
		        <td>: <?php echo $result['NAME'] ?></td>
		      </tr>
		      
		      <tr class=''>
		      	<th>Edit/Update ID</th>
		        <td >: <?php echo $result['SMID'] ?></td>
		      </tr>
		      <tr>
		      	<th>Student Reg. No</th>
		        <td>: <?php echo $result['REGNO'] ?></td>
		      </tr>
		      
		      <tr>
		      	<th>Class</th>
		        <td>: <?php echo $result['CLASS'] ?></td>
		      </tr>
		      <tr>
		      	<th>Class Roll</th>
		        <td>: <?php echo $result['CRNO'] ?></td>
		        
		      </tr>
		      <tr>
		      	<th>Exam</th>
		        <td>: <?php echo $result['TERM'] ?></td>
		        
		      </tr>
		     </tbody>
		 </table>
	
	</div>


    
    <div class="col-sm-6 text-right mt-3">
      
     <img src='<?php echo $result['IMG'] ?>' class="img-thumbnail" alt="Trulli" width="200" height="200" >
    </div>
</div>
							<table border="1px" class="mt-3 table table-striped">
								<thead>

								    <tr>
								      <th scope="col">S.No</th>
								      <th scope="col">Name of Subjects</th>
								      <th scope="col"> Tutorial Mark</th>
								    </tr>
							  </thead>
							  <tbody>
							  	<form enctype='multipart/form-data' role='form' method='post' action=' '>
								    <tr>
								      <th scope="row">1</th>
								      <td>Bangla</td>
								      <td><input type="number" class="form-control" id="btu" placeholder=" Bangla Tu Mark" name="btu" value="<?php echo $result['BTU'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td>Bangla 2nd</td>
								      <td><input type="number" class="form-control" id="bdtu" placeholder=" Bangla 2nd Tu Mark" name="bdtu" value="<?php echo $result['BDTU'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td>English</td>
								      <td><input type="number" class="form-control" id="etu" placeholder=" Englis Tu Mark" name="etu" value="<?php echo $result['ETU'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">4</th>
								      <td>English 2nd</td>
								      <td><input type="number" class="form-control" id="edtu" placeholder=" Englis 2nd Tu Mark" name="edtu" value="<?php echo $result['EDTU'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">5</th>
								      <td>Math</td>
								      <td><input type="number" class="form-control" id="mtu" placeholder=" Math Tu Mark" name="mtu" value="<?php echo $result['MTU'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">6</th>
								      <td>G. Science</td>
								      <td><input type="number" class="form-control" id="stu" placeholder=" Science Tu Mark" name="stu" value="<?php echo $result['STU'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">7</th>
								      <td>BD & Glob. Stu.</td>
								      <td><input type="number" class="form-control" id="sotu" placeholder=" BD & Glob. Stu. Tu Mark" name="sotu" value="<?php echo $result['SOTU'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">8</th>
								      <td>Religion</td>
								      <td><input type="number" class="form-control" id="rtu" placeholder=" Religion Tu Mark" name="rtu" value="<?php echo $result['RTU'] ?>"></td>
									</tr>
								    <tr>
								      <th scope="row">9</th>
								      <td>Accounting</td>
								      <td><input type="number" class="form-control" id="actu" placeholder=" Accounting Tu Mark" name="actu" value="<?php echo $result['ACTU'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">10</th>
								      <td>Fin. & Banking</td>
								      <td><input type="number" class="form-control" id="ftu" placeholder=" Fin. & Banking Tu Mark" name="ftu" value="<?php echo $result['FTU'] ?>"></td>
									</tr>
								    <tr>
								      <th scope="row">11</th>
								      <td>Business Entp</td>
								      <td><input type="number" class="form-control" id="butu" placeholder=" Business Entp Tu Mark" name="butu" value="<?php echo $result['BUTU'] ?>"></td>
								    </tr>
									
								    <tr>
								      <th scope="row">12</th>
								      <td>Agriculture/ Drawing & Hand Writing</td>
								      <td><input type="number" class="form-control" id="atu" placeholder=" Agriculture Tu Mark" name="atu" value="<?php echo $result['ATU'] ?>"></td>
								     
								    </tr>
								   
									
								    <tr>
								      <td colspan="4">
									  <input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update">
										<!-- <button type='submit' class='btn btn-success' name='submite'>Delat</button> -->
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
