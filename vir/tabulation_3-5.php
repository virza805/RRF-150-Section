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
    <link rel="stylesheet" href="result.css">
    <style>
        #za {
    position: relative;
    z-index: 78;
}
 #za::before {
    position: absolute;
    width: 60%;
    height: 60%;
    background-image: url(img/sbgs_logo.png);
    background-position: center;
    background-size: cover;
    content: "";
    left: 20%;
    top: 22%;
    z-index: -80;
    opacity: 0.09;
	padding: 50px;
}
h6, p{
  margin: 8px 0;
  padding: 0;
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
        #sbgs_logo{
            border-bottom: 1px solid green;
            padding: 8px 0;
        }
    </style>
</head>
<body>
	<div class="container text-center">
         
    </div>
<!--School name End-->

<div class="container_full  d_back " style ='margin-top: 20px;'>

	<div class="container text-center">
        <div class="row">
            <div class="col-md-3" id="sbgs_logo">
            <img src="img/sbgs_logo.png" alt="Trulli" width="150" height="100">
            </div>
            <div class="col-md-9" id="sbgs_logo">
                <img src="img/sbgs_lg.png" alt="">
                <h5 class="text-danger">Rajashon, Savar, Dhaka-1340</h5>
                <h6 class="text-success">Cell : 01613-948803, 01760-505554</h6>
            </div>
        </div>
        
    <h4 class="text-info mt-3"><b>Tabulation Sheet</b></h4>
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-danger">Class : <b class="text-success"><?php echo $_GET["cla"] ?></b></h5>
            </div>
            <div class="col-md-4">
                <h5 class="text-danger">Section : <b class="text-success"><?php echo $_GET["sec"] ?></b></h5>
            </div>
            <div class="col-md-4">
                <h5 class="text-danger">Exam : <b class="text-success"><?php echo $_GET["etype"] ?></b></h5>
            </div>
        </div>
        <div class="container_full">
		<div class="row" id="vir">
             <div class="col-md-12 fix">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
					<table class="table table-bordered table-sm"  id="za" >
                        <thead>
							<tr>
								<th>S</th>
								<th>Id</th>
								<th>Roll</th>
								<th>Name</th>
								<th>Ban</th>
                                <th>Eng</th>
                                <th>Eng2</th>
                                <th>Math</th>
                                <th>Religion</th>
                                <th>BD & Glob. Stu.</th>
                                <th>G.Science</th>
                                <th>Drawing</th>
                                <th>Total</th>
                                <th>GPA</th>
                                <th>GP</th>
                                <th>Pos</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if(isset($_GET['viewt'])){
                            $query = " SELECT * FROM smark  where CLASS='{$_GET["cla"]}' and TERM='{$_GET["etype"]}' ";
                            $view = $db->query($query);
                            if($view){
                                $i=0;
                            while($rows = $view->fetch_assoc()) {
                                $i++;
                        ?>	

										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $rows['REGNO'] ?></td>
											<td><?php echo $rows['CRNO'] ?></td>
											<td class="text-left"><?php echo $rows['NAME'] ?></td>
        <?php 

        // $btu =  $rows['BTU'];
        // $bob_wr=$rows['BOB']+$rows['BAN'];
        // $ban = $bob_wr*0.7;
        // $tuban = $btu+round($ban);
        // $avg = $tuban;
        // $point=$tuban;
        // $bpoi = include "point.php";
        // $bpoi =$get_point ;

      ?>
      
      <td><?php // echo $tuban ?></td>
      
      <!-- End Bangla 1st -->
      <?php 
        // $etu =  $rows['ETU'];
        // $eob_wr=$rows['ENG'];
        // $eng = $eob_wr*0.7;
        // $tueng = $etu+round($eng);
        // $avg = $tueng;
        // $point=$tueng;
        // $epoi = include "point.php";
        // $epoi = $get_point;
        
      ?>
      
      <td><?php // echo $tueng ?></td>
      <!-- end Enaglish 1st -->
      <?php 

        // $edtu =  $rows['EDTU'];
        // $edan = $rows['ED']*0.7;
        // $tuen = $edtu+round($edan);
        // $avg = $tuen;
        // $point=$tuen;
        // $edpoi = include "point.php";
        // $edpoi =$get_point ;

      ?>
      <td><?php // echo $tuen ?></td>
      <?php 
        // $mtu =  $rows['MTU'];
        // $mob_wr=$rows['MOB']+$rows['MAT'];
        // $mat = $mob_wr*0.7;
        // $tumat = $mtu+round($mat);
        // $avg = $tumat;
        // $point=$tumat;
        // $mpoi = include "point.php";
        // $mpoi = $get_point;
      ?>
      <td><?php // echo $tumat ?></td>
 <!-- Mathematics -->
      <?php 
        // $rtu =  $rows['RTU'];
        // $rob_wr=$rows['ROB']+$rows['REL'];
        // $rel = $rob_wr*0.7;
        // $turel = $rtu+round($rel);
        // $avg = $turel;
        // $point=$turel;
        // $rpoi = include "point.php";
        // $rpoi = $get_point;
      ?>
      <td><?php // echo $turel ?></td>
<!-- Religion & Moral Edu. -->
      <?php 
        // $stu =  $rows['STU'];
        // $gob_wr=$rows['GOB']+$rows['SCI'];
        // $sci = $gob_wr*0.7;
        // $tusci = $stu+round($sci);
        // $avg = $tusci;
        // $point=$tusci;
        // $spoi = include "point.php";
        // $spoi = $get_point;
      ?>
      <td><?php // echo $tusci ?></td>
<!-- General Science -->
        <?php 
        // $sotu =  $rows['SOTU'];
        // $acob_wr=$rows['SOB']+$rows['SOC'];
        // $acc = $acob_wr*0.7;
        // $tuacc = $sotu+round($acc);
        // $avg = $tuacc;
        // $point=$tuacc;
        // $acpoi = include "point.php";
        // $acpoi = $get_point;
        ?>
      <td><?php // echo $tuacc ?></td>
<!-- BD & Glob. Studies -->
      <?php 
        // $atu =  $rows['ATU'];
        // $aob_wr=$rows['AOB']+$rows['AGR'];
        // $agr = $aob_wr*0.7;
        // //$tuagr = $atu+round($agr)+$rows['AGK'];
        // $tuagr = $rows['AGK'];
        // $avg = $tuagr*2;
        // $point=$tuagr*2;
        // $apoi = include "point.php";
        // $apoi = $get_point;
     ?>
        <td><?php // echo $tuagr ?></td>
<!-- Drawing & Hand Writing -->    
      <?php 
      //  $total = $tuban+$tueng+$tuen+$tumat+$turel+$tusci+$tuacc+$tuagr;
      //  $svg = $total/8;
      //  $total_point = $bpoi+$epoi+$edpoi+$mpoi+$rpoi+$spoi+$acpoi+$apoi;
       
      //  $gpoint =$total_point/8;
 
      //  $gpoint = include "search_fall_3-5.php";
 
      //   $gret = $g_point;
       ?>
      <th><?php // echo $total ?></th>
      <th><?php // include "totall_grate.php"; ?></th>
      <!-- End Total Number & Grade -->
      <th>
       <?php 
      //  $gpoint =$total_point/8;

      // $gpoint = include "search_fall_3-5.php";
      // echo substr($g_point,0,4); 
        ?>
      </th>
      <td></td>
                                        </tr>
                                        

                <?php }}}?>	
                        <tbody>
					</table>
			    </div>
		</div>
		</div>
	</div>
</div>
<!--Student imag , School Logo & griding table end-->
<div class="container text-center" style="margin-top:-12px;">
<a href="others.php" class="text-info"><i class="fas fa-backspace"></i></a>
	
	<i class="fa fa-download" onclick="window.print()" ></i>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>