<!doctype html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
<?php include "bootstrap.min.css";
	include "bootstrap.css";
	include "_variables.scss"; 
	include "_bootswatch.scss" 
?>
</style>
  
</head>
<body>
<?php include 'Nav_bar.php';?>
<div class="container-fluid" style="margin:0 ;">
  <div class="row">
    <div class="col-sm-2" style="background-color:lavender;"><?php include 'side.php'; ?> </div>
    <div class="col-sm-10" style="background-color:lavenderblush;"> </div>
  </div>
</div>

</body>

</html>