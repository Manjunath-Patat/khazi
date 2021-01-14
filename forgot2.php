<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
h2 {
    text-align:center;
    padding:5px; 
    border-radius:5px;
    box-shadow:0px 0px 2px 2px green;
   }
   body
   {
    background-color: lightgray;
   }
</style>
</head>
 <body>
<form method="post">
    <div class="col-md-4">
	</div>
	<div class="col-md-4 text-center"> 
			<h2> Forgot Your Password </h2>  <br><br>

			<form>
				 	<div style=" height:20% width:50%; box-shadow:0px 0px 1px 1px black; padding:15px; border-radius:15px;"class="form-group">
                     	     <div class="row">
                     	                          	      <div class="col-md-5">
                     	        <label for="mobile no">Mobile no.: </label>
                     	        </div>
                     	        <div class="col-md-7">
                     	        <input type="text" placeholder="Enter mobile no" class="form-control" name="mobile">  
								</div>
							</div>
								<br>

						<div style="text-align:center; padding:15px">
                     	         	 <button type="submit" class="btn btn-success btn-md" value="submit" name="submit"> submit </button> 
                     	         	 &nbsp;&nbsp;
                                     <button type="reset" class="btn btn-danger btn-md" value="reset" name="reset"> reset    </button>
						</div>
							</form>
						</div>
						<a href="user.php">	<input type="button" class="btn btn-sm" style="box-shadow: 0px 0px 0px 1px red;color:blue" value="Home"></a>		
				</div>
			</body>
			</html>





<?php
session_start();
$conn=new mysqli("localhost","root","","terox");
if (isset($_POST["submit"])) {
$mobile=$_POST["mobile"];

if(empty($mobile))
    {
        echo"<script>alert('enter your mobile no:')</script>";
        exit();
   }
   else
   {
    $query="select * from admin where mobile='$mobile'";
$result=$conn->query($query);
   $row=$result->fetch_array();
 if($row['mobile']==$mobile) 
         {
          echo "<script> alert ('OTP is send successfully')</script>";

        }
else
    {
        echo"<script>alert('invalid mobile no')</script>";
        exit();
   }

}
}
?>