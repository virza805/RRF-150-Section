
<?php 
  include "database.php"; 
  // session_start();
  // if(!isset($_SESSION["TID"])){
  //  echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
  // }
  if(isset($_GET["viewt"])){
   $sql="select * from comment where ETYPE='{$_GET["etype"]}'";
    $res=$db->query($sql);
    if ($res->num_rows<=0) {
      header("location:result_comment.php?err=Invalid Register no..");
    }else{
      $rows=$res->fetch_assoc();
     // $rno=$rows["REGNO"];
      $etype=$_GET["etype"];
      
    }
  }
  
 ?> 



<?php 
    if ($gret  < 1) {
  echo "<span  class='text-danger'><b> '{$rows['F']}' </b></span>";
  }elseif ($gret  >= 1 && $gret  <= 1.99) {
    echo $rows['D'];
  }elseif ($gret  >= 2 && $gret  <= 2.99) {
    echo $rows['C'];
  }elseif ($gret  >= 3 && $gret  <= 3.49) {
    echo $rows['B'];
  }elseif ($gret  >= 3.50 && $gret  <= 3.99) {
    echo $rows['AAA'];
  }elseif ($gret  >= 4 && $gret  <= 4.99) {
    echo $rows['A'];
  }elseif ($gret  >= 5 && $gret  <= 5.99) {
    echo "<span class='text-success'><b>'{$rows['AA']}'</b></span>";
  }else {
    echo "Invalid Result";
  }

 ?>