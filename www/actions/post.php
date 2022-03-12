
<?php
header("Location: /?p=Postpage");

session_start();
include __DIR__.'/../../src/db.php';

var_dump($_SESSION);

$titre = $_POST["titre"];
$img = $_POST["link_img"];
$desc = $_POST["description"];
$tag = $_POST["tag"];

$sql = 'INSERT INTO postImage(imageURL, userID, titre,description,tag,nbrLikes) VALUES (:imageURL, :userID, :titre, :description,:tag,:nbrLikes)';

$queryInsert = $db->prepare($sql);


$sqlFetch = 'SELECT userID FROM users WHERE username = :username' ;

// on prepare le requete
$queryFetch = $db->prepare($sqlFetch);


$pseudo = $_SESSION["username"];

$queryFetch->execute([
    ":username" => $pseudo,
]);

// on recupere les données de la requete, sous forme de tableau associatif

$userIDTab = $queryFetch->fetch(PDO::FETCH_ASSOC);

$userID = $userIDTab["userID"];
var_dump($userID);

$queryInsert->execute([
	':imageURL' => $img,
	':userID' => $userID,
	':titre' => $titre,
	':description' => $desc,
    ':tag' => $tag,
    ':nbrLikes' => 0,
]);


