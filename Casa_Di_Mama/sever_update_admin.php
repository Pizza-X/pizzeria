<?php include('Header.php');?>
<?php
$errors = array();
 //connectie database
 $db = mysqli_connect("localhost", "root", "", "pizzeria");
// Als er op submit wordt gedrukt wordt het volgende uitgevoerd:
if (isset($_POST['submit'])) {
  $Klantnr=$_POST['Klantnr'];
  //Ontvangt alle waarden die ingevuld zijn. mysqli_real_escape_string verwijderd alle special characters zo dat het goed in de SQL kan worden uitgevoerd.
 
  $voornaam = mysqli_real_escape_string($db, $_POST['voornaam']);
  $tussenvoegsel = mysqli_real_escape_string($db, $_POST['tussenvoegsel']);
  $achternaam = mysqli_real_escape_string($db, $_POST['achternaam']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gebruikersnaam = mysqli_real_escape_string($db, $_POST['gebruikersnaam']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $geslacht = mysqli_real_escape_string($db, $_POST['geslacht']);
  $plaats = mysqli_real_escape_string($db, $_POST['plaats']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $straat = mysqli_real_escape_string($db, $_POST['straat']);
  $huisnummer = mysqli_real_escape_string($db, $_POST['huisnummer']);
  $geboortedatum = mysqli_real_escape_string($db, $_POST['geboortedatum']);
  //Geboortedatum aan elkaar voegen zodat het in de database kan worden gezet.
 /* $jaar= $_POST['jaar'];
  $maand = $_POST['maand'];
  $dag = $_POST['dag'];
	if ($jaar != '' && $maand != '' && $dag != '') {
  $geboortedatum = $jaar.'-'.$maand .'-'.$dag; 
} */
  // Validatie check om te kijken of alles goed is ingevuld
  // Mocht er een fout zijn wordt dit op het scherm getoond doormiddel van Array_push.
  if (empty($voornaam)) { array_push($errors, "Voornaam is verplicht"); }
   elseif (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) { array_push($errors, "Voornaam mag alleen uit letters bestaan"); } //check of Voornaam geldig is
   if (!preg_match("/^[a-zA-Z ]*$/",$tussenvoegsel)) { array_push($errors, "Tussenvoegsel mag alleen uit letters bestaan"); }  //check of Tussenvoegsel geldig is
  if (empty($achternaam)) { array_push($errors, "Achternaam is verplicht"); }
   if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) { array_push($errors, "Achternaam mag alleen uit letters bestaan"); }		//check of Achternaam geldig is
  if (empty($email)) { array_push($errors, "Emailadres is verplicht"); }
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { array_push($errors, "Email formaat is verkeerd"); } 		//controle of het Email goed wordt ingevuld
  if (empty($gebruikersnaam)) { array_push($errors, "Gebruikersnaam is verplicht"); }
  if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht"); }
  // controle van het wachtwoord of dezelfde wachtwoord is gegeven
  if (empty($geslacht)) { array_push ($errors, "Geslacht is verplicht"); }
  if (empty($geboortedatum)) { array_push ($errors, "Geboortedatum is verplicht"); }
  if (empty($plaats)) { array_push ($errors, "Plaats is verplicht"); }
	elseif (!preg_match("/^[a-zA-Z ]*$/", $straat)) { array_push($errors, "Plaats mag alleen uit letters bestaan"); } //check of plaats geldig is
  if (empty($postcode)) { array_push ($errors, "Postcode is verplicht"); }
	elseif (!preg_match ('/^[1-9][0-9]{3} ?[A-Z]{2}$/',$postcode)) { array_push($errors, "Ongeldige postcode"); } 	//check of de postcode geldig is
  if (empty($straat)) { array_push ($errors, "Straat is verplicht"); }
	elseif (!preg_match("/^[a-zA-Z ]*$/", $straat)) { array_push($errors, "Straat mag alleen uit letters bestaan"); } //check of Straat geldig is
  if (empty($huisnummer)) { array_push ($errors, "Huisnummer is verplicht"); }
/*
  // Eerst op de database kijken of gebruikersnaam of email al bestaat
  $user_check_query = "SELECT * FROM klant WHERE Gebruikersnaam='$gebruikersnaam' OR Emailadres='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // Als gebruikersnaam al bestaat
    if ($user['Gebruikersnaam'] === $gebruikersnaam) {
      array_push($errors, "Gebruikersnaam bestaat al");
    }
    if ($user['Emailadres'] === $email) {              //Als emailadres al bestaat
      array_push($errors, "Emailadres bestaat al");
    }
  }*/
  // Als er geen errors meer zijn kan het in de database worden gezet.
  if (count($errors) == 0) {
      $password = $password_1;
      $query = "UPDATE klant SET Voornaam='$voornaam', Tussenvoegsel='$tussenvoegsel', Achternaam='$achternaam', Emailadres='$email',
      Gebruikersnaam='$gebruikersnaam', Wachtwoord=  '$password', Geslacht='$geslacht', Geboortedatum='$geboortedatum', Plaats='$plaats',
      Postcode='$postcode', Straat='$straat', Huisnummer='$huisnummer' WHERE Klantnr='$Klantnr'"
      ;
      $uitkomst =  mysqli_query($db, $query);
      if (isset($uitkomst)) { 
	   echo '<script>alert("De wijzigingen zijn doorgevoerd.");</script>';
      echo '<script>window.location="overzichtklanten.php";</script>';
}
    }else { ?>
	<br>
	<div class="containerDeletePagina">
  <p><h2>Oeps! Er iets iets fout gegaan. Controleer of alle gegevens goed ingevuld zijn.</h2></p>

<br>
<form align="Center" method="get">
	<input type="Button" value="Ga terug" onclick="javascript:history.back();">
</form>
</div>
<?php
    }
}
?>
<?php // include('Footer.php');?>