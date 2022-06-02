<?php
header("Cache-Control: max-age=1, must-revalidate");
$sort = $_GET["sortBy"];
?>
<html>
<head>
	<title>Untitled</title>
<style>
body,table,tr,td,div,span{
	font:10px verdana;
}
</style>
</head>

<body>
<?php
	$connection = mysql_connect("localhost", "masar_rossthebos", "rgfyp77") or die("Kunde inte skapa koppling!");
	mysql_select_db("masar_tabell",$connection) or die("Kunde inte välja databas");
$hamta = "SELECT * FROM spel ORDER BY $sort DESC";
$resultat = mysql_query($hamta) or die("Det gick inte att hämta information från databasen!");

$i=1;
print "TIO I TOPP<p>";
print '<table bgcolor=#eeeeee width=600><tr><td>Rank</td><td><a href="alla.php?sortBy=namn">Namn</a></td><td><a href="alla.php?sortBy=poang">Poäng</a></td><td><a href="alla.php?sortBy=niva">Nivå</a></td><td><a href="alla.php?sortBy=datum">Datum</a></td><td><a href="alla.php?sortBy=ip">IP</a></td></tr>';
while($rad = mysql_fetch_array($resultat)){

	print '<tr bgcolor=#ffffff>';
	print '<td>' . $i . "</td>";
	print '<td>' . $rad["namn"] . "</td>";
	print '<td>' . $rad["poang"] . "</td>";
	print '<td>' . $rad["niva"] . "</td>";
	print '<td>' . $rad["datum"] . "</td>";
	print '<td>' . $rad["ip"] . "</td>";
	print '</tr>';
	$i++;

}
print '</table>';
	mysql_close($connection);

print "<br>Spelet har spelats " . ($i-1) . " gånger";
?>
<br><br>
<a href="index.html">Spela!</a>

</body>
</html>
