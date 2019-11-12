<?php include 'Header.php'; include_once 'functies.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" a href="styling.css">
        <title>Landingspagina</title>
        
    </head>
    <body>
        <div class="containerIndex">
            <h1>Dit is ons assortiment</h1> <br>
            <div class="artikel_index">
                <a href="product_pagina.php?id=1">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(1); ?> </p>
                </div>
            </div>
            <div class="artikel_index">
                <a href="product_pagina.php?id=2">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(2);?></p>
                </div>
            </div>
            <div class="artikel_index">
                <a href="product_pagina.php?id=1">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(1); ?></p>
                </div>
            </div>
            <div class="artikel_index">
                <a href="product_pagina.php?id=1">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(1); ?></p>
                </div>
            </div>
            <div class="artikel_index">
                <a href="product_pagina.php?id=2">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(2); ?></p>
                </div>
            </div>
            <div class="artikel_index">
                <a href="product_pagina.php?id=1">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam(1); ?></p>
                </div>
            </div>
            <div class="overOns">
                <p> <br> <h1> Over ons </h1> </p> 
               <p> <br> Pizzeria Casa Di Mama is een opkomende pizza bezorg organisatie die al veel pizzawinkels in Nederland heeft gevestigd. 
                   Momenteel hebben wij 96 vestigingen en we streven ernaar om door te groeien naar ruim 200 vestigingen in de komende jaren.
                   Wilt u meer weten over ons? klik dan <a href="overOns.php"> hier</a>
               </p>
            </div>
        </div>
        
    </body>
</html>
<?php include 'Footer.php'; ?>
