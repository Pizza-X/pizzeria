<!-- de db_conn includen zodat we een connectie hebben met de database -->
<?php include ("db_conn.php");?>
<?php include ("Header.php");?>
<!doctype html>

<!-- tabel vorm maken waardoor alles netjes in een tabel komt -->
<div class="overzicht">
 <table style="background-color:lightgrey;" border="1" width="100%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Jouw abonnement gegevens</h2></td></tr>
    <tr>
     <th>Dag</th>
	 <th>Besteld op</th>
	 <th>Tijd</th>
	 <th>Aantal pizza's</th>
      </tr>
<?php

//session_start(); // start the session omdat in de header al session wordt gestart hoeft het hier niet meer

$gebruikersnaam = $_SESSION["gebruikersnaam"]; // Gebruikersnaam in de variable gooien voor de sessie
// select de gegevens van de klant die is ingelogd. Joinen met de bestelling tabel om zo de gegevens uit de tabel van bestelling van de gebruiker die is ingelogd uit te lezen. Joinen op product om te kijken welk product is gekocht.
$sql = "SELECT abonnement.Dag, abonnement.Datum, abonnement.tijd, abonnement.aantalpizza FROM klant JOIN abonnement ON abonnement.Klantnr = klant.Klantnr WHERE Gebruikersnaam='$gebruikersnaam'";
$result = mysqli_query($db, $sql);
//doorloopt de gegevens van de database en toont dit op de scherm
while($row=mysqli_fetch_assoc($result)){
       echo '<tr>';
         echo  '<td>' . $row['Dag'] . '</td>'; 
         echo  '<td>' . $row['Datum']. '</td>';
		 echo  '<td>' . $row['tijd']. '</td>';
		 echo  '<td>' . $row['aantalpizza']. '</td>';
   echo '</tr>';
}



?>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</html>

<?php include ("footer.php");?>
