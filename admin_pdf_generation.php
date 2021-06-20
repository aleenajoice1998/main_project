

<?php  include 'connection.php'; include 'user_header.php'; include 'pdf/vendor/autoload.php' ?>

<div class="container" style="padding-left: 200">

<div class="my-3" >

     
      
            <h3>Users</h3>

            

     

      

      <?php 
  
      $qry="select * from  register ";
      $result = $con->query($qry);

      if($result->num_rows > 0) {
          $count=1;
          $html='<table >';
          $html.='<tr><td>Name</td><td>Email</td><td>Phone</td><td>Address</td><td>Pin</td></tr>';

          

  while($row = $result->fetch_assoc()) {
  
     $html.='<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['address'].'</td><td>'.$row['pin'].'</td></tr>';
 }
 $html.='</table>';
      
    

}else{
    $html="data not found";
}
    $mpdf=new Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $file='media/'.time().'.pdf';
    $mpdf->output($file,'D');


    ?>

<?php include('footer.php');
?>
    
 
