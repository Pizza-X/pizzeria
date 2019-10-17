<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="pizzeria";
// mysql_connect($host, $user, $password);
// mysql_select_db($db);
$con = mysqli_connect($host, $user, $password,$db);
if(isset($_POST['gebruikersnaam'])){
    
    $gebruikersnaam=$_POST['gebruikersnaam'];
    $wachtwoord=$_POST['wachtwoord'];
    $_SESSION['gebruikersnaam'] = $gebruikersnaam;
    
    $sql="select * from klant where Gebruikersnaam='".$gebruikersnaam."'AND Wachtwoord='".$wachtwoord."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " Welkom " . $_SESSION['gebruikersnaam'];
        
    }
    else{
        echo " U heeft het verkeerde wachtwoord of gebruikersnaam opgegeven";
    }      
}
?>