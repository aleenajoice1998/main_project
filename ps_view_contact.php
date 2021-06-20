<?php  
require_once("ps_header.php");
require_once("connection.php");?>

<?php 
     $query="SELECT * from contact ";
   
   $result=select($query);
 ?>



<div align="center">
  <h3>Feed Backs</h3>
  <table  class="table" border="1" style="width:80%;text-align: center;border-collapse: collapse;border-color: white;border-style: groove">
    <tr>
    
      <th style="background-color: orange;color: black">Customer Name</th>
      <th style="background-color: orange;color: black">Email</th>
      <th style="background-color: orange;color: black">Message</th>
        <th style="background-color: orange;color: black"></th>
  
      
    </tr >
    <?php foreach ($result as $row): ?>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['msg'] ?></td>
      
      <td><button style="background-color: purple;width: 80px;height: 50px"><a style="text-decoration: none;color: white" href="ps_replay.php?id=<?php echo $row['con_id'] ?>"> Send Replay</a> </button></td>
      
     
      
     
    </tr>
    <?php endforeach ?>
  </table>
</div>


<?php require_once("footer.php"); ?>






