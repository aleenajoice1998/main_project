<?php   include 'admin_header.php';include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
 

<div class="container" style="padding-left: 200">

<div class="my-3" >

  <center>
      
            <h3 style="color: green">Users</h3>

            
<table class="table" border="1" style="width:100%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
  <thead>
    <tr>
      
      <th style="color: white;background-color: lightgreen;" scope="col">Name</th>
      <th style="color: white;background-color: lightgreen;" scope="col">Email</th>
      <th style="color: white;background-color: lightgreen;" scope="col">Phone</th>
      <th style="color: white;background-color: lightgreen;" scope="col">Address</th>
      <th style="color: white;background-color: lightgreen;" scope="col">Pin</th>
    

    </tr>
    
  </thead>
  <tbody>
      <?php 
  
      $qry="select * from  register ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          

  while($row = $result->fetch_assoc()) {
  
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $address=$row['address'];
    $pin=$row['pin'];
   
      
      ?>
    <tr>
   
      <td><?php echo  $name ;?></td>
      <td><?php echo  $email ; ?></td>
      <td><?php echo  $phone ; ?></td>
      <td><?php echo  $address;?></td>
      <td><?php echo  $pin;?></td>
    
    </tr>
    
    
    </tr>
    <td> 
    <?php 
  }
}else{
    echo " <tr> <td colspan='5'> No items </td> </tr> ";
}
    
    ?>

    
  </tbody>
    
</td>
</tbody>
</table> 
</div>
</div>

</div>


</div>
  
  <button class="button" style="display: inline-block;border-radius: 4px;background-color:red;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 200px;height: 50px;transition: all 0.5s; cursor: pointer;margin: 5px;margin-left: 550px " ><span><a style="text-decoration: none;color: white" href="admin_pdf_generation.php">
  Generate PDF</a></span></button>
  </center>
</head>
</html>
<?php include('footer.php');
?>
