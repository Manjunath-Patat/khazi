<?php
ob_start();
ob_clean();
include "session.php";
?>

<body>
	<form method="POST">
    <div class="container">
        <div class="col-md-4">
        </div>
        <div class="col-md-5">
        	<br>
		            
		<a href="add.php">       <input type="button" class="btn btn-md" style="padding:4px; box-shadow:0px 0px 0px 1px blue;color:red" value="Back">
		</a>  
		
					<div class="text-center">
								<h2 style="color:orange"> ADD DEPOSITE  </h2>  
			 
						</div>

			 	<div style="height:20% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 2PX 2PX  black " class="form-group">
                  <div class="row"> 
                  <div class="col-md-5"> 
			 	<label>Deposite Amt: </label> 
			 	</div>
			 	<div class="col-md-7">
			 	<input type="number" name="d_amt" id="Enter Amount" placeholder="Enter Deposite Amount" class="form-control" style="box-shadow: 0px 0px 0px 1px black"  >
			 <br>
			</div></div>
			<div class="text-center">
			<button type="submit" class="btn btn-default btn-md" value="ADD" name="submit"  style="box-shadow:0px 0px 0px 1px green;color:green"><b> ADD </b> </button> 
			 </div>
		</div>
</body>





<?php
$conn=new mysqli("localhost","root","","terox");
$lastid=$_SESSION['lastid'];
if (isset($_POST['submit'])) {
	$d_amt=$_POST['d_amt'];
	
	if(empty ($d_amt))
	{
		echo"<script>alert('enter deposite Amount')</script>";
		exit();
	}

	else
	{
		$query="update cdata set d_amt='$d_amt'where id='$lastid'" ;
		
		$result=$conn->query($query);
		if($result==true){
			//echo"<script>alert('data inserted successfully')</script>";
		//exit();

	header("location:bottle.php");		
		}else{
			echo"<script>alert('failed..................')</script>";
		exit();

				}
	}

}
?>