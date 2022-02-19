<?php 
include_once('login.inc.php');
if(isset($_POST['upload'])){
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
    $folder = '../image/';
    $user_code= $_SESSION['codeAp'];
    move_uploaded_file($tempname, $folder.$filename);
    include_once('db.inc.php');
    $sql = "INSERT INTO ginf1 (img) VALUES ('$filename') where codeAp= '".$user_code."' ";
    $data=mysqli_query($connection, $sql);
    if($data){
        header("location:../profil.php");
    }else {
        header("location:../profil.php?error");
    }
          
  }
?>

