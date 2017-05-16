<?php
  // maak een verbinding met MySQL and database ip, username, w8woord, dbname
  $connection = mysqli_connect('localhost', 'root', '', 'helden');
?>

<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  
 </head>
<body>
 <div class="a2">
  <ul>
  <h1>landen</h1><p>
  <?php include 'menu.php';?>

   <table id='display'> 
  <?php
 
		echo "<tr>";
		echo "<th>Land</th>";
		echo "<th>Kracht</th>";		
		echo "</tr>";
		
 
// maak een query om alle spellen op te vragen
  $query = "select * from held"; 
  
  // voer de query uit
  // mysqli_query needs($link to db, $sql query)
  $result = mysqli_query($connection, $query);
  
  // loop door alle rijen heen
	while ($row = mysqli_fetch_assoc($result)) {
  // haal gegevens die we nodig hebben uit de rij
  $naam = $row["naam"];
  $land = $row["land"];
  $geboorteJaar = $row["geboortejaar"];
  $kracht = $row["kracht"];
	
    
  // maak een lijst item aan op de pagina
//  echo "<li>$naam, $land ($geboorteJaar)</li>\n";
   
		echo "<tr>";
		echo "<th>$land</th>";
		echo "<th>$kracht</th>";		
		echo "</tr>";
    
  
	}
?>
	</table>

</html>