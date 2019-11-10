<?php include('db_conn.php');
echo '<br />';
?>

<?php
 session_start();
// alle inputs een lege waarde geven
  // waardes van eeror leeg maken
  $dagErr="";
  $tijdErr="";
  $aantal_pizzaErr="";
  $soort_pizzaErr="";
  $klantnrErr="";
  // waardes van varibles leeg maken
  $dag="";
  $tijd="";
  $aantal_pizza="";
  $soort_pizza="";
  $klantnr="";
  $date=date("y/m/d");
   //als het met de post method gestuurd is
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // geen lege waardes
  if (empty($_POST['dag'])) {
    $dagErr= 'dag is verplicht';
    echo $dagErr . 'ga terug en vul deze AUB in.<br />';
  }else{
    $dag=$_POST['dag'];
  }
  if(empty($_POST['aantalpizza'])){
   $tijdErr='tijd is verplicht';
   echo $tijdErr . 'ga terug en vul deze AUB in.<br />';
 }else{
   $tijd=$_POST['tijd'];
 }
 if(empty($_POST['aantalpizza'])){
   $aantal_pizzaErr='aantalpizza is verplicht';
   echo $aantal_pizzaErr . 'ga terug en vul deze AUB in<br />';
 }else{
   $aantal_pizza=$_POST['aantalpizza'];
 }
 if (empty($_POST['soort_pizza'])) {
   $soort_pizzaEr='soortpizza is verplicht';
   echo $soort_pizzaErr .  'ga terug en vul deze AUB in.<br />';
 }else {
   $soort_pizza=$_POST['soort_pizza'];
 }
 if (empty($_POST['klantnr'])) {
     $klantnrErr='klantnummer is verplicht ';
     echo $klantnrErr .  'ga terug en vul deze AUB in.<br />';
 }else {
   $klantnr=$_POST['klantnr'];
 }
}  // if voorkomt dat er geen lege of foute data in de DB ingeschreven worden
  // $insert hout de inhoud van de query in
if (!empty($dag) && !empty($tijd) && !empty($aantal_pizza) && !empty($soort_pizza) && !empty($klantnr)){
$insert="INSERT INTO `abonnement` (`Abbonr`, `Klantnr`, `Dag`, `tijd`,`aantalpizza`, `Datum`, `ProductID`) VALUES (NULL, '$klantnr', '$dag', '$tijd','$aantal_pizza', '$date', '$soort_pizza')";
}else {
  echo 'je moet alle verplichter velden invullen';
}
// insert de data en als het succesvol is toon de gegevens van de klant
if(mysqli_query($db, $insert)){
  echo 'U bent ingeschreven<br />';
  echo 'Uw gegevens:<br />';
  echo 'bezorgdag: '.  $dag . '<br />';
  echo 'bezorgtijd: '.  $tijd . '<br />';
  echo 'aantalpizza: ' . $aantal_pizza . '<br />';
  echo 'soortpizza: ' . $soort_pizza . '<br />';
  echo  'Uw klantnummer: ' . $klantnr;
}else{
  echo 'er is iets fout gegaan';
}
 /*echo $dag . '<br />';
 echo $tijd . '<br />';
 echo $aantal_pizza . '<br />';
 echo $soort_pizza . '<br />';
 echo $klantnr;*/
//NULL,  '$klantnr', '$dag', '$tijd', '$date', '$soort_pizza'
?> 