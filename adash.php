<?php
include 'asession.php';
?>
<body>
  <form method="post">
<nav class="topnav">
  <div class="container-fluid text-center"> <center>
    <h1 style="border-radius:10px;width:50%; color:green;box-shadow:0px 0px 1px 1px red">KHAZI INDUSTRIES</h1></center>
      <a href="admin.php"> <input type="button" name="" value="Logout"class="btn btn-sm" style="border-radius:2px;box-shadow:0px 0px 1px 1px maroon;color:red; float:right" 
        onclick="return logout()">  </a>

<script>
function logout()
   {
return confirm('are you sure logout');
  }
</script>

<hr class="" style="width:1390px;float:right">
       <div class="col-md-3">
        <span-bar>
         <span class="icon-bar"></span>
          <span class="icon-bar"></span> </span-bar>                         
        </nav>


      <div class="col-md-3">
       <div class="sidenav"style="background-color:lightgray">    
           <input type="submit" id="take" name="take" value="TAKE ORDERS" class="btn btn-info btn-md" style="box-shadow:0px 0px 1px 1px blue;width:100%"> <br> <br>
          <input type="submit" name="view" value="VIEW CUSTOMER" class="btn btn-default btn-danger" style="box-shadow:0px 0px 1px 1px red;width: 100%"><br> <br>
              <input type="submit" name="add" value="ADD CUSTOMER" class="btn btn-primary btn-md" style="box-shadow:0px 0px 1px 1px red;width: 100%">
        </div>
      </div>







<?php
if (isset($_POST['take'])) {
      ?>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4">
                <label> Enter your Id:
           <input type="text" name="cid" placeholder="Enter ur id" class="form-control"> <br>
             <label style="float:middle"> OR </label> <br>
             <label> Enter your name: </label>
          <input type="text" name="cname" placeholder="Enter your name" class="form-control"><br>
                <label>OR </label> <br>
                <label> Enter your mobile no.: </label>.
                      <input type="text" name="cmobile" placeholder="Enter cell no" class="form-control"><br>
    
                         <input type="submit" name="tanke" class="btn" style="box-shadow:0px 0px 1px 1px gray;color:red" value="search">
                           <br> <br>                  

                               
                          





                           <?php
                             }   
                                ?>
                                  


       <?php
     
        if (isset($_POST['tanke']))
      {
        $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  $cmobile=$_POST['cmobile'];

 ?>  <table border="1" class="" style="padding:10px;width:800px">
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
  <td> <a href='order.php?cid=$id' ><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Order'>
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
 <td> <a href='order.php?cid=$id' ><input type='button'class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Order'>
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
 <td> <a href='order.php?cid=$id' ><input type='button'class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Order'>
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
                        <?php                      
                    if (isset($_POST["view"])) {
                              ?> 
                              <center>
                              <h2 class="" style="color:blue"> CUSTUMER DETAILS </h2> </center>  
                              <table border="1" style="width:900px;padding:10px">
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
}
?> 
<script>
function checkdelete()
{
  return confirm('ARE YOU SURE TO DELET YOUR TABLE???....');

}
</script>
</center>

                      
             <?php
               $conn=new mysqli("localhost","root","","terox");
                  if (isset($_POST['view'])){   
                            $sql="select * from cdata" ;
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
                              <td><a href='adelete.php?id=$id' ><input type='button'onclick='return checkdelete()' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Delete'>
                              </a> </td>";
                            }
                            echo "</table>";

                            }

                            else{
                              echo"NO customer";
                            }
                             }
                            ?>

</th>



    <?php
      if (isset($_POST['add'])) {
        ?>
        <div class="col-md-4" style="border-radius:10px; box-shadow: 0px 0px 1px 1px red;color:green;padding:10px">
                
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
      </div> <center>
        <button type="submit" class="btn btn-default btn-md" value="register" name="add1"  style="box-shadow:0px 0px 0px 1px green;color:green;float:center;"><b> submit </b> </button> &nbsp;
                           
         <button type="reset" class="btn btn-default btn-md" value="reset" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red;float:center;"><b> reset </b>   </button>
         </center></div>
    </div>

</div>
</div>
<?php
}
?>

<?php
$conn=new mysqli("localhost","root","","terox");
if (isset($_POST['add1'])) {
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
          $_SESSION['lastid']=$conn->insert_id;
          ?>
          <form method="POST">
        <div class="col-md-5">
          <br>
                
    
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
      <button type="submit" class="btn btn-default btn-md" value="ADD" name="amt"  style="box-shadow:0px 0px 0px 1px green;color:green"><b> ADD </b> </button> 
       </div>
    </div>
      <?php


                 }
                else
                {
   
      echo"<script>alert('failed..................')</script>";
    exit();

  }
}
}
$lastid=$_SESSION['lastid'];
if (isset($_POST['amt'])) {
  $d_amt=$_POST['d_amt'];
  
  if(empty ($d_amt))
  {
    echo"<script>alert('enter deposite Amount')</script>";
    exit();
  }

  else
  {
    $query="update cdata set d_amt='$d_amt' where id='$lastid'" ;
    
    $result=$conn->query($query);
    if($result==true){
      echo"<script>alert('customer add successfully')</script>";
    exit();    
    }else{
      echo"<script>alert('failed..................')</script>";
    exit();

        }
  }

}
?>