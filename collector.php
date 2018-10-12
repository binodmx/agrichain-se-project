<?php  
 $connect = mysqli_connect("localhost", "root", "", "ams");
 if ($connect) {
 session_start();}
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  

 if(isset($_POST['update'])){
        $types = mysqli_real_escape_string($connect, $_POST['types']);  
        $quantity = mysqli_real_escape_string($connect,  $_POST['quantity']); 
 	if (!is_numeric($quantity)) {
        // Error
	    $message = 'Enter valid input!';
            echo "<script type='text/javascript'>alert('$message');</script>";
    	} else {
        // Continue
	$result = mysqli_query($connect,"UPDATE distributor_requests SET quantity ='$quantity' WHERE type='$types'");
	if($result){
	    $message = 'Updated Successfully!';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
	    $message = 'Unsuccesfull!';
            echo "<script type='text/javascript'>alert('$message');</script>";
	}	
    }
    
}
if(isset($_POST["refresh"]))  
 {  
      header("Refresh:0");
 }
 if(isset($_POST['update_del'])){
        $type = mysqli_real_escape_string($connect, $_POST['type']);  
        $quantity = mysqli_real_escape_string($connect,  $_POST['quantity']); 
        $status = mysqli_real_escape_string($connect,  $_POST['status']); 
 	if (!is_numeric($quantity)) {
        // Error
	    $message = 'Enter valid input!';
            echo "<script type='text/javascript'>alert('$message');</script>";
    	} else {
        // Continue
	$result = mysqli_query($connect,"UPDATE delivery SET quantity ='$quantity', status='$status' WHERE type='$type'");
	if($result){
	    $message = 'Updated Successfully !'.$quantity.'Kg';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
	    $message = 'Unsuccesfull!';
            echo "<script type='text/javascript'>alert('$message');</script>";
	}	
    }
    
}


?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Agri Chain</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>
	<style>
.split {
  height: 100%;
  width: 33%;
  position: fixed;
  z-index: 1;
  top: 10;
  overflow-x: hidden;
  padding-top: 20px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}
/* Control the left side */
.left {
  left: 0;
  background-color: #112333;
  color:#FFFFFF;
}
.middle {
  center: 0;
  background-color: grey;
}
/* Control the right side */
.right {
  right: 0;
  background-color: grey;
  color:#FFFFFF;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}	</style>

	  
      <body> 
<div class="toppane" align='center'><h2>Collector Dash Board</h2></div>
 <div class="split left">
  <div class="centered">

    <h2>Update Delivery</h2>
<form method="post" >  
                    
                     <br />
					 
					 <label>Delivery Item</label> 
					 
					 
					 <br>
					   <select name="type" class="form-control">
					<?php 
					$sql = mysqli_query($connect, "SELECT type FROM delivery");
					while ($row = $sql->fetch_assoc()){
					echo "<option value=". $row['type'].">" . $row['type'] . "</option>";
					}
					?>
						</select>
						</br>

<label>Delivery Status</label> 
					 
					 
					   <br>
					   <select name="status" class="form-control">
							<option value="collected">Collected</option>
							<option value="transported">Transported</option>
							<option value="delivered">Delivered</option>
							<option value="discarded">Discarded</option>
						</select>
						</br>
					 
					 
					 
                     <label>Quantity</label>  
                     <input  style='margin:5' type="text" name="quantity" placeholder="quantity" class="form-control" />  
                     <br />
                     <input type="submit" name="update_del" value="Deilvery Update" class="btn btn-info" />  
                     <br /> 

		
                </form>  
  </div>
</div>

<div class="split centered" >
  <div class="centered" style = "margin-top:250px">
    <h2>Check Availability</h2>
<br>
<br>
<?php
$result = mysqli_query($connect,"SELECT * FROM farmer_requests");

echo "<table border='1' >
<tr>
<th>Type</th>
<th>Quantity</th>
<th>Collected</th>
<th>Contact</th>
<th>Time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['collected'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['time'] . "</td>";

echo "</tr>";
}
echo "</table>";

?>
<form method="post" >
<br />  
                     <input type="submit" name="refresh" value="Refresh" class="btn btn-info" />  
                     <br /> 
</form>
  </div>
</div>
<div class="split right">
  <div class="centered">
    <h2>Update Stock</h2>
 <form method="post" >  
                    	 <br>			
<label>Items</label> 
<select name="types" class="form-control">
<?php 
$sql = mysqli_query($connect, "SELECT type FROM prices");
while ($row = $sql->fetch_assoc()){
echo "<option value=". $row['type'].">" . $row['type'] . "</option>";
}
?>
</select>
</br>
					 
					 
					 
                     <label>Quantity</label>  
                     <input  style='margin:5' type="text" name="quantity" placeholder="quantity" class="form-control" />  
                     <br />  
                     <input type="submit" name="update" value="Update" class="btn btn-info" />  
                     <br /> 
                </form>  
  </div>
</div> 
	<?php
mysql_close($connect);
?>  
	
      </body>  
</html>
