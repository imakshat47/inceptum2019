<?php require 'assets/includes/common.php'; 
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
?>
<!Doctype html>
<html lang="en">

<head>
    <title> Inceptum | SignUp </title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
        .top-layout {
            /* max-height: 120vh; */
            padding-top: 40px;
            margin-top: 90px;
            padding-bottom: 20px;
        }

        .pad-out {
            padding: 10px;
        }
    </style>
</head>

<body class="white-color">

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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#events">Events <span class="sr-only">(current)</span></a>
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
                        <li class="nav-item active"><a class="nav-link" href=""><span class=" "> </span> Sign Up</a></li>
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
    <div class="container-fluid top-layout">

        <div class="row">
            <div class="col-sm-6 offset-sm-3 col-xs-12">
                <center class="pad-out">
                    <h1><strong>Sign Up </strong></h1>
                </center>
                <form action="assets/includes/sign_up.php" method="post">

                    <div class="alert alert-info">
                        <?php if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        } ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" placeholder="Name" required pattern="^[a-zA-Z ]{5,20}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="Email" placeholder="Email Address for communication" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Password" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}$" title="Must contain UpperCase, LowerCase, Number and at least 6 or more characters">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="Contact" placeholder="Contact" required pattern=".{10,10}" title="Enter a valid number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="College" placeholder="College Name" required pattern=".{10,100}" title="Enter your full College Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Address" placeholder="Your Address" required pattern=".{10,100}"title="Enter your full address" >
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>

                    <div class="text-right">
                        <a href="login.php">Have an<strong><u> Account !!</u></strong></a>
                    </div>
                    
                    <div class="">
                        <a href="contact.php">Any Issue <strong><u>Contact Us !!</u></strong></a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="assets/js/header.js"></script>
    <script>
'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd &&
(window._trfd=[]),_trfd.push(

{'tccl.baseHost':'$BASEHOST'}),_trfd.push(

{'ap':'$AP'},{'server':'$HOSTNAME'})
// Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</body>

</html>