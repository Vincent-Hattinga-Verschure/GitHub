<!DOCTYPE HTML>

<html>
<head>
<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
  <img src="Images/logo.png"
</head>

<body background="bgimage.jpg">

<div class="a1" >

<?php
  include 'menu.php';
?>


</div> 

<div class="a2" >
  <form method="post" action="mood.php">
    
	  <p>
      <label>Welk dier zou je nooit als huisdier willen?</label>
      <input type="text" name="activity" />
    </p>
    
    <p>
      <label>Typ de naam van de belangrijkste persoon in je leven?</label>
      <input type="text" name="person" />
    </p>
    
	<p>
      <label>In welk land zou je graag willen wonen?</label>
      <input type="text" name="country" />
    </p>
	
	<p>
      <label>Wat doe je als je je verveelt?</label>
      <input type="text" name="feeling" />
    </p>
	
	<p>
      <label>Met welk speelgoed speelde je vroeger het meest?</label>
      <input type="text" name="toy" />
    </p>
	
	<p>
      <label>Bij welke docent spijbel je het liefst?</label>
      <input type="text" name="instrument" />
    </p>
	
	<p>
      <label>Als je 100.000 euro zou hebben wat zou je dan kopen?</label>
      <input type="text" name="instrument" />
    </p>
	
	<p>
      <label>Wat is je favoriete bezigheid?</label>
      <input type="text" name="instrument" />
    </p>
    <p>
	  <label>&nbsp;</label>
      <input type="submit" value="Versturen" />
    </p>
  </form>
  </div>
</body>
</html>
