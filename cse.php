<?php require 'assets/includes/common.php'; ?>
<?php function check_if_added_to_cart($item_id)
{

    include 'assets/includes/common.php';
    $user_id = $_SESSION['id'];
    $query_added_to_cart = "SELECT * FROM cart WHERE Event_id='$item_id' AND User_id ='$user_id' AND Status='Added to cart' AND Branch = 'cse' ;";
    $result_carts = mysqli_query($conn, $query_added_to_cart);
    $rowcounts = mysqli_num_rows($result_carts);
    echo $rowcounts;
    if ($rowcounts >= 1) {
        return 1;
    } else {
        return 0;
    }
} ?>
<!Doctype html>
<html lang="en">

<head>
    <title> Inceptum | CS Events</title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
    img[alt="www.000webhost.com"]{
    display:none;
}
        .top-layout {
            min-height: 100vh;
            padding-top: 60px;
            margin-top: 60px;
        }

        .pad-out {
            padding: 20px;
        }

        .margin-top {
            margin-top: 30px;
        }
    </style>
</head>

<body class="black-color">

    <nav id="site-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="http://www.gbpec.edu.in/index.php" target="_blank"> <img src="assets/img/gbpec.png" alt="GBPEC"></a>
                <a href="index.php"> <img src="assets/img/logo.png" alt="Inceptum 2019"></a>
            </div>
            <a class="navbar-brand d-none d-lg-block float-left" href="index.php">INCEPTUM</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="index.php#events">Events <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <?php if (!isset($_SESSION['email'])) { ?>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link" href="signup.php"><span class=" "> </span> Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php"><span class=" "> Login</span></a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link" href="cart.php"><span class=" "></span> Cart</a></li>

                        <li class="nav-item"><a class="nav-link" href="logout.php"><span class=" "></span> Logout</a></li>
                    </ul>
                <?php } ?>


            </div>
        </div>
    </nav>

    <content>

        <div class="container top-layout">
            <!--<center>-->
            <!--    <b>-->
            <!--        <p style="font-size: 32px;">COMPUTER SCIENCE EVENTS</p>-->
                    <!--<div class="white-color container">-->
                    <!--    Links:<br>-->
                    <!--    <a href="https://drive.google.com/drive/folders/13EZ_eHuO8rcmduZkU5aOLzi2HZa0cw2j?usp=sharing">Android</a>    <br>      -->
                    <!--    <a href="https://drive.google.com/drive/folders/1jabsV89I-yCpJNx2EU5YWScVE3qTEK0K?usp=sharing">Events Report</a>-->
                    <!--    </div>-->
            <!--    </b>-->
            <!--</center>-->
            <div class="row text-center">


                <?php
                $select_event_query = "SELECT * from cse ORder by Id;";
                $result_event_query = mysqli_query($conn, $select_event_query);

                while ($row = mysqli_fetch_array($result_event_query)) {
                    // echo $row['Id'];
                    ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="contain">
                            <?php echo '<img src="assets/img/cse/cse' . $row['Id'] . '.jpg" alt="CS Events" class="image" style="width:100%; height: 200px; ">';   ?>
                            <div class="middle">
                                <p style="font-size: 26px;"><?php echo $row['Name']; ?></p>

                                <?php echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cseModal' . $row['Id'] . '">'; ?>
                                View Rules
                                </button>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
        <!--
                        Model
                    -->
        <?php
        $select_event_query = "SELECT * from cse ORder by Id;";
        $result_event_query = mysqli_query($conn, $select_event_query);
        $event = "cse";
        while ($row = mysqli_fetch_array($result_event_query)) {
            echo '<div class="modal fade" id="cseModal' . $row['Id'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">'; ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <strong>
                            <h5 class="modal-title" id="modalLabel"><?php echo $row['Name'];   ?> </h5>
                        </strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                          <b> <center style="color:#000;">Bring your own laptop.</center></b>
                           <h5 style="color:#000; text-align:left;"><strong>Date:</strong><br>
                             <?php echo nl2br($row['Date']);   ?> November, 2019

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Time:</strong><br>
                            <?php echo nl2br($row['Time']);   ?>

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Description:</strong><br>
                            <?php
                                echo nl2br($row['Description']);   ?>

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Rules:</strong><br>
                            <?php
                                echo nl2br($row['Rules']);  
                                if($row['Id']==10){?>
                                    <a href="http://www.hackerearth.com/challenges/college/onlinecoding" target="_blank"><b>Registration Link Round 1 :</b><br> http://www.hackerearth.com/<br>challenges/college/onlinecoding</a>
                            <?php    }
                                
                                ?>
                
                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>First Prize:</strong><br>
                            <?php
                                echo nl2br($row['Fprize']);   ?>

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Second Prize:</strong><br>
                            <?php
                                echo nl2br($row['Sprize']);   ?>

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Third Prize:</strong><br>
                            <?php
                                echo nl2br($row['Tprize']);   ?>

                        </h5>
                        <h5 style="color:#000; text-align:left;"><strong>Registration Charges:</strong><br>
                            <?php
                                echo nl2br($row['Fee']);   ?>

                        </h5>
                         <div class="card" style="width:200px;">
                                <div class="card-body" style="width:200px; color:#000;">
                                    <h5 class="card-title"><?php echo $row['Cname']; ?></h5>                    
                                   <?php echo '<a href="tel:+91-'.$row['Contact'].'" class="btn btn-success btn-sm"><img src="assets/img/call.png" height="30px" width="30px">&nbsp;+91-'.$row['Contact'].'</a>';?>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-left"> <small class="text-left blockquote-footer" style="font-size:8px; color:#000;">Rules can be changed any moment for betterment of the event</small></div>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>


                        <?php if (!isset($_SESSION['email'])) {
                                echo '<a href="login.php"><button style="padding: 5px;" class="btn btn-danger">Login Now</button></a>';
                            } else {
                                if (check_if_added_to_cart($row['Id'])) {
                                    echo '<button type="button" class="btn btn-danger">Added to cart</button>';
                                } else {

                                    echo '<a href="assets/includes/addtocart.php?event=' . $event . '&name=' . $row['Name'] . '&fee='.$row['Fee'].'&id=' . $row['Id'] . '" name="add" value="add" class="btn btn-primary ">Add to cart</a>';
                                }
                            } 
                            
                            ?>

                    </div>
                </div>
            </div>
            </div>
        <?php }
        //  include 'modal.php'; 
        ?>
    </content>
    <footer>
        <div class="container-fulid black-color top-pad" style="font-size: 14px;">
            <center>
                Copyright © 2019 | All Rights Reserved

            </center>
            <div class="text-right" style="padding-right: 30px;"><a href="about.php">Managed by: Akshat Kumar</a></div>
        </div>
    </footer>
    <!--SCript-->

    <script src="assets/js/header.js"></script>
</body>

</html>