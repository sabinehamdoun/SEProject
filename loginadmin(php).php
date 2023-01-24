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
  
           $stmt= $connection->prepare("SELECT * FROM admins WHERE username='Admin'");
           $stmt->execute();
            $stmt_result=$stmt->get_result();
            $data=$stmt_result->fetch_assoc();


            if($data['password']==$password && $data['username']==$username){
                $_SESSION['loggedinadmin']=true;

                    header("Location:Admin(html).php");

            } else {
                echo '<script> alert("<h2>Invalid Email or password</h2>");window.location="login_admin.php"</script>';
            }

?>