<?php require_once("connection.php"); 
require_once("ps_header.php");?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php 
     $query="SELECT * from acc_book inner join  accessories using(acc_id) inner join register using (u_id)  where register.u_id=acc_book.u_id ";
   
   $result=select($query);
 ?>
<center>


<div align="center">
  <h3 style="color: red;font-size: 30px;font-family: times new roman">Accessory Booking Details</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
      <th style="color: white;background-color: brown"></th>
      <th style="color: white;background-color: brown">Pet Category</th>
      <th style="color: white;background-color: brown">Accessory Name</th>
      <th style="color: white;background-color: brown">Description</th>
      <th style="color: white;background-color: brown">Rate</th>
      <th style="color: white;background-color: brown">Count</th>
      <th style="color: white;background-color: brown">Total Amount</th>
      <th style="color: white;background-color: orange">Customer</th>
      <th style="color: white;background-color: orange">Email</th>
      <th style="color: white;background-color: orange">Phone</th>
      <th style="color: white;background-color: orange">Address</th>
  
      
    </tr >
    <?php foreach ($result as $row): ?>
    <tr>
      <td><img width="100" height="100" src="images/<?php echo $row['img'] ?>"></td>
      <td><?php echo $row['category'] ?></td>
      <td><?php echo $row['acc_name'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['rate'] ?></td>
       <td><?php echo $row['count'] ?></td>
       <td><?php echo $row['total_amt'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['address'] ?></td>
     
     
      
     
    </tr>
    <?php endforeach ?>
  </table>
</div>


<?php require_once("footer.php"); ?>






