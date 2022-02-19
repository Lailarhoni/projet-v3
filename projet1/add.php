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
    <center>
        <div>
            <form action="Includes/add.inc.php" method="POST" >
            <table>
                <tr>
                    <td>code apogee</td>
                    <td><input type="text" name="codeAp"> </td>
                </tr>
                <tr>
                    <td>nom</td>
                    <td><input type="text" name="nom"> </td>
                </tr>
                <tr>
                    <td>prenom</td>
                    <td><input type="text" name="prenom"> </td>
                </tr>
                <tr>
                    <td>numero tele</td>
                    <td><input type="text" name="numT"> </td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email"> </td>
                </tr>
                <tr>
                    <td>password </td>
                    <td><input type="text" name="mdp"> </td>
                </tr>
                <tr >
                <td> </td>
                <td> <input type="submit" name="ADD" value="ajouter">   <input type="submit" name="btn" value="annuler"> </td>
            </tr>
            </table>
            </form>
        </div>
    </center>
</body>

</html>