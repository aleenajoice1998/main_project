<?php  include 'connection.php'; include 'ps_header.php'; ?>

<div class="container" style="padding-left: 200">

<div class="my-3" >

     
      
            <h3>Service Types</h3>

            <button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 15px;padding: 10px;width: 100px;transition: all 0.5s; cursor: pointer;margin: 5px "type="submit" name="register" ><span><a href="ps_add_service_type.php" style="text-decoration: none;color: white">+ Add More</a></span></button>
<table class="table">
  <thead>
    <tr>
      
    <th scope="col">Pet Category</th>
      <th scope="col">Service Name</th>
     
      


      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
  
      $qry="select * from  ser_type ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          

  while($row = $result->fetch_assoc()) {
  
    $pet_type=$row['pet_type'];
    $b_name=$row['ser_name'];
    
      ?>
    <tr>
      
   
      <td><?php echo  $pet_type ;?></td>
      <td><?php echo  $ser_name ; ?></td>
     
      
     
   <td style="background-color:transparent"><a href="ps_view_ser_type.php?id=<?php echo $row['pb_id'] ?>"><button style="color: white;background-color: red">Delete</button></a></td>
      <td style="background-color:transparent">
      
    </tr>
     
    
    </tr>
    <?php 
  }
}else{
    echo " <tr> <td colspan='5'> No items </td> </tr> ";
}
    
    ?>

    <?php 
     if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = "delete from pet_breed where pb_id = '$id'";
  delete($q);
  msg('Removed!');
  redirect('view_pet_breed.php');
}
 ?>
   
  </tbody>
</table>

      
 
</div>
</div>
<?php include('footer.php');
?>
