<?php
//variabelen die worden meegegeven aan de mysqli_connect
session_start();
$host="localhost";
$user="root";
$password="";
$db="pizzeria";
// mysql_connect($host, $user, $password);
// mysql_select_db($db);
$con = mysqli_connect($host, $user, $password,$db);
//controleren of input gebruikersnaam is ingevuld
if(isset($_POST['gebruikersnaam'])){
    //stop de input in variabelen
    $gebruikersnaam=$_POST['gebruikersnaam'];
    $wachtwoord=$_POST['wachtwoord'];
    
    //sql query maken
    $sql="select * from klant where Gebruikersnaam='".$gebruikersnaam."'AND Wachtwoord='".$wachtwoord."' limit 1";
    //variable voor de connectie en sql query
    $result=mysqli_query($con, $sql);
    //als er een record uitkomt, bestaat deze klant in de db
    if(mysqli_num_rows($result)==1){
        header("Location: index.php");
        $_SESSION['gebruikersnaam'] = $gebruikersnaam;
        }
    else{
        header("Location: Login.php");
        $_SESSION['login'] = false;
    } 
}
?>