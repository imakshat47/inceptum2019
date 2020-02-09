<?php 
	$conn = mysqli_connect('localhost', 'username', 'password','db_name');
	if (!$conn) {
    echo ("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
    }

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    
if(!isset($_SESSION['message'])||!isset($_SESSION['id'])){
    $_SESSION['message']="Hey, Fill this Form";
    $_SESSION['login_message']="Enter Email Id and Password";
    $_SESSION['change_pass']="Enter Old Password";
    $_SESSION['id']=0;
 
   }
   
   if(!isset($_SESSION['cart-payment'])){   $_SESSION['cart-payment']="Pay Now, Avoid last-minute hassle!!";}

?>
