<?php if(isset($_POST['register'])){
  $ps=$_POST['passw'];
  $c=$_POST['code'];
  $pn=$_POST['prenom'];
  $n=$_POST['nom'];
  $t=$_POST['tele'];
  $e=$_POST['email'];

  $sql = "UPDATE ginf1 SET  mdp='".$ps."' nom='".$n."' prenom='".$pn."' tele='".$t."' email='".$e."' WHERE codeAp='".$c."'";
  $rs=mysqli_query($connection,$sql);

}
if(isset($_POST['annuler'])){
  header("location:../profil.php");
}
?>
