<?php
header("Location: /?p=SuccessPage");

session_start();

include __DIR__.'/../../src/db.php';
var_dump($_POST);
var_dump($_POST["mailSignup"]);

$userMail = $_POST["mailSignup"];
$userPseudo = $_POST["pseudoSignup"];
$userPassword = $_POST["passwordSignup"];

$sql = 'INSERT INTO users(username, mail, password,isAdmin) VALUES (:username, :mail, :password, :isAdmin)';

$query = $db->prepare($sql);

$query->execute([
	':username' => $userPseudo,
	':mail' => $userMail,
	':password' => $userPassword,
	':isAdmin' => "FALSE"
]);

echo "Données insérées avec succès";

// on récupère le dernier id inséré dans la db (si besoin...)
$id = $db->lastInsertId();

$_SESSION["username"] = $userPseudo;
$_SESSION["userMail"] = $userMail;


// sleep(5);
// header("Location: ?p=Home");


?>