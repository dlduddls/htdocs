<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
<?php
    foreach ($result as $row) {
                ?>

                <tr>
                <form action="del.php" method="post">
                <input type="hidden" value=<?=$row['idx']?>>
                <td><?=$row['name']?></td>
                <td><?=$row['id']?></td>
                <td><button>삭제</button></td>
                </form>
            </tr>
            
            <?php
            ?>
            
        </table>
    </table>
    </body>
</html>