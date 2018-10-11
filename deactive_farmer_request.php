<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/11/2018
 * Time: 11:24 PM
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $time = $_POST['time'];
    $sql = "UPDATE `farmer_requests` SET `active_status` = b'0' WHERE  `farmer_requests`.`time` = $time";


    if ($mysqli->query($sql)) {
        $_SESSION['message'] = "Previous Request deleted successfully";
        header("location: success.php");
        die();

    } else {
        $_SESSION['message'] = "Sorry. Request couldn't be deleted.";
        header("location: error.php");
        die();
    }

}
else{
    $_SESSION['message'] = "Sorry. Invalid Request";
    header("location: error.php");
    die();

}