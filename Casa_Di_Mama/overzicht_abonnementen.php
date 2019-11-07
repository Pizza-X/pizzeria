<?php include("Header.php")?>

<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>overzicht_abonnementen</title>
  </head>


<table border="1" width="30%" align="Center" style="background-color:grey;" > <tr><td colspan="113" align="center"><h2 align="center">Overzicht Abonnementen</h2></td></tr>
<tr>
  <th>Abbonr</th><th>Klantnr</th><th>Dag</th><th>tijd</th><th>aantalpizza</th><th>Datum</th><th>ProductID</th>
</tr>
<?php include("db_conn.php") ?>

<?php
//query die we aan de rdbms willen verzenden
$query="SELECT * FROM abonnement";
$result=mysqli_query($db, $query); // sla de uitkomst in $result op
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
 
</table>
</html>
<br><br><br><br><br><br><br><br><br><br>
<?php include("Footer.php");?>