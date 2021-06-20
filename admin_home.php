<?php include("admin_header.php") ?>
<?php include('footer.php');
?>
<html>
<head>
	<style type="text/css">
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
<body>
	<center>
<div style="height: 200;width: 100%;padding-top: 200">
	<button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 250px;height: 250px;transition: all 0.5s; cursor: pointer;margin: 5px " ><span><a href="admin_view_users.php" style="text-decoration: none;color: white">Users</a> </span></button>

	<button class="button" name="back" style="display: inline-block;border-radius: 4px;background-color: blue;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 250px;height: 250px;transition: all 0.5s; cursor: pointer;margin: 5px " ><span><a style="text-decoration: none;color: white" href="admin_view_contact.php">
  Contacts</a></span></button>
  
</div>
</center>
</span>
</button>
</div>
</center>
</body>
</html>