<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="shoppingCart.css">
        <title>Shopping Cart</title>
    </head>
    <body>
        <div id="header">Welcome to The Ice Cream Shop!</div>
        <div id="container">
            <table class="image">
            <tr><td><img src="chocolate.jpg" alt="Chocolate Ice Cream"></td></tr>
            <tr><td class="caption">Chocolate</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="vanilla.jpg" alt="Vanilla Ice Cream"></td></tr>
            <tr><td class="caption">Vanilla</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="mintChip.jpg" alt="Mint Chip Ice Cream"></td></tr>
            <tr><td class="caption">Mint Chip</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="banana.jpg" alt="Banana Ice Cream"></td></tr>
            <tr><td class="caption">Banana</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="bubblegum.jpg" alt="Bubblegum Ice Cream"></td></tr>
            <tr><td class="caption">Bubblegum</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="oreo.jpg" alt="Oreo Ice Cream"></td></tr>
            <tr><td class="caption">Oreo</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="cookieDough.jpg" alt="Cookie Dough Ice Cream"></td></tr>
            <tr><td class="caption">Cookie Dough</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="cherryChip.jpg" alt="Cherry Chip Ice Cream"></td></tr>
            <tr><td class="caption">Cherry Chip</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="neopolitan.jpg" alt="Neopolitan Ice Cream"></td></tr>
            <tr><td class="caption">Neopolitan</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="cottonCandy.jpg" alt="Cotton Candy Ice Cream"></td></tr>
            <tr><td class="caption">Cotton Candy</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="strawberry.jpg" alt="Strawberry Ice Cream"></td></tr>
            <tr><td class="caption">Strawberry</td></tr>
            </table>
            <table class="image">
            <tr><td><img src="rainbowSherbet.jpg" alt="Rainbow Sherbet"></td></tr>
            <tr><td class="caption">Rainbow Sherbet</td></tr>
            <button name="flavor" value="Rainbow Sherbet">Rainbow Sherbet</button>
            </table>
        </div>

        <?php
            $flavor = htmlspecialchars($_POST["value"]);

            echo "Your flavor is " . $flavor;
        ?>
    </body>
</html>