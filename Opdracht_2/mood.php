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
  include 'menu2.php';
?>

	</div>
  <p>
	
	<div class="a2">	
		<h1>Er heerst paniek in het koninkrijk <?php echo $_POST["activity"]; ?>!</h1>
		<br>
    
		Koning
		<?php echo $_POST["person"]; ?>
		is ten einde raad en als koning ten einde raad is,
		dan roept hij zijn ten-einde-raadsheer
		<?php echo $_POST["country"]; ?>.<p> 
		Het is een ramp! Het is een schande!"<p>
		"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br>
		"Mijn 
		<?php echo $_POST["feeling"]; ?>
		is verdwenen! <p>
		Zo maar, zonder waarschuwing. En ik had net
		<?php echo $_POST["toy"]; ?><br>
		voor hem gekocht!


	
 </p>
  </div>

  
  </body>
  <footer>
  <p>Deze website is gemaakt door: Vincent Hattinga Verschure</p>
</html>


