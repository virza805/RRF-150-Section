
<?php 
	include "database.php"; 
	session_start();
	if(!isset($_SESSION["TID"])){
		echo "<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
	}
	if(isset($_GET["viewt"])){
		//$sql="select * from student where SCLASS='{$_GET["cla"]}' and SSEC='{$_GET["sec"]}' ";
		$sql="select * from smark where REGNO='{$_GET["rno"]}' and TERM='{$_GET["etype"]}'";
		$res=$db->query($sql);
		if ($res->num_rows<=0) {
			header("location:view_result.php?err=Invalid Register no..");
		}else{
			$rows=$res->fetch_assoc();
			$rno=$rows["REGNO"];
			$etype=$_GET["etype"];
		}
	}

	
 ?> 

<?php include "result_hader.php"; ?>
<!--end Result hader Section from before result -->

<!-- Banar Section Off loge_bk bg-light  d_back -->
<div class="container text-center text-secondary">
	<h5> Result of <?php echo $etype;?> </h5>
</div>

<div class="container_full  d_back " style ='margin-top: 0px;'>

	<div class="container text-center">
		<div class="row" id="vir">
	<!-- Side bar Section On -->
			
	<!-- Side bar Section end-->	
	<!-- Result medial Or main Result Section Start / On -->
	
		<?php include "obj_wri_result.php"; ?>	
<!-- point.php er echo baddilai oporar point gola chola jaba-->
	<!-- Result medial Or main Result Section end-->		

		</div>
	</div>
</div>
<br>
<!-- Footer Section On -->
<?php include "result_footer.php"; ?>

