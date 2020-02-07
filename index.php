<?php  require 'assets/includes/common.php'; ?>
<!Doctype html>
<html lang="en">

<head>
    <title> Inceptum | Home </title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
        .top-layout {
            min-height: 100vh;
            padding-top: 100px;
            margin-top: 30px;
        }
        img[alt="www.000webhost.com"]{
    display:none;
}

        .pad-out {
            padding: 20px;
        }

        .margin-top {
            margin-top: 30px;
        }

        #clockdiv {
            font-family: sans-serif;
            color: #fff;
            display: inline-block;
            font-weight: 100;
            text-align: center;
            font-size: 30px;
        }

        #clockdiv>div {
            padding: 10px;
            border-radius: 3px;
            background: #121212;
            display: inline-block;
            margin: 10px;
        }

        #clockdiv div>span {
            padding: 15px;
            border-radius: 3px;
            background: #121212;
            display: inline-block;
        }

        .thumbnail_image {
            width: 240px;
            height: 150px;
            padding: 10px;
        }

        .events {
            padding: 10px;
            border: 3px #bdbdbd double;
            margin-bottom: 10px;
        }
          .sponsors{
            height: 150px;
            width: 250px;
            padding: 10px;
        }
        .card{
            margin: 10px;
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
            <a class="navbar-brand d-none d-lg-block float-left" href="">INCEPTUM</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 <!--<li class="nav-item active">-->
                    <!--    <a class="nav-link" href="#events">Events <span class="sr-only">(current)</span></a>-->
                    <!--</li>-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://docs.google.com/spreadsheets/d/1P4Ylzds4-kNOUqOxOfeMg00rXHvViQ06mYztxt2ovwk/edit?usp=sharing" target="_blank">Schedule <span class="sr-only">(current)</span></a>
                    </li
                      <li class="nav-item">
                        <a class="nav-link" href="https://docs.google.com/document/d/1eCLiNesEIOgikJA1JnmY4regOM7HImW8gaTOPgZlAR8/edit?usp=sharing" target="_blank">Safety Rules <span class="sr-only">(current)</span></a>
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

    <!-- </div front> -->
    <div class="container-fluid top-pad  top-layout black-color">
        <div class="container-fluid" style="padding: 0px 20px 0px 20px;">
            <div class="row text-center">
                <div class="col-sm-8 col-xs-12 col-md-4  col-xl-4">

                    <center style="margin-bottom: 10px;">
                        <img src="assets/img/ManishSisodia.jpg" alt="Manish Sisodia Chief Guest" class="img-fluid rounded-circle pad-out">
                        <h3><strong>Sh. Manish Sisodia</strong></h3>Hon'ble Deputy Chief Minister of Delhi<br>Chief Guest
                    </center>
                </div>
                <div class="col-sm-10 col-xs-12 col-md-4 col-xl-4" style="color:#E0E0E0; ">
                    <center>
                        <h2><bR><strong style="font-size: 60px"> Inceptum</strong><br></h2>
                        <strong style="font-size: 30px"> 01<sup>st</sup> - 02<sup>nd</sup> November,2019<br></strong>
                        Organized By <br>
                        <strong style="font-size: 40px">G. B. Pant Engineering College</strong><br><br>
                        <strong>RSVP <br>
                            <h2> Prof. O.P. Verma</h2>(Principal)
                        </strong>
                    </center>
                </div>
                <div class="col-sm-8 col-xs-12 col-md-4 col-xl-4">

                    <center style="margin-bottom: 10px;">
                        <img src="assets/img/MPPoonia.jpg" alt="M P Poonia Guest of Honour" class="img-fluid rounded-circle pad-out">
                        <h3><strong>Dr. M.P. Poonia</strong></h3>Vice-Chairman AICTE<br>Guest of Honour<br>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!--Count-->
    <div class="grey-color">
        <center>
            <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                <h1 class="font-weight-bolder top-pad" style="color:#000;">Inceptum Countdown:</h1>
                <div id="clockdiv">
                    <div>
                        <span class="days" id="day"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div>
                        <span class="hours" id="hour"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div>
                        <span class="minutes" id="minute"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div>
                        <span class="seconds" id="second"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>

                <p id="demo"></p>
            </div>
        </center>
    </div>
    <!--Event-->
    <div class="container white-color" id="events">
        <CENTER>
            <h1 class="font-weight-bolder top-pad">EVENTS</h1>
        </CENTER>
        <div class="row text-center">

            <div class="col-xl-3 col-md-6 col-sm-6">
                <div class="events">
                    <a href="cse.php" class="thumbnail">
                        <img class="thumbnail_image rounded" src="assets/img/cse.jpg" alt="CS Events">
                        <div class="caption">
                            <h3>Computer Science <br><br></h3>
                        </div>
                    </a></div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <div class="events">
                    <a href="ece.php" class="thumbnail">
                        <img class="thumbnail_image" src="assets/img/ece.jpg" alt="CS Events">
                        <div class="caption">
                            <h3>Electronics & Communication </h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <div class="events">
                    <a href="mae.php" class="thumbnail">
                        <img class="thumbnail_image" src="assets/img/mae.jpg" alt="CS Events">
                        <div class="caption">
                            <h3>Mechanical & Automation </h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <div class="events">
                    <a href="informal.php" class="thumbnail">
                        <img class="thumbnail_image" src="assets/img/informal.jpeg" alt="CS Events">
                        <div class="caption">
                            <h3>Informal<br><br> </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pratners -->
    <div class="container-fluid margin-top text-center" style=" padding: 10px; border: 3px #000 double; margin-bottom: 10px;">
        <center>
            <h1><strong>Sponsors and Partners </strong></h1>
                        <div class="container text-center" style="padding:0px;">
                <div class="row text-center" style="margin:0px; align-content: center;
    -webkit-box-align: center;
    padding-left: 40px;">
                    <div class="card">
                        <img src="assets/img/sponsors/microsoft.png" class="sponsors">
                    
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/aptron.png" class="sponsors">
                    
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/High_technologies_solution.jpg" class="sponsors card-img-top">
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/coding-blocks.jpg" class="sponsors card-img-top">
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/pioneer.jpg" class="sponsors card-img-top">
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/Hackerearth.png" class="sponsors card-img-top">
                    </div>
                    <div class="card">
                        <img src="assets/img/sponsors/Freshlybuilt.png" class="sponsors card-img-top">
                    </div>
                     <div class="card">
                        <img src="assets/img/sponsors/ace.png" class="sponsors card-img-top">
                    </div> 
                    <div class="card">
                        <img src="assets/img/sponsors/time.png" class="sponsors card-img-top">
                    </div> 
                    <div class="card">
                        <img src="assets/img/sponsors/robospecies.png" class="sponsors card-img-top">
                    </div> 
                    <!--<div class="card">-->
                    <!--    <img src="assets/img/sponsors/" class="sponsors card-img-top">-->
                    <!--</div> -->

                </div>
            </div>

        </center>

    </div>

    <footer>
        <div class="container-fulid black-color top-pad" style="font-size: 14px;">
            <center>
                Copyright © 2019 | All Rights Reserved

            </center>
            <div class="text-right" style="padding-right: 30px;"><a href="about.php">Managed by: Akshat Kumar</a></div>
        </div>
    </footer>

    <!--SCript-->
    <script>
        var deadline = new Date("nov 2, 2019 17:00:00").getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();
            var t = deadline - now;
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("day").innerHTML = days;
            document.getElementById("hour").innerHTML = hours;
            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML = seconds;
            if (t < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME UP";
                document.getElementById("day").innerHTML = '0';
                document.getElementById("hour").innerHTML = '0';
                document.getElementById("minute").innerHTML = '0';
                document.getElementById("second").innerHTML = '0';
            }
        }, 1000);
    </script>
    <script src="assets/js/header.js"></script>
</body>

</html>