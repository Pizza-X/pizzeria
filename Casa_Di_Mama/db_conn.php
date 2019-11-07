<?php 
$db = mysqli_connect("localhost", "root", "", "pizzeria");
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}