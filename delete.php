<?php
include 'session.php';
$id=$_GET['id'];
$qry="delete from cdata where id='$id'";
$result=$conn->query($qry);
    if($result==true){
      ?>
      <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/project/edit.php"> 
      <?php

    }else{
      echo"<script>alert('failed..................')</script>";
    exit();

        }
?>
