<?php include('ps_header.php');
include('connection.php');
?>
<html>
<head>

<form method="POST">

  <input  type="text" name="str" required placeholder="Search...">
  <input  type="submit" name="submit" value="search">
</form>
  
  <?php

if(isset($_POST['submit']))
{
   $str=mysqli_real_escape_string($con,$_POST['str']);
   $q="select * from pet where type like'%$str%' or breed like'%$str%' ";
   $result=$con->query($q);
   if($result->num_rows > 0)
   {
    while($row=mysqli_fetch_assoc($result))
    {
      echo '<pre>';
      print_r($row);
    }

   }
   else
   {
    echo "no data";

   }
}
?>
   </head>
   </html>
   <?php
   include('footer.php');
   ?>