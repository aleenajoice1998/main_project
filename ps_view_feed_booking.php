<?php require_once("connection.php"); 
require_once("ps_header.php");?>

<?php 
     $query="SELECT * from feed_book inner join  food using(f_id) inner join register using (u_id)  where register.u_id=feed_book.u_id ";
   
   $result=select($query);
 ?>



<div align="center">
  <h3 style="color: red;font-size: 30px;font-family: times new roman"> Feed Booking Details</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
      <th style="color: white;background-color: brown"></th>
      <th style="color: white;background-color: brown">Pet Category</th>
      <th style="color: white;background-color: brown">Feed Name</th>
      <th style="color: white;background-color: brown">Description</th>
      <th style="color: white;background-color: brown">Rate</th>
      <th style="color: white;background-color: brown">Count</th>
      <th style="color: white;background-color: brown">Total Amount</th>
      <th style="color: white;background-color: orange">Name</th>
      <th style="color: white;background-color: orange">Email</th>
      <th style="color: white;background-color: orange">Phone</th>
      <th style="color: white;background-color: orange">Address</th>
  
      
    </tr >
   
    <?php foreach ($result as $row): ?>
    <tr>
      <td><img width="100" height="100" src="images/<?php echo $row['img'] ?>"></td>
      <td ><?php echo $row['category'] ?></td>
      <td><?php echo $row['f_name'] ?></td>
      <td><?php echo $row['quantity'] ?> <?php echo $row['msr'] ?></td>
     
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






