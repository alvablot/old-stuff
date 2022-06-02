<!--
//////////////////////////////////////////////////////
// 													//
// 	Copyright Petter karlsson PK-Multimedia 2004	//
//													//
// 	www.pkm.nu										//
//													//
//	webmaster@tokigamasar.st						//
//													//
//////////////////////////////////////////////////////
-->

<?php
$ipadress = $_SERVER['REMOTE_ADDR'];
$today = date("Y-m-d H:i:s");
if(!empty($_GET['namn'])){
	$namn = $_GET['namn'];
	$points = $_GET['points'];
	$level = $_GET['level'];

	$connection = mysql_connect("localhost", "", "") or die("Kunde inte skapa koppling!");
	mysql_select_db("masar_tabell",$connection) or die("Kunde inte välja databas");
	
	$laggTill = "INSERT INTO spel(namn, poang, niva, datum, ip) VALUES ('$namn', '$points','$level','$today','$ipadress')";
	mysql_query($laggTill) or die("Det gick inte att lägga till information!");
	header("Location:visa_resultat.php");
	mysql_close($connection);

}

?>

<html>
<head>
	<title>Untitled</title>
</head>

<body>



</body>
</html>
