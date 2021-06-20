<?php include("ps_header.php")?>
<?php require_once ('connection.php'); ?>
<?php
if(isset($_POST["add"]))
{
$category=$_POST['category'];
$s_type=$_POST['s_type'];
$sduration=$_POST['s_duration'];
$rate=$_POST['rate'];

	
       	extract($_POST);
       
$qry="INSERT INTO `service`(`category`, `s_type`, `s_duration`, `rate`,`status`) VALUES ('$category','$s_type','$s_duration','$rate','o')";
insert($qry);

 redirect('ps_view_service.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
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
<body background="images/p26.jpg">
	
</div>
	<form  method="POST">
	<center>	
		<div style="background-color: white;width: 700px;height: 500px">
	<h1>Services</h1>
	<br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b> Pet Category </b></label> <select name="category" style="width: 280px;height: 40px">
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option>
</select><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Service Type </b></label> <select name="s_type" style="width: 280px;height: 40px">
    <option>Choose Type Of Service</option>
  <option value="Training">Training</option>
  <option value="Grooming">Grooming</option>
 
</select><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Service Duration </b></label><input type="text" name="s_duration"   required><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Rate </b></label> <input type="text" name="rate"  required><br><br>
	


	
	<br><br>
	<button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px "type="submit" name="add" ><span>Add</span></button>

	<button class="button" name="back" style="display: inline-block;border-radius: 4px;background-color: blue;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px " ><a style="text-decoration: none;color: white" href="ps_home.php">Back</a></button>

	</center>

		
	


</body>
</html>
<?php include('footer.php');
?>