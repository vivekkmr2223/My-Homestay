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
          .image{
          background-image:url('images/header-bg-1.png');
          background-repeat: no-repeat;
     }
     
     </style>
  </head>
  <body>
    <?php
      include 'header.php';
    ?>
  <div class="container-fluid image " >
     <div class="row">
          <div class="col text-white fw-bold ps-5 mt-3 text-center" style="font-size:80px;">Want To Go Big?</div>
     </div>
     <div class="row">
          <div class="col text-white fw-bold ps-4 text-center mt-3" style="font-size:50px;">Start Renting Now On HOMESTAY!</div>
     </div>
  </div>
  <form action="become_a_host_front.php" method="POST" name="hosting_form" enctype="multipart/form-data">
    <div class="container mt-5 pt-5 pb-5" style="background-color:#f7f7f7;" >
    
      <div class="row">
      <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_name">Hotel Name</label>
          <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_name" id="hotel_name" value="" placeholder="Enter Hotel/Property name">
        </div>
        <div class="col">
          <label for="hotel_country_name" >Country Name</label>
          <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="country_name" id="country_name" value="" placeholder="Enter Country">
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-3">
      <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_state_name" >State Name</label>
          <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_state_name" id="hotel_state_name" value="" placeholder="Enter State">
        </div>
        <div class="col">
        <label for="hotel_city_name" >City Name</label>
          <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_city_name" id="hotel_city_name" value="" placeholder="Enter City">
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_local_address" >Local Address</label>
          <input type="text" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_local_address" id="hotel_local_address" value="" placeholder="Enter Local Address">
        </div>
        <div class="col">
          <label for="hotel_price" >Price(INR)</label>
          <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_price" id="hotel_price" value="" placeholder="Enter price(INR)">
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_guests" >Guests Allowed</label>
          <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_guests" id="hotel_guests" value="" placeholder="Enter number of guests allowed">
        </div>
        <div class="col">
          <label for="hotel_beds" >Beds</label>
          <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_beds" id="hotel_beds" value="" placeholder="Enter number of beds">
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_bedroom" >Bedroom</label>
          <input type="number" class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_bedroom" id="hotel_bedroom" value="" placeholder="Enter number of bedrooms">
        </div>
        <div class="col"></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for="hotel_description" >Description</label>
          <textarea class="form-control" style="border-radius:0px; border: 1px solid black" name="hotel_description" id="hotel_description" rows="5" value="" placeholder="Description"></textarea>
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      <div class="row mt-5">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <label for='img'  class="btn btn-dark " style="border-radius:0px;">Upload Images</label>
          <span class='alert alert-dark alert-dismissible fade show fw-bold mt-5 d-block' role='alert'>
              You can upload multiple images of your hotel
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </span>
          <input type="file" name="img[]" id="img" multiple style="display:none">
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>

      <div class="row mt-4">
        <div class="col"></div>
        <div class="col-2"><input type="submit" class="btn  btn-lg form-control text-light fw-bold fs-5" name="btnsubmit" value="Save" style="border-radius:0px; background-color:black;"></div>
        <div class="col"></div>
      </div>

      <div class="row mt-4">
        <div class="col-4"></div>
        <div class="col-4 ms-5 ps-5">
          
  <?php
    include 'db.php';
    if(isset($_REQUEST["btnsubmit"])){
      $user_hotel_id=$_SESSION["Uid"];
      $hotel_name=$_REQUEST["hotel_name"];
      $country_name=$_REQUEST["country_name"];
      $hotel_state_name=$_REQUEST["hotel_state_name"];
      $hotel_city_name=$_REQUEST["hotel_city_name"];
      $hotel_local_address=$_REQUEST["hotel_local_address"];
      $hotel_price=$_REQUEST["hotel_price"];
      $hotel_guests=$_REQUEST["hotel_guests"];
      $hotel_beds=$_REQUEST["hotel_beds"];
      $hotel_bedroom=$_REQUEST["hotel_bedroom"];
      $hotel_description=$_REQUEST["hotel_description"];

      $qry="INSERT INTO hotel_details() VALUES(null,'$user_hotel_id','$hotel_name','$hotel_description','$country_name','$hotel_state_name','$hotel_city_name','$hotel_local_address','$hotel_price','$hotel_guests','$hotel_bedroom','$hotel_beds')";
      
      if(mysqli_query($con,$qry)){
        echo "<span class='alert alert-success alert-dismissible fade show fw-bold  d-block mt-5' role='alert'>
        Data Saved Successfully!!!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </span>";
      }
      else{
        echo"<span class='alert alert-danger alert-dismissible fade show fw-bold d-block mt-5' role='alert'>
        Something Went Wrong!!!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </span>";
      }
      foreach($_FILES['img']['name'] as $key=>$val){
        $rand=rand('111111','999999');
        $file=$rand.'_'.$val;
        move_uploaded_file($_FILES['img']['tmp_name'][$key],'uploads/'.$file);
        $qry2="INSERT INTO hotel_img() VALUES(null,'$user_hotel_id','$file')";
        mysqli_query($con,$qry2);
    }
    }
  ?>
        </div>
        <div class="col-4"></div>
      </div>

      

    </form>
    </div>

    

    <?php
      include 'footer.php';
    }
    else{
      header('Location:login.php');
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>