<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        
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
  <body>
    
    <!-- header starts -->

   <?php
    include 'header.php';
   ?>
    
    <!-- header ends -->
    <?php
                
               include 'db.php';
                $qry3="SELECT user_id FROM user_details ";
                $result3=mysqli_query($con,$qry3);
                $len=0;
                while($row3=mysqli_fetch_array($result3)){
                    $len++;
                }
                $i=ceil($len/4);
                $j=1;
                $k=0;
                while($j<=$i){
                    $k=4*$j-4;
                $qry="SELECT user_id FROM user_details order by user_id desc LIMIT 4 OFFSET $k";
                $result=mysqli_query($con,$qry);
                echo"<div class='container-fluid'>
                <div class='row mt-4 ms-3'>
                ";
                while($row=mysqli_fetch_array($result)){
                    $image_id=$row["user_id"];
                    $qry2="SELECT hotel_img FROM hotel_img WHERE user_img_id='$image_id'";
                    $result2=mysqli_query($con,$qry2);
                    $qry4="SELECT hotel_name,hotel_description,hotel_country,hotel_state,hotel_city,hotel_price FROM hotel_details WHERE user_hotel_id='$image_id'";
                    $result4=mysqli_query($con,$qry4);
                    $row4=mysqli_fetch_array($result4);
                    
                    while($row2=mysqli_fetch_array($result2))
                    {
                        
                        echo "
                        <div class='col-sm-3'>
                            <div class='card border-dark zoom' style='width: 20rem;'>
                                <img src='uploads/".$row2["hotel_img"]."' class='card-img-top' alt='...' style='height:220px;width:100%;'>
                                <div class='card-body'>
                                <h5 class='card-title'>".$row4["hotel_name"]."</h5>
                                <p class='card-text'>".$row4["hotel_country"]."</p>
                                <p class='card-text'>".$row4["hotel_state"].", ".$row4["hotel_city"]."</p>
                                <p class='card-text'><span class='fw-bold'>&#8377;".$row4["hotel_price"]." nignt</span></p>
                                <a href='view_hotel.php?id=".$image_id."' class='btn btn-dark' style='border-radius:0px;'>Book Now</a>
                                </div>
                            </div>
                        </div>
                        ";
                        break;
                    }
                
                }
                echo"
                </div>
                </div>";
                $j++;
                }
        ?>
      
    <?php
        include 'footer.php';
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            </body>
            </html>