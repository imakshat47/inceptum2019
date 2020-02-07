<?php require 'assets/includes/common.php'; 
 if(isset($_SESSION['email'])){
        header('location: index.php');
    }
    ?>
<!Doctype html>
<html lang="en">

<head>
  <title> Inceptum | Login </title>
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
            <li class="nav-item"><a class="nav-link" href="signup.php"><span class=" "> </span> Sign Up</a></li>
            <li class="nav-item active"><a class="nav-link" href="login.php"><span class=" "> Login</span></a></li>
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
          <h1><strong>Login</strong></h1>
        </center>
        <form action="assets/includes/log_in.php" method="post">
          <div class="modal-body">
            <div class="alert alert-info">
              <?php if (isset($_SESSION['message'])) {
                echo $_SESSION['login_message'];
              } ?>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="Email" placeholder="Email Address for communication" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address"></div>
            <div class="form-group">
              <input type="password" class="form-control" name="Password" placeholder="Password" required pattern=".{6,}" title="Must contain at least 6 or more characters">
            </div>
            <!-- <a href="log_in.php"><button type="submit"  class="btn btn-md btn-primary"> Login</button></a>     -->

            <div style="text-align:right">
              <a href="signup.php" class="btn btn-danger">
                Don't have an<strong><u> Account !!</u></strong></a></div>
          </div>
          <div class="modal-footer">
            <a href="about.php" style="padding-right: 5px; color:#000;"><strong><u>Forgot Password!!</u></strong></a>
            <a href="log_in.php"><button type="submit" class="btn btn-md btn-primary"> Login</button></a>
          </div>
        </form>
      </div>
    </div>

  </div>
  <script src="assets/js/header.js"></script>
</body>

</html>