<?php

$db_user = "root";
$db_passwd = "root";
$db_host = "localhost";
$db_port = "3306";
$db_name = "exo";
$db_dataSourceName = "mysql:host=$db_host;port=$db_port;dbname=$db_name";

$PDO = new PDO($db_dataSourceName, $db_user, $db_passwd);
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//si $nom est défini dans la requete sinon par défaut affiche les données de Patrick
$nom = isset($_GET['nom']) ? $_GET['nom'] : 'Patrick';

//REQUETE PRÉPARER SELECT (plus sécurisé) -> évite l'injection SQL
// $requetePreparer = $PDO->prepare("
//     SELECT nom, console 
//     FROM jeux_video 
//     WHERE possesseur = :nom
//     ORDER BY nom ASC
//     LIMIT 10
// ");

//remplace les ? par exemple nom 
//$requetePreparer->execute(array(':nom' => $nom)); // ou execute(array($nom)) si dans la requete :nom est remplacé par ?

// boucle sur chaque ligne du tableau
// while ($donnees = $requetePreparer->fetch()) {
//     echo $donnees["nom"] . " - console :  " . $donnees["console"] . "</br>";
// }

//stop la requete
//$requetePreparer->closeCursor();

//REQUETE INSERT
//$PDO->exec("INSERT INTO jeux_video( nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES( 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale')");

//REQUETE UPDATE
$PDO->exec("UPDATE jeux_video set console = 'xbox' WHERE ID = 52");
