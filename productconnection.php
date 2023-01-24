<?php
include("connection.php");
 

 
function productconnection($productname, $productprice, $productimg, $productid,$discription){
    

    $element = "
<div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-4\">
    <div class=\"products-single fix\">
    <div class=\"card shadow\" style=\"margin-bottom: 20px;\">
        <div class=\"box-img-hover\">

            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
            <div class=\"mask-icon\">
            <a class=\"cart\" style=\"font-size: 11px; margin-left: -30px; margin-right: -30px; \" href=\"#\"><p>$discription</p></a>            </div>
        </div>      
            <div class=\"card-body\"  >
            <h5 style=\"font-size: 20px; font-weight:bold;\" class=\"card-title\">$productname</h5>
           
            <h5>
                <span class=\"price\">$ $productprice</span>
            </h5>
            <p class=\"card-text\" >
            Add me to cart !         
             </p>
             
            <a href=\"Addtocart.php?productId=$productid\">
            
            <button type=\"submit\" id=\"hover1\" onclick=\"Added()\"class=\"btn btn-warning my-3\" name=\"add\" title=\"Add to Cart\"><i class=\"fas fa-shopping-cart\"></i>
            
            </button>
            </a>       
             </div>
             </div>
    </div>
</div>

<script> function Added(){
    alert(\"Added succesfully\");
    }
    </script>
    ";
    echo $element;
}

?>