<!--Student Comments  Detals on after result/number end-->
	<div class="container" style=" margin-bottom: 0px; margin-top: -12px; ">
  <div class="row">
    <div class="col-sm-3">
 		<table class="table-bordered" id="za" style="width:100%">
		    
		    <tbody>
		      <tr>
		      	<th>Section Position</th>
		        <td></td>
		      </tr>
		      <tr>
		      	<th>GPA(Out of 5)</th>
		        <td> <?php echo substr($g_point,0,4); ?></td>
		        
		      </tr>
		      <tr>
		      	<th>Failed Subjects</th>
		        <td> </td>
		      </tr>
		      <tr>
		      	<th>Working Days</th>
		        <td></td>
		      </tr>
		      <tr>
		      	<th>Total Present</th>
		        <td></td>
		        
		      </tr>

		    </tbody>
		</table>
    </div>
    <div class="col-sm-3">
  <table class="table-bordered"  id="za"  style="width:100%">
		    <thead>
		      <tr>
		      	<th>. .</th>
		        <th>Moral & Behavior</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>  </td>
		        <td>Best</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Better</td>
		        
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Good</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Need Improvement</td>
		       
		      </tr>
		     
		    </tbody>
		  </table>
     
    </div>
    <div class="col-sm-3">
 		 <table class="table-bordered" id="za" style="width:100%">
		    <thead>
		      <tr>
		      	<th>. .</th>
		        <th>Co-Curricular Activities</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>  </td>
		        <td>Sports</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Cultural Function</td>
		        
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Scout/BNCC</td>
		       
		      </tr>
		      <tr>
		        <td>  </td>
		        <td>Math Olympiad</td>
		       
		      </tr>
		     
		    </tbody>
		  </table>    
     
    </div>
    <div class="col-sm-3">
      
	 <div class="float-right"  style="width:90%">
	 	<!-- <img src="student/tanvir.png" class="img-thumbnail float-right mt-2" alt="Trulli" width="200" height="200"> -->
		 <?php include "qr.php"; ?>
	 </div>
    </div>
  </div>
</div>
<!--Student Comments Detals end-->
<div class="container" style="margin-top:-60px;  ">
	<div class="row">
		<div class="col-sm-9">
			<div style="border: 1px solid black;" class="table-bordered p-3">
			  <h4>Comments</h4> 
			  <p><?php include "result_comment.php"; ?></p> 
			</div>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<center>	
			<img src="img/signisar.png" alt="">
			</center>
			<center style="border-top: 4px dotted blue; " >Headmaster</center>	
		</div>
	</div>
</div>

<div class="container text-center" style="margin-top:-12px;">
<a href="sbg_view_mark.php" class="text-info"><i class="fas fa-backspace"></i></a>
	<!-- <input type="button" onclick="window.print()" value="Print Now" class="btn btn-info mt-2" > -->
	<i class="fa fa-download" onclick="window.print()" ></i>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
</body>
</html>