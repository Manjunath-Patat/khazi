<?php 
ob_clean();
ob_start();
include 'session.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$qry="select * from cdata where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $name=$row["name"];
 $address=$row["address"];
 $landmark=$row["landmark"];
 $mobile=$row["mobile"];
 $a_mobile=$row["a_mobile"];
 $pincode=$row["pincode"];
 $date=$row["date"];
}
}
}
 ?>

 	<form method="POST">
    <div class="col-md-4">
	</div>

	<div class="col-md-5">
		<h1 style="color:blue"><center>KHAZI INDUSTRIES</center></h1>
					 
		
		 <a href="edit.php">     <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px green;color:green;float:left" value="Back">
	</a> <BR>
	
			<h2 style="color:red"> <center> Edit Customer Data</center>  </h2>  <br>
			 
			 	<div style="padding:25px; border-radius:15px;box-shadow:0px 0px 1px 1PX  black " class="form-group">
                  <div class="form-group text-center">
                  <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Customer Name: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="name" id="First name" value="<?php echo($name);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>
			 		<div class="row">
			 		<div class="col-md-4">
			 	<label>Address: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="address" value="<?php echo($address);?>" placeholder="Enter Address" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>


				<div class="row">
			 		<div class="col-md-4">
			 	<label>Landmark: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="landmark" value="<?php echo($landmark);?>" placeholder="Enter landmark" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>

		    <div class="row">
		    	<div class="col-md-4">
			 	<label>mobile no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="mobile" value="<?php echo($mobile);?>" placeholder="Enter mobile no" class="form-control"style="box-shadow:0px 0px 1px 1px" >
			 	<br>
			 </DIV>
			</div>

					    <div class="row">
		    	<div class="col-md-4">
			 	<label>Alternate ph no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="a_mobile" value="<?php echo($a_mobile);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </DIV>
			</div>

			 	<div class="row">
			 		<div class="col-md-4">
			 	<label>Picode: </label> 
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="pincode" placeholder="Enter your Pincode" value="<?php echo($pincode);?>" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>
								    <div class="row">
		    	<div class="col-md-4">
			 	<label>Date Of Add: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="date" value="<?php echo($date);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px" 
			 	disabled>
			 	<br>
			 </DIV>
			</div>

			  <button type="submit" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:green"  value="update" name="update"> update</button> 
			 	      
		    </div>
		</div>

</div>
</div>
</form>

<?php
if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$landmark=$_POST['landmark'];
	$mobile=$_POST['mobile'];
	$a_mobile=$_POST['a_mobile'];
	$pincode=$_POST['pincode'];
	
	if(empty($name&&$address&&$landmark&&$mobile&&$a_mobile&&$pincode))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}

	else
	{
		$query="UPDATE cdata SET name='$name',address='$address',landmark='$landmark',mobile='$mobile',a_mobile='$a_mobile',pincode='$pincode' WHERE id=$id";
		$result=$conn->query($query);
		if($result==true){
			echo"<script>alert('data updated successfully')</script>";
			header("Refresh:0");
		exit();

		}else{
			echo"<script>alert('failed..................')</script>";
		exit();

				}
	}

}
?>