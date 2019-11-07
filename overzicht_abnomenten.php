<?php include("overzicht_abnomenten_db.php") ?>
<?php include("Header.php")?>
<?php include("Footer.php")?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>overzicht_abnomenten</title>
  <meta name="description" content="LEARNING">
  </head>

<body>
<table border="1" width="30%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht Abonomenten</h2></td></tr>
<tr>
  <th>Abbonr</th><th>Klantnr</th><th>Dag</th><th>tijd</th><th>aantalpizza</th><th>Datum</th><th>ProductID</th>
</tr>
<?php
//query die we aan de rdbms willen verzenden
$query="SELECT * FROM abonnement";
$result=mysqli_query($link, $query); // sla de uitkomst in $result op
// check
if (!$result) {
  echo 'error';
}else{

       while ($row= mysqli_fetch_assoc($result)) {
              echo '<tr>';
               echo '<td>' . $row['Abbonr'] . '</td>';
               echo '<td>' . $row['Klantnr'] . '</td>';
               echo '<td>' . $row['Dag'] . '</td>';
               echo '<td>' . $row['tijd'] . '</td>';
               echo '<td>' . $row['aantalpizza'] . '</td>';
               echo '<td>' . $row['Datum'] . '</td>';
               echo '<td>' . $row['ProductID'] . '</td>';
               echo '<tr>';


   }
}



 ?>
</body>
</html>
