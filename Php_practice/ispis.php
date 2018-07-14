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
    </head>
    <body>
        
        <table>
            <tr>
                <th>id</th>
                <th>Username</th> 
                <th>Password</th>
            </tr>
        <?php
        
         global $result;
         while($row = mysqli_fetch_assoc($result)){
             $id = $row['id'];
             $username = $row['username'];
             $password = $row['password'];
            
             echo "<tr>
                    <td>$id</td>
                    <td>$username</td> 
                    <td>$password</td>
                  </tr>";
         }
        ?>
        </table>
        
        <br>
        <br>
        
        <a href="primjer2.php">Back to main page</a>
        
    </body>
</html>
