<?php
ob_clean();
ob_start();
include "session.php";
?>


 <body>
 	<form method="POST">
    <div class="col-md-4">
	</div>
	<div class="col-md-5 ">
		<b>
			<center>
				<?php
echo "Date " . date("d/m/Y") . "<br>";
?> </center> </b>
		<h1 style="color:blue"><center>KHAZI INDUSTRIES</center></h1>
<br>
	
	

<a href="dash.php">    <input type="button" class="btn btn-md" style="box-shadow:0px 0px 1px black;color:green;float:left" value="Back">
</a> <br>	

           			<h2 style="color:orange;text-align:center;"> ADD NEW CUSTOMER  </h2>  
			 	<div style="padding:25px; border-radius:10px;box-shadow:0px 0px 1PX 2PX  black ">
                  <div class="form-group text-center">
                  <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Customer Name: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="name" id="First name" placeholder="Enter Your Name" class="form-control"  >
			 <br>
			 </div>
			</div>
			 		<div class="row">
			 		<div class="col-md-4">
			 	<label>Address: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="address" placeholder="Enter Address" class="form-control" >
			 	<br>
			 </div>
			</div>

			<div class="row">
			 		<div class="col-md-4">
			 	<label>Landmark: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="landmark" placeholder="Enter Landmark" class="form-control" >
			 	<br>
			 </div>
			</div>

	
	
		    <div class="row">
		    	<div class="col-md-4">
			 	<label>mobile no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="mobile" placeholder="Enter mobile no" class="form-control" >
			 	<br>
			 </DIV>
			</div>

					    <div class="row">
		    	<div class="col-md-4">
			 	<label>Alternate ph no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="a_mobile" placeholder="Enter mobile no" class="form-control" >
			 	<br>
			 </DIV>
			</div>

			 	<div class="row">
			 		<div class="col-md-4">
			 	<label>Picode: </label> 
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="pincode" placeholder="Enter your Pincode" class="form-control" >
			 	<br>
			 </div>
			</div>
			  <button type="submit" class="btn btn-default btn-md" value="register" name="submit"  style="box-shadow:0px 0px 0px 1px green;color:green;float:center;"><b> submit </b> </button> &nbsp;
			 	      	         	 
		     <button type="reset" class="btn btn-default btn-md" value="reset" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red;float:center;"><b> reset </b>   </button>
		    </div>
		</div>

</div>
</form>
</body>





<?php
//$conn=new mysqli("localhost","root","","terox");
if (isset($_POST['submit'])) {
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
		$query="insert into cdata(name,address,landmark,mobile,a_mobile,pincode)values('$name','$address',
		'$landmark','$mobile','$a_mobile','$pincode')";
		$result=$conn->query($query);
		if($result==true){
		$_SESSION['lastid']= $conn->insert_id;
		header("location:amount.php");
		}
		else
		{
			echo"<script>alert('failed..................')</script>";
		exit();

				}
	}

}
?>