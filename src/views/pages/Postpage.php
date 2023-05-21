<link rel = "stylesheet" href = "/assets/css/style_postpage.scss" /> 

<?php
include __DIR__."../../partials/Header.php";
?>


<div class="contentPost">
    <h3>
        Post
    </h3>
    
    <form action= "actions/post.php"method="POST">
        
        <div class="classTitre">
            <label for="img">Titre</label>
            <input  type="text" name="titre" />
        </div>
    
        <div class="classImg">
            <label for="img">Image</label>
            <input type="text" name="link_img" />
        </div>
    
    
        <div class="classDesc">
            <label for="desc">Description</label>

            <textarea id="story" name="description"
            rows="5" cols="33">
            </textarea>

        </div>
    
    
        <div class="classTag">
            <label for="tag">Tag</label>
            <input class="area" type="text" name="tag" />
        </div>
    
    
        <div class="publishbtn">
            <input type="submit" value="Publish">
        </div>
    
    
    </form>
</div>