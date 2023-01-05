<?php
  session_start();
  if(isset($_SESSION["Uid"]))
  {
    $uid=$_SESSION["Uid"];
    include 'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/779d150683.js" crossorigin="anonymous"></script>
  </head>
  <body>
     <div class="container-fluid  mb-5">
      <div class="row">
          <div class="col-2 d-none d-md-block"></div>
          <div class="col-8 border">
            <div class="row">
              <div class="col-1"></div>
              <div class="col">
               <div class="row">
                    <h3 class=" pt-3"> <img src="images/logo.jpeg" height="30px" width="30px" alt=""> &nbsp;Homestay</h3>
                    <h1 class=" pt-3 text-center fw-bold" style='color : #662020;'> Hotel Confirmation Voucher</h1>
               </div>
               <div class="row">
                    <?php
                         $qry_username_details="SELECT * FROM user_details WHERE user_id='".$uid."'";
                         $result_username_details=mysqli_query($con,$qry_username_details);
                         $row_username_details=mysqli_fetch_array($result_username_details);

                         $qry_hotel_details="SELECT * FROM hotel_details WHERE hotel_id=".$_SESSION["hotel_id"]."";
                         $result_hotel_details=mysqli_query($con,$qry_hotel_details);
                         $row_hotel_details=mysqli_fetch_array($result_hotel_details);

                         $qry_res_details="SELECT * FROM reservation_details WHERE user_id='".$_SESSION["Uid"]."' AND hotel_id='".$_SESSION["hotel_id"]."'";
                         $result_res_details=mysqli_query($con,$qry_res_details);
                         $row_res_details=mysqli_fetch_array($result_res_details);

                    ?>
                    <h4 class='pt-5'>Guest UserName:- <?php echo $row_username_details["user_name"];?></h4>
                    <h5 class='pt-2'>Email:- <?php echo $row_username_details["user_email"];?></h5>
               </div><hr>
               <div class="row">
                    <div class="col-md-6">
                    <h4 class="pt-3"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<?php echo $row_hotel_details["hotel_name"];?></h4><br>
                    <p><?php echo $row_hotel_details["hotel_local_address"];?>, <?php echo $row_hotel_details["hotel_city"];?>, <?php echo $row_hotel_details["hotel_state"];?>, <?php echo $row_hotel_details["hotel_country"];?><br>phone no. 8766388363</p>
                    </div>
                    <div class="col-md-3 pt-3">
                    <h5 class='fw-bold'> Check in</h5>
                    <h5 class="pt-4"><?php echo $row_res_details["arrival_date"];?></h5>
                    </div>
                    <div class="col-md-3 pt-3">
                    <h5 class='fw-bold'>Check out</h5>
                    <h5 class="pt-4"><?php echo $row_res_details["leaving_date"];?></h5>
                    </div>
               </div><hr>
               <div class="row">
                  <div class="col">
                    <table class='table table-responsive' border="0" cellspacing="0" cellpadding="0" align="center">
                         <tr align="center">
                         <td><p class="pt-2">Homestay Booking Id:-</p>
                         <br><p class="pt-2">Hotel Booking Id:-</p>
                         <br><p class="pt-2">Receipt Number:- </p>
                         <br><p class="pt-2">Date of booking:-</p>
                         <br><p class="pt-2">Room details:- </p>
                         <td><p class="pt-2 fw-bold">MPFH<?php echo $_SESSION["Uid"];?></p><br>
                              <p class="pt-2 fw-bold">MPFH<?php echo $_SESSION["hotel_id"];?></p><br>
                              <p class="pt-2 fw-bold">MPFHR<?php echo $row_res_details["reservation_id"];?></p><br>
                              <p class="pt-2 fw-bold"><?php echo date("Y-m-d") ?></p><br>
                              <p class="pt-2 fw-bold"><?php echo $row_res_details["no_of_guest"];?> Guests, <?php echo $row_res_details["no_of_rooms"];?> Bedroom, <?php echo $row_hotel_details["hotel_room_no_beds"];?> Beds</p><br>
                         </td>
                    </tr>
                    </table>
                    </div>
               </div>
               <div class="row">
                <div class="col">
                  <p class="fw-bold "> Description of services: Reservation service for accommondation</p><hr>
                    <p class="pt-1 fw-bold ">Congratulation! You have just booked a room in <?php echo $row_hotel_details["hotel_name"];?> by homestay.Traditionally, a hotel property management system was defined as a system that enabled a hotel or group of hotels to manage front-office capabilities, such as booking reservations, guest check-in/checkout, room assignment, managing room rates, and billing.</p>
                </div>
              </div>
            </div>
          </div>
            </div>
               <div class="row mt-5">
                    <div class="col-5"></div>
                    <div class="col"><input type = "button" value = "Print" class='btn btn-dark form-control' onclick = "window.print()" /></div>
                    <div class="col-5"></div>
               </div>
          <div class="col-2 d-none d-md-block"></div>
          </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<?php
  }
  else{
    header("Location:login.php");
}
?>