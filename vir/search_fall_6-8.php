
<?php 
   if ($gpoint  < 1) {
  //echo " 0.00";
  $g_point=0.00;
  }elseif ($gpoint  >= $bpoi && $bpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $epoi && $epoi  === 0) {
    //echo " 0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $mpoi && $mpoi  === 0) {
    //echo " 0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $rpoi && $rpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $spoi && $spoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $acpoi && $acpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $apoi && $apoi  === 0) {
    //echo " 0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $ictpoi && $ictpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $phtpoi && $phtpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $cakpoi && $cakpoi  === 0) {
   //echo "  0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $fitpoi && $fitpoi  === 0) {
    //echo "  0.00";
     $g_point=0.00;
   }else {
     //echo $gpoint;
     $g_point= $gpoint;
  }
 ?>