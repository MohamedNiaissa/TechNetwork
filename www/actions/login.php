<?php 
// header("Location: ?/Home");

$pseudo = $_POST["pseudoLog"];
$mdp = $_POST["passwordLog"];




    $pseudo = $_POST["pseudoLog"];
    $logPass = $_POST["passwordLog"];
    require_once __DIR__."/../../src/db.php";

 
    $sql = 'SELECT * FROM users WHERE username = :username AND password = :password' ;
    $query = $db->prepare($sql);
    $query->execute([
        ":username" => $pseudo,
        ":password" => $mdp
    ]);

  
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    if($data == FALSE){
        echo "Veuillez réesayer";
        header("Location: /?p=Login");
        exit;
    }else{
        session_start();
        $_SESSION["username"] = $pseudo;
        $_SESSION["userID"] = $data["userID"];
        header("Location: /?p=Profil");
    }


?>