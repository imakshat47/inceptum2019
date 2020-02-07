<!Doctype html>
<html>
<head>
     <title> Inceptum | Registration </title>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
         
        .top-layout {
            min-height: 100vh;
            padding-top: 80px;
            margin-top: 30px;
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
                        <a class="nav-link" href="https://docs.google.com/document/d/1SbvfIW3GrzC_q4dsDvoEZpqfcgDP7bF4te-j_6THRjA/edit" target="_blank">Schedule <span class="sr-only">(current)</span></a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <div class="text-center top-layout white-color">
        <?php
        require 'assets/includes/common.php';
        include 'assets/includes/css.php';
    
        $Sql = "SELECT u.Id,u.Name,u.Email,u.Contact,u.College,c.Event_name FROM users  u, cart c Where u.Id=c.User_id ORDER BY u.Id DESC;";
        $result = mysqli_query($conn, $Sql);
        if (mysqli_num_rows($result) > 0) {
            ?>
            <div class='table-responsive'>
                <table id='myTable' class='table table-striped table-bordered'>
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>College</th>
                            <th>Events</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $count = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                            <tr>
                                <td><?php $count++; echo $count; ?></td>
                                <td><?php echo $row['Name'] ;    ?></td>
                                <td><a href="tel:+91-<?php echo $row['Contact'];?>"><?php echo $row['Contact'] ;?></a></td>
                                <td><?php  echo$row['Email'] ; ?></td>
                                <td><?php echo $row['College'] ; ?></td>
                                <td><?php echo $row['Event_name'] ; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        <?php } else {
            echo "you have no records";
        }
        ?>
    </div>
</body>

</html>