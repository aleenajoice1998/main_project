<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
     echo $qry = "update service_book set status='Approved' where ser_id = '$id'";
     $rs = update($qry);
     
      redirect('ps_view_service_booking.php');
  }
  
      ?>
 




