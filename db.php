
<?php
/* Database connection settings */
require 'config.php';
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ams';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);