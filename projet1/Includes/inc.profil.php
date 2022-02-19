<?php 
include 'db.inc.php';
include 'login.inc.php';
if(isset($_POST['back'])){ header('location:../bienvenue.php') ;}
if(isset($_POST['modifier'])){ 
  echo'
<body>
  <center>
  <div>
  <h2> veuillez entrer les changement voulue:</h2>
  <form  method="post" action="modify.inc.php">
  <p> code apogee:</p>
  <input type="text" name="code" >

  <p>user name:</p>
  <input type="text" name="prenom">

  <p>user last name: </p>
   <input type="text" name="nom">

  <p>user number:</p>
   <input type="text" name="tele">

   <p>user email:</p>
   <input type="text" name="email">

  <p>user password:</p>
  <input type="password" name="passw">
  <br>  <br>
  <input type="submit" name="register" value="register">
  <input type="submit" name="annuler" value="Back">
  <br>
  </form>
  </div>
  </center>
</body>';
}
?>