<?php
session_start();
require_once('InitiateInvoice.php');
include("connection.php");

$id=$_SESSION['logged_id'];

$query1= "SELECT products.product_id,products.name,products.color,products.price,users.username
FROM users INNER JOIN user_products ON users.user_id=user_products.user_id
INNER JOIN products ON user_products.product_id=products.product_id WHERE users.user_id='$id'";
$stmt1 = $connection->prepare($query1);
$stmt1->execute();
$results = $stmt1->get_result();


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
<table width="1200px" height="30px" id="UserTable" style="margin: auto; border-radius: 4px;"> 
    <TR>
            <TH COLSPAN="4"><H3  style="margin-top:-25px;text-align:center"><BR><b>Invoice</b> </H3></TH>
        </TR>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Color</th>
            <th>Price</th>
            
        </tr>
<?php 
        while($row = $results->fetch_assoc()){
            InitiateInvoice($row["name"], $row["price"], $row["color"], $row["product_id"],$row["username"]);
        }

        ?>
</table>
<?php        

$stmt2 = $connection->prepare("DELETE FROM user_products;");
$stmt2->execute();

?>
    </div>
</body>
</html>