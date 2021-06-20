<?php require_once("header.php"); ?>
<?php require_once ('connection.php'); ?>
<?php
if(isset($_POST["register"]))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$password=$_POST['password'];
  
        extract($_POST);
        $query="insert into login values(null,'$email','$password','user','o')";
  $login_id=insert($query);
$qry="INSERT INTO `register`(`login_id`, `name`, `email`, `phone`, `address`,`pin`) VALUES ('$login_id','$name','$email','$phone','$address','$pin')";
insert($qry);
 msg("You Are Successfully Registered");
 redirect('login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){  
   $('#email').blur(function(){

     var email = $(this).val();

     $.ajax({
      url:'usercheck.php',
      method:"POST",
      data:{email:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">username not available</span>');
        $('#register').attr("disabled", true);
        document.getElementById('email').value="";
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#register').attr("disabled", false);
       }
      }
     })

  });
 });  

function validation1()
{
var name=document.getElementById("name");
var nm=/^[a-zA-Z\s]+$/;
  if(!name.value.match(nm))
     {
  alert("Please enter valid name");
        name.value="";
        name.focus();
  return false;
     }
  }
  function validation2()
     {
     var hname=document.getElementById("address");
     var nm=/^[a-zA-Z\s]+$/;
     if(!hname.value.match(nm))
        {
     alert("Please enter valid Address");
           hname.value="";
           hname.focus();
     return false;
        }
}
function validation3()
  {
var email = document.getElementById("email");
var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
  if(!email.value.match(pat))
     {
  alert("Please enter valid email");
        email.value="";
        email.focus();
  return false;
      }
}
function validation4()
{
var ph =document.getElementById("phone");
var phone =/^(9|8|7|6)[0-9]{9}$/;
      if(!ph.value.match(phone))
     {
    alert("enter valid phone number");
        ph.value="";
        ph.focus();
         return false;
     }
     }
  
  function validation6()
  {
    var pass =document.getElementById("password");
    var passw=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#\$%\^&\*]).{6,}/;
    if(!pass.value.match(passw))
     {
    alert("enter valid Password");
        pass.value="";
        pass.focus();
         return false;
     }
  }
  function validation7()
{
var ph =document.getElementById("pin");
var phone =/^(6)[0-9]{5}$/;
      if(!ph.value.match(phone))
     {
    alert("enter valid pin number");
        ph.value="";
        ph.focus();
         return false;
     }
     }
  
  
  </script>
  <style>
  .invalid { border-color: red; }
  #error { color: red }
</style>

  <title>Sign Up</title>
  <style type="text/css">
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin:0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;

}
input[type=text]:focus {
  border: 3px solid #555;
}
input[type=textarea] {
  
  
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;

}
input[type=textarea]:focus {
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
<body background="images/p24.jpg">
  
</div>
  <form action="register.php" method="POST">
  <center>
  <div style="background-color: white;width: 700;height: 600">  
  <h1>Sign Up</h1>
  <label style="font-family:Courier New"><b>Name </b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <input type="text" name="name" id="name" onChange="validation1()" required><br><br>
  <label style="font-family:Courier New"><b>Email</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" name="email" id="email" onChange="validation3()"required><br><br>
  <label style="font-family:Courier New"><b>Phone </b></label>&nbsp&nbsp&nbsp&nbsp&nbsp
   <input type="text" name="phone" id="phone" onChange="validation4()"  required><br><br>
  <label style="font-family:Courier New"><b>Address </b></label>&nbsp
   <textarea  cols="37" rows="5" type="textarea" name="address" id="address" onChange="validation2()"  required></textarea><br><br>
   <label style="font-family:Courier New"><b>PIN </b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <input type="text" name="pin" id="pin" onChange="validation7()"  required><br><br>
  <label style="font-family:Courier New"><b>Password</b> </label>
  <input type="text" name="password" id="password" onChange="validation6()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
  
  <br><br>
  <button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px "type="submit" name="register" ><span>Register</span></button>

  <button class="button" name="back" style="display: inline-block;border-radius: 4px;background-color: blue;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px " ><a style="text-decoration: none;color: white" href="home.php">Back</a></button>


</div>

  </center>

  
  


</body>
</html>
<?php include('footer.php');
?>






