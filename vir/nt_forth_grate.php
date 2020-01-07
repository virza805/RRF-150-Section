<?php

if ($mcq_forth <=8) {
    echo "<span  class='text-danger'><b>Fail</b></span>";
  }elseif ($wr_forth  <= 16) {
    echo "<span  class='text-danger'><b>Fail</b></span>";
  }elseif ($avg  <= 32) {
    echo "<span  class='text-danger'><b>Fail</b></span>";
  }elseif ($avg  >= 33 && $avg  <= 39) {
    echo "D";
  }elseif ($avg  >= 40 && $avg  <= 49) {
    echo "C";
  }elseif ($avg  >= 50 && $avg  <= 59) {
    echo "B";
  }elseif ($avg  >= 60 && $avg  <= 69) {
    echo "A-";
  }elseif ($avg  >= 70 && $avg  <= 79) {
    echo "A";
  }elseif ($avg  >= 80 && $avg  <= 100) {
    echo "A+";
  }else {
    echo "Invalid Result";
  }

?>