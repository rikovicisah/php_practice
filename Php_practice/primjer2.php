<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include "obrada.php"; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form name="forma" action="obrada.php" method="POST">
            <?php 
                global $polje_prazno;
                if($polje_prazno) echo "Unesite vrijednosti u polja <br>";
                else echo "";
            ?>
            Username : <input type="text" name="username" value="" /><br>
            Password : <input type="password" name="password" value="" /><br>
            Read : <input type="radio" name="baza" value="read" />
            Write : <input type="radio" name="baza" value="write" />
            Delete : <input type="radio" name="baza" value="delete" /><br>
            
            Select id to delete :
            <select name="selekt">
                <?php 
                    $id = IDs();
                    while($row = mysqli_fetch_assoc($id)){
                       foreach ($row as $value) {
                            echo "<option value='$value'>$value</option>";
                        } 
                    }
                ?>
            </select><br>
            
            <input type="submit" value="Click" name="btnClick" />
        </form>
        
        
        
    </body>
</html>
