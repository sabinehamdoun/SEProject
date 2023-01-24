<?php
// session_start();
// echo $_SESSION['logged_id'];
// echo $_SESSION['logged_bool'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #UserTable th{
            border: 4px solid rgba(221, 221, 221, 0);
            background-color: #5282dc79;
            padding: 5px;

        }
        #UserTable td{
            padding: 5px;

        }
        tr:nth-child(odd){
            background-color: #6180c4a8;
        }
        tr:hover{
            background-color: #ddd;
        }


    </style>
</head>
<body>
    
    <table width="1200px" height="30px" id="UserTable" style="margin: auto; border-radius: 4px;"> 
    <TR>
            <TH COLSPAN="4"><H3  style="margin-top:-25px   ;text-align:center"><BR><b> User Invoice</b> </H3></TH>
        </TR>
        <tr>
            <td>Product ID</td>
            <td>Name</td>
            <td>Color</td>
            <td>Price</td>
            
        </tr>
        <tr>
            <td><?php echo $row["product_id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["color"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
        </tr>
 
    </table>
</body>
</html>