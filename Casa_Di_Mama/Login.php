<?php include 'Header.php'; ?>
<html>
<head>
	<title>Login Form Pizzaria</title>
        <link rel="stylesheet" a href="styling.css">
</head>
    <body>
        <?php if(isset($_SESSION['ingelogd'])) { ?>
        <div class="login_fout">De gebruikersnaam of het wachtwoord is niet correct.</div>
        <?php } ?>

	<div class="container">
	<img src="https://spotlightmedia.com/wp-content/uploads/2015/07/ClientLogincol2.png" alt="login plaatje">
        <form method="POST" action="db_connection_inlog.php">
		<div class="form-input">
                <?php if(isset($_SESSION['ingelogd'])) { ?>
                    <a style="color:red"> * </a>
                <?php } ?>
		<input id="inlog" type="text" name="gebruikersnaam" placeholder="gebruikersnaam"/>
		</div>
		<div class="form-input">
                <?php if(isset($_SESSION['ingelogd'])) { ?>
                <a style="color:red"> * </a>
                <?php } ?>
		<input id="inlog" type="password" name="wachtwoord" placeholder="wachtwoord"/>
		</div>
                    <input type="submit" value="Log in" class="btn-login"/>
                    <br> <br>
                    <a href="Register.php" style="color:rgb(255,255,255)">Klik hier om een account te maken</a>
		</form>
	</div>
    <br><br><br><br><br><br><br><br>
    </body>
</html>
<?php include 'Footer.php'; ?>
