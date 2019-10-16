

<!DOCTYPE html>
<html>

<body>
<style>.error {color: #FF0000;}</style>

<h2>Op welk dag wil je je pizza(s) laten bezorgen</h2>
<br>
<span class="error"> * verplicht veld</span>
<form action='verwerking_reg_form.php' method='post'>
  <input type="radio" name="dag" value="maandag" checked> Maandag<br>
  <input type="radio" name="dag" value="Dinsdag"> Dinsdag<br>
  <input type="radio" name="dag" value="Woensdag">Woensdag <br>
  <input type="radio" name="dag" value="Donderdag">Donderdag <br>
  <input type="radio" name="dag" value="Vrijdag">Vrijdag <br>
  <input type="radio" name="dag" value="Zaterdag">Zaterdag <br>
  <input type="radio" name="dag" value="Zondag">Zondag <br>
  <span class="error"> *</span>

    <br>
   <h2>Hoelaat wil je je pizza hebben</h2>
   <span>
 <input type="time" name='tijd'>
   <span class="error">*</span>

 <br>
  <h2>hoeveel pizzas wil je hebben</h2>

  <input type="number" name="aantalpizza"
    min=1 >
   <span class="error">*</span>

 <br>
 <h2>Kies je pizza</h2>

   <select name='soort_pizza'>
     <option value="1">pizza salami</option>
     <option value="2">pizza BBQ</option>
   </select>
    <span class="error">*</span>


  <br>
  <h2>Wat is jouw klant nummer</h2>

   <input type="tel" name="klantnr">
   <span class="error">*</span>

<input type="submit" value="Verzenden">
</from>
<?php





?>



</body>
</html>
