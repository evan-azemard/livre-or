<?php
session_start();        //On démare la session
$error = array();     //le table stoker les erreurs.
$bdd = new mysqli("localhost", "root", "", "livreor");
    if (!$bdd)              //Si la bdd ne s'ouvre pas on affiche les erreurs.
    {
        echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
        echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
        echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

if (isset($_POST["inscription"]))      //Pour le formulaire d'inscription...
{
    $pseudo = $_POST["pseudo"];         //On place les donné des input dans des variables.
    $password = $_POST["password"];
    $r_password = $_POST["r_password"];

    if (strlen($pseudo) > 12)
    {
        array_push($error, "Le pseudo est trop long");
    }
    if (strlen($pseudo) < 4)
    {
        array_push($error, "Le pseudo est trop court");
    }
    if ($password !== $r_password)
    {
        array_push($error, "Le mot de passe répété n'est pas le même");
    }
    if (strLen($password) < 7)
    {
        array_push($error, "Le mot de passe dois faire au moins 7 charactères");
    }

    $sql = "SELECT * FROM utilisateurs";    //On ce connecte a la base utilisateur.
    $res = mysqli_query($bdd, $sql);
    $password = md5($password);

    foreach ($res as $row)              //foreach va faire une boucle, parcourire mon tableaux $res et le "as" va dire de ranger les donnée de $res dans une nouvelle variable $row)
    {
         if ($row["login"] == $pseudo)    //On selectione le champs "login" de ma bdd , si c'est identique au pseudo on affiche le message.)
        {
            array_push($error, "Le pseudo est déja utilisé");
        }
    }


    foreach ($error as $erreure)    //Toutes les erreurs trouvé sont mis dans la variable $erreurs puis on les écrit.
    {
        echo "• " . $erreure . "<br>";
    }
    if (count($error) < 1)   //Si il n'y à pas d'erreurs, on inssére les données dans le table utilisateurs de la bdd.
    {
    $sql = 'INSERT INTO `utilisateurs`(`login`, `password`) VALUES ("' . $pseudo .'","' . $password . '")';
    $res = mysqli_query($bdd, $sql);
	header('Location: ../connexion/connexion.php?');
    }

}
if (isset($_POST["connexion"])) {
	$pseudo = $_POST["pseudo"];
    $password = $_POST["password"];
    $password = md5($password);

//slectione l'id et le login (where) dont le champs login de la bdd est = au login du formulaire de connexion et password = au password.
    $sql = 'SELECT `id`,`login` FROM `utilisateurs` WHERE `login` = "' . $pseudo .'" AND `password` = "' . $password . '";';
    $res = mysqli_query($bdd, $sql);

    foreach ($res as $row)    
    {                               //on créer un varialbe $SESSION et on y range dedans l'id  et le login contenue dans la     variable $row pour pouvroi les utilisé plus facilement plus tard.
    	$_SESSION["id"] = $row["id"];              
    	$_SESSION["username"] = $row["login"];
    	header('Location: ../profil/profil.php');
	}
    echo "<center>Identifiants Invalides.</center>";
}




        
if (isset($_SESSION["username"]))
{ 

    if (isset($_POST["n_pseudo"]) AND isset($_POST["n_password"])) 
    { 
        $n_pseudo = $_POST["n_pseudo"]; 
        $n_password = $_POST["n_password"];
        $n_password = md5($n_password);


        if ($_POST["n_pseudo"] == "" OR $_POST["n_password"] == "") 
        {
        echo " <center> Veuillez remplire les condition </center>";
        }

else {
    $sql  =  'UPDATE `utilisateurs` SET `login` = "' . $n_pseudo . '" , `password` = "' . $n_password . '" WHERE `id` = "' . $_SESSION["id"] . '"; ';
    mysqli_query($bdd, $sql);

    if (strlen($_POST["n_pseudo"]) > 12) { array_push($error, "Le pseudo est trop long"); }
    if (strlen($_POST["n_pseudo"]) < 4) { array_push($error, "Le pseudo est trop court"); }
    if (count($error) < 1) {

    $_SESSION["username"] = $_POST["n_pseudo"];

    echo " <center> modification réussi </center>";

        if(isset($_POST["Déconnexion"])){
          session_unset();
          header('location: ../index/index.php');

        }
    }
    }
                              

    }
}                  




    


?> 