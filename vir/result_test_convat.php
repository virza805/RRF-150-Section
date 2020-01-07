
<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	if(isset($_GET["viewt"])){
		//$sql="select * from student where SCLASS='{$_GET["cla"]}' and SSEC='{$_GET["sec"]}' ";
		$sql="select * from smark where REGNO='{$_GET["rno"]}' and TERM='{$_GET["etype"]}'";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:view_result.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$rno=$rows["REGNO"];
			$etype=$_GET["etype"];
		}
	}

	
 ?> 

<?php include "result_hader_1.php"; ?>

<!--end Result hader Section from before result -->
<div class="container text-center text-secondary">
	<h5> Result of <?php echo $etype;?> </h5>
</div>
<div class="container_full  d_back " style ='margin-top: 0px;'>
	<div class="container text-center">
		<div class="row" id="vir">	
	<!-- Result medial Or main Result Section Start / On -->
	<div class="container text-center" style="margin-bottom: 0px;">
<table class="table table-bordered table-sm"  id="za" >
  <thead>
    <tr>
      <th scope="col">Name of Subjects</th>
      <th scope="col">Full Marks</th>
      <th scope="col">Highest Marks</th>
	  <th  colspan="4">TU + MCQ + WR + PR</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Letter Grade</th>
      <th scope="col">Grade Point</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-left">Bangla 1st</td>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['BTU'] ?></td>
      <td><?php echo $rows['BOB'] ?></td>
      <td><?php echo $rows['BAN'] ?></td>
      <td>-</td>
      <?php 

  $btu =  $rows['BTU'];
  $bob_wr=$rows['BOB']+$rows['BAN'];
  $ban = $bob_wr*0.7;
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
<!-- End Bangla 1st -->
    <tr>
      <td class="text-left">Bangla 2nd</td>
      <td>100</td>
      <?php 
      
      $btu_h = "SELECT MAX(BDTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($btu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $bhi = "SELECT MAX(BD) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($bhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['BDTU'] ?></td>
      <td><?php echo $rows['BDBO'] ?></td>
      <td><?php echo $rows['BD'] ?></td>
      <td>-</td>
      <?php 

  $btu =  $rows['BDTU'];
  $bdob_wr=$rows['BDBO']+$rows['BD'];
  $bd = $bdob_wr*0.7;
  $tubd = $btu+round($bd);
  $avg = $tubd;
  $point=$tubd;
  $bdpoi = include "point.php";
  $bdpoi =$get_point ;

 ?>
      <td><?php  echo $tubd ?></td>
      <td>
       <?php include "grate.php"; ?>
       </td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
<!-- End Bangla 2nd -->
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $etu =  $rows['ETU'];
  $eob_wr=$rows['ENG'];
  $eng = $eob_wr*0.7;
  $tueng = $etu+round($eng);
  $avg = $tueng;
  $point=$tueng;
  $epoi = include "point.php";
  $epoi = $get_point;
  
?>
      <td><?php echo $rows['ETU'] ?></td>
      <td>-</td>
      <td><?php echo $rows['ENG'] ?></td>
      <td>-</td>
      <td><?php  echo $tueng ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['EDTU'] ?></td>
      <td>-</td>
      <td><?php echo $rows['ED'] ?></td>
      <td>-</td>
      <?php 

  $edtu =  $rows['EDTU'];
  $edan = $rows['ED']*0.7;
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $mtu =  $rows['MTU'];
  $mob_wr=$rows['MOB']+$rows['MAT'];
  $mat = $mob_wr*0.7;
  $tumat = $mtu+round($mat);
  $avg = $tumat;
  $point=$tumat;
  $mpoi = include "point.php";
  $mpoi = $get_point;
?>
      <td><?php echo $rows['MTU'] ?></td>
      <td><?php echo $rows['MOB'] ?></td>
      <td><?php echo $rows['MAT'] ?></td>
      <td>-</td>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $rtu =  $rows['RTU'];
  $rob_wr=$rows['ROB']+$rows['REL'];
  $rel = $rob_wr*0.7;
  $turel = $rtu+round($rel);
  $avg = $turel;
  $point=$turel;
  $rpoi = include "point.php";
  $rpoi = $get_point;
?>
      <td><?php echo $rows['RTU'] ?></td>
      <td><?php echo $rows['ROB'] ?></td>
      <td><?php echo $rows['REL'] ?></td>
      <td>-</td>
      <td><?php  echo $turel ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
<!-- Now Start Grouping Subject -->
    <tr>
      <td class="text-left" >General Science/</td>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $stu =  $rows['STU'];
  $gob_wr=$rows['GOB']+$rows['SCI'];
  $sci = $gob_wr*0.7;
  $tusci = $stu+round($sci);
  $avg = $tusci;
  $point=$tusci;
  $spoi = include "point.php";
  $spoi = $get_point;
?>
      <td><?php echo $rows['STU'] ?></td>
      <td><?php echo $rows['GOB'] ?></td>
      <td><?php echo $rows['SCI'] ?></td>
      <td>-</td>
      <td><?php  echo $tusci ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >Accounting/</td>
      <td>100</td>
      <?php 
      
      $sotu_h = "SELECT MAX(ACTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($sotu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $sohi = "SELECT MAX(ACC) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($sohi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $sotu =  $rows['ACTU'];
  $acob_wr=$rows['ACOB']+$rows['ACC'];
  $acc = $acob_wr*0.7;
  $tuacc = $sotu+round($acc);
  $avg = $tuacc;
  $point=$tuacc;
  $acpoi = include "point.php";
  $acpoi = $get_point;
?>
      <td><?php echo $rows['ACTU'] ?></td>
      <td><?php echo $rows['ACOB'] ?></td>
      <td><?php echo $rows['ACC'] ?></td>
      <td>-</td>
      <td><?php  echo $tuacc ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      <td class="text-left" >Finance & Banking/</td>
      <td>100</td>
      <?php 
      
      $rtu_h = "SELECT MAX(FTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($rtu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $rhi = "SELECT MAX(FIN) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($rhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $rtu =  $rows['FTU'];
  $fob_wr=$rows['FOB']+$rows['FIN'];
  $fin = $fob_wr*0.7;
  $tufin = $rtu+round($fin);
  $avg = $tufin;
  $point=$tufin;
  $fpoi = include "point.php";
  $fpoi = $get_point;
?>
      <td><?php echo $rows['FTU'] ?></td>
      <td><?php echo $rows['FOB'] ?></td>
      <td><?php echo $rows['FIN'] ?></td>
      <td>-</td>
      <td><?php  echo $tufin ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      <td class="text-left" >Business Entp./</td>
      <td>100</td>
      <?php 
      
      $rtu_h = "SELECT MAX(BUTU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($rtu_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $tu_h_mark = $ws['hight_marks'];
      }
      

      $rhi = "SELECT MAX(BUS) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $res=$db->query($rhi);
      // while ($ws=$res->fetch_assoc()){
      //   echo $ws['hight_mark']; ---This is alternative of if condition 
      // }
      if ($res->num_rows>=0){

      $ws=$res->fetch_assoc();
     
      // $ws['hight_mark'];
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $butu =  $rows['BUTU'];
  $buob_wr=$rows['BUOB']+$rows['BUS'];
  $bus = $buob_wr*0.7;
  $tubus = $butu+round($bus);
  $avg = $tubus;
  $point=$tubus;
  $bupoi = include "point.php";
  $bupoi = $get_point;
?>
      <td><?php echo $rows['BUTU'] ?></td>
      <td><?php echo $rows['BUOB'] ?></td>
      <td><?php echo $rows['BUS'] ?></td>
      <td>-</td>
      <td><?php  echo $turel ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      <td class="text-left" >Agriculture Studies(4th)/</td>
      <td>100</td>
      <?php 
      
      $atu_h = "SELECT MAX(ATU) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $atu =  $rows['ATU'];
  $aob_wr=$rows['AOB']+$rows['AGR'];
  $agr = $aob_wr*0.7;
  $tuagr = $atu+round($agr)+$rows['AGK'];
  $avg = $tuagr;
  $point=$tuagr;
  $apoi = include "point.php";
  $apoi = $get_point;
?>
      <td><?php echo $rows['ATU'] ?></td>
      <td><?php echo $rows['AOB'] ?></td>
      <td><?php echo $rows['AGR'] ?></td>
      <td><?php echo $rows['AGK'] ?></td>
      <td><?php  echo $tuagr ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >ICT</td>
      <td>50</td>
      <?php 
       $atu_h = "SELECT MAX(IOB) as 'hight_mark' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
       $rs=$db->query($atu_h);
       while ($ws=$rs->fetch_assoc()){
        // $ws['hight_marks'];
         $tu_h_mark = $ws['hight_mark'];
       }

      $ict_h = "SELECT MAX(ICT) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
       
     $h_mark = $ws['hight_marks'];
     $hight_mark =$tu_h_mark+round($h_mark);
      }
      ?>
      
<?php 
 $hight_ict= $hight_mark+$rows['ICK'];
  $ict = $rows['ICT'];
  $tuict = $rows['IOB']+round($ict)+$rows['ICK'];
  $avg = $tuict*2;
  $point=$tuict*2;
  $ictpoi = include "point.php";
  $ictpoi = $get_point;
?>
      <td><?php echo $hight_ict; ?></td>
      <td> - </td>
      <td><?php echo $rows['IOB'] ?></td>
      <td><?php echo $rows['ICT'] ?></td>
      <td><?php echo $rows['ICK'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>



    <!-- Extra Subject Start #### Extra Subject Start-->
    <tr class="ex_color">
      <td class="text-left" >Physical Education</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(PHK) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $PHK = $rows['PHK'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $phtpoi = include "point.php";
  $phtpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $rows['PHK'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    
    <!-- Extra Subject End -2 -->
    <tr class="ex_color" >
      <td class="text-left" >Co-Curriculum</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(CAK) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $ict = $rows['CAK'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $cakpoi = include "point.php";
  $cakpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $rows['CAK'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- Extra Subject End -3 -->
    <tr>
      <th>Total Exam Marks</th>
     
      <td>1150</td>
      <td colspan="5">Obtained Marks & GPA</td>
      <?php 
      $total = $tuban+$tubd+$tueng+$tuen+$tumat+$turel+$tusci+$tuacc+$tufin+$tubus+$tuagr+$tuict;
      $svg = $total/12;
      $total_point = $bpoi+ $bdpoi+$epoi+$edpoi+$mpoi+$rpoi+$spoi+$acpoi+$fpoi+$bupoi+$apoi+$ictpoi;
      
      $gpoint =$total_point/12;

      $gpoint = include "ppp.php";

       $gret = $g_point;// $gpoint;
      // $get_point=$gpoint;
     // $point =$total/8; ppp.php / $gpoint
     // $get_point = include "ppp.php";
       ?>
      <th><?php echo $total ?></th>
      <th><?php include "totall_grate.php"; ?></th>
      <th>
       <?php 
       $gpoint =$total_point/12;

      $gpoint = include "ppp.php";
      echo $g_point; 
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

<!-- Footer Section On -->
<?php include "result_footer.php"; ?>

	 