<?php
    
class Users{
    var $username;
    var $password;
    var $id;
    var $connection;
    
    function __construct() {
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if(!$connection)
            die ("Desila se greska prilikom konektovanja sa bazom");
        else{
            $this->connection = $connection;
        }
    }
    
    function getIDs(){
        $query = "select id from users";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
    
    function setUsername($username){
        $this->username = $username;
    }
    
    function setPassword($password){
        $this->password = $password;
    }
    
    function setId($id){
        $this->id = $id;
    }
    
    function upis_u_bazu(){
        $query = "insert into users(id, username, password) values(null,'$this->username'"
                . ", '$this->password')";
        $result = mysqli_query($this->connection, $query);
        if(!$result) die("Desila se greska prilikom unosa u bazu");
        else include "primjer2.php";
    }
    
    function ispis_iz_baze(){
        $query = "select * from users";
        $GLOBALS['result']= mysqli_query($this->connection, $query);
        include "ispis.php";
    }
    
    function delete(){
        $query = "delete from users where id='$this->id'";
        $result = mysqli_query($this->connection, $query);
        if(!$result) die("Desila se greska prilikom brisanja iz baze");
        include "ispis.php";
    }
    
    function ispis(){
        
    }
}

?>