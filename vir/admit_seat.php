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
  font-size: 31px;
  color: #fff;
  display: inline-block;
  padding: 3px 30px 3px 0px;
  margin: 15px 0px;
  font-weight: 700;
  /* width: 50%; */
}
div#logo span {
  background-color: #ed1c24;
  height: 100%;
  padding: 5px 15px 6px 30px;
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
.sign{
  display: table-cell;
    vertical-align: middle;
 }       
 #sign{
    display: table;
    width: 100%;
    
    color: #fedb77;
}
#rotate{
    position: relative;
    /* text-transform: uppercase; */
    text-align: 12px;
    /* font-weight: 300; */
    transform: rotate(270deg);
     margin-top: 90px;
    margin-bottom: 190px;
    font-size: 14px;
}
#rotate .bach img{
    width: 70px;
    height: 70px;
}
#rotate .name img{
    width:170px;
    height: 30px;
    text-align: center;

}
    </style>
</head>
<body>
	<div class="container text-center">
        <div class="row">
            <!-- Seat Plan Start -->
            <div class="col-md-4 mb-5 pb-5">
            <?php 
            if(isset($_GET['viewt'])){
            $query = " SELECT * FROM student  where SCLASS='{$_GET["cla"]}' ";
            $view = $db->query($query);
            if($view){
                $i=0;
            while($result = $view->fetch_assoc()) {
                $i++;
            ?>
<div id="rotate">
                    <div class="row">
                        <div class="col-md-3 bach">
                            <img src="img/sbgs_logo.png" >
                        </div>
                        <div class="col-md-6 name text-center">
                            <div>
                                <img src="img/sbgs_lg.png" >
                            </div>
                            <p>Savar, Dhaka-1340</p>
                            <h6 class="under_line "><b>Seat Plan</b></h6>
                        </div>
                        <div class="col-md-3 bach">
                            <img src="<?php echo $result['SIMG'] ?>" class="img-thumbnail float-right mb-2" height='70' width='70' >
                        </div>
                    </div> 
                    <!-- School info end -->
                    <div class="row" id="admit">
                        <div class="col-md-10">
                            <table class="mt-1 text-left" style="width:100%">
                                
                                <tbody>
                        
                                <tr>
                                    <th>Student</th>
                                    <td>: <?php echo $result['NAME'] ?></td>
                                </tr>
                                <tr>
                                    <th>id</th>
                                    <td>: <?php echo $result['RNO'] ?></td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>: <?php echo $result['SCLASS'] ?></td>
                                </tr>
                                <tr>
                                    <th>Group</th>
                                    <td>: <?php echo $result['SSEC'] ?></td>
                                </tr>
                                <tr>
                                    <th>Exam</th>
                                    <td>: <?php echo $_GET["etype"] ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2 text-center">
                        
                            <div class=" mt-2"  style="width:100%">
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
                 <!-- Seat Plan End -->
                 <!-- Admit Card Start -->
            <div class="col-md-8" >
            <?php 
            if(isset($_GET['viewt'])){
            $query = " SELECT * FROM student  where SCLASS='{$_GET["cla"]}' ";
            $view = $db->query($query);
            if($view){
                $i=0;
            while($result = $view->fetch_assoc()) {
                $etype =$_GET["etype"];
                $i++;
            ?>

        <div class="row"  style ='margin-top: 50px;'>
            <div class="col-md-3">
                <img src="img/sbgs_logo.png" alt="Trulli" width="150" height="100">
            </div>
            <div class="col-md-6">
                <div>
                    <img src="img/sbgs_lg.png" style="width: 300px;">
                </div>
                <h5 class="text-danger">Rajation, Savar, Dhaka-1340</h5>
                <h6>Cell: 01613-948803, 01760-505554</h6>
                <p class="text-success">Email: school.sbgs@gmail.com</p>
                <h6 class="mt-2 pb-1 under_line "><b>ADMIT CARD</b></h6>
            </div>
            <div class="col-md-3 sign">
                <div id="sign">
                    <img src="<?php echo $result['SIMG'] ?>" class="img-thumbnail float-right mb-2" style="height: 100px;" >
                </div>
            </div>
        </div> 
        <!-- School info end -->
        <div class="row" id="admit">
            <div class="col-sm-5">
                <table class="mt-1 text-left " style="width:100%">
                    
                    <tbody>
            
                    <tr>
                        <th>Student</th>
                        <td>: <?php echo $result['NAME'] ?></td>
                    </tr>
                    <tr>
                        <th>id</th>
                        <td>: <?php echo $result['RNO'] ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>: <?php echo $result['GEN'] ?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>: <?php echo $result['SCLASS'] ?></td>
                    </tr>
                    <tr>
                        <th>Section</th>
                        <td>: <?php echo $result['SSEC'] ?></td>
                    </tr>
                
                    </tbody>
                </table>
            </div>
            <div class="col-sm-5">
                <table class="mt-1 text-left" style="width:100%">
                    
                    <tbody>
                    <tr>
                        <th>Roll</th>
                        <td>: <?php echo $result['CRNO'] ?></td>
                    </tr>
                    <tr>
                        <th>F. Name</th>
                        <td>: <?php echo $result['FNAME'] ?></td>
                    </tr>
                    <tr>
                        <th>M. Name</th>
                        <td>: <?php echo $result['MNAME'] ?></td>
                    </tr>
                    <tr>
                        <th>G Mobile</th>
                        <td>: <?php echo $result['PHO'] ?></td>
                    </tr>
                    <tr>
                        <th>Exam</th>
                        <td>: <?php echo $_GET["etype"] ?></td>
                    </tr>
                
                    </tbody>
                </table>
            </div>

            <div class="col-sm-2" style ='margin-bottom: 50px;'>
                <div class="float-right"  style="width:90%">
                
                <img src="img/qr_tanvir.png" class="img-thumbnail mt-2" alt="Trulli" width="130" height="130">
                S. No: <?php echo $i ?>
                <?php // include "admit_qr.php"; ?>
                </div>
            </div>
        </div>
        <br>
        <!-- Student information end -->
        <?php }}}?>	 
            </div>
             <!-- Admit Card End -->
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