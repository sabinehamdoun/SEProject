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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


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
								<li><a href="registrationpainting(html).php"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
  
                            </ul>
                        </li>
                <!-- End Atribute Navigation -->
            </div>

            <!-- </nav>  -->
            <!-- End Navigation -->
    </header>



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
    <div class="all-title-box" style="background-image: url(./images/featured-image-types-of-paint.jpeg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registering Adding Wallpapers</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!--hone lezem nhot soora w aalyha ya option 1 aw 2-->


    <div class="box-add-products">
        <div class="formregestration">
        <form action="registrating_wallpaper.php" method="POST">
            <fieldset class="form1regestration">
                <legend class="legendregestration">PAINT IT RIGHT</legend>
             
                Add the image you want as a wallpaper:<input type="file" style="border:0.1px solid black;  border-radius:5px; padding:10px;" name="image_url"><br>
                height of image in cm<input type="number" id="quantity" style="border:0.1px solid black;  border-radius:5px; padding:10px;" name="height" min="1" max="1000000000000"> <br>
                width of image in cm:<input type="number" id="quantity" style="border:0.1px solid black;  border-radius:5px; padding:10px;" name="width" min="1" max="1000000000000"> <br>

                Date of when you want us to do the work: <input type="text" style="border:0.1px solid black;  border-radius:5px; padding:10px;" name="date">  <br>

                <a href="">
                    <button class="submitregestration">Submit</button>
                </a>
                    <button class="Reset">Reset</button>
            <br>
                <b>Note: </b>while contacting the person, it will be considered that no form was sent to us if the phone number was incorrect(including the Emergency Contact Name)

            </fieldset>
        </form>
    </div>
	</div>


       <!-- Start Footer  -->
          <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li><b>Monday - Friday</b>: 8.00 a.m. to 5.00 p.m.</li>
                                <li><b>Saturday</b>: 10.00 a.m. to 3.00 p.m.</li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.WhatsApp.com/"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About PAINT IT RIGHT</h4>
                            <p>Paint it Right offers the greatest quality value and promote innovative and sustainable solutions. 
                                By providing a wide range of coating solutions, our brand will gain recognition, respect,
                                affordability and stand the test of time to gain excellence in sales and services of proficient painting solutions.</p>
                            <p> Paint it Right is dedicated to manufacturing paints and coatings with the highest quality in a safe environment 
                                that meets the international standards. We strive to cover a wide spectrum of colors and provide our customers 
                                with works done by us, such as painting walls and adding wallpapers. </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: <br>Beirut - Lebanon </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+961-660665">+961- 3660665</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:ghamdoun@hotmail.com">ghamdoun@hotmail.com</a></p>
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

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>