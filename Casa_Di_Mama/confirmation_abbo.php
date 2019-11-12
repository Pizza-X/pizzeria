<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<!DOCTYPE HTML>
<br>
<div class="containerDeletePagina">

<?php
$query="DELETE FROM abonnement WHERE Abbonr='" .$_GET["Abbonr"] ."'";
$result = mysqli_query($db, $query) or die (mysqli_error());

if ($result){
  echo (" <br> U heeft abonnementnummer " .$_GET["Abbonr"] . " verwijderd.<p>\n </br>");}
?>
  <form><input type="button" value="Ga terug" onclick="window.location.href='overzichtabonnementen.php'" /></form>

</div>
  <br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><Br>

</html>
<?php include('Footer.php');?>