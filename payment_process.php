<?php
include('connection.php');
include('user_header.php');

if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
    $_SESSION['login_id']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['login_id'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['login_id']."'");
}
?>