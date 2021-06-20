<?php require_once ('connection.php'); ?>
<?php require_once('user_header.php');?>



<div style="float:left;margin-left:100px;padding-top:50px;padding-left:50px;padding-right:50px;background:white;padding-bottom:60px;width: 250;height: 400">
  <h3>Booking Details</h3>
  <?php 
if(isset($_GET['id']))
{
   $id = $_GET['id'];


  $login_id=$_SESSION['login_id'];

  

  $q="SELECT `f_id`,category,f_name,quantity,msr,rate,description,img from `food` where f_id='$id'";
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
  
        
           $query="INSERT INTO `feed_book`(`f_id`, `u_id`,`count`,`total_amt`,`status`) VALUES ((select f_id from food where f_id='$id'),(select u_id from register where login_id='$login_id'),'$count','$total_amt','pending')";
        insert($query);
      

       // $q3="update food  set stock=stock-count where f_id='$id'";
       // $res3=select($q3);
         $q4="update food inner join feed_book set stock=stock - count where food.f_id=feed_book.f_id";
        $res4=select($q4);
        $q4="update food  set status='Out Of Stock' where stock=0";
        $res4=select($q4);

                 redirect('user_view_feed_booking.php');

       }
       ?>

 <?php

    
        if(isset($_POST['cart']))
       {
      
        $count=$_POST['count'];
        $rate=$_POST['rate'];
        $total_amt= $count*$rate;
        
        extract($_POST);
  
        
              $query="INSERT INTO `cart`(`u_id`, `pro_id`,`total_amt`) VALUES ((select u_id from register where login_id='$login_id'),(select f_id from food where f_id='$id'),'$total_amt')";
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
    
          <td>Category</td>
      <td>
          <input style="border: none" readonly class="form-control" type="text" name="category" value="<?php echo $row['category']; ?>">
         
        </td>
    </tr>
   
    <tr>
      <td>Feed Name</td>
      <td><input style="border: none" readonly class="form-control" type="text" name="f_name" value="<?php echo $row['f_name']; ?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="quantity" value="<?php echo $row['quantity']; ?>"> 
      </td>
    </tr>
    <tr>
      <td>Msr</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="msr" value="<?php echo $row['msr']; ?>"> 
      </td>
    </tr>
    <tr>
       <td>Rate</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="rate" value="<?php echo $row['rate']; ?>">
      </td>
    </tr>
    
    <tr>
       <td>Description</td>
      <td>
       <input style="border: none" readonly class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>">
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
<?php
if(isset($_POST['buy']))
       {
        
        extract($_POST);
  
        $login_id=$_SESSION['login_id'];
  

  
  

  
  $q2="SELECT `u_id`,name,email,phone,address,pin FROM `register` where login_id=$'login_id'";
    $res2=select($q2);
                 


       }
       ?>

</form>

<div>
 
<?php include('footer.php');
?>
