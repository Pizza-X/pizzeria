<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

// mysql_connect($host, $user, $password);
// mysql_select_db($db);
$con = mysqli_connect($host, $user, $password,$db);

if(isset($_POST['username'])){
    
    $name=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username'] = $name;
    
    $sql="select * from loginform where user='".$name."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " Welkom " . $_SESSION['username'];
        
    }
    else{
        echo " U heeft het verkeerde wachtwoord of gebruikersnaam opgegeven";
    }      
}
?>

