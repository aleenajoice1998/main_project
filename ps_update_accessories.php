<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
     $qry = "select * from accessories where acc_id = '$id'";
     $rs = select($qry);
  }
 ?>


 <?php 
     if (isset($_POST['update'])) {
      extract($_POST);

     $qry1 ="update accessories set acc_name = '$acc_name' ,description = '$description',rate = '$rate' , stock = '$stock' ,img = '$img'  where acc_id = '$id'";
      update($qry1);
       redirect('view_accessories.php');
     }
  ?>





<form method="POST">
  <center>

 <h4> Update Accessories Details</h4>


 <?php foreach ($rs as $value) {  ?>

  <table align="center" class="table" style="width:40%">
      
    <tr>
      <td>Product Name</td>
      <td><input class="form-control" type="text" name="acc_name" value=<?=$value['acc_name']?>></td>
      
    </tr>
    <tr>
      <td>Description</td>
      <td><input class="form-control" type="text" name="description" value=<?=$value['description']?> ></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input class="form-control" type="text" name="rate" value=<?=$value['rate']?>></td>
       
    </tr>
    <tr>
      <td>Stock</td>
      <td><input class="form-control" type="text" name="stock" value=<?=$value['stock']?>></td>
       
      
    <tr>
      <td>Image</td>
      <td><input class="form-control" type="file" name="img" value=<?=$value['img']?>></td>
    </tr>
      
     

         <td align="center" colspan="2"><button type="submit" name="update">Update</button></td>
      </tr>
       </tr>
      
     

         <td align="center" colspan="2"><button><a href="ps_view_accessories.php">Back</a> </button></td>
      </tr>
     
     
  </table>
  <?php } ?>
</form>
<?php include('footer.php');
?>