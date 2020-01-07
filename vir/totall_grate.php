<?php 
    if ($gret  < 1) {
  echo "<span  class='text-danger'><b>F</b></span>";
  }elseif ($gret  >= 1 && $gret  <= 1.99) {
    echo "D";
  }elseif ($gret  >= 2 && $gret  <= 2.99) {
    echo "C";
  }elseif ($gret  >= 3 && $gret  <= 3.49) {
    echo "B";
  }elseif ($gret  >= 3.50 && $gret  <= 3.99) {
    echo "A-";
  }elseif ($gret  >= 4 && $gret  <= 4.99) {
    echo "A";
  }elseif ($gret  >= 5 && $gret  <= 5.99) {
    echo "A+";
  }else {
    echo "Invalid Result";
  }

 ?>
