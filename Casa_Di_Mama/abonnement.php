<?php include('Header.php');?>
<html>
 <head>
     <link rel="stylesheet" type="text/css" href="styling.css">
 </head>

 <body>
<form>


<form action="/form1.html">

    <legend>Persoonlijke Informatie:</legend>

<form action="/form1.html">
  Voornaam:<br>
  <input type="text" name="voornaam" placeholder="Vul in" value="" required><br>
  <br>
  Achternaam:<br>
  <input type="text" name="achternaam" placeholder="Vul in" value="" required><br>
  <br><br>
</form>

<h2>Kies hier uw dag voor een pizza uit.</h2>

<input type="radio" name="dag" value="Maandag" required> Maandag<br>
<input type="radio" name="dag" value="Dinsdag" required> Dinsdag<br>
<input type="radio" name="dag" value="Woensdag" required> Woensdag<br>
<input type="radio" name="dag" value="Donderdag" required> Donderdag<br>
<input type="radio" name="dag" value="Vrijdag" required> Vrijdag<br>
<input type="radio" name="dag" value="Zaterdag" required> Zaterdag<br>
<input type="radio" name="dag" value="Zondag" required> Zondag<br>

<br>


<h2>Welke pizza wilt u?</h2>
<select name='soort_pizza'>
<option value="1">Salami</option>
<option value="2">BBQ</option>
<option value="3">Hawai</option>
</select>


<br>

<h2>Hoelang wilt u het abonnement actief hebben?</h2>
<input type="radio" name="abonnement" value="2 weken" required> 2 weken<br>
<input type="radio" name="abonnement" value="1 maand" required> 1 maand<br>
<input type="radio" name="abonnement" value="3 maand" required> 3 maand<br>
<input type="radio" name="abonnement" value="6 maand" required> 6 maand<br>
<input type="radio" name="abonnement" value="10 maand" required> 10 maand<br>
<input type="radio" name="abonnement" value="1 jaar" required> 1 jaar<br>
<input type="radio" name="abonnement" value="2 jaar" required> 2 jaar<br>

<br>
<h1>test</h1>
<h2>Hoeveel pizza's wilt u?</h2>
<input type="radio" name="aantal" value="1" required> 1<br>
<input type="radio" name="aantal" value="2" required> 2<br>
<input type="radio" name="aantal" value="3" required> 3<br>
<input type="radio" name="aantal" value="4" required> 4<br>
<input type="radio" name="aantal" value="5" required> 5<br>

<br> <input type="submit" value="Verzend"> <br>
<br>

<label for="appt">Kies een tijd voor uw bezorging:</label>

<input type="time" id="appt" name="appt"
       min="08:00" max="20:00" required>

<small>Openingstijd van 08:00 uur tot 20:00 uur.</small><br>


<a href="mailto:abonnement@CasaDiMama.nl?subject=Abonnement wijzigen/opzeggen">Als u het abonnement op wilt zeggen of wijzigen klik dan hier.</a>

</form>

</body>

</html>
<br><br><br><br><br><br>
<?php include('Footer.php');?>
