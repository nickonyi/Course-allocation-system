<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "course_allocation_system_db";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$conn){
    die("failed to connect!");
}  

?>