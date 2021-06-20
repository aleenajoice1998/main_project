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
      
            <h3 style="color: darkviolet;font-size: 30px;font-family: times new roman">Accessories</h3>
            <button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 15px;padding: 10px;width: 100px;transition: all 0.5s; cursor: pointer;margin: 5px;margin-left: -800px "type="submit" name="register" ><span><a href="ps_add_accessories.php" style="text-decoration: none;color: white">+ Add More</a></span></button>
<table class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
  <thead>
    <tr>
     <th style="color: white;background-color: darkviolet"></th>
     <th style="color: white;background-color: darkviolet" scope="col">Pet Category</th>
    
      <th style="color: white;background-color: darkviolet" scope="col">Product Name</th>
      
      <th style="color: white;background-color: darkviolet" scope="col">Description</th>
      
      <th style="color: white;background-color: darkviolet" scope="col">Rate</th>
      
      <th  style="color: white;background-color: darkviolet"scope="col">Stock</th>
     
<th style="color: white;background-color: darkviolet" scope="col"></th>
<th style="color: white;background-color: darkviolet" scope="col"></th>
      


      <th style="color: white;background-color: darkviolet" scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
  
      $qry="select * from  accessories ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          

  while($row = $result->fetch_assoc()) {
  $category=$row['category'];
    $acc_name=$row['acc_name'];
    $description=$row['description'];
    $rate=$row['rate'];
    $stock=$row['stock'];
    $img=$row['img'];
   
      
      ?>
    <tr>
    <td> <img width="100px" src="images/<?php echo $img ?>"> </td>
   
     <td><?php echo  $category ; ?></td>
    
      <td><?php echo  $acc_name ; ?></td>
    
      <td><?php echo  $description ; ?></td>
    
      <td><?php echo  $rate ; ?></td>
      
      <td><?php echo  $stock ; ?></td>
      
      <td><button type="button"  class="btn btn-warning">
        <?php
       if ($stock <= 0)
       {
     echo "Out of stock";  
      }
      else
      {
      echo "In stock";
      }
      ?>
    </td>
  </button>
    </td>

     <td style="background-color:transparent"><a href="ps_view_accessories.php?id=<?php echo $row['acc_id'] ?>"><button type="button"  class="btn btn-danger"><span>Delete</span></button></a></td>
      <td style="background-color:transparent">
      <button type="button"  class="btn btn-info"><a style="text-decoration: none;color: white" href="ps_update_accessories.php?id=<?php echo $row['acc_id'] ?>"><span>Update</span></a></button></td>
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
  $q = "delete from accessories where acc_id = '$id'";
  delete($q);
  msg('Removed!');
  redirect('ps_view_accessories.php');
}
 ?>
   
  </tbody>
</table>

      
  
</div>
</div>
<?php include('footer.php');
?>

