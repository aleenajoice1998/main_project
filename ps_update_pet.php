<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
     $qry = "select * from pet where pet_id = '$id'";
     $rs = select($qry);
  }
  
      ?>
 


 <?php 
     if (isset($_POST['update'])) {
      extract($_POST);

       $qry1 ="update pet set breed = '$breed' ,color = '$color' ,age = '$age' ,description = '$description' ,price = '$price'  where pet_id = '$id'";
      update($qry1);
       redirect('view_pet.php');
     }
  ?>



<center>

<form method="POST">

 <h4> Update Pet Details</h4>


 <?php foreach ($rs as $value) {  ?>

  <table align="center" class="table" style="width:40%">
     
    <tr>
      <td>Breed</td>
      <td><input class="form-control" type="text" name="breed" value=<?=$value['breed']?>></td>
    </tr>
    <tr>
       <td>Color</td>
      <td><input class="form-control" type="text" name="color" value=<?=$value['color']?> ></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input class="form-control" type="text" name="age" value=<?=$value['age']?>></td>
    </tr>
    <tr>
       <td>Description</td>
      <td><input class="form-control" type="text" name="description" value=<?=$value['description']?> ></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input class="form-control" type="text" name="price" value=<?=$value['price']?>></td>
    </tr>
       
      
   
      
     

         <td align="center" colspan="2"><button type="submit" name="update">Update</button></td>
          <td align="center" colspan="2"><button><a href="ps_view_pet.php">Back</a> </button></td>
      </tr>
     
  </table>

  <?php } ?>

</form>
<?php include('footer.php');
?>