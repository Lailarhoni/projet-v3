<?php 

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ensa";

$connection= mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname );
if(!$connection){
    die("connection failed: ");
    exit();
}
?>