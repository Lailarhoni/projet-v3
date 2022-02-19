<?php include 'db.inc.php';

if (isset($_POST['register']))
{

    $code = $_POST['codeAp'];
    $nom  = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $num  = $_POST['tele'];
    $pwd  = $_POST['mdp'];
    //addslashes(file_get_contents($_FILES['image']['name']));
    if (!empty($code)  &&  !empty($pwd) && !empty($prenom) && !empty($nom) )
    {
    $rqt = "INSERT INTO ginf1( mdp , codeAp, nom, prenom, tele,  email) VALUES ('$pwd','$code','$nom','$prenom','$num', '$email')";
    
}
    $rslt = mysqli_query($connection, $rqt);
    if ($rslt) {
        //echo'<script type="text/javascript"> alert("done")</script> ';
        header('location:../liste.php'); 
        //echo "welcome new member";
    exit(); }
    }
    else {
        header('location:../index.html?error=operationFailed');
        //echo "Error: retry again";
    }

if (isset($_POST['annuler'])) {
    header('location:../index.html');

}

?>