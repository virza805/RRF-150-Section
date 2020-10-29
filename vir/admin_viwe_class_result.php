
<?php 
include 'lib/Database.php';
	include "database.php";
	session_start();

	if(isset($_GET["viewt"])){
		$sql="select * from smark where CLASS='{$_GET["cla"]}' and TERM='{$_GET["etype"]}' ";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			//header("location:sbg_mark.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$class=$rows["CLASS"];
			$etype=$_GET["etype"];

		}
	}


 ?>
<?php include "admin_header.php"; ?>

<!-- Frome -->
<div class="container">
  <h2 class="text-center">OOP = Object Oraent Poparti</h2>
  <h5 class="text-center">crud= Creat Read Update Delet</h5>
  <p class="text-center"><a href="view_class_result.php">Back</a></p> 

<h3>Class : <b class="text-success"><?php echo $_GET["cla"]; ?></b> Exam : <b class="text-success"><?php echo $_GET["etype"]; ?> </b></h3>;

    
  <table border="1px" class="table table-striped">
    <thead>
    	<tr>
    		<th class="text-center" colspan="4">Student info</th>
    		<th class="text-center" colspan="2">Bangla</th>
    		<th class="text-center" colspan="2">English</th>
    		<th class="text-center" colspan="2">Math</th>
    		<th class="text-center" colspan="2">Science</th>
    		<th class="text-center" colspan="2">S. Science</th>
    		<th class="text-center" colspan="2">Religion</th>
    		<th class="text-center" colspan="2">InputMark</th>
    		<th>ICI</th>
    		<th class="text-center" colspan="2"></th>
    	</tr>
      <tr>
        
		<th class="p-2">Id</th>
		<th class="p-2">R.No</th>
		<th class="p-2">Name</th>
		<th class="text-center">IMG</th>
		<th class="p-2">BTU</th>
		<th class="p-2">BAN</th>
		<th class="p-2">ETU</th>
		<th class="p-2">ENG</th>
		<th class="p-2">MTU</th>
		<th class="p-2">MATH</th>
		<th class="p-2">STU</th>
		<th class="p-2">SCI</th>
		<th class="p-2">SOTU</th>
		<th class="p-2">SOC</th>
		<th class="p-2">RTU</th>
		<th class="p-2">REL</th>
		<th class="p-2">TU</th>
		<th class="p-2">Sem.</th>
		<th class="p-2">ICT</th>
        <th class="text-center" colspan="2">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM smark WHERE SMID = '$deleteid' ";
        $delete = $db->query($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>
<?php 

$query = " SELECT * FROM smark  where CLASS='{$_GET["cla"]}' and TERM='{$_GET["etype"]}' ";
$view = $db->query($query);
if($view){
  while($result = $view->fetch_assoc()) {
    
 ?>
      <tr>
        <td><?php echo $result['SMID'] ?></td>
        <td><?php echo $result['REGNO'] ?></td>
        <td><?php echo $result['NAME'] ?></td>
        <td><img src='<?php echo $result['IMG'] ?>' alt='S. Img' height='70' width='70' ></td>
        
        <td><?php echo $result['BTU'] ?></td>
        <td><?php echo $result['BAN'] ?></td>
        <td><?php echo $result['ETU'] ?></td>
        <td><?php echo $result['ENG'] ?></td>
        <td><?php echo $result['MTU'] ?></td>
        <td><?php echo $result['MAT'] ?></td>
        <td><?php echo $result['STU'] ?></td>
        <td><?php echo $result['SCI'] ?></td>
        <td><?php echo $result['SOTU'] ?></td>
        <td><?php echo $result['SOC'] ?></td>
        <td><?php echo $result['RTU'] ?></td>
        <td><?php echo $result['REL'] ?></td>

        <td><a href="admin_edit_tu_mark.php?editid=<?php echo $result['SMID'] ?>" target='_blank' class='text-success '><i class='fas fa-pencil-alt'></i></a></td>
        <td><a href="admin_edit_semester_mark.php?editid=<?php echo $result['SMID'] ?>" target='_blank' class='text-success '><i class='fas fa-graduation-cap'></i></a></td>

        <td><?php echo $result['ICT'] ?></td>

        <td> <!--admin_viwe_class_result.php  admin_edit_viwe_result.php-->
          <a href="admin_viwe_class_result.php?delid=<?php echo $result['SMID'] ?>" target='_blank' class='btn btn-danger '><i class="fas fa-trash-alt"></i></a>
        </td>

        <td>
          <a href="admin_edit_viwe_result.php?editid=<?php echo $result['SMID'] ?>" target='_blank' class='btn btn-success '>Edit</a>
        </td>
        
      </tr>

<?php }}?>
    </tbody>
    
  </table>

</div>
<br>

	<link rel="stylesheet" href="bootstrap4/jquery-3.3.1.min.js">
	<link rel="stylesheet" href="bootstrap4/js/bootstrap.min.js">
</body>
</html>