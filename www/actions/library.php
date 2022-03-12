<?php

require_once __DIR__."/../../src/db.php";

$pseudo = $_SESSION["username"];
$id = $_SESSION["userID"];



$sqllibrary = 'SELECT imageURL,titre,description,nbrLikes FROM postImage WHERE userID = :userID' ;
$query_library = $db->prepare($sqllibrary);
$query_library->execute([
    ":userID" => $id,
]);



$data_library = $query_library->fetchALL(PDO::FETCH_ASSOC);

if($data_library == FALSE){
    echo "<span> Your library is empty ...</span>";
}else{
    var_dump($data_library);
}