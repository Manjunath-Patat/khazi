<?php
include 'session.php';
$qry="delete from orders";
$result=$conn->query($qry);
    if($result==true){
      ?>
      <META HTTP-EQUIV="Refresh" content="100; URL=http://localhost/project/dash.php"> 
      <?php

    }else{
      echo"<script>alert('failed..................')</script>";
    exit();

        }
?>