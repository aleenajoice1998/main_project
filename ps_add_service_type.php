<?php include("ps_header.php")?>
<?php require_once ('connection.php'); ?>
<?php
if(isset($_POST["add"]))
{
  $pet_type=$_POST['pet_type'];

$c_name=$_POST['b_name'];


  
        extract($_POST);
       
$qry="INSERT INTO `ser_type`( `pet_type`,`ser_name`) VALUES ('$pet_type','$ser_name')";
insert($qry);
 redirect('ps_view_ser_type.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Service</title>
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
	<form action="ps_add_ser_type.php" method="POST">
	<center>
	<div style="background-color: white;width: 700px;height: 800px">	
	<h1>Pet Breed</h1>
	<br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Pet Category</b></label> <select name="pet_type"  style="width: 280px;height: 40px">
    <option >Choose Pet Category</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option>
</select><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Service Name </b></label><input type="text" name="b_name"  required><br><br>
	
	<br><br>
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