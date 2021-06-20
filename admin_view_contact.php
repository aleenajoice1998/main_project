<?php  
require_once("admin_header.php");
require_once("connection.php");?>

<?php 
     $query="SELECT * from contact ";
   
   $result=select($query);
 ?>



<div align="center">
  <h3>Feed Backs</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
    
      <th style="color: white;background-color: purple;height: 100%" >Customer Name</th>
      
      <th style="color: white;background-color: purple;height: 100%">Email</th>
         
      <th style="color: white;background-color: purple;height: 100%">Message</th>
      <th style="color: white;background-color: purple;height: 100%" >Replay</th>
         
      
    </tr >
    <?php foreach ($result as $row): ?>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['msg'] ?></td>
      <td></td>
      
      
     
      
     
    </tr>
    <?php endforeach ?>
  </table>
</div>


<?php require_once("footer.php"); ?>






