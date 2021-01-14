<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/cs

s/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style>
  
body
{
  background-color:lightgray;
}

h4 {
    text-align:center;
    padding:5px; 
    border-radius:5pxx;
    box-shadow:0px 0px 1px 1px black;
   }

h1 { 
    padding:5px;
   border-radius:10px;
   box-shadow:0px 0px 1px 1px black;  
    }

  
</style>
</head>
 <body>
<form method="POST">
<div class="container">
	<div class="col-md-4">
	</div>
	<div class="col-md-5">
    <center>
                   <h1 style="color:blue;">ADMIN LOGIN PAGE 
                     </h1> </center> <br>
             <div class="text-center">
                     <img src="welcome.jpg" class="img-circle" padding:50px; width="300" height="100">
                        </div>
                     	 <br>
                                 	<div style=" height:100% width:100%; padding:50px; box-shadow:0px 0px 1px 1px blue; border-radius:10px;"class="form-group">

                     	         	<div class="row">
                     	         	<div class="col-md-4">
                     	        
                     	         		<label for="email"> Email ID: </label> 
                     	         	</div>
                     	         	<div class="col-md-8">
                                <input type="email" placeholder="Enter Your Email" name="email" class="form-control" style=" box-shadow:0px 0px 1px 1px">
                     	         	
                     	         	</div>
                     	         	</div>
                                <br>
                     	         	 	<div class="row">
                       	         	<div class="col-md-4">
                     	        
                     	         		<label for="pwd"> Password: </label>
                     	         	</div>
                     	         	<div class="col-md-8">
                     	         		<input type="password" placeholder="Enter Your Password" name="password" class="form-control" style="box-shadow:0px 0px 0px 1px ">
                     	         	
                     	         	</div>
                     	         	</div>
                     	         	
                     	        <br>
                     	        	<div style="text-align:center">
                     	         	 <button type="submit" class="btn btn-md" name="submit" class="form-control" style="box-shadow:0px 0px 0px 1px green;color:green"> <b> Submit </b> </button> 
                                     &nbsp; &nbsp;
                     	         	 
                                     <button type="reset" class="btn  btn-md" name="reset" class="form-control" style="box-shadow:0px 0px 0px 1px red;color:red"><b> Reset </b>    </button>
						</div>
          							
	</div>
<h4>
<a href="forgot2.php"> Forgot Your Password ? </a> <br> <br>
</h4>
</div>
</div>
</form>
</body>
</html>



<?php
$conn=new mysqli("localhost","root","","terox");
if (isset($_POST["submit"])) {
$email=$_POST["email"];
$password=$_POST["password"]; 
if(empty($email&&$password))
    {
        echo"<script>alert('enter all values')</script>";
        exit();
   }
   else
   {
    $query="select * from admin1 where email='$email' AND password='$password'";
$result=$conn->query($query);
   $row=$result->fetch_array();
   session_start();
 if($row['email']==$email && $row['password']==$password)
        {
        
       $_SESSION['email']=$email;
        header("location:adash.php");
        }
else
    {
        echo"<script>alert('INAVALID USER')</script>";
        exit();
   }

}
}
?>