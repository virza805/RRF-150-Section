
<?php 
	include "database.php";
	session_start();
	
 ?>
<?php include "admin_header.php"; ?>
<!--end menu Section -->

<!-- Banar Section Off loge_bk bg-light  d_back -->

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
	<?php include "sidebar.php"; ?>		
			
	<!-- Side bar Section end-->	
			<div class="col-md-9">
				<h2 class="text-light">Welcome </h2>
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">View Exam Time Table Details</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="get" action="view_exam.php"><br>
							
							
							  <br>
							<select type="text" name="etype" " required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ETYPE) from exam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ETYPE"]}'>{$ro["ETYPE"]}</option>";
								}
							}

							 ?>
							 </select> <br>

							
							
							
							<button type="submit" class="btn btn-success" name="viewt">Exam Details </button> <br><br>
						</form>  <br>
						
								
					</div>
				</div>
<!-- End Exam Details Section --->
<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">Set Exam Comments</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
  					 <?php
							require_once('database.php');

							if(isset($_POST['submit'])){

									$et = $_POST['ety'];
								
									$ap = $_POST['ap'];
									$a = $_POST['a'];
									$as = $_POST['as'];
									
									$b = $_POST['b'];
									$c = $_POST['c'];
									$d = $_POST['d'];
									$f = $_POST['f'];
									
							$rlt = mysqli_query($db," INSERT INTO comment (ETYPE,AA,A,AAA,B,C,D,F) VALUES ('$et','$ap','$a','$as','$b','$c','$d','$f')");
							if($rlt){
								echo "<h4 class='m-2 p-2 text-light bg-success'>Comment Insert Success</h4>";
							}else{
							echo "<h4 class='p-2 text-light bg-danger'>Comment Insert Failed</h4>";
							}

								
							
							}

						 ?>



				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><br>
							
						<table border="1px" class="table table-striped">
						
						<tr>
							<th>Exam Name</th>
							<td><select type="text" name="ety" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ETYPE) from exam ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ETYPE"]}'>{$ro["ETYPE"]}</option>";
								}
							}

							 ?>
							 </select></td>
						</tr>
						<tr>
							<th>A+</th>
							<td><input type="text" name="ap" placeholder="Enter A+ Comments"  required class="input form-control"> </td>
						</tr>
						<tr>
							<th>A</th>
							<td><input type="text" name="a" placeholder="Enter A Comments" class="input form-control"></td>
						</tr>
						<tr>
							<th>A-</th>
							<td><input type="text" name="as" placeholder="Enter A- Comments" class="input form-control"></td>
						</tr>
						<tr>
							<th>B</th>
							<td><input type="text" name="b" placeholder="Enter B Comments" class="input form-control"></td>
						</tr>
						<tr>
							<th>C</th>
							<td><input type="text" name="c" placeholder="Enter C Gread Comments" class="input form-control"></td>
						</tr>
						<tr>
							<th>D</th>
							<td><input type="text" name="d" placeholder="Enter D Gread Comments" class="input form-control"></td>
						</tr>
						<tr>
							<th>F</th>
							<td><input type="text" name="f" placeholder="Enter F Gread Comments" class="input form-control"></td>
						</tr>
					</table>
							
							  <br>
							 <br>
							<button type="submit" class="btn btn-success" name="submit">Set Comment</button> <br><br>
			</form>  <br>
						
								
					</div>
				</div>

<!-- End Exam Comments Input Section --->
<!-- On Exam Comments Section --->
				<div class="row">
					<div class="col-md-12 fix"> 
						<h4><b class="text-info">View Exam Comments Details</b></h4>
						
						  <?php 
						  	if(isset($_GET["err"])){
						  		echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
						  	}
						   ?>
						<form  role="form" method="post" action=""><br>
							
							
							  <br>
							<select type="text" name="etype" required class="input form-control"> <br>
							<?php  
							$sl="select DISTINCT(ETYPE) from comment ";
							$r=$db->query($sl);
							if($r->num_rows>0){
								echo "<option value=''>Type sleet Term</option>";
								while($ro=$r->fetch_assoc()){
									echo "<option value='{$ro["ETYPE"]}'>{$ro["ETYPE"]}</option>";
								}
							}

							 ?>
							 </select> <br>
							<button type="submit" class="btn btn-success" name="viewt">View Comment</button> <br><br>
						</form>  <br>
						
								
					</div>
				</div>
				
<!-- Frome -->
<div class="container">
  <h3><b class="text-success"><?php echo $_POST["etype"]; ?> </b> Exam Comments</h3>
  
  <table border="1px" class="table table-striped">
    <thead>
    	
      <tr>
        
		<th class="p-2">Id</th>
		
		<th class="p-2">Exam Name</th>
		<th class="p-2">A+</th>
		<th class="p-2">A</th>
		<th class="p-2">A-</th>
		<th class="p-2">B</th>
		<th class="p-2">C</th>
		<th class="p-2">D</th>
		<th class="p-2">F</th>
        <th class="text-center" colspan="2">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM comment WHERE ECID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>
<?php 
if(isset($_POST["viewt"])){
$query = " SELECT * FROM comment  where ETYPE='{$_POST["etype"]}' ";
$view = $db->query($query);
if($view){
  while($result = $view->fetch_assoc()) {
    
 ?>
      <tr>
        <td><?php echo $result['ECID'] ?></td>
        <td><?php echo $result['ETYPE'] ?></td>
        <td><?php echo $result['AA'] ?></td>
       
        <td><?php echo $result['A'] ?></td>
        <td><?php echo $result['AAA'] ?></td>
        <td><?php echo $result['B'] ?></td>
        <td><?php echo $result['C'] ?></td>
		<td><?php echo $result['D'] ?></td>
		<td><?php echo $result['F'] ?></td>
		
        <td> <!--admin_viwe_class_result.php  admin_edit_viwe_result.php-->
          <a href="select_view_exam.php?delid=<?php echo $result['ECID'] ?>"  class='btn btn-danger '>Delat</a>
        </td>

        <td>
          <a href="comment.php?editid=<?php echo $result['ECID'] ?>"  class='btn btn-success '>Edit</a>
        </td>
        
      </tr>

<?php }}}?>
    </tbody>
    
  </table>

</div>




			</div>
		</div>
		
	</div>
</div>

<!-- Footer Section On -->
<?php include "footer.php"; ?>