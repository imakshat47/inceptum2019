<?php
    require 'common.php';
    
    $item_name = $_GET['name'];
    $id = $_SESSION['id'];
    $result_remove_query = mysqli_query($conn, "Delete From cart where Event_name='$item_name' AND User_id='$id';");
    
    header('location: ../../cart.php');
?>