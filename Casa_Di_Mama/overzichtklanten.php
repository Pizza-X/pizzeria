<?php include("db_conn.php");?>
<?php include("Header.php");?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>OVERZICHT KLANTEN</title>

</head>


  <div class="overzichtklantenOuter">
  <table style="background-color:lightgrey;" border="1" width="30%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht klanten</h2></td></tr>
    <tr>
      <th>klantnr</th><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Gebruikersnaam</th><th>Wachtwoord</th>
      <th>Geslacht</th><th>Geboortedatum</th><th>Plaats</th><th>Postcode</th><th>Straat</th>
        <th>Huisnummer</th>
      </tr>
 <?php
   // sql query
  $sql= "SELECT * fROM klant;";
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
            //$_GET["klantnr"]=  $row['Klantnr'];
         echo '<tr>';
         echo  '<td>' . $row['Klantnr'] . '</td>';
         echo  '<td>' . $row['Voornaam'] . '</td>';
         echo  '<td>' . $row['Tussenvoegsel']. '</td>';
         echo  '<td>' . $row['Achternaam'] . '</td>';
         echo '<td>' . $row['Gebruikersnaam']. '</td>';
         echo  '<td>'. $row['Wachtwoord']. '</td>';
         echo '<td>' .  $row['Geslacht']. '</td>';
         echo  '<td>'. $row['Geboortedatum']. '</td>';
         echo  '<td>'. $row['Plaats']  . '</td>';
         echo  '<td>'. $row['Postcode']. '</td>';
         echo  '<td>'. $row['Straat']. '</td>';
         echo  '<td>'. $row['Huisnummer']. '</td>';
      	echo ("<td> <a href=\"updateKlant.php?Klantnr=".$row['Klantnr']."\">Wijzig</a></td>\n ");
        echo  ("<td> <a href=\"Admin_klant_delete.php?Klantnr=".$row['Klantnr']."\">Verwijder | </a>");
        echo '</tr>';
}
}


 ?>
 </table>
</div>

</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('Footer.php');?>
