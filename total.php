<?php
include 'session.php';
?>
 <body>
 	<form method="post">
 	<div class="container">
<br>

 <a href="dash.php">
<input type="button" value="Back" class="btn btn-default" style="box-shadow:0px 0px 0px 1px red;color:red;float:left;"></a>

 		<div class="col-md-2">
 		</div>
 		<div class="col-md-6">
 			
 			<h1 style="color:green"><center>KHAZI INDUSTRIES</center></h1>
  	<center>		
<h2 style="color:brown"> Number Of Bottle Delivery</h2>
 		<br> 
		<table style="width:700px">
				<tr>
					<th>CID </th>
					<th> Date </th> 
					<th>Customer name </th>
					<th>One ltr</th>
					<th> Two ltr </th>
					<th> Five ltr </th>
					<th> Twenty ltr </th>
				</tr>

			<div class="clearfix"> </div>
		</div>
 	</div>	

 	<?php

$sql="SELECT *FROM confirm order by date desc";

//$sql="select * from orders";
$result=$conn->query($sql);
 
 if($result->num_rows > 0)
 {

 while($row=$result->fetch_array()){
 $cid= $row["cid"];
 echo "<tr><td>".$row["cid"]."</td>";
 echo "<td>".$row["date"]."</td>";
  $q="SELECT * FROM cdata where id='$cid' ";
  $res=$conn->query($q);
  if ($res->num_rows>0) {
  	while ($row=$res->fetch_array()) {
  		echo "<td>".$row["name"]."</td>";
$qr="select * from orders where cid='$cid'";
  $res=$conn->query($qr);
  if ($res->num_rows>0) {
  	while ($row=$res->fetch_array()) {
  		echo "<td>".$row["oneltr"]."</td>";
  		echo "<td>".$row["twoltr"]."</td>";
  		echo "<td>".$row["fiveltr"]."</td>";
  		echo "<td>".$row["twentyltr"]."</td>";
  	
  	}
  }

}
}
}
}
?>

</table>
</form>
</div>
</div>
</div>
</body>
