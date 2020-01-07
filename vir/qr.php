
<?php 
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

// Text to output

if(isset($_GET['viewt'])){
    $query = " SELECT * FROM smark  where REGNO='{$_GET["rno"]}' ";
    $view = $db->query($query);
    if($view){
      while($r = $view->fetch_assoc()) {
      
$text = $r["NAME"]."; "."Class = ".$r["CLASS"] ." and roll = ".$r["CRNO"];
}}}
$text .= ", Exam = ". $etype;
$text .= ", Totall Mark = ".$total;
$text .= " & GPA = ". substr($g_point,0,4);
//$qr_grad = include "qr_grade.php";
$text .= ", [{('www.tanvir.gq or vir-za.com')}]";

QRcode::png($text, $file, 'M', 10, 2);

echo "<center><img src='".$file."' class='img-thumbnail ' width='200' height='200'> </center> ";