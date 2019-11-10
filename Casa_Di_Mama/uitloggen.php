<?php
session_start();
session_destroy(); //verwijder alle data in de session;
header("location: index.php");
exit();
?>
