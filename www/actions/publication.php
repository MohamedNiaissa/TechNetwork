<?php

require_once __DIR__."/../../src/db.php";

$sqllibrary = 'SELECT userID,imageURL,titre,description,nbrLikes FROM postImage' ;
$query_library = $db->prepare($sqllibrary);
$query_library->execute();



$data_library = $query_library->fetchALL(PDO::FETCH_ASSOC);

if($data_library == FALSE){
    echo "<span> Il n'y a pas de publication </span>";
}else{
    //var_dump($data_library);
}