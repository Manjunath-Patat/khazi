<?php
$conn=new mysqli("localhost","root","","terox");
session_start();
if (empty($_SESSION['email'])) {
	header("location:index.php");
}
?>
<html>
<had>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  

th{
    box-shadow:0px 0px 0px 1px skyblue;
    color:green; 
    text-align:center;
    padding:5px;
   }
   td{
    box-shadow:0px 0px 0px 1px skyblue;    
    text-align:center;
    padding:4px;
   }
   table
   {
   	border: collapse;
   padding:5px;	
   	color:black;
   	text-align:center;
   }

span
  { 
     font-size:20px;
    color:mediumblue;
     }
  h1{
    font-size:40px;
    font-family:javanese Text;  
  }
  body
  {
    background-color:lightgray;
  }
 
span:hover{
  background-color: lightblue;
padding:6px;
border-radius:5px;

}
</style>

</head>
