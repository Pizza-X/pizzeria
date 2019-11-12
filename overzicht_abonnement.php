<?php include("db_conn.php");?>
<?php include ("Header.php");?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>OVERZICHT ABONNEMENT</title>

</head>

<body>
  <table border="1" width="30%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht Abonnement</h2></td></tr>
    <tr>
      <th>Klantnummer:</th><th>Abonnementsnummer:</th><th>Dag:</th><th>Tijd:</th><th>Aantal Pizza's:</th><th>Datum:</th>
      </tr>
 <?php
 
  $gebruikersnaam = $_SESSION["gebruikersnaam"]; 
   // sql query
  $sql= "SELECT * FROM `abonnement` JOIN klant ON klant.Klantnr = abonnement.Klantnr WHERE Gebruikersnaam='$gebruikersnaam'";
  // sql query naar de rdbms verzenden // Relationele DataBase Management Systeem -RDBMS-
  $result=mysqli_query($db, $sql);
   //bewaar het aantall rijen in $resultcheck
  $resultcheck=mysqli_num_rows($result);
  // test om te kijken of juiste aantal rijen terug gekomen zijn
  echo $resultcheck;
  // als aantaal rijen groterzijn dan nul
 if($resultcheck>0){
    //while zorgt dat alle rijen worden uitgeprint
   while($row=mysqli_fetch_assoc($result)){
         echo '<tr>';
         echo  '<td>' . $row['Klantnr'] . '</td>';
         echo  '<td>' . $row['Abbonr'] . '</td>';
         echo  '<td>' . $row['Dag']. '</td>';
		 echo  '<td>' . $row['tijd']. '</td>';
		 echo  '<td>' . $row['aantalpizza']. '</td>';
		 echo  '<td>' . $row['Datum']. '</td>';
         echo '<td><a href=#>Wijzigen</a><td>';
         echo  '<td><a href=#>Verwijderen</a></td>';
         echo '</tr>';
}
}
echo  '</table>';
 ?>



</body>
</html>