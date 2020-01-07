
<?php 
   if ($gpoint  < 1) {
  //echo " 0.00";
  $g_point=0.00;
  }elseif ($gpoint  >= $bangla_point && $bangla_point  === 0) {
    //echo " 0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $engla_point && $engla_point  === 0) {
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
  }elseif ($gpoint  >= $fpoi && $fpoi  === 0) {
    //echo " 0.00";
    $g_point=0.00;
  }elseif ($gpoint  >= $bupoi && $bupoi  === 0) {
    //echo " 0.00";
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
  }else {
     //echo $gpoint;
     $g_point= $gpoint;
  }
 ?>