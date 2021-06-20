login old




<?php
session_start();
?>
<?php require_once("header.php"); ?>
<?php require_once("connection.php") ?>
<html>
<head>
  <style type="text/css">
    <!DOCTYPE html>
<html>
<head>
<style>
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
input[type=text] {
  width: 100%;
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

input[type=password]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}


</style>

<center>
</head>
<body background="images/p10.jpg" >
  
<form method="POST">
    
  </div>

<div style="margin-right:0px;padding-top:30px;background:white;float:right;padding-left:50px;padding-right:50px;padding-bottom:60px;border-style: solid;border-color: yellow">
  
   <img src="images/log.jpg" width="100" height="100">
     <input  type="text" size="30" placeholder='username' name="username" required><br><br>
     <input type="password" size="30" placeholder="password" name="password" required><br>
    <a href="register.php" style="text-decoration: none;">New User? Register Here!</a><br><br>

<button class="button" style="display: inline-block;border-radius: 4px;background-color: green;
  border: none;color: #FFFFFF;text-align: center;font-size: 20px;padding: 10px;width: 150px;transition: all 0.5s; cursor: pointer;margin: 5px "type="submit" name="login" ><span>Log In</span></button>


  <button  class="button" style=" display: inline-block;border-radius: 4px;background-color: blue;border: none; color: #FFFFFF; text-align: center; font-size: 20px; padding: 10px; width: 150px; transition: all 0.5s;  cursor: pointer;  margin: 5px;"  ><a style="text-decoration: none;color: white" href="home.php"> Back</button></a>

  </div>

</td>
</tr>
 </table>
 </div>
</form>
</html>




<?php

     if(isset($_POST['login']))
     {
      extract($_POST);
        $q="select * from login where username='$username' and password='$password'";
      $result=select($q);
      if(sizeof($result)>0){
        $usertype=$result[0]['utype'];
               $_SESSION['login_id']=$result[0]['login_id'];
               $_SESSION['username']=$result[0]['username'];
        if ($usertype=='admin'){
          
          redirect('admin_home.php');
          die();

        }elseif($usertype=='ps'){
          
          redirect('ps_home.php');
          die();
        }
               elseif($usertype=='user'){
                    
                    redirect('user_home.php');
               }
               die();

      }else{
        msg('invalid username or password');
      }


     }
     




 ?>
<?php include('footer.php');
?>


