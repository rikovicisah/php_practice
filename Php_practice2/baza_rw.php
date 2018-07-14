<?php

class Baza{

    function readPost($condition, $elements, $tabela){
        
    }
    
    function upisUseri($connection, $username,$password,$email,$type = "user", $token){
        $query = "insert into cms.users (id,username,password,email,token,type) "
                . "values(null,'$username','$password','$email', '$type', '$token')";
        
        $result = mysqli_query($connection, $query);
        
    }
    
    function upisPost(){
        
    }
    
    function deletePost(){
        
    }
    
    function updatePost(){
        
    }
    
    function deleteUser($condition, $elements){
        
    }
    
    function updateUser($condition, $elements){
        
    }
    
    function ispisUser(){
        
    }
    
}

?>