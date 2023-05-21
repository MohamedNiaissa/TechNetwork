<link rel = "stylesheet" href = "/assets/css/style_library.scss" /> 

<?php
include __DIR__."../../partials/Header.php";



echo '
    <h3>
        Library
    </h3>
';

include "actions/library.php";

foreach ($data_library as $indice => $value) {
    echo "<div class = 'contentLib'>";
    foreach($value as $key => $val){
       if ($key === "imageURL"){
        echo "
            <div class = 'img'>
                <img src = '$val' height='420' width='420'/> 
            </div>
            ";    
        } else if($key === "titre"){
            echo "<h4> $val </h4> 
                </div>";
        }else if ($key === "description"){
            echo "<p>$val</p>";
        }else{
            echo "<div class = 'info'> <div class='likeclass'> <img src = 'ressources/heart.png' height = '40'  /><span class='like'> $val </span> </div>";
        }
        
    }
    echo "</div>";

}