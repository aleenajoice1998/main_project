<?php require_once("header.php"); ?>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<center>
<style>
#sec1 {
    background: src(#bg-div);
}
#wrapper{
    position: relative;
    width: 100%;
    height: 100%;
}
.tcycle { 
   height: 100%;
   width: 100%; 
position: absolute;
    top: 0;
    left: 0;
    
}
.con { 
   height: 50%;
   width: 50%;
   
   position: relative;
    z-index: 100;
}
  .div1 {
  background-color: black;
  text-align: center;
  width: 200px;
   float:left; 
   height:100px;
    margin:50px;
}
.grid-container {
  display: grid;
  height: 1px;
  align-content: center;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  padding: 10px;
  padding-top: 300px;
  padding-bottom: 20px;
}

.grid-container > div {
  
  text-align: center;
  padding: 10px 0;
  font-size: 30px;
}


.mySlides {display:none;}
</style>
</head>
<body>


<div class="w3-content w3-section" style="max-width:100%">
  
  <img class="mySlides" src="images/pic_home1.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home3.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home7.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home9.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home6.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home2.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home4.png" style="width:100%">
  <img class="mySlides" src="images/pic_home23.jpg" style="width:100%">
  <img class="mySlides" src="images/pic_home11.jpg" style="width:100%">

 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


<body>
  
<section id="sec1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.tcycle.js"></script>

<div id="wrapper">
<div class="con">
  <div style="padding-top: 40">
  <form method="POST">

  <input class=" w3-round-xxlarge" style="border: solid;border-width: 1;border-color: blue;width: 300;height: 40"  type="search" name="str" required placeholder="Search...">
   <input  style="padding-top: 20px" type="image" src="images/search.png" width="40" height="40" name="submit">
</div>
</form>


<!--<p style="color:black; font-size: 30;padding-top: 10"> <b>
We are welcoming you to the new world of pets....
  This is a platform for all pet lovers....</b></p>-->

</div>

</div>

</script>
</head>
<body background-color="black">

  <div class="grid-container">

  <div style="border-style: groove;border-color: green"><h4 style="color: green;font-family: Lucida Calligraphy">Choose Your Pets</h4><a href="user_view_pet_home.php"><img src="images/pets.jpg" width="150" height="150"></a></div>
  <div style="border-style: groove;border-color: green"><h4 style="color: green;font-family: Lucida Calligraphy">Our Pet Services</h4><a href="user_view_service_home.php"><img src="images/service.jpg" width="150" height="150"></a></div>
  <div style="border-style: groove;border-color: green"><h4 style="color: green;font-family: Lucida Calligraphy">Pet Feeds</h4><a href="user_view_feed_home.php"><img src="images/feed.jpg" width="150" height="150"></a></div>  
  <div style="border-style: groove;border-color: green"><h4 style="color: green;font-family: Lucida Calligraphy">Pet Accessories</h4><a href="user_view_acc_home.php"><img src="images/acc.jpg" width="150" height="150"></a></div>
 
</div>
</body>
</center>



<!-- <?php
include("connection.php");
if(isset($_POST['submit']))
{
   $str=mysqli_real_escape_string($con,$_POST['str']);
   $q="select * from pet where type like'%$str%' or breed like'%$str%' ";
   $result=$con->query($q);
   if($result->num_rows > 0)
   {
    while($row=mysqli_fetch_assoc($result))
    {
    
      print_r($row);
    }

   }
   else
   {
    echo "no data";

   }
}
?>-->
<?php include('footer.php');
?>
   
