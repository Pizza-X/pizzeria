<!-- de db_conn includen zodat we een connectie hebben met de database -->
<?php include ("db_conn.php");?>
<?php include ("Header.php");?>
<!doctype html>
<br><br><br>
<div class="overzichtklantenOuter">
<!-- tabel vorm maken waardoor alles netjes in een tabel komt -->
 <table style="background-color:lightgrey;" border="1" width="100%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Jouw gegevens</h2></td></tr>
    <tr>
     <th>Voornaam</th>
	 <th>Tussenvoegsel</th>
	 <th>Achternaam</th>
	 <th>Emailadres</th>
	 <th>Gebruikersnaam</th>
	 <th>Wachtwoord</th>
     <th>Geslacht</th>
	 <th>Geboortedatum</th>
	 <th>Plaats</th><th>Postcode</th><th>Straat</th>
     <th>Huisnummer</th>
      </tr>
<?php

//session_start(); // start the session omdat in de header al session wordt gestart hoeft het hier niet meer

$gebruikersnaam = $_SESSION["gebruikersnaam"]; // Gebruikersnaam in de variable gooien voor de sessie
// select de gegevens van de klant die is ingelogd
$sql = "SELECT * FROM klant WHERE Gebruikersnaam='$gebruikersnaam'";
$result = mysqli_query($db, $sql);
//doorloopt de gegevens van de database en toont dit op de scherm
if($row = mysqli_fetch_array($result)) {
       
         echo  '<td>' . $row['Voornaam'] . '</td>';
         echo  '<td>' . $row['Tussenvoegsel']. '</td>';
         echo  '<td>' . $row['Achternaam'] . '</td>';
		 echo  '<td>' . $row['Emailadres'] . '</td>';
         echo '<td>' . $row['Gebruikersnaam']. '</td>';
         echo  '<td>'. $row['Wachtwoord']. '</td>';
         echo '<td>' .  $row['Geslacht']. '</td>';
         echo  '<td>'. $row['Geboortedatum']. '</td>';
         echo  '<td>'. $row['Plaats']  . '</td>';
         echo  '<td>'. $row['Postcode']. '</td>';
         echo  '<td>'. $row['Straat']. '</td>';
         echo  '<td>'. $row['Huisnummer']. '</td>';
 
}



?>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</html>

<?php include ("Footer.php"); ?>