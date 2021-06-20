<?php include("ps_header.php")?>
<?php require_once ('connection.php'); ?>
<?php
if(isset($_POST["add"]))
{
  $category=$_POST['category'];
$acc_name=$_POST['acc_name'];
$description=$_POST['description'];
$rate=$_POST['rate'];
$stock=$_POST['stock'];
$img=$_POST['img'];

  
        extract($_POST);
       
$qry="INSERT INTO `accessories`(`category`,`acc_name`, `description`, `rate`, `stock`,`img`,`status`) VALUES ('$category','$acc_name','$description','$rate','$stock','$img','In stock')";
insert($qry);
 
 redirect('ps_view_accessories.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accessories</title>
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
	<div style="background-color: white;width: 700px;height: 800px">	
	<h1>Accessories</h1>
	<br><br>

  <label style="font-family:Courier New;display: inline-block;text-align: left;width: 150px"><b>Category </b></label> <select  name="category"  style="width: 280px;height: 40px">
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option>
</select><br><br>
	
	<label  style="font-family:Courier New;display: inline-block;text-align: left;width: 150px"><b>Product Name </b></label><input type="text" name="acc_name"  required><br><br>
  <label   style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Description </b></label> <input type="text" name="description"  required><br><br>
  
	<label  style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Rate </b></label> <input type="text" name="rate"  required><br><br>
	
	<label   style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Stock </b></label> <input type="text" name="stock"  required><br><br>
	<label   style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Image </b></label> <input type="file" accept="image/*" name="img"  required>


	
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