<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="../css/login.css">
        <meta charset="UTF-8">
        <title>Login </title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="login">
        <h1>Member Login:</h1>
        <img src="../images/login_page_images/login-icon-png-27.png">
        <form action="login.php" method="POST">
        <input type="text" value="" placeholder="Username" required=""></br></br>
        <input type="password" value="" placeholder="Password" required=""></br></br>
        <input type="submit" class="sign_in_button" value="Sign In" name="signin" />
        <a href="../pages/password_recovery">Forgot Password?</a>
        </form>
        <input type="submit" class="app-button" value="Sign Up" name="sign_up" />
        <p>&#x2190;Don't have an account?</p>
        
        </div>
        <div class="footer">
            &COPY;2017-Kenya Orphanage Information Management System 
        </div>
    </body>
    <script type="text/javascript" src="../scripts/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../scripts/login.js"></script>
    
</html>
