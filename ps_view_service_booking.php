<?php require_once("connection.php"); 
require_once("ps_header.php");?>

<?php 
     $query="SELECT * from service_book inner join  service using(ser_id) inner join register using (u_id)  where register.u_id=service_book.u_id and service_book.status='pending' ";
   
   $result=select($query);
 ?>



<div align="center">
  <h3 style="color: red;font-size: 30px;font-family: times new roman"> Service Booking Details</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
     
      <th style="color: white;background-color: brown">Pet Category</th>
      <th style="color: white;background-color: brown">Service Type</th>
      <th style="color: white;background-color: brown">Service Duration</th>
      <th style="color: white;background-color: brown">Rate</th>
      <th style="color: white;background-color: orange">Customer</th>
      <th style="color: white;background-color: orange">Email</th>
      <th style="color: white;background-color: orange">Phone</th>
      <th style="color: white;background-color: orange">Address</th>
      <th style="color: white;background-color: orange"></th>
  
      
    </tr >
    <?php foreach ($result as $row): ?>
    <tr>
      
      <td><?php echo $row['category'] ?></td>
      <td><?php echo $row['s_type'] ?></td>
      <td><?php echo $row['s_duration'] ?></td>
      <td><?php echo $row['rate'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><!--<button  id="btn"  name="approve" type="submit" style="background-color: green">--><a type="button" id="ap"  href="ps_approve_service.php?id=<?php echo $row['ser_id'] ?>" style="text-decoration: none;color: red" href="">Approve</a></button></td>
     
      
     
    </tr>
    <?php endforeach ?>
  </table>
</div>


<?php require_once("footer.php"); ?>






