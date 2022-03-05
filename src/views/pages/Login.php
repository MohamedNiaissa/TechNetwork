<link rel = "stylesheet" href = "/assets/css/style_login.css" /> 

<?php
include __DIR__."../../partials/Header.php";
?>

<div class= "framework">
    <div class="contentForm">
    <div class="signup">
        <h3>Signup</h3>
        <form  method ="POST" action="/actions/signup.php">
            <div class="classMail classMailSignup">
                <label for="Email">Email</label>
                <input type="email" name="mailSignup" />
            </div>

            <div class="classPseudo classPseudoSingnup">
                <label for="Pseudo">Pseudo</label>
                <input type="text" name="pseudoSignup" />
            </div>
            
            <div class="classPassword classPasswordSignup">
                <label for="Password">Password</label>
                <input type="password" name="passwordSignup" />
            </div>

            <div class="submitbtn">
                <input type="submit" value="Send" />
            </div>
        </form>
    </div>

    <div class="login">
        <h3>Login</h3>        
        <form  method="POST" action="/actions/login.php">
            <div class="classPseudo classPseudoLogin">
                <label for="Pseudo">Pseudo </label>
                <input type="text" name="pseudoLog">
            </div>
                <div class="classPassword classPasswordLogin">
                    <label for="Password">Password</label>
                    <input type="password" name="passwordLog">
                </div>
            <div class="submitbtn">
                <input type="submit" value="Send">
            </div>
        </form>
    </div>
    </div>
    
</div>