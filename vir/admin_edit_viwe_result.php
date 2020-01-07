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
$ict  = $_POST['ict'];
$b   = $_POST['b'];
$e   = $_POST['e'];
$m  = $_POST['m'];
$s    = $_POST['s'];
$so    = $_POST['so'];
$r   = $_POST['r'];
$a  = $_POST['a'];

$bob  = $_POST['bob'];
$bdtu  = $_POST['bdtu'];
$bd  = $_POST['bd'];
$bdob  = $_POST['bdob'];
$edtu  = $_POST['edtu'];
$ed  = $_POST['ed'];
$mob  = $_POST['mob'];
$rob  = $_POST['rob'];
$gob  = $_POST['gob'];
$sob  = $_POST['sob'];
$actu  = $_POST['actu'];
$acc  = $_POST['acc'];
$acob  = $_POST['acob'];
$ftu  = $_POST['ftu'];
$fin  = $_POST['fin'];
$fob  = $_POST['fob'];
$butu  = $_POST['butu'];
$buob  = $_POST['buob'];
$bus  = $_POST['bus'];
$iob  = $_POST['iob'];
$ick  = $_POST['ick'];
$phk  = $_POST['phk'];
$cak  = $_POST['cak'];
$agk  = $_POST['agk'];
$fik  = $_POST['fik'];
$aob  = $_POST['aob'];

$query ="UPDATE smark SET BTU='$btu', ETU='$etu', MTU='$mtu', STU='$stu', SOTU='$sotu', RTU='$rtu', ATU='$atu', ICT='$ict', BAN='$b', ENG='$e', MAT='$m', SCI='$s', SOC='$so', REL='$r', BOB='$bob', BDTU='$bdtu', BD='$bd',BDBO='$bdob', EDTU='$edtu', ED='$ed', MOB='$mob',ROB='$rob', SOB='$sob', GOB='$gob', ACTU='$actu', ACC='$acc', ACOB='$acob', FTU='$ftu', FIN='$fin', FOB='$fob',BUTU='$butu', BUOB='$buob', BUS='$bus', IOB='$iob', ICK='$ick', PHK='$phk', CAK='$cak', AGK='$agk', FIK='$fik', AOB='$aob', AGR='$a' WHERE SMID='$editid' ";
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
								      <th scope="col"> M.C.Q. Mark</th>
									  <th  colspan="">Written Mark</th>
									  <th  colspan="">Practical Mark</th>
								    </tr>
							  </thead>
							  <tbody>
							  	<form enctype='multipart/form-data' role='form' method='post' action=' '>
								    <tr>
								      <th scope="row">1</th>
								      <td>Bangla</td>
								      <td><input type="number" class="form-control" id="btu" placeholder=" Bangla Tu Mark" name="btu" value="<?php echo $result['BTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="bob" placeholder=" Bangla  M.C.Q. Mark" name="bob" value="<?php echo $result['BOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="b" placeholder=" Bangla  Written Mark" name="b" value="<?php echo $result['BAN'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td>Bangla 2nd</td>
								      <td><input type="number" class="form-control" id="bdtu" placeholder=" Bangla 2nd Tu Mark" name="bdtu" value="<?php echo $result['BDTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="bdob" placeholder=" Bangla 2nd  M.C.Q. Mark" name="bdob" value="<?php echo $result['BDBO'] ?>"></td>
								      <td><input type="number" class="form-control" id="bd" placeholder=" Bangla 2nd Written Mark" name="bd" value="<?php echo $result['BD'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td>English</td>
								      <td><input type="number" class="form-control" id="etu" placeholder=" Englis Tu Mark" name="etu" value="<?php echo $result['ETU'] ?>"></td>
								      <td></td>
								      <td><input type="number" class="form-control" id="e" placeholder=" Englis Written Mark" name="e" value="<?php echo $result['ENG'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">4</th>
								      <td>English 2nd</td>
								      <td><input type="number" class="form-control" id="edtu" placeholder=" Englis 2nd Tu Mark" name="edtu" value="<?php echo $result['EDTU'] ?>"></td>
								      <td></td>
								      <td><input type="number" class="form-control" id="ed" placeholder=" Englis 2nd Written Mark" name="ed" value="<?php echo $result['ED'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">5</th>
								      <td>Math</td>
								      <td><input type="number" class="form-control" id="mtu" placeholder=" Math Tu Mark" name="mtu" value="<?php echo $result['MTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="mob" placeholder=" Bangla  M.C.Q. Mark" name="mob" value="<?php echo $result['MOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="m" placeholder=" Bangla Written Mark" name="m" value="<?php echo $result['MAT'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">6</th>
								      <td>G. Science</td>
								      <td><input type="number" class="form-control" id="stu" placeholder=" Science Tu Mark" name="stu" value="<?php echo $result['STU'] ?>"></td>
								      <td><input type="number" class="form-control" id="gob" placeholder=" Bangla M.C.Q. Mark" name="gob" value="<?php echo $result['GOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="s" placeholder=" Bangla Written Mark" name="s" value="<?php echo $result['SCI'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">7</th>
								      <td>BD & Glob. Stu.</td>
								      <td><input type="number" class="form-control" id="sotu" placeholder=" BD & Glob. Stu. Tu Mark" name="sotu" value="<?php echo $result['SOTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="sob" placeholder="BD & Glob. Stu. M.C.Q. Mark" name="sob" value="<?php echo $result['SOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="so" placeholder="BD & Glob. Stu. Written Mark" name="so" value="<?php echo $result['SOC'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">8</th>
								      <td>Religion</td>
								      <td><input type="number" class="form-control" id="rtu" placeholder=" Religion Tu Mark" name="rtu" value="<?php echo $result['RTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="rob" placeholder=" Religino M.C.Q. Mark" name="rob" value="<?php echo $result['ROB'] ?>"></td>
								      <td><input type="number" class="form-control" id="r" placeholder=" Religino Written Mark" name="r" value="<?php echo $result['REL'] ?>"></td>
									</tr>
								    <tr>
								      <th scope="row">9</th>
								      <td>Accounting</td>
								      <td><input type="number" class="form-control" id="actu" placeholder=" Accounting Tu Mark" name="actu" value="<?php echo $result['ACTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="acob" placeholder=" Accounting M.C.Q. Mark" name="acob" value="<?php echo $result['ACOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="acc" placeholder=" Accounting Written Mark" name="acc" value="<?php echo $result['ACC'] ?>"></td>
								    </tr>
								    <tr>
								      <th scope="row">10</th>
								      <td>Fin. & Banking</td>
								      <td><input type="number" class="form-control" id="ftu" placeholder=" Fin. & Banking Tu Mark" name="ftu" value="<?php echo $result['FTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="fob" placeholder=" Fin. & Banking M.C.Q. Mark" name="fob" value="<?php echo $result['FOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="fin" placeholder=" Fin. & Banking Written Mark" name="fin" value="<?php echo $result['FIN'] ?>"></td>
									</tr>
								    <tr>
								      <th scope="row">11</th>
								      <td>Business Entp</td>
								      <td><input type="number" class="form-control" id="butu" placeholder=" Business Entp Tu Mark" name="butu" value="<?php echo $result['BUTU'] ?>"></td>
								      <td><input type="number" class="form-control" id="buob" placeholder=" Business Entp M.C.Q. Mark" name="buob" value="<?php echo $result['BUOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="bus" placeholder=" Business Entp Written Mark" name="bus" value="<?php echo $result['BUS'] ?>"></td>
								    </tr>
									
								    <tr>
								      <th scope="row">12</th>
								      <td>Agriculture/ Drawing & Hand Writing</td>
								      <td><input type="number" class="form-control" id="atu" placeholder=" Agriculture Tu Mark" name="atu" value="<?php echo $result['ATU'] ?>"></td>
								      <td><input type="number" class="form-control" id="aob" placeholder="Agriculture  M.C.Q. Mark" name="aob" value="<?php echo $result['AOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="a" placeholder="Agriculture Written Mark" name="a" value="<?php echo $result['AGR'] ?>"></td>
								      <td><input type="number" class="form-control" id="agk" placeholder="Agriculture Practical Mark" name="agk" value="<?php echo $result['AGK'] ?>"></td>
								     
								    </tr>
								    <tr>
								      <th scope="row">13</th>
								      <td>ICT</td>
								      <td>-</td>
								      <td><input type="number" class="form-control" id="iob" placeholder="ICT  M.C.Q. Mark" name="iob" value="<?php echo $result['IOB'] ?>"></td>
								      <td><input type="number" class="form-control" id="ict" placeholder="ICT Written Mark" name="ict" value="<?php echo $result['ICT'] ?>"></td>
								      <td><input type="number" class="form-control" id="ick" placeholder="ICT Practical Mark" name="ick" value="<?php echo $result['ICK'] ?>"></td>
								    </tr>
								     <!-- Extra Subjects -->
									 <tr>
								      <th scope="row">14</th>
								      <td>Physical Education</td>
								      <td>-</td>
								      <td>-</td>
								      <td>-</td>
								      <td><input type="number" class="form-control" id="phk" placeholder=" Physical Education Practical Mark" name="phk" value="<?php echo $result['PHK'] ?>"></td>
									</tr>
									 <tr>
								      <th scope="row">15</th>
								      <td>Fine Arts</td>
								      <td>-</td>
								      <td>-</td>
								      <td>-</td>
								      <td><input type="number" class="form-control" id="fik" placeholder=" Fine Arts Practical Mark" name="fik" value="<?php echo $result['FIK'] ?>"></td>
									</tr>
									 <tr>
								      <th scope="row">16</th>
								      <td>Co-Curriculum</td>
								      <td>-</td>
								      <td>-</td>
								      <td>-</td>
								      <td><input type="number" class="form-control" id="cak" placeholder=" Co-Curriculum Practical Mark" name="cak" value="<?php echo $result['CAK'] ?>"></td>
									</tr>
									
								    <tr>
								      <td colspan="8">
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
