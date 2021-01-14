<?php
include 'session.php';
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

		<h3 style="color:darkslateblue"> Daily Report </h3>
		<br> 
		<table style="width:700px">
				<tr>
					<th>CID </th>
					<th> Date</th> 
					<th>Status</th>
					<th>Customer name </th>
					<th>Address</th>
					<th> landmark </th>
					<th> Mobile </th>
					
 					
				</tr>

			<div class="clearfix"> </div>
		</div>
 	</div>


<?php

$sql="SELECT *FROM orders WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW()) AND DAY(date) = DAY(NOW())";
//$sql="select * from orders";
$result=$conn->query($sql);
 
 if($result->num_rows > 0)
 {

 while($row=$result->fetch_array()){
 $cid= $row["cid"];
 echo "<tr><td>".$row["cid"]."</td>";
 echo "<td>".$row["date"]."</td>";
 echo "<td>".$row["status"]."</td>";
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
