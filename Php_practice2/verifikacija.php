<?php
include "baza_rw.php";

session_start();


// put your code here
$errormessage = $errormessage2 = $errormessage3 = "";
$username = $password = $email = "";
$usernamed = $passwordd = $emaild = "";
if (isset($_POST['btnSubmit'])) {

    //Username unos
    if ($_POST['username'] == "")
        $errormessage = "Unesite username";
    else if ($_POST['username'] != "")
        $usernamed = htmlentities ($_POST['username']);
    
    //Password unos
    if ($_POST['password'] == "")
        $errormessage2 = "Unesite password";
    else if ($_POST['password'] != "")
        $passwordd = htmlentities ($_POST['password']);

    //Email unos
    if ($_POST['email'] == "")
        $errormessage3 = "Unesite email";
    else if ($_POST['email'] != "")
        $emaild = htmlentities ($_POST['email']);

    if ($_POST['username'] != "" && $_POST['password'] != "" 
            && $_POST['email'] != "") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $username = clean($username);
        $password = clean($password);
        $email = clean($email);

        $usernamed = $passwordd = $emaild = "";
        
        $hash_and_salt = "\$6\$rounds=500000\$kgjsčlfjgigowj5"
                . "+09j4wgijfoijsčldfkgjčiojg059jgow4i5jpgoiwjfčlk";
        
        $connection = mysqli_connect('localhost', 'root', '', 'cms');
        $baza = new Baza();
        $GLOBALS['token'] = crypt($username, 
                "\$5\$rounds=50000\$flkgjeior9gjđšerigjšweorijgšowiergjoeirj");
        
        $baza->upisUseri($connection,$username,crypt($password,$hash_and_salt),
                $email,$token,"user");
        mysqli_close($connection);
        
        $_SESSION['user'] = crypt($username, 
                "\$5\$rounds=50000\$flkgjeior9gjđšerigjšweorijgšowiergjoeirj");
        
        
        header("Location: mypage.php?username='$username"); 
        exit();
    }
}

function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>