<?php include_once 'db.inc.php';


    if (isset($_POST['ADD'])) {
        session_start();
        $code = $_POST["codeAp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $num = $_POST["numT"];
        $email = $_POST["email"];
        $pwd = $_POST["mdp"];


        $rqt = "INSERT INTO GINF1 (mdp,CodeAp, nom, prenom, tele, email ) VALUES ('$pwd', '$code', '$nom', '$prenom', '$num','$email' );";
        $rst = mysqli_query($connection, $rqt);
        if ($rst) {
            echo '<p align="center"> operation done </br> <a href="../liste.php">return</a> </p>';
        } else {
            echo '<p align="center"> operation failed, try again  </br> <a href="../add.php">return</a> </p>';
        }
    }
    if (isset($_POST['btn'])){
        header('location:../liste.php');
    }
    ?>