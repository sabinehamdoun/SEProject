<?php
session_start();
if(!isset($_SESSION['loggedinadmin'])){
    header("location:login_admin.php");

}
include("connection.php");

$query = "SELECT last_name, first_name,email, phone, address, emergency_name, emergency_num FROM users ";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();


$query1 = "SELECT users.first_name,users.last_name,products.product_id,products.name,products.color 
FROM users INNER JOIN user_products ON users.user_id=user_products.user_id 
INNER JOIN products ON user_products.product_id=products.product_id ";
$stmt1 = $connection->prepare($query1);
$stmt1->execute();
$results1 = $stmt1->get_result();


$query2 = "SELECT users.first_name,users.last_name,
CONCAT(registration_id) AS `registration_id`,
CONCAT(color) AS `color`,
CONCAT(rooms) AS `rooms`,
CONCAT(date) AS `date`
FROM users LEFT JOIN registreing_painting ON registreing_painting.user_id=users.user_id WHERE registration_id IS NOT NULL";
$stmt2 = $connection->prepare($query2);
$stmt2->execute();
$results2 = $stmt2->get_result();


$query3 = "SELECT users.first_name,users.last_name,
CONCAT(registration_id) AS `registration_id`,
CONCAT(width) AS `width`,
CONCAT(height) AS `height`,
CONCAT(date_of_receive) AS `date`
FROM users LEFT JOIN registreing_wp ON registreing_wp.user_id=users.user_id WHERE registration_id IS NOT NULL;";
$stmt3 = $connection->prepare($query3);
$stmt3->execute();
$results3 = $stmt3->get_result();


$query4 = "SELECT * FROM comments ";
$stmt4 = $connection->prepare($query4);
$stmt4->execute();
$results4 = $stmt4->get_result();
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

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html" style="background-color: rgba(245, 245, 245, 0.781);"><img src="images/WhatsApp_Image_2021-11-21_at_4.02.16_PM-removebg-preview (1).png" class="logo" alt="" width="120px" height="80px"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <li> </li>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                   
                </div>
                <!-- End Atribute Navigation -->
            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <!-- Slide of shop page-->  
    <div class="all-title-box" style="background-image: url(./images/featured-image-types-of-paint.jpeg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Admin</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-i">
        <div class="contain">

            <div class="ow" style="display: center; text-align: center; padding: 10px; margin-top: 4%; margin-bottom: -0px;">
                <button onclick="clickMe()" class="hi" name="Users-Details" style="background-color: #cf3458; border: 0px; font-size: 22px; text-align: center; margin:20px;"> User's Details </button>
                    <table border="1" width="1200px" height="30px" id="myTable" style="margin: auto; display:none; border:0px;"> 
                        <tr style="font-weight: bold; color:black; ">
                            <th> Last Name</th>
                            <th> First Name</th>
                            <th> Email </th>
                            <th> Phone Number</th>
                            <th> Emergency Contact Name </th>
                            <th> Emergency Contact Number</th>
                            <th> Receive method </th>
                        </tr>
                        <?php
                            while($row = $results -> fetch_assoc()){
                        ?>
                        <tr style="border:0px;">
                            <td><?php echo $row["last_name"]; ?></td>
                            <td><?php echo $row["first_name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["emergency_name"]; ?></td>
                            <td><?php echo $row["emergency_num"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <br>
                    <button onclick="clickMe1()" class="hi" name="Users-Product" style="background-color: #b755a6; border: 0px; font-size: 22px; text-align: center;margin:20px"> User's Products </button>
                    <table border="1" width="1200px" height="30px" id="myTable1" style="margin: auto; display:none; border:0px;"> 
                        <tr style="font-weight: bold; color:black; border:0px;">
                            <th> Last Name</th>
                            <th> First Name</th>
                            <th> product id </th>
                            <th> product name</th>
                            <th> Color  </th>
                           
                        </tr>
                        <?php
                            while($row = $results1 -> fetch_assoc()){
                        ?>
                        <tr style="border:0px;">
                            <td><?php echo $row["last_name"]; ?></td>
                            <td><?php echo $row["first_name"]; ?></td>
                            <td><?php echo $row["product_id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["color"]; ?></td>
                           
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <br>
                    <button onclick="clickMe2()" class="hi" name="Users painting" style="background-color: #4f5fd1; border: 0px; font-size: 22px; text-align: center;margin:20px"> Users who registered paintings </button>
                    <table border="1" width="1200px" height="30px" id="myTable2" style="margin: auto; display:none; border:0px;"> 
                        <tr style="font-weight: bold; color:black; border:0px;">
                            <th> Last Name</th>
                            <th> First Name</th>
                            <th> registration id </th>
                            <th> Rooms </th>
                            <th> Color  </th>
                            <th> Date  </th>
                           
                        </tr>
                        <?php
                            while($row = $results2 -> fetch_assoc()){
                        ?>
                        <tr style="border:0px;">
                            <td><?php echo $row["last_name"]; ?></td>
                            <td><?php echo $row["first_name"]; ?></td>
                            <td><?php echo $row["registration_id"]; ?></td>
                            <td><?php echo $row["rooms"]; ?></td>
                            <td><?php echo $row["color"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <br>
                    <button onclick="clickMe3()" class="hi" name="Users wallpaper" style="background-color: #4fbfd1; border: 0px;  font-size: 22px; text-align: center;margin:20px"> Users who registered wallpapers </button>
                    <table border="1" width="1200px" height="30px" id="myTable3" style="margin: auto; display:none; border:0px;"> 
                        <tr style="font-weight: bold; color:black; border:0px;">
                            <th> Last Name</th>
                            <th> First Name</th>
                            <th> registration id </th>
                            <th> date</th>
                            <th> width  </th>
                            <th> height  </th>
                           
                        </tr>
                        <?php
                            while($row = $results3 -> fetch_assoc()){
                        ?>
                        <tr style="border:0px;">
                            <td><?php echo $row["last_name"]; ?></td>
                            <td><?php echo $row["first_name"]; ?></td>
                            <td><?php echo $row["registration_id"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                            <td><?php echo $row["width"]; ?></td>
                            <td><?php echo $row["height"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <br>
                    <button type="submit" onclick="add_product()" name="AddP" style="background-color: #4fd153; border: 0px;  font-size: 22px; margin:20px ;border-radius:10px; padding:10px;">Add Product</button>
                <form action="adding_product.php" method="POST" id="addproduct" style="display:none;"> 
                    New Product Id: <input type="text" name="new_product_id" style="border:2px solid black; border-radius:5px; padding:10px;" placeholder="product id">
                    <br>
                    New Product Name: <input type="text" name="new_product_name" style="border:2px solid black; border-radius:5px ;padding:10px;" placeholder="name">
                    <br>
                    Enter image url: <input type="text" name="new_image_url" style="border:2px solid black; border-radius:5px; padding:10px;" placeholder="./images/1A.png">
                    <br>
                    New Product Price: <input type="text" name="new_product_price" style="border:2px solid black; border-radius:5px; padding:10px;" placeholder="price">
                    <br>
                    New Product Description: <input type="text" name="new_product_description" style="border:2px solid black; border-radius:5px; padding:10px;" placeholder="description">
                    <br>
                    New Product Color: <input type="text" name="new_product_color" style="border:2px solid black; border-radius:5px; padding:10px;"  placeholder="color">
                    <br>
                    <input type="submit" value="submit" style="background-color:#b0b435; padding:5px; border-radius: 15px;width:10%;">

                </form>
                <br>
                <button type="submit" class="hi" onclick="remove_product()" name="RemoveP" style="background-color: #e4ed51; border: 0px;  font-size: 22px;margin:20px">Remove Product</button>
                <form action="removing_product.php" method="post" style="display:none;" id="removeproduct">
                    New Product Id: <input type="text" name="product_id" style="border:2px solid black; border-radius:5px ;padding:10px;" placeholder="product id">
                    <br>
                    New Product Name: <input type="text" name="product_name" style="border:2px solid black; border-radius:5px ;padding:10px;" placeholder="name">
                    <br>
                    <input type="submit" value="Submit" style="background-color:#b0b435; padding:5px;  border-radius: 15px; width:10%;">
                </form>
                <br>

                <button type="submit"    class="hi" onclick="check_comments()" name="check_comments" style="background-color: #e1893f; border: 0px; font-size: 22px;margin:20px">Check Comments</button>
                <table border="1" width="1200px" height="30px" id="check_comments" style="margin: auto; display:none; border:0px;"> 
                        <tr style="font-weight: bold; color:black; border:0px;">
                            <th> Name</th>
                            <th> Message</th>

                           
                        </tr>
                        </tr>
                        <?php
                            while($row = $results4 -> fetch_assoc()){
                        ?>
                        <tr style=" color:black; border:0px;">
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["message"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <br>
                    <a  class="hi" href="logout.php" style="background-color: rgb(255, 0, 0); border: 0px; font-size: 22px;margin:20px">Logout</a>
                    <br>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
				<!-- <div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div> -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li> -->
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About PAINT IT RIGHT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">LAU_STUDENTS</a> Design By :
            <a href="https://html.design/">LAU_STUDENTS</a></p>
    </div>
    <!-- End copyright  -->
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="main.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

    <script>
        function clickMe(){
            $("#myTable").show();
        }
    </script>
    <script>
        function clickMe1(){
            $("#myTable1").show();
        }
    </script>
     <script>

        function clickMe2(){
            $("#myTable2").show();
        }
    </script>
    <script>

function clickMe3(){
    $("#myTable3").show();
}
</script>
    <script>
        function add_product(){
            $("#addproduct").show();
        }
        function remove_product(){
            $("#removeproduct").show();
        }
         function check_comments(){
             $("#check_comments").show();
         }
    </script>
</body>

</html>