<?php 
    if ($g_point  < 1) {
   "<span  class='text-danger'><b>F</b></span>";
  }elseif ($g_point  >= 1 && $g_point  <= 1.99) {
     "D";
  }elseif ($g_point  >= 2 && $g_point  <= 2.99) {
     "C";
  }elseif ($g_point  >= 3 && $g_point  <= 3.49) {
     "B";
  }elseif ($g_point  >= 3.50 && $g_point  <= 3.99) {
     "A-";
  }elseif ($g_point  >= 4 && $g_point  <= 4.99) {
     "A";
  }elseif ($g_point  >= 5 && $g_point  <= 5.99) {
     "A+";
  }else {
     "Invalid Result";
  }

 ?>