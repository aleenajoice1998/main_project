<?php require_once("connection.php");?>
<?php require_once("ps_header.php"); ?>
<?php 
  if(isset($_GET['id'])){
   $id = $_GET['id'];
     
     $qry = "select * from service where ser_id = '$id'";
     $rs = select($qry);
  }
 ?>


 <?php 
     if (isset($_POST['update'])) {
      extract($_POST);

       $qry1 ="update service set category = '$category' ,s_name = '$s_name' ,s_duration = '$s_duration' ,rate = '$rate'   where ser_id = '$id'";
      update($qry1);
       redirect('view_service.php');
     }
  ?>





<form method="POST">

 <h4> Update Service Details</h4>


 <?php foreach ($rs as $value) {  ?>

  <table align="center" class="table" style="width:40%">
      <tr>
          <td> Pet Category<select name="category" value=<?=$value['category']?>><option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option> </select></td>
  
      
    </tr>
    <tr>
      <td>Service Name</td>
      <td><input class="form-control" type="text" name="s_name" value=<?=$value['s_name']?>></td>
    </tr>
    <tr>
       <td>Service Duration</td>
      <td><input class="form-control" type="text" name="s_duration" value=<?=$value['s_duration']?> ></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input class="form-control" type="text" name="rate" value=<?=$value['rate']?>></td>
       
         <td align="center" colspan="2"><button type="submit" name="update">Update</button></td>
          <td align="center" colspan="2"><button><a href="ps_view_service.php">Back</a> </button></td>
      </tr>
     
  </table>
  <?php } ?>
</form>
<?php include('footer.php');
?>