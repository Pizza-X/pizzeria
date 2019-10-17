<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
	<div class="input-group">
		<label>Voornaam</label>
			<input type="text" name="voornaam" value="<?php echo $voornaam; ?>">
	</div>	
	<div class="input-group">
		<label>Tussenvoegsel</label>
			<input type="text" name="tussenvoegsel">
	</div>
	<div class="input-group">
		<label>Achternaam</label>
			<input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
	</div>
	<div class="input-group">	
		<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Gebruikersnaam</label>
			<input type="text" name="gebruikersnaam" value="<?php echo $gebruikersnaam; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
			<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
			<input type="password" name="password_2">
	</div>
	
	
		<label>Geslacht</label>
			<input type="radio" name="geslacht" value="M"> M
			<input type="radio" name="geslacht" value="V"> V <br>
	
		<label> Geboortedatum </label>
		<div class="input-group">
			 <input type="date" name="geboortedatum" value="<?php echo $geboortedatum; ?>">

        </div>
	<div class="input-group">
		<label> <br>Plaats </label>
			<input type="text" name="plaats" value="<?php echo $plaats; ?>">
	</div>
	<div class="input-group">
		<label>Postcode </label>
			<input type="text" name="postcode" value="<?php echo $postcode; ?>">
	</div>
	<div class="input-group">
		<label>Straat </label>
			<input type="text" name="straat" value="<?php echo $straat; ?>">
	</div>
	<div class="input-group">
		<label>Huisnummer </label>
			<input type="number" name="huisnummer" value="<?php echo $huisnummer; ?>">
	</div>
	  
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>