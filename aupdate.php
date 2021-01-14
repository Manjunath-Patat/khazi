<?php
include 'session.php';

?>
<style>
  th,td{
    box-shadow: 0px 0px 0px 1px pink;
    color:green;
    text-align:center;
    padding:5px;


  }
  table
  {
    border:collapse;
    padding:5px;
    color:black;
    text-align:center;
  }
</style>

</head>
<?php
$conn=new mysqli("localhost","root","","world");
if (isset($_GET['id'])){
  $id=$_GET['id'];

   $qry="select * from data1 where id=$id";
   $result=$conn->query($qry);
if($result->num_rows > 0){

    while ($row=$result->fetch_array())
    {
     $id=$row["id"];
     $name=$row["name"];
     $address=$row["address"]; 
     $cell=$row["cell"];
     $email=$row["email"];
     $a_mob=$row["a_mob"];
     $state=$row["state"];
     $pincode=$row["pincode"];
}
}
}
 ?>
 
  <form method="POST">
    <div class="col-md-4 container">
  </div>
    <div class="col-md-4 container" class="" style="font-color:red;">  
	   <h1> <b>UPDATE CUSTOMER INFORMATION</b></h1>
      <br>

        <div class="row">
          <div class="col-md-4">
            <label>name: </label>
       </div>
            <div class="col-md-8">
              <input type="text" name="name" value="<?php echo($name); ?>" placeholder="Enter name"  class="form-control" >
        <br>
       </div>
      </div>

            <div class="row">
              <div class="col-md-4">
                <label>Address: </label>
          </div>
            <div class="col-md-8">
              <input type="text" name="address" value="<?php echo($address); ?>" placeholder="Enter Address" class="form-control" >
        <br>
           </div>
         </div>

              <div class="row">
                <div class="col-md-4">
                    <label>cell: </label>
                 </div>
                    <div class="col-md-8">
                     <input type="text" name="cell" value="<?php echo($cell); ?>" placeholder="Enter cell no" class="form-control" >
                   <br>
                 </div>
                        </div>

                  <div class="row">
                   <div class="col-md-4">
                     <label>email: </label>
                 </div>
                   <div class="col-md-8">
                    <input type="text" name="email" value="<?php echo($email); ?>" placeholder="Enter email" class="form-control" >
                 <br>
                  </div>
                </div>
           
                      <div class="row">
                        <div class="col-md-4">
                            <label>a_mob: </label>
                          </div>
                            <div class="col-md-8">
                               <input type="text" name="a_mob" value="<?php echo($a_mob); ?>" placeholder="Enter a_mob" class="form-control" >
                                   <br>
                             </div>
                            </div>

                      <div class="row">
                          <div class="col-md-4">
                             <label>state: </label>
   </div>
     <div class="col-md-8">
      <input type="text" name="state" value="<?php echo($state); ?>" placeholder="Enter state" class="form-control" >
      <br>
    </div>
   </div>
 <div class="row">
  <div class="col-md-4">
   <label>pincode: </label>
    </div>
      <div class="col-md-8">
        <input type="text" name="pincode" value="<?php echo($pincode);?>" placeholder="Enter pincode" class="form-control" >
      <br>
    </div>
   </div>



     <div class="row">
      <div class="col-md-8">
        <button type="update" name="update" class="btn btn-default" style="box-shadow: 0px 0px 1px red;">update</button>


      <input type="reset" value="reset" class="btn btn-default btn-md" name="reset" style="border-radius: 0px 0px 1px 1px red;color: red;">

    <a href="dash.php" input type="button" value="back" class="btn btn-default btn-md" name="back" style="border-radius: 0px 0px 1px 1px green;color:blue;">back</a></button>

    </form>
    </div>
   </div>
 </div>
  </form>
               
    
<?php
 //$conn=new mysqli("localhost","root","","world");
   if (isset($_POST['update'])){
          
           $name=$_POST['name'];
           $address=$_POST['address']; 
           $cell=$_POST['cell'];
           $email=$_POST['email'];
           $a_mob=$_POST['a_mob'];
           $state=$_POST['state'];
           $pincode=$_POST['pincode'];
          
         if (empty($name&&$address&&$cell&&$email&&$a_mob&&$state&&$pincode))
         {
           echo "<script>alert('enter all values')</script>";
                      exit();
              } 
              else
{
 $query="UPDATE data SET name='$name',address='$address',cell='$cell',email='$email',a_mob='$a_mob',state='$state',pincode='$pincode' where id=$id";
 //$query="insert into data(name,addess,cell,email,a_mob,state,pincode)
// values('$name','$address','$cell','$email','$a_mob','$state','$pincode')";

$result=$conn->query($query);
   if($result==true)
   {
      echo "<script>alert('data inserted successfully')</script>";
       
       // header("refresh:1");
         exit();
         }
         else{      
      echo"<script>alert('failed..................')</script>";
    exit();
  }
}
}
?>
</head>
</html>