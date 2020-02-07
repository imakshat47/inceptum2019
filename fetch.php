<!Doctype html>
<html>

<body>
    <div class="text-center">
        <?php
        require 'assets/includes/common.php';
        include 'assets/includes/css.php';
        $count = 1;
        $count = $_GET['co'];
        $event = $_GET['ev'];
        $Sql = "SELECT u.Id,u.Name,u.Email,u.Contact,u.College,c.Event_name FROM users u, cart c Where u.Id = c.User_id AND Branch='$event' And c.Event_id='$count' ORDER BY u.Id DESC;";
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
                        $no = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                        $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
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
        <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input disabled type="submit" name="Export" class="btn btn-success" value="export to excel" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>