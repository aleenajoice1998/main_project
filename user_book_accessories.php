<?php require_once ('connection.php'); ?>
<?php require_once('user_header.php');?>



<div style="float:left;margin-left:100px;padding-top:50px;padding-left:50px;padding-right:50px;background:white;padding-bottom:60px;width: 250;height: 400">
  <h3>Booking Details</h3>
  <?php 
if(isset($_GET['id']))
{
   $id = $_GET['id'];


  $login_id=$_SESSION['login_id'];

  

  $q="SELECT `acc_id`,category,acc_name,description,rate,img from `accessories` where acc_id='$id'";
  $res=select($q);
  $q2="SELECT `u_id`,name,email,phone,address,pin FROM `register` where login_id='$login_id'";
    $res2=select($q2);
  }
    ?>
    <?php

    
        if(isset($_POST['buy']))
       {
      
        $count=$_POST['count'];
        $rate=$_POST['rate'];
        $total_amt= $count*$rate;
        extract($_POST);
  
        
            $query="INSERT INTO `acc_book`(`acc_id`, `u_id`,`count`,`total_amt`,`status`) VALUES ((select acc_id from accessories where acc_id='$id'),(select u_id from register where login_id='$login_id'),'$count','$total_amt','pending')";
        insert($query);
      

        
         $q4="update accessories inner join acc_book set stock=stock - count where accessories.acc_id=acc_book.acc_id";
        $res4=select($q4);
        $q3="update accessories set status='Out Of Stock' where stock=0";
        $res3=select($q3);

                 redirect('user_view_acc_booking.php');

       }
       ?>

        <?php

    
        if(isset($_POST['cart']))
       {
       $count=$_POST['count'];
        $rate=$_POST['rate'];
        $total_amt= $count*$rate;
      
        extract($_POST);
  
        
             $query="INSERT INTO `cart`(`u_id`, `pro_id`,`total_amt`) VALUES ((select u_id from register where login_id='$login_id'),(select acc_id from accessories where acc_id='$id'),'$total_amt')";
        insert($query);
      

        
              redirect('user_view_cart.php');

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
     <tr>
         
      <tr>
          <td>Pet Category</td>
      <td>
          <input style="border: none" readonly class="form-control" type="text" name="category" value="<?php echo $row['category']; ?>">
         
        </td>
    </tr>
   
    <tr>
      <td>Accessory Name</td>
      <td><input style="border: none" readonly class="form-control" type="text" name="acc_name" value="<?php echo $row['acc_name']; ?>"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>">
      </td>
    </tr>
    <tr>
       <td>Rate</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="rate" value="<?php echo $row['rate']; ?>">
      </td>
    </tr>
    
   
    
    
  
      <td></td>

     

         
      </tr>  
  </table>
  Count <input type="text" name="count">
  <button class="btn btn-success" type="submit" name="buy">Buy</button>
  <button type="submit" name="cart"> Add To Cart</a></button>
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
 
<?php include('footer.php');
?>
