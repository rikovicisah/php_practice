<?php
    include "users.php";
    $user = new Users();
//    $id = "";
    
    if(isset($_POST['btnClick'])){
        if($_POST['username'] != "" && $_POST['password'] != ""){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(isset($_POST['baza']) && isset($_POST['selekt'])){      
                $rw = $_POST['baza'];
                $id = $_POST['selekt'];
            }
            $polje_prazno = false;
            baza($username, $password, $rw, $id);
            IDs();
        }
        else {
            $polje_prazno = true;
            include 'primjer2.php';
        }
    }
    
    function baza($username, $password, $rw, $ids){
        global $user;
        $user->setUsername($username);
        $user->setPassword($password);
        
        if($rw == "read")
            $user->ispis_iz_baze();
        else if($rw == "write")
            $user->upis_u_bazu ();
        else {
            $user->setId($ids);
            $user->delete ();
        }
    }
    
    function IDs(){
        global $user;
        return $user->getIDs();
    }
    
?>
