<!-- de db_conn includen zodat we een connectie hebben met de database -->
<?php include ("db_conn.php");?>
<?php include ("Header.php");?>
<!doctype html>

<!-- tabel vorm maken waardoor alles netjes in een tabel komt -->
 <table style="background-color:grey;" border="1" width="30%" align="Center"> <tr><td colspan="113" align="center"><h2 align="left">Jouw bestelling gegevens</h2></td></tr>
    <tr>
     <th>Totaalprijs € </th>
	 <th>Datum</th>
	 <th>Naam van de pizza</th>
      </tr>
<?php

//session_start(); // start the session omdat in de header al session wordt gestart hoeft het hier niet meer

$gebruikersnaam = $_SESSION["gebruikersnaam"]; // Gebruikersnaam in de variable gooien voor de sessie
// select de gegevens van de klant die is ingelogd. Joinen met de bestelling tabel om zo de gegevens uit de tabel van bestelling van de gebruiker die is ingelogd uit te lezen. Joinen op product om te kijken welk product is gekocht.
$sql = "SELECT bestelling.Totaalprijs, bestelling.Datum, product.Naam FROM klant JOIN bestelling ON bestelling.Klantnr = klant.Klantnr JOIN product ON bestelling.ProductID=product.ProductID  WHERE Gebruikersnaam='$gebruikersnaam'";
$result = mysqli_query($db, $sql);
//doorloopt de gegevens van de database en toont dit op de scherm
if($row = mysqli_fetch_array($result)) {
       
         echo  '<td>' . $row['Totaalprijs'] . '</td>'; 
         echo  '<td>' . $row['Datum']. '</td>';
		 echo  '<td>' . $row['Naam']. '</td>';
   
}



?>
</table>
</html>
