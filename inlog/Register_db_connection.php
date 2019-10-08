<?php
session_start();

// initializing variables
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty(name)) { array_push($errors, "Gebruikersnaam is nogdig"); }
  if (empty($email)) { array_push($errors, "Email is nodig"); }
  if (empty($password)) { array_push($errors, "Wachtwoord is nodig"); }

}


if (!empty($name) || !empty($password) || !empty($email)) {
    //maak connectie aan
    if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
         
    }
}
