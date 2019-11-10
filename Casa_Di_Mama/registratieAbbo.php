<?php include('Header.php');?>
<?php// include('functies.php');?>

<html>
<head>
	<title>Registreren Pizzeria Casa Di Mama</title>
        <link rel="stylesheet" a href="styling.css">
</head>
<body>
<style>.errorAbbo {color: #FF0000;}</style>
<div class="registratieOuter">

        <h2>Op welk dag wilt u uw pizza(s) laten bezorgen?</h2>
        <br> <span class="errorAbbo"> * verplicht veld</span> <br>
        <form action='verwerking_reg_form.php' method='post'>
          <input type="radio" name="dag" value="maandag" checked> Maandag<br>
          <input type="radio" name="dag" value="Dinsdag"> Dinsdag<br>
          <input type="radio" name="dag" value="Woensdag">Woensdag <br>
          <input type="radio" name="dag" value="Donderdag">Donderdag <br>
          <input type="radio" name="dag" value="Vrijdag">Vrijdag <br>
          <input type="radio" name="dag" value="Zaterdag">Zaterdag <br>
          <input type="radio" name="dag" value="Zondag">Zondag <br>
          <span class="errorAbbo"> *</span>

          <br><br>
           <h2>Hoelaat wilt u uw pizza thuisbezorgd hebben</h2>
           <span>
         <input type="time" name='tijd'>
           <span class="errorAbbo">*</span>

           <br><br>
          <h2>hoeveel pizzas wilt u hebben</h2>

          <input type="number" name="aantalpizza"
            min=1 >
           <span class="errorAbbo">*</span>

           <br><br>
         <h2>Kies uw pizza</h2>

           <select name='soort_pizza'>
             <option value="1">pizza salami</option>
             <option value="2">pizza peperoni</option>
           </select>
            <span class="errorAbbo">*</span>

            <br><br>


        <input type="submit" value="Verzenden" class="btn-login">
        </from>
</div>
</body>
</html>
<?php include('Footer.php');?>
