<?php include 'Header.php';include 'winkelwagen_code.php';?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Winkelwagen | Casa Di Mama</title>  
           <link rel="stylesheet" a href="styling.css">
      </head>  
      <body>
            <div class="tabelWinkelwagen">
                <h3>Winkelwagen</h3>   
                <table style="background-color:lightgrey;" border="1" align="Center">
                          <tr> 
                               <th width="40%">Productnaam</th>  
                               <th width="10%">Aantal</th>  
                               <th width="20%">Prijs</th>  
                               <th width="15%">Totaal</th>  
                               <th width="5%">Actie</th>  
                          </tr>  
                             <?php 
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                            $total = 0;
                            foreach($_SESSION["shopping_cart"] as $key => $value)
                           {

                             ?>
                          <tr> 
                               <td><?php echo $value['item_name'];?></td>  
                               <td><?php echo $value['item_quantity']; ?></td>  
                               <td>€<?php echo $value['item_price'];?></td>  
                               <td>€<?php echo number_format($value["item_quantity"] * $value["item_price"],2);?></td>  
                               <td><a href="winkelwagen_pagina.php?action=delete&id=<?php echo $value['item_id'];?>"><span>Verwijderen</span></a></td>  
                          </tr>  
                          <?php $total = $total + ($value["item_quantity"] * $value['item_price']);
                        }
                        ?>          
                          <tr>  
                               <td colspan="3" align="right">Totaal</td>  
                               <td align="right">€<?php echo number_format($total);?></td>  
                               <td><form method="POST" action="winkelwagen_code.php"> <input type="submit" name="bestellen" value="Bestellen"></form> </td>  
                          </tr> 
                          <?php } ?> 
                           
                     </table>  
                </div>  
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>
<?php include 'Footer.php'; ?>