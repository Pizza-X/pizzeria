<?php
session_start();

// initializing variables
$gebruikersnaam = "";
$email    = "";
$voornaam = "";
$achternaam = "";
$geboortedatum = "";
$plaats = "";
$postcode = "";
$straat = "";
$huisnummer = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'pizzeria');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $voornaam = mysqli_real_escape_string($db, $_POST['voornaam']);
  $tussenvoegsel = mysqli_real_escape_string($db, $_POST['tussenvoegsel']);
  $achternaam = mysqli_real_escape_string($db, $_POST['achternaam']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gebruikersnaam = mysqli_real_escape_string($db, $_POST['gebruikersnaam']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  //$geslacht = mysqli_real_escape_string($db, $_POST['geslacht']);
  $geboortedatum = mysqli_real_escape_string($db, $_POST['geboortedatum']);
  $plaats = mysqli_real_escape_string($db, $_POST['plaats']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $straat = mysqli_real_escape_string($db, $_POST['straat']);
  $huisnummer = mysqli_real_escape_string($db, $_POST['huisnummer']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($voornaam)) { array_push($errors, "Voornaam is verplicht"); }
  if (empty($achternaam)) { array_push($errors, "Achternaam is verplicht"); }
  if (empty($gebruikersnaam)) { array_push($errors, "Gebruikersnaam is verplicht"); }
  if (empty($email)) { array_push($errors, "Emailadres is verplicht"); }
  if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht"); }
  if ($password_1 != $password_2) {
  array_push($errors, "De wachtwoorden zijn niet hetzelfde"); }
  if (empty($voornaam)) { array_push($errors, "Voornaam is verplicht"); }
  if (empty($achternaam)) { array_push($errors, "Achternaam is verplicht"); }
  
  //if (empty($geslacht)) { array_push ($errors, "Geslacht is verplicht"); }
  if (empty($plaats)) { array_push ($errors, "Plaats is verplicht"); }
  if (empty($postcode)) { array_push ($errors, "Postcode is verplicht"); }
  if (empty($straat)) { array_push ($errors, "Straat is verplicht"); }
  if (empty($huisnummer)) { array_push ($errors, "Huisnummer is verplicht"); } 
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM klant WHERE Gebruikersnaam='$gebruikersnaam' OR Emailadres='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Gebruikersnaam'] === $gebruikersnaam) {
      array_push($errors, "Gebruikersnaam bestaat al");
    }

    if ($user['Emailadres'] === $email) {
      array_push($errors, "Emailadres bestaat al");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO klant (Voornaam, Tussenvoegsel, Achternaam, Emailadres, Gebruikersnaam, Wachtwoord, Geslacht, Plaats, Postcode, Straat, Huisnummer) 
  			  VALUES('$voornaam', '$tussenvoegsel', '$achternaam', '$username', '$email', '$password', '$geslacht', '$plaats', '$postcode', '$straat', '$huisnummer')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}