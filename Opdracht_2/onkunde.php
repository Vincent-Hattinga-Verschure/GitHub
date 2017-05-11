<!DOCTYPE HTML>

<html>
<head>
<link href="form.css" rel="stylesheet" type="text/css" />
  <title>Formulier</title>
  <img src="Images/logo.png"
</head>

<body>

<div class="a1" >

<?php
  include 'menu.php';
?>


</div> 

<div class="a2" >
  <form method="post" action="mood2.php">
    
	  <p>
      <label>Wat zou je graag willen kunnen?</label>
      <input type="text" name="draw" />
    </p>
    
    <p>
      <label>Met welke persoon kun je goed opschieten?</label>
      <input type="text" name="person" />
    </p>
    
	<p>
      <label>Wat is je favoriete getal?</label>
      <input type="text" name="number" />
    </p>
	
	<p>
      <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
      <input type="text" name="thing" />
    </p>
	
	<p>
      <label>Wat is je beste persoonlijke eigenschap?</label>
      <input type="text" name="character" />
    </p>
	
	<p>
      <label>Wat is je slechste persoonlijke eigenschap?</label>
      <input type="text" name="disease" />
    </p>
	<p>
      <label>Wat is het ergste dat je kan overkomen?</label>
      <input type="text" name="draw" />
    </p>
	
    <p>
	  <label>&nbsp;</label>
      <input type="submit" value="Versturen" />
    </p>
  </form>
  </div>
</body>
</html>
