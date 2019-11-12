<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


  <meta name="description" content="LEARNING">




</head>

<body>

<br><br><br>
 <div class="overzichtklantenOuter">
 <table style="background-color:lightgrey;" border="1" width="100%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht klanten</h2></td></tr>
   <tr>
     <th>klantnr</th><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Gebruikersnaam</th><th>Wachtwoord</th>
     <th>Geslacht</th><th>Geboortedatum</th><th>Plaats</th><th>Postcode</th><th>Straat</th>
       <th>Huisnummer</th>
     </tr>
<?php $Klantnr= $_GET["Klantnr"];
  // sql query
 $sql= "SELECT * fROM klant Where Klantnr='" .$_GET["Klantnr"]."';";
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
        echo '</tr>';
      }
    }
  ?>
</table>
</div>
<br>
<div class="containerDeletePagina">
  <p><h2>Wilt u de klant met bovenstaande gegevens verwijderen?</h2></p>

<br>
<form align="Center" method="get" action="confirmation.php" >
  <input type="submit" value="Verwijder" name="delete">
	<input type="Button" value="Nee, terug" onclick="javascript:history.back();">
   <input type="hidden" value="<?php echo  $Klantnr ?>" name="Klantnr">
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
<?php include('Footer.php');?>