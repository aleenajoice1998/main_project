<?php include("ps_header.php")?>
<?php require_once ('connection.php'); ?>

<?php
if(isset($_POST["add"]))
{
$type=$_POST['type'];
$breed=$_POST['breed'];
$gender=$_POST['gender'];
$color=$_POST['color'];

$age=$_POST['age'];
$description=$_POST['description'];
$price=$_POST['price'];

$img=$_POST['img'];

	
       	extract($_POST);
       
$qry="INSERT INTO `pet`(`type`, `breed`,`gender`, `color`,`age`,`description`, `price`, `img`, `status`) VALUES ('$type','$breed','$gender','$color','$age','$description','$price','$img','Not Booked')";
insert($qry);
 
 redirect('ps_view_pet.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
	</script>
	<script type="text/javascript">
 $(document).ready(function () {

      var currentDate = new Date();
      $('.dob').datepicker({
      format: 'dd/mm/yyyy',
      autoclose:true,
      endDate: "currentDate",
      maxDate: currentDate
      }).on('changeDate', function (ev) {
         $(this).datepicker('hide');
      });
      $('.dob').keyup(function () {
         if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
         }
      });
   });





</script>
	<title>Add Pet</title>
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
	<h1>Add Pet</h1>
	<br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Category </b></label> <select name="type"  style="width: 280px;height: 40px">
		<option>Choose Pet Type</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option>
</select><br><br>


	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Breed </b></label><input type="text" name="breed"  required><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Gender </b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input  type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Color </b>
  </label> <input type="text" name="color"   required><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Age </b></label> <input  style="width: 250;height: 50" type="text" name="age"  required><br><br>

	
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Description </b></label> <textarea cols="37" rows="4" type="text" name="description"  required></textarea><br><br>
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Price </b></label> <input type="text" name="price"  required><br><br>
	
	<label style="font-family:Courier New;display: inline-block;text-align: left;;width: 150px"><b>Image </b></label> <input type="file" name="img" accept="image/*"  required>


	
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