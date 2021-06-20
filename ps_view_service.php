<?php  include 'connection.php'; include 'ps_header.php'; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container" style="padding-left: 200">

<div class="my-3">
<center>
     
      
            <h3  style="color: darkviolet;font-size: 30px;font-family: times new roman">Services</h3>
            <button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 15px;padding: 10px;width: 100px;transition: all 0.5s; cursor: pointer;margin: 5px;margin-left: -800px "type="submit" name="register" ><span><a href="ps_add_service.php" style="text-decoration: none;color: white">+ Add More</a></span></button>
<table class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
  <thead>
    <tr>
     
      <th style="color: white;background-color: darkviolet" scope="col">Category</th>
      <th style="color: white;background-color: darkviolet" scope="col">Service Type</th>
      <th style="color: white;background-color: darkviolet" scope="col">Service Duration</th>
      <th style="color: white;background-color: darkviolet" scope="col">Rate</th>
      

<th style="color: white;background-color: darkviolet" scope="col"></th>
      <th style="color: white;background-color: darkviolet" scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
  
      $qry="select * from  service ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          

  while($row = $result->fetch_assoc()) {
  
    $category=$row['category'];
    $s_type=$row['s_type'];
    $s_duration=$row['s_duration'];
    $rate=$row['rate'];
   
      
      ?>
    <tr>
    
      <td><?php echo  $category ;?></td>
      <td><?php echo  $s_type ; ?></td>
      <td><?php echo  $s_duration ;?></td>
      <td><?php echo  $rate ; ?></td>
      
      <td style="background-color:transparent"><a href="ps_view_service.php?id=<?php echo $row['ser_id'] ?>"><button  type="button"  class="btn btn-danger">Delete</button></a></td>
      <td style="background-color:transparent">
      <button  type="button"  class="btn btn-info"><a style="text-decoration: none;color: white" href="ps_update_service.php?id=<?php echo $row['ser_id'] ?>">Update</a></button></td>
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
  $q = "delete from service where ser_id = '$id'";
  delete($q);
  msg('Removed!');
  redirect('view_service.php');
}
 ?>
   
  </tbody>
</table>

      
  
</div>
</div>
<?php include('footer.php');
?>
