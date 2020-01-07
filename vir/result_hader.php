
<?php 
	include "database.php"; 
	// session_start();
	// if(!isset($_SESSION["TID"])){
	// 	echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	// }
	if(isset($_GET["viewt"])){
		$sql="select * from smark where REGNO='{$_GET["rno"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:result_hader.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["CLASS"];
			
		}
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>"786"</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="result.css">
	<style>
		tr.ex_color {
			color: black;
			background-color: #c70f0f30 !important;
			}
		#za td,#za th{
			border: 1px solid black !important;
		} 
	</style>
</head>
<body>

	<div class="container text-center">
		<h3 style="font-weight: 700; font-family: 'PT Serif', serif; margin-top:5px;"> Savar Boys & Girls School</h3>
		<h6>Rajation, Savar, Dhaka-1340</h6>
	</div>
<!--School name End-->
<!--Student imag , School Logo & griding table end-->
	<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo $rows['IMG'] ?>" class="img-thumbnail" alt="Trulli" width="170" height="150">
    </div>
    <div class="col-sm-4 text-center mt-3">
      <img src="img/sbgs_logo.png" alt="Trulli" width="200" height="150">
      <h6 class="mt-2 pb-1 under_line ">ACADEMIC TRANSCRIPT</h6>
    </div>
    <div class="col-sm-4">
      
		  <table class="table-bordered text-center float-right" id="za" style="width:60%">
		    <thead>
		      <tr>
		        <th>Range</th>
		        <th>Grade</th>
		        <th>GPA</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>80-100</td>
		        <td>A+</td>
		        <td>5.0</td>
		      </tr>
		      <tr>
		        <td>70-79</td>
		        <td>A</td>
		        <td>4.0</td>
		      </tr>
		      <tr>
		        <td>60-69</td>
		        <td>A-</td>
		        <td>3.5</td>
		      </tr>
		      <tr>
		        <td>50-59</td>
		        <td>B</td>
		        <td>3.0</td>
		      </tr>
		      <tr>
		        <td>40-49</td>
		        <td>C</td>
		        <td>2.0</td>
		      </tr>
		      <tr>
		        <td>33-39</td>
		        <td>D</td>
		        <td>1.0</td>
		      </tr>
		      <tr>
		        <td>00-32</td>
		        <td>F</td>
		        <td>0.0</td>
		      </tr>
		    </tbody>
		  </table>
		<div class="container"></div>

    </div>
  </div>
</div>
<!--Student imag , School Logo & griding table end-->


<!--Student Detals on after logo end-->
	<div class="container">
  <div class="row ">
  	 
    	
    <div class="col-sm-4">
    	<?php 
    	require_once('database.php');

			if(isset($_GET['viewt'])){
				echo "<h5 class='text-success mt-2'>Student info.</h5>";
				$sql="select * from smark where REGNO='{$_GET["rno"]}' ";
				
				$re=$db->query($sql);
				if($re->num_rows>0){
					echo '
 		<table class="mt-1" style="width:100%">
		    
		    <tbody>';
		    while ($r=$re->fetch_assoc()){
    		 echo "
		      <tr>
		      	<th>Name of Student</th>
		        <td>: {$r["NAME"]}</td>
		      </tr>
		      
		      
		      <tr>
		      	<th>Student ID</th>
		        <td>: {$r["REGNO"]}</td>
			  </tr>
		      <tr>
		      	<th>Class</th>
		        <td>: {$r["CLASS"]}</td>
			  </tr>
			  <tr>
		      	<th>Section/Group</th>
		        <td>: {$r["SEC"]}</td>
		      </tr>
			  <tr>
		      	<th>Class Roll</th>
		        <td>: {$r["CRNO"]}</td>
		      </tr>
		      ";}
		  }else{
		  	echo "No Record Found";
		  }echo "</tbody>";
		   } ?>
		 </table>
	
	</div>


    <div class="col-sm-4 text-center mt-3">
      
     
    </div>
    <div class="col-sm-4">
      
		  <table class="mt-5" style="width:80%">
		    
		    <tbody class='text-danger' >
			<!-- <?php 
if(isset($_GET['viewt'])){
$query = " SELECT * FROM student  where RNO='{$_GET["rno"]}' ";
$view = $db->query($query);
if($view){
  while($result = $view->fetch_assoc()) {
    
 ?>
		      <tr>
		      	<th>Father Name</th>
		        <td>: <?php echo $result['FNAME'] ?></td>
		      </tr>
		      <tr>
		      	<th>Mather Name</th>
		        <td>: <?php echo $result['MNAME'] ?></td>
		      </tr>
		      <tr>
		      	<th>Section/Group</th>
		        <td>: <?php echo $result['SSEC'] ?></td>
		      </tr>
			  <tr>
		      	<th>Gender</th>
		        <td>: <?php echo $result['GEN'] ?></td>
		      </tr>
			  <tr>
		      	<th>Address</th>
		        <td>: <?php echo $result['ADDR'] ?></td>
		      </tr>
  <?php }}}?> -->		      
		    </tbody>
		  </table>
		
    </div>
  </div>
</div>
<!--Result header Detals end-->