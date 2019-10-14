<html>
<head> Register </head>
<style>
.error {color: #FF0000;}
</style>
<body>
<p><span class="error">* verplicht veld.</span></p>
<form method="POST" action="Register_db_connection.php"> 

	Voornaam: 		<input type="text" name="voornaam"/> 
	<span class="error">* </span>
	<br>Tussenvoegsel: 	<input type="text" name="tussenvoegsel"/> 
	<br>Achternaam: 	<input type="text" name="achternaam"/>
		<span class="error">*</span>

	<br>Emailadres: 	<input type="text" name="email"/>
	<span class="error">*</span>
	<br>Gebruikersnaam: <input type="text" name="gebruikersnaam"/>
		<span class="error">*</span>
	<br>Wachtwoord: 	<input type="password" name="wachtwoord"/>
		<span class="error">*</span>
	<br>Geslacht: 		<input type="radio" name="geslacht"> M </input> 
					<input type="radio" name="geslacht"> V </input> 
		<span class="error">*</span>
	<br>Geboortedatum: 	<input type="date" name="geboortedatum"/>
	<span class="error">*</span>
	<br>Plaats: 		<input type="text" name="plaats"/>
	<span class="error">*</span>
	<br>Postcode: 		<input type="text" name="postcode"/>
	<span class="error">*</span>
	<br>Straat:			<input type="text" name="straat"/>
	<span class="error">*</span>
	<br>Huisnummer:  	<input type="number" name="huisnummer"/>
	<span class="error">*</span>
	<br><input type="submit" name="submit" value="Versturen"/> 
</form>
</body>
</html>