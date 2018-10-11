<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/11/2018
 * Time: 11:24 PM
 */
require 'db.php';
if (isset($_POST)) {

    if (isset($_POST['time'])) {
        $time = $_POST['time'];
        $time_result = $mysqli->query("select * from farmer_requests where time= '$time'");


    if (isset($_POST['delete'])) {
                if ($time_result->num_rows > 0) {
                    $time_result_array = $time_result->fetch_assoc();
                    $time = $time_result_array['time'];

                    $sql = "UPDATE `farmer_requests` SET `active_status` = b'0' WHERE `farmer_requests`.`time` = '$time'";
                    if($mysqli->query($sql)){
                        header("Location: {$_REQUEST["destination"]}");
                    }
                    else{

                        $_SESSION['message'] = "Sorry.Accept action could't be completed.";
                        header("location: error.php");
                        die();

                    }


                }
                else {
                    $_SESSION['message'] = "Sorry.Data couldn't be found on database.";
                    header("location: error.php");
                    die();
        }}
       else if (isset($_POST['update'])) {
            if ($time_result->num_rows > 0) {
                header("location: edit_record_farmer.php");
                die();
            }
            else {
                $_SESSION['message'] = "Sorry.Data couldn't be found on database.";
                header("location: error.php"); // error
                die();
            }}}
        else {
                $_SESSION['message'] = "Sorry.Unique time not found";
                header("location: error.php");
                die();
            }}

else {
    $_SESSION['message'] = "Sorry.Invalid Request";
    header("location: error.php");
    die();
}