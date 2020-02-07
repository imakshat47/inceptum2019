<?php 
    require 'common.php';
    $event = $_GET['name'];
    $item_id = $_GET['id'];
    $page = $_GET['event'];
     $fee = $_GET['fee'];
    $id = $_SESSION['id'];
    header("Location: ../../$page.php");
    $query_insert = "Insert into cart (Event_id,User_id,Event_name,Fee,Status,Branch) values('$item_id','$id','$event','$fee','Added to Cart','$page');";
        //    echo $id.$event.$item_id.$page; 
    mysqli_query($conn,$query_insert);
?>