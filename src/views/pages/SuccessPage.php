<link rel = "stylesheet" href = "/assets/css/style_success.css" /> 
<?php
include __DIR__."../../partials/Header.php";
?>


<div class="generalContent">
    <div class = "contentSuccess" />
        <h3> Welcome in the team </br>  <?= $_SESSION["username"]?> </h3>   
        <div class="images">
            <img class ="firstImg" src="ressources/congratulation.png" alt="congratsImg">
            <img class ="secondImg" src="ressources/congratulation.png" alt="congratsImg">
        </div>
        <a class = "link" href = "/?p=Profil"> Go to my profil </a>
    </div>
</div>
