<?php
$server = "localhost";
$user = "root";
$pass = "";
$database= "db_login";

$corn = mysqli_connect($server,$user,$pass,$database);

if (!$corn){
    die("<script>alert('connection Failed.')</script>");
}

?>