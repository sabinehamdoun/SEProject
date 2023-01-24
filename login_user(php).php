<?php
session_start();
include("connection.php");


if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username= $_POST["username"];
}else{
	die(" ALERT usernsme");
}
if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password= hash("sha256",$_POST['password']);
}else{
	die(" ALERT password");
}

// Database connection here
$stmt3= $connection->prepare("SELECT user_id FROM users where username = '".$username."'");
$stmt3->execute();
$stmt_result3=$stmt3->get_result();
$data3=$stmt_result3->fetch_assoc();
$logged_id=$data3['user_id'];

           $stmt= $connection->prepare("SELECT password FROM users where username = '".$username."'");
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            $data=$stmt_result->fetch_assoc();
            if($data['password']==$password){
                $_SESSION['logged_id']=$logged_id;
                $_SESSION['logged_bool']=true;

    header("Location:index.php");
} else {
    echo '<script> alert("<h2>Invalid Email or password</h2>");window.location="login_user.php"</script>';

}
            
?>