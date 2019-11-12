<?php include('server.php'); ?>
<?php include('Header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registratie</title>
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
	<!-- bij elke label staat Span class * betekent dat het verplicht is -->
	<!-- mocht er iets niet worden ingevuld dan blijft de rest staat waar php echo voor staat -->

		<label>Voornaam <span class="error2">*</span> </label>
			<input type="text" name="voornaam" value="<?php echo $voornaam; ?>">
			
	</div>	
	<div class="input-group">
		<label>Tussenvoegsel </label>
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
		<!-- wordt gecheckt of er wel een button wordt ingevoerd -->
	 <input type="radio" name="geslacht" <?php if (isset($geslacht) && $geslacht=="vrouw") echo "checked";?> value="V">Vrouw
  <input type="radio" name="geslacht" <?php if (isset($geslacht) && $geslacht=="man") echo "checked";?> value="M">Man <br><br>
  <!-- drop down menu om je geboorte jaar, maand en dag te kiezen -->
	<label>Geboortedatum  <span class="error2">*</span>  </label>	<br>
		<select name="jaar" value="<?php echo $jaar; ?>">
			<option value="">---Jaar---</option>
				<?php for ($i = 1960; $i < date('Y'); $i++) : ?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
		</select>
		<select name="maand" value="<?php echo $maand; ?>">
			<option value="">---Maand---</option>
				<?php for ($i = 1; $i <= 12; $i++) : ?>
			<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
		</select>
		<select name="dag" value=<?php echo $dag; ?>">
			<option value="">---Dag---</option>
				<?php for ($i = 1; $i <= 31; $i++) : ?>
			<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
		</select>

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
	  
  	  <button type="submit" class="btn" name="submit">Register</button>
  	<!-- mocht je al een account hebben kan je onder in het scherm op Log in drukken -->
          <p>
              <br>	Heeft u al een account? <a href="login.php">Log in</a>
          </p>
          
  </form>
    <br><br><br>
</body>
</html>

<?php include('Footer.php'); ?>