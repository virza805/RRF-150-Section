
<?php 
  include "database.php"; 
  // session_start();
  // if(!isset($_SESSION["TID"])){
  //  echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
  // }
  if(isset($_GET["viewt"])){
   $sql="select * from smark where REGNO='{$_GET["rno"]}' and TERM='{$_GET["etype"]}'";
    $res=$db->query($sql);
    if ($res->num_rows<=0) {
      header("location:result_make.php?err=Invalid Register no..");
    }else{
      $rows=$res->fetch_assoc();
      $rno=$rows["REGNO"];
      $etype=$_GET["etype"];
      
    }
  }
 ?> 
<div class="container text-center" style="margin-bottom: 0px;">
<table class="table table-bordered table-sm"  id="za" >
  <thead>
    <tr>
      <th scope="col">Name of Subjects</th>
      <th scope="col">Full Marks</th>
      <th scope="col">Highest Marks</th>
	  <th  colspan="4">TU + WR + MCQ + PR</th>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
      <td><?php echo $rows['BTU'] ?></td>
      <td><?php echo $rows['BAN'] ?></td>
      <td><?php echo $rows['BAN'] ?></td>
      <td>-</td>
      <?php 

  $btu =  $rows['BTU'];
  $ban = $rows['BAN']*0.7;
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

    <tr>
      <td class="text-left" >English</td>
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
  $eng = $rows['ENG']*0.7;
  $tueng = $etu+round($eng);
  $avg = $tueng;
  $point=$tueng;
  $epoi = include "point.php";
  $epoi = $get_point;
  
?>
      <td><?php echo $rows['ETU'] ?></td>
      <td><?php echo $rows['ENG'] ?></td>
      <td><?php echo $rows['ENG'] ?></td>
      <td>-</td>
      <td><?php  echo $tueng ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
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
  $mat = $rows['MAT']*0.7;
  $tumat = $mtu+round($mat);
  $avg = $tumat;
  $point=$tumat;
  $mpoi = include "point.php";
  $mpoi = $get_point;
?>
      <td><?php echo $rows['MTU'] ?></td>
      <td><?php echo $rows['MAT'] ?></td>
      <td><?php echo $rows['MAT'] ?></td>
      <td>-</td>
      <td><?php  echo $tumat ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $stu =  $rows['STU'];
  $sci = $rows['SCI']*0.7;
  $tusci = $stu+round($sci);
  $avg = $tusci;
  $point=$tusci;
  $spoi = include "point.php";
  $spoi = $get_point;
?>
      <td><?php echo $rows['STU'] ?></td>
      <td><?php echo $rows['SCI'] ?></td>
      <td><?php echo $rows['SCI'] ?></td>
      <td>-</td>
      <td><?php  echo $tusci ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >Social Science</td>
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
     $h_mark = $ws['hight_mark']*0.7;
      $hight_mark =$tu_h_mark+round($h_mark);
      // echo $hight_mark;
      }
       ?>
       
      <td><?php echo $hight_mark; ?></td>
<?php 
  $sotu =  $rows['SOTU'];
  $soc = $rows['SOC']*0.7;
  $tusoc = $sotu+round($soc);
  $avg = $tusoc;
  $point=$tusoc;
  $sopoi = include "point.php";
  $sopoi = $get_point;
?>
      <td><?php echo $rows['SOTU'] ?></td>
      <td><?php echo $rows['SOC'] ?></td>
      <td><?php echo $rows['SOC'] ?></td>
      <td>-</td>
      <td><?php  echo $tusoc ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr><tr>
      
      <td class="text-left" >Religion</td>
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
  $rel = $rows['REL']*0.7;
  $turel = $rtu+round($rel);
  $avg = $turel;
  $point=$turel;
  $rpoi = include "point.php";
  $rpoi = $get_point;
?>
      <td><?php echo $rows['RTU'] ?></td>
      <td><?php echo $rows['REL'] ?></td>
      <td><?php echo $rows['REL'] ?></td>
      <td>-</td>
      <td><?php  echo $turel ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >Agriculture</td>
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
  $agr = $rows['AGR']*0.7;
  $tuagr = $atu+round($agr);
  $avg = $tuagr;
  $point=$tuagr;
  $apoi = include "point.php";
  $apoi = $get_point;
?>
      <td><?php echo $rows['ATU'] ?></td>
      <td><?php echo $rows['AGR'] ?></td>
      <td><?php echo $rows['AGR'] ?></td>
      <td>-</td>
      <td><?php  echo $tuagr ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <tr>
      
      <td class="text-left" >ICT</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(ICT) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $ict = $rows['ICT'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $ictpoi = include "point.php";
  $ictpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td><?php echo $rows['ICT'] ?></td>
      <td>-</td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- Extra Subject Start -->
    <tr class="ex_color">
      
      <td class="text-left" >Physical Education</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(ICT) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $ict = $rows['ICT'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $ictpoi = include "point.php";
  $ictpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $rows['ICT'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- Extra Subject End -1 -->
    <tr class="ex_color">
      <td class="text-left" >Fine Arts</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(ICT) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $ict = $rows['ICT'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $ictpoi = include "point.php";
  $ictpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $rows['ICT'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- Extra Subject End -2 -->
    <tr class="ex_color" >
      
      <td class="text-left" >Co-Curriculum</td>
      <td>50</td>
      <?php 
      
      $ict_h = "SELECT MAX(ICT) as 'hight_marks' FROM smark WHERE CLASS='{$rows["CLASS"]}' and TERM='{$_GET["etype"]}'";
      $rs=$db->query($ict_h);
      while ($ws=$rs->fetch_assoc()){
       // $ws['hight_marks'];
        $ict_h_mark = $ws['hight_marks'];
      }
      ?>
      <td><?php echo $ict_h_mark; ?></td>
<?php 
 
  $ict = $rows['ICT'];
  $tuict = round($ict);
  $avg = $tuict*2;
  $point=$tuict*2;
  $ictpoi = include "point.php";
  $ictpoi = $get_point;
?>
      <td> - </td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $rows['ICT'] ?></td>
      <td><?php  echo $tuict ?></td>
      <td><?php include "grate.php"; ?></td>
      <td><?php include "show_point.php"; ?></td>
    </tr>
    <!-- Extra Subject End -3 -->
    <tr>
      <th>Total Exam Marks</th>
     
      <td>750</td>
      <td colspan="5">Obtained Marks & GPA</td>
      <?php 
      $total = $tuban+$tueng+$tumat+$tusci+$tusoc+$turel+$tuagr+$tuict;
      $svg = $total/8;
      $total_point = $ictpoi+$apoi+$rpoi+$spoi+$sopoi+$mpoi+$epoi+$bpoi;
      $gpoint =$total_point/8;

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
       $gpoint =$total_point/8;

      $gpoint = include "ppp.php";
      echo $g_point; 
       // echo $total_point/8; ?>
      </th>
    </tr>
  </tbody>
</table>
</div> 