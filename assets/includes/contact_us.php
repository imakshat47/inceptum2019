<?php 
    include 'common.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $user_id = $_SESSION['id'];

    $query_select = "Insert into contact (User_id,Name,Email,Message) values('$user_id','$name','$email','$message');";
            
    mysqli_query($conn,$query_select);

  header('location: ../../about.php')
?>