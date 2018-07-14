<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div id="menu"><?php include "header.php" ?></div>
        <?php include "verifikacija.php" ?>
        
        <form name="sign_forma" action="sign_in.php" method="POST">
            <?php echo $errormessage; ?><br>
            <input type="text" name="username" placeholder="Unesite username" value="<?php echo $usernamed; ?>" /><br>
            
            <?php echo $errormessage2; ?><br>
            <input type="password" name="password" placeholder="Unesite password" value="<?php echo $passwordd; ?>" /><br>
            
            <?php echo $errormessage3; ?><br>
            <input type="text" name="email" placeholder="Unesite email" value="<?php echo $emaild; ?>" /><br>
            
            <button type="submit" value="Submit" name="btnSubmit" class="button" />Submit</button><br>
        </form>
        
        
        <?php include "footer.php" ?>
    </body>
</html>
