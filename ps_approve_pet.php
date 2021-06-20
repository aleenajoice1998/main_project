<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
      $qry = "update pet_book set status='Approved' where pet_id = '$id'";
     $rs = select($qry);

      redirect('ps_view_pet_booking.php');
  }
  
      ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<script  type="text/javascript">
 		function button()
 		{
 				document.getElementByName("approve").innerHTML="Approved";
 			}
 		
 	</script>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>




