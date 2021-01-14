<?php
include 'session.php';
?>
<body>
  <form method="post">
	<div class="container">
		<h1 style="color:darkorange"><center>KHAZI INDUSTRIES</center></h1>
      
      
<div class="header-nav">
        <nav class="navbar navbar-info">
           
       <a href="dash.php">  <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green;float:left;" value="Back">
    </a>
                  </div>
                  </nav>
       <h5 style="color:blue"><b> SEARCH: </b> </h5>           
      <input type="number" name="cid" class="btn btn-sm" style="box-shadow:0px 0px 1px 1px black" placeholder="Customer id"> <br>
              <H5> Or </H5> 
          
              <input type="text" name="cname" class="btn" style="box-shadow:0px 0px 1px 1px black" placeholder="customer name"> <br>
             
             <h5> Or </h5> 
          
              <input type="number" name="cmobile" class="btn" style="box-shadow:0px 0px 1px 1px black" placeholder="customer mobile no"> <br> <br>
              <input type="submit" class="btn btn-default btn-md" style="box-shadow:0px 0px 0px 1px blue;color:brown " value="search" name="search">
              <br><br><center>
          
    
<?php
//$conn=mysqli_connect("localhost","root","","terox");
if(isset($_POST['search']))
{
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  $cmobile=$_POST['cmobile'];
?>
<table>
        <tr>
          <th >ID </th>
          <th> Date of Add </th>
          <th>Customer name </th>
          <th>Address</th>
          <th>landmark </th> 
          <th> Mobile</th>
          <th>Alternate mob </th>
          <th>Pincode </th>  
          <th>Action  </th>
        </tr>

<?php

  
if ($cid==''&& $cname=='' && $cmobile=='')

  {
    echo"<script>alert('enter any values')</script>";
    exit();
 }


 else if(!$cid==''){
  $sql="select * from cdata where id='$cid'" ;
  $result=$conn->query($sql);
   
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["date"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
  <td>".$row["landmark"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["a_mobile"]."</td>
  <td>".$row["pincode"]."</td>
  <td> <a href='update.php?id=$id'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px blue' value='Edit'></a>&nbsp;
  <a href='delete.php?id=$id' ><input type='button'onclick='return checkdelete()' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Delete'>
  </a> </td>";
}
echo "</table>";

}

else{
  echo"NO customer";
}
 }
  
  elseif(!$cname==''){
  $sql="select * from cdata where name='$cname'" ;
  $result=$conn->query($sql);
 
 if($result-> num_rows > 0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["date"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
  <td>".$row["landmark"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["a_mobile"]."</td>
  <td>".$row["pincode"]."</td>
 <td> <a href='update.php?id=$id'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px blue' value='Edit'></a>&nbsp;
  <a href='delete.php?id=$id' onclick='return checkdelete()'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Delete'>
  </a> </td>";
}
echo "</table>";

}

else{
  echo"NO customer";
}
}  
  elseif(!$cmobile==''){
  $sql="select * from cdata where mobile='$cmobile'" ;
  $result=$conn->query($sql);
  if($result-> num_rows > 0){
      while($row=$result->fetch_array()){
 $id= $row["id"];
  echo "<tr><td>".$row["id"]."</td>
<td>".$row["date"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
  <td>".$row["landmark"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["a_mobile"]."</td>
  <td>".$row["pincode"]."</td>
 <td> <a href='update.php?id=$id'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px blue' value='Edit'></a>&nbsp;
  <a href='delete.php?id=$id' onclick='return checkdelete()'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Delete'>
  </a> </td>";
}
echo "</table>";
  }
  
else{
	echo"NO customer";


}
}
}
$conn->close();
?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this data???');
  }

</script>

</form>
</div>
</body>
</html> 