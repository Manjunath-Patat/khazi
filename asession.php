<?php
$conn=new mysqli("localhost","root","","terox");
session_start();
if (empty($_SESSION['email'])){
header("location:admin.php");

}
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jqueary/3.1.1/jquery.min.js"></script>

<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body
{
  background-color:lightgray;
}
th
{
  color:green;
padding:3px;
}
td
{
  padding:5px;
}
table
{
  border:collapse;
  padding:5px;
  color: black;
  text-align: center;
}

h4 {
    text-align:center;
    padding:10px; 
    border-radius:10px;
    box-shadow:0px 0px 1px 1px black;
   }

h1 { 
    padding:5px;
   border-radius:20px;
   box-shadow:0px 0px 1px 1px black;  
    }
  
</style>

</style>
</head>
</html>