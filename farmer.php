<?php

require 'db.php';

$result = $mysqli->query("SELECT type_id,quantity,time FROM farmer_requests where active_status=1");
if ($result->num_rows > 0) {

    $requests = array();

    while ($row = $result->fetch_assoc()) {
        $requests[] = $row;
    }


} else {

    $requests = array();

}

?>
<!--<!doctype html>-->
<html lang="en">
<head>
    <title>Farmer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        <?php include "Agri/bootstrap.min.css";
            include "Agri/bootstrap.css";
            include "Agri/_variables.scss";
            include "Agri/_bootswatch.scss"
        ?>
    </style>

</head>

<?php include 'Agri/Nav_bar.php'; ?>

<body>

<div class="container-fluid" style="margin:0 ;">
    <div class="row">
        <div class="col-sm-2" style="background-color:lavender;"><?php include 'Agri/side.php'; ?> </div>
        <div class="col-sm-10" style="background-color:lavenderblush;"></div>
    </div>
</div>

<div class="container">

    <table class="table">
        <tr>
            <th>Type Of Products</th>
            <th>Quentity</th>
            <th>Price (RS.)</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        <?php
        if (count($requests) > 0) {

        foreach ($requests

        as $m) { ?>
        <tr>


            <form action="deactive_farmer_request.php" method="post">

                <td> <?= $m['type_id'] ?></td>
                <td> <?= $m['quantity'] ?></td>
                <td>100</td>
                <td><input class="btn btn-danger" type="submit" value="Update" name="update"></td>
                <td><input class="btn btn-danger" type="submit" value="Delete" name="delete"></td>
                 <td><input type="hidden" value="<?php echo $m['time']; ?>" name="time">  <td>
                 <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>

            </form>
        </tr>
                <?php }
                }
                else { ?>
                    <div class="row topfive-margin">
                        <div class="col-lg-12">

                            <h2>No Data to dispaly</h2>

                        </div>

                    </div>
                <?php } ?>

    </table>


</div>

</body>

</html>