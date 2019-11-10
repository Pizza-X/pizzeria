<?php
include 'db_conn.php';
  
    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION['gebruikersnaam']))
      {
        if(isset($_SESSION["shopping_cart"]))
        {
          //lijst maken van alle id's die voorkomen in de array shopping cart
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
          //als id niet voorkomt in shopping_cart
          if(!in_array($_GET["id"], $item_array_id))
          {
            $count = count($_SESSION["shopping_cart"]);
      //verzamel gegevens
              $item_array = array(
                        'item_id'       =>   $_GET["id"],
                        'item_name'     =>   $_POST["hidden_name"],
                        'item_price'    =>   $_POST['hidden_price'],
                        'item_quantity' =>   $_POST["quantity"]

              );
              //
              $_SESSION["shopping_cart"][$count] = $item_array;
          }
          else
          {
            //als product al is toegevoegd, pop-up
            echo '<script>alert("product is al toegevoegd");</script>';
            echo '<script>window.location = "winkelwagen_pagina.php";</script>';
          }
        }
        else
        {
          //als winkelwagen leeg is, voor dit uit
           $item_array = array(
                        'item_id'       =>   $_GET["id"],
                        'item_name'     =>   $_POST["hidden_name"],
                        'item_price'    =>   $_POST['hidden_price'],
                        'item_quantity' =>   $_POST["quantity"]

              );
             $_SESSION["shopping_cart"][0] = $item_array;
        }
      } 
    }
    
//verwijderen product uit winkelwagen
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                if(!empty($_SESSION["shopping_cart"])){
                echo '<script>alert("Product verwijderd")</script>';
                echo '<script>window.location="winkelwagen_pagina.php"</script>';
                } else {
                echo '<script>alert("Product verwijderd");</script>';
                echo '<script>window.location="index.php";</script>';
              }
            }
          }
      }
    }
    
//Bestellen product(en) uit winkelwagen
    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "db")
            {
                //Klantnr ophalen
                $klantnr = "(Select Klantnr from klant where Gebruikersnaam = '". $_SESSION['gebruikersnaam'] ."')";
                //loop door alle producten 
                foreach($_SESSION["shopping_cart"] as $key => $value){
                    $totaalprijs = $value['item_quantity'] * $value['item_price']; 
                    //sql query maken
                    $sql="insert into Bestelling (Aantal, Totaalprijs, Klantnr, ProductID) VALUES (".$value['item_quantity'].", ".$totaalprijs.", ".$klantnr.", ".$value['item_id'].") ";
                    mysqli_query($db, $sql); //verstuur gegevens in db
                    unset($_SESSION["shopping_cart"]); //maak shopping cart leeg
                }
                    echo '<script>alert("Uw bestelling is geplaats");</script>';
                    echo '<script>window.location="index.php";</script>';
            }

        if(!isset($_SESSION['gebruikersnaam']))
            {
                //Als gebruiker niet is ingelogd
                echo '<script>alert("U moet ingelogd zijn om te kunnen bestellen.");</script>';
                echo '<script>window.location = "index.php";</script>';
            }
    }
?>
