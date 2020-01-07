<?php 
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

// Text to output


        
        $text = $result["NAME"]."; "."Class = ".$result["SCLASS"] ." and Roll = ".$result["CRNO"];
     
      $text .= ", Exam = ". $etype;
//$qr_grad = include "qr_grade.php";
$text .= ", [{('tanvir.gq or vir-za.com')}]";

QRcode::png($text, $file, 'M', 10, 2);

echo "<center><img src='".$file."' class='img-thumbnail ' width='200' height='200'> </center> ";