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
        #za {
    position: relative;
    z-index: 78;
}
 #za::before {
    position: absolute;
    width: 60%;
    height: 60%;
    background-image: url(img/sbgs_logo.png);
    background-position: center;
    background-size: cover;
    content: "";
    left: 20%;
    top: 22%;
    z-index: -80;
    opacity: 0.09;
	padding: 50px;
}
h6, p{
  margin: 8px 0;
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
        #sbgs_logo{
            border-bottom: 1px solid green;
            padding: 8px 0;
        }
    </style>
</head>
<body>
	<div class="container text-center">
        <?php 
            if(isset($_GET['viewt'])){
            $query = " SELECT * FROM student  where SCLASS='{$_GET["cla"]}' ";
            $view = $db->query($query);
            if($view){
                $i=0;
            while($result = $view->fetch_assoc()) {
                $i++;
        ?>

        <?php }}}?>	 
    </div>
<!--School name End-->

<div class="container_full  d_back " style ='margin-top: 20px;'>

	<div class="container text-center">
        <div class="row">
            <div class="col-md-3" id="sbgs_logo">
            <img src="img/sbgs_logo.png" alt="Trulli" width="150" height="100">
            </div>
            <div class="col-md-9" id="sbgs_logo">
                <img src="img/sbgs_lg.png" alt="">
                <h5 class="text-danger">Rajashon, Savar, Dhaka-1340</h5>
                <h6 class="text-success">Cell : 01613-948803, 01760-505554</h6>
            </div>
        </div>
        
    <h4 class="text-info mt-3"><b>Student Attendance Sheet</b></h4>
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-danger">Class : <b class="text-success"><?php echo $_GET["cla"] ?></b></h5>
            </div>
            <div class="col-md-4">
                <h5 class="text-danger">Section : <b class="text-success"><?php echo $_GET["sec"] ?></b></h5>
            </div>
            <div class="col-md-4">
                <h5 class="text-danger">Month : <b class="text-success"><?php echo $_GET["month"] ?></b></h5>
            </div>
        </div>
        <div class="container_full">
		<div class="row" id="vir">
             <div class="col-md-12 fix">
						<?php 
							if (isset($_GET["mes"])){
								echo "<h5 class='text-danger'>{$_GET["mes"]}</h5>";
							}
						 ?>
					<table class="table table-bordered table-sm"  id="za" >
                        <thead>
							<tr>
								<th>S</th>
								<th>Id</th>
								<th>Roll</th>
								<th scope="col" >Name</th>
								<th>01</th>
								<th>02</th>
								<th>03</th>
								<th>04</th>
								<th>05</th>
								<th>06</th>
								<th>07</th>
								<th>08</th>
								<th>09</th>
								<th>10</th>
								<th>11</th>
								<th>12</th>
								<th>13</th>
								<th>14</th>
								<th>15</th>
								<th>16</th>
								<th>17</th>
								<th>18</th>
								<th>19</th>
								<th>20</th>
								<th>21</th>
								<th>22</th>
								<th>23</th>
								<th>24</th>
								<th>25</th>
								<th>26</th>
								<th>27</th>
								<th>28</th>
								<th>29</th>
								<th>30</th>
								<th>31</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php 
								$s="select * from student where SCLASS='{$_GET["cla"]}' and SSEC='{$_GET["sec"]}' order by CRNO asc ";
								$res=$db->query($s);
								if($res->num_rows>0){
									$i=0;
									while($r=$res->fetch_assoc()){
                                        $i++;
                                        ?>
										
										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $r['RNO'] ?></td>
											<td><?php echo $r['CRNO'] ?></td>
											<td scope="row" class="text-left"><?php echo $r['NAME'] ?></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
										</tr>
										
                            <?php }}?>
                        <tbody>
					</table>
			    </div>
		</div>
		</div>
	</div>
</div>

<!--Student imag , School Logo & griding table end-->
<div class="container text-center" style="margin-top:-12px;">
<a href="others.php" class="text-info"><i class="fas fa-backspace"></i></a>
	
	<i class="fa fa-download" onclick="window.print()" ></i>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>