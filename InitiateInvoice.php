 <?php
include("connection.php");
 

 
function InitiateInvoice($productname, $productprice, $productcolor, $productid,$username){
    
    $element = "
        
        <tr>
            <td>$productid</td>
            <td>$productname</td>
            <td>$productcolor</td>
            <td>$productprice</td>
        </tr>
    ";
    echo $element;
}

?>