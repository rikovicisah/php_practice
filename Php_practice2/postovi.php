<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

global $username;

if(isset($_POST['btnPostForm'])){
    echo $_POST['naslov']. "<br>";
    echo $_POST['postovi'];
    
    $username = (string)$username;
    
    
    
    function upisi($title, $text){
        $connection = mysqli_connect('localhost', 'root', '', 'cms');
        
        $query = "insert into postovi (id, id_korisnika, title, post, slug) "
                ."values(null, ''";
        
    }
    
}