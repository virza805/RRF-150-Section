<?php 
	include "database.php";
	session_start();

	if(!isset($_SESSION["AID"])) {
		echo"<script> window.open('index.php?mes=Access Denied..','_self');</script>";
	}
 ?>

<?php include "admin_header.php"; ?>
<!-- Slider images Off -->

<div class="container_full d_back" style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->		
			<?php include "sidebar.php"; ?>
	<!-- Side bar Section end-->	
			<div class="col-md-9">
			<?php 
			$sql="SELECT * FROM admin WHERE AID={$_SESSION["AID"]} ";
			$res=$db->query($sql);
		
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
			
			?>
				<h2>Welcome <?php echo $row['ANAME'] ?> {Admin}</h2>
				<div class="row">
					<div class="col-4 fix"> 
					<!-- <?php
							// require_once('database.php');

							// if(isset($_POST['submit'])){
							// 	$target="staff/";
							// 	$target_file=$target.basename($_FILES["img"] ["name"]);

							// 	if(move_uploaded_file($_FILES["img"] ['tmp_name'] , $target_file)){
							// 		$sql="update admin set IMG='{$target_file}' where AID={$_SESSION["AID"]}";
							// 		$db->query($sql);
							// 		echo "<h4 class='btn btn-success'>Insert Success..</h4>";
							// 	}
							// }

						 ?>

						<form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<table>
							<tr>
							<td>
							<input type="file" name="img" required class="input form-control"> 
							</td>
							<td>
							<button type="submit" class="btn btn-success" name="submit">Add Img </button>
							</td>
							</tr>
							</table>
						</form> -->
						
						<img colspan="2" src="<?php echo $row['IMG'] ?>" height="150" width="150" alt="Upload Your Image">
						
					</div>
			<?php }?>

			
						

					<div class="col-8">
					<h4><b>School Management System Information</b></h4>
					<p>
						This school software has a powerful online communitly to bring parents , teachers and students on a common interactive platform , It is a paperless office outomation solution for today's modern schools. The School Management System Provides the facility to carry out all day toa day activities of the school.....
						</p>
					</div>
					
				</div>
				<div>
				<center style="border-top: 4px dotted blue; " ><h3><b>Contact Massage</b></h3></center>
<?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM contact WHERE id = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>

<table class="table table-striped table-dark">
  <thead>
    <tr class='text-success'>
      <th scope="col">Time</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Email</th>
      <th scope="col">Massage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  		<?php 
			$sql="SELECT * FROM contact  ";
			$res=$db->query($sql);
		
			if($res->num_rows>0){
				while($row=$res->fetch_assoc()){;	
		?>
    <tr>
      <th scope="row"><?php echo $row['tim'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['subject'] ?><a href="tel:<?php $row['subject'] ?>"><i class="fa fa-phone"></i></a></td>
      <td><?php echo $row['email'] ?><a href="mailto:<?php $row['email'] ?>?subject=this is a test"><i class="fa fa-envelope"></i></a></td>
      <td><?php echo $row['message'] ?></td>
	  
      <td><a href='admin_home.php?delid=<?php echo $row['id'] ?>' class='btn btn-danger'><i class="fas fa-trash-alt"></i></a></td>
    </tr>
		<?php }}?>  
  </tbody>
</table>		

				</div>
			</div>
		</div>
		
	</div>
</div>
<!-- Login Section Off -->
<!-- Footer Section On -->
<?php include "footer.php"; ?>