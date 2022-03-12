<?php 
// header("Location: ?/Home");

$pseudo = $_POST["pseudoLog"];
$mdp = $_POST["passwordLog"];



    // include (__DIR__."/../../src/db.php");

    $logEmail = $_POST["logEmail"];
    $logPass = $_POST["logPass"];
    // on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
    require_once __DIR__."/../../src/db.php";

    // ici, ":id" est une future variable qui sera injectée au moment de l'executer
 
    $sql = 'SELECT * FROM users WHERE username = :username AND password = :password' ;

    // on prepare le requete
    $query = $db->prepare($sql);

    // on l'execute en injectant nos variables
    //var_dump($logPass);
    $query->execute([
        ":username" => $pseudo,
        ":password" => $mdp
    ]);

    // on recupere les données de la requete, sous forme de tableau associatif
  
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    // $dataMdp = $queryMdp->fetch(PDO::FETCH_ASSOC);


    if($data == FALSE){
        echo "Veuillez réesayer";
        header("Location: /?p=Login");
        exit;
    }else{
       // sleep(2);
        session_start();
        $_SESSION["username"] = $userPseudo;
        $_SESSION["userMail"] = $userMail;
        header("Location: /?p=Home");
        //echo $_SESSION;
    }


?>