<?php
include 'db_conn.php';

function pizza_naam($productID) {
    global $db;
    //query maken
    $sql_pizza_naam = "Select * from product where productID = ". $productID . ";";
    $result = mysqli_query($db,$sql_pizza_naam);
    //hoeveel regels worden er terug gegeven
    $resultCheck = mysqli_num_rows($result);
    //als er regels worden terug gegeven, return naam
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Naam'];
        }
    }
}

function pizza_info($productID) {
    global $db;
    //query maken
    $sql_pizza_info = "Select * from product where productID = ". $productID . ";";
    $result = mysqli_query($db,$sql_pizza_info);
    //hoeveel regels worden er terug gegeven
    $resultCheck = mysqli_num_rows($result);
    //als er regels worden terug gegeven, return info
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Informatie'];
        }
    }
}

function pizza_prijs($productID) {
    global $db;
    //query maken
    $sql_pizza_prijs = "Select * from product where productID = ". $productID . ";";
    $result = mysqli_query($db,$sql_pizza_prijs);
    //hoeveel regels worden er terug gegeven
    $resultCheck = mysqli_num_rows($result);
    //als er regels worden terug gegeven, return prijs
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Prijs'];
        }
    }
}

function pizza_ingredienten($productID) {
    global $db;
    //query maken
    $sql_pizza_ingredienten = "Select * from product where productID = ". $productID . ";";
    $result = mysqli_query($db,$sql_pizza_ingredienten);
    //hoeveel regels worden er terug gegeven
    $resultCheck = mysqli_num_rows($result);
    //als er regels worden terug gegeven, return naam
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Ingredienten'];
        }
    }
}

function klantnr_uit_de_sessie($gebruikersnaam){
global $db;
//query maken
$sql="Select * from klant where Gebruikersnaam = '{$gebruikersnaam}' ;";
// query naar de db verzende
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  $row = mysqli_fetch_assoc($result);
 $output=  $row['Klantnr'];
}else {
  $output= 'error';
}
return $output;
}

?>