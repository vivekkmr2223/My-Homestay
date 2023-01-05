
<?php
 error_reporting(0);
session_start();
include 'db.php';
$id=$_REQUEST["id"];
    $qry="SELECT * FROM hotel_details WHERE user_hotel_id='$id'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($result);

    $qry2="SELECT * FROM user_details WHERE user_id='$id'";
    $result2=mysqli_query($con,$qry2);
    $row2=mysqli_fetch_array($result2);

    $qry3="SELECT hotel_img FROM hotel_img WHERE user_img_id='$id'";
    $result3=mysqli_query($con,$qry3);
    $a=array();
    while($row3=mysqli_fetch_array($result3)){
        
        array_push($a,$row3["hotel_img"]);

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/779d150683.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>view hotel</title>
  </head>
  <body>
  <?php include 'header.php'; ?>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-1"></div>
            <div class="col"><h1><?php echo $row["hotel_name"]; ?></h1></div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
           <?php
            echo"<div class='col pt-3'>
            <img src='uploads/".$a[0]."' class='img-fluid rounded' alt=''>
          </div>
          <div class='col'>
            <div class='row pt-3'>
                <div class='col'><img src='uploads/".$a[1]."' class='img-fluid rounded  ' alt='' ></div>
                <div class='col'><img src='uploads/".$a[2]."' class='img-fluid rounded ' alt='' ></div>
            </div>
            <div class=' row mt-2 pt-3'>
                <div class='col'><img src='uploads/".$a[3]."' class='img-fluid rounded ' alt=''></div>
                <div class='col'><img src='uploads/".$a[4]."' class='img-fluid rounded ' alt='' ></div>
            </div>
          </div>";
          $_SESSION["hotel_id"]=$row["hotel_id"];
          
            ?> 
            <div class="col-1"></div>
            <div class="row">
            <div class="col-1"></div>
            <div class="col mt-3">
            <h2>Entire cottage hosted by <?php echo $row2["user_name"]; ?></h2>
            <h4 class="mt-3"><?php echo $row["hotel_room_no_guest"]; ?>:guests  <?php echo $row["hotel_room_no_bedroom"]; ?>:bedroom <?php echo $row["hotel_room_no_beds"]; ?>:bed </h4>
            </div>
            <div class="col-1"></div>
        </div>
        </div>
        
        <div class="row pt-4">
            <div class="col-1"></div>
            <div class="col">
            <p class="fs-1 fw-bold" style="text-decoration:underline;">Location:</p>
            <p class='card-text fs-4'><?php echo $row["hotel_country"] ?></p>
            <p class='card-text fs-4'><?php echo $row["hotel_local_address"] ?>,<?php echo $row["hotel_city"] ?>,<?php echo $row["hotel_state"] ?> </p>
            <p class='card-text fs-4'><span class='fw-bold'>&#8377; <?php echo $row["hotel_price"] ?> night</span></p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            
          <div class='col' > <span><a href='book.php' class='btn btn-dark btn-lg form-control fw-bold fs-4 pt-3 pb-3'>Make Reservation</a></span> </div>
            
            
            <div class="col"></div>
        </div>
    </div>
    <?php include 'footer.php';?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>