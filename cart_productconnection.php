<?php



function cart_productconnection($productname, $productprice, $productimg, $productid,$color){
    $element = "
   
<div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-4\">
    <div class=\"products-single fix\">
    <div class=\"card shadow\" style=\"margin-bottom: 20px;\">
        <div class=\"box-img-hover\">
            
            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
            <div class=\"mask-icon\">
            <a class=\"cart\" href=\"#\"><p>$color</p></a>
            </div>
        </div>
            <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <p class=\"card-text\">
            Thanks for purchasing me
            </p>
            <h5>
                <span class=\"price\">$$productprice</span>
            </h5>
            <a href=\"remove_cartproduct.php?productId=$productid\"\">
            <button type=\"submit\" id=\"hover1\" onclick=\"Removed()\"class=\"btn btn-warning my-3\" style=\"background-color: rgb(255 2 0 / 75%); border-radius:30px;\" name=\"add\" title=\"Remove\">Remove</button>
            </a>  
             </div>
             </div>
    </div>
</div>
<script> function Removed(){
alert(\"Removed succesfully\");
}
</script>
    ";
    echo $element;
}

?>