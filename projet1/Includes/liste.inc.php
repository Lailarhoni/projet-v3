<?php 
include 'db.inc.php';
$rqt="SELECT * from ginf1 ";
session_start();
$student=mysqli_query($connection,'select codeAp, nom, prenom, tele, email, img from ginf1');

?>