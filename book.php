<?php
  session_start();
  if(isset($_SESSION["Uid"]))
  {
     
    include 'db.php';
    
     if(isset($_REQUEST["btnsubmit"])){
     $hotel_id=$_SESSION["hotel_id"];
     $user_full_name=$_REQUEST["user_full_name"];
     $user_phone_no=$_REQUEST["user_phone_no"];
     $user_country=$_REQUEST["user_country"];
     $user_state=$_REQUEST["user_state"];
     $user_city=$_REQUEST["user_city"];
     $no_of_guest=$_REQUEST["no_of_guest"];
     $arrival_date=$_REQUEST["arrival_time"];
     $leaving_date=$_REQUEST["leaving_time"];
     $no_of_rooms=$_REQUEST["no_of_rooms"];
     $uid=$_SESSION["Uid"];
     
     
     $qry="INSERT INTO reservation_details() VALUES (null,'$uid','$hotel_id','$user_full_name','$user_phone_no','$user_country','$user_state','$user_city','$no_of_guest','$arrival_date','$leaving_date','$no_of_rooms')";
     $result=mysqli_query($con,$qry);
     
     header("Location:pdf.php");
     }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
          .image{
          background-image:url('images/header-bg-3.png');
          background-repeat:no-repeat ;
     }
     </style>
     <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
     <?php
        include 'header.php';
     ?>
  <div class="container-fluid image " >
     <div class="row">
          <div class="col text-white fw-bold ps-5 text-center mt-3" style="font-size:70px;">Liked What You Saw?</div>
     </div>
     <div class="row">
          <div class="col text-white fw-bold ps-4 text-center mt-3" style="font-size:60px;">BOOK NOW!!!</div>
       
     </div>
  </div>

  <form action="book.php" method="get" name="book_form">
  <div class='container mt-5' style="background-color:#f7f7f7;">
          
               <div class="row pt-3">
                    <div class="col-1"></div>
                      <div class="col">
                        <label for="user_full_name" >Name</label>
                        <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="user_full_name" id="user_full_name" value="" placeholder="Enter your name">
                      </div>
                      <div class="col">
                         <label for="user_phone_no" >Phone no</label>
                         <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black" name="user_phone_no" id="user_phone_no" value="" placeholder="Ex. 9399660159">
                      </div>
                      <div class="col-1"></div>
               </div>
               
               <div class="row mt-3">
                    <div class="col-1"></div>
                    <div class="col">
                         <label for="user_country" >Country</label>
                         <input type="text" class="form-control"style="border-radius:0px; border: 1px solid black" name="user_country" id="user_country" value="" placeholder="Enter your country name">
                    </div>
                    <div class="col">
                         <label for="user_state" >State</label>
                         <input type="text" class="form-control"style="border-radius:0px; border: 1px solid black" name="user_state" id="user_state" value="" placeholder="Enter your state">
                    </div>
                    <div class="col-1"></div>
               </div>
               <div class="row mt-3">
                    <div class="col-1"></div>
                    <div class="col">
                         <label for="user_city" >City</label>
                         <input type="text" class="form-control"style="border-radius:0px; border: 1px solid black" name="user_city" id="user_city" value="" placeholder="Enter your city">
                    </div>
                    <div class="col">
                         <label for="no_of_rooms" >How many rooms:</label>
                         <input type="number" class="form-control"style="border-radius:0px; border: 1px solid black" name="no_of_rooms" id="no_of_rooms" value="" placeholder="No of rooms">
                    </div>
                    <div class="col-1"></div>
               </div>
               <div class="row mt-3">
                    <div class="col-1"></div>
                    <div class="col">
                         <label for="no_of_guest" >How many guest:</label>
                         <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black"name="no_of_guest" id="no_of_guest" value="" placeholder="No of guests">
                    </div>
                    <div class="col">
                         <label for="arrival_time " >Arrival time</label>
                         <input type="date" class="form-control" style="border-radius:0px; border: 1px solid black"name="arrival_time" id="arrival_time" value="">
                    </div>
                    <div class="col-1"></div>
               </div>
               <div class="row mt-3 pb-3">
                    <div class="col-1"></div>
                    <div class="col">
                         <label for="leaving_time" >Departure time</label>
                         <input type="date" class="form-control" style="border-radius:0px; border: 1px solid black" name="leaving_time" id="leaving_time" value="" >
                    </div>
                    <div class="col"></div>
                    <div class="col-1"></div>
               </div>

               
            </div>
            <div class="row mt-4">
         <div class="col"></div>
          <div class="col-2"><input type="submit" class="btn  btn-lg form-control text-light fw-bold fs-5" name="btnsubmit" value="Save" style="border-radius:0px; background-color:black;"></div>
     <div class="col"></div>
   </div>
          </form>







          <?php
            include 'footer.php';
          }
          else{
            header("Location:login.php");
          }
          ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>