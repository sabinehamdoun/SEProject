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

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
       
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menuu">
                            <a href="cart.html" class="main_cart"><i class="fas fa-shopping-basket"></i> My Cart</a>
                            </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
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
    <div class="all-title-box" style="background-image: url(./images/featured-image-types-of-paint.jpeg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Signing Up Page</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" >Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <div class="box-add-products">
        <div class="formregestration">
        <form action="signup_user(php).php" method="POST"> 
            <fieldset class="form1regestration">
                <legend class="legendregestration">PAINT IT RIGHT</legend>
                user id: <input type="text" name="user_id"style="border:0.1px solid black;  border-radius:5px; padding:10px;"  placeholder="Enter a unique user id" required class="input"> <br>

              username: <input type="text" name="username"style="border:0.1px solid black;  border-radius:5px; padding:10px;"  placeholder="Enter a unique username" required class="input"> <br>
              password: <input type="password" name="password"style="border:0.1px solid black;  border-radius:5px; padding:10px;"  placeholder="Enter a password" required class="input"> <br>

                First Name: <input type="text" name="first_name" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="Enter your first name" required class="input">
                <br>
                Last Name: <input type="text" name="last_name" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="Enter your last name" required class="input">
                <br>
                Email: <input type="email" name="email" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="Enter your email" required class="input">
                <br>
                Phone Number: <input type="tel" name="phone_number" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="70/xxxxxx" required>
                 <i>Note:</i> Only 8 digits.
                 <br>
                 Address
                 <br>
                 <textarea name="address" id="" cols="45" rows="5" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="Enter your Address here"required></textarea> <br>
                <br>
                Emergency Contact Name: <input type="text" name="Emergency_Contact_Name" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="" required class="input"> in-case no one answered on the original number <br>
                Emergency Contact Name Phone Number: <input type="tel" name="Emergency_Contact_Name_phone_number" style="border:0.1px solid black;  border-radius:5px; padding:10px;"placeholder="70/xxxxxx" required>
                <br>
                How do you want to recieve your product:
                <br>
                <input type="radio" name="receive_product"  value="byhand" > By Hand
                
                <input type="radio" name="receive_product"  value="delivery" > By Delivery
                <br>
                <!-- Enter the date you want us to work: <input type="date" name="date"> <br> -->
                

                <!-- Please enter the number of rooms you want to paint<input type="number" id="quantity" name="quantity" min="1" max="20"> <br>
                Choose the color: <input type="color" id="chosen_color" name="color" /><br> -->
                <a href="">
                    <button class="submitregestration">Submit</button>
                </a  >
                
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