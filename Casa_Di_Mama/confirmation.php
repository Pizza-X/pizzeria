<?php include('Header.php');?>
<?php include('db_conn.php') ?>
<?php
echo  $_GET["Klantnr"];
$query="DELETE FROM klant WHERE klantnr='" .$_GET["Klantnr"] ."'";
$result = mysqli_query($db, $query) or die (mysqli_error());
echo("Het volgende commando is uitgevoerd: <b>$query</b><br>\n");
if ($result){
  echo ("Klantnummer " .$_GET["Klantnr"] . " is verwijderd.<p>\n");}
?>
  <form><input type="button" value="Terug" onclick="window.location.href='overzichtklanten.php'" /></form>
  <br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('Footer.php');?>
