<!DOCTYPE html>
<!--
author : Isah Rikovic
date : 10-7-2018
assignment: Manipulacija nizovima
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Manipulacija nizovima</title>
    </head>
    <body>
        <?php
        // put your code here
        $i = 1;
        $myArray = array(
            array('Peter','Andersen', 'peter@gmail.com'),
            array('John', 'Miller', 'john@gmail.com'),
            array('Thomas', 'Swift', 'thomas@gmail.com')
        );
        ?>
        
        <table border="2" cellspacing="1" id="customers">
            <thead>
                <tr>
                    <th>id</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php                        
                    foreach ($myArray as $value) {
                        echo "<tr>";
                        echo "<td>$i</td>" ;
                        foreach ($value as $e){
                            echo "<td>$e</td>" ;
                    ?>
                <?php } $i++; echo "</tr>";} ?>
            </tbody>
        </table>

    </body>
</html>
