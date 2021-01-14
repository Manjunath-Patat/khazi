<?php 
include "session.php";
?>
<body>

<div class="container">
			<form method="post">
		<h1 style="color:blue"><center>KHAZI INDUSTRIES</center></h1>
		 <a href="dash.php">
					 	<input type="button" class="btn btn-md" onclick="return log()" style=
					 	"box-shadow:0px 0px 0px 2px red;color:blue;float:left"  value="Back"></a>
					
<BR> <BR><br>
<center>

		<h2  style="color:	darkslateblue"> CONFIRMED ORDERED LIST </h2>
		<br> 
		<table style="width:700px">
				<tr>
					<th>CID </th>
					<th> Date of delivery </th> 
					<th>Customer name </th>
					<th>Address</th>
					<th> landmark </th>
					<th> Mobile </th>
					
				</tr>

			<div class="clearfix"> </div>
		</div>
 	</div>
<?php

$sql="SELECT * FROM confirm order by date desc";

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
  		echo "<td>".$row["address"]."</td>";
  		echo "<td>".$row["landmark"]."</td>";
  		echo "<td>".$row["mobile"]."</td>";
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
