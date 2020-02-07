<?php include 'common.php';
    $email =$_POST['Email'];
    $password = mysqli_real_escape_string($conn,$_POST['Password']);
    $password = md5($password);
    $select_query = "SELECT * from users;";
    $result_select_query = mysqli_query($conn,$select_query);
    // echo $email;
    while($row = mysqli_fetch_array($result_select_query)){
        if($row['Email']==$email){
            // echo $row['Email'].'<br>';
    if($row['Password']==$password){
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['Id'];
        header('location: ../../index.php#events');
       // echo 'Logined';
        exit();
    }
    else
        {
         header('location: ../../login.php');
        $_SESSION['login_message']="Entered wrong email/password...";
        // echo $_SESSION['login_message'];
        exit;
    }
    
    }
    else{
          header('location: ../../signup.php');

        // $_SESSION['login_message'];
        $_SESSION['message']="User Not Registered!!";
        // echo $_SESSION['login_message'];
    }
    } 
      header('location: ../../index.php');
?>