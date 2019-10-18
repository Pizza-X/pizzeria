<?php include('server.php'); ?>
<?php include('Header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
<style>
.error2 {color: #FF0000;}
</style>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form id=form_register method="post" action="register.php">
  	<?php include('error.php'); ?>
	<div class="input-group">
		<label>Voornaam <span class="error2">*</span> </label>
			<input type="text" name="voornaam" value="<?php echo $voornaam; ?>">
			
	</div>	
	<div class="input-group">
		<label>Tussenvoegsel <span class="error2">*</span> </label>
			<input type="text" name="tussenvoegsel">
	</div>
	<div class="input-group">
		<label>Achternaam <span class="error2">*</span> </label>
			<input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
	</div>
	<div class="input-group">	
		<label>Email <span class="error2">*</span> </label>
			<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Gebruikersnaam <span class="error2">*</span> </label>
			<input type="text" name="gebruikersnaam" value="<?php echo $gebruikersnaam; ?>">
	</div>
	<div class="input-group">
		<label>Wachtwoord <span class="error2">*</span> </label>
			<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Bevestig wachtwoord <span class="error2">*</span> </label>
			<input type="password" name="password_2">
	</div>
	
	
		<label>Geslacht <span class="error2">*</span> </label>
			<input type="radio" name="geslacht" value="M"> M
                        <input type="radio" name="geslacht" value="V"> V <br><br>
	
		<label> Geboortedatum <span class="error2">*</span> </label>
		<div class="input-group">
			 <input type="date" name="geboortedatum" value="<?php echo $geboortedatum; ?>">

        </div>
	<div class="input-group">
		<label> <br>Plaats <span class="error2">*</span> </label>
			<input type="text" name="plaats" value="<?php echo $plaats; ?>">
	</div>
	<div class="input-group">
		<label>Postcode <span class="error2">*</span> </label>
			<input type="text" name="postcode" value="<?php echo $postcode; ?>">
	</div>
	<div class="input-group">
		<label>Straat <span class="error2">*</span> </label>
			<input type="text" name="straat" value="<?php echo $straat; ?>">
	</div>
	<div class="input-group">
		<label>Huisnummer <span class="error2">*</span> </label>
			<input type="number" name="huisnummer" value="<?php echo $huisnummer; ?>">
	</div>
	  
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	
          <p>
              <br>	Heeft u al een account? <a href="login.php">Log in</a>
          </p>
          
  </form>
    <br><br><br>
</body>
</html>

<?php include('Footer.php'); ?>
