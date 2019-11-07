<?php
include 'db_conn.php';
  
    if(isset($_POST["add_to_cart"]))
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
          echo '<script>alert("product is al toegevoegddd");</script>';
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
    if(isset($_POST['Bestellen'])){
        header("Location: winkelwagen.php");
    //controleren of input gebruikersnaam is ingevuld
        if(isset($_SESSION['gebruikersnaam'])){
            //sql query maken
            $sql="insert into Bestelling (Totaalprijs, Klantnr, ProductID) VALUES (". $row['item_price']." ";
            echo $sql;
            //variable voor de connectie en sql query
            $result=mysqli_query($con, $sql);
        } else {
            echo 'Je bent niet ingelogd!';
        }
    }
?>