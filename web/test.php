<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        for ($x = 1; $x <= 11; $x++) {
            if ($x % 2 == 0)
            {
                echo "<div style=\"color:#AFA;\" id:\"div$x\">This is div $x</div>";
            }
            else 
            {
                echo "<div id:\"div$x\">This is div $x</div>";
            }
            
        } 
        ?>
    </body>
</html>