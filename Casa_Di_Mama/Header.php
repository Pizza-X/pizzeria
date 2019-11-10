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
    <li><h3> <a href="index.php">Assortiment</a></h3> </li>
    <?php if (isset($_SESSION['gebruikersnaam'])) {?>
    <li style="float:right"><h3><a class="active" href="uitloggen.php"> Uitloggen </a></h3></li>
    <?php } else { ?>
    <li style="float:right"><h3><a class="active" href="login.php"> Login</a></h3></li>
    <?php } ?>
    <li><h3> <a href="winkelwagen_pagina.php">Winkelwagen</a></h3> </li>
    <?php if (isset($_SESSION['gebruikersnaam'])) {?>
    <li><h3> <a href="registratieAbbo.php">Ons Abonnement</a></h3> </li>
    <?php } else { ?>
      <li><h3> <a href="abbo_zonder_inloggen.php">Ons Abonnement</a></h3> </li>
    <?php } ?>
    <li><h3> <a href="javascript: document.body.scrollIntoView(false);">Contact</a></h3> </li>
    <?php if (isset($_SESSION['gebruikersnaam'])) { if($_SESSION['gebruikersnaam'] != 'admin'&& $_SESSION['gebruikersnaam'] != 'Admin'){ ?>
    <li><h3> <a href="klant.php">Welkom <?php echo ucwords($_SESSION['gebruikersnaam']) ?></a></h3></li>
    <?php } else { ?>
    <li><h3> <a >Welkom <?php echo ucwords($_SESSION['gebruikersnaam']) ?></a></h3></li>
    <li><h3> <a href="overzichtklanten.php"> Klantenoverzicht </a></h3></li>
    <?php }} ?>
	<?php if (isset($_SESSION['gebruikersnaam'])) { if($_SESSION['gebruikersnaam'] != 'admin'&& $_SESSION['gebruikersnaam'] != 'Admin'){ ?>
	<li><h3> <a href="bestelling.php">Jouw Bestelling <?php($_SESSION['gebruikersnaam']) ?></a></h3> </li>
	<?php } else { ?>
	<li><h3> <a href="overzichtbestellingen.php">Bestelling overzicht <?php ($_SESSION['gebruikersnaam']) ?></a></h3></li>
	<?php }} ?>
    </ul>
<!--

   <div class="search-omhulsel">
        <div class="search-container">
        <form action="/action_page.php">
        <input id="inputHeader" type="text" placeholder="Zoeken" name="search">
        <button type="submit">Zoek</button>
        </form>
        </div>
    </div> -->
    </nav>
 </body>
</html>
