<?php 
include('db.inc.php');
session_start();
if(!empty($_POST['codeAp']) && !empty($_POST['mdp'] ) && isset($_POST['connexion']) ){
$user_code=$_POST['codeAp'];
$password=$_POST['mdp'];

$rqt="SELECT * FROM ginf1 WHERE codeAp='".$user_code."' AND mdp='".$password."'";

$rst=mysqli_query($connection,$rqt);

if(!$rst){
header('location:../index.html?error=not_existed');
echo'<script type="text/javascript"> alert("error, try again! ")</script> ';
} 
else{
    $row = mysqli_fetch_assoc($rst);
    $_SESSION['codeAp']=$row['codeAp'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['prenom']=$row['prenom'];
    $_SESSION['tele']=$row['tele'];
    $_SESSION['email']=$row['email'];
    header('location:../bienvenue.php');
}

}
if(isset($_POST['annuler'])){
    header('location:../profil.php');

}





