<?php 
	include "database.php";
	session_start();

$editid = $_GET['editid'];
if(isset($_POST['submit'])){
// $target="student/";
// $target_file=$target.basename($_FILES["img"] ["name"]);

// if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){
$btu   = $_POST['en'];
$etu   = $_POST['ef'];
$mtu  = $_POST['ed'];
$stu    = $_POST['ep'];
$sotu    = $_POST['ee'];
$rtu   = $_POST['ea'];
$atu  = $_POST['ec'];
$ict  = $_POST['ess'];

$e   = $_POST['em'];
$m  = $_POST['er'];
$so    = $_POST['epa'];
$s    = $_POST['ey'];
$sn    = $_POST['sn'];
$gen    = $_POST['egen'];

$query ="UPDATE student SET NAME='$btu', FNAME='$etu', DOB='$mtu', PHO='$stu', MAIL='$sotu', ADDR='$rtu', SCLASS='$atu', SSEC='$ict', MNAME='$e', CRNO='$m', YEAR='$s', PASS='$so', SN='$sn', GEN='$gen' WHERE ID='$editid' ";
$update =$db->query($query);
if($update){
    echo "<h3 class='text-success'> Data update sussecs </h3> ";
  }else{
    echo "<h3 class='text-danger'> Data update Not ok </h3> ";
  }
// }

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
						<h4><b class="text-info">Updeat or Edit Student Info.</b></h4>
						
						<div class="container">
							<?php 

$query = "SELECT * FROM student WHERE ID= '$editid' ";
$edit = $db->query($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>
 
 <div class="row ">
  	 
    	
    <div class="col-sm-6 text-left">
    	
 		<table class="mt-3" style="width:100%">
		    
		    <tbody>
		      <tr>
		      	<th>Edit/Update ID</th>
		        <td > <h4><b class="text-success"><?php echo $result['ID'] ?></b></h4></td>
		      </tr>
		      <tr>
		      	<th>Student Reg. No</th>
		        <td> <h4><b class="text-success"><?php echo $result['RNO'] ?></b></h4></td>
		      </tr>
		     
		      
		     </tbody>
		 </table>
	
	</div>


    
    <div class="col-sm-6 text-right mt-3">
      
     <img src='<?php echo $result['SIMG'] ?>' class="img-thumbnail" alt="Trulli" width="200" height="200" >
    </div>
</div>


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
								      	<th>Name of Student</th>
								        <td><input type="text" class="form-control" id="btu" placeholder="Edit Name" name="en" value="<?php echo $result['NAME'] ?>"> </td>
								     
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
								      	<th>Class Roll</th>
								        <td><input type="text" class="form-control" id="btu" placeholder="Edit Class Roll" name="er" value="<?php echo $result['CRNO'] ?>"></td>
								        
								      </tr>
								    <tr>
								      
								      <th>Father Name</th>
								      <td><input type="text" class="form-control" placeholder="Edit Father" name="ef" value="<?php echo $result['FNAME'] ?>"></td>
								      <th scope="row">Mother Name</th>
								      <td><input type="text" class="form-control" placeholder="Edit Mother" name="em" value="<?php echo $result['MNAME'] ?>"></td>
								     
								    </tr>
								    <tr>
								      
								      <th>Phone</th>
								      <td><input type="text" class="form-control" placeholder="Edit Phone Number" name="ep" value="<?php echo $result['PHO'] ?>"></td>
								      <th scope="row">Email</th>
								      <td><input type="text" class="form-control" placeholder="Edit Email" name="ee" value="<?php echo $result['MAIL'] ?>"></td>
								     
								    </tr>
								    <tr>
								      
								      <th>Barth Day</th>
								      <td><input type="text" class="form-control" placeholder="Edit Date of Barth" name="ed" value="<?php echo $result['DOB'] ?>"></td>
								      <th scope="row">Gender</th>
								      <td><input type="text" class="form-control" placeholder="Edit Gender" name="egen" value="<?php echo $result['GEN'] ?>"></td>
								     
								    </tr>
								    <tr>
								      
								      <th>Address</th>
								      <td><input type="text" class="form-control" placeholder="Edit Addreass" name="ea" value="<?php echo $result['ADDR'] ?>"></td>
								      <th scope="row">Password</th>
								      <td><input type="text" class="form-control" placeholder="Edit Password" name="epa" value="<?php echo $result['PASS'] ?>"></td>
								     
								    </tr>
								   
								
								     <tr>
								      
								      <th>Year/Sation</th>
								      <td><input type="text" class="form-control" placeholder="Edit Year" name="ey" value="<?php echo $result['YEAR'] ?>"></td>
								      <th scope="row">Udate Image</th>
								      <!-- <td><input type="file" name="img" required class="input form-control" value="<?php //echo $result['SIMG'] ?>"></td>
									  -->
									  
									  <td>
										  <input type="text" class="form-control" placeholder="About Student Short note" name="sn" value="<?php echo $result['SN'] ?>">
									  </td>
								    </tr>

								    <tr>
								    	 <th>Class Teacher</th>
								    	 <td>
								    	 <input type="text" class="input form-control" name="et" value="<?php echo $result['TID'] ?>">
								    	</td>
								    	
								    	<td colspan="2"><input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update"></td>
								  
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
