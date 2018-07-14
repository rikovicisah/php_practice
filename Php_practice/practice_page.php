<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$message = "";


if (isset($_POST['btnClick'])) {
    global $message;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "" && $password != "") {
        $message = "";
        $username = clean($username);
        $password = clean($password);
        $password = conver_to_pass($password);

        echo "Ime je : " . $username . "<br>";
        echo "Password je : " . $password;
    } else {
        $message = "Prazna polja";
    }
}

function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function conver_to_pass($data) {
    $data = crypt($data, "\$5\$rounds=50000\$sgldfkgjčrijegorigčldfksčlfkgjri9gldfkgčir");
    return $data;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="practice_page.php" method="POST">
            Username : <input type="text" name="username" placeholder="Unesite username" value="" /><br>
            Password : <input type="password" name="password" placeholder="Unesite password" value="" />
            <?php echo $message ?><br>
            <input type="submit" name="btnClick" value="Click" />
        </form>
        
    </body>
</html>
