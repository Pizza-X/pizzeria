<?php include("db_conn.php");?>
<?php include("Header.php");?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>OVERZICHT BESTELLINGEN</title>

</head>


  <div class="overzicht">
  <table style="background-color:lightgrey;" border="1" width="100%" align="Center"> <tr><td colspan="113" align="center"><h2 align="center">Overzicht Bestellingen</h2></td></tr>
    <tr>
      <th>Bestellingnr</th>
	  
	  <th>Totaalprijs €</th>
	  <th>Datum</th>
	  <th>Klantnr</th>
	  <th>Gebruikersnaam </th>
	  <th>Productid</th>
	 
	  <th>Soort pizza</th>
	   <th>Aantal</th>
      </tr>
 <?php
   // sql query
  $sql= "SELECT * FROM bestelling
  JOIN klant ON bestelling.Klantnr = klant.Klantnr
  JOIN product ON bestelling.ProductID = product.ProductID ORDER BY bestelling.bestellingnr";
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
         echo  '<td>' . $row['Bestellingnr'] . '</td>';
         
         echo  '<td>' . $row['Totaalprijs']. '</td>';
         echo  '<td>' . $row['Datum'] . '</td>';
		echo  '<td>' . $row['Klantnr']. '</td>';
		 echo '<td>' . $row['Gebruikersnaam']. '</td>';
		 echo '<td>' . $row['ProductID']. '</td>';
		
		 echo '<td>' . $row['Naam']. '</td>';
		 echo  '<td>' . $row['Aantal'] . '</td>';
		   echo  ("<td> <a href=\"Admin_bestel_delete.php?Bestellingnr=".$row['Bestellingnr']."\">Verwijder </a>");
		echo '</tr>';
}
}


 ?>
 </table>
</div>

</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('Footer.php');?>