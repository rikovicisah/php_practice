<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$GLOBALS['errormessage3'] = $GLOBALS['errormessage2'] = "";
$GLOBALS['passwordd'] = $GLOBALS['emaild'] = "";


if(isset($_POST['btnSubmit'])){
    
    //Email
    if ($_POST['email'] == "")
        $errormessage3 = "Unesite email";
    else if ($_POST['email'] != "")
        $emaild = htmlentities ($_POST['email']);
    
    //Password
    if ($_POST['password'] == "")
        $errormessage2 = "Unesite password";
    else if ($_POST['password'] != "")
        $passwordd = htmlentities ($_POST['password']);
    
    //Postavljanje passworda i emaila
    if ($emaild != "" && $passwordd != ""){
    
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        $passwordd = $emaild = "";
        
        $password = clean($password);
        $email = clean($email);
        
        $password = crypt($password,"\$6\$rounds=500000\$kgjsčlfjgigowj5"
                . "+09j4wgijfoijsčldfkgjčiojg059jgow4i5jpgoiwjfčlk");
        
        
        if(($user = provjera($email, $password)) != ""){
            $_SESSION['user'] = crypt($user, 
                "\$5\$rounds=50000\$flkgjeior9gjđšerigjšweorijgšowiergjoeirj");
            
            header("Location: mypage.php?username=$user"); 
            exit();
        }
    }
}

function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function provjera($email,$password){
    $username = "";
    $email = (string)$email;
    $password = (string)$password;
    
    $connection = mysqli_connect('localhost', 'root', '', 'cms');
    $query = "select username,password from cms.users where email='$email'";
    $result = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($result))
        if($row['password'] == $password) $username = $row['username'];

    return $username;
}
