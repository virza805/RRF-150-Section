
       <?php 
      if ($point  <= 32) {
    0.00;
   $forth_sub_point= 0;
  }elseif ($point  >= 33 && $point  <= 39) {
     0;
    $forth_sub_point=0;
  }elseif ($point  >= 40 && $point  <= 49) {
     0;
    $forth_sub_point=0;
  }elseif ($point  >= 50 && $point  <= 59) {
     1;
    $forth_sub_point=1;
  }elseif ($point  >= 60 && $point  <= 69) {
     1.50;
    $forth_sub_point=1.50;
  }elseif ($point  >= 70 && $point  <= 79) {
     2;
    $forth_sub_point=2;
  }elseif ($point  >= 80 && $point  <= 100) {
     3;
    $forth_sub_point=3;
  }else {
    echo "Invalid Great Point";
  }
       ?>