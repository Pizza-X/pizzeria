<?php include 'Header.php'; include_once 'functies.php';?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Pagina</title>
        <link rel="stylesheet" a href="styling.css">
    </head>
    <body>
        <div class="containerProductPagina">
            <?php if(isset($_GET['id'])){ 
            $id=$_GET['id'];?>
            <div class="artikel_pagina">
                <a href="">
                <img id="img_artikel" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                </a>
                <div class="containerArtikelInfo">
                    <p> <a href="index.php"> <img id="winkelwagenPNG" alt="shopping_cart.png" src="images/winkelwagen.png"> </a>
                    <?php echo pizza_naam($id);?> </p>
                </div> 
            </div>
            <div class="productInfo">
                <div class="productInfoInner">
                    <a href="">
                    <img id="img_product_pagina" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                    </a>
                </div>
                <div class="productInfoInner">
                    <a href="">
                    <img id="img_product_pagina" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                    </a>
                </div>
                <div class="productInfoInner">
                    <a href="">
                    <img id="img_product_pagina" alt="pepperoni" src="http://www.hammockpizza.co/image/cache/pizza/pepperoni%20pizza-800x800.png">
                    </a>
                </div>
            </div> <br>
            
            <div style="float: left; margin-left: 1%;">
            <form method="POST" action="winkelwagen_pagina.php?action=add&id=<?php echo $id;?>">
            <input type="number" name="quantity" style="margin-top: 5px;" value="1"><br>
            <input type="hidden" name="hidden_name" value="<?php echo pizza_naam($id) ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo pizza_prijs($id);?>">
            <input type="submit" name="add_to_cart" style="margin-top:5px;" value="In Winkemand" />
            </form>
            </div><br><br><br><br>
            
            <div class="productInfoText">
                <b>Soort:</b> <?php echo pizza_naam($id);?><br><br>
                <b>Prijs:</b> €<?php echo pizza_prijs($id) . ",-"; ?><br><br>
                <b>Informatie:</b> <?php echo pizza_info($id)?> <br><br>
                <b>Ingredienten:</b> <?php echo pizza_ingredienten($id)?>
            </div>
            <?php } else { ?> <br><br><h1>Whoops, gegevens kunnnen niet worden opgehaald..</h1><?php } ?>
        </div>
    </body>
</html>

<?php include 'Footer.php'; ?>
