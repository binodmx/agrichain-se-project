<!doctype html>
<html lang="en">
<head>
    <title>Edit My Request</title>
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

<body>
<?php include 'Agri/Nav_bar.php';?>
<div class="container-fluid" style="margin:0 ;">
    <div class="row">
        <div class="col-sm-2" style="background-color:lavender;"><?php include 'Agri/side.php'; ?> </div>
        <div class="col-sm-10" style="background-color:lavenderblush;"> </div>
    </div>
</div>

<div class="container center_div">
    <h1>Edit My Request</h1>
    <form action="farmer_eddit_request.php" method="post" enctype="multipart/form-data">
        <div class="field-wrap">
            Type of Vegitable       :<br>
            <input type="text" name="type"   required>
            <br>
            Quentity                :<br>
            <input type="number" name = "quentity"  required>
            <br>
            <input class='button button-block' type="submit" value="Submit">
        </div>

    </form>

</div>



</body>

</html>