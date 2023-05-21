
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNetwork</title>
    <link rel="stylesheet" href="assets/css/style_header.scss">
</head>

<body>

    <header> 
        <div class = "header">
            <div class = "imgLogo">
                <a href="/?p=Home">
                    <img class = "icon"src="ressources/iconTechNetwork.png" alt="Icone" width="100px"/>
                </a>
            </div>
            <div class = "brandName">
                <h1>TechNetwork</h1>
            </div>
            <div class = "menuBar">
                <navbar>
                    <ul class = nav>
                        <?php 
                        if(empty($_SESSION)){
                            echo ' <li><a href="/?p=Home">Home</a></li>
                                  <li><a href="/?p=Login"> Login </a></li>';
                        }else{
                            echo ' <li><a href="/?p=Profil">Profil</a></li>
                                    <li><a href="/?p=Publications"> Publications </a></li>
                                    <li><a href="/?p=Logout">Logout</a></li>
                                    <li><a href="/?p=Contact">Contact</a></li>'
                                    ;
                        }?>
                    </ul>
                </navabar>
            </div>
        </div>
    </header>

</body>
</html>

