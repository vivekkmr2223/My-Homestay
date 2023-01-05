<?php
    include 'db.php';
  if(isset($_SESSION["Uid"]))
  {
    $qry3="SELECT * FROM user_details WHERE user_id='".$_SESSION["Uid"]."'";
    $result3=mysqli_query($con,$qry3);
    $row3=mysqli_fetch_array($result3);
    
    
?>

<style>
        a{
            text-decoration:none;
            color:black;
        }
        a:hover{
            color:black;
        }
</style>

<div class="container-fluid border-bottom shadow">
        <div class="row pt-3">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col logo"><a href="index.php"><img src="images/logo.jpeg" class="img-fluid" alt="" style="height:50px;width:50px;"></a></div>
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-4">
                <form action="search.php" method="POST" name="search">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" placeholder="Search Website" name="search_keyword" id="" value="" style="border-left: 0px;">
                        <input type="submit" class="btn btn-dark fw-bold text-light pe-4 ps-4" name="search_submit" id="search_btn" style="border-radius: 0px;" value="Search">
                    </div>
                </form>
            </div>
            
            <div class="col mt-2 ps-5 d-none d-md-block"><a class="text-dark fs-6 p-3" href="become_a_host_front.php" style="text-decoration:none;">Become a Host</a></div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle border shadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user fs-4"></i><span class="fw-bold fs-5 ps-3"><?php echo $row3["user_name"];?></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button"><a href="become_a_host_front.php">Host your Home</a></button></li>
                        <li><button class="dropdown-item" type="button"><a href="help.php">Help</a></button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button class="dropdown-item" type="button"><a href="logout.php">Log Out</a></button></li>
                    </ul>
                </div>
            </div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
    </div>
    <?php
    }
    else{
    ?>
    <style>

        a{
            text-decoration:none;
            color:black;
        }
        a:hover{
            color:black;
        }
    </style>
    <div class="container-fluid border-bottom shadow">
        <div class="row pt-3">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col logo"><a href="index.php"><img src="images/logo.jpeg" class="img-fluid" alt="" style="height:50px;width:50px;"></a></div>
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-4">
                <form action="search.php" method="POST"  name="search">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" placeholder="Search Website" name="search_keyword" id="" value="" style="border-left: 0px;">
                        <input type="submit" class="btn btn-dark fw-bold text-light pe-4 ps-4" name="search_submit" id="search_btn" style="border-radius: 0px;" value="Search">
                    </div>
                </form>
            </div>
            
            <div class="col mt-2 ps-5 d-none d-md-block"><a class="text-dark fs-6 p-3" href="become_a_host_front.php" style="text-decoration:none;">Become a Host</a></div>            <div class="col ">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle border shadow" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user fs-4"></i></button>
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
     <?php
        }
        include 'db.php';
        
        
    ?>