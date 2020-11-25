<?php
session_start();
var_dump($_POST);
    $error = array();
$bdd = new mysqli("localhost", "root", "", "livreor");
    if (!$bdd)
    {
        echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
        echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
        echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

if (isset($_POST["inscription"]))
{
    $pseudo = $_POST["pseudo"];
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

    $sql = "SELECT * FROM utilisateurs";
    $res = mysqli_query($bdd, $sql);

    foreach ($res as $row)
    {
        if ($row["login"] == $pseudo)
        {
            array_push($error, "Le pseudo est déja utilisé");
        }
    }


    foreach ($error as $erreure)
    {
        echo "• " . $erreure . "<br>";
    }
    if (count($error) < 1)
    {
    $sql = 'INSERT INTO `utilisateurs`(`login`, `password`) VALUES ("' . $pseudo .'","' . $password . '")';
    $res = mysqli_query($bdd, $sql);
	header('Location: ../connexion/connexion.php?r');
    }

}

if (isset($_POST["connexion"])) {
	$pseudo = $_POST["pseudo"];
    $password = $_POST["password"];
    $sql = 'SELECT `id`,`login` FROM `utilisateurs` WHERE `login` = "' . $pseudo .'" AND `password` = "' . $password . '";';
    $res = mysqli_query($bdd, $sql);
    foreach ($res as $row)
    {
    	$_SESSION["id"] = $row["id"];
    	$_SESSION["username"] = $row["login"];
    	header('Location: ../profil/profil.php');
	}
}


if (isset($_POST["n_pseudo"]) && isset($_SESSION["id"]) && $_POST["n_pseudo"] !== $_SESSION["username<"])
{
	$sql = 'UPDATE `utilisateurs` SET `login`= "' . $_POST["n_pseudo"] .'" WHERE `id` = "' . $_SESSION["id"] . '";';
	

	if (strlen($_POST["n_pseudo"]) > 12) { array_push($error, "Le pseudo est trop long"); }
    if (strlen($_POST["n_pseudo"]) < 4) { array_push($error, "Le pseudo est trop court"); }
	if (count($error) < 1) 
	{ 
		$_SESSION["username"] = $_POST["n_pseudo"]; 
		$_SESSION["response"] = "<center>Pseudo changé avec succès.</center>";
	}
}

if (isset($_POST["n_password"]) && isset($_SESSION["id"])) 
{
	$sql = 'UPDATE `utilisateurs` SET `password`= "' . $_POST["n_password"] .'" WHERE `id` = "' . $_SESSION["id"] . '";';

	if (strLen($password) < 7) { array_push($error, "Le mot de passe dois faire au moins 7 charactères"); }
	if (count($error) < 1) 
	{ 
		$res = mysqli_query($bdd, $sql); 
		$_SESSION["response"] = "<center>Mot de passe changé avec succès.</center>";
	}

}

?>