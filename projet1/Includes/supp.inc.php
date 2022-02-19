<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<div align="center">
<form method="post" action="supp.inc.php">
    <p> code apogee:</p> 
    <input type="text" name="codeAp" placeholder="student code...">
    <hr>
        <input type="submit" name="delete" value="supprimer">    
    
        <input type="submit" name="annuler" value="annuler"> 
    <hr>
</form>
</div>
</body>
</html>
<?php 
include('db.inc.php');
session_start();
if(isset($_POST['delete'])){
    $cod=$_POST['codeAp'];
    $sql = "DELETE FROM ginf1 WHERE codeAp='".$cod."'";
    $rst=mysqli_query($connection,$sql);
    header('location:../liste.php');
}
if(isset($_POST['annuler'])){
    header('location:../liste.php');
}
?>