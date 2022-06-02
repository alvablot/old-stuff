<?php
header("Cache-Control: max-age=1, must-revalidate"); 
?>
<html>
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
<head>
<title>TMS Penalty Challenge</title>
<LINK rel="StyleSheet" type="text/css" href="../css/default.css">
<style>
body,table,tr,td,div,span{
	font:10px verdana;
}
a{font-weight:bold;}
body{background:url(logga.jpg); background-repeat:no-repeat;}
</style>
<script>
function tebax(){
	window.location='index.html'
}
function avbryt(){
	return false
}
document.oncontextmenu = avbryt
</script>
</head>

<body>
<br><br><br><br><br><br><br><br>
<?php
	$connection = mysql_connect("localhost", "", "") or die("Kunde inte skapa koppling!");
	mysql_select_db("masar_tabell",$connection) or die("Kunde inte välja databas");
$hamta = "SELECT * FROM spel ORDER BY poang DESC";
$resultat = mysql_query($hamta) or die("Det gick inte att hämta information från databasen!");

$i=1;
print "<h3>TIO I TOPP</h3>";
print '<table bgcolor=#999999 width=350 cellpadding=2 cellspacing=1><tr bgcolor=#cccccc><td><b class=blue>Rank</b></td><td><b class=blue>Namn</b></td><td><b class=blue>Poäng</b></td><td><b class=blue>Nivå</b></td></tr>';
while($rad = mysql_fetch_array($resultat)){
	if($i<11) {
	print '<tr bgcolor=#ffffff>';
	print '<td>' . $i . "</td>";
	print '<td>' . $rad["namn"] . "</td>";
	print '<td>' . $rad["poang"] . "</td>";
	print '<td>' . $rad["niva"] . "</td>";
	print '</tr>';
	}
	$i++;

}
print '</table>';
	mysql_close($connection);

print "<br>Spelet har spelats " . ($i).  " gånger";
?>
<br><br>
<a href="javascript:tebax()" style="border:1px solid #666666;padding:5px;">Spela!</a>

</body>
</html>
