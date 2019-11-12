<?php include('db_conn.php'); ?>
<?php include('header.php'); ?>

<?php include("functies.php") ?>
<?php

// alle inputs een lege waarde geven
  // waardes van eeror leeg maken
  $dagErr="";
  $tijdErr="";
  $aantal_pizzaErr="";
  $soort_pizzaErr="";
  //$klantnrErr="";
  // waardes van varibles leeg maken
  $dag="";
  $tijd="";
  $aantal_pizza="";
  $soort_pizza="";
  $klantnr= klantnr_uit_de_sessie($_SESSION['gebruikersnaam']) ;
  $date=date("y/m/d");
   //als het met de post method gestuurd is
   ?> <br> <div class="containerDeletePagina"> <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // geen lege waardes
  if (empty($_POST['dag'])) {
    $dagErr= 'Dag is verplicht';
    echo $dagErr . '<br />';
  }else{
    $dag=$_POST['dag'];
  }
  if(empty($_POST['aantalpizza'])){
   $tijdErr='Tijd is verplicht';
   echo $tijdErr . '<br />';
 }else{
   $tijd=$_POST['tijd'];
 }
 if(empty($_POST['aantalpizza'])){
   $aantal_pizzaErr='Aantal pizza\'s is verplicht';
   echo $aantal_pizzaErr . ' <br />';
 }else{
   $aantal_pizza=$_POST['aantalpizza'];
 }
 $soort_pizza=$_POST['soort_pizza'];
 
 ?> 
 <form><input type="button" value="Ga terug" onclick="javascript:history.back();"/> </form>
 
 </div> 
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php
}  // if voorkomt dat er geen lege of foute data in de DB ingeschreven worden
  // $insert hout de inhoud van de query in
if (!empty($dag) && !empty($tijd) && !empty($aantal_pizza) && !empty($soort_pizza)){
$insert="INSERT INTO `abonnement` (`Abbonr`, `Klantnr`, `Dag`, `tijd`,`aantalpizza`, `Datum`, `ProductID`) VALUES (NULL, '$klantnr', '$dag', '$tijd','$aantal_pizza', '$date', '$soort_pizza')";
// insert de data en als het succesvol is toon de gegevens van de klant
if(mysqli_query($db, $insert)){    
		echo '<script>alert("U heeft zich succesvol geregistreerd voor het abonnement.");</script>';
      echo '<script>window.location="aboklant.php";</script>';
}
}else { 
  	
}
// insert de data en als het succesvol is toon de gegevens van de klant
/*if(mysqli_query($db, $insert)){
  echo 'U bent ingeschreven<br />';
  echo 'Uw gegevens:<br />';
  echo 'bezorgdag: '.  $dag . '<br />';
  echo 'bezorgtijd: '.  $tijd . '<br />';
  echo 'aantalpizza: ' . $aantal_pizza . '<br />';
  echo 'soortpizza: ' . $soort_pizza . '<br />';
  echo  'Uw klantnummer: ' . $klantnr;
}else{
  echo 'er is iets fout gegaan';
}*/
 /*echo $dag . '<br />';
 echo $tijd . '<br />';
 echo $aantal_pizza . '<br />';
 echo $soort_pizza . '<br />';
 echo $klantnr;*/
//NULL,  '$klantnr', '$dag', '$tijd', '$date', '$soort_pizza'
?>
<?php include('footer.php');?>