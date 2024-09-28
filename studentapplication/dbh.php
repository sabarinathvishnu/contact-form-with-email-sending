<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "stdcrud";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$connection){
    die(mysqli_error);
}
?>