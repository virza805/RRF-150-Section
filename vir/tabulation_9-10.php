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
								<th>Ba1</th>
                                <th>Ba2</th>
                                <th>En1</th>
                                <th>En2</th>
                                <th>Mat</th>
                                <th>Rel</th>
                                <th>Sci</th>
                                <th>Acc</th>
                                <th>FnB</th>
                                <th>BuE</th>
                                <th>Agr</th>
                                <th>ICT</th>
                                <th>Phy</th>
                                <th>CaS</th>
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
      <!-- End Bangla 1st -->
      <td><?php // echo $tuban ?></td>
      <?php 
        // $btu =  $rows['BDTU'];
        // $bdob_wr=$rows['BDBO']+$rows['BD'];
        // $bd = $bdob_wr*0.7;
        // $tubd = $btu+round($bd);
        // $avg = $tubd;
        // $point=$tubd;
        // $bdpoi = include "point.php";
        // $bdpoi =$get_point ;

      ?>
      <td><?php // echo $tubd ?></td>
      <!-- End Bangla 2nd -->
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
      <!-- end Enaglish 1st -->
      <td><?php // echo $tueng ?></td>
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
      <!-- End Enaglish 2nd -->
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
      <?php 
        // $sotu =  $rows['ACTU'];
        // $acob_wr=$rows['ACOB']+$rows['ACC'];
        // $acc = $acob_wr*0.7;
        // $tuacc = $sotu+round($acc);
        // $avg = $tuacc;
        // $point=$tuacc;
        // $acpoi = include "point.php";
        // $acpoi = $get_point;
      ?>
      <td><?php // echo $tuacc ?></td>
      <!-- End Accounting/ -->
      <?php 
        // $rtu =  $rows['FTU'];
        // $fob_wr=$rows['FOB']+$rows['FIN'];
        // $fin = $fob_wr*0.7;
        // $tufin = $rtu+round($fin);
        // $avg = $tufin;
        // $point=$tufin;
        // $fpoi = include "point.php";
        // $fpoi = $get_point;
     ?>
        <td><?php // echo $tufin ?></td>
      <!-- End Finance & Banking/ -->
      <?php 
        // $butu =  $rows['BUTU'];
        // $buob_wr=$rows['BUOB']+$rows['BUS'];
        // $bus = $buob_wr*0.7;
        // $tubus = $butu+round($bus);
        // $avg = $tubus;
        // $point=$tubus;
        // $bupoi = include "point.php";
        // $bupoi = $get_point;
     ?>
     <td><?php // echo $tubus ?></td>
     <!-- End Business Entp./ -->
     <?php 
        // $atu =  $rows['ATU'];
        // $aob_wr=$rows['AOB']+$rows['AGR'];
        // $agr = $aob_wr*0.7;
        // $tuagr = $atu+round($agr)+$rows['AGK'];
        // $avg = $tuagr;
        // $point=$tuagr;
        // $apoi = include "point.php";
        // $apoi = $get_point;
     ?>
      <td><?php // echo $tuagr ?></td>
    <!-- End Agriculture Studies(4th)/ -->
    <?php 
        
        // $ict = $rows['ICT'];
        // $tuict = $rows['IOB']+round($ict)+$rows['ICK'];
        // $avg = $tuict*2;
        // $point=$tuict*2;
        // $ictpoi = include "point.php";
        // $ictpoi = $get_point;
     ?>
      <td><?php // echo $tuict ?></td>
     <!-- End ICT -->
     <?php 
 
        // $phk = $rows['PHK'];
        // $tuphk = round($phk);
        // $avg = $tuphk*2;
        // $point=$tuphk*2;
        // $phtpoi = include "point.php";
        // $phtpoi = $get_point;
     ?>
     <td><?php // echo $tuphk  ?></td>
     <!-- End Physical Education -->
     <?php 
 
        // $cak = $rows['CAK'];
        // $tucak = round($cak);
        // $avg = $tucak*2;
        // $point=$tucak*2;
        // $cakpoi = include "point.php";
        // $cakpoi = $get_point;
     ?>
     <td><?php // echo $tucak ?></td>
      <!-- Co-Curriculum -->      
      <?php 
      // $total = $tuban+$tubd+$tueng+$tuen+$tumat+$turel+$tusci+$tuacc+$tufin+$tubus+$tuagr+$tuict;
      // $svg = $total/12;
      // $total_point = $bpoi+ $bdpoi+$epoi+$edpoi+$mpoi+$rpoi+$spoi+$acpoi+$fpoi+$bupoi+$apoi+$ictpoi;
      
      // $gpoint =$total_point/12;

      // $gpoint = include "ppp.php";

      //  $gret = $g_point;
       ?>
      <th><?php // echo $total ?></th>
      <th><?php // include "totall_grate.php"; ?></th>
      <!-- End Total Number & Grade -->
      <th>
       <?php 
      //  $gpoint =$total_point/12;

      // $gpoint = include "ppp.php";
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