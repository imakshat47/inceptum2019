<?php require 'assets/includes/common.php'; ?>
<!Doctype html>
<html lang="en">

<head>
    <title> Inceptum | Team</title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
        .top-layout {

            padding-top: 60px;
            margin-top: 60px;
        }

        .pad-out {
            padding: 10px;
        }

        .margin-top {
            margin-top: 30px;
        }

        .card {
            margin: 10px 0px;
            /* height: 160px; */
        }
    </style>
</head>

<body>

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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#events">Events <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
        <div class="container top-layout grey-color">
            <div class="text-center">
                <h1 class="text-center pad-out"><img src="assets/img/team.png" height="40px" width="40px;">&nbsp;TEAM</h1>

                <h2 class="text-wrap pad-out"><img src="assets/img/teamicon.png" height="40px" width="40px;">&nbsp;<b>Our Faculty Team</b></h2>
                <div class="row">
                    <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="http://www.gbpec.edu.in/images/profile.jpg" alt="Faculty" height="180px" width="180px;"><br>
                        <h3>Prof. O. P. Verma</h3>Principal
                    </div>
                    <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="http://www.gbpec.edu.in/images/faculty/CSE/Sunita_Tiwari_CSE.jpg" alt="Faculty" height="180px" width="180px;"><br>
                        <h3>Dr. Sunita Tiwari</h3>Chairperson, Organising Committee
                    </div>

                    <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="http://www.gbpec.edu.in/images/faculty/ECE/Rohit_Anand_ECE.png" alt="Faculty" height="180px" width="180px;"><br>
                        <h3>Mr. Rohit Anand</h3>Convenor, Organising Committee
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="http://www.gbpec.edu.in/images/faculty/CSE/SUNITA_CSE.png" alt="Faculty" height="180px" width="180px;"><br>
                        <h3>Ms. Sunita Kumari</h3>Protocol Organising Committee
                    </div> -->

                    <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="assets/img/team/anu_saini.jpg" alt="Faculty" height="180px" width="180px;" style="object-fit:fill;"><br>
                        <h3>Dr. Anu Saini</h3>Coordinator

                    </div>
                    <div class="col-sm-4 col-xs-12"><img class="rounded-circle" src="assets/img/team/Jayant_Supale.jpg" alt="Faculty" height="180px" width="180px;"><br>
                        <h3>Mr. Jayant Supale</h3>Coordinator
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">

            <h2 class="text-wrap pad-out"><img src="assets/img/teamicon.png" height="40px" width="40px;">&nbsp;<b>Our Student Team</b></h2>
            <div class="row">
                <?php
                include 'assets/includes/common.php';
                $select_event_query = "SELECT * from coreinceptum ;";
                $result_event_query = mysqli_query($conn, $select_event_query);

                while ($row = mysqli_fetch_array($result_event_query)) {    ?>
                    <div class="col-sm-4 col-xs-12" style="min-height:300px;">
                        <?php echo nl2br('<img class="rounded-circle" src="assets/img/team/team' . $row['Id'] . '.jpeg" alt="Student" height="150px" width="150px;"><br> <h3>' . $row['Name'] . '</h3>' . $row['Post'] . '<br>' ); ?>
                        <?php echo '<a href="tel:+91-'.$row['Contact'].'" class="btn btn-success btn-sm"><img src="assets/img/call.png" height="30px" width="30px">&nbsp;+91-'.$row['Contact'].'</a>';?>
                    </div>
                <?php  } ?>
            </div>
        </div>

        <!--Coordinators-->
       
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