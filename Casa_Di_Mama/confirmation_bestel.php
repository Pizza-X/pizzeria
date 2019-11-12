<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<!DOCTYPE HTML>
<br>
<div class="containerDeletePagina">

<?php
$query="DELETE FROM bestelling WHERE bestellingnr='" .$_GET["Bestellingnr"] ."'";
$result = mysqli_query($db, $query) or die (mysqli_error());

if ($result){
  echo (" <br> U heeft Bestellingnummer " .$_GET["Bestellingnr"] . " verwijderd.<p>\n </br>");}
?>
  <form><input type="button" value="Ga terug" onclick="window.location.href='overzichtbestellingen.php'" /></form>
 

</div>
 <br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</html>
<?php include('Footer.php');?>