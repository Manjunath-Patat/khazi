
<?php 
include 'session.php';
 ?>
 <script>
 	function log()
 	{
 		return confirm('Ae you sure to Logout');
 	}
 </script>
<body>

		<div class="container">
								<h1 style="color:blue"><center>KHAZI INDUSTRIES</center></h1>
		 <a href="user.php">
					 	<input type="button" class="btn btn-md" onclick="return log()" style=
					 	"box-shadow:0px 0px 0px 2px red;color:blue;float:right"  value="Logout"></a>
					
<BR> <BR><br>
		<div style="box-shadow:0px 0px 2px 2px darkred;border-radius:5px;background-color:green;" class="form-group">

				<nav class="navbar navbar-default">
					 <div style="padding:4px">
					 	  <button type="button" class="navbar-toggle"  style="float:left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button></div>
					
					<div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
					
						<nav class="link-effect-12">
							<ul class="nav navbar-nav w3_agile_nav">							<li> <a href="add.php"><span> Add customer </span></a></li>
									<li><a href="edit.php"> <span>Edit custemer </span></a></li>
									<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Order <b class="caret"></span></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="confirm.php">confirm delivery</a></li>
										<li><a href="">amount collected</a></li>
										<li><a href="total.php">num of bottle deliveries</a></li>
								</ul>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Day report <b class="caret"> </span></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="day_report.php">Total order and delivery by today</a></li>
										<li><a href="">Day end report</a></li>

									</ul>
								</li>
						
									</ul>
							
						</nav>
					</div>							
						</nav>
					</div>
				</nav>
			</div>
			<div class="container">
			<form method="post">
		<center> <h3 style="color:darkorange">CUSTOMER ORDER LIST:</h3>
			<table style="width:850px">
				<tr>
					<th>CID </th>
					<th>Status</th>
					<th>Customer name </th>
					<th>Address</th>
					<th> landmark </th>
					<th> Mobile </th> 
					<th>Remark </th>
				</tr>

			<div class="clearfix"> </div>
		</div>
 	</div>
<?php

$sql="SELECT *FROM orders order by cid asc";

//$sql="select * from orders";
$result=$conn->query($sql);
 
 if($result->num_rows > 0)
 {

 while($row=$result->fetch_array()){
 $cid= $row["cid"];
 echo "<tr><td>".$row["cid"]."</td>";
 echo "<td>".$row["status"]."</td>";
  $q="SELECT *FROM cdata where id='$cid' ";
  $res=$conn->query($q);
  if ($res->num_rows>0) {
  	while ($row=$res->fetch_array()) {
  		echo "<td>".$row["name"]."</td>";
  		echo "<td>".$row["address"]."</td>";
  		echo "<td>".$row["landmark"]."</td>";
  		echo "<td>".$row["mobile"]."</td>";
  		echo "<td><a href='bottleview.php?id=$cid'>view</a>.</td> </tr>";
  		//echo "<td>Not delivered <a href='bottleview.php'>view<a></td></tr>";
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
</html>
