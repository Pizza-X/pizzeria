<?php 
$host="localhost";
$user="root";
$password="";
$db="pizzeria";

// mysql_connect($host, $user, $password);
// mysql_select_db($db);
$con = mysqli_connect($host, $user, $password,$db);


	function test_input($data) { 
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data); 
	return $data; 
	}

	// Initiëren van variabelen en ze "lege" waarde toekennen 	
	$voornaamErr = $achternaamErr = $gebruikersnaamErr = $wachtwoordErr = ""; 
	$voornaam = $achternaam = $gebruikersnaam = $wachtwoord = ""; 
			if(isset($_POST['submit'])) { 
			if(isset($_POST['voornaam']['achternaam']))
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		//voornaam
	{ if (empty($_POST["voornaam"])) 
		{  $voornaamErr = "Voornaam is verplicht <br>"; echo $voornaamErr; }
		else { 		$voornaam = test_input($_POST["voornaam"]); 
		// check of voornaam uitsluitend uit letters en spaties bestaat 
		if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) 
		{ 	$voornaamErr = "Bij voornaam zijn alleen letters en spaties zijn toegestaan <br>";  echo $voornaamErr;}
		} 
	}
		//achternaam
	{ if (empty($_POST["achternaam"]))
		{ $achternaamErr = "Achternaam is verplicht <br>"; echo $achternaamErr;}
		else { $achternaam = test_input($_POST["achternaam"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) 
		{ $achternaamErr = "Bij achternaam zijn alleen letters en spaties zijn toegestaan <br>"; echo $achternaamErr;} 
		}
	}
		//gebruikersnaam
	{ if (empty($_POST["gebruikersnaam"]))
		{ $gebruikersnaamErr = "Gebruikersnaam is verplicht"; echo $gebruikersnaamErr; }
	else { $gebruikersnaam = test_input($_POST["gebruikersnaam"]); echo $gebruikersnaam; }
	}
		//wachtwoord
	{  if (empty($_POST["wachtwoord"]))
			{$wachtwoordErr = "Wachtwoord is verplicht"; echo $wachtwoordErr; }
	else { $wachtwoord = test_input($_POST["wachtwoord"]); echo $wachtwoord; }
	}
			}
	 $sql="INSERT INTO klant(Voornaam, Achternaam, Gebruikersnaam, Wachtwoord)
	       VALUES ('$voornaam', '$achternaam', '$gebruikersnaam', '$wachtwoord')";
    
    $result=mysqli_query($con, $sql);
	   if($result == 1){
        echo " U bent geregistreerd ";
        
    }
    else{
        echo " Er iets is iets verkeerds gegaan.  ";
    }      


	
/*
	$tussenvoegsel = $_POST['tussenvoegsel'];
	$achternaam = $_POST['achternaam'];
	$email = $_POST['email'];
	$gebruikersnaam = $_POST['gebruikersnaam'];
	$wachtwoord = $_POST['wachtwoord'];
	$geslacht = $_POST['geslacht'];
	$geboortedatum = $_POST['geboortedatum'];
	$plaats = $_POST['plaats'];
	$postcode = $_POST['postcode'];
	$straat = $_POST['straat'];
	$huisnummer = $_POST['huisnummer'];
	*/

?>