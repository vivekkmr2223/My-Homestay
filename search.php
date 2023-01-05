<?php
  session_start();
  if(isset($_SESSION["Uid"]))
  {
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .dropdown-menu{
            --bs-dropdown-link-active-bg:grey;
        }
        a{
            text-decoration:none;
            color:black;
        }
        a:hover{
            color:black;
        }
        .zoom {
            transition: transform .2s; 
            margin: 0 auto;
        }

        .zoom:hover {
        transform: scale(1.08);
        }
    </style>
</head>
  <body class="bg-white">
    
    <!-- header starts -->

    <?php 
      include 'header.php';
    ?>


    <?php 
    
        if(isset($_POST["search_submit"])){
          include 'db.php';
          $search_keyword=$_POST["search_keyword"];
          $token=strtok($search_keyword," ");
          $a=array();
          while($token!==false){
            $qry="SELECT hotel_id FROM hotel_details WHERE hotel_name LIKE '%".$token."%' OR hotel_country LIKE  '%".$token."%' OR hotel_state LIKE  '%".$token."%'  OR hotel_city LIKE  '%".$token."%'  OR hotel_local_address LIKE  '%".$token."%'";
            $result=mysqli_query($con,$qry);
            if(mysqli_affected_rows($con)>0){
              while($row=mysqli_fetch_array($result)){
                array_push($a,$row["hotel_id"]);
              }
            }
            $token=strtok(" ");
          }
          $b=array_unique($a);
              $i=1;
              $len=ceil(sizeof($b)/4);
              while($i<=$len){   
              echo "
                    <div class='container-fluid'>
                        <div class='row mt-5 ms-3'>
                        
                    ";

                    $k=4*$i-4;
                    for($j=$k;$j<$i*4;$j++){
                      if($j>sizeof($b)-1)
                      {
                        break;
                      }
                      $qry2="SELECT * FROM hotel_details WHERE hotel_id='$b[$j]'";
                      $result2=mysqli_query($con,$qry2);
                      $row2=mysqli_fetch_array($result2);
                      $h_id=$row2["user_hotel_id"];
      
                      $qry3="SELECT * FROM user_details WHERE user_id='$h_id'";
                      $result3=mysqli_query($con,$qry3);
                      $row3=mysqli_fetch_array($result3);
                      $u_id=$row3["user_id"];
      
                      $qry4="SELECT * FROM hotel_img WHERE user_img_id='$u_id'";
                      $result4=mysqli_query($con,$qry4);
                      

                      
                      while($row4=mysqli_fetch_array($result4)){
                      $image_id=$row4["user_img_id"];
                      echo "
                      <div class='col-sm-3'>
                          <div class='card border-dark zoom' style='width: 20rem;'>
                              <img src='uploads/".$row4["hotel_img"]."' class='card-img-top' alt='...' style='height:220px;width:100%;'>
                              <div class='card-body'>
                              <h5 class='card-title'>".$row2["hotel_name"]."</h5>
                              <p class='card-text'>".$row2["hotel_country"]."</p>
                              <p class='card-text'>".$row2["hotel_state"].", ".$row2["hotel_city"]."</p>
                              <p class='card-text'><span class='fw-bold'>&#8377;".$row2["hotel_price"]." nignt</span></p>
                              <a href='view_hotel.php?id=".$image_id."' class='btn btn-dark' style='border-radius:0px;'>Book Now</a>
                              </div>
                          </div>
                      </div>
                      ";
                      break;
                    }
                      // search results starts

      
                    }
                    $i++;
                    echo "
                    </div>
                    </div>
                  ";
                }
                    
                }
                  
  

    ?>
    <?php
        include 'footer.php';
        echo"
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
        </body>
      </html>
        ";
  }
  else{

    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .dropdown-menu{
            --bs-dropdown-link-active-bg:grey;
        }
        a{
            text-decoration:none;
            color:black;
        }
        a:hover{
            color:black;
        }
        .zoom {
           
            
            transition: transform .2s; 
            
            margin: 0 auto;
        }

        .zoom:hover {
        transform: scale(1.08);
        }
    </style>
</head>
  <body class="bg-white">
    
    <!-- header starts -->

    <div class="container-fluid border-bottom shadow">
        <div class="row mt-3">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col logo"><a href="index.php"><img src="images/logo.jpeg" class="img-fluid" alt="" style="height:50px;width:50px;"></a></div>
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-4">
                
            <form action="search.php" method="POST" name="search_form">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Search Website" name="search_keyword" id="" value="" style="border-left: 0px;">
                    <input type="submit" class="btn btn-dark fw-bold text-light pe-4 ps-4" name="search_submit" id="search_btn" style="border-radius: 0px;" value="Search">
                </div>
            </div>
             </form>
            
            <div class="col mt-2 ps-5 d-none d-md-block"><a class="text-dark" href="become_a_host_front.php" style="text-decoration:none;">Become a Host</a></div>
            <div class="col ">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle border shadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button"><a href="signup.php">Sign Up</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="login.php">Log In</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="become_a_host_front.php">Host your Home</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="help.php">Help</a></button></li>
                    </ul>
                </div>
            </div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
    </div>

    <!-- header ends -->

    
    
    <?php

if(isset($_POST["search_submit"])){
  include 'db.php';
  $search_keyword=$_POST["search_keyword"];
  $token=strtok($search_keyword," ");
  $a=array();
  while($token!==false){
    // echo $token;
    $qry="SELECT hotel_id FROM hotel_details WHERE hotel_name LIKE '%".$token."%' OR hotel_country LIKE  '%".$token."%' OR hotel_state LIKE  '%".$token."%'  OR hotel_city LIKE  '%".$token."%'  OR hotel_local_address LIKE  '%".$token."%'";
    $result=mysqli_query($con,$qry);
    if(mysqli_affected_rows($con)>0){
      while($row=mysqli_fetch_array($result)){
        array_push($a,$row["hotel_id"]);
      }
    }
    $token=strtok(" ");
  }
  $b=array_unique($a);
      $i=1;
      $len=ceil(sizeof($b)/4);
      while($i<=$len){   
      echo "
            <div class='container-fluid'>
                <div class='row mt-5 ms-3'>
                
            ";

            $k=4*$i-4;
            for($j=$k;$j<$i*4;$j++){
              if($j>sizeof($b)-1)
              {
                break;
              }
              $qry2="SELECT * FROM hotel_details WHERE hotel_id='$b[$j]'";
              $result2=mysqli_query($con,$qry2);
              $row2=mysqli_fetch_array($result2);
              $h_id=$row2["user_hotel_id"];

              $qry3="SELECT * FROM user_details WHERE user_id='$h_id'";
              $result3=mysqli_query($con,$qry3);
              $row3=mysqli_fetch_array($result3);
              $u_id=$row3["user_id"];

              $qry4="SELECT * FROM hotel_img WHERE user_img_id='$u_id'";
              $result4=mysqli_query($con,$qry4);
              

              
              while($row4=mysqli_fetch_array($result4)){
              $image_id=$row4["user_img_id"];
              echo "
              <div class='col-sm-3'>
                  <div class='card border-dark zoom' style='width: 20rem;'>
                      <img src='uploads/".$row4["hotel_img"]."' class='card-img-top' alt='...' style='height:220px;width:100%;'>
                      <div class='card-body'>
                      <h5 class='card-title'>".$row2["hotel_name"]."</h5>
                      <p class='card-text'>".$row2["hotel_country"]."</p>
                      <p class='card-text'>".$row2["hotel_state"].", ".$row2["hotel_city"]."</p>
                      <p class='card-text'><span class='fw-bold'>&#8377;".$row2["hotel_price"]." nignt</span></p>
                      <a href='view_hotel.php?id=".$image_id."' class='btn btn-dark' style='border-radius:0px;'>Book Now</a>
                      </div>
                  </div>
              </div>
              ";
              break;
            }
              // search results starts


            }
            $i++;
            echo "
            </div>
            </div>
          ";
        }
            
        }

        include 'footer.php';
        echo"
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
        </body>
      </html>
        ";
    }
    ?>