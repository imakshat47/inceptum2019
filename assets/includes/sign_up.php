<?php
require 'common.php';
$email = $_POST['Email'];
$name = $_POST['Name'];
$password = $_POST['Password'];
$college = $_POST['College'];
$contact = $_POST['Contact'];

if (preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
    if (preg_match("^[_a-zA-Z- ]$^", $name)) {
        if (preg_match("^.{10,10}$^", $contact)) {
            if (preg_match("^.{6,}$^", $college)) {
                if (preg_match("^.{6,}$^", $password)) {
                    $email =   mysqli_real_escape_string($conn, $email);
                    $name = mysqli_real_escape_string($conn, $name);
                    $contact = mysqli_real_escape_string($conn, $contact);
                    $password = mysqli_real_escape_string($conn, $password);
                    $city = mysqli_real_escape_string($conn, $college);
                    $address = mysqli_real_escape_string($conn, $_POST['Address']);
                    $password = md5($password);
                    // echo $password;
                    $check_query = "SELECT email from users;";
                    $check_query_result = mysqli_query($conn, $check_query);
                    if (!$check_query_result) {
                        printf("Error: %s\n", mysqli_error($con));
                        exit();
                    }
                    while ($row = mysqli_fetch_array($check_query_result)) {
                        if ($row['email'] == $email) {
                            header('location: ../../signup.php');
                            $_SESSION['message'] = "User Already Exist!!";
                            // echo 'User Already Exist!!';
                            exit();
                        }
                    }

                    $query_select = "Insert into users (Name,Email,Password,Contact,College,Address) values('$name','$email','$password','$contact','$city','$address');";

                    mysqli_query($conn, $query_select);

                    // echo $email.$address.$name.$password.$city.$contact;

                    // $select_query = "SELECT * from users;";
                    //     $select_query_result = mysqli_query($conn, $select_query);
                    //     while ($row = mysqli_fetch_array($select_query_result)) {
                    //         echo $row[1];
                    //         echo $row[2];
                    //     } 
                    $_SESSION['login_message'] = "New User Registered!";
                    // $_SESSION['message']="New User Registered!"; 
                    header('location: ../../login.php');
                } else {

                    header('location: ../../signup.php');
                    $_SESSION['message'] = "Wrong password format !!";}
                }else {

                    header('location: ../../signup.php');
                    $_SESSION['message'] = "Wrong College name !!";}
            }else {

                header('location: ../../signup.php');
                $_SESSION['message'] = "Contact wrong format !!";}
        }else {

            header('location: ../../signup.php');
            $_SESSION['message'] = "Wrong Input Name!!";}
    }else {

        header('location: ../../signup.php');
        $_SESSION['message'] = "Wrong Email !!";}
    
    ?>
