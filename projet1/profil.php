<?php 
include 'Includes/login.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sty_list.css">

</head>
<body>
    <center>
        <div>
            <table border="10px" class="tabl" >
                <tr>
                    <td>profil:</td>
                    <td><?php echo'<img src="image/'.$_SESSION['prenom'].'.jpg" height="200" width="200">'; ?>
                    <form action="Includes/upload.inc.php" method="POST" enctype="multipart/form-data" >
                    <input type="file" name="image" id="image">
                    <input type="submit" name="upload" value="upload">
                    <p><li>NB: fichier jpg nommée: prenom.jpg </li></p>
                    </form>    </td>
                </tr>
                <tr>
                    <td>code apogee: </td>
                    <td> <?php echo $_SESSION['codeAp']; ?> </td>
                </tr>
                <tr>
                    <td>nom: </td>
                    <td> <?php echo $_SESSION['nom']; ?></td>
                </tr>
                <tr>
                    <td>prenom: </td>
                    <td> <?php echo $_SESSION['prenom']; ?></td>
                </tr>
                <tr>
                    <td>numero tele: </td>
                    <td>  <?php echo  $_SESSION['tele']; ?> </td>
                </tr>
                <tr>
                    <td>email: </td>
                    <td>  <?php echo $_SESSION['email']; ?> </td>
                </tr>
            </table>
            <form action="Includes/inc.profil.php" method="POST">
                <input type="submit" name="modifier" value="modifier">
                <input type="submit" name="back" value="back">
            </form>
        </div>
    </center>
</body>
</html>