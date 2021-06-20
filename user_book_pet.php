<?php require_once ('connection.php'); ?>
<?php require_once('user_header.php');?>



<div style="float:left;margin-left:100px;padding-top:50px;padding-left:50px;padding-right:50px;background:white;padding-bottom:60px;width: 250;height: 400">
  <h3>Booking Details</h3>
  <?php 
if(isset($_GET['id']))
{
   $id = $_GET['id'];


  $login_id=$_SESSION['login_id'];

  

  $q="SELECT `pet_id`,type,breed,gender,color,age,description,price,img from `pet` where pet_id='$id'";
  $res=select($q);
  $q2="SELECT `u_id`,name,email,phone,address,pin FROM `register` where login_id='$login_id'";
    $res2=select($q2);
  }
    ?>
    <?php

    
        if(isset($_POST['buy']))
       {
        
        extract($_POST);
  
        
            echo $query="INSERT INTO `pet_book`(`pet_id`, `u_id`,`status`) VALUES ((select pet_id from pet where pet_id='$id'),(select u_id from register where login_id='$login_id'),'pending')";
        insert($query);
        

        $q3="update pet set status='booked' where pet_id='$id'";
        $res3=select($q3);
                 redirect('user_view_pet_booking.php');

       }
       ?>
       <body >
<form method="POST" >
  <table class="table" style="width:40%">
       <?php foreach($res as $row): ?>
        <?php endforeach ?>
        <caption></caption>
         <tr>
      
      <td colspan="2"> <img name="img" width="200" height="150"  src="images/<?php echo $row['img'] ?>"> </td>
      </td>

    </tr>
     
          <td>Type</td>
      <td>
          <input style="border: none" readonly class="form-control" type="text" name="type" value="<?php echo $row['type']; ?>">
         
        </td>
    </tr>
   
    <tr>
      <td>Breed</td>
      <td><input style="border: none" readonly class="form-control" type="text" name="breed" value="<?php echo $row['breed']; ?>"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="gender" value="<?php echo $row['gender']; ?>">
      </td>
    </tr>
    <tr>
       <td>Color</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="color" value="<?php echo $row['color']; ?>">
      </td>
    </tr>
    
    <tr>
       <td>Age</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="age" value="<?php echo $row['age']; ?>">
      </td>
    </tr>
    <tr>
       <td>Description</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>">
      </td>
    </tr>
    <tr>
       <td>Price</td>
      <td>
       <input style="border: none;" readonly class="form-control" type="text" name="price" value="<?php echo $row['price']; ?>">
      </td>

    </tr>
    
  
      <td></td>
     

         <td><button class="btn btn-success" type="submit" name="buy">Buy</button></td>
      </tr>  
  </table>
</div>





<div  style="margin-right:150px;padding-top:60px;background:white;float:right;padding-left:50px;padding-right:50px;padding-bottom:40px;width: 250;height: 400">

     <table  class="table" style="width:40%">
       <?php foreach($res2 as $row): ?>
        <?php endforeach ?>
        <h3>Delivery Address</h3>
         
      <tr>
         
      <td>
          <input style="border: none" readonly class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>">
         
        </td>
    </tr>
   
    <tr>
     
      <td><input style="border: none" readonly class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>"></td>
    </tr>
    <tr>
      
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="phone" value="<?php echo $row['phone']; ?>">
      </td>
    </tr>
     <tr>
      
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>">
      </td>
    </tr>
     <tr>
      
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="pin" value="<?php echo $row['pin']; ?>">
      </td>
    </tr>
    
  </table>
</div>

</form>

<div>
  <!--<?php   $q = "select * from pet_book inner join pet using(pet_id) inner join register using(u_id) where u_id=(select u_id from register where login_id='{$_SESSION['login_id']}')" ?>
  <?php   $res = select($q) ?>
  <table class="table"> 
    <tr>
      <th>Type</th>
      <th>Breed</th>
      <th>Gender</th>
      <th>Color</th>
      <th>Age</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    <?php foreach ($res as $row) { ?>
    <tr>
      <td></td>
      <td><?php echo $row['type'] ?></td>
      <td><?php echo $row['breed'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['color'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['price'] ?></td>
    </tr>
  
    <?php } ?>
  </table>
</div>-->
<?php include('footer.php');
?>
