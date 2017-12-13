<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include 'header.php';
        ?>
        <link rel="stylesheet" href="../css/sign_up.css">
        <meta charset="UTF-8">
        <title>Register An Account</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="signup">
            <h1>Member Registration:</h1>
            
            <hr>
            <h3>Register in the form below</h3>
            <p>Fill in all the fields below before you submit</p>
            <div class="fields">
                <form action="sign_up.php" method="POST">
                    First Name:<input type="text" name="first_name" value="" required=""/><br><br>
                    Last Name:<input type="text" name="last_name" value="" required=""/><br><br>
                    Gender:<select name="gender" required="">
                <option>---Select Gender---</option>
                <option>Male</option>
                <option>Female</option>
            </select><br><br>
            Age:<input type="number" name="age" value="" required=""><br><br>
            ID No:<input type="number" name="id_no" value="" required=""><br><br>
            County:<select name="conuty" required="">
                <option>---Select County---</option>
                <option>Machakos</option>
                <option>Kiambu</option>
                <option>Nakuru</option>
            </select><br><br>
            Photo:<input type="file" name="photo" value="" required=""><br><br>
            <input type="submit" value="Submit" name="submit" />
                </form>
                
            </div>
        </div>
    </body>
</html>
