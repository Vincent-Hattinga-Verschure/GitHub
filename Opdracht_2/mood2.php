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
	
	
	Er zijn veel mensen die niet kunnen <?php echo $_POST["draw"]; ?>.
	Neem nou <?php echo $_POST["person"]; ?>.<p>
	Zelfs met behulp van een potlood kan 
	<?php echo $_POST["person"]; ?> dat nog niet. Of nog niet eens met 
	<?php echo $_POST["thing"]; ?>	
	en zelfs niet met <?php echo $_POST["number"]; ?> potloden. <p>
	Dat heeft niet te maken met een gebrek aan
	<?php echo $_POST["disease"]; ?>	 
	maar met een te veel aan 
    <?php echo $_POST["character"]; ?>.
	<p> Dus dat leidt tot
	<?php echo $_POST["disease"]; ?>
	en dat is niet goed als je wilt
	<?php echo $_POST["draw"]; ?>
	Helaas voor
	<?php echo $_POST["person"]; ?>
  </p>
  </div>
</body>
<footer>
  <p>Deze website is gemaakt door: Vincent Hattinga Verschure</p>
</html>


