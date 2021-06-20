<?php 


$con=mysqli_connect('localhost','root','','my_pet');

function insert($query)
{
  mysqli_query($GLOBALS['con'],$query);
  $id=mysqli_insert_id($GLOBALS['con']);
  return $id;
}
function select($query)
{
  $result= mysqli_query($GLOBALS['con'],$query);
  $r=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $r;
}

function msg($m){
  echo "<script>alert('$m');</script>";
}


function redirect($link){
  echo "<script>window.location=('$link');</script>";
}

function delete($d)
{
   mysqli_query($GLOBALS['con'],$d);
}

function update($query)
{
  mysqli_query($GLOBALS['con'],$query);
}

 ?>