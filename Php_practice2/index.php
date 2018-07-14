<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styl.css">
        <title></title>
    </head>
    <body>
        <div id="menu">
            <?php include "header.php" ?>
        </div>
        <?php include "login_verifikacija.php" ?>
        
        <form name="login" action="index.php" method="POST">
            <?php echo $errormessage3; ?><br>
            <input type="text" name="email" placeholder="Unesite email" value="<?php echo $emaild; ?>" /><br>
            
            <?php echo $errormessage2; ?><br>
            <input type="password" name="password" placeholder="Unesite password" value="<?php echo $passwordd; ?>" /><br>
            
            <button type="submit" value="Login" name="btnSubmit" class="button" />Login</button><br>
        </form>
        
        <?php include "footer.php" ?>
    </body>
</html>
