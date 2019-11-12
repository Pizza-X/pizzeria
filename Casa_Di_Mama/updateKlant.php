<?php include('sever_update_admin.php'); ?>
<?php //include('Header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Wijzigen_Admin</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
  <?php 
  
  $Klantnr = $_GET['Klantnr'];
  $_SESSION['Klantnr'] = $_GET['Klantnr']; 
    // sql query
   $sql= "SELECT * fROM klant Where Klantnr='" .$_SESSION["Klantnr"]."';";
   // sql query naar de rdbms verzenden
   $result=mysqli_query($db, $sql);
    //bewaar het aantall rijen in $resultcheck
   $resultcheck=mysqli_num_rows($result);
   // test om te kijken of jeuste aantall rrijen treug gekomen
   //echo $resultcheck;
   // als aantaal rijen groterzijn dan nul
  if($resultcheck>0){
     //while zorgt dat alle rijen worden uitgeprint
    while($row=mysqli_fetch_assoc($result)){
      $gebruikersnaam =$row['Gebruikersnaam'] ;
      $email    = $row['Emailadres'];
      $voornaam = $row['Voornaam'];
      $achternaam = $row['Achternaam'];
      $geslacht = $row['Geslacht'];
      $geboortedatum = $row['Geboortedatum'];
      $plaats = $row['Plaats'];
      $postcode = $row['Postcode'];
      $straat = $row['Straat'];
      $huisnummer = $row['Huisnummer'];
       $tussenvoegsel= $row['Tussenvoegsel'];
	  $wachtwoord = $row['Wachtwoord'];
}
}
      ?>
<style>
.error2 {color: #FF0000;}
</style>
  <div class="header">
  	<h2>Wijzig</h2>
  </div>
  <form id=form_register method="post" action="sever_update_admin.php">
  	<?php include('error.php'); ?>
    	<input type="hidden" name="Klantnr" value="<?php echo($_GET["Klantnr"]);?>">
	<div class="input-group">
	<!-- bij elke label staat Span class * betekent dat het verplicht is -->
	<!-- mocht er iets niet worden ingevuld dan blijft de rest staat waar php echo voor staat -->

		<label>Voornaam </label>
			<input type="text" name="voornaam" value="<?php echo $voornaam; ?>">

	</div>
	<div class="input-group">
		<label>Tussenvoegsel </label>
			<input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel; ?>">
	</div>
	<div class="input-group">
		<label>Achternaam </label>
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
		<label>Wachtwoord </label>
			<input type="text" name="password_1" value="<?php echo $wachtwoord; ?>">
	</div>


		<div class="input-group">
		<label>Geslacht</label>
		<input type="text" name="geslacht" value="<?php echo $geslacht; ?>">
		</div>
  <!-- drop down menu om je geboorte jaar, maand en dag te kiezen -->
	<div class="input-group">
		<label>Geboortedautm </label>
			<input type="date" name="geboortedatum" value="<?php echo $geboortedatum; ?>">
	</div>

	<div class="input-group">
		<label> Plaats </label>
			<input type="text" name="plaats" value="<?php echo $plaats; ?>">
	</div>
	<div class="input-group">
		<label>Postcode  </label>
			<input type="text" name="postcode" value="<?php echo $postcode; ?>">
	</div>
	<div class="input-group">
		<label>Straat</label>
			<input type="text" name="straat" value="<?php echo $straat; ?>">
	</div>
	<div class="input-group">
		<label>Huisnummer </label>
			<input type="number" name="huisnummer" value="<?php echo $huisnummer; ?>">
	</div>
  	  <button type="submit" class="btn" name="submit">Wijzig</button>
  </form>
    <br><br><br>
</body>
</html>
<?php  include('Footer.php'); ?>