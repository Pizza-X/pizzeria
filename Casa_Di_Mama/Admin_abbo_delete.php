<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


  <meta name="description" content="LEARNING">
</head>

<body>

 <div class="overzicht">
 <table style="background-color:lightgrey;" border="1" width="100%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht Abonnement</h2></td></tr>
   <tr>
      <th>Abbonr</th>
	  <th>Klantnr</th>
	  <th>Gebruikersnaam</th>
	  <th>Dag</th>
	  <th>Bestelling geplaatst op</th>
	  <th>Tijd</th>
	  <th>Aantal pizza's</th>
	  <th>ProductID</th>
	  <th>Soort pizza</th>
      </tr>
<?php 
 $Abbonr= $_GET["Abbonr"];
  // sql query
 $sql= "SELECT * FROM abonnement JOIN klant ON abonnement.Klantnr = klant.Klantnr
  JOIN product ON abonnement.ProductID = product.ProductID Where Abbonr='" .$_GET["Abbonr"]."';";
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
        echo  '<td>' . $row['Abbonr'] . '</td>';
         echo  '<td>' . $row['Klantnr'] . '</td>';
		 echo  '<td>' . $row['Gebruikersnaam'] . '</td>';
         echo  '<td>' . $row['Dag']. '</td>';
         echo  '<td>' . $row['Datum'] . '</td>';
		echo  '<td>' . $row['tijd']. '</td>';
		 echo '<td>' . $row['aantalpizza']. '</td>';
		 echo '<td>' . $row['ProductID']. '</td>';
		 echo '<td>' . $row['Naam']. '</td>';
        echo '</tr>';
      }
    }
  ?>
</table>
</div>
<br>
<div class="containerDeletePagina">
  <p><h2>Wilt u het abonnement met bovenstaande gegevens verwijderen?</h2></p>

<br>
<form align="Center" method="get" action="confirmation_abbo.php" >
  <input type="submit" value="Verwijder" name="delete">
	<input type="Button" value="Nee, terug" onclick="javascript:history.back();">
	<input type="hidden" value="<?php echo  $Abbonr?>" name="Abbonr">
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
<?php include('Footer.php');?>