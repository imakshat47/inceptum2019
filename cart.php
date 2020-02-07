<?php require 'assets/includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$pamount = 0;
$user_id = $_SESSION['id'];
?>
<?php function check_if_added_to_cart()
{

    include 'assets/includes/common.php';
    $user_id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $query_added_to_cart = "SELECT Transaction_id FROM trans WHERE Email='$email' AND User_id ='$user_id' AND Status='Confirmed';";
    $result_carts = mysqli_query($conn, $query_added_to_cart);
    $rowcounts = mysqli_num_rows($result_carts);
    if ($rowcounts == 1) {
        return 0;
    } else {
        return 1;
    }
} ?>
<!Doctype html>
<html>

<head>
    <?php include 'assets/includes/head.php';
    include 'assets/includes/css.php'; ?>
    <style>
        .top-layout {
            min-height: 86vh;
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

<body>
    <header>
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
    </header>
    <content>
        <div class="container-fluid top-layout white-color">
            <center>
                <b>
                    <p style="font-size: 32px;">CART</p>
                    <div class="btn btn-md " style="color:red;background:yellow; margin:10px;">
                        <b><?php
                              $_SESSION['cart-payment']="Payment On-spot!!";
                            if (isset($_SESSION['cart-payment'])) {
                                echo $_SESSION['cart-payment'];
                            } ?></b>
                    </div>
                </b>
            </center>
            <div class="row table-responsive-lg">
                <div class="col-xs-12 col-sm-10 offset-sm-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"> Item Number</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_id = $_SESSION['id'];
                            $total_sum = 0;

                            $result_cart_query = mysqli_query($conn, "Select * from cart Where User_id='$user_id';");
                            $p_no = 0;
                            while ($row = mysqli_fetch_array($result_cart_query)) {
                                $total_sum = $total_sum + $row['Fee'];
                                $p_no++;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $p_no; ?> </th>
                                    <th><?php echo $row['Event_name']; ?> </th>
                                    <td><?php echo $row['Fee']; ?></td>
                                    <td><?php echo '<a href="assets/includes/cart-remove.php?name=' . $row['Event_name'] . '">Remove</a>'; ?> </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th></th>
                                <th>
                                    <h4><b>
                                            <center>Total</center>
                                        </b></h4>
                                </th>
                                <th>
                                    <h4><strong>Rs <?php $pamount = $total_sum;
                                                    echo $total_sum; ?>/-</strong></h4>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th colspan="2">
                                    <form method="post" action="">

                                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                                        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $user_id; ?>">
                                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                        <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo  $pamount; ?>">
                                        <?php if (!isset($_SESSION['email'])) {
                                            echo '<a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#loginModal" style="padding: 5px;" class="btn btn-danger">Payment Now!</button>';
                                        } else {
                                            if (check_if_added_to_cart()) {
                                                //echo '<center><button type="button" class="btn btn-primary btn-lg"><h3>Pay Now!! </h3></button></center>';  ?>
                                                 <!--<input value="CheckOut" type="submit" onclick="" class="btn btn-primary"> -->
                                        <?php } else {

                                                // echo '<a href="checkout.php" name="add" value="add" class="btn btn-primary">Payment done!</a>';
                                            }
                                        } ?>
                                    </form>
                                </th>
                                <th></th>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </content>
</body>
<footer>
    <div class="container-fulid black-color top-pad" style="font-size: 14px; ">
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