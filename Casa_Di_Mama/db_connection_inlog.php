<?php include('db_conn.php'); ?>
<?php
session_start();
//LOGIN
//controleren of input gebruikersnaam is ingevuld
if(isset($_POST['gebruikersnaam'])){
    //stop de input in variabelen
    $gebruikersnaam=$_POST['gebruikersnaam'];
    $wachtwoord=$_POST['wachtwoord'];
    
    //sql query maken
    $sql="select * from klant where Gebruikersnaam='".$gebruikersnaam."'AND Wachtwoord='".$wachtwoord."' LIMIT 1";
    //variable voor de connectie en sql query
    $result=mysqli_query($db, $sql);
    //als er een record uitkomt, bestaat deze klant in de db
if(mysqli_num_rows($result)==1)
        {
            header("Location: index.php");
            $db_gebruikersnaam = mysqli_query($db, $sql);
            $row= mysqli_fetch_array($db_gebruikersnaam);
            $_SESSION['gebruikersnaam'] = $row['Gebruikersnaam'];
        }
        
    else{
        header("Location: Login.php");
        $_SESSION['ingelogd'] = false;
    } 
}
?>