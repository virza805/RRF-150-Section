<?php 
	include "database.php";
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>"786"</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="result.css">
    <style>
        #admit {
    position: relative;
    z-index: 78;
}
 #admit::before {
    position: absolute;
    width: 130px;
    height: 130px;
    background-image: url(img/sbgs_logo.png);
    background-position: center;
    background-size: cover;
    content: "";
    left: 40%;
    top: 0;
    z-index: -80;
    opacity: 0.09;
	padding: 50px;
}
h6, p{
  margin: 0;
  padding: 0;
}
div#logo {
  background-color: #00a651;
  font-family: 'PT Serif', serif;
  font-size: 15px;
  color: #fff;
  display: inline-block;
  padding:3px 10px 3px 0px;
  margin: 0px 0px;
  font-weight: 700;
  /* width: 50%; */
}
div#logo span {
  background-color: #ed1c24;
  height: 100%;
  padding: 4px 10px 4px 10px;
}
.col-sm-4.mar_mains {
  margin-top: -65px;
}
		tr.ex_color {
			color: black;
			background-color: #c70f0f30 !important;
			}
		#za td,#za th{
			border: 1px solid black !important;
		} 
        #seat_plan_img{
            max-height: 100px;
        }
        #seat_width{ 
            margin-bottom:8xp;
        }
    </style>
</head>
<body>
	<div class="container text-center">
        <div class="row">
            <div class="col-md-6">
            <?php 
if(isset($_GET['viewt'])){
$query = " SELECT * FROM student  where SCLASS='{$_GET["cla"]}' ";
$view = $db->query($query);
if($view){
    $i=0;
while($result = $view->fetch_assoc()) {
    $i++;
?>
<div id="seat_width">
        <div class="row">
            <div class="col-md-3">
                <img src="img/sbgs_logo.png" alt="Trulli" width="100" height="100">
            </div>
            <div class="col-md-6">
                <div id="logo">
                <span>Savar Boys</span> & Girls School
                </div>
                <p>Rajation, Savar, Dhaka-1340</p>
                <h6 class="mt-2 pb-1 under_line "><b><?php echo $_GET["etype"] ?> Seat Plan</b></h6>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $result['SIMG'] ?>" class="img-thumbnail float-right mb-2" id="seat_plan_img" alt="Trulli" width="170" height="150">
            </div>
        </div> 
        <!-- School info end -->
        <div class="row" id="admit">
            <div class="col-sm-10">
                <table class="mt-1 text-left" style="width:80%">
                    
                    <tbody>
            
                    <tr>
                        <th>Student Name</th>
                        <td>: <?php echo $result['NAME'] ?></td>
                    </tr>
                    <tr>
                        <th>Student id</th>
                        <td>: <?php echo $result['RNO'] ?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>: <?php echo $result['SCLASS'] ?></td>
                    </tr>
                    <tr>
                        <th>Section/Group</th>
                        <td>: <?php echo $result['SSEC'] ?></td>
                    </tr>
                    <tr>
                        <th>Exam</th>
                        <td>: <?php echo $_GET["etype"] ?></td>
                    </tr>
                
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2">
               
                <div class=" mt-5"  style="width:90%">
                <h4><b>Roll</b></h4>
                <h1><b><?php echo $result['CRNO'] ?></b></h1>
                
                    <?php // include "qr.php"; ?>
                </div>
            </div>
        </div>
        
        <!-- Student information end -->
</div>
        <?php }}}?>	 
            </div>
            <!-- end 1st class -->
            <div class="col-md-6"> 
            <?php 
            if(isset($_GET['viewt'])){
            $query = " SELECT * FROM student  where SCLASS='{$_GET["clas"]}' ";
            $view = $db->query($query);
            if($view){
                $i=0;
            while($result = $view->fetch_assoc()) {
                $i++;
            ?>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/sbgs_logo.png" alt="Trulli" width="100" height="75">
                        </div>
                        <div class="col-md-6">
                            <div id="logo">
                            <span>Savar Boys</span> & Girls School
                            </div>
                            <p>Rajation, Savar, Dhaka-1340</p>
                            <h6 class="mt-2 pb-1 under_line "><b><?php echo $_GET["etype"] ?> Seat Plan</b></h6>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo $result['SIMG'] ?>" class="img-thumbnail float-right mb-2" id="seat_plan_img" alt="Trulli" width="170" height="150">
                        </div>
                    </div> 
                    <!-- School info end -->
                    <div class="row" id="admit">
                        <div class="col-sm-10">
                            <table class="mt-1 text-left" style="width:80%">
                                
                                <tbody>
                        
                                <tr>
                                    <th>Student Name</th>
                                    <td>: <?php echo $result['NAME'] ?></td>
                                </tr>
                                <tr>
                                    <th>Student id</th>
                                    <td>: <?php echo $result['RNO'] ?></td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>: <?php echo $result['SCLASS'] ?></td>
                                </tr>
                                <tr>
                                    <th>Section/Group</th>
                                    <td>: <?php echo $result['SSEC'] ?></td>
                                </tr>
                                <tr>
                                    <th>Exam</th>
                                    <td>: <?php echo $_GET["etype"] ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-2">
                        
                            <div class=" mt-5"  style="width:90%">
                            <h4><b>Roll</b></h4>
                            <h1><b><?php echo $result['CRNO'] ?></b></h1>
                            
                                <?php // include "qr.php"; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Student information end -->

                    <?php }}}?>	 

            </div>
        </div>
 
	</div>
<!--School name End-->
<!--Student imag , School Logo & griding table end-->
<div class="container text-center" style="margin-top:-12px;">
<a href="others.php" class="text-info"><i class="fas fa-backspace"></i></a>
	
	<i class="fa fa-download" onclick="window.print()" ></i>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>