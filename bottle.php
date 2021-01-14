<?php
ob_start();
ob_clean();
include 'session.php'; 
?>
<body>
	<div class="container">

 <form method="POST">
    <div class="col-md-4">
    	</div>

    	<div class="col-md-4">
    
    		<br><br> 
 <a href="dash.php"> <input type="button" class="btn btn-md" style="padding:4px; box-shadow:0px 0px 0px 1px blue;color:red" value="Back">
</a>
		<br><br><br> 
		<div class="text-center">
			<br>
			<h2 style="color:orange">ADD-BOTTLES  </h2>  <br>

			<div style="height:50% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 2px 2px  black " class="form-group"> 
	<table border="solid-black">
	
<div class="row">
	<div class="col-md-4">
				<tr>
			<th>Bottle's</th> </div>
			<div class="col-md-8">
			<th>Qty</th>
</div>
</div>
</tr>
<tr>
	<td>1ltr </td>
	<td> <input type="number" name="oneltr" class="form-control" style="box-shadow:0px 0px 1px 1px"> </td>
</tr>
<tr>
	<td>2ltr </td>
	<td> <input type="number" name="twoltr" class="form-control" style="box-shadow:0px 0px 1px 1px"></td>
</tr>
<tr>
	<td>5ltr </td>
	<td> <input type="number" name="fiveltr" class="form-control" style="box-shadow:0px 0px 1px 1px"></td>
</tr>
<tr>
	<td>20ltr </td>
	<td> <input type="number" name="twentyltr" class="form-control" style="box-shadow:0px 0px 1px 1px"></td>
</tr>
</table>
<br>
		<button type="submit" class="btn btn-default btn-md" value="register" name="submit"  style="box-shadow:0px 0px 0px 1px green;color:green"><b> submit </b> </button> 
			 	      	         	 &nbsp;&nbsp;
		     <button type="reset" class="btn btn-default btn-md" value="reset" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red"><b> reset </b>   </button>
	<!--<th> 1 ltr </th>
			<th> 2 ltr </th>
			<th> 5 ltr</th>
			<th>10 ltr </th>
			<th>20 ltr</th>
		</tr>-->
	</div>
</div>
</form>
</div>
</div>
</body>
</html>






<?php
//$conn=new mysqli("localhost","root","","terox");
if (isset($_POST['submit'])) {
	$oneltr=$_POST['oneltr'];
	$twoltr=$_POST['twoltr'];
	$fiveltr=$_POST['fiveltr'];
	$twentyltr=$_POST['twentyltr'];
	
	$lastid=$_SESSION['lastid'];

	
		$query="insert into bottle(cid, oneltr,twoltr,fiveltr,twentyltr)values('$lastid','$oneltr','$twoltr','$fiveltr','$twentyltr')";
		$result=$conn->query($query);
		if($result==true){
		echo"<script>alert('order successfully')</script>";
		?>
      <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/project/dash.php"> 
      <?php
	}
	else
	{
			echo"<script>alert('failed..................')</script>";
		exit();

				}
	}


?>