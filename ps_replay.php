<?php include("ps_header.php")?>
<?php require_once ('connection.php'); ?>
<?php
//if(isset($_POST["add"]))
//{
 // $msg=$_POST['msg'];
if(isset($_GET['id']))
{
   $id = $_GET['id'];


        extract($_POST);
       
$qry="update `ad_replay` set msg='$msg' where con_id='$id'";
update($qry);
 
 //redirect('ps_view_contact.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=text]:focus {
  border: 3px solid #555;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

	</style>
</head>
<body background="images/p25.jpg">
	
</div>
	<form  method="POST">
	<center>
	<div style="background-color: white;width: 700;height: 800">	
	<h1>Add Replay</h1>
	<br><br>

	
<textarea rows="10" cols="20" name="msg"></textarea><br><br><br>
  
	<button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px "type="submit" name="add" ><span>Add</span></button>

	<button class="button" name="back" style="display: inline-block;border-radius: 4px;background-color: blue;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px " ><a style="text-decoration: none;color: white" href="ps_home.php">Back</a></button>
</div>
	</center>

		
	


</body>
</html>
<?php include('footer.php');
?>