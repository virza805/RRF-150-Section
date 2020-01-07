<?php 
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

// Text to output


        
        $text = $rows["NAME"]."; "."Class = ".$rows["CLASS"] ." and roll = ".$rows["CRNO"];
     
      $text .= ", Exam = ". $etype;
      $text .= ", Totall Mark = ".$total;
      $text .= " & GPA = ". substr($g_point,0,4);
//$qr_grad = include "qr_grade.php";
$text .= ", [{('www.tanvir.gq or vir-za.com')}]";

QRcode::png($text, $file, 'M', 10, 2);

echo "<center><img src='".$file."' class='img-thumbnail ' width='200' height='200'> </center> ";