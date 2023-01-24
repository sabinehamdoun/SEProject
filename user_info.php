<?php
session_start();
include("connection.php");
$idd=$_SESSION["logged_id"];
$query = "SELECT user_id,username,first_name,last_name,phone,address,email,emergency_name,emergency_num,receive_method
          FROM users WHERE user_id=$idd";
$stmt = $connection->prepare($query);
$stmt->execute();
// $stmt->bind_param('i', $user_id);
$results = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>PAINT IT RIGHT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->

    <link rel="icon" href="images\WhatsApp Image 2021-11-21 at 4.02.16 PM.jpeg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <style>

        th{
            text-transform: uppercase;
            font-weight: bold;
        }
        table {
            margin: 20px;
        }
        #UserTable th{
            border: 2px solid rgba(221, 221, 221, 0);
            background-color: #5282dc79;
            padding: 5px;
            margin-top: 20px;
        }
        #UserTable td{
            padding: 10px;

        }
        tr:nth-child(odd){
            background-color: #f2f2f2;
        }
        tr:hover{
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation with logo image-->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php" style="background-color: rgba(245, 245, 245, 0.781);"><img
                            src="images/WhatsApp_Image_2021-11-21_at_4.02.16_PM-removebg-preview (1).png" class="logo"
                            alt="" width="120px" height="80px"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li>
                            <a href="shop.php" class="nav-link dropdown-toggle arrow">SHOP PAGE</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Registering Work</a>
                            <ul class="dropdown-menu">
								<li><a href="registrationwallpaper(html).php">adding wallpapers</a></li>
								<li><a href="registrationpainting(html).php">Painting walls</a></li>
  
                            </ul>
                        </li>
                    </li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation --> 
                <li>
                    <a href="cart.php" class="main_cart" style="font-weight:bold;"><i class="fas fa-shopping-basket"></i> My Cart</a>
                </li>
                    
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle arrow" style="font-weight:bold;"data-toggle="dropdown"><i class="far fa-user"></i>  USER</a>
                    <ul class="dropdown-menu">
						<li><a href="registrationwallpaper(html).php"><i class="fas fa-user-tie"></i> User Info</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
                    </ul>
                </li>
                <!-- End Atribute Navigation -->
            </div>

            <!-- </nav>  -->
            <!-- End Navigation -->
    </header>
<div style="margin: auto; ">
    <table width="550px" height="30px" id="UserTable" style="margin:auto; border-radius: 0px;"> 
    
    <?php
            while($row = $results -> fetch_assoc()){
    ?>
        <TR>
            <TH COLSPAN="2"><H3  style="text-align:center"><BR><b> <?php echo $row["first_name"]; ?>'s Information</b> </H3></TH>
        </TR>
        <tr>
            <td style="color:white; background-color: #2e79a5; padding-left:50px;">ID</td>
            <td style="color:white;background-color: #2e79a5; padding-right: 40px;"><?php echo $row["user_id"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #7fbcdf; padding-left:50px;">Username</td>
            <td style="color:white;background-color: #7fbcdf; padding-right: 40px;"><?php echo $row["username"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #2e79a5; padding-left:50px;">First Name</td>
            <td style="color:white;background-color: #2e79a5; padding-right: 40px;"><?php echo $row["first_name"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #7fbcdf; padding-left:50px;">Last Name</td>
            <td style="color:white;background-color: #7fbcdf; padding-right: 40px;"><?php echo $row["last_name"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #2e79a5; padding-left:50px;"> Email </td>
            <td style="color:white;background-color: #2e79a5; padding-right: 40px;"><?php echo $row["email"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #7fbcdf; padding-left:50px;">Phone Number</td>
            <td style="color:white;background-color: #7fbcdf; padding-right: 40px;"><?php echo $row["phone"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #2e79a5; padding-left:50px;">Address</td>
            <td style="color:white;background-color: #2e79a5;padding-right: 40px;"><?php echo $row["address"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #7fbcdf; padding-left:50px;">Emergency Contact Name</td>
            <td style="color:white;background-color: #7fbcdf; padding-right: 40px;"><?php echo $row["emergency_name"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #2e79a5; padding-left:50px;">Emergency Contact Number</td>
            <td style="color:white;background-color: #2e79a5; padding-right: 40px;"><?php echo $row["emergency_num"]; ?></td>
        </tr>
        <tr>
            <td style="color:white; background-color: #7fbcdf; padding-left:50px;"> Receive Method </td>
            <td style="color:white;background-color: #7fbcdf; padding-right: 40px;"><?php echo $row["receive_method"]; ?></td>
        </tr>
        
        <?php
        }        
        ?>
        
    </table>
    </div>
</body>
</html>