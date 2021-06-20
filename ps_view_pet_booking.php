<?php require_once("connection.php"); 
require_once("ps_header.php");?>

<?php 
     $query="SELECT * from pet_book inner join  pet using(pet_id) inner join register using (u_id)  where register.u_id=pet_book.u_id and pet_book.status='pending' ";
   
   $result=select($query);
 ?>

<!DOCTYPE html>
<html>
<head>
  <script  type="text/javascript">
    function button()
   {

  document.getElementById("ap").innerHTML = "Approved";
}
  </script>


<center>

<form method="POST">
<div align="center">
  <h3 style="color: red;font-size: 30px;font-family: times new roman"> Pet Booking Details</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
      <th style="color: white;background-color: brown"></th>
      <th style="color: white;background-color: brown">Type</th>
      <th style="color: white;background-color: brown">Breed</th>
      <th style="color: white;background-color: brown">Gender</th>
      <th style="color: white;background-color: brown">Price</th>
      <th style="color: white;background-color: brown">Customer</th>
      <th style="color: white;background-color: orange">Email</th>
      <th style="color: white;background-color: orange">Phone</th>
      <th style="color: white;background-color: orange">Address</th>
      
  
      
    </tr >
    <?php foreach ($result as $row): ?>
    <tr>
      <td><img width="100" height="100" src="images/<?php echo $row['img'] ?>"></td>
      <td><?php echo $row['type'] ?></td>
      <td><?php echo $row['breed'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><!--<button  id="btn"  name="approve" type="submit" style="background-color: green">--><a type="button" id="ap" onclick="button()" href="ps_approve_pet.php?id=<?php echo $row['pet_id'] ?>" style="text-decoration: none;color: red" href="">Approve</a></button></td>
     
     
     
      
     
    </tr>

    <?php endforeach ?>
  </table>
</div>
</form>

<?php require_once("footer.php"); ?>






