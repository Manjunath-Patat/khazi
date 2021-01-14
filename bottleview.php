<?php 
include 'session.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$qry="select * from orders where cid='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $cid= $row["id"];
 $oneltr=$row["oneltr"];
 $twoltr=$row["twoltr"];
 $fiveltr=$row["fiveltr"];
 $twentyltr=$row["twentyltr"];

}
}
}
 
?>
 <body>
 	<form method="post">
 	<div class="container">
 		<div class="col-md-4">
 		</div>
 		<div class="col-md-5">
 			
 			<h1 style="color:green"><center>KHAZI INDUSTRIES</center></h1>
 <a href="dash.php">
<input type="button" value="Back" class="btn btn-default" style="box-shadow:0px 0px 0px 1px red;color:red"></a>

 	<center>		
<h3 style="color:brown"> CUSTOMER ORDER LIST</h3>
 	<div style="height:20% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 1px 1PX  black " class="form-group">

 		 <table>
 				
 					
 					<tr>
 						<th>Bottle's</th>
 						<th>Qty's</td> </th>
 					</tr>
<tr>
	<td>1ltr </td>
<td> <input type="text" name="oneltr" class="form-control" style="box-shadow:0px 0px 1px 1px" value="<?php echo($oneltr);?>"> </td>
</tr>
<tr>
	<td>2ltr </td>
	<td> <input type="text" name="twoltr" class="form-control" style="box-shadow:0px 0px 1px 1px" value="<?php echo($twoltr);?>"></td>
</tr>
<tr>
	<td>5ltr </td>
	<td> <input type="text" name="fiveltr" class="form-control" style="box-shadow:0px 0px 1px 1px"value="<?php echo($fiveltr);?>"></td>
</tr>
<tr>
	<td>20ltr </td>
	<td> <input type="text" name="twentyltr" class="form-control" style="box-shadow:0px 0px 1px 1px" value="<?php echo($twentyltr);?>"></td>
</tr>
</table>
<br>
 				
 				<input type="submit" class="btn btn-md" name="delivery" value="Delivery" class="btn btn-default" style="box-shadow:0px 0px 0px 1px blue;color:blue" onclick="return delivery()">

<script>
	function delivery()
	{
		return confirm('Are you sure confirm delivery to Customer'); 
	}
</script>
</center>
</div>
</center>
</div>
</div>
</body>
</html>



<?php
if (isset($_POST['delivery'])) {
	$oneltr=$_POST['oneltr'];
	$twoltr=$_POST['twoltr'];
	$fiveltr=$_POST['fiveltr'];
	$twentyltr=$_POST['twentyltr'];
	$delivery=$_POST['delivery'];

$query="UPDATE orders SET status='$delivery' WHERE cid=$id";
			$result=$conn->query($query);

	$qry="insert into confirm (cid,oneltr,twoltr,fiveltr,twentyltr)values ('$id','$oneltr','$twoltr','$fiveltr','$twentyltr')";
	$res=$conn->query($qry);

		
		if($res==true){
  echo"<script>alert('ordered is deliveried')</script>";
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
