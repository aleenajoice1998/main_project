<?php  include 'connection.php'; include 'user_header.php'; ?>

<div class="container" style="padding-left: 200">

<div class="my-3" >

     
      
            <h3>Pets</h3>

            
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th scope="col">Pet Category</th>
      <th scope="col">Breed</th>
      <th scope="col">Gender</th>
      <th scope="col">Color</th>
      <th scope="col">Age</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>

      


      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
  
      $qry="select * from  pet where status='booked' ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          

  while($row = $result->fetch_assoc()) {
  
    $type=$row['type'];
    $breed=$row['breed'];
    $gender=$row['gender'];
    $color=$row['color'];
    $age=$row['age'];
    $description=$row['description'];
    $price=$row['price'];
    $image=$row['img'];
    $status=$row['status'];
      
      ?>
    <tr>
      <td> <img width="100px" src="images/<?php echo $image ?>"> </td>
   
      <td><?php echo  $type ;?></td>
      <td><?php echo  $breed ; ?></td>
      <td><?php echo  $gender ; ?></td>
      <td><?php echo  $color ;?></td>
      <td><?php echo  $age ; ?></td>
      <td><?php echo  $description ;?></td>
      <td><?php echo  $price ; ?></td>
      <td style="color: white;border: groove;background-color: red;width: 80;height: 40;text-align: center;"><?php echo  $status; ?></td>
      <td><h5> Thankyou for the booking.Please wait for confirmation mail</h5></td>

      
      
     
 
      
    </tr>
     
    
    </tr>
    <?php 
  }
}else{
    echo " <tr> <td colspan='5'> No items </td> </tr> ";
}
    
    ?>

    
  </tbody>
</table>

      
 
</div>
</div>
<?php include('footer.php');
?>
