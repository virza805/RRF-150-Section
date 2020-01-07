<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
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
       .virza{
    position: relative;
    z-index: 78;
}
 .virza::before {
    position: absolute;
    width: 500px;
    height: 500px;
    background-image: url(img/sbgs_logo.png);
    background-position: center;
    background-size: cover;
    content: "";
    left: 35%;
    top: 35%;
    z-index: -80;
    opacity: 0.06;
	padding: 50px;
}
h6, p{
  margin: 0;
  padding: 0;
}
div#logo {
  background-color: #00a651;
  font-family: 'PT Serif', serif;
  font-size: 31px;
  color: #fff;
  display: inline-block;
  padding: 3px 30px 3px 0px;
  margin: 15px 0px;
  font-weight: 700;
  /* width: 50%; */
}
div#logo span {
  background-color: #ed1c24;
  height: 100%;
  padding: 5px 15px 6px 30px;
}
.col-sm-4.mar_mains {
  margin-top: -65px;
}
		tr.ex_color {
			color: black;
			background-color: #c70f0f30 !important;
			}
		#za td,#za th{
			border: 1px solid black !important;
        } 
 .sign{
  display: table-cell;
    vertical-align: middle;
 }       
 #sign{
    display: table;
    width: 100%;
    height: 80px;
    color: #fedb77;
}
 #sign img{
    height: 80px;
}
    </style>
</head>
<body>
<?php 
     if(isset($_GET['viewt'])){
         $query = " SELECT * FROM smark  where CLASS='{$_GET["cla"]}' and TERM='{$_GET["etype"]}' ";
         $view = $db->query($query);
         if($view){
             $i=0;
             while($rows = $view->fetch_assoc()) {
             $i++;
?>
	<div class="container text-center">
		<div id="logo">
			<span>Savar Boys</span> & Girls School
		</div>
		<h5 class="text-danger">Rajation, Savar, Dhaka-1340</h5>
		<h6>Cell: 01613-948803, 01760-505554</h6>
		<p class="text-success">Email: school.sbgs@gmail.com</p>
	</div>
<!--School name End-->
<!--Student imag , School Logo & griding table end-->
	<div class="container">
  <div class="row">
    <div class="col-sm-4 mar_mains">
      <img src="<?php echo $rows['IMG'] ?>" class="img-thumbnail" alt="Trulli" width="170" height="150">
    </div>
    <div class="col-sm-4 text-center mt-3">
      <img src="img/sbgs_logo.png" alt="Trulli" width="200" height="150">
      <h6 class="mt-2 pb-1 under_line ">ACADEMIC TRANSCRIPT</h6>
    </div>
    <div class="col-sm-4 mar_mains">
      
		  <table class="table-bordered text-center float-right" id="za" style="width:50%; max-height=100; ">
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
  	 
    	
    <div class="col-sm-4 mar_mains">
    	
 		<table class="mt-1" style="width:100%">
		    
		    <tbody>
		      <tr>
		      	<th>Name of Student</th>
                <td class="text-left">: <?php echo $rows['NAME'] ?></td>
		      </tr>
		      <tr>
		      	<th>Student ID</th>
		        <td>: <?php echo $rows['REGNO'] ?></td>
			  </tr>
		      <tr>
		      	<th>Class</th>
		        <td>: <?php echo $rows['CLASS'] ?></td>
			  </tr>
			  <tr>
		      	<th>Section/Group</th>
		        <td>: <?php echo $rows['SEC'] ?></td>
		      </tr>
			  <tr>
		      	<th>Class Roll</th>
		        <td>: <?php echo $rows['CRNO'] ?></td>
              </tr>
            </tbody>
		 </table>
	
	</div>
    <div class="col-sm-4 text-center mt-3">
      
     
    </div>
    <div class="col-sm-4">
      
		  <table class="mt-5" style="width:80%">
		    
		    <tbody class='text-danger' >
			
	      
		    </tbody>
		  </table>
		
    </div>
  </div>
</div>
<!--Result header Detals end-->

<!--end Result hader Section from before result -->
<div class="container text-center text-secondary">
	<h5> Result of <?php echo $_GET["etype"] ?> </h5>
</div>
<div class="container_full  d_back " style ='margin-top: 0px;'>
	<div class="container text-center">
		<div class="row" id="vir">	
	<!-- Result medial Or main Result Section Start / On -->
	<div class="container text-center" style="margin-bottom: 0px;">
<table class="table table-bordered table-sm virza"  id="za" >
<thead>
    <tr>
      <th scope="col">Name of Subjects</th>
      <th scope="col">Full Marks</th>
      <th scope="col">Highest Marks</th>
	  <th  colspan="2">TU + SEM</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Letter Grade</th>
      <th scope="col">Grade Point</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td class="text-left">Bangla</td>
      <td>100</td>
      <?php 
      
      $btu_h = "SELECT MAX(BTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($btu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $bhi = "SELECT MAX(BAN) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($bhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['BTU'] ?></td>
     
      <td><?php echo $rows['BAN'] ?></td>
      <?php 

  $btu =  $rows['BTU'];
  $bob_wr=$rows['BAN'];
  $ban = $bob_wr*$_GET["percent"];
  $tuban = $btu+round($ban);
  $avg = $tuban;
  $point=$tuban;
  $bpoi = include "point.php";
  $bpoi =$get_point ;

 ?>
      <td><?php  echo $tuban ?></td>
      <td>
       <?php include "grate.php"; ?>
       </td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
<!-- End Bangla -->
 
    <tr>
      <td class="text-left" >English 1st</td>
      <td>100</td>
      <?php 
      
      $etu_h = "SELECT MAX(ETU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($etu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $ehi = "SELECT MAX(ENG) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($ehi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $etu =  $rows['ETU'];
  $eob_wr=$rows['ENG'];
  $eng = $eob_wr*$_GET["percent"];
  $tueng = $etu+round($eng);
  $avg = $tueng;
  $point=$tueng;
  $epoi = include "point.php";
  $epoi = $get_point;
  
?>
      <td><?php echo $rows['ETU'] ?></td>
      <td><?php echo $rows['ENG'] ?></td>
      <td><?php  echo $tueng ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    
<!-- End English 1st -->
    <tr>
      <td class="text-left">English 2nd</td>
      <td>100</td>
      <?php 
      
      $btu_h = "SELECT MAX(EDTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($btu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $bhi = "SELECT MAX(ED) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($bhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['EDTU'] ?></td>
      <td><?php echo $rows['ED'] ?></td>
      <?php 

  $edtu =  $rows['EDTU'];
  $edan = $rows['ED']*$_GET["percent"];
  $tuen = $edtu+round($edan);
  $avg = $tuen;
  $point=$tuen;
  $edpoi = include "point.php";
  $edpoi =$get_point ;

 ?>
      <td><?php  echo $tuen ?></td>
      <td>
       <?php include "grate.php"; ?>
       </td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
<!-- End English 2nd -->
    <tr>
      <td class="text-left" >Mathematics</td>
      <td>100</td>
      <?php 
      $mtu_h = "SELECT MAX(MTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($mtu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $mhi = "SELECT MAX(MAT) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($mhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $mtu =  $rows['MTU'];
  $mob_wr=$rows['MAT'];
  $mat = $mob_wr*$_GET["percent"];
  $tumat = $mtu+round($mat);
  $avg = $tumat;
  $point=$tumat;
  $mpoi = include "point.php";
  $mpoi = $get_point;
?>
      <td><?php echo $rows['MTU'] ?></td>
      <td><?php echo $rows['MAT'] ?></td>
      <td><?php  echo $tumat ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      <td class="text-left" >Religion & Moral Edu.</td>
      <td>100</td>
      <?php 
      
      $rtu_h = "SELECT MAX(RTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($rtu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $rhi = "SELECT MAX(REL) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($rhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $rtu =  $rows['RTU'];
  $rob_wr=$rows['REL'];
  $rel = $rob_wr*$_GET["percent"];
  $turel = $rtu+round($rel);
  $avg = $turel;
  $point=$turel;
  $rpoi = include "point.php";
  $rpoi = $get_point;
?>
      <td><?php echo $rows['RTU'] ?></td>
      <td><?php echo $rows['REL'] ?></td>
      <td><?php  echo $turel ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
<!-- Now Start Grouping Subject -->
    <tr>
      <td class="text-left" >General Science</td>
      <td>100</td>
     <?php 
      
      $stu_h = "SELECT MAX(STU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($stu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $shi = "SELECT MAX(SCI) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($shi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $stu =  $rows['STU'];
  $gob_wr=$rows['SCI'];
  $sci = $gob_wr*$_GET["percent"];
  $tusci = $stu+round($sci);
  $avg = $tusci;
  $point=$tusci;
  $spoi = include "point.php";
  $spoi = $get_point;
?>
      <td><?php echo $rows['STU'] ?></td>
      <td><?php echo $rows['SCI'] ?></td>
      <td><?php  echo $tusci ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >BD & Glob. Studies</td>
      <td>100</td>
      <?php 
      
      $sotu_h = "SELECT MAX(SOTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($sotu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $sohi = "SELECT MAX(SOC) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($sohi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $sotu =  $rows['SOTU'];
  $acob_wr=$rows['SOC'];
  $acc = $acob_wr*$_GET["percent"];
  $tuacc = $sotu+round($acc);
  $avg = $tuacc;
  $point=$tuacc;
  $acpoi = include "point.php";
  $acpoi = $get_point;
?>
      <td><?php echo $rows['SOTU'] ?></td>
      <td><?php echo $rows['SOC'] ?></td>
      <td><?php  echo $tuacc ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- BD & Glob. Studies End -->

    <tr>
      <td class="text-left" >Drawing & Hand Writing</td>
      <td>50</td>
      <?php 
      
      $atu_h = "SELECT MAX(AGK) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($atu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $ahi = "SELECT MAX(AGR) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($ahi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*$_GET["percent"];
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $tu_h_mark; ?></td>
<?php 
  $atu =  $rows['ATU'];
  $aob_wr=$rows['AGR'];
  $agr = $aob_wr*$_GET["percent"];
  $tuagr = $atu+round($agr);
  //$tuagr = $rows['AGK'];
  $avg = $tuagr*2;
  $point=$tuagr*2;
  $apoi = include "point.php";
  $apoi = $get_point;
?>
      <td><?php echo $rows['ATU'] ?></td>
      <td><?php echo $rows['AGR'] ?></td>
      <td><?php  echo $tuagr ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
 
    <tr>
      <th>Total Exam Marks</th>
     
      <td>750</td>
      <td colspan="3">Obtained Marks & GPA</td>
      <?php 
      $total = $tuban+$tueng+$tuen+$tumat+$turel+$tusci+$tuacc+$tuagr;
      $svg = $total/8;
      $total_point = $bpoi+$epoi+$edpoi+$mpoi+$rpoi+$spoi+$acpoi+$apoi;
      
      $gpoint =$total_point/8;

      $gpoint = include "search_fall_3-5.php";

       $gret = $g_point;// $gpoint;
      // $get_point=$gpoint;
     // $point =$total/8; ppp.php / $gpoint
     // $get_point = include "ppp.php";
       ?>
      <th><?php echo $total ?></th>
      <th><?php include "totall_grate.php"; ?></th>
      <th>
       <?php 
       $gpoint =$total_point/8;

      $gpoint = include "search_fall_3-5.php";
      echo substr($g_point,0,4); 
       // echo $total_point/8; ?>
      </th>
    </tr>
  </tbody>
</table>
</div> 
	<!-- Result medial Or main Result Section end-->
		</div>
	</div>
</div>

<br>

<!--Student Comments  Detals on after result/number end-->
<div class="container" style=" margin-bottom: 0px; margin-top: -12px; ">
  <div class="row">
    <div class="col-sm-3">
 		<table class="table-bordered" id="za" style="width:100%">
		    
		    <tbody>
		      <tr>
		      	<th>Section Position</th>
		        <td></td>
		      </tr>
		      <tr>
		      	<th>GPA(Out of 5)</th>
		        <td> <?php echo substr($g_point,0,4); ?></td>
		        
		      </tr>
		      <tr>
		      	<th>Failed Subjects</th>
		        <td> </td>
		      </tr>
		      <tr>
		      	<th>Working Days</th>
		        <td></td>
		      </tr>
		      <tr>
		      	<th>Total Present</th>
		        <td></td>
		        
		      </tr>

		    </tbody>
		</table>
    </div>
    <div class="col-sm-3">
  <table class="table-bordered"  id="za"  style="width:100%">
		    <thead>
		      <tr>
		      	<th>. .</th>
		        <th>Moral & Behavior</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>  </td>
		        <td>Best</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Better</td>
		        
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Good</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Need Improvement</td>
		       
		      </tr>
		     
		    </tbody>
		  </table>
     
    </div>
    <div class="col-sm-3">
 		 <table class="table-bordered" id="za" style="width:100%">
		    <thead>
		      <tr>
		      	<th>. .</th>
		        <th>Co-Curricular Activities</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>  </td>
		        <td>Sports</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Cultural Function</td>
		        
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Scout/BNCC</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Math Olympiad</td>
		       
		      </tr>
		     
		    </tbody>
		  </table>    
     
    </div>
    <div class="col-sm-3">
      
	 <div class="float-right"  style="width:90%">
	 	 <img src="img/qr_tanvir.png" class="img-thumbnail float-right mt-2" alt="Trulli" width="200" height="200"> 
		 <?php // include "all_qr.php"; ?>
	 </div>
    </div>
  </div>
</div>
<!--Student Comments Detals end-->
<br>
<div class="container" style="margin-top:-60px;  ">
	<div class="row">
		<div class="col-sm-9">
			<div style="border: 1px solid black;" class="table-bordered p-3">
			  <h4>Comments</h4> 
			  <p><?php include "result_comment.php"; ?></p> 
			</div>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row" style="margin-top: 290px; " >
		<div class="col-sm-3 sign">
            <div class="text-center" id="sign">	
			        <!-- <img src="img/signisar.png" alt=""> -->
            </div>
              <center style="border-top: 4px dotted blue; margin-bottom: 0px; " >Class Teacher Sign</center>
            
    </div>
    <div class="col-sm-1"></div>
		<div class="col-sm-4 sign">
            <div class="text-center" id="sign">	
			       <!-- <img src="img/vir.png" alt=""> -->
		      	</div>
			<center style="border-top: 4px dotted blue; " >Exam Controller Sign</center>
     </div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3 sign">
			<div class="text-center" id="sign">	
			<img src="img/signisar.png" alt="">
			</div>
			<center style="border-top: 4px dotted blue; " >Headmaster</center>	
		</div>
	</div>
</div>
<?php }}}?>	
<!-- Footer Comments Section End -->
<!-- Footer Section On -->

<div class="container text-center" style="margin-top:-12px;">
<a href="all_result.php" class="text-info"><i class="fas fa-backspace"></i></a>
	<!-- <input type="button" onclick="window.print()" value="Print Now" class="btn btn-info mt-2" > -->
	<i class="fa fa-download" onclick="window.print()" ></i>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
</body>
</html> 