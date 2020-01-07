
      <?php 
      if ($ba_mcq  <= 6) {
  echo 0.00;
  }elseif ($ba_wr  <= 16) {
    echo 0.00;
  }elseif ($b_mcq  <= 6) {
    echo 0.00;
  }elseif ($b_wr  <= 16) {
    echo 0.00;
  }elseif ($tuban  <= 32) {
    echo 0.00;
  }elseif ($tubd  <= 32) {
    echo 0.00;
  }elseif ($point  <= 32) {
    echo 0.00;
  }elseif ($point  >= 33 && $point  <= 39) {
    echo 1.00;
  }elseif ($point  >= 40 && $point  <= 49) {
    echo 2.00;
  }elseif ($point  >= 50 && $point  <= 59) {
    echo 3.00;
  }elseif ($point  >= 60 && $point  <= 69) {
    echo 3.50;
  }elseif ($point  >= 70 && $point  <= 79) {
    echo 4.00;
  }elseif ($point  >= 80 && $point  <= 100) {
    echo 5.00;
  }else {
    echo "Invalid Result";
  }
       ?>