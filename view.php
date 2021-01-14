<?php
include 'session.php';
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  

th {

    padding:10px; 
    border-radius:3px;
    text-align:center;
   }
   table
   {
   	border: collapse;
   	width:80%;
   	color:black;
   	text-align:center;
   }
   table
   {
   	border:1px;
   	column-width:100%;
   }
</style>

</head>
<body>
	<div class="container">
		<h1 style="color:yellow"><center>KAZI INDUSTRIES</center></h1>
    <form method="post">
			<table>
				<tr>
					<th>ID </th>
					<th>Customer name </th>
					<th>Address</th>
          <th> Landmark</th> 
					<th> 1Ltr</th>
					<th>2Ltr</th>
					<th>5Ltr</th>
					<th>20Ltr</th>
					<th>Remark  </th>
          <th>Status </th>
				</tr>
<div class="header-nav">
				<nav class="navbar navbar-info">
					 <div class="navbar-header" style="padding: 10px">
<div class="pull-left">
<ul class="nav navbar-nav navbar-left">


      <button type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px green;color:green" name="back">
<a href="dash.php">Back </a> </button> </ul></div>
<div class="pull-right">
<ul class="nav navbar-nav navbar-right">
<button type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px red;color:red" name="back">
<a href="index.php">Logout </a> </button></ul>
<br></div>
            </div>
            </nav>
        </div>


<?php

$sql="select * from bottle";
$result=$conn->query($sql);
 
 if($result-> num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["$name"]."</td>
  <td>".$row["$address"]."</td>
  <td>".$row["$landmark"]."</td>
  <td>".$row["$oneltr"]."</td>
  <td>".$row["$twoltr"]."</td>
  <td>".$row["$fiveltr"]."</td>
 <td>".$row["$twentyltr"]."</td>
 <td><a href='status.php?id=$id'>click</a></td>
  <td><a href='remark.php?id=$id'>click</a></td>";
}
echo "</table>";
}
else{
  echo"o result";
}
$conn->close();
?>
</table>
</form>
</div>
</body>
</html>