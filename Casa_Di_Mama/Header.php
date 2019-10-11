<?php //require('navigation/links.php') ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
 <head>
    <title>Casa Di Mama</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styling.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
 </head>
 <body>
    <header>
        <h1><a href="index.php"> <img src="images/brand4.png"
       style="width:220px;height:auto;border:0"></a></h1>
    </header>
    <nav class="topnav">
    <ul class="nav_links">
    <li><h3> <a href="Casa De Mama_header.html">Categorieën</a></h3> </li>
    <?php if (isset($_SESSION['gebruikersnaam'])) {?>
    <li style="float:right"><h3><a class="active" href="uitloggen.php"> Uitloggen </a></h3></li>
    <?php } else { ?> 
    <li style="float:right"><h3><a class="active" href="login.php"> Login</a></h3></li>
    <?php } ?>
    <li><h3> <a href="#">Winkelwagen</a></h3> </li>
    <li><h3> <a href="Casa De Mama_header.html">Ons Abonnement</a></h3> </li>
    <li><h3> <a href="">Contact</a></h3> </li>
    <?php if (isset($_SESSION['gebruikersnaam'])) { ?>
    <li><h3> <a >Welkom <?php echo $_SESSION['gebruikersnaam'] ?></a></h3></li>
    <?php } ?>
    </ul>
    <div class="search-omhulsel">
        <div class="search-container">
        <form action="/action_page.php">
        <input id="inputHeader" type="text" placeholder="Zoeken" name="search">
        <button type="submit">Zoek</button>
        </form>
        </div>
    </div>
    </nav>
 </body>
</html>
