
       <?php 
      if ($mcq <=6) {
   0.00;
  $get_point=0;
  }elseif ($wr  <= 16) {
    0.00;
   $get_point= 0;
  }elseif ($point  <= 32) {
    0.00;
   $get_point= 0;
  }elseif ($point  >= 33 && $point  <= 39) {
     1.00;
    $get_point=1.00;
  }elseif ($point  >= 40 && $point  <= 49) {
     2.00;
    $get_point=2.00;
  }elseif ($point  >= 50 && $point  <= 59) {
     3.00;
    $get_point=3.00;
  }elseif ($point  >= 60 && $point  <= 69) {
     3.50;
    $get_point=3.50;
  }elseif ($point  >= 70 && $point  <= 79) {
     4.00;
    $get_point=4.00;
  }elseif ($point  >= 80 && $point  <= 100) {
     5.00;
    $get_point=5.00;
  }else {
    echo "Invalid Great Point";
  }
       ?>