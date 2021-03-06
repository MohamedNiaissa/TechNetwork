
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNetwork</title>
</head>
<style>
    .header {
        display: grid;
        height: 140px;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        background-color:#80C1CF;
        border-radius:68px
    }


    .imgLogo { grid-area: 2 / 1 / 3 / 2; }      /*  2 / 2 / 3 / 3; */ 
    .brandName { grid-area: 3 / 4 / 4 / 5; }
    .menuBar { grid-area: 2 / 7 / 3 / 8; }

    /* body{
        background-image:url("ressources/home.jpg");
    } */

    a{
        text-decoration:none;
        color:black;
    }

    .nav{
        display:flex;
        list-style-type:none;      
    }
    h1{
        font-weight:10;
    }
    .nav li{
        margin-right:20px;
    }


    img{
        position: absolute;
        left: 45px;
        top: 25px;
    }
    
</style>
<body>

    <header> 
        <div class = "header">
            <div class = "imgLogo">
                <img src="ressources/iconTechNetwork.png" alt="Icone" width="100px"/>
            </div>
            <div class = "brandName">
                <h1>TechNetwork</h1>
            </div>
            <div class = "menuBar">
                <navbar>
                    <ul class = nav>
                        <li><a href="/?p=Home">Home</a></li>
                        <li><a href="/?p=Login"> Login </a></li>
                    </ul>
                </navabar>
            </div>
        </div>
    </header>

</body>
</html>

