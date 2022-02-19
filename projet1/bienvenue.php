<?php include('Includes/login.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div align="center">
    <h1 align="center"> Bonjour cher etudiant : <?php echo $_SESSION['prenom']." ".$_SESSION['nom']; ?> </h1>
    <ul>
        <hr>
         <a href="profil.php">mon profil</a>
        <hr>
        <a href="liste.php">liste des eleves</a>
        <hr>
        <a href="Includes/deconnecter.php">Deconnexion</a>
        <hr>
    </ul>
    </div>
</body>
</html>

