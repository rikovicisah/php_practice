<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 
    session_start();
    print_r($_SESSION['user']);
    if(isset($_SESSION['user'])){
        if(isset($_GET['username']))
            $username = $_GET['username'];

    }else header("Location: index.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styl.css">
        <title><?php 
                    if(isset($_GET['username']))
                        echo $username ;
                    else echo "You need to login";
                ?></title>
    </head>
    
    <body>
        <div id="menu">
            <?php include "header.php" ?>
        </div>
        
        
    
    <?php
    if (isset($_SESSION['user'])) : ?>
        <form name = 'postovi' action = 'postovi.php' method="POST">
            <input type = 'text' name = 'naslov' value = '' placeholder="Naslov"/><br>
            <textarea name = 'postovi' rows = '4' cols = '20' class="textaread">
            </textarea><br>
            
            <button type="submit" value="Submit" name="btnPostForm" class="button">Submit</button>
        </form>
        
        <?php include "postovi.php" ?>
        
        
        <a href="logout.php">Logout</a>
        
    <?php else : ?>
        <p> You need to login </p>
    <?php endif; ?>
        
        
        
    </body>
</html>
