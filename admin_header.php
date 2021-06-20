<?php 
  session_start();
  if(isset($_SESSION['login_id']))
  {
   

  }else
  {
    header('location:login.php');
    die();
  }
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
  <center>
    <div id="div1" style="background-color: white" >
    <img src="images/p29.jpg" >

<div class="navbar">
  <a href="admin_home.php">Home</a>
  <a href="admin_about.php">About</a>
  <a href="admin_view_contact.php">Contacts</a>

  <a href="admin_view_users.php">Users</a>
  <a href="logout.php">Logout</a>
   <div class="dropdown">
   <a style="float: right;color: yellow" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;color: red;font-size: 15"> <?php echo $_SESSION['username']; ?></a>
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
    </div>
  </div>

</center>
<form method="POST">

  
</form>

  
  </div>
   
</body>
</html>
