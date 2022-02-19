<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sty_list.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>liste des étudiants GINF1 </h1>
        <br><br><br>
    <table border="10px" class="tabl">
        <hr>
        <tr>
            <td>code apogee   </td>
            <td>nom   </td>
            <td>prenom   </td>
            <td>telephone  </td>
            <td>email  </td>
            <td>image  </td>
        </tr>

    <?php
    include 'Includes/liste.inc.php';
    foreach($student as $GINF1): ?>
        <tr>
        <td> <?=$GINF1["codeAp"] ?></td>
        <td> <?= $GINF1["nom"] ?></td>
        <td> <?= $GINF1["prenom"] ?></td>
        <td> <?= $GINF1["tele"] ?></td>
        <td> <?= $GINF1["email"] ?></td>
        <td> <?php echo'<img src="image/'.$GINF1["prenom"].'.jpg" " height="200" width="200">'; ?> </td>
        </tr>

    <?php endforeach
   // C:\xampp\htdocs\projet_im\image\ '.$GINF1["prenom"].'jpg
    ?>
    </table>
    <hr>
    
    <a href="add.php">ajouter eleve</a> <br>
    <a href="Includes/supp.inc.php">supprimer eleve</a> <br>
    <a href="bienvenue.php">annuler</a>
    </center>

</body>
</html>