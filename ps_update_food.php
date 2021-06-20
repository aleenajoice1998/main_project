<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
     $qry = "select * from food where f_id = '$id'";
     $rs = select($qry);
  }
 ?>


 <?php 
     if (isset($_POST['update'])) {
      extract($_POST);

     $qry1 ="update food set category = '$category' ,f_name = '$f_name' ,kg = '$kg' ,rate = '$rate' ,description = '$description' ,stock = '$stock' ,img = '$img'  where f_id = '$id'";
      update($qry1);
       redirect('view_food.php');
     }
  ?>





<form method="POST">

 <h4> Update Feed Details</h4>


 <?php foreach ($rs as $value) {  ?>

  <table align="center" class="table" style="width:40%">
      <tr>
          <td> Category<select name="category" value=<?=$value['category']?>><option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option> </select></td>
  
      
    </tr>
    <tr>
      <td>Feed Name</td>
      <td><input class="form-control" type="text" name="f_name" value=<?=$value['f_name']?>></td>
    </tr>
    <tr>
       <td>Kilogram</td>
      <td><input class="form-control" type="text" name="kg" value=<?=$value['kg']?> ></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input class="form-control" type="text" name="rate" value=<?=$value['rate']?>></td>
    </tr>
    <tr>
       <td>Description</td>
      <td><input class="form-control" type="text" name="description" value=<?=$value['description']?> ></td>
    </tr>
    <tr>
      <td>Stock</td>
      <td><input class="form-control" type="text" name="stock" value=<?=$value['stock']?>></td>
       
      
    <tr>
      <td>Image</td>
      <td><input class="form-control" type="file" name="img" value=<?=$value['img']?>></td>
    </tr>
      
     

         <td align="center" colspan="2"><button type="submit" name="update">Update</button></td>
          <td align="center" colspan="2"><button><a href="ps_view_food.php">Back</a> </button></td>
      </tr>
     
  </table>
  <?php } ?>
</form>
<?php include('footer.php');
?>