<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<!DOCTYPE HTML>
<br>
<div class="containerDeletePagina">

<?php
$query="DELETE FROM klant WHERE klantnr='" .$_GET["Klantnr"] ."'";
$result = mysqli_query($db, $query) or die (mysqli_error());

if ($result){
  echo (" <br> U heeft Klantnummer " .$_GET["Klantnr"] . " verwijderd.<p>\n </br>");}
?>
  <form><input type="button" value="Ga terug" onclick="window.location.href='overzichtklanten.php'" /></form>
</div>
  <br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</html>
<?php include('Footer.php');?>