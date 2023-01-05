<?php
session_start();
?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Log In</title>
    <script src='https://kit.fontawesome.com/467d4a99f6.js' crossorigin='anonymous'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>
    <form action="login.php" method="POST" name="loginform">
    <div class='container-fluid '>
      <div class='row mt-3 '>
        <div class='col d-none d-md-block'></div>
        <div class='col pt-4 bg-light text-center shadow-sm'>
          <img src='images/logo.jpeg' alt='' class='logo' height='100px' width='100px'>
          <h3 class='pt-3 pb-4'>Welcome To My Homestay</h3>
          <input type='email' name='loginmail' class='form-control mt-4' placeholder='Email'>
          <input type='password' name='loginpass' class='form-control mt-3'  placeholder='Password'>
          <div class='container-fluid'>
            <div class='row'>
              <div class='col mb-3 form-check mt-3'>
              </div>
              <div class='col '></div>
              <div class='col mt-3'></div>
            </div>
          </div>
          <input type='submit' class='btn btn-lg form-control mb-3  text-light fw-bold' style='background-color:black;' name='btnlogin' value='Log In' ><hr>
          <span class='mb-5'>Don't have an account?<a href='signup.php'>Sign Up</a></span>
        </div>
        
        <div class='col d-none d-md-block'></div>
      </div>
    </div>
    </form>
    <?php
          
          if(isset($_REQUEST["btnlogin"])){
            $login_email=$_REQUEST["loginmail"];
            $login_pass=$_REQUEST["loginpass"];
            $flag=0;
            include 'db.php';
            $qry="SELECT * FROM user_details WHERE user_email='$login_email'" ;
            $result=mysqli_query($con,$qry);
            while ($row=mysqli_fetch_array($result)) {
              if(password_verify($login_pass,$row["user_password"])){
                $flag=1;
                $_SESSION["Email"]=$row["user_email"];
                $_SESSION["Uid"]=$row["user_id"];
                header("Location: index.php");
                exit();
              }
            }
            if($flag==0)
            {
            echo"<div class='container-fluid'>
            <div class='row'>
            <div class='col'></div>
            <div class='col'>
            <p class='text-danger mt-3 text-center'>Invalid Email or password</p>
            </div>
            <div class='col'></div>
            </div>
          </div>
          ";
            }	
          }
          
          ?> 

          
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
  </body>
</html>