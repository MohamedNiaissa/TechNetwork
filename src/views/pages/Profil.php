<link rel = "stylesheet" href = "/assets/css/style_profil.scss" /> 

<?php
include __DIR__."../../partials/Header.php";
?>

<div class="contentProfil">
    <div class="mainContent">
        <div class="circle"></div>
        <div class="user"> <?= $_SESSION["username"]?> </div>
        <p>
            Un petit mot sur toi ...
        </p>
    </div>

    <div class="actions">
        <div class="post">
            <span>
                <a href="/?p=Postpage"> &nbsp; Post &nbsp; </a> 
            </span>
        </div>
    
        <div class="library">
            <span>
               <a href="/?p=Library">Library</a> 
            </span>
        </div>
    </div>
</div>