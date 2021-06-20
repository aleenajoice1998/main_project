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
          <td> Feed Id</td>
      <td>
          <input style="border: none" readonly class="form-control" type="text" name="f_id" value="<?php echo $row['f_id']; ?>">
         
        </td>
      <tr>
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
 
<?php
if(isset($_POST['buy']))
       {
        
        extract($_POST);
  
        $login_id=$_SESSION['login_id'];
  

  
  

  $q="SELECT `f_id`,category,f_name,quantity,msr,rate,age,description,stock,img from `food` where f_id='$f_id'";
  $res=select($q);
  $q2="SELECT `u_id`,name,email,phone,address,pin FROM `register` where login_id=$'login_id'";
    $res2=select($q2);
                 


       }
       ?>




<div  style="margin-right:150px;padding-top:60px;background:white;float:right;padding-left:50px;padding-right:50px;padding-bottom:40px;width: 250;height: 400">

     
</div>

</form>

<div>
 
<?php include('footer.php');
?>
