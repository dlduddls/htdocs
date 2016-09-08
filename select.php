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
        
        <select name="year" id="">
            <option value="" selected="">태어난해</option>
        <?php
        for($i=1917; $i<=2017; $i++){
        echo "<option value =".$i.">".$i."</option>";
        }
        ?>
        </select>
    </body>
</html>