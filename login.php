


<?php
session_start();
?>
<?php require_once("header.php"); ?>
<?php require_once("connection.php") ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="img js-fullheight" style="background-color: gray">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center">Have an account?</h3>
            <form method="POST" action="#" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group">
                <button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50">
                  
                    <a href="register.php" style="color: #fff">New User? Register Here!</a>
                   
                  </label>
                </div>
                
              </div>
            </form>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  </body>
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




























