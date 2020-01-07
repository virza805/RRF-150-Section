<?php 
	include "database.php";
	session_start();


	if(isset($_GET["viewt"])){
		$sql="select * from exam  where ETYPE='{$_GET["etype"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			//header("location:sbg_mark.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			//$class=$rows["CLASS"];
			$etype=$_GET["etype"];

		}
	}



 ?>
<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Millennium Academic School Exam Sheet.</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="result.css">
</head>

<!--School name End-->
<!--Student imag , School Logo & griding table end-->
	<div class="container text-center">
  <div class="row">
   
    <div class="col-sm-2 text-center mt-3">
      <img src="student/Logo.jpg" alt="Trulli" width="200" height="150">
     
    </div>
     <div class="col-sm-8">
     <div class="mt-3">
     	<a href="select_view_exam.php">"786"</a>
		<h2>MILLENNIUM ACADEMIC SCHOOL</h2>
		<p>67/2 A,PURBA RAJASION, SAVAR, DHAKA</p>
	</div>
    </div>
    <div class="col-sm-2">
     </div> 
     </div>
     </div>

<div class="container_full d_back" style ='margin-top: 0px;'>

	<div class="container text-center">
				<div class="row">
					<div class="col-11 fix"> 
						
						<h4><b><?php echo $etype; ?> Exam Time Table Details</b></h4>
					
					<!--Exam See Table Section On-->
					<div class="">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
						<table border="1px" class="table table-striped"">
							<thead class="bg-light">
							<tr>
								<th>S.No</th>
								
								<th>Date</th>
								<th>Day</th>
								<th>6th</th>
								<th>7th</th>
								<th>8th</th>
								
							</tr>
  </thead>
  <tbody>
							<?php 
								$s="select * from exam  where ETYPE='{$_GET["etype"]}' ";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											
											<td>{$r["EDATE"]}</td>
											<td>{$r["DAY"]}</td>
											<td>{$r["6th"]}</td>
											<td>{$r["7th"]}</td>
											<td>{$r["8th"]}</td>
											
											
										</tr>
										";

									}
								}
							?>
						</tbody>
						</table>						
					</div>
					<!--Exam See Table Section End-->
				</div>
				
			</div>
		</div>
		
	</div>
</div>
<div class="container text-center">
	<input type="button" onclick="window.print()" value="Print Now" class="btn btn-info mt-2" >
</div>
<!-- Footer Section On -->

<div class="container_full bg-dark text-center">
	<footer>
		<p class="text-light pt-2 pb-2"> <span class="text-danger"> Copyright &copy;</span> Tanvir Hasan</p>
	</footer>
</div>


	<!-- JavaScript Files -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
</body>
</html>