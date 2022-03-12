<?php

    $existing_pages = ['Home', 'Login', 'Profil', "SuccessPage","Publications","Postpage","Infoimg","Logout",'Signup', 'Contact','Library'];

    //header("Location: /src/views/pages/Home.php");

    $page = "Home";

    if(!empty($_GET['p'])){
        if(str_contains($_GET['p'],"Infoimg")){
            $page = "Infoimg";

            $urlImgInfo = strstr($_GET['p'], 'g?'); // prend toute la chaine à partir de g?
            include (__DIR__."/../src/views/pages/$page.php");
            exit();
        }

        if(in_array($_GET['p'], $existing_pages)){
            $page = $_GET['p'];
        }
    }
    // echo $_GET['p'];

    include (__DIR__."/../src/views/pages/$page.php");

    ?>