<?php require 'assets/includes/common.php'; ?>
<!Doctype html>
<html lang="en">

<head>
    <title> Inceptum | Contact Us</title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
        .top-layout {
            /* min-height: 100vh; */
            padding-top: 60px;
            margin-top: 60px;
        }

        .pad-out {
            padding: 20px;
        }

        .margin-top {
            margin-top: 30px;
        }

        .box-shadow {
            border: 3px #ffffff double;
            padding: 20px;
            margin: 10px;
            margin-bottom: 10px;

        }

        .google-maps {
            position: relative;
            padding-bottom: 75%;
            height: 0;
            overflow: hidden;
        }

        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }

        .row {
            padding: 20px;
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
                        <a class="nav-link" href="index.php#events">Events <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
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
            <div class="row white-color">
                <div class="col-sm-12 col-md-4">
                    <img src="assets/img/contact.jpg" alt="Helper Image" class="thumbnail" height="200px" width="100%">
                </div>
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <h1>
                        <center><b>Contact Us</b></center>
                    </h1>
                    <form action="assets/includes/contact_us.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control rounded-0" rows="8" name="message" required placeholder="Enter your message here..."></textarea>
                        </div>
                        <button class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row  box-shadow ">
                <div class="col-md-5 col-sm-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.7785039946275!2d77.26817975686265!3d28.5463766177241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3e59981b173%3A0x408fefe7a835514!2sG.B.Pant%20Government%20Engineering%20College!5e0!3m2!1sen!2sin!4v1570018188620!5m2!1sen!2sin" width="600px" height="450px" frameborder="0" style="border:0; height: 600px; width: 450px;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 text-center">
                    <img src="assets/img/location.svg" placeholder="location" height="100px" width="150px">
                    <h1 class="text-center">G.B. Pant Engineering College </h1>
                    <h2>
                        Okhla Industrial Estate Phase 3 Rd,
                        Okhla Phase III, Okhla<br>
                        Industrial Area, New Delhi,<br>
                        Delhi 110020</p>
                    </h2>
                </div>
            </div>
        </div>


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